<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PackageType;

class PackageTypeController extends Controller
{
    public function PackageTypeView(){

        $data['alldata'] = packagetype::all();
        return view('admin.backend.package.view_packagetype',$data);
    
    }

    public function PackageTypeAdd(){

        return  view('admin.backend.package.add_packagetype');
        
        }


        public function PackageTypeStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
            
         
         ]);   
         
         $data = new PackageType();
         
         $data->name=$request->name;
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Package Type Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('packagetype.view')->with($notification);
         
         
         
             }



             public function PackageTypeEdit($id){
                $editData = PackageType::find($id);
                return view('admin.backend.package.edit_packagetype',compact('editData'));
        
            }


            public function PackageTypeUpdate(Request $request,$id){



                $data = PackageType::find($id);



                $data->name=$request->name;
               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Package Type Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('packagetype.view')->with($notification);
            
            
            
            }
            
            



             public function PackageTypeDelete($id){

                $package_types = PackageType::find($id);
                $package_types-> delete();
                
                
                $notification = array(
                    
                    'message' => 'Package Type Deleted Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('packagetype.view')->with($notification);
                
                
                
                }
        
}
