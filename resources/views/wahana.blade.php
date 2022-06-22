@extends('template_admin')
@section('konten')
    <style>
        .btn-success {
            background-color: #59BCFF;
            border: none;
        }

        .btn-success:hover {
            background-color: #1c557a;
        }

        .btn-success:focus {
            background-color: #1c557a;
            border: none;
        }

        .btn-primary {
            background-color: #5993ff;
            border: none;
        }

        .btn-primary:hover {
            background-color: rgb(20, 62, 90);
        }

        .btn-primary:focus {
            background-color: rgb(20, 62, 90);
            border: none;
        }
    </style>

    <div style="padding: 2%" class="cards mt-2 rounded-3">
        <h3 id="judul">Wahana</h3>
        <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Wahana</h6>

        <div class="d-grid gap-2 d-md-block mt-3"><a class="btn btn-primary" role="button"
                href="{{ url('admin/wahana/simpan') }}">Tambah</a> </div>

        <div class="table-responsive">
            <table class="table table-hover mt-2 text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th class="">Aksi</th>
                </tr>

                @php $count=0; @endphp
                @foreach ($wahana as $wahana)
                    @php $count++; @endphp
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $wahana->nama }}</td>
                        <td>
                            <img src="{!! asset('images/' . $wahana->gambar . '') !!}" class="img-fluid" alt="{{ $wahana->nama }}"
                                style="max-height: 115px; max-width: 200px">
                        </td>
                        <td>
                            <textarea readonly class="form-control" rows="4">{{ $wahana->deskripsi }}</textarea>
                        </td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-success" role="button"
                                    href="wahana/ubah/{{ $wahana->id_wahana }}">Ubah</a>
                                <a class="btn btn-danger" role="button" href="wahana/hapus/{{ $wahana->id_wahana }}"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="text-center modal-title" id="staticBackdropLabel ">Tambah Data Wahana</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Wahana</label>
                  <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gambar Wahana</label>
                    <input type="file" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi Wahana</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Tambah Data</button>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
