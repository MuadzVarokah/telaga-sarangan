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
        <h3 id="judul">Ubah Kategori UMKM</h3>
        <h6 class="card-subtitle mb-2 text-muted">Ubah Informasi Kategori UMKM</h6>
        <br>
        <form action="{{ url('admin/umkm_admin/update', $kat_umkm->id_kat_umkm) }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin?');"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" minlength="3"
                    maxlength="24" required value="{{ $kat_umkm->nama }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Lama</label></br>
                <img src="{!! asset('images/' . $kat_umkm->gambar . '') !!}" alt={{ $kat_umkm->nama }}
                style="max-height: 200px">
                <p>{{ $kat_umkm->gambar }}</p>
                <input type="hidden" class="form-control" name="gambar_lama" value="{{ $kat_umkm->gambar }}">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Upload Gambar Baru</label>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar"
                    name="gambar">
                @error('gambar')
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
@endsection
