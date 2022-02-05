<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Package;  
use App\Models\Admin\TransportType;
use App\Models\Admin\PackageType;
use App\Models\Admin\Destination;

class PackageController extends Controller
{



    public function PackageView(){

        $data['alldata'] = package::all();
        return view('admin.backend.package.view_package',$data);
    
    }

    public function PackageAdd(){

        $packagedata['packagedata'] = packagetype::all();
        $transportdata['transportdata'] = transporttype::all();
        $destination['destination'] = destination::all();

        return  view('admin.backend.package.add_package',$packagedata , $transportdata)->with($destination);
        
        }



        public function PackageStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
             'image'=>'nullable',
             'place'=>'required',
             'type'=>'required',
             'price'=>'required',
             'transport'=>'required',
             'feature'=>'required',
             'detail'=>'required',
             'availability'=>'required',

         
         
         ]);   
         
         $data = new Package();
         
         $data->name=$request->name;
         $data->place=$request->place;
         $data->type=$request->type;
         $data->price=$request->price;
         $data->availability=$request->availability;

         $data->transport=$request->transport;
         $data->feature=$request->feature;
         $data->detail=$request->detail;


               
        if($request->file('image')){
        
        
            $file = $request->file('image');
            @unlink(public_path('upload/package_images/'.$data->image));
        
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/package_images'),$filename);
            $data['image']=$filename;
        
        }
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Package Data Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('package.view')->with($notification);
         
         
         
             }
         
             public function PackageEdit($id){


                $packagedata['packagedata'] = packagetype::all();

                $transportdata['transportdata'] = transporttype::all();
                $destination['destination'] = destination::all();

                $editData = Package::find($id);

               return view('admin.backend.package.edit_package',compact('editData'))->with($packagedata)->with($transportdata)->with($destination);
 
        
            }





   
             public function PackageUpdate(Request $request,$id){



                $data = Package::find($id);



                $data->name=$request->name;
                $data->place=$request->place;
                $data->type=$request->type;
                $data->price=$request->price;
                $data->transport=$request->transport;

                $data->feature=$request->feature;
                $data->detail=$request->detail;
                $data->availability=$request->availability;





                if($request->file('image')){
        
        
                    $file = $request->file('image');
                    @unlink(public_path('upload/package_images/'.$data->image));
                
                    $filename=date('YmdHi').$file->getClientOriginalName();
                    $file->move(public_path('upload/package_images'),$filename);
                    $data['image']=$filename;
                
                }


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Package Data Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('package.view')->with($notification);
            
            
            
            }
            
            


    public function PackageDelete($id){

        $packages = Package::find($id);
        $packages-> delete();
        
        
        $notification = array(
            
            'message' => 'Client Data Deleted Successfully',
            'alert-type' => 'success'
        
        );
        
        
        
        return redirect()->route('package.view')->with($notification);
        
        
        
        }


}
