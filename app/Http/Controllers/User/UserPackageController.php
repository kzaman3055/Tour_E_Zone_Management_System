<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  
use Auth;
use DB;
use App\Models\Admin\Package;  
use App\Models\User\Sale;  
use App\Models\User\Booking;  
use App\Notifications\NewBooking;
use Illuminate\Support\Facades\Notification;

use App\Models\Admin\Destination;

class UserPackageController extends Controller
{



    //new work
    public function PackageList(){
        $data['alldata'] = package::all();
        return view('front.backend.packagelist',$data);
    
    }
    
    public function Purchasehistory(){

        $user =Auth::user()->id;
        $value = ['Paid','Cancelled'];
        $data['alldata'] = DB::table('bookings')->where('user_id',$user)->where(function($query) {
            $query->where('status', 'Paid')
              ->orWhere('status', 'Cancelled');

              
              


          })->get();

        return view('front.backend.purchase_history',$data);
    
    }
    public function PendingBooking(){

        $user =Auth::user()->id;

        $data['alldata'] = booking::all()->where('user_id',$user)->where('status','Pending');



        $value = ['Pending','confirmed'];
        $data['alldata'] = DB::table('bookings')->where('user_id',$user)->where(function($query) {
            $query->where('status', 'Pending')
              ->orWhere('status', 'confirmed');

              
              


          })->get();

        return view('front.backend.pending_booking',$data);
    
    }


   


    public function PackageDetails($id){


        $data = Package::find($id);
        return view('front.backend.packagedetails',compact('data'));
    
    }






 
    public function PackageBooking(Request $request){

        $validateData=$request-> validate([
     
         'user_id'=>'required ',
         'user_name'=>'nullable',
         'user_contact'=>'nullable',
         'user_email'=>'nullable',
         'package_name'=>'nullable',
         'package_type'=>'nullable',

         'package_price'=>'nullable',
         'status'=>'nullable',
         'fromdate'=>'nullable',
         'todate'=>'nullable',
         'user_comment'=>'nullable',
       
     
     
     ]);
     
     $package_id = (int)$request->package_id;
     $package = package::find($package_id);
     
     $data = new Booking();
     $data->user_id=$request->user_id;
     $data->user_name=$request->user_name;
     $data->user_contact=$request->user_contact;
     $data->user_email=$request->user_email;
     $data->package_name=$package->name;
     $data->package_type=$package->type;

     $data->package_price=$package->price;
     $data->fromdate=$request->fromdate;
     $data->todate=$request->todate;
     $data->user_comment=$request->user_comment;

     $data->status=$request->status;
    
     
     $data->save();
     $users= User::where('is_admin','1')->get();
     Notification::send($users,new NewBooking($data));
     
     $notification = array(
             
        'message' => 'Booking added Successfully',
        'alert-type' => 'success'
    
    );
     
     

     return redirect()->route('pendingbooking.view')->with($notification);
     
     
     
         }


         public function PendingBookingCancel($id){

            $booking = Booking::find($id);
            $booking-> delete();
            
         
            
            $notification = array(
             
                'message' => 'Booking Cancelled Successfully',
                'alert-type' => 'success'
            
            );
            
            return redirect()->route('pendingbooking.view')->with($notification);
            
            
            
            }





    //new work end




    public function PackageView(){
        $data['alldata'] = package::all();
        return view('user.backend.package.view_package',$data);
    
    }

    public function PendingPackageView(){
        $user =Auth::user()->id;

        $data['alldata'] = sale::all()->where('user_id',$user)->where('payment_status','Pending');
        return view('user.backend.package.view_pendingpackage',$data);
    
    }

    public function PendingHistoryView(){
        $user =Auth::user()->id;

        $data['alldata'] = sale::all()->where('user_id',$user)->where('payment_status','Paid');
        return view('user.backend.package.view_packagehistory',$data);
    
    }

    public function UserBuyAdd($id){



        


        $user =Auth::user();
    
        $package['package'] = package::find($id);
    
    
    
        return view('user.backend.package.add_userbuy',compact('user'))->with($package);
    
    }



    public function UserBuyStore(Request $request){

        $validateData=$request-> validate([
     
         'user_id'=>'required ',
         'user_name'=>'nullable',
         'user_contact'=>'nullable',
         'user_email'=>'nullable',
         'package_name'=>'nullable',
         'package_price'=>'nullable',
         'quantity'=> 'nullable',
         'total_cost'=> 'nullable',

         'transection_id'=>'nullable',
         'payment_type'=>'nullable',
         'payment_status'=>'nullable',
    
    
       
     
     
     ]);
     
     $package_id = (int)$request->package_id;
     $package = package::find($package_id);
     
     $data = new Sale();
     $data->user_id=$request->user_id;
     $data->user_name=$request->user_name;
     $data->user_contact=$request->user_contact;
     $data->user_email=$request->user_email;
     $data->package_name=$package->name;
     $data->package_price=$package->price;
     $data->transection_id=$request->transection_id;
     $data->quantity=$request->quantity;
     $data->total_cost=$package->price*$request->quantity;


     $data->payment_type=$request->payment_type;
     $data->payment_status=$request->payment_status;
    
     
     $data->save();
     
     $notification = array(
     
         'message' => 'submittet Successfully',
         'alert-type' => 'success'
     
     );
     
     
     
     return redirect()->route('pendingpackage.view')->with($notification);
     
     
     
         }




         public function PendingPackageCancel($id){

            $sale = Sale::find($id);
            $sale-> delete();
            
            
            $notification = array(
                
                'message' => 'Cancel Successfully',
                'alert-type' => 'success'
            
            );
            
            
            
            return redirect()->route('pendingpackage.view')->with($notification);
            
            
            
            }






}
