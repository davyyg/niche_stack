<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Model\Groups;
use Session;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Groups::all();

        return view('admin.home.groups')->with('list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.home.add_groups');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
               'group_name' => 'required'
           ]);

        $group = new Groups;
    
        $group->group_name = $request->group_name;
        $group->save();

        Session::flash('flash', 'Successfully add data');

        return view('admin.home.add_groups');

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

        $data = Groups::find($id);    
        
        return view('admin.home.edit_groups')->with('list', $data);
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

        $group = Groups::find($id);

        $this->validate($request, [
            'group_name' => 'required',
        ]);
        
        $group->group_name = $request->group_name;

        $group->update();

        Session::flash('flash', 'Successfully save data');

        $data =  Groups::find($id);

        return view('admin.home.edit_groups')->with('list', $data);

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

        $mark = Groups::where('id', $id)->delete(); 
        $data = Groups::all();   

        if($mark == true){
            Session::flash('flash', 'Successfully delete data');
        }
        
        return view('admin.home.groups')->with('list', $data);
    }
}
