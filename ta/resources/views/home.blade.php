@extends('layouts.main')
@section('ta')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            @if (session('status'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Informasi! </strong>{{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Informasi! </strong>{{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <form method="POST" action="/login" class="login-validation" novalidate>
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                    <img src="pnp.png" alt="Logo" class="mx-auto d-block mb-4" style="max-width: 200px;">
                    <div class="form-floating">
                        <input type="enim" name="nim" required class="form-control" id="floatingInput"
                            placeholder="">
                        <label for="floatingInput">NIM</label>
                        <div class="invalid-feedback">
                            Silahkan isi NIM mu.
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" required class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <div class="invalid-feedback">
                            Silahkan isi Password.
                        </div>
                    </div>


                    <button class="btn btn-warning mt-3 w-100 py-2" type="submit" style="background-color: #ff5e00;">Sign in</button>

                </form>
                <small class="d-block text-center mt-2">
                    Buat Akun Baru <a href="/register" class="text-decoration-none">Register</a>
                </small>
            </main>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.login-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
