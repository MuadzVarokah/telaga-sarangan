<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <div class="row align-items-center">
                <h5 align="center" class="modal-title" id="loginModalLabel">LOGIN <br><b> GO TELAGA SARANGAN</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/login" method="post">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                <center>
                    <button type="submit" class="btn btn-primary">Login</button>
            </center>
                <center>
                </form>
                Belum punya akun? Silahkan <a href="#" data-bs-toggle="modal" data-bs-target="#registrasiModal">Registrasi</a>
            </center>
            </div>
        </div>
    </div>
</div>
