<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\User;
class ProfileController extends Controller
{
    public function ProfileView(){

        $id =Auth::user()->id;
        $user = User::find($id);
        
        return view('admin.backend.profile.view_profile',compact('user'));
        
            }
        
        public function ProfileEdit(){
        
        
        
        
            $id =Auth::user()->id;
            $editdata = User::find($id);
            return view('admin.backend.profile.edit_profile',compact('editdata'));
        
        
        
        
        }
        
        
        public function ProfileUpdate(Request $request){
        
        
        
            $data = User::find(Auth::user()->id);
            $data->name=$request->name;
            $data->email=$request->email;
            $data->address=$request->address;
            $data->contact=$request->contact;
            $data->nid=$request->nid;
        
        if($request->file('image')){
        
        
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
        
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image']=$filename;
        
        }
        
        
        
        
            
            $data->save();
            
            $notification = array(
            
                'message' => 'profile Updated Successfully',
                'alert-type' => 'success'
            
            );
            
            
            
            return redirect()->route('profile.view')->with($notification);
        
        
        
        }
        
        
        
        public function PasswordView(){
        
        
        return view('admin.backend.profile.change_password');
        
        
        
        
        }
        
        
        
        public function PasswordUpdate(Request $request){
        $validateData = $request->validate([
        
            'current_password'=>'required',
            'password'=>'required|confirmed',
        
        
        ]);
        
        $hashedPassword = Auth::user()->password;
        if( Hash::check($request->current_password,$hashedPassword)) {
            $user = User::find(Auth::id());
        
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect()->route('login');
         
        }
        else{
        return redirect()->back();
        
        
        
        }
        
        
        
        
        }
}
