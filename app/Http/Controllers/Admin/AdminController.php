<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use App\Models\User;  


class AdminController extends Controller
{
    

    public function AdminView(){
        $data['alldata'] = user::all()->where('is_admin',1);
        return view('admin.backend.profile.view_admin',$data);
        }
        
        public function Logout(){
                Auth::logout();
                return redirect()->route('home');
             /*  return Redirect()->route('login');*/
        }
    
        public function AdminAdd(){

            return  view('admin.backend.admin.add_admin');
            
            }
    
    
    
            public function AdminStore(Request $request){
    
                $validateData=$request-> validate([
             
                 'name'=>'required ',
                 'email'=>'required ',
                'is_admin'=>'required ',
                'password'=>'required ',
                
             
             ]);   
             
             $data = new User();
             
             $data->name=$request->name;
             $data->email=$request->email;
             $data->is_admin=$request->is_admin;
             $data->password=Hash::make($request->password);
             
             $data->save();
             
             $notification = array(
             
                 'message' => 'New Admin added Successfully',
                 'alert-type' => 'success'
             
             );
             
             
             
             return redirect()->route('admin.view')->with($notification);
             
             
             
                 }
    
        public function AdminDelete($id){
    
            $user = User::find($id);
            $user-> delete();
            
            
            $notification = array(
                
                'message' => 'Admin Data Deleted Successfully',
                'alert-type' => 'success'
            
            );
            
            
            
            return redirect()->route('admin.view')->with($notification);
            
            
            
            }
    
    
    
    


}
