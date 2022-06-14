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
    <h3 id="judul" >Wahana</h3>
    <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Wahana</h6>

    <div class="d-grid gap-2 d-md-block mt-3"> <button class="btn btn-primary">Tambah</button> </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">
            <tr>
      
              <th>No</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th class="">Aksi</th>
      
            </tr>
      
            <tr>
              <td>1</td>
              <td>Speedboat</td>
              <td><img src="{!! asset('images/bg_admin.png') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
              <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >Merupakan Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
              <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
    
            </tr>
            <tr>
                <td>2</td>
                <td>Kuda</td>
                <td><img src="{!! asset('images/bg_admin.png') !!}" width="150"  class="img-fluid" alt="Responsive image"></td>
                <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >Merupakan Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
                <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
      
              </tr>
      
            
      
          </table>
    </div>
    
  </div>

@endsection
