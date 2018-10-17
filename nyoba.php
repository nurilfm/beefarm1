<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/style/style_produk.css">
    <link rel="stylesheet" href="view/style/jquery.range.css">
    <title>Hello, Produk!</title>
  </head>
  <body>
      <!-- Header --> 
       <div class="header">
        <div class="judul d-none d-md-block d-sm-none pb-1">
          <ul class="ul1">
            <li>
              <a href=""><img src="view/img/phone.png" alt="" class="phone"><span class="p-1">082213034131</span></a>
            </li>
            <li>
              <a href=""><img src="view/img/email.png" alt="" class="phone"><span class="p-1">beefarmyuk@gmail.com</span></a>
            </li>
          </ul>
          <ul class="ul2">
            <li>
              <a href=""><img src="view/img/notif.png" alt="" class="phone"><span class="p-1">Notification</span></a>
            </li>
            <li>
              <a href=""><img src="view/img/help.png" alt="" class="phone"><span class="p-1">Bantuan</span></a>
            </li>
          </ul>
        </div>
          <nav class="navbar navbar-expand-md navbar-dark bg-white py-1" id="navigasi">
            <div class="container">
            
          <!-- Brand/logo -->
          <a class="navbar-header" href="#">
             <img src="view/img/yeah.png" alt="" width="40px"> 
          </a>
            <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link ">Beranda</a></li>
                <li class="nav-item"><a href="Produk.php" class="nav-link ">Produk</a></li>
                <li class="nav-item"><a href="" class="nav-link ">Artikel</a></li>
                <li class="nav-item"><a href="" class="nav-link ">Galleri</a></li>
                <li class="nav-item"><a href="" class="nav-link ">Hubungi Kami</a></li>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#login-modal">Masuk</a>

