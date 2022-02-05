<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TransportCategory;


class TransportCategoryController extends Controller
{
    public function TransportCategoryView(){

        $data['alldata'] = transportcategory::all();
        return view('admin.backend.transport.view_transportcategory',$data);
    
    }


    public function TransportCategoryAdd(){

        return  view('admin.backend.transport.add_transportcategory');
        
        }

        public function TransportCategoryStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
            
         
         ]);   
         
         $data = new TransportCategory();
         
         $data->name=$request->name;
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Transport Type Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('transportcategory.view')->with($notification);
         
         
         
             }








  public function TransportCategoryEdit($id){
                $editData = TransportCategory::find($id);
                return view('admin.backend.transport.edit_transportcategory',compact('editData'));
        
            }





   
             public function TransportCategoryUpdate(Request $request,$id){



                $data = TransportCategory::find($id);



                $data->name=$request->name;
               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Transport Type Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('transportcategory.view')->with($notification);
            
            
            
            }











    public function TransportCategoryDelete($id){

        $transport_categories = TransportCategory::find($id);
        $transport_categories-> delete();
        
        
        $notification = array(
            
            'message' => 'Transport Category Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('transportcategory.view')->with($notification);
        
        
        
        }





}
