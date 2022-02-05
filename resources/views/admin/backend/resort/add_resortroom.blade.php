@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update {{$ResortRoomData->name}}'s Rooms</h4>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{route('resortroom.store')}}">
                                @csrf
                                <div class="row">








                                    <div class="col-12">
                                        <div class="add_item">


                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="hidden" name="resort_id" value="{{$ResortRoomData->id}}"
                                                        readonly="true" class="form-control" required="true">
                                                </div>
                                            </div>
    

                                            <!-- // end form group -->



                                            <div class="row">

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Room Type <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="roomtype_name[]" class="form-control"
                                                                required="true" aria-invalid="false">



                                                                <option value="" selected="" disabled="">Select Type
                                                                </option>

                                                                @foreach ($roomtypes as $roomtype)
                                                                <option value="{{ $roomtype->name }}">{{
                                                                    $roomtype->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div> <!-- // end form group -->
                                                </div> <!-- End col-md-5 -->






                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Total Room No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="totalroomno[]"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div><!-- End col-md-5 -->



                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Features <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <textarea rows="1" cols="1" name="feature[]" class="form-control" required='true' ></textarea>

                                                        </div>
                                                    </div>
                                                </div><!-- End col-md-5 -->

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>B2B Price <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="B2B[]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div><!-- End col-md-5 -->









                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>B2C Price <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="B2C[]" class="form-control">
                                                        </div>
                                                    </div>
                                                </div><!-- End col-md-5 -->


                                                <div class="col-md-2" style="padding-top: 25px;">
                                                    <span class="btn btn-success addeventmore"><i
                                                            class="fa fa-plus-circle"></i> </span>
                                                </div><!-- End col-md-5 -->

                                            </div> <!-- end Row -->

                                        </div> <!-- // End add_item -->

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
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


<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">

                <div class="col-md-2">

                    <div class="form-group">
                        <h5>Room Type <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="roomtype_name[]" class="form-control" required="true" aria-invalid="false">



                                <option value="" selected="" disabled="">Select Type</option>

                                @foreach ($roomtypes as $roomtype)
                                <option value="{{ $roomtype->name }}">{{ $roomtype->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div> <!-- // end form group -->
                </div> <!-- End col-md-5 -->


                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Total Room No <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="totalroomno[]" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- End col-md-5 -->
                <div class="col-md-2">
                    <div class="form-group">
                        <h5>Features <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea rows="1" cols="1" name="feature[]" class="form-control" required='true' ></textarea>

                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <h5>B2B Price <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="B2B[]" class="form-control">
                        </div>
                    </div>
                </div><!-- End col-md-5 -->

                <div class="col-md-2">
                    <div class="form-group">
                        <h5>B2C Price <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="B2C[]" class="form-control">
                        </div>
                    </div>
                </div><!-- End col-md-5 -->

                <div class="col-md-2" style="padding-top: 25px;">
                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                    <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>
                </div><!-- End col-md-2 -->




            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
 		var counter = 0;
 		$(document).on("click",".addeventmore",function(){
 			var whole_extra_item_add = $('#whole_extra_item_add').html();
 			$(this).closest(".add_item").append(whole_extra_item_add);
 			counter++;
 		});
 		$(document).on("click",'.removeeventmore',function(event){
 			$(this).closest(".delete_whole_extra_item_add").remove();
 			counter -= 1
 		});

 	});
</script>


@endsection