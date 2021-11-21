<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FavIcon -->
    <link rel="shortcut icon" href="img/hmif.png">

     <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightslider.css">

     <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>{{ $title }}</title>
  </head>
  <body>
     <!-- Awal Navbar -->
     <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top" >
            <div class="container">
                <img src="/img/hmif.png" alt="" width="50" height="50">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="/struktural">Struktur Kepengurusan</a>
                        <a class="nav-link" href="/proker">Program Kerja Terlaksana</a>
                        <a class="nav-link" href="#">Daftar Program Kerja</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->

    <div class="container">
        @yield('container')
    </div>

    <!-- Awal Footer-->
        <div class="container-fluid">
            <div class="row">
                  <div class="col-sm-12">
                   <a href="#"><img class="image" border="0" title="#" src="img/ig.png" width="40px" height="40px"></a>
                   <a href="#"><img class="image" border="0"title="#" src="img/ytt.png" width="40px" height="40px"></a>
                   <a href="#"><img class="image" border="0"title="#" src="img/tw.png" width="40px" height="40px"></a>
                  <br>
                  <p>Fakultas Teknik Universitas Muhammadiyah Jakarta, 27 / Gedung C Lt. 2, Jl. Cemp. Putih Tengah, RT.11/RW.5, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510</p>
                  <hr class="garis" data-aos-mirror="true">
                  HMIF BEM FT-UMJ. © 2021. All Right Reserved</p>
              </div>
          </div>
      </div>
      <!-- Akhir Footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-1.11.0.js"integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw="crossorigin="anonymous"></script>
    <script src="js/lightslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $("#lightSlider").lightSlider({
            item:1,
            auto:true,
            loop:true,
          });
      });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>