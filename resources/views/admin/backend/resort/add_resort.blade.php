@extends('admin.admin_master')
@section('admin')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Resort</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('resort.store')}}">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="true">

                                            </div>
                                        </div>
                                

                                        <div class="form-group">
                                            <h5>Contact <span class="text-danger"></span></h5>
                                            <div class="controls">
                                                <input type="text" name="contact" class="form-control"  >

                                            </div>
                                        </div>




                                    </div>


                                    <div class="col-md-6">




                                        <div class="form-group">
                                            <h5>Place <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="place" class="form-control" required="true"
                                                    aria-invalid="false">



                                                    <option value="" selected="" disabled="">Select Type</option>

                                                    @foreach ($destination as $key => $destinations)
                                                    <option value="{{ $destinations->name }}">{{ $destinations->name }}
                                                    </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                      


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