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
        <h3 id="judul">Harga Tiket Masuk</h3>
        <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Harga Tiket Masuk</h6>

        {{-- <div class="d-grid gap-2 d-md-block mt-3"> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#tambahModal">Tambah</button></div> --}}

        <div class="table-responsive">
            <table class="table table-hover mt-2 text-center">
                <tr>

                    <th>No</th>
                    <th>Jenis Tiket</th>
                    <th>Harga</th>
                    <th class="">Aksi</th>

                </tr>
                @php $count=0; @endphp
                @foreach ($harga_tiket as $harga)
                    @php $count++; @endphp
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $harga->nama }}</td>
                        <td>Rp. {{ number_format($harga->harga, 2, ',', '.') }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-success" role="button"
                                    href="tiket/ubah/{{ $harga->id_harga_tiket }}">Ubah</a>
                                {{-- <button class="btn btn-danger ">Hapus</button> --}}
                            </div>
                        </td>
                @endforeach
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div style="padding: 2%" class="cards mt-2 rounded-3">
        <h3 id="judul">Tiket Masuk</h3>
        <h6 class="card-subtitle mb-2 text-muted">Tabel Data Informasi Tiket Masuk</h6>
        <div class="table-responsive">
            <table class="table table-hover mt-2 text-center" style="font-size: 90%">
                <tr>

                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Tanggal Beli</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Jenis Pembayaran</th>
                    <th>Harga Tiket</th>
                    <th>Jumlah</th>
                    <th>Harga Jasa</th>
                    <th>Harga Total</th>
                    <th>Kode Pembayaran</th>
                    <th class="">Aksi</th>

                </tr>
                @php $count=0; @endphp
                @foreach ($tiket as $tikets)
                    @php $count++; @endphp
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $tikets->name }}</td>
                        <td>{{ $tikets->nama }}</td>
                        <td>{{ $tikets->waktu_beli }}</td>
                        @php
                            $kunjungan = new DateTime($tikets->waktu_kunjungan);
                        @endphp
                        <td>{{ date_format($kunjungan, 'Y-m-d') }}</td>
                        <td>{{ $tikets->jenis_pembayaran }}</td>
                        <td>Rp. {{ number_format($tikets->harga, 2, ',', '.') }}</td>
                        <td>{{ $tikets->jumlah_tiket }}</td>
                        <td>Rp. {{ number_format($tikets->harga_jasa, 2, ',', '.') }}</td>
                        <td>Rp. {{ number_format($tikets->harga_total, 2, ',', '.') }}</td>
                        <td>{{ $tikets->kode_pembayaran }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-success" role="button" style="font-size: 90%"
                                    href="data_tiket/setujui/{{ $tikets->id_tiket }}"
                                    onclick="return confirm('Apakah anda yakin ingin menyetujui data?');">Setujui</a>
                                <a class="btn btn-danger" role="button" style="font-size: 90%"
                                    href="data_tiket/hapus/{{ $tikets->id_tiket }}"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                            </div>
                        </td>
                @endforeach
                </tr>
            </table>
            {{ $tiket->onEachSide(5)->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
    </div> --}}
@endsection
