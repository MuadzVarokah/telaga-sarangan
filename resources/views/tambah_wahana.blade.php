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
        <h3 id="judul">Tambah Daftar Wahana</h3>
        <h6 class="card-subtitle mb-2 text-muted">Tambah Data Wahana</h6>
        <br>
        <form action="{{ url('admin/wahana/tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Wahana</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" minlength="3"
                    required value="{{ old('nama') }}">
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
                            <input type="text" class="form-control @error('nama_harga') is-invalid @enderror"
                                name="nama_harga" id="nama_harga" value="{{ old('nama_harga') }}" required>
                        </div>
                        @error('nama_harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="harga" class="col-auto col-form-label" style="width: 100px">Harga :</label>
                        <div class="col-auto input-group mb-3" style="width: 180px">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                minlength="1" maxlength="3" value="{{ old('harga') }}"
                                onkeypress="return hanyaAngka(event)" required>
                            <span class="input-group-text">.000</span>
                        </div>
                        @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 col">
                    <label for="harga1" class="form-label">Harga 2</label>
                    <div class="input-group mb-3 row">
                        <label for="nama_harga2" class="col-auto col-form-label" style="width: 145px">Jumlah Putaran
                            :</label>
                        <div class="col-auto" style="width: 135px">
                            <input type="text" class="form-control @error('nama_harga') is-invalid @enderror"
                                name="nama_harga2" id="nama_harga2" value="{{ old('nama_harga') }}">
                        </div>
                        @error('nama_harga2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="harga2" class="col-auto col-form-label" style="width: 100px">Harga :</label>
                        <div class="col-auto input-group mb-3" style="width: 180px">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control @error('harga2') is-invalid @enderror" name="harga2"
                                minlength="1" maxlength="3" value="{{ old('harga2') }}"
                                onkeypress="return hanyaAngka(event)">
                            <span class="input-group-text">.000</span>
                        </div>
                        @error('harga2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                    name="gambar" required>
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="button" onclick="history.back();" class="btn btn-danger">Batal</button>
            <button type="submit" class="btn btn-success">Tambah</button>
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
