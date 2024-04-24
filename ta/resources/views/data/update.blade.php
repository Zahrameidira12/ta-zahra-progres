@extends('layouts.main')

@section('admin-ta')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Mahasiswa</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('data.update', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ old('name', $user->name) }}" required autofocus>
                                </div>
                            </div>

                            <!-- Tambahkan input untuk data pengguna lainnya seperti nim, email, dll -->

                            <div class="form-group row">
                                <label for="gambar" class="col-md-4 col-form-label text-md-right">Gambar</label>
                                <div class="col-md-6">
                                    <input id="gambar" type="file" class="form-control" name="gambar">
                                    @if ($user->gambar)
                                        <img src="{{ asset('user-images/' . $user->gambar) }}" alt="gambar"
                                            class="mt-2" style="max-width: 200px">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan Perubahan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
