@extends('admin.layouts.site_admin.site_admin_design') @section('title','Admin | Company')
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

@section('nav_bar_text')
    Admin Panel
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            {{-- <h3>Company List</h3> --}}
                            <button type="button" name="button" class="btn" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static"></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    @if(Session::has('create_success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('create_success') }}
                                        </div>
                                    @endif

                                    @if(Session::has('delete_success'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('delete_success') }}
                                        </div>
                                    @endif

                                    @if(Session::has('update_success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('update_success') }}
                                        </div>
                                    @endif

                                 
                                    <thead class=" text-primary">
                                    <th>
                                        Welcome from Admin Panel
                                    </th>
                                  
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugiat cupiditate, maiores voluptas natus ipsum! Quasi nihil cum reiciendis tempora porro qui officia pariatur, eos fuga magnam fugit eius officiis!</td>
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- insert_model --}}
        <div class="modal fade" id="modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Trip</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('create_trip') }}" method="post" enctype="multipart/form-data" class="md-form">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                   
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="name" class="form-control" id="name" placeholder="Trip Id" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="name" class="form-control" id="name" placeholder="Level" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="name" class="form-control" id="name" placeholder="Quantity" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Price" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Create</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

     

    </div>

@endsection