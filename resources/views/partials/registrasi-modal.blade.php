<div class="modal fade" id="registrasiModal" tabindex="-1" aria-labelledby="registrasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 align="center" class="modal-title" id="registrasiModalLabel"
                    style="padding-left: 25%; color:#167594;">REGISTRASI <br><b> GO TELAGA SARANGAN</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="/registrasi" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
                            value="{{ old('name') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror" required>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <input type="hidden" name="role" value="user" class="form-control">
                    <center>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Registrasi</button>
                    </center>
                </form>
                <center style="color: black">
                    Sudah punya akun? Silahkan <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                </center>
            </div>
        </div>
    </div>
</div>
