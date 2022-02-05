@extends('admin.admin_master')
@section('admin')

@php
       $pagedata=DB::table('page_infos')->where('id', 1)->get();

@endphp


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update Page Information</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            @foreach ($pagedata as $data)

                            <form method="post" action="{{route('pageinfo.update',$data->id)}}">
                                @csrf
                                <div class="row">




                                    <div class="col-md-12">



                                        <div class="form-group">
                                            <h5>Privacy<span class="text-danger">*</span></h5>

                                            <textarea rows="10" cols="5" name="privacy" class="form-control" required='true' > {{$data->privacy}}</textarea>
                                        </div>                                      
  
                                        <div class="form-group">
                                            <h5>About<span class="text-danger">*</span></h5>
                                            <textarea rows="10" cols="5"name="about" class="form-control" required='true' > {{$data->about}}</textarea>
                                        </div> 



                                        <div class="form-group">
                                            <h5>Contact<span class="text-danger">*</span></h5>
                                            <textarea rows="10" cols="5"name="contact" class="form-control" required='true' >{{$data->contact}}</textarea>
                                        </div> 



                                        @endforeach



                                        <div class="text-xs-right">
                                            <input type="submit" value="Submit" style="float: right"
                                                class="btn btn-outline btn-rounded btn-success mb-5">
                                        </div>



                                    </div>






                                </div>














                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>












    </div>
</div>
<!-- /.content-wrapper -->












@endsection