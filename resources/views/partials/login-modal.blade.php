<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row align-items-center" style="width: 100%">
                    <div class="col-lg-11">
                        <h5 align="center" class="modal-title" id="loginModalLabel"
                            style="padding-left: 15%; color:#167594;">
                            LOGIN<br><b> GO TELAGA SARANGAN</b></h5>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">

                {{-- Alert --}}
                @if (session()->has('loginError'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                            {{ session('loginError') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- Alert End --}}

                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required>
                        {{-- @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror" required>
                        {{-- @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Login</button>
                    </center>
                </form>
                <center>
                    Belum punya akun? Silahkan <a href="#" data-bs-toggle="modal"
                        data-bs-target="#registrasiModal">Registrasi</a>
                </center>
            </div>
        </div>
    </div>
</div>
