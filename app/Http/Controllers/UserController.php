<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    public function user()
    {
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list',$data);
    }

    public function add_user(Request $request)
    {
       
        return view('backend.user.add');
    }
    public function insert_user(Request $request)
    {
        request()->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'mobile' =>'required|unique:users',
            'password' =>'required'

        ]);
       
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->mobile = trim($request->mobile);
        $save->password = Hash::make($request->password);
        $save->retype_password 	= Hash::make($request->confirmPassword);
        $save->status = trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success',"User successfully created");
    }

    public function edit_user($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit',$data);
    }
    public function update_user($id, Request $request)
    {    
        request()->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users,email,'.$id,
            'mobile' =>'required|unique:users,mobile,'.$id
           

        ]);

        $save = User::getSingle($id);
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->mobile = trim($request->mobile);
        if(!empty($request->password))
        {
            $save->password = Hash::make($request->password);
        }
        if(!empty($request->confirmPassword))
        {
            $save->retype_password	= Hash::make($request->confirmPassword );
        }
       
       
        $save->status = trim($request->status);
        $save->save();

        return redirect('panel/user/list')->with('success',"User successfully Updated");
       
    }
    public function delete_user($id)
    {
        $save = User::getSingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect()->back()->with('success',"User successfully deleted");

    }
    

}
