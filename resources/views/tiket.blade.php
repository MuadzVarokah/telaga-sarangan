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
    <h3 id="judul" >Tiket Masuk</h3>
    <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Tiket Masuk</h6>

 
    <div class="d-grid gap-2 d-md-block mt-3"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
      Tambah
    </button> </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">
            <tr>
      
              <th>No</th>
              <th>Jenis Tiket</th>
              <th>Harga</th>
              <th class="">Aksi</th>
      
            </tr>
      
            <tr>
              <td>1</td>
              <td>Dewasa</td>
              <td>Rp. 20.000</td>
              <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
      
      
            </tr>
            <tr>
              <td>2</td>
              <td>Anak - anak</td>
              <td>Rp. 10.000</td>
              <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
      
      
            </tr>
      
            
      
          </table>
    </div>
    
  </div>

   <!-- Modal -->
<div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="text-center modal-title" id="staticBackdropLabel ">Tambah Data Tiket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form>
              
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Tiker</label>
                <input type="text" class="form-control">
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga</label>
                  <input type="number" class="form-control">
                </div>

             
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>

@endsection
