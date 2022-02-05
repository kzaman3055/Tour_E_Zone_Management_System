<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\RoomType;

class RoomTypeController extends Controller
{
    


    public function RoomTypeView(){

        $data['alldata'] = roomtype::all();
        return view('admin.backend.resort.view_roomtype',$data);
    
    }

    public function RoomTypeAdd(){

        return  view('admin.backend.resort.add_roomtype');
        
        }



        public function RoomTypeStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
            
         
         ]);   
         
         $data = new RoomType();
         
         $data->name=$request->name;
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Room Type Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('roomtype.view')->with($notification);
         
         
         
             }


             
         
             public function RoomTypeEdit($id){
                $editData = RoomType::find($id);
                return view('admin.backend.resort.edit_roomtype',compact('editData'));
        
            }





   
             public function RoomTypeUpdate(Request $request,$id){



                $data = RoomType::find($id);



                $data->name=$request->name;
               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Room Type Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('roomtype.view')->with($notification);
            
            
            
            }
            
            













    public function RoomTypeDelete($id){

        $room_types = RoomType::find($id);
        $room_types-> delete();
        
        
        $notification = array(
            
            'message' => 'Room Type Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('roomtype.view')->with($notification);
        
        
        
        }


}
