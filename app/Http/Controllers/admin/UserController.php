<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\JobPosition;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\moderator\UserController as ModeratorUserController;
use Illuminate\Support\Facades\Auth;

class UserController extends ModeratorUserController
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inst = Auth::user()->inst_id;

        return view('admin.user.create',[            
            'jobs' => JobPosition::where('inst_id', $inst)->get(),
            'roles'=> Role::getRolesforAdmin(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $inst = Auth::user()->inst_id;

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'inst_id' => $inst,
            'job_id' => $request['job_id'],
            'role_id' => $request['role_id'],
        ]);

        return redirect()->route('admin.user.index');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'inst_id' => ['required', 'integer'],
            'job_id' => ['required', 'integer'],
            'role_id' => ['required', 'integer', 'min:2', 'max:3'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
