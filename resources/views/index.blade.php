<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

#nama_web {
    font-family:'Montserrat', sans-serif;
    
}

#item_tulisan {
    font-family:'Poppins', sans-serif;
}

#isi_cardss {
    font-family:'Poppins', sans-serif;
    font-size: 14px;
    color: #167594;
    transition:0.5s;
}

#isi_cards {
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    transition:0.5s;
    color: #167594;
}

#tittle_card {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-style: bold;
    color: #167594;
    transition:0.5s;
}



#tiket {
    margin-top: 40px;
}

.warna.card-header {
    height: 30px;
    background: #8DBECE;
    transition:0.5s;
}



.ca.card-header {
    background: #FFF;
   
}

i {
    color: #167594;
    transition:0.5s;
}

#gambar_wahana {
    transition: transform .2s; /* Animation */
}




.card {
    box-shadow: 2px 2px rgb(195, 195, 195);
    margin-bottom: 40px;   
    transition:0.5s;
 
}

.btn.btn-primary {
    background-color:#167594;
    padding-left: 5%;
    padding-right: 5%;
    transition:0.5s;
}

.btn.btn-secondary {
    background-color:#168C94;
    padding-left: 5%;
    padding-right: 5%;
    transition:0.5s;
}

/* Hover Version */

#isi_cardss {
   
    color: #0a4255;
    transition:0.5s;
}

#isi_cards {
 
    color: #0a4255;
    transition:0.5s;
}

#tittle_card:hover {

    color: #0a4255;
    transition:0.5s;
}

.card:hover {
    transform: scale(1.2);
}

i:hover {
    color: #0a4255;
    transition:0.5s;

}

#gambar_wahana:hover {
    transform: scale(1.2);
}


.warna:hover {
    background: #182a30;
    transition:0.5s;
}

.btn.btn-primary:hover {
    background-color:#182a30;
    transition:0.5s;
}

.btn.btn-secondary:hover {
    background-color:#0b494d;
    transition:0.5s;
}

</style>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telaga Sarangan</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    
    {{-- fontawesome kit --}}
    <script src="https://kit.fontawesome.com/ff677759a9.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}">
</head>

<body data-spy="scroll" data-offset="80">
    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- Navbar End --}}

    {{-- Jumbotron --}}
    <section class="jumbotron bg-cover text-white iq-pt-10" style="background-image: linear-gradient(to bottom, rgba(3, 15, 29, 0.7) 50%,rgba(3, 15, 29, 0.6) 100%), url('{!! asset('images/sarangan3.png') !!}');
        background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container">
            <center style="letter-spacing: 1px;">
                <h2 class="iq-tw-6 iq-pt-100" id="nama_webs" style="color: white">Go Telaga Sarangan</h2>
                <p class="lead iq-tw-2 iq-font-14 iq-pt-30" id="item_tulisan">Membantu  Anda  untuk  dapat  menemukan  tempat  wisata  yang  paling  keren</p>
                <p class="iq-tw-2 iq-font-14 iq-mb-0" id="item_tulisan">dan  menyenangkan  dengan  harga  terbaik,</p>
                <p class="iq-tw-2 iq-font-14" id="item_tulisan">cari  tempat  liburan  anda  sekarang!</p>
                <div class="iq-ptb-30"></div>
                <a href="#" class="btn btn-light rounded-pill iq-font-14 iq-tw-2"
                                style="width: 240px; color:#1D7997;">Yuk Explore!</a>
                <div class="iq-ptb-40"></div>
            </center>
        </div>
    </section>
    {{-- Jumbotron End --}}


    {{-- Konten Tiket --}}
    <section id="tiket" class ="container">

       <center>
        <div class="row align-items-center">
           {{-- Card info harga --}}

           <div class="col-md-4">
               
             {{-- Start Card --}}

             <div class="card rounded-3" style="width: 20rem;height: 17rem;">
                <div class="warna card-header">
                </div>

                <div class="ca card-header" >
                    <i class="fas fa-ticket-alt fa-7x"></i>
                    </div>

                <div class="card-body">
                    <p id="tittle_card" class="card-tittle">Harga Tiket Masuk</p>
                    <div class="row align-items-center">
                        {{-- Start --}}

                        <div class="col">
                            <p id="isi_cards" class="card-text"> Hari biasa: </p>
                            <p id="isi_cardss" class="card-text"> Rp.20.000 </p>
                          </div>
                          <div class="col">
                            <p id="isi_cards" class="card-text"> Hari libur: </p>
                            <p id="isi_cardss" class="card-text"> Rp.30.000 </p>
                            </div>

                        {{-- end --}}
                    </div>
                </div>
              </div>

            {{-- End Card --}}
            
        
            </div>

           {{-- end card --}}
            <div class="col-md-4">
                {{-- Start Card --}}

                <div class="card rounded-3" style="width: 20rem;height: 17rem;">
                    <div class="warna card-header">
                    </div>

                    <div class="ca card-header" >
                        <i class="	fas fa-check-circle fa-6x"></i>
                        </div>

                    <div style="margin-top: 5%" class="card-body">
                        <p id="tittle_card" class="card-tittle">Status Tiket Masuk</p>
                        <p id="isi_cardss" class="card-text"> Tersedia </p>
                    </div>
                  </div>

                {{-- End Card --}}
            </div>
            <div class="col-md-4">
             {{-- Start Card --}}

             <div class="card rounded-3" style="width: 20rem;height: 17rem;">
                <div class="warna card-header">
                </div>

                <div class="ca card-header" >
                    <i class="fas fa-edit fa-6x"></i>
                    </div>

                <div style="margin-top: 5%" class="card-body">
                    <p id="tittle_card" class="card-tittle">Pesan Tiket Masuk Online</p>
                    <button type="button" style=" padding-left: 10%;padding-right: 10%;" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modalPesan">
                        Pesan
                      </button>
                </div>
              </div>

            {{-- End Card --}}
            </div>
          </div>
       </center>

    </section>
{{-- end konten tiket --}}

