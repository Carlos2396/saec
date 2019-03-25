<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\EmailVerificationRequest;
use App\Helpers\ResponseHelper;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use Validator;

use App\User;

class RegisterController extends Controller
{
    static $rules = [
        'id' => 'required|string|size:9|unique:users,id',
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'password' => 'required|string|min:6|max:30|confirmed'
    ];

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), self::$rules);

        if($validator->fails()) {
            return ResponseHelper::validationErrorResponse($validator->errors());
        }
        $data  = $request->all();
        $data['email'] = $data['id'].'@itesm.mx';

        $user = User::create($data);
        $user->confirmation_code = Uuid::uuid1();
        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole(env('DEFAULT_ROLE', null));

        try {
            $user->notify(new EmailVerificationRequest($user->confirmation_code));
        }
        catch(Exception $e) {
            $user->delete();
            return response()->json(null, 503);
        }

        return response()->json($user, 201);
    }
}
