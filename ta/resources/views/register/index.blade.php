@extends('layouts.main')
@section('ta')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-register w-100 m-auto">
                <form method="POST" action="/register" class="register-validation" novalidate enctype="multipart/form-data">

                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>

                    <div class="form-floating">
                        <input type="text" value="{{ old('name') }}" name="name" required
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Nama</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('name'))
                                {{ $errors->first('name') }}
                            @else
                                Silahkan isi Nama.
                            @endif
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="nim" value="{{ old('ni') }}" name="nim" required
                            class="form-control @error('nim') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Nim mahasiswa</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('nim'))
                                {{ $errors->first('nim') }}
                            @else
                                Silahkan isi Nim.
                            @endif
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="email" value="{{ old('email') }}" name="email" required
                            class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                            @else
                                Silahkan isi Email.
                            @endif
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="text" value="{{ old('no_tlp') }}" name="no_tlp" required
                            class="form-control @error('no_tlp') is-invalid @enderror" id="floatingInput"
                            placeholder="no_tlp">
                        <label for="floatingInput">No Tlp</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('no_tlp'))
                                {{ $errors->first('no_tlp') }}
                            @else
                                Silahkan isi No Tlp.
                            @endif
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="text" value="{{ old('jurusan') }}" name="jurusan" required
                            class="form-control @error('jurusan') is-invalid @enderror" id="floatingInput"
                            placeholder="jurusan">
                        <label for="floatingInput">Jurusan</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('jurusan'))
                                {{ $errors->first('jurusan') }}
                            @else
                                Silahkan isi Jurusan.
                            @endif
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="text" value="{{ old('prodi') }}" name="prodi" required
                            class="form-control @error('prodi') is-invalid @enderror" id="floatingInput"
                            placeholder="prodi">
                        <label for="floatingInput">Prodi</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('prodi'))
                                {{ $errors->first('prodi') }}
                            @else
                                Silahkan isi Prodi.
                            @endif
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="text" value="{{ old('kelas') }}" name="kelas" required
                            class="form-control @error('kelas') is-invalid @enderror" id="floatingInput"
                            placeholder="kelas">
                        <label for="floatingInput">Kelas</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('kelas'))
                                {{ $errors->first('kelas') }}
                            @else
                                Silahkan isi Kelas.
                            @endif
                        </div>
                    </div>


                    <div class="form-floating">
                        <input type="text" value="{{ old('alamat') }}" name="alamat" required
                            class="form-control @error('alamat') is-invalid @enderror" id="floatingInput"
                            placeholder="alamat kamu">
                        <label for="floatingInput">Alamat</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('alamat'))
                                {{ $errors->first('alamat') }}
                            @else
                                Silahkan isi Alamat.
                            @endif
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" required
                            class="form-control rounded-bottom @error('password') is-invalid @enderror"
                            id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('password'))
                                {{ $errors->first('password') }}
                            @else
                                Silahkan isi Password.
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Gambar</label>
                        <img src="" id="img-preview" class="img-preview img-fluid w-30" alt="">
                        <input type="file" onchange="previewImage()"
                            class="form-control @error('gambar') is-invalid @enderror" accept="user-images/*" name="gambar"
                            id="gambar" placeholder="" aria-describedby="fileHelpId">
                        <div id="fileHelpId" class="form-text text-danger">Format jpg,jpeg,png</div>
                        <div class="invalid-feedback">
                            {{ $errors->has('gambar') ? $errors->first('gambar') : '' }}
                        </div>
                    </div>
                    <button class="btn btn-danger w-100 py-2 mt-2" type="submit" style="background-color: #ff5e00;">Register</button>

                </form>
                <small class="d-block text-center mt-2">
                    Halaman <a href="/login" class="text-decoration-none">Login</a>
                </small>
            </main>
        </div>
    </div>

    <script>

        (() => {
            'use strict'


            const forms = document.querySelectorAll('.register-validation')


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
    <script>
       
        function previewImage() {
            const image = document.getElementById('gambar');
            const imgPreview = document.getElementById('img-preview');

            imgPreview.style.display = 'block';
            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);
            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
