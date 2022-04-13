<?php

namespace App\Http\Controllers\moderator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\JobPosition;
use App\Role;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inst = Auth::user()->inst_id;

        return view('admin.user.index',[
            'users' => User::where('inst_id', $inst)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inst = Auth::user()->inst_id;

        return view('superAdmin.users.create',[        
            'jobs'=> JobPosition::where('inst_id', $inst)->get(),
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'inst_id' => ['required', 'integer'],
            'job_id' => ['required', 'integer'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
            'role_id' => Role::USER
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
