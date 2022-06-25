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
                <div class="card justify-content-center iq-mtb-15 d-flex border-0" onload="autoClick()"
                    style=" margin-left:5%; margin-right:3%; padding-left:1%; padding-right:1%; min-width:20%; max-width: 100%; max-height:100%; transform: scale(1);">
                    <div id="image">
                        <div class="row">
                            <h6 align="center" style="color:#167594;" class="iq-pb-10">
                                Tiket Masuk Online<br><b> Wisata Telaga Sarangan</b></h6>
                                <hr class="m-auto justify-content-center align-items-center" style="height:2px; width:90%; color:#167594; background-color:#167594">
                        </div>
                        <div class="row iq-pt-10">
                            <div class="col-lg-5 clo-md-5 col-sm-12 col-12">
                                <?php if($riwayat->status == 'belum dibayar') {?>
                                    <div class="iq-pt-25">
                                        <h6 align="center" style="color:#167594;" class="iq-pt-10">
                                            Lakukan<br><b>Pembayaran</b></h6>
                                            <br>
                                        <div class="d-flex justify-content-center iq-mtb-15">
                                            <button class="btn btn-primary rounded-pill" style="width: 80%">Bayar</button>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                <img id="gambar" src="https://upload.wikimedia.org/wikipedia/commons/d/d0/QR_code_for_mobile_English_Wikipedia.svg" class="img-fluid rounded-3" alt="...">
                                <p align="center" style="color:#167594;">ID Tiket : {{$riwayat->id_tiket}}</p>
                                <?php } ?>
                            </div>
                            <div class="col-auto iq-ptb-10">
                                {{-- <p style="color:#167594;">Jenis Tiket : {{$riwayat->nama}}</p> --}}
                                <table class="table table-sm table-borderless" style="color:#167594; font-size: 90%">
                                        <tr><td>Jenis Tiket</td><td>: {{$riwayat->nama}}</td></tr>
                                        <tr><td>Jumlah Tiket</td><td>: {{$riwayat->jumlah_tiket}}</td></tr>
                                        @php
                                            $beli = new DateTime($riwayat->waktu_beli);
                                            $kunjungan = new DateTime($riwayat->waktu_kunjungan);
                                        @endphp
                                        <tr><td>Tanggal Pesan</td><td>: {{ date_format($beli, 'Y-m-d') }}</td></tr>
                                        <tr><td>Tanggal Kunjungan</td><td>: {{ date_format($kunjungan, 'Y-m-d') }}</td></tr>
                                        <tr><td>Harga Total</td><td>: Rp. {{ number_format($riwayat->harga_total, 2, ',', '.') }}</td></tr>
                                        <tr><td>Jenis Pembayaran</td><td>: {{$riwayat->jenis_pembayaran}}</td></tr>
                                        <tr><td>Kode Pembayaran</td><td>: {{$riwayat->kode_pembayaran}}</td></tr>
                                        <?php if($riwayat->status == 'belum dibayar') {?>
                                        <tr style="color: red"><td>Status</td><td>: {{$riwayat->status}}</td></tr>
                                        <?php } else { ?>
                                        <tr style="color: green"><td>Status</td><td>: {{$riwayat->status}}</td></tr>
                                        <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php if($riwayat->status == 'sudah dibayar') {?>
                        {{-- <a align="right" class="iq-pr-10 iq-pb-10" id="download" href="#">Download</a> --}}
                    <?php } ?>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function autoClick(){
        $("#download").click();
    }
    $(document).ready(function(){
        var element = $("#image");

        $("#download").on('click', function(){
            html2canvas(element, {
                onrendered: function(canvas){
                    var imageData = canvas.toDataURL("image/jpg");
                    var newData = imageData.replace(/data::image\/jpg/, "data::aplication/octet-stream");
                    $("#download").attr("download", "image.jpg").attr("href", newData);
                }
            });
        })
    })
</script>
