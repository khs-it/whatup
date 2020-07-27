@extends('layout.header')

@section('content')

    <section>
      <div class="container">
        <div class="row slider-text align-items-center justify-content-start">
          <div class="col-md-12 mt-5 text-center">
            <h1 class="">Sign In</h1>
          </div>
        </div>
        <br>
        <div class="row justify-content-center">
          <form action="{{ route('admin_login') }}" method="post">

            @csrf

            <div class="form-group">
              <div class="col-md-12 input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="email" class="form-control" placeholder="email" aria-label="email" name="email" aria-describedby="basic-addon1">
              </div>
              <div class="col-md-12 input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="flaticon-fingerprint icon"></i></span>
                  </div>
                  <input type="Password" class="form-control" placeholder="Password" aria-label="password" name="password" aria-describedby="basic-addon1">
              </div>
              <div class="col-md-12 form-group">
                  <div class="form-check">
                    <input type="checkbox" name="" value="" class="py-2"><label>&nbsp;&nbsp; Remember Me</label>
                  </div>
              </div>
              <div class="col-md-12">
                <a href="Admin.html"><input type="submit" name="" value="Login" class="form-control btn btn-primary"></a> 
              </div>
            </div>
          </form>
      </div>
    </section>
    <br><br><br><br><br>
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