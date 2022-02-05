<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Destination;


class DestinationController extends Controller
{
    public function DestinationView(){

        $data['alldata'] = destination::all();
        return view('admin.backend.destination.view_destination',$data);
    
    }


    public function DestinationAdd(){

        return  view('admin.backend.destination.add_destination');
        
        }



        public function DestinationStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
            
         
         ]);   
         
         $data = new Destination();
         
         $data->name=$request->name;
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Destination Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('destination.view')->with($notification);
         
         
         
             }


                      
             public function DestinationEdit($id){
                $editData = Destination::find($id);
                return view('admin.backend.destination.edit_destination',compact('editData'));
        
            }





   
             public function DestinationUpdate(Request $request,$id){



                $data = Destination::find($id);



                $data->name=$request->name;
               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Destination Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('destination.view')->with($notification);
            
            
            
            }
            
            



    public function DestinationDelete($id){

        $destinations = Destination::find($id);
        $destinations-> delete();
        
        
        $notification = array(
            
            'message' => 'Destination Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('destination.view')->with($notification);
        
        
        
        }








}
