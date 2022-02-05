<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageInfo;

use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function PageInfoEdit(){


        return  view('admin.backend.page.edit_pageinfo');

    }


    public function Privacy(){


        return  view('front.backend.privacy');

    }
    public function About(){


        return  view('front.backend.about');

    }
    public function Contact(){


        return  view('front.backend.contact');

    }


  public function PageInfoUpdate(Request $request,$id){



                $data = PageInfo::find($id);



                $data->privacy=$request->privacy;
                $data->about=$request->about;
                $data->contact=$request->contact;

               


                
                $data->save();
                
                $notification = array(
                
                    'message' => 'Page Info Updated Successfully',
                    'alert-type' => 'success'
                
                );
                
                
                
                return redirect()->route('home')->with($notification);
            
            
            
            }
            
            







}
