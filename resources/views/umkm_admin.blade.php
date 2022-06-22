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
        <h3 id="judul">Kategori UMKM</h3>
        <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Kategori UMKM</h6>

        <div class="d-grid gap-2 d-md-block mt-3"><a class="btn btn-primary" role="button"
                href="{{ url('admin/umkm_admin/simpan') }}">Tambah</a> </div>

        <div class="table-responsive">
            <table class="table table-hover mt-2 text-center">
                <tr>
                    <th>ID UMKM</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th class="">Aksi</th>
                </tr>

                </tr>
                @php $count=0; @endphp
                @foreach ($kat_umkm as $kat)
                    @php $count++; @endphp
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $kat->nama }}</td>
                        <td>
                            <img src="{!! asset('images/' . $kat->gambar . '') !!}" alt={{ $kat->nama }}
                            style="max-height: 200px; max-width: 200px">
                        </td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-success" role="button"
                                    href="umkm_admin/ubah/{{ $kat->id_kat_umkm }}">Ubah</a>
                                <a class="btn btn-danger" role="button"
                                    href="umkm_admin/hapus/{{ $kat->id_kat_umkm }}"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                            </div>
                        </td>
                @endforeach
                </tr>

            </table>
        </div>
    </div>
@endsection
