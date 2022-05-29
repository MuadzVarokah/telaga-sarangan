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
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}">
</head>

<body data-spy="scroll" data-offset="80">
    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- Navbar End --}}

    {{-- Jumbotron --}}
    <section class="jumbotron bg-cover text-white iq-pt-100" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url('{!! asset('images/sarangan.jpg') !!}');
        background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container">
            <center style="letter-spacing: 1px;">
                <h2 class="iq-tw-6 iq-pt-100" style="color: white">Go Telaga Sarangan</h2>
                <p class="lead iq-tw-2 iq-font-20 iq-pt-30">Membantu  Anda  untuk  dapat  menemukan  tempat  wisata  yang  paling  keren</p>
                <p class="iq-tw-2 iq-font-20 iq-mb-0">dan  menyenangkan  dengan  harga  terbaik,</p>
                <p class="iq-tw-2 iq-font-20">cari  tempat  liburan  anda  sekarang!</p>
                <div class="iq-ptb-80"></div>
                <a href="#" class="btn btn-light rounded-pill iq-font-20 iq-tw-2"
                                style="width: 240px; color:deepskyblue;">Yuk Explore!</a>
                <div class="iq-ptb-10"></div>
            </center>
        </div>
    </section>
    {{-- Jumbotron End --}}

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
