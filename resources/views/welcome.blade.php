<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="icon" href="/assets/logo/32.png">
    <title>PANTAS </title>
  </head>
  <body>



    <nav>
      <div class="nav__header">
        <div class="logo nav__logo">
          <a href="#"><span>PANTAS</span></a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <span><i class="ri-menu-line"></i></span>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#definisi">Definisi</a></li>
        <li><a href="#team">Team Kami</a></li>
        <li><a href="/lapor.html">Laporkan</a></li>
      </ul>
    </nav>



    <header class="section__container header__container" id="home">
      <div class="header__image">
        <img src="assets/hero.jpg" alt="header" />
      </div>
      <div class="header__content">
        <h1>Selamat Datang di Sistem <span>PANTAS</span></h1>
        <p class="section__description">
        Tempat dimana anda bisa berkontribusi dalam meningkatkan lingkungan yang bersih dengan melakukan pelaporan adanya tumpukan sampah liar.
        </p>
        <div class="header__btn">
        
        </div>
      </div>
    </header>




    
    <section class="section__container explore__container"  style=" margin-bottom: 30px;" id="definisi">
      <div class="explore__image">
        <img src="/assets/bertanya.png" alt="tanya" />
      </div>
      <div class="explore__content">
        <h1 class="section__header">Apa Itu Sistem PANTAS ?</h1>
        <p class="section__description">
          Sistem PANTAS adalah platform pelaporan sampah yang memudahkan masyarakat melaporkan tumpukan sampah liar. Pengguna dapat mengaksesnya melalui aplikasi atau web tanpa registrasi, menggunakan GPS untuk menentukan lokasi, dan mengunggah foto sampah. Sistem ini mencatat informasi penting seperti lokasi, waktu, jenis sampah, dan tingkat keparahan. Dengan PANTAS, masyarakat diharapkan lebih aktif menjaga kebersihan lingkungan.
        </p>
      </div>
    </section>


    <section class="section__container client__container" >
      <h2 class="section__header">Kenapa Kami Membuat Sistem ini ?</h2>
      <p class="section__description">
        banyaknya kasus tentang sampah liar yang bertumpukan dimana yang mana itu menganggu pengguna jalan,masyarakat umum dan tentunya merusak lingkungan hidup karena itu kami membuat sistem ini untuk membantu masyarakat agar bisa berperan aktif dalam menerapka <span style="color: green; font-weight: 600;">Go Green</span>.
      </p>
      <div class="client__swiper">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client__card__home">
                        <iframe width="630" height="365" src="https://www.youtube.com/embed/onKt1i3jrXw" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client__card__home">
                        <iframe width="630" height="365" src="https://www.youtube.com/embed/zSMpJ9Qzi7w" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="swiper-slide">
                  <div class="client__card__home">
                      <iframe width="630" height="365" src="https://www.youtube.com/embed/i0bb7Et0ots" frameborder="0" allowfullscreen></iframe>
                  </div>
              </div>
              
            </div>
            <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section class="section__container special__container" >
      <h2 class="section__header">Bagaimana Cara menggunakan sistem ini ?</h2>
      <p class="section__description">
        Berikut Adalah Penjelasan singkat Bagaimana cara sistem kami digunakan oleh pengguna
      </p>

     <div class="special__grid" >
      <div class="banner__card" style="background-color: white;">
        <span class="banner__icon"><i class="ri-earth-fill"></i></span>
        <h4> Akses Platform PANTAS</h4>
        <p>
          Pengguna dapat mengakses sistem pelaporan sampah melalui aplikasi PANTAS yang tersedia di smartphone atau melalui platform web PANTAS yang dapat diakses dari perangkat apapun. Tidak diperlukan registrasi, sehingga pengguna dapat langsung menggunakan layanan tanpa hambatan.
        </p>
       
      </div>
      <div class="banner__card" style="background-color: white;">
        <span class="banner__icon"><i class="ri-map-pin-fill"></i></span>
        <h4>Aktifkan Lokasi dan Ambil Foto</h4>
        <p>
          Selanjutnya Pengguna hanya perlu mengaktifkan lokasi pada perangkat mereka, dan sistem akan secara otomatis menangkap koordinat lokasi tersebut. Kemudian, pengguna mengambil foto tumpukan sampah yang ditemukan menggunakan kamera perangkat mereka.
        </p>
       
      </div>
      <div class="banner__card" style="background-color: white;">
        <span class="banner__icon"><i class="ri-file-list-fill"></i></span>
        <h4>Kirimkan Laporan yang anda buat</h4>
        <p>
         Kemudian pengguna akan diminta untuk memilih  tingkat keparahan tumpukan sampah dari opsi yang disediakan di sistem. Setelah semua informasi diisi, pengguna cukup menekan tombol "Kirim Laporan". Sistem akan mencatat laporan tersebut beserta informasi penting seperti lokasi dan jenis sampah yang dilaporkan.
        </p>
       
      </div>

      </div>
      
      <div class="containerbutton">
        <button class="button-33" role="button"> <a href="lapor.html"> Ayo Laporkan </a></button>
      </div>


    </section>

    <section class="unggul" id="unggul">
      <div class="section__container unggul__container">
        <div class="unggul__image">
          <img src="assets/unggul.jpg" alt="unggul" />
        </div>
        <div class="unggul__content">
          <h2 class="section__header">Keunggulan Menggunakan Sistem Pelaporan Aduan Sampah</h2>
          <p class="section__description">
            Menggunakan sistem pelaporan aduan sampah memiliki berbagai keunggulan yang membantu masyarakat untuk lebih aktif dalam menjaga kebersihan lingkungan.
          </p>
          <ul class="unggul__list">
            <li>
              <span><i class="ri-checkbox-fill"></i></span>
              Kemudahan akses dan pelaporan yang cepat.
            </li>
            <li>
              <span><i class="ri-checkbox-fill"></i></span>
              Meningkatkan partisipasi dan kesadaran masyarakat.
            </li>
            <li>
              <span><i class="ri-checkbox-fill"></i></span>
              Data terorganisir dan tindak lanjut yang cepat.
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <section class="section__container team__container" id="team" style="margin-top: -50px;">
      <h2 class="section__header" style="margin-bottom: 30px;">Our Team</h2>

      <div class="team__grid">
        <div class="team__card">
          <div class="team__image">
            <img src="/assets/wahyu.jpg" alt="Ardian Wahyu Saputra">
          </div>
          <h4>Ardian Wahyu Saputra</h4>
          <p class="universitas">Universitas Muhammadiyah Riau</p>
          <p class="peran">
            Project Manager dan Front End Developer kami, bertanggung jawab atas manajemen proyek dan pengembangan antarmuka pengguna untuk memastikan pengalaman pengguna yang lancar.
          </p>
        </div>
        <div class="team__card">
          <div class="team__image">
            <img src="/assets/dio.jpg" alt="Hasban Dio Saputra">
          </div>
          <h4>Hasban Dio Saputra</h4>
          <p class="universitas">Universitas Islam Kuantan Singingi</p>
          <p class="peran">
            Front End Developer, Analis Data, dan Perancang Sistem. Bertanggung jawab atas pengembangan front end, analisis data, perancangan sistem, dan pembuatan laporan.
          </p>
         
        </div>
        <div class="team__card">
          <div class="team__image">
            <img src="/assets/profile.jpg" alt="Putro Dwi Mulyo">
          </div>
          <h4>Putro Dwi Mulyo</h4>
          <p class="universitas">Universitas Bina Insani</p>
          <p class="peran">
            Backend Developer kami, bertanggung jawab atas pengembangan dan pengujian API, memastikan layanan backend yang kuat dan teruji dengan baik.
          </p>
         
        </div>
      </div>
      
    </section>

    <footer class="footer">
      <div class="myfooter">
         <p>&copy; 2024 - Final Capstone Dicoding</p>
      </div>
   </footer>
 

   <script src="https://unpkg.com/scrollreveal"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="main.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>
