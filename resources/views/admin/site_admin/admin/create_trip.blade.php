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
    Trips
@endsection
@section('content')

  <body>
  
    <br>
    <section>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-start">
          <div class="col-md-12 mt-5 text-center">
            <h2 class="">Create Trip<h2>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
             <form action="{{ route('create_trip') }}" method="post">
                @csrf
                <div class="row">
                        <div class="col-md-6 align-items-end">
                          <div class="form-group">
                            <label for="#">From</label>
                            <div class="form-field">
                              <!-- <input type="text" class="form-control" placeholder="From"> -->
                              <select name="from" id="" class="form-control">
                                <option value="yangon">Yangon</option>
                                <option value="mandalay">Mandaly</option>
                                <option value="kachin">Kachin</option>
                                <option value="kayar">Kayar</option>
                                <option value="kayin">Kayin</option>
                                <option value="chin">Chin</option>
                                <option value="mon">Mon</option>
                                <option value="rakhine">Rakhine</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 align-items-end">
                          <div class="form-group">
                            <label for="#">To</label>
                            <div class="form-field">
                            <select name="to" id="" class="form-control">
                                <option value="yangon">Yangon</option>
                                <option value="mandalay">Mandaly</option>
                                <option value="kachin">Kachin</option>
                                <option value="kayar">Kayar</option>
                                <option value="kayin">Kayin</option>
                                <option value="chin">Chin</option>
                                <option value="mon">Mon</option>
                                <option value="rakhine">Rakhine</option>
                              </select>
                            </div>
                          </div>
                        </div>
                </div>
                <div class="row">
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Departure Date</label>
                          <div class="form-field">
                            <input type="Date" name="dep_date" class="form-control checkin_date" placeholder="Date from" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Arrival Date</label>
                          <div class="form-field">
                            <input type="Date" name="arrival_date" class="form-control checkin_date" placeholder="Date to" required>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="row">
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Departure Time</label>
                          <div class="form-field">
                            <input type="Time" name="dep_time" class="form-control checkin_date" placeholder="Date from" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Arrival Time</label>
                          <div class="form-field">
                            <input type="Time" name="arrival_time" class="form-control checkin_date" placeholder="Date to" required>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <!-- <a href="#"><input type="sumbit" name="" value="Add" class="form-control btn btn-primary"></a> -->
                      <button class="btn btn-primary form-control">Add</button>
                     
                    </div>
                  </div>
              
                </div>   
              </form>
      
           
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


@endsection