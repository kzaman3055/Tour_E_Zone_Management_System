<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use App\Models\User;  
class UserController extends Controller
{
    
    public function Logout(){
        Auth::logout();
        return redirect()->route('home');
   
}
public function UserView(){
    $data['alldata'] = user::all()->where('is_admin',0);
    return view('admin.backend.profile.view_user',$data);
    }
    public function UserDelete($id){
    
        $user = User::find($id);
        $user-> delete();
        
        
        $notification = array(
            
            'message' => 'User Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('user.view')->with($notification);
        
        
        
        }

  
}
