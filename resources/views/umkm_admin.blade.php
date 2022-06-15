@extends('template_admin')
@section('konten')

<style>
    .btn-success {
        background-color: #59BCFF;
        border:none;
    }

    .btn-success:hover {
        background-color: #1c557a;
    }

    .btn-success:focus {
        background-color: #1c557a;
        border:none;
    }

    .btn-primary {
        background-color: #5993ff;
        border:none;
    }

    .btn-primary:hover {
        background-color: rgb(20, 62, 90);
    }

    .btn-primary:focus {
        background-color: rgb(20, 62, 90);
        border:none;
    }
</style>
    <div class="d-grid gap-2 d-md-block mt-3"> <button class="btn btn-primary">Tambah UMKM <b>+</b></button> </div>
        <div class="card-body">
        <div class="row">
            <div class="col-md-4 mt-1">
                <div style="width: 27rem;height: 13.6rem;" class="cards mt-4 rounded-3">
                    <img src="{!! asset('images/a3.png') !!}" width="456"  class="img-fluid" alt="Responsive image">
                    <!-- <div class="col-lg-10"> -->
                        <h5 align="left" class="modal-title" id="ModalUmkm"
                            style="padding: 2%; color:#167594;">
                            Jumlah Data UMKM<br><b> 123</b></h5>
                </div>
            </div>
        </div>
@endsection