{{-- Konten UMKM --}}

<section id="umkm"  style="background-color: #f5fdfd">

    {{-- Column --}}

    <div class="container">
       
        <center>

            <h2 id="nama_web"  style="color:#167594; padding-top: 5%;margin-bottom: 2%">UMKM</h2>
            <p style="color:#167594;margin-bottom: 3%;" id="item_tulisan">Usaha Kecil dan Menengah (UKM) mempunyai peran yang strategis dalam pembangunan ekonomi warga sarangan, oleh karena selain berperan dalam pertumbuhan ekonomi dan penyerapan tenaga kerja juga berperan dalam pendistribusian hasil-hasil pembangunan.</p>

            <div class="row align-items-start">
                <div class="col-md-4">

                    {{-- start --}}
                    <a style="text-decoration: none;" href="#">

                        <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                            <img src="{!! asset('images/umkm_oleh.png') !!}" class="card-img-top" alt="UMKM Oleh2">
                            <div class="card-body">
                              <p id="tittle_card"  style="color:#167594;margin-top: 4%" class="card-text">Oleh - Oleh</p>
                            </div>
                          </div>
                    </a>
                    {{-- end --}}

                </div>
                <div class="col-md-4">
                {{-- start --}}
                    <a style="text-decoration: none;" href="#">

                        <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                            <img src="{!! asset('images/umkm_sayur.png') !!}" class="card-img-top" alt="UMKM Sayur">
                            <div class="card-body">
                              <p id="tittle_card"  style="color:#167594;margin-top: 4%" class="card-text">Sayur dan Buah</p>
                            </div>
                          </div>
                    </a>
                    {{-- end --}}
                </div>
                <div class="col-md-4">
                   {{-- start --}}
                   <a style="text-decoration: none;" href="#">

                    <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                        <img src="{!! asset('images/umkm_kuliner.png') !!}" class="card-img-top" alt="UMKM Kuliner">
                        <div class="card-body">
                          <p id="tittle_card"  style="color:#167594;margin-top: 4%" class="card-text">Kuliner</p>
                        </div>
                      </div>
                </a>
                {{-- end --}}
                </div>
                 <div class="col-md-4">
                   {{-- start --}}
                   <a style="text-decoration: none;" href="#">

                    <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                        <img src="{!! asset('images/umkm_fashion.png') !!}" class="card-img-top" alt="UMKM Fashion">
                        <div class="card-body">
                          <p id="tittle_card"  style="color:#167594;margin-top: 4%" class="card-text">Fashion</p>
                        </div>
                      </div>
                </a>
                {{-- end --}}
                </div>

                <div class="col-md-4">
                    {{-- start --}}
                    <a style="text-decoration: none;" href="#">
 
                     <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                         <img src="{!! asset('images/umkm_cendra.png') !!}" class="card-img-top" alt="UMKM Cendramata">
                         <div class="card-body">
                           <p id="tittle_card"  style="color:#167594;margin-top: 4%" class="card-text">Cendera Mata</p>
                         </div>
                       </div>
                 </a>
                 {{-- end --}}
                 </div>


                 <div class="col-md-4">
                    {{-- start --}}
                    <a style="text-decoration: none;" href="#">
 
                     <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                         <img src="{!! asset('images/umkm_tanaman.png') !!}" class="card-img-top" alt="UMKM Tanaman">
                         <div class="card-body">
                           <p id="tittle_card"  style="color:#167594;margin-top: 4%" class="card-text">Tanaman</p>
                         </div>
                       </div>
                 </a>
                 {{-- end --}}
                 </div>
        </center>

        </div>

    {{-- End Column --}}

</section>

{{-- End Konten UMKM --}}


{{-- Start Konten Wahana --}}

<section style="margin-bottom: 2%" id="wahana" class="container">

<center>
    <h2 id="nama_web"  style="color:#167594; padding-top: 5%">INFORMASI</h2>
    <h2 id="nama_web"  style="color:#167594; margin-bottom: 5%">WAHANA</h2>
</center>

    <div class="row align-items-start">
        {{-- start wahana --}}
        <div class="col-md-6">
            <img id="gambar_wahana"  src="{!! asset('images/wahana_sepeedboat.png') !!}" class="img-fluid" alt="Speedboat">
        </div>
        <div class="col-md-6">
          <h5 id="nama_web"  style="color:#167594; margin-bottom: 5%">SPEEDBOAT</h5>
          <p id="item_tulisan" style="color:#167594;font-size: 16px" > Pengunjung dapat menikmati serunya berkeliling telaga dengan speedboat. Kapasitas dari speedboat tersebut adalah 3 - 4 orang penumpang. Wahana speedboat ini akan memutari telaga dengan kecepatan tinggi sehingga akan memicu adrenalin pengunjung </p>
         
          <button type="button" class="btn btn-primary rounded-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Harga  <i style="color: white;margin-left: 10px" class="fa fa-info"></i>
          </button>
          
          <button type="button" class="btn btn-secondary rounded-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Jam Buka  <i style="color: white;margin-left: 10px" class="fa fa-info"></i>
          </button>
        </div>

        {{-- End wahana --}}
        

        {{-- Start wahana 2 --}}

        <div style="margin-top: 5%" class="col-md-6">
            <h5 id="nama_web"  style="color:#167594; margin-bottom: 5%">WAHANA KUDA</h5>
            <p id="item_tulisan" style="color:#167594;font-size: 16px" >Untuk pengunjung yang ingin merasakan sensasi menunggangi kuda, di Sarangan terdapat wahana Kuda dimana pada wahana tersebut pengunjung diajak mengelilingi telaga sarangan dengan menaiki kuda </p>
           
            <button type="button" class="btn btn-primary rounded-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Harga  <i style="color: white;margin-left: 10px" class="fa fa-info"></i>
            </button>
            
            <button type="button" class="btn btn-secondary rounded-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Jam Buka  <i style="color: white;margin-left: 10px" class="fa fa-info"></i>
            </button>
          </div>

          <div style="margin-top: 5%" class="col-md-6">
            <img id="gambar_wahana" src="{!! asset('images/wahana_kuda.png') !!}" class="img-fluid" alt="Speedboat">
        </div>

        {{-- End Wahana 2 --}}

        
       
      </div>

</section>

<footer style="background-color:rgba(3, 15, 29, 0.9);padding: 1%" >

    <div class="container">

        <h4 style="color: #FFF">Footer nya diisi apa ya ?</h4>

    </div>


</footer>

{{-- End Konten Wahana --}}

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>
