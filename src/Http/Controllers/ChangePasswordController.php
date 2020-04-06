<?php

namespace Winnie\LaravelChangePassword\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

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

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        // TODO: toaster message
        return redirect(
            config('laravelchangepassword.redirectTo')
        );
    }

}
