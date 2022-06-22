<div class="modal fade" id="RiwayatModal" tabindex="-1" aria-labelledby="riwayatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 align="center" class="modal-title" id="riwayatModalLabel" style="padding-left: 25%; color:#167594;">
                    RIWAYAT PEMESANAN TIKET<br><b> GO TELAGA SARANGAN</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($riwayat as $riwayat)
                    <div
                        class="card justify-content-center iq-mtb-15 d-flex border-0"style=" margin-left:5%; margin-right:3%; padding-left:1%; padding-right:1%; min-width:20%; max-width: 100%; max-height:100%">
                        <div class="iq-blog text-left iq-ptb-30 d-flex  ">
                            <div class="m-auto justify-content-center align-items-center"
                                style="width: 100%; min-height:250px; height:100%; max-height:800px">
                                <div class="card m-auto justify-content-center bg-transparent border-0">
                                </div>
                                @php
                                $total = 0;
                                @endphp 
                                    <h5 class="text-center iq-tw-6 iq-pb-5" style="font-size: 80%; padding-top:5%; margin-left:10%; margin-right:10%;">ID Tiket : {{$riwayat->id_tiket}}</h5> <br>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Jumlah Tiket : {{$riwayat->jumlah_tiket}}</h5>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Tanggal Pesan : {{$riwayat->waktu_beli}}</h5>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Tanggal Kunjungan : {{$riwayat->waktu_kunjungan}}</h5>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Jenis Tiket : {{$riwayat->nama}}</h5>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Harga Tiket : {{$riwayat->harga}}</h5>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Harga Jasa : {{$riwayat->harga_jasa}}</h5>
                                    @php
                                    $total = ($riwayat->jumlah_tiket * $riwayat->harga)+$riwayat->harga_jasa;
                                    @endphp
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Harga Total : {{$total}}</h5>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Pembayaran : {{$riwayat->jenis_pembayaran}}</h5>
                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Kode Pembayaran : {{$riwayat->kode_pembayaran}}</h5>

                                    <h5 class='text iq-tw-6 iq-pb-5' style=" margin-left:5%; font-size: 75%;">Status : {{$riwayat->status}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
