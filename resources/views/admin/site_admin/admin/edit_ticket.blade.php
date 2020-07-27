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

                <h3>Edit Ticket Details</h3>
                <form action="{{ route('update_ticket') }}" method="post" enctype="multipart/form-data" id="update_data" class="md-form">
                    {{csrf_field()}}
                    <input type="hidden" id="id_edit" name="ticket_id" value="{{ $data->id }}">
                    <div class="row">
                        <div class="col-sm-4 imgUp">
                            
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="trip_id" id="update_name" value="{{ $data->trip_id }}" placeholder="Trip Id" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="level" id="update_name" value="{{ $data->level }}" placeholder="Level" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="quantity" id="update_name" value="{{ $data->quantity }}" placeholder="Quantity" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="price" id="update_name" value="{{ $data->price }}" placeholder="Price" required>
                            </div>
                        </div>

                                    
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                  
                    <a href="{{ route('admin_ticket') }}" style="padding:8px 25px; background-color:blue; color:white; border:1px solid #fff; border-radius:6px; ">Back</a>
                  
                </form>
            </div>
        </div>
    </div>
</div>
   
                  
@endsection