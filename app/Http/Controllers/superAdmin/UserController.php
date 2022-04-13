<?php

namespace App\Http\Controllers\superAdmin;

use App\User;
use App\Institution;
use App\JobPosition;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\admin\UserController as AdminUserController;

class UserController extends AdminUserController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superAdmin.users.index',[
            'users' => User::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superAdmin.users.create',[
            'institutions' => Institution::all(),
            'roles'        => Role::getRolesforAdmin(),
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'institut_id'  => ['required', 'integer'],
            'job_id'       => ['required', 'integer'],
            'role_id'      => ['required', 'integer'],
            'password'     => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        
        User::create([
            'name'         => $request['name'],
            'email'        => $request['email'],
            'password'     => Hash::make($request['password']),
            'inst_id'      => $request['institut_id'],
            'job_id'       => $request['job_id'],
            'role_id'      => $request['role_id']
        ]);

        return redirect()->route('superAdmin.users.index');
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
