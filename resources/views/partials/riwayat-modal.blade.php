<div class="modal fade" id="RiwayatModal" tabindex="-1" aria-labelledby="riwayatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="riwayatModalLabel">RIWAYAT PEMESANAN TIKET<br> TELAGA SARANGAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <h2>TEST</h2>
                @foreach($riwayat as $riwayat)
                        <div class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex border-0"style=" margin-left:5%; margin-right:3%; padding-left:1%; padding-right:1%; min-width:20%; max-width: 40%; max-height:100%">
                                <div class="iq-blog text-left iq-ptb-30 d-flex  ">
                                    <div class="m-auto justify-content-center align-items-center" style="width: 100%; min-height:250px; height:100%; max-height:800px">
                                    <div class="card m-auto justify-content-center bg-transparent border-0">
                                    </div>
                                        <h5 class="text-center iq-tw-6 iq-pb-5" style="font-size: 80%; padding-top:5%; margin-left:10%; margin-right:10%;">No. {{$riwayat->id_tiket}}</h5> <br>
                                        <p class='text-center' style="font-size: 75%;">Jumlah Tiket : {{$riwayat->jumlah_tiket}}</p>
                                        <p class='text-center' style=" font-size: 75%;">Tanggal Pesan : {{$riwayat->waktu_pesan}}</p>
                                        <p class='text-center' style=" font-size: 75%;">Tanggal Kunjungan : {{$riwayat->waktu_kunjungan}}</p>
                                        <p class='text-center' style=" font-size: 75%;">Harga Tiket : {{$riwayat->harga}}</p>

                
                                    </div>
                                    </div>
                                </div>                        
                        @endforeach
                
            </div>
        </div>
    </div>
</div>
   