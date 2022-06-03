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

/* .card:hover {
    transform: scale(1.2);
} */

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
    <section class="jumbotron bg-cover text-white iq-pt-10" style="background-image: linear-gradient(to bottom, rgba(3, 15, 29, 0.7) 50%,rgba(3, 15, 29, 0.6) 100%), url('{!! asset('images/umkm.png') !!}');
        background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container">
            <center style="letter-spacing: 1px;">
                <h2 class="iq-tw-6 iq-pt-100" id="nama_webs" style="color: white"><p>UMKM</p>{{$group->nama}}</h2>
                <!-- <p class="lead iq-tw-2 iq-font-14 iq-pt-30" id="item_tulisan">Yuk temukan informasi buah, sayuran segar yang langsung dipetik dari perkebunanan atau persawahan</p> -->
                <p class="lead iq-tw-2 iq-font-14 iq-pt-30" id="item_tulisan">{{$group->nama}} terbaik dari Telaga Sarangan</p>
                <div class="iq-ptb-30"></div>
                <div class="iq-ptb-40"></div>
            </center>
        </div>
    </section>

{{-- Konten UMKM --}}

<section id="umkm"  style="background-color: #f5fdfd">

    {{-- Column --}}

    <div class="container">
      <div class="row justify-content-md-center">
        @foreach ($data as $data)
        {{--
        <?php if ($data != null) {?> --}}
        <div class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex border-0"style=" margin-left:5%; margin-right:3%; padding-left:1%; padding-right:1%; min-width:20%; max-width: 40%; max-height:100%">
          <a href="{{ url('umkm/') }}/#" style="text-decoration: none">
            <div class="iq-blog text-left iq-ptb-30 d-flex  ">
              <div class="m-auto justify-content-center align-items-center" style="width: 100%; min-height:250px; height:100%; max-height:800px">
                @php
                $foto = $data->gambar;
                if ($data->gambar == null) $foto = 'notfound.jpg';
                @endphp
                <div class="card m-auto justify-content-center bg-transparent border-0" 
                style="
                                background: url({!! asset('images/' . $foto . '') !!});
                                background-size:cover;
                                background-position: center;
                                padding-top:30%; 
                                width:auto; 
                                min-width:100%;
                                max-width: 150%; 
                                min-height:100%;
                                max-height:150%;
                                max-width: 150px;
                                min-width: 100px;
                                max-height:150px;
                                min-height: 100px; 

                              ">
                </div>
                <h5 class="text-center iq-tw-6 iq-pb-5" style="font-size: 80%; margin-left:10%; margin-right:10%;">{{$data->barang}}</h5> <br>
                
                <p class='text-center m-auto' style="font-size: 75%;">{{$data->keterangan}}
                <p class='text-center' style=" font-size: 75%;">Harga: {{$data->harga_terendah}} - {{$data->harga_tertinggi}}</p>
                
              </div>
            </div>
          </a>
        </div>
        {{--
        <?php } else { ?>
        <h5>Data tidak ditemukan</h5>
        <?php } ?> --}}
        @endforeach
        <!---->
      </div>

</section>


</body>

</html>