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
        <h3 id="judul">Tambah Daftar UMKM</h3>
        <h6 class="card-subtitle mb-2 text-muted">Tambah Data UMKM</h6>
        <br>
        <form action="{{ url('admin/item_umkm_admin/tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="id_kat" class="form-label">Jenis UMKM</label>
                <select class="form-select @error('id_kat') is-invalid @enderror" name='id_kat'>
                    @foreach ($kat_umkm as $kat)
                        <option value="{{ $kat->id_kat_umkm }}">{{ $kat->nama }}</option>
                    @endforeach
                </select>
                @error('id_kat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="barang" class="form-label">Barang</label>
                <input type="text" class="form-control @error('barang') is-invalid @enderror" name="barang"
                    minlength="3" maxlength="24" required value="{{ old('barang') }}">
                @error('barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga_terendah" class="form-label">Harga Terendah</label>
                <input type="text" class="form-control @error('harga_terendah') is-invalid @enderror"
                    name="harga_terendah" minlength="4" maxlength="7" required value="{{ old('harga_terendah') }}"
                    onkeypress="return hanyaAngka(event)">
                @error('harga_terendah')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga_tertinggi" class="form-label">Harga Tertinggi</label>
                <input type="text" class="form-control @error('harga_tertinggi') is-invalid @enderror"
                    name="harga_tertinggi" minlength="4" maxlength="7" required value="{{ old('harga_tertinggi') }}"
                    onkeypress="return hanyaAngka(event)">
                @error('harga_tertinggi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"
                    rows="3">{{ old('keterangan') }}</textarea>
                @error('keterangan')
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