<div class="modal" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <label>Nama depan</label>
        <br>
        <input type="text" class="form-control" name="">
        <label>Nama belakang</label>
        <input type="text" class="form-control" name="">
        <br>
         <label>Username</label>
        <input type="text" class="form-control" name="">
        <br>
         <label>Email</label>
        <input type="text" class="form-control" name="">
        <br>
         <label>Telp Seluler</label>
        <input type="text" class="form-control" name="">
        <br>
         <label>Password</label>
        <input type="text" class="form-control" name="">
        <br>
         <label>Ulangi Password</label>
        <input type="text" class="form-control" name="">
        <br>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>   
                <li class="nav-item pl-1"><button class="btn sign text-white" type="submit">Daftar</button></li>  
              </ul>
              <ul class="navbar-nav nav2 mx-4">
                <a href=""><img src="view/img/cart.png" alt=""></a>
              </ul>
            </div>
            </div>  
          </nav>
        </div>

        <!-- Menu Produk -->
        <section class="menu_produk" id="menu_produk">
          <div class="container-fluid bg-light pb-1">
            <div class="row">
              <div class="col-md-12">
                <a href="" class="child_header">Produk</a>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h5 class="custom_filter">------<img src="view/img/produk/filter.png" alt="">Filter Pencarian   ------</h5>
                <form action="" class="">
                  <select class="custom-select" name="" id="">
                    <option selected>Pilih Event</option>
                    <option value="Hari Raya Idul Fitri">Hari Raya Idul Fitri</option>
                    <option value="Hari Raya Idul Adha">Hari Raya Idul Adha</option>
                  </select>
                </form><br>
                <span>
                  <strong class="col-md-4">Filter Harga</strong>
                </span>
                <form action="">
                  <div class="input-group ">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Min</span>
                    </div>
                    <input type="text" class="form-control col-4" id="validationDefaultUsername" placeholder="Min" aria-describedby="inputGroupPrepend2" required>
                    <div class="input-group-prepend ml-4">
                      <span class="input-group-text" id="inputGroupPrepend2">Max</span>
                    </div>
                    <input type="text" class="form-control col-4" id="validationDefaultUsername" placeholder="Max" aria-describedby="inputGroupPrepend2" required>
                  </div>
                </form>
                <p><input type="hidden" class="price_range" value="0,500"></p>
                <button class="btn btn-success" value="filter">Filter</button>
         </div>
         <div class="col-md-8 offset-1">
          <div class="row">
            <div class="col-md-12"> 
            <h5 class="custom_produk">------ Daftar Produk ------</h5>
            </div>
          </div>
          <!-- List Produk -->
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="view/img/daging.jpg" alt="" class="img-thumbnail">
                <div class="card-body text-center">
                  <a href="#" class="card-title">Daging Biasa</a>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto in, saepe, </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
              <img src="view/img/daging.jpg" alt="" class="img-thumbnail">
              <div class="card-body text-center">
                <a href="#" class="card-title">Daging Biasa</a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto in, saepe, </p>
              </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="card">
              <img src="view/img/daging.jpg" alt="" class="img-thumbnail">
              <div class="card-body text-center">
                <a href="#" class="card-title">Daging Biasa</a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto in, saepe, </p>
              </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="card">
              <img src="view/img/daging.jpg" alt="" class="img-thumbnail">
              <div class="card-body text-center">
                <a href="#" class="card-title">Daging Biasa</a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto in, saepe, </p>
              </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="card">
              <img src="view/img/daging.jpg" alt="" class="img-thumbnail">
              <div class="card-body text-center">
                <a href="#" class="card-title">Daging Biasa</a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto in, saepe, </p>
              </div>
            </div>
            </div>
            <div class="col-md-4">
              <div class="card">
              <img src="view/img/daging.jpg" alt="" class="img-thumbnail">
              <div class="card-body text-center">
                <a href="#" class="card-title">Daging Biasa</a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto in, saepe, </p>
              </div>
            </div>
            </div>
            </div>
            </div>
          </div>
        </div> 
        </section>
        
        <!-- Tentang Kami -->
        <section class="tentang-kami my-3 py-3" id="tentang-kami">
          <div class="container">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  
                </div>
                <div class="col-md-3 pr-3 ">
                  <p>BeefFarm adalah sebuah toko online penjualan daging yang menjual macam macam daging sapi yang segar dan berkualitas dan halal dengan pemotongan yang nmenurut prosedur yang benar</p>
                </div>
                <div class="col-md-3">
                  <span>ikuti Kami</span><br>
                  <a href=""><img src="view/img/produk/facebook.png" alt="" class="ml-1 mt-1"></a>
                  <a href=""><img src="view/img/produk/instagram.png" alt="" class="mt-1"></a>
                  <br>
                  <span>Hubungi Online</span><br>
                  <a href=""><img src="view/img/produk/whatsapp.png" alt="" class="ml-1 mt-1"></a>
                </div>
                <div class="col-md-3">
                 <span>Pembayaran</span><br>
                  <a href=""><img src="view/img/produk/bri.png" alt="" class="ml-5 mt-1"></a>
                  <a href=""><img src="view/img/produk/bni.png" alt="" class="ml-2 mt-1"></a>
                  <a href=""><img src="view/img/produk/mandiri.png" alt="" class="ml-5 mt-1"></a>
                </div>
              </div>
            </div>
          </div>
        </section>
          <!-- Footer -->
          <footer>
            <div class="container">
              <div class="row text-center">
                <div class="col-md-12">
                  <p>&copy; Copyright2018 || built by. <a href="https://www.facebook.com/fariesdevlay" target="blank" >CodeX Team</a></p>
                </div>
            </div> 
            <div class="row text-center">
              <div class="col-md-12">
                  <a href="https://www.instagram.com/farisisalman07/"class="btn btn-danger" target="blank">Instagram</a>
              </div>
            </div>
            </div>
          </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="view/myjs/jquery-3.2.1.slim.min.js"></script>
    <script src="view/myjs/popper.min.js"></script>
    <script src="view/js/jquery-3.3.1.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/myjs/jquery.range.js"></script>
    <script src="view/myjs/js.js"></script>
    <script>
    // Activate Carousel
    
//    $('.price_range').jRange({
//     from: 0,
//     to: 100,
//     step: 1,
//     scale: [0,25,50,75,100],
//     format: '%s',
//     width: 300,
//     showLabels: true,
//     isRange : true
// });
    </script>
  </body>
</html>