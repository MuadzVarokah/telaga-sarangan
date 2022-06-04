<div class="modal fade" id="PesanModal" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pesanModalLabel">PESAN TIKET<br> TELAGA SARANGAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/pesan" method="POST">

                    <input type="hidden" name="id_tiket" value="" class="form-control">
                    <input type="hidden" name="id_user" value="" class="form-control">
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
                        <select name="metode_pembayaran">
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="GoPay">GoPay</option>
                            <option value="Dana">Dana</option>
                            <option value="Ovo">Ovo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga Tiket</label>
                        <input type="text" name="harga_tiket" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>