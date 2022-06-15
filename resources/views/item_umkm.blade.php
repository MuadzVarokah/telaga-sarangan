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

    
    <div class="d-grid gap-2 d-md-block mt-3"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
        Tambah
      </button> </div>

    <div class="table-responsive">
        <table class="table table-hover mt-2 text-center">
            <tr>
                <th>No</th>
              <th>Jenis UMKM</th>
              <th>Nama Barang</th>
              <th>Gambar Barang</th>
              <th>Keterangan</th>
              <th>Harga Terendah</th>
              <th>Harga Tertinggi</th>
              <th class="">Aksi</th>
      
            </tr>
      
            <tr>
     
              <td>1</td>
              <td>Oleh - Oleh</td>
              <td>Pisau</td>
              <td><img src=""  class="img-fluid" alt="image Oleh2"></td>
              <td><textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3" >Merupakan Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
              <td>Rp.10.000</td>
              <td>Rp.15.000</td>
              
              <td> <div class="d-grid gap-2 d-md-block"> <button class="btn btn-success">Ubah</button>  <button class="btn btn-danger ">Hapus</button></div>  </td>
            </tr>
                  
            <tr>
     
                <td>1</td>
                <td>Oleh - Oleh</td>
                <td>Pisau</td>
                <td><img src=""  class="img-fluid" alt="image Oleh2"></td>
                <td><textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="3" >Merupakan Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio dolores ex animi cupiditate deserunt accusantium consequuntur ab. Repudiandae atque laborum officia ipsa possimus libero rerum quam nostrum eaque! Laborum, magni!</textarea></td>
                <td>Rp.10.000</td>
                <td>Rp.15.000</td>
                
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
          <h5 class="text-center modal-title" id="staticBackdropLabel ">Tambah Data UMKM</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis UMKM</label>
                  <select class="form-select" aria-label="Default select example">
                    <option value="1">Oleh2</option>
                    <option value="2">Wisata Malam</option>
                    <option value="3">Cewek</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar Barang</label>
                    <input type="file" class="form-control">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Keterangan Barang</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga Terendah</label>
                    <input type="number" class="form-control">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga Tertinggi</label>
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
