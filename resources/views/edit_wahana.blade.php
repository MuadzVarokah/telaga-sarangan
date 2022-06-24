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
        <h3 id="judul">Ubah Daftar Wahana</h3>
        <h6 class="card-subtitle mb-2 text-muted">Ubah Informasi Wahana</h6>
        <br>
        <form action="{{ url('admin/wahana/update', $wahana->id_wahana) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Wahana</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" minlength="3"
                    required value="{{ $wahana->nama }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                    <label for="harga1" class="form-label">Harga 1</label>
                    <div class="input-group mb-3 row">
                        <label for="nama_harga" class="col-auto col-form-label" style="width: 145px">Jumlah Putaran
                            :</label>
                        <div class="col-auto" style="width: 135px">
                            <input type="text" class="form-control" name="nama_harga" id="nama_harga" minlength="1"
                                maxlength="2" value="{{ $wahana->nama_harga }}">
                        </div>
                    </div>
                    <div class="row">
                        <label for="harga" class="col-auto col-form-label" style="width: 100px">Harga :</label>
                        <div class="col-auto input-group mb-3" style="width: 180px">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="harga" minlength="1" maxlength="3"
                                value="{{ $wahana->harga }}" onkeypress="return hanyaAngka(event)">
                            <span class="input-group-text">.000</span>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col">
                    <label for="harga1" class="form-label">Harga 2</label>
                    <div class="input-group mb-3 row">
                        <label for="nama_harga2" class="col-auto col-form-label" style="width: 145px">Jumlah Putaran
                            :</label>
                        <div class="col-auto" style="width: 135px">
                            <input type="text" class="form-control" name="nama_harga2" id="nama_harga2"
                                value="{{ $wahana->nama_harga2 }}">
                        </div>
                    </div>
                    <div class="row">
                        <label for="harga2" class="col-auto col-form-label" style="width: 100px">Harga :</label>
                        <div class="col-auto input-group mb-3" style="width: 180px">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="harga2" value="{{ $wahana->harga2 }}">
                            <span class="input-group-text">.000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Lama</label></br>
                <img src="{!! asset('images/' . $wahana->gambar . '') !!}" alt={{ $wahana->nama }} style="max-height: 200px">
                <p>{{ $wahana->gambar }}</p>
                <input type="hidden" class="form-control" name="gambar_lama" value="{{ $wahana->gambar }}">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                    name="gambar">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="3">{{ $wahana->deskripsi }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="button" onclick="history.back();" class="btn btn-danger">Batal</button>
            <button type="submit" class="btn btn-success">Ubah</button>
        </form>
    </div>
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
@endsection
