<?php

namespace Winnie\LaravelChangePassword\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('winnie::auth.passwords.change');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $userId = auth()->user()->id;
        $user = User::findOrFail($userId);

        $validator = Validator::make(
            $request->all(), 
            $this->rules()
        );

        if ( $this->enableCurrentPassword() ) {
            if ( !Hash::check($request->old_password, $user->password) ) {
                $validator->after(function ($validator) {
                    $validator->errors()->add(
                        'old_password', 
                        config('laravelchangepassword.current_password_error_msg')
                    );
                });
            }
        }

        //run validation which will redirect on failure
        $validator->validate();

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        toastr()->success(config('laravelchangepassword.current_password_success_msg'));

        return redirect(
            config('laravelchangepassword.redirect_to')
        );
    }

    /**
     * Change password validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        $return = [
            'password' => 'required|confirmed|min:8'
        ];

        if ( $this->enableCurrentPassword() ) {
            $return['old_password'] = 'required';
        }

        return $return;
    }

    /**
     * Change password validation rules.
     *
     * @return array
     */
    protected function enableCurrentPassword()
    {
        return config('laravelchangepassword.enable_current_password');
    }

}

/*
    TODO:: readme
    TODO:: publish views
*/