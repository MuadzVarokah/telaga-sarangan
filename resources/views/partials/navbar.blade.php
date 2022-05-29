<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

#nama_web {
    font-family:'Montserrat', sans-serif;
}

#item_tulisan {
    font-family:'Poppins', sans-serif;
}

</style>

<header class="nanav" id="main-header" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a id="nama_web" class="navbar-brand iq-tw-6" href="{{ url('dashboard') }}" style="color: white">Go Telaga
                        Sarangan</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" style="background-color: white">
                        <span class="navbar-toggler-icon"
                            style="height: 1.2em; width: 1.1em; background-size: 90%"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul  class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a id="item_tulisan" class="nav-link iq-tw-3" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a id="item_tulisan" class="nav-link iq-tw-3" href="#umkm">UMKM</a>
                            </li>
                            <li class="nav-item">
                                <a id="item_tulisan" class="nav-link iq-tw-3" href="#wahana">Informasi Wahana</a>
                            </li>
                            <li class="nav-item">
                                <a id="item_tulisan" class="nav-link iq-tw-3" href="#tiket">Informasi Pemesanan Tiket</a>
                            </li>
                            <li class="iq-pr-10"></li>
                        </ul>
                        <div class="d-flex">
                            <a id="item_tulisan" href="#" class="btn btn-light rounded-pill pull-right iq-tw-3"
                                style="width: 120px; color:#1D7997; padding-top: 7px">Login</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    $(window).scroll(function() {
      if ($(window).scrollTop() >= 50) {
        $('.nanav').css('background', 'rgba(3, 15, 29, 0.9)');
      } else {
        $('.nanav').css('background', 'transparent');
      }
    });
    </script>