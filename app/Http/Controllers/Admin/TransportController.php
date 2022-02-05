<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Transport;  
use App\Models\Admin\TransportType;
use App\Models\Admin\TransportCategory;
use App\Models\Admin\Destination;

class TransportController extends Controller
{
    
   
    
    public function TransportView(){

        $data['alldata'] = transport::all();
        return view('admin.backend.transport.view_transport',$data);
    
    }


    public function TransportAdd(){
        $transporttype['transporttype'] = transporttype::all();
        $transportcategory['transportcategory'] = transportcategory::all();
        $destination['destination'] = destination::all();


        return  view('admin.backend.transport.add_transport',$transporttype,$transportcategory)->with($destination);
        
        }


 public function TransportStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
             'type'=>'required',
             'category'=>'required',         
             'destination'=>'required',
             'availability'=>'required',
             'driver_name'=>'required',
             'driver_contact'=>'required',
             'rag_no'=>'required',
             'price_BtoB'=>'required',
             'price_BtoC'=>'required'

         
         
         ]);   
         
         $data = new Transport();
         $data->name=$request->name;
         $data->type=$request->type;
         $data->category=$request->category;
         $data->destination=$request->destination;
         $data->availability=$request->availability;
         $data->driver_name=$request->driver_name;
         $data->driver_contact=$request->driver_contact;
         $data->rag_no=$request->rag_no;
         $data->price_BtoB=$request->price_BtoB;
         $data->price_BtoC=$request->price_BtoC;
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Transport Data Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('transport.view')->with($notification);
         
         
         
             }

             public function TransportEdit($id){


                $transporttype['transporttype'] = transporttype::all();
                $transportcategory['transportcategory'] = transportcategory::all();
                $destination['destination'] = destination::all();

                $editData = Transport::find($id);

               return view('admin.backend.transport.edit_transport',compact('editData'))->with($transporttype)->with($transportcategory)->with($destination);
 
        
            }


            public function TransportUpdate(Request $request,$id){



                $data = Transport::find($id);



                $data->name=$request->name;
                $data->type=$request->type;
                $data->category=$request->category;
                $data->destination=$request->destination;
                $data->availability=$request->availability;
                $data->driver_name=$request->driver_name;
                $data->driver_contact=$request->driver_contact;
                $data->rag_no=$request->rag_no;
                $data->price_BtoB=$request->price_BtoB;
                $data->price_BtoC=$request->price_BtoC;



                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Transport Data Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('transport.view')->with($notification);
            
            
            
            }



             public function TransportDelete($id){

                $transports = Transport::find($id);
                $transports-> delete();
                
                
                $notification = array(
                    
                    'message' => 'Transport Data Deleted Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('transport.view')->with($notification);
                
                
                
                }


}
