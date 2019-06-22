<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\institutions;
class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.institutions.index',[
            'institutions' => institutions::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.institutions.create',[
            'institutions'=>[]            
        ]);
    }

    
    public function store(Request $request)
    {
        institutions::create($request->all());

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
