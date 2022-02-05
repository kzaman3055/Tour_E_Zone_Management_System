@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Package Information</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('package.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">



                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <h5>Picture <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="image" class="form-control" id="image">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="controls">

                                            <img id="showimage" src="{{(!empty($package->image))? url('upload/package_images/'.$package->image): url('upload/no_image.jpg') }}"
                                            style ="width: 100px; width: 100px; border: 1px solid #000000;">

                                        </div>
                                        </div>











                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="true">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Destination <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="place" class="form-control" required="true"
                                                    aria-invalid="false">



                                                    <option value="" selected="" disabled="">Select Type</option>
                                                    
                                                    @foreach ($destination as $key => $destinations)
                                                    <option value= "{{ $destinations->name }}">{{ $destinations->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <h5>Type <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="type" class="form-control" required="true"
                                                    aria-invalid="false">
                                                     <option value="" selected="" disabled="">Select Type</option>
                                                    
                                                    @foreach ($packagedata as $key => $package_types)
                                                    <option value= "{{ $package_types->name }}">{{ $package_types->name }}</option>
                                                    @endforeach






                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Price <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="price" class="form-control" required="true">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Transport Type <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="transport" class="form-control" required="true"
                                                    aria-invalid="false">
                                                    <option value="" selected="" disabled="">Select Type</option>
                                                    
                                                    @foreach ($transportdata as $key => $transport_types)
                                                    <option value= "{{ $transport_types->name }}">{{ $transport_types->name }}</option>
                                                    @endforeach






                                                </select>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="col-md-6">

                                      
                                        <div class="form-group">
                                            <h5>Feature<span class="text-danger">*</span></h5>

                                            <textarea rows="5" cols="5" name="feature" class="form-control" required='true' ></textarea>
                                        </div>                                      
  
                                        <div class="form-group">
                                            <h5>Detail<span class="text-danger">*</span></h5>
                                            <textarea rows="5" cols="5"name="detail" class="form-control" required='true' ></textarea>
                                        </div>       
                                        
                                        
                                        <div class="form-group">
                                            <h5>Availability <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="availability" class="form-control" required="true"
                                                    aria-invalid="false">
                                                    <option value="" selected="" disabled="">Select Availability</option>
                                                    <option value= "Available">Available</option>
                                                    <option value= "Not Available">Not Available</option>
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