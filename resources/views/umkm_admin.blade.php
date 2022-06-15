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

<div style="padding: 2%" class="cards mt-2 rounded-3">
    <h3 id="judul" >Kategori UMKM</h3>
    <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Kategori UMKM</h6>

    <div class="d-grid gap-2 d-md-block mt-3"> <button class="btn btn-primary">Tambah</button> </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">
            <tr>
      
              <th>ID UMKM</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th class="">Aksi</th>
      
            </tr>
      
            <tr>
     
              <td>1</td>
              <td>Oleh - Oleh</td>
              <td><img src=""  class="img-fluid" alt="image Oleh2"></td>
              <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
            </tr>
                  
            <tr>
                
                <td>2</td>
                <td>Oleh - Oleh</td>
                <td><img src=""  class="img-fluid" alt="image Oleh2"></td>
                <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
              </tr>
      
            
      
          </table>
    </div>
    
  </div>
@endsection
