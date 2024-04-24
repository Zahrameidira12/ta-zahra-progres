@extends('dashboard.layouts.main')
@section('admin-ta')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-right" style="margin-top: 50px;">

</div>

      <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-1">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="nim" class="form-control" id="nim" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-1">
                    <label for="name" class="form-label">name</label>
                    <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="isadmin" class="form-label">Isadmin</label>
                    <input type="text" class="form-control" id="isadmin" name="isadmin" value="1" readonly>
                    @error('isadmin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning mb-3" style="background-color: #ff5e00 !important;">Submit</button>
            </form>


        </div>
    </div>
    <script>

        (() => {
            'use strict'

            const forms = document.querySelectorAll('.tambah-post')

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
