@extends('layouts.main')
@section('container')
    <!-- Awal Jumbotron -->
    <div class="container">
      <Section class="jumbotron">
          <div class="container">
      <div class="row mt-2">
          <div class="col-md-6">
              <br><br><div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/sampul1.png" class="d-block w-100" alt="..." data-aos="fade-right">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sampul2.png" class="d-block w-100" alt="..." data-aos="fade-right">
                  </div>
                  <div class="carousel-item">
                    <img src="img/sampul.png" class="d-block w-100" alt="..." data-aos="fade-right">
                  </div>
                </div>
              </div>
          </div>
        <div class="col-md-6">
          <p style="margin-top: 40px; text-align: justify;" data-aos="fade-left">InformationALL 2021 merupakan kombinasi dari dua kata yang berasal dari Bahasa Inggris “Information” mewakili kata ‘informasi’ yang merupakan representasi dari Program Studi
          Teknik Informatika dan untuk “All” diartikan sebagai sebuah kegiatan yang terbuka untuk semua kalangan baik akademik maupun umum dengan tetap mempertimbangkan korelasinya 
          dengan dunia pendidikan khususnya di tingkat perguruan tinggi Pada tahun ini kami bermaksud untuk kembali menyelenggarakan event terbesar HMIF BEM FT-UMJ yang dikenal dengan 
          nama InformationALL 2021. Event yang akan diselenggarakan mengusung tema “Data Power For Smart City” karena melihat peran penting data science dalam membangun smart city, 
          kuususnya di Jakarta. Tujuannya yaitu membuat aktivitas sehari-hari menjadi lebih efisien dan efektif. 
          </p>
        </div>    
      </div>   
    </div>
      </section>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Awal Struktur -->
    <div class="container" data-aos="fade-down">
        <div class="struktur" data-aos="fade-in">
            <img src="img/hmif.png" alt="" class="logo">
            <h3>Agenda  </h3>
            <hr class="garis" data-aos-mirror="true">
        </div>
    </div>
    <!-- Akhir Struktur -->

    <!-- Awal Section Agenda -->
    <section id="speakers">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="img/agenda opening.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="#">Opening Ceremony</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="img/agenda workshop.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="#">Workshop</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="img/agenda front end.jpg" alt="Speaker 3" height="500" width="500" class="img-fluid">
              <div class="details">
                <h3><a href="#">Front End Web</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="img/agenda balap.jpg" alt="Speaker 4" height="500" width="800" class="img-fluid">
              <div class="details">
                <h3><a href="#">Balap Ngoding</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="img/agenda ml.jpg" alt="Speaker 5" width="350" class="img-fluid">
              <div class="details">
                <h3><a href="#">Virtual Gaming</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="img/agenda webinar.jpg" alt="Speaker 6" width="400" class="img-fluid">
              <div class="details">
                <h3><a href="#">Webinar</a></h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir Section Agenda -->

      <!-- Awal Struktur -->
      <div class="container" data-aos="fade-down">
        <div class="struktur" data-aos="fade-in">
            <img src="img/hmif.png" alt="" class="logo">
            <h3 >Partnership</h3>
            <hr class="garis" data-aos-mirror="true">
        </div>
      </div>
     <!-- Akhir Struktur -->

    <!-- Awal Banner -->
    <div class="banner">
      <ul id="lightSlider">
        <li><img src="img/umj e.png" alt=""></li>
        <li><img src="img/umj ft.png" alt=""></li>
        <li><img src="img/umj.png" alt=""></li>
        <li><img src="img/permikomnas.png" alt=""></li>
        <li><img src="img/permikomnas dki.png" alt=""></li>
      </ul>
    </div>
    <!-- Akhir Banner -->

    

   
  
@endsection