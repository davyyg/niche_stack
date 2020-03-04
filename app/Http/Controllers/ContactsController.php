<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Model\Contacts;
use App\Model\Groups;
use Session;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Contacts::with('group')->get();  

        return view('admin.home.contacts')->with('list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Groups::all();

        return view('admin.home.add_contacts')->with('list', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // slides: 2000 x 600 px
        $this->validate($request, [
               'avatar' => 'required|image|mimes:jpg,jpeg,png|max:10000|dimensions:min_width=200,min_height=200,max_width=250,max_height=250',
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'country' => 'required',
                'email' => 'required',
                'phone' => 'required'
           ]);

        $contacts = new Contacts;
        $contacts->avatar = $request->avatar;
        
        // $file = $request->file('slides');
             
        //storage/app/slides/random.jpeg
        $path = $request->file('avatar')->store('public/avatar');
            
        Log::info('path :'.$path);

        $contacts->group_id = $request->group_id;
        $contacts->avatar = $path;    
        $contacts->first_name = $request->first_name;
        $contacts->last_name = $request->last_name;
        $contacts->address = $request->address;
        $contacts->city = $request->city;
        $contacts->zip = $request->zip;
        $contacts->country = $request->country;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->note = $request->note;

        $contacts->save();

        Session::flash('flash', 'Successfully add data');

        $data = Groups::all();

        return view('admin.home.add_contacts')->with('list', $data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // not neccessary
       
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

        $groups = Groups::all();
        $data = Contacts::find($id);    
       
        return view('admin.home.edit_contacts')->with(['list' => $data, 'glist' => $groups]);
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
        $id = $request->id;
        $contacts = Contacts::find($id);

        if($contacts->avatar){

            $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'country' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);

        }else{

            $this->validate($request, [
                'avatar' => 'required|image|mimes:jpg,jpeg,png|max:10000|dimensions:min_width=200,min_height=200,max_width=250,max_height=250',
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'country' => 'required',
                'email' => 'required',
                'phone' => 'required'
            ]);

        }
        
        $contacts->group_id = $request->group_id;

        $file = $request->file('avatar');
            
        if($file)
        {
            
            //storage/app
            Storage::delete($contacts->avatar);
            
            //storage/app/avatar/random.jpeg
            $path = $request->file('avatar')->store('public/avatar');
            
            Log::info('path :'.$path);

            $contacts->avatar = $path;

        }

        $contacts->first_name = $request->first_name;
        $contacts->last_name = $request->last_name;
        $contacts->address = $request->address;
        $contacts->city = $request->city;
        $contacts->zip = $request->zip;
        $contacts->country = $request->country;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->note = $request->note;

        $contacts->update();

        Session::flash('flash', 'Successfully save data');
           
        $data = Contacts::find($id);

        //return view('admin.home.edit_contacts')->with('list', $data);
        return redirect('contacts');
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

        $mark = Contacts::where('id', $id)->delete(); 
        $data = Contacts::all();   

        if($mark == true){
            Session::flash('flash', 'Successfully delete data');
        }
        
        return view('admin.home.contacts')->with('list', $data);

    }
}
