@extends('user.user_master')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Manage Profile</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{route('userprofile.update')}}" enctype="multipart/form-data">
                                   @csrf
                                            <div class="row">



                                                <div class="col-md-6">




                                                <div class="form-group">
                                                        <h5>Profile Pic <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" class="form-control" id="image">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">

                                                        <img id="showimage" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg') }}"
                                                        style ="width: 100px; width: 100px; border: 1px solid #000000;">

                                                    </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <h5>Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                              value="{{$editdata->name}}"  required="">
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                            value="{{$editdata->email}}"   required="">
                                                        </div>
                                                    </div>

                                                  




                                                </div>


                                                <div class="col-md-6">



                                                <div class="form-group">
                                                        <h5>Contact <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="tel" name="contact" class="form-control" 
                                                            value="{{$editdata->contact}}"    required="">
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <h5>Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="address" class="form-control"
                                                            value="{{$editdata->address}}"    required="">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <h5>NID <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="nid" class="form-control"
                                                            value="{{$editdata->nid}}"  required="">
                                                        </div>
                                                    </div>




                                                  


                                                    <div class="text-xs-right">
                                                        <input type="submit" value="Update" style="float: right"
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





<script type="text/javascript">
    $(document).ready (function(){ 
        $('#image').change (function(e){
        var reader = new FileReader();
            reader.onload = function(e) {
                $('#showimage').attr('src', e.target.result);
}

reader.readAsDataURL(e.target.files['0']);

});

});


</script>






@endsection
