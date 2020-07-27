@extends('layout.header')

@section('content')
    
    <!-- <section>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-start">
          <div class="col-md-12 mt-5 text-center">
            <h1 class="">Searching Flight</h1>
          </div>
        </div>
        <br>
         <div class="row">
          <div class="col-md-6 align-items-end">
                  <div class="form-group">
                    <div class="form-field">
                        <div class="icon"><i class="flaticon-airplane text-dark"></i></div>
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
                      <div class="form-field">
                        <div class="icon"><i class="flaticon-arrivals text-dark"></i></div>
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

                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label class="# text-dark">Date From</label>
                    <div class="form-field">
                      <input type="Date" class="form-control checkin_date" placeholder="Date from">
                    </div>
                  </div>
                </div>
                <div class="col-md align-items-end">
                  <div class="form-group">
                    <label class="text-dark">Date To</label>
                    <div class="form-field">
                      <div class="icon"><span class="icon-map-marker"></span></div>
                      <input type="Date" class="form-control checkin_date" placeholder="Date to">
                    </div>
                  </div>
                </div>
              

                <div class="col-md align-self-end">
                  <div class="form-group">
                    <div class="form-field">
                      <a href=""><input type="submit" value="Search" class="form-control btn btn-primary"></a>
                    </div>
                  </div>
                </div>
              </div>
         </div>             
      </div>
    </section> -->
    <section class="mt-5">
      <div class="">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Flight Details</h1>

            @if(Session::has('no_flight'))
              <div class="alert alert-success">
                  {{ Session::get('no_flight') }}
              </div>
            @endif

            <br>
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>From</th>
                    <th>Departure Time</th>
                    <th>Delay Time</th>
                    <th>Arrival Time</th>
                    <th>To</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $items)
                  <!-- $dep = {{ $items->dep_time }}; -->
                  <tr class="table text-center">
                    <td>{{ $items->from }}<i class="flaticon-right-arrow"></i></td>
                    <td><i class="flaticon-airplane text-dark"></i>&nbsp;&nbsp;&nbsp;{{ $items->dep_time }}<table class="table table-striped table-hover">
                      <tr><td>{{ $items->dep_date }}</td></tr>
                    </table></td>
                    <td>{{ "$items->arrival_time - $items->dep_time" }}</td>
                    <td><i class="flaticon-airplane text-dark"></i>&nbsp;&nbsp;&nbsp;{{ $items->arrival_time }}<table class="table table-striped table-hover">
                      <tr><td>{{ $items->arrival_date }}</td></tr>
                    </table></td>
                    <td><i class="flaticon-right-arrow"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $items->to }}</td>
                    <td>45000MMK&nbsp;&nbsp;&nbsp;<a href="booking.html"><input type="submit" name="Book Now" value="Book Now" class="btn-primary"></a></td>
                  </tr>
                  @endforeach

                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>


    <br>
    <footer class="bg-dark">
      <br>
      <div class="container">
          <div class="row">
            <div class="col-md">
                <div class="mb-4 ml-md-4">
                  <ul class="list-unstyled">
                    <li><a href="index.html" class="py-2 d-block">Home</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="mb-4 ml-md-4">
                  <ul class="list-unstyled">
                    <li><a href="detail.html" class="py-2 d-block">Top Flight Detail</a></li>
                  </ul>
                </div>
              </div>
               <div class="col-md">
                 <div class="mb-4">
                  <ul class="list-unstyled">
                    <li><a href="content.html" class="py-2 d-block">Contact Us</a></li>
                  </ul>
                </div>
              </div>
               <div class="col-md">
                 <div class="mandalay-footer-widget mb-4">
                  <ul class="list-unstyled">
                    <li><a href="booking.html" class="py-2 d-block">My Booking</a></li>
                  </ul>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-4">
                  <ul class="float-lft list-unstyled" style="margin-left: 45%;">
                  <li class="mandalay-animate d-inline"><a href="#"><span class="fab fa-facebook fa-2x mx-2 text-primary"></span></a></li>
                  <li class="mandalay-animate d-inline"><a href="#"><span class="fab fa-twitter fa-2x mx-2 text-info"></span></a></li>
                  <li class="mandalay-animate d-inline"><a href="#"><span class="fab fa-2x fa-google-plus mx-3 text-danger"></span></a></li>
                </ul>
                </div>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="text-light"> Copyright &copy; All rights reserved | This website is made <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Wunna</a>
            </p>
          </div>
        </div>
      </div>
      <br>
</footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


@endsection