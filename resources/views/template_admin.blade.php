<!doctype html>
<html lang="en">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    #sidebar {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #judul {
        font-family: 'Poppins', sans-serif;
    }


    .cards {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    th {
        color: #898989;
    }

    #side_item {
        font-family: 'Poppins', sans-serif;
        color: #202020;
    }

    #bar {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 0 rgba(0, 0, 0, 0.19);
        /* border-left-style: solid;
          border-width: 2px;
          border-color: #9b9b9b */
    }

    .material-icons {

        color: #808080;
    }

    .background_click {
        color: yellowgreen;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Telaga Sarangan Admin</title>
</head>

<body>

    {{-- Alert --}}
    @if (session()->has('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
    {{-- Alert end --}}

    {{-- sidebar --}}
    {{-- <div class="container-fluid"> --}}
    <div class="row flex-nowrap g-0">
        <div id="sidebar" class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/"
                    class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span style="font-family: 'Montserrat', sans-serif;color: #3587A2"
                        class="fs-5 d-none d-sm-inline">Go Telaga Sarangan</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                    id="menu">

                    <li class="nav-item">
                        <a href="/admin" id="background_klik" class="nav-link align-middle px-0">
                            <i class="material-icons">dashboard</i> <span id="side_item"
                                class=" ms-1 d-none d-sm-inline ">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/tiket" class="nav-link px-0 align-middle">
                            <i class="material-icons">check_box</i> <span id="side_item"
                                class="ms-1 d-none d-sm-inline">Tiket</span></a>
                    </li>

                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="material-icons">domain</i> <span id="side_item"
                                class="ms-1 d-none d-sm-inline">UMKM</span></a>
                        <ul class="collapse" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="/admin/umkm_admin" class="nav-link px-0"> <span id="side_item"
                                        style="color: #808080" class="d-none d-sm-inline">Jenis UMKM</span> </a>
                            </li>
                            <li>
                                <a href="/admin/item_umkm_admin" class="nav-link px-0"> <span id="side_item"
                                        style="color: #808080" class="d-none d-sm-inline">List UMKM</span> </a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="#" class="nav-link px-0 align-middle">
                          <i class="material-icons">domain</i> <span id="side_item" class="ms-1 d-none d-sm-inline">UMKM</span></a>
                    </li> --}}


                    <li class="nav-item">
                        <a href="/admin/data_pengunjung" class="nav-link px-0 align-middle">
                            <i class="material-icons">assignment</i> <span id="side_item"
                                class="ms-1 d-none d-sm-inline">Data Pengunjung</span></a>
                    </li>


                    <li class="nav-item">
                        <a href="/admin/wahana" class="nav-link px-0 align-middle">
                            <i class="material-icons">event_note</i> <span id="side_item"
                                class="ms-1 d-none d-sm-inline">Info Wahana</span></a>
                    </li>


                    <li class="nav-item">
                      <a href="/admin/data_pengunjung" class="nav-link px-0 align-middle">
                        <i class="material-icons">assignment</i>  <span id="side_item" class="ms-1 d-none d-sm-inline">Data Pengunjung</span></a>
                  </li>

                  
                  <li class="nav-item">
                    <a href="/admin/wahana" class="nav-link px-0 align-middle">
                      <i class="material-icons">event_note</i> <span id="side_item" class="ms-1 d-none d-sm-inline">Info Wahana</span></a>
                </li>

                
                <li class="nav-item">
                  <a href="/admin/aduan_admin" class="nav-link px-0 align-middle">
                    <i class="material-icons">mail</i> <span id="side_item" class="ms-1 d-none d-sm-inline">Saran dan Aduan</span></a>
              </li>


                      
                     
                      {{-- <li>
                          <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                              <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                          <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                              <li class="w-100">
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                              </li>
                          </ul>
                      </li> --}}
                    {{-- <li>
                          <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                              <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                              <li class="w-100">
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                              </li>
                              <li>
                                  <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                              </li>
                          </ul>
                      </li> --}}
                    {{-- <li>
                          <a href="#" class="nav-link px-0 align-middle">
                              <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                      </li> --}}
                </ul>
                <hr>

            </div>
        </div>
        <div class="col">

            <nav id="bar" class="navbar navbar-light" style=" padding-bottom: 10px;">
                <div class="container-fluid">
                    <a class="navbar-brand"></a>
                    <div class="d-flex justify-content-end">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                            class="rounded-circle mt-1">
                        <div class="btn-group ml-auto justify-content-end">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="color:#202020">{{ auth()->user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#" style="padding-left: 20%">Profil</a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="#">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row" style="width: 100%">
                    <div class="col"></div>
                    <div class="col text-end">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                            class="rounded-circle">
                    </div>
                    <div class="col-2 text-end">
                        Admin
                    </div>
                </div> --}}
            </nav>

            <div style="margin-left: 2%;margin-right: 5%" class="col py-3 ">
                <div class="container-fluid">
                    @yield('konten')

                </div>
            </div>

        </div>

    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>
