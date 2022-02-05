<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User\Booking;  

class BookingController extends Controller
{
    public function BookingView(){

        $data['alldata'] = booking::all();
        return view('admin.backend.booking.view_booking',$data);
    
    }

  










    

             public function BookingEdit($id){
                $editData = Booking::find($id);
                return view('admin.backend.booking.edit_booking',compact('editData'));
        
            }


            public function BookingUpdate(Request $request,$id){



                $data = Booking::find($id);

$data->todate=$request->todate;
                $data->admin_comment=$request->admin_commnet;

                $data->status=$request->status;
                $data->Payment_type=$request->Payment_type;


                $data->transaction_id=$request->transaction_id;

                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Data Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('booking.view')->with($notification);
            
            
            
            }
            
            


             public function BookingDelete($id){

                $booking = Booking::find($id);
                $booking-> delete();
                
                
                $notification = array(
                    
                    'message' => 'Data Deleted Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('booking.view')->with($notification);
                
                
                
                }
    }
