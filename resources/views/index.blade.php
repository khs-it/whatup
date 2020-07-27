@extends('layout.header')

@section('content')
    <div class="hero-wrap flight-section">
      <div class="container">
        <div class="row slider-text align-items-center justify-content-start">
          <div class="col-md-12 mt-5 text-center">
            <h1 class="mt-5 text-uppercase text-light">Search flights at once</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="flight-search justify-content-end">
      <div class="container-wrap ml-auto">
        <div class="row">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <form action="{{ route('search_trip') }}" method="post">
                  @csrf
                  <div class="row">

                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><i class="flaticon-airplane text-light"></i></div>
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
                          <div class="form-field">
                            <div class="icon"><span><i class="flaticon-arrivals text-light"></span></i></div>
                            <!-- <input type="text" class="form-control" placeholder="To"> -->
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

                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date From</label>
                        <div class="form-field">
                          <div class="icon"></div>
                          <input type="Date" name="from_date" class="form-control checkin_date" placeholder="Date from">
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date To</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="Date" name="to_date" class="form-control checkin_date" placeholder="Date to">
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
                </form>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                <form action="#" class="search-destination">
                  <div class="row">
                    <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><i class="flaticon-airplane text-light"></i></div>
                            <input type="text" class="form-control" placeholder="From">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><i class="flaticon-arrivals text-light"></i></div>
                            <input type="text" class="form-control" placeholder="To">
                          </div>
                        </div>
                      </div>

                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date From</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="Date" class="form-control checkin_date" placeholder="Date from">
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date To</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="Date" class="form-control checkin_date" placeholder="Date to">
                        </div>
                      </div>
                    </div>

                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Class</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                              <option value="">Economy class</option>
                              <option value="">Premium class</option>
                              <option value="">Business class</option>
                              <option value="">First class</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md align-self-end">
                      <div class="form-group">
                        <div class="form-field">
                          <a href="#"><input type="submit" value="Search" class="form-control btn btn-primary"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                <form action="#" class="search-destination">
                  
                    <div class="row">
                    <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <div class="form-field">
                            <div><i class="flaticon-airplane text-light"></i></div>
                            <input type="text" class="form-control" placeholder="From">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><i class="flaticon-arrivals text-light"></i></div>
                            <input type="text" class="form-control" placeholder="To">
                          </div>
                        </div>
                      </div>
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date From</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="Date" class="form-control checkin_date" placeholder="Date from">
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date To</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="Date" class="form-control checkin_date" placeholder="Date to">
                        </div>
                      </div>
                    </div>

                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Class</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                              <option value="">Economy class</option>
                              <option value="">Premium class</option>
                              <option value="">Business class</option>
                              <option value="">First class</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><i class="flaticon-airplane text-light"></i></div>
                            <input type="text" class="form-control" placeholder="From">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <div class="form-field">
                            <div class="icon"><i class="flaticon-arrivals text-light"></i></div>
                            <input type="text" class="form-control" placeholder="To">
                          </div>
                        </div>
                      </div>
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date From</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="Date" class="form-control checkin_date" placeholder="Date from">
                        </div>
                      </div>
                    </div>
                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Date To</label>
                        <div class="form-field">
                          <div class="icon"><span class="icon-map-marker"></span></div>
                          <input type="Date" class="form-control checkin_date" placeholder="Date to">
                        </div>
                      </div>
                    </div>

                    <div class="col-md align-items-end">
                      <div class="form-group">
                        <label class="# text-light">Class</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                              <option value="">Economy class</option>
                              <option value="">Premium class</option>
                              <option value="">Business class</option>
                              <option value="">First class</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12 align-self-end">
                      <div class="form-group">
                        <div class="form-field">
                          <a href="#"><input type="submit" value="Search" class="form-control btn btn-primary w-100%"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="flight-detail">
        <div class="container">
          <div class="row">
            <div class="col-md-12 ">
               <div class="row">
                <div class="col-md-4 ">
                  <a href="detail.html" class="thumbnail" style="text-decoration: none;">
                     <img src="img/flight-1.jfif" alt="" class="rounded" width="100%">
                     <h4>Flight Search</h4>
                  </a>
                  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p> 
                </div>
                <div class="col-md-4 ">
                  <a href="booking.html" class="thumbnail" style="text-decoration: none;">
                     <img src="img/flight-2.jfif" alt="" class="rounded" width="95%">
                     <h4>Booking System</h4>
                  </a> 
                  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p> 
                </div>
                <div class="col-md-4 ">
                  <a href="#" class="thumbnail" style="text-decoration: none;">
                     <img src="img/flight-3.jfif" alt="" class="rounded" width="95%">
                     <h4>Introduction</h4>
                  </a>
                  <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p> 
                </div>
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
                    <li><a href="contact.html" class="py-2 d-block">Contact Us</a></li>
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
</footer>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


@endsection