<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TransportType;


class TransportTypeController extends Controller
{
   

    public function TransportTypeView(){

        $data['alldata'] = transporttype::all();
        return view('admin.backend.transport.view_transporttype',$data);
    
    }

    public function TransportTypeAdd(){

        return  view('admin.backend.transport.add_transporttype');
        
        }



        public function TransportTypeStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
            
         
         ]);   
         
         $data = new TransportType();
         
         $data->name=$request->name;
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Transport Type Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('transporttype.view')->with($notification);
         
         
         
             }


             
         
             public function TransportTypeEdit($id){
                $editData = TransportType::find($id);
                return view('admin.backend.transport.edit_transporttype',compact('editData'));
        
            }





   
             public function TransportTypeUpdate(Request $request,$id){



                $data = TransportType::find($id);



                $data->name=$request->name;
               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Transport Type Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('transporttype.view')->with($notification);
            
            
            
            }
            
            













    public function TransportTypeDelete($id){

        $transport_types = TransportType::find($id);
        $transport_types-> delete();
        
        
        $notification = array(
            
            'message' => 'Transport Type Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('transporttype.view')->with($notification);
        
        
        
        }

}
