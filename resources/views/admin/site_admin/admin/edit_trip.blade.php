@extends('admin.layouts.site_admin.site_admin_design')
@section('title','Admin | Company')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .imagePreview {
            width: 100%;
            height: 150px;
            background-position: center center;
            background:url('http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            /* box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2); */
        }
        .upload_btn
        {
            display:block;
            border-radius:10px;
            /* box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2); */
            margin-bottom: 15px;
        }
        .imgUp
        {
            margin-bottom:15px;
        }
    </style>
@endsection

@section('content')

<div class="edit_place">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <hr>

                <h3>Edit Trip Details</h3>
                <form action="{{ route('update_trip') }}" method="post" enctype="multipart/form-data" id="update_data" class="md-form">
                    {{csrf_field()}}
                    <input type="hidden" id="id_edit" name="trip_id" value="{{ $data->id }}">
                    <div class="row">
                        <div class="col-sm-4 imgUp">
                            
                        </div>
                    
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">From</label> <br>
                                <input type="text" class="form-control" name="from" id="update_name" value="{{ $data->from }}" placeholder="From" required>
                               
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Dep_Date</label> <br>
                                <input type="Date" name="dep_date" class="form-control checkin_date" value="{{ $data->dep_date }}" placeholder="Date from" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Dep_Time</label> <br>
                                <input type="Time" name="dep_time" class="form-control checkin_date" placeholder="Date from" value="{{ $data->dep_time }}" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Arrival_Date</label> <br>
                                <input type="Date" name="arrival_date" class="form-control checkin_date" value="{{ $data->arrival_date }}" placeholder="Date from" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Arrival_Time</label> <br>
                                <input type="Time" name="arrival_time" class="form-control checkin_date" placeholder="Date to" value="{{ $data->arrival_time }}" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">To</label> <br>
                                <input type="text" class="form-control" name="to" id="update_name" value="{{ $data->to }}" placeholder="To" required>
                            </div>
                        </div>
                        

                                   
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                  
                    <a href="{{ route('admin_index') }}" style="padding:8px 25px; background-color:blue; color:white; border:1px solid #fff; border-radius:6px; ">Back</a>
                  
                </form>
            </div>
        </div>
    </div>
</div>
   
                  
@endsection