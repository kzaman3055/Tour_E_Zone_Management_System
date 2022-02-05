<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Admin\Resort;
use App\Models\Admin\ResortRoom;
use App\Models\Admin\RoomType;
use App\Models\Admin\Destination;


class ResortController extends Controller
{
    

    public function  ResortView(){

        $data['alldata'] = resort::all();
        return view('admin.backend.resort.view_resort',$data);
    
    }

    public function ResortAdd(){
        $destination['destination'] = destination::all();


        return  view('admin.backend.resort.add_resort')->with($destination);
        
        }


    
        public function ResortStore(Request $request){

            $validateData=$request-> validate([
         
             'name'=>'required ',
             'contact'=>'nullable',
             'place'=>'required',
           
         
         
         ]);   
         
         $data = new Resort();
         $data->name=$request->name;
         $data->place=$request->place;
         $data->contact=$request->contact;

         
         $data->save();
         
         $notification = array(
         
             'message' => 'Resort Data Imserted Successfully',
             'alert-type' => 'success'
         
         );
         
         
         
         return redirect()->route('resort.view')->with($notification);
         
         
         
             }

             public function ResortEdit($id){


                $destination['destination'] = destination::all();

                $editData = Resort::find($id);
                return view('admin.backend.resort.edit_resort',compact('editData'))->with($destination);
        
            }

           

       
           

   
             public function ResortUpdate(Request $request,$id){



                $data = Resort::find($id);



                $data->name=$request->name;
                $data->place=$request->place;

               
                $data->contact=$request->contact;


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Room Type Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('roomtype.view')->with($notification);
            
            
            
            }




             public function ResortDelete($id){

                $resorts = Resort::find($id);
                
                $resorts-> delete();
                      try{
                DB::table("resort_rooms")->where("resort_id", $id)->delete();
                            }

                            catch (Throwable $e) {
                                report($e);
                        
                                return false;
                            }
                
                $notification = array(
                    
                    'message' => 'Resort Data Deleted Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('resort.view')->with($notification);
                
                
                
                }





                public function ResortRoomAdd($id){



                    $roomtypes['roomtypes'] = roomtype::all();
                    $ResortRoomData = Resort::find($id);
        
        
        
                    return view('admin.backend.resort.add_resortroom',compact('ResortRoomData'))->with($roomtypes);
            
                }
        


                public function ResortRoomStore(Request $request){

                    $resortroomCount = count($request->roomtype_name);
                    if ($resortroomCount !=NULL) {
                        for ($i=0; $i <$resortroomCount ; $i++) { 
                            $assign_resortroom = new ResortRoom();
                            $assign_resortroom->resort_id = $request->resort_id;
                            $assign_resortroom->roomtype_name = $request->roomtype_name[$i];
                            $assign_resortroom->totalroomno = $request->totalroomno[$i];
                            $assign_resortroom->feature = $request->feature[$i];

                            $assign_resortroom->B2B = $request->B2B[$i];
                            $assign_resortroom->B2C = $request->B2C[$i];
                            $assign_resortroom->save();
        
                        } // End For Loop
                    }// End If Condition
        
                    $notification = array(
                        'message' => 'Resort Room Inserted Successfully',
                        'alert-type' => 'success'
                    );
        
                    return redirect()->route('resort.view')->with($notification);
        
                }  // End Method 



           



              //  public function ResortRoomDetails($id){


    
                 //   $editData = Resort::find($id);

                //   $value= ResortRoom::where("resort_id", $editData)->get();
               // return view('backend.resort.view_resortroom',['datas'=>$value]);

               //    $data['alldata']=DB::table('resort_rooms')->where('resort_id', $editData)->get();
                //   return view('backend.resort.view_resortroom',$data)->with[$editData];


            
            //    }


            public function ResortRoomDetails($id){

            $data['alldata']=DB::table('resort_rooms')->where('resort_id', $id)->get();
               return view('admin.backend.resort.view_resortroom',$data);
            
            }


            public function ResortRoomEdit($id){



                $editData = ResortRoom::find($id);
                return view('admin.backend.resort.edit_resortroom',compact('editData'));
        
            }




            public function ResortRoomDelete($id){

                $resort_rooms = ResortRoom::find($id);
                
                $resort_rooms-> delete();
                     
                
                $notification = array(
                    
                    'message' => 'Resort Data Deleted Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('resort.view')->with($notification);
                
                
                
                }








                public function ResortRoomUpdate(Request $request,$id){



                    $data = ResortRoom::find($id);
    
    
    
                    $data->totalroomno=$request->totalroomno;
                    $data->feature=$request->feature;

                    $data->B2B=$request->B2B;

                    
                    $data->B2C=$request->B2C;
    
    
                    
                    $data->save();
                    
                    $notification = array(
                    
                        'message' => 'Room Type Updated Successfully',
                        'alert-type' => 'success'
                    
                    );
                    
                    
                    
                    return redirect()->route('resort.view')->with($notification);
                
                
                
                }
















}
