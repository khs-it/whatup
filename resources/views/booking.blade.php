@extends('layout.header')

@section('content')

    <section>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-start">
          <div class="col-md-12 mt-5 text-center">
            <h1 class="">Booking System</h1>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
             <form action="#">
                  <div class="row">
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Name</label>
                          <div class="form-field">
                            <input type="text" class="form-control" placeholder="Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Email Address</label>
                          <div class="form-field">
                            <input type="email" class="form-control" placeholder="name@gmail.com">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Phone Number</label>
                          <div class="form-field">
                            <input type="number" class="form-control" placeholder="Phone number">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">Address</label>
                          <div class="form-field">
                            <input type="address" class="form-control" placeholder="Address">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label for="#">NRC</label>
                          <div class="form-field">
                            <input type="text" class="form-control" placeholder="NRC">
                          </div>
                        </div>
                      </div>
                      <div class="col-md align-items-end">
                      <div class="form-group">
                        <label for="#">Adult</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <select name="" id="" class="form-control">
                              <option value="">1 adult</option>
                              <option value="">2 adult</option>
                              <option value="">3 adult</option>
                              <option value="">4 adult</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-6 align-items-end">
                        <div class="form-group">
                          <label class="#">Prices</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
<div class="row">
                    <div class="col-md-12 align-self-end">
                      <div class="form-group">
                        <div class="form-field">
                          <a href="#"><button type="submit" value="Booking" class="form-control btn btn-primary">Booking</button></a>
                        </div>
                      </div>
                    </div>
                </div>
                </form>
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