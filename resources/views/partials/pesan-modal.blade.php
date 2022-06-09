<div class="modal fade" id="PesanModal" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 align="center" class="modal-title" id="pesanModalLabel" style="padding-left: 25%; color:#167594;">PESAN TIKET<br> <b>GO TELAGA SARANGAN<b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form action="/pesan" method="POST">
                    @csrf
                    <input type="hidden" name="id_tiket" value="">
                    <input type="hidden" name="id_user" value="1">
                    <div class="mb-3">  
                        <label class="form-label">Tanggal Pemesanan</label>
                        <input type="date" name="waktu_kunjungan" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah Tiket</label>
                        <input type="text" name="jumlah_tiket" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Metode Pembayaran : </label>
                        <select name="jenis_pembayaran">
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="GoPay">GoPay</option>
                            <option value="Dana">Dana</option>
                            <option value="Ovo">Ovo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Tiket : </label>
                        <select name="id_harga_tiket">
                            <option value="1">Dewasa</option>
                            <option value="2">Anak-anak</option>
                        </select>
                    </div>
                    <input name="waktu_beli" type="hidden" value="<?php echo date('Y-m-d h:i:s'); ?>">
                    <input name="status" type="hidden" value="belum dibayar">
                    <input name="harga_jasa" type="hidden" value="2000">
                    <input name="kode_pembayaran" type="hidden" value="<?php echo rand(10000,99999); ?>">
                    <center>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Memesan Tiket?')">Pesan</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>