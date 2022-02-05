<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Restaurant;
use App\Models\Admin\Destination;

class RestaurantController extends Controller
{
    public function  RestaurantView(){

        $data['alldata'] = restaurant::all();
        return view('admin.backend.restaurant.view_restaurant',$data);
    
    }
    public function RestaurantAdd(){
       
        $destination['destination'] = destination::all();


        return  view('admin.backend.restaurant.add_restaurant')->with($destination);
        
        }

        public function RestaurantStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
             'contact'=>'required',
             'place'=>'required',
             'seats'=>'required',         
             'breakfast'=>'required',
             'launch'=>'required',
             'dinner'=>'required'
           
         
         
         ]);   
         
         $data = new Restaurant();
         $data->name=$request->name;
         $data->place=$request->place;
         $data->contact=$request->contact;

         $data->seats=$request->seats;
         $data->breakfast=$request->breakfast;
         $data->launch=$request->launch;
         $data->dinner=$request->dinner;
   
         
         
         $data->save();
         
         $notification = array(
         
             'message' => 'Restaurant Data Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('restaurant.view')->with($notification);
         
         
         
             }




             public function RestaurantEdit($id){

                $destination['destination'] = destination::all();


                $editData = Restaurant::find($id);

               return view('admin.backend.restaurant.edit_restaurant',compact('editData'))->with($destination);
 
        
            }





   
             public function RestaurantUpdate(Request $request,$id){



                $data = Restaurant::find($id);



                $data->name=$request->name;
                $data->place=$request->place;
                $data->contact=$request->contact;
                $data->seats=$request->seats;
                $data->breakfast=$request->breakfast;
                $data->launch=$request->launch;
                $data->dinner=$request->dinner;
          


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Restaurant Data Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('restaurant.view')->with($notification);
            
            
            
            }
            
            








             public function RestaurantDelete($id){

                $restaurants = Restaurant::find($id);
                $restaurants-> delete();
                
                
                $notification = array(
                    
                    'message' => 'Restaurant Data Deleted Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('restaurant.view')->with($notification);
                
                
                
                }


  }
