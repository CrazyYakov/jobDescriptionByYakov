<?php

namespace App\Http\Controllers\superAdmin;

use App\Institution;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superAdmin.institutions.index',[
            'institutions' => Institution::paginate(10)
        ]);
    }

    public function create()
    {
        return view('superAdmin.institutions.create',[
            'institutions'=>[]            
        ]);
    }

    
    public function store(Request $request)
    {
        Institution::create([
            'name' => $request['institut'],
            'description'=> $request['description'],
        ]);

        return redirect()->route('superAdmin.institutions.index');
    }

  
    public function show($id)
    {
        //
    }

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
