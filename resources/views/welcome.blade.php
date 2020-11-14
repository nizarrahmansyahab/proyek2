<!DOCTYPE html>
<html>
<head>
    <title>E-commercee</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">
</head>
<body id="home">


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand" href="#">E-Commerccee Clothes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
               <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter">
  Register
</button>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- ========================================================= -->

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{url('image/12.jpg')}}" alt="First slide">
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="{{url('image/13.jpg')}}" alt="Second slide">
  </div>
  <div class="carousel-item">
      <img class="d-block w-100" src="{{url('image/14.jpg')}}" alt="Third slide">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>

<!-- ======================================== -->


<!-- section feature -->
<section class="feature">
    <div class="container">
        <h3 class="feature-title">FEATURE</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-feature">
                    <div class="card-header">
                        <i class="material-icons">store</i>
                        <span class="card-feture-title">Outlet Penjualan Terbanyak</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>    
            <div class="col-md-4">
                <div class="card card-feature">
                    <div class="card-header">
                        <i class="material-icons">attach_money</i>
                        <span class="card-feture-title">Biaya Pengiriman Termurah</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="card card-feature">
                    <div class="card-header">
                        <i class="material-icons">access_time</i>
                        <span class="card-feture-title">Waktu Pengiriman Cepat</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<!-- =============================== -->


<!-- section product -->

<section class="product" id="product">
    <div class="container">
        <h2 class="product-title">New Product</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card card-product">
                    <img src="{{url('image/22.jpg')}}" class="img-product">
                    <div class="product-description">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>:</td>
                                <td>kaos starbuck</td>
                            </tr>
                            <tr>
                                <th>Prices</th>
                                <td>:</td>
                                <td>IDR.200,000,00</td>
                            </tr>
                            <tr>
                                <th>Seize</th>
                                <td>:</td>
                                <td>
                                    <span>Xl</span>
                                    <span>l</span>
                                    <span>M</span>
                                    <span>S</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>:</td>
                                <td class="color">
                                    <span class="red"></span>
                                    <span class="black"></span>
                                    <span class="white"></span>
                                    <span class="blue"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="right">
                                    <a href="" class="btn btn-sm btn-success">Add to card</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>  
            <div class="col-md-4">
                <div class="card card-product">
                    <img src="{{url('image/44.jpg')}}" class="img-product">
                    <div class="product-description">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>:</td>
                                <td>kaos lengan panjang cewe</td>
                            </tr>
                            <tr>
                                <th>Prices</th>
                                <td>:</td>
                                <td>IDR.200,000,00</td>
                            </tr>
                            <tr>
                                <th>Seize</th>
                                <td>:</td>
                                <td>
                                    <span>Xl</span>
                                    <span>l</span>
                                    <span>M</span>
                                    <span>S</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>:</td>
                                <td class="color">
                                    <span class="red"></span>
                                    <span class="black"></span>
                                    <span class="white"></span>
                                    <span class="blue"></span>
                                </td>
                            </tr>
                             <tr>
                                <td colspan="3" align="right">
                                    <a href="" class="btn btn-sm btn-success">Add to card</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>  
            <div class="col-md-4">
                <div class="card card-product">
                    <img src="{{url('image/33.png')}}" class="img-product">
                    <div class="product-description">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>:</td>
                                <td>kaos polos</td>
                            </tr>
                            <tr>
                                <th>Prices</th>
                                <td>:</td>
                                <td>IDR.200,000,00</td>
                            </tr>
                            <tr>
                                <th>Seize</th>
                                <td>:</td>
                                <td>
                                    <span>Xl</span>
                                    <span>l</span>
                                    <span>M</span>
                                    <span>S</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>:</td>
                                <td class="color">
                                    <span class="red"></span>
                                    <span class="black"></span>
                                    <span class="white"></span>
                                    <span class="blue"></span>
                                </td>
                            </tr>
                             <tr>
                                <td colspan="3" align="right">
                                    <a href="" class="btn btn-sm btn-success">Add to card</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<!-- =========================================== -->

<!-- section footer -->

<section class="footer">
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
          </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
      </ul>
  </div>
  <div class="col-md-4">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4742.3108585071495!2d109.9651125662794!3d-1.8260470720841102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05188c6849709f%3A0xa81555602e8cabc2!2sCinemaxx%20Citimall%20Ketapang!5e0!3m2!1sen!2sid!4v1605123866701!5m2!1sen!2sid" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
</div>
</section>

<!-- ========================================== -->



<!-- Modal register -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="display: block;text-align: center !important;">Regsiter New Account</h5>
      </div>
      <div class="modal-body">
        <table class="table">
            <tr>
                <td>
                    <label>Name</label>
                    <input type="text" name="" class="form-control" placeholder="Enter name ..." required="">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email</label>
                    <input type="email" name="" class="form-control" placeholder="Enter email ..." required="">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password</label>
                    <input type="password" name="" class="form-control" placeholder="Enter password ..." required="">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Retype password</label>
                    <input type="text" name="" class="form-control" placeholder="Enter retype password ..." required="">
                </td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- ============================================= -->





<script src="{{url('js/jquery-3.5.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="{{ url('js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
           interval: 3000
       });

    })
</script>
</body>
</html>