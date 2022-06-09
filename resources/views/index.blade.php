<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');


    body {
        background-color: #f5fdfd;
    }

    #nama_web {
        font-family: 'Montserrat', sans-serif;

    }

    #item_tulisan {
        font-family: 'Poppins', sans-serif;
    }

    #isi_cardss {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #167594;
        transition: 0.5s;
    }

    #isi_cards {
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        transition: 0.5s;
        color: #167594;
    }

    #tittle_card {
        font-family: 'Montserrat', sans-serif;
        font-size: 20px;
        font-style: bold;
        color: #167594;
        transition: 0.5s;
    }



    #tiket {
        margin-top: 40px;
    }

    .warna.card-header {
        height: 30px;
        background: #8DBECE;
        transition: 0.5s;
    }



    .ca.card-header {
        background: #FFF;

    }

    i {
        color: #167594;
        transition: 0.5s;
    }

    #gambar_wahana {
        transition: transform .2s;
        /* Animation */
        transition: 0.5s;
    }




    .card {
        box-shadow: 2px 2px rgb(195, 195, 195);
        margin-bottom: 40px;
        transition: 0.5s;

    }

    .btn.btn-primary {
        background-color: #167594;
        padding-left: 5%;
        padding-right: 5%;
        transition: 0.5s;
    }

    .btn.btn-secondary {
        background-color: #168C94;
        padding-left: 5%;
        padding-right: 5%;
        transition: 0.5s;
    }

    /* Hover Version */

    #isi_cardss {

        color: #0a4255;
        transition: 0.5s;
    }

    #isi_cards {

        color: #0a4255;
        transition: 0.5s;
    }

    #tittle_card:hover {

        color: #0a4255;
        transition: 0.5s;
    }

    .card:hover {
        transform: scale(1.2);
    }

    i:hover {
        color: #0a4255;
        transition: 0.5s;

    }

    #gambar_wahana:hover {
        transform: scale(1.2);
        margin-bottom: 3%;
        transition: 0.5s;
    }


    .warna:hover {
        background: #182a30;
        transition: 0.5s;
    }

    .btn.btn-primary:hover {
        background-color: #182a30;
        transition: 0.5s;
    }

    .btn.btn-secondary:hover {
        background-color: #0b494d;
        transition: 0.5s;
    }

    .card-block {
        min-height: 300px;

    }

    #gambar {
        margin: 5%;
        transition: 0.5s;

    }

    #gambar:hover {
        transform: scale(1.4);
        transition: 0.5s;
        padding: 5%;

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

<body data-spy="scroll" style="background-color: #ffffff" data-offset="80">
    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- Navbar End --}}

    {{-- Alert --}}
    @if (session()->has('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

    @if (session()->has('loginError'))
        <script>
            alert('{{ session('loginError') }}');
        </script>
    @endif
    {{-- Alert end --}}

    {{-- Jumbotron --}}
    <section class="jumbotron bg-cover text-white iq-pt-10" style="background-image: linear-gradient(to bottom, rgba(3, 15, 29, 0.7) 50%,rgba(3, 15, 29, 0.6) 100%), url('{!! asset('images/sarangan3.png') !!}');
        background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container">
            <center style="letter-spacing: 1px;">
                <h2 class="iq-tw-6 iq-pt-100" id="nama_webs" style="color: white">Go Telaga Sarangan</h2>
                <p class="lead iq-tw-2 iq-font-14 iq-pt-30" id="item_tulisan">Membantu Anda untuk dapat menemukan tempat
                    wisata yang paling keren</p>
                <p class="iq-tw-2 iq-font-14 iq-mb-0" id="item_tulisan">dan menyenangkan dengan harga terbaik,</p>
                <p class="iq-tw-2 iq-font-14" id="item_tulisan">cari tempat liburan anda sekarang!</p>
                <div class="iq-ptb-30"></div>
                <a href="#tentang" class="btn btn-light rounded-pill iq-font-14 iq-tw-2"
                    style="width: 240px; color:#1D7997;">Yuk Explore!</a>
                <div class="iq-ptb-40"></div>
            </center>
        </div>
    </section>
    {{-- Jumbotron End --}}


    {{-- Konten About --}}

    <section style="padding: 5%" id="tentang">

        <center>
            <h2 id="nama_web" style="color:#1D7997;margin-bottom: 3%">Telaga Sarangan</h2>
        </center>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img id="gambar_wahana" src="{!! asset('images/sarangan_home.jpg') !!}" class="img-fluid rounded-3" alt="Speedboat">
                </div>
                <div class="col-md-6">
                    <p id="item_tulisan" style="color: #1D7997; text-align: justify;">Telaga Sarangan atau Telaga Pasir
                        merupakan destinasi wisata yang unik di daerah Plaosan, Kabupaten Magetan, Jawa Timur. Seperti
                        namanya, Telaga Sarangan merupakaan sebuah telaga yang terletak di lereng Gunung Lawu.
                        Karena terletak di lereng Gunung Lawu, maka Telaga Sarangan memiliki udara yang sejuk dan suhu
                        dingin yang cocok digunakan untuk healing, selain keunikan tersebut Telaga Sarangan menyajikan
                        pemandangan alam yang indah dan asri khas pegunungan,
                        oleh karena itu sangat cocok dijadikan spot foto yang instagramable. Di Telaga Sarangan juga
                        terdapat wahana seperti menaiki kapal, menunggangi kuda. Selain itu juga Telaga Sarangan
                        menawarkan oleh - oleh dan makanan ringan yang khas
                        seperti lempeng, rengginang, jenang candi, sate kelinci, pecel pincuk, berbagai macam souvenir
                        dan masih banyak lagi. Selain itu, Sarangan juga memiliki legenda sendiri yang asik untuk
                        disimak lo, legendanya sendiri menceritakan terbentuknya Telaga Sarangan. <strong>Menurut
                            Legenda</strong>, Telaga Sarangan berasal dari sepasang suami istri yang bernama Kyai Pasir
                        dan Nyai Pasir, setelah bertahun-tahun hidup bersama, Kyai dan Nyai Pasir belum juga dikaruniai
                        buah hati.</p>
                </div>
                <div class="col-md-12">
                    <p id="item_tulisan" style="color: #1D7997; text-align: justify;">
                        Suatu ketika, Kyai dan Nyai Pasir bersemedi untuk memohon kepada Sang Hyang Widhi agar segera
                        diberikan anak.
                        Harapan pasangan ini pun terkabul, mereka dikaruniai seorang anak laki-laki yang diberi nama
                        Joko Lelung. Untuk memenuhi kebutuhan sehari-hari, Kyai dan Nyai Pasir bekerja dengan bercocok
                        tanam dan berburu.
                        Pekerjaan mereka bisa dibilang cukup berat, sehingga kesehatan fisik menjadi sangat penting.
                        Supaya kondisi fisik mereka selalu sehat, Kyai dan Nyai Pasir kembali bersemedi dan memohon
                        kepada Sang Hyang Widhi, ditengah bersemdi, pasutri ini mendapat amanat bahwa keinginanya akan
                        terkabul jika berhasil menemukan dan memakan telur yang ada di dekat ladangnya.
                        Tidak lama kemudian, Nyai Pasir menemukan telur dan membawanya pulang untuk dimasak. Telur itu
                        kemudian dibagi menjadi dua untuk dimakan bersama Kyai Pasir. Setelah memakan telur itu, Kyai
                        Pasir kembali ke ladang, Anehnya, di tengah perjalanan, badannya terasa panas dan sangat
                        gatal.Karena tidak kuasa menahan gatal, Kyai Pasir terus menggaruknya
                        hingga terluk, singkat cerita mereka pun berubah menjadi ular naga yang sangat besar, Kyai dan
                        Nyai Pasir yang sudah berubah menjadi ular naga, terus berguling di atas pasir hingga membentuk
                        cekungan yang dalam dan besar. Dalam cekungan tersebut kemudian keluar air yang sangat deras dan
                        menggenanginya.
                        Menyadari kekuatan yang dimilikinya, Kyai dan Nyai Pasir berniat untuk membuat cekungan yang
                        lebih besar untuk menenggelamkan Gunung Lawu. Joko Lelung mengetahui niat kedua orang tuanya,
                        kemudian bersemedi memohon agar niat jahat tersebut tidak terjadi.
                        Permintaan Joko Lelung pun diterima oleh Sang Hyang Widhi dan kedua orang tuanya berhasil
                        ditenangkan. Akan tetapi cerukan tanah yang dibuat oleh Kyai dan Nyai Pasir masih terus terisi
                        air hingga membentuk sebuah telaga, yakni Telaga Sarangan. </p>
                </div>



                {{-- card --}}

                <div style="margin-bottom: 2%" class="row overflow-hidden">
                    <div class="col-sm-4 ">
                        <img id="gambar" src="{!! asset('images/pemandangan1.jpg') !!}" width="300" class="img-fluid rounded-3"
                            alt="...">
                    </div>
                    <div class="col-sm-4 scroll">
                        <img id="gambar" src="{!! asset('images/pemandangan2.jpg') !!}" width="300" class="img-fluid rounded-3"
                            alt="...">

                    </div>
                    <div class="col-sm-4">
                        <img id="gambar" src="{!! asset('images/pemandangan3.jpg') !!}" width="300" class="img-fluid rounded-3"
                            alt="...">

                    </div>

                    <div class="col-sm-4">
                        <img id="gambar" src="{!! asset('images/pemandangan4.jpg') !!}" width="300" class="img-fluid rounded-3"
                            alt="...">

                    </div>

                    <div class="col-sm-4">
                        <img id="gambar" src="{!! asset('images/pemandangan5.jpg') !!}" width="300" class="img-fluid rounded-3"
                            alt="...">

                    </div>

                    <div class="col-sm-4">
                        <img id="gambar" src="{!! asset('images/pemandangan6.jpg') !!}" width="300" class="img-fluid rounded-3"
                            alt="...">

                    </div>
                </div>


                {{-- end card --}}



            </div>
        </div>

    </section>

    {{-- End Konten About --}}



    {{-- Konten Tiket --}}
    <section id="tiket" style="background-color: #f5fdfd;padding-top: 2%;padding-bottom: 2%">

        <div class="container">
            <center>

                <h2 id="nama_web" style="color: #1D7997;margin-bottom: 3%">Tiket Masuk</h2>
                <div class="row align-items-center">
                    {{-- Card info harga --}}

                    <div class="col-md-4">

                        {{-- Start Card --}}

                        <div class="card rounded-3" style="width: 20rem;height: 17rem;">
                            <div class="warna card-header">
                            </div>

                            <div class="ca card-header">
                                <i class="fas fa-ticket-alt fa-7x"></i>
                            </div>

                            <div class="card-body">
                                <p id="tittle_card" class="card-tittle">Harga Tiket Masuk</p>
                                <div class="row align-items-center">
                                    {{-- Start --}}

                                    <div class="col">
                                        <p id="isi_cards" class="card-text"> Dewasa: </p>
                                        <p id="isi_cardss" class="card-text"> Rp.20.000 </p>
                                    </div>
                                    <div class="col">
                                        <p id="isi_cards" class="card-text"> Anak - Anak: </p>
                                        <p id="isi_cardss" class="card-text"> Rp.10.000 </p>
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

                            <div class="ca card-header">
                                <i class="	fas fa-check-circle fa-6x"></i>
                            </div>

                            <div style="margin-top: 5%" class="card-body">
                                <p id="tittle_card" class="card-tittle">Status Tiket Masuk</p>
                                <p id="isi_cardss" class="card-text"> Tersedia </p>
                            </div>
                            <div>
                            </div>
                        </div>

                        {{-- End Card --}}
                    </div>
                    <div class="col-md-4">
                        {{-- Start Card --}}

                        <div class="card rounded-3" style="width: 20rem;height: 17rem;">
                            <div class="warna card-header">
                            </div>

                            <div class="ca card-header">
                                <i class="fas fa-edit fa-6x"></i>
                            </div>

                            <div style="margin-top: 5%" class="card-body">
                                <p id="tittle_card" class="card-tittle">Pesan Tiket Masuk Online</p>
                                <button type="button" style=" padding-left: 10%;padding-right: 10%;"
                                    class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                                    data-bs-target="#PesanModal">
                                    Pesan
                                </button>     
                            </div>
                        </div>

                        {{-- End Card --}}
                    </div>
                    
                    <div class="col-md-12">
                        {{-- Start Card --}}

                        <div class="card rounded-3" style="width: 20rem;height: 17rem;">
                            <div class="warna card-header">
                            </div>

                            <div class="ca card-header">
                                <i class="fas fa-history fa-6x"></i>
                            </div>

                            <div style="margin-top: 5%" class="card-body">
                                <p id="tittle_card" class="card-tittle">Riwayat Pemesanan Tiket</p>
                                <button type="button" style=" padding-left: 10%;padding-right: 10%;"
                                    class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                                    data-bs-target="#RiwayatModal">
                                    Cek Riwayat Pemesanan
                                </button>
                            </div>
                        </div>
                        
                        {{-- End Card --}}
                    </div>
                    
                </div>
            </center>
        </div>

    </section>
    {{-- end konten tiket --}}


    {{-- Konten UMKM --}}

    <section id="umkm">

        {{-- Column --}}

        <div class="container">

            <center>

                <h2 id="nama_web" style="color:#167594; padding-top: 5%;margin-bottom: 2%">UMKM</h2>
                <p style="color:#167594;margin-bottom: 3%;" id="item_tulisan">Usaha Menengah Kecil Micro (UMKM)
                    mempunyai peran yang strategis dalam pembangunan ekonomi warga sarangan, oleh karena selain berperan
                    dalam pertumbuhan ekonomi dan penyerapan tenaga kerja juga berperan dalam pendistribusian
                    hasil-hasil pembangunan.</p>

                <div class="row align-items-start">
                    <div class="col-md-4">

                        {{-- start --}}
                        <a style="text-decoration: none;" href="umkm/1">

                            <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                                <img src="{!! asset('images/umkm_oleh.png') !!}" class="card-img-top" alt="UMKM Oleh2">
                                <div class="card-body">
                                    <p id="tittle_card" style="color:#167594;margin-top: 4%" class="card-text">Oleh
                                        - Oleh</p>
                                </div>
                            </div>
                        </a>
                        {{-- end --}}

                    </div>
                    <div class="col-md-4">
                        {{-- start --}}
                        <a style="text-decoration: none;" href="umkm/2">

                            <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                                <img src="{!! asset('images/umkm_sayur.png') !!}" class="card-img-top" alt="UMKM Sayur">
                                <div class="card-body">
                                    <p id="tittle_card" style="color:#167594;margin-top: 4%" class="card-text">
                                        Sayur dan Buah</p>
                                </div>
                            </div>
                        </a>
                        {{-- end --}}
                    </div>
                    <div class="col-md-4">
                        {{-- start --}}
                        <a style="text-decoration: none;" href="umkm/3">

                            <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                                <img src="{!! asset('images/umkm_kuliner.png') !!}" class="card-img-top" alt="UMKM Kuliner">
                                <div class="card-body">
                                    <p id="tittle_card" style="color:#167594;margin-top: 4%" class="card-text">
                                        Kuliner</p>
                                </div>
                            </div>
                        </a>
                        {{-- end --}}
                    </div>
                    <div class="col-md-4">
                        {{-- start --}}
                        <a style="text-decoration: none;" href="umkm/4">

                            <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                                <img src="{!! asset('images/umkm_fashion.png') !!}" class="card-img-top" alt="UMKM Fashion">
                                <div class="card-body">
                                    <p id="tittle_card" style="color:#167594;margin-top: 4%" class="card-text">
                                        Fashion</p>
                                </div>
                            </div>
                        </a>
                        {{-- end --}}
                    </div>

                    <div class="col-md-4">
                        {{-- start --}}
                        <a style="text-decoration: none;" href="umkm/5">

                            <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                                <img src="{!! asset('images/umkm_cendra.png') !!}" class="card-img-top" alt="UMKM Cendramata">
                                <div class="card-body">
                                    <p id="tittle_card" style="color:#167594;margin-top: 4%" class="card-text">
                                        Cendera Mata</p>
                                </div>
                            </div>
                        </a>
                        {{-- end --}}
                    </div>


                    <div class="col-md-4">
                        {{-- start --}}
                        <a style="text-decoration: none;" href="umkm/6">

                            <div class="card rounded-3" style="width: 18rem; height: 15rem; padding: 10%">
                                <img src="{!! asset('images/umkm_tanaman.png') !!}" class="card-img-top" alt="UMKM Tanaman">
                                <div class="card-body">
                                    <p id="tittle_card" style="color:#167594;margin-top: 4%" class="card-text">
                                        Tanaman</p>
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

    <section style="margin-bottom: 2%;background-color: #f5fdfd" id="wahana">

        <div class="container">
            <center>
                <h2 id="nama_web" style="color:#167594; padding-top: 5%">INFORMASI</h2>
                <h2 id="nama_web" style="color:#167594; margin-bottom: 5%">WAHANA</h2>
            </center>

            <div class="row align-items-start">
            @foreach($wahana as $wahana)
            @php
                $count = 0;
                $count ++;
            @endphp
            {{-- <?php if ($count % 2 == 0) {?> --}}
                {{-- start wahana --}}
                
                
                <div class="col-md-6" style="margin-top: 5%">
                    <img id="gambar_wahana" style='height:300px; max-width:450px' src="{!! asset('images/'.$wahana->gambar.'') !!}" class="img-fluid" alt="Speedboat">
                </div>
                <div class="col-md-6" style="margin-top: 5%">
                    <h5 id="nama_web" style="color:#167594; margin-bottom: 5%">{{$wahana->nama}}</h5>
                    
                    <p id="item_tulisan" style="color:#167594;font-size: 16px; text-align: justify;"> {{$wahana->deskripsi}} </p>
                    @php
                        $cost2 = '';
                        if ($wahana->nama_harga2 != null) $cost2 = $wahana->nama_harga2 .": Rp. ". $wahana->harga2 .".000";
                    @endphp
                    <p id="item_tulisan" style="color:#167594;font-size: 16px; text-align: justify;"> {{$wahana->nama_harga}} : Rp. {{$wahana->harga}}.000 
                                                                                                <br> {{$cost2}} </p>  
                </div>

                {{-- End wahana --}}

                {{-- 
                <?php } else { ?>--}}
                
                <!-- {{--start wahana2--}}
                <div style="margin-top: 5%" class="col-md-6">
                    <h5 id="nama_web"  style="color:#167594; margin-bottom: 5%">{{$wahana->nama}}</h5>
                    <p id="item_tulisan" style="color:#167594;font-size: 16px; text-align: justify;">{{$wahana->deskripsi}} </p>
                    @php
                        $cost2 = '';
                        if ($wahana->nama_harga2 != null) $cost2 = $wahana->nama_harga2 .": Rp. ". $wahana->harga2 .".000";
                    @endphp
                    <p id="item_tulisan" style="color:#167594;font-size: 16px; text-align: justify;"> {{$wahana->nama_harga}} : Rp. {{$wahana->harga}}.000
                                                                                                        <br> {{$cost2}} </p>  
                </div>

                <div style="margin-top: 5%" class="col-md-6">
                    <img id="gambar_wahana" style='height:300px; max-width:450px' src="{!! asset('images/'.$wahana->gambar.'') !!}" class="img-fluid" alt="Speedboat">
                </div>
                {{--end wahana2--}} -->
                {{-- <?php ; } ?> --}}
            @endforeach


            </div>
        </div>

    </section>

    <footer style="background-color:rgba(3, 15, 29, 0.9);padding: 1%">

        <div class="container">
            <div class="row align-item-start">
                <div class="col-md-6">
                    <h6 style="color: #FFF;margin-bottom: 3%" id="nama_web">Informasi Telaga Sarangan</h6>
                    <p> Jalan Raya Telaga Sarangan, Sarangan, Plaosan, Telaga Pasir, Sarangan, Plaosan, Kabupaten
                        Magetan, Jawa Timur 63361.</p>
                    <p><i style="color: white;margin-left: 10px" class="fa fa-phone"></i><a></a> +628123456xx</p>
                    <p href="https://www.instagram.com/gotelagasarangan/"><i style="color: white;margin-left: 10px"
                            class="fa fa-instagram"></i> @gotelagasarangan_</p>
                    <p><i style="color: white;margin-left: 10px" class="fa fa-envelope"></i> gotelagasarangan@gmail.com
                    </p>
                    <p><i style="color: white;margin-left: 10px" class="fa fa-facebook"></i> gotelagasarangan</p>
                    <h6 style="color: #FFF;margin-bottom: 3%" id="nama_web">MAMONIR</h6>
                    <p>Kami Membantu wisata anda, dimanapun dan kapanpun.</p>
                </div>
                <!-- <div class="col-md-6">
                    <h6 style="color: #FFF;margin-bottom: 3%" id="nama_web">Contact Us</h6>
                    <div class="row">
                    <i style="color: white;margin-left: 10px" class="fa fa-phone"> +628123456xx</i>
                    <p></p>
                    <i style="color: white;margin-left: 10px" class="fa fa-instagram"> @gotelagasarangan_</i>
                    <p></p>
                    <i style="color: white;margin-left: 10px" class="fa fa-envelope"> gotelagasarangan@gmail.com</i>
                </div>
                 -->

                <div class="col-md-6">
                    <h6 style="color: #FFF;margin-bottom: 3%" id="nama_web">Lokasi Telaga Sarangan</h6>
                    <iframe style="margin-bottom: 3%"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15816.22055288366!2d111.20902322421088!3d-7.677221761446002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e798e9941fbceb1%3A0x49bf06f3bb4505db!2sTelaga%20Sarangan!5e0!3m2!1sid!2sid!4v1654059780643!5m2!1sid!2sid"
                        width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
        <center>
            <div class="row iq-mt-10">
                <div class="mx-auto">
                    <div class="iq-copyright ">
                        Copyright @
                        <script>
                            document.write(new Date().getFullYear())
                        </script> MAMONIR All Rights Reserved
                    </div>
                </div>
            </div>
            </div>
        </center>


    </footer>

    {{-- End Konten Wahana --}}

    {{-- Login modal --}}
    @include('partials.login-modal')
    {{-- Login modal End --}}

    {{-- Login modal --}}
    @include('partials.registrasi-modal')
    {{-- Login modal End --}}

    {{-- Pesan modal --}}
    @include('partials.pesan-modal')
    {{-- Pesan modal End --}}

    {{-- Riwayat modal --}}
    @include('partials.riwayat-modal')
    {{-- Riwayat modal End --}}

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>
