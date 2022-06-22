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
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Lama</label></br>
                <img src="{!! asset('images/' . $wahana->gambar . '') !!}" alt={{ $wahana->nama }} style="max-height: 200px">
                <p>{{ $wahana->gambar }}</p>
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
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                    rows="3">{{ $wahana->deskripsi }}</textarea>
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
