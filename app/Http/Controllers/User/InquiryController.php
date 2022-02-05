<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Inquiry;  

class InquiryController extends Controller
{





    public function InquiryView(){

        $data['alldata'] = Inquiry::all();
        return view('admin.backend.inquiry.view_inquiry',$data);
    
    }


    public function InquiryDelete($id){

        $data = Inquiry::find($id);
        $data-> delete();
        
        
        $notification = array(
            
            'message' => 'Data Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('inquiry.view')->with($notification);
        
        
        
        }






    public function InquiryStore(Request $request){

        $validateData=$request-> validate([
     
         'name'=>'required ',
         'contact'=>'required',
         'email'=>'required',
         'subject'=>'required',
         'description'=>'required',

       
     
     
     ]);   
     
     $data = new Inquiry();
     $data->name=$request->name;
     $data->email=$request->email;
     $data->contact=$request->contact;
     $data->subject=$request->subject;
     $data->description=$request->description;



     
     $data->save();
     
     $notification = array(
     
         'message' => 'Thank your for your Inquiry. We will Contact With you!!!',
         'alert-type' => 'success'
     
     );
     
     
     
     return redirect()->route('home')->with($notification);
     
     
     
         }
}
