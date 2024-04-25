@extends('dashboard.layouts.main')

@section('admin-ta')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Data</h4>
                <br>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-body">
                            <div class="mb-4">
                                <img class="float-left mr-3"
                                    src="{{ auth()->user()->gambar ? asset('user-images/' . auth()->user()->gambar) : asset('images/bbb/default_profil.WEBP') }}"
                                    alt="gambar" width="120" height="120">
                            </div>

                            <form action="{{ route('profil.update', $user->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="" class="form-label">Nama </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $user->name) }}" name="name" id="name"
                                        placeholder="name" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email </label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $user->email) }}" name="email" id="email"
                                        placeholder="email" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">No Tlp </label>
                                    <input type="text" class="form-control @error('no_tlp') is-invalid @enderror"
                                        value="{{ old('no_tlp', $user->no_tlp) }}" name="no_tlp" id="no_tlp"
                                        placeholder="no_tlp" required>
                                    @error('no_tlp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                @cannot('admin')
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jurusan </label>
                                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror"
                                            value="{{ old('jurusan', $user->jurusan) }}" name="jurusan" id="jurusan"
                                            placeholder="jurusan" required>
                                        @error('jurusan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Prodi </label>
                                        <input type="text" class="form-control @error('prodi') is-invalid @enderror"
                                            value="{{ old('prodi', $user->prodi) }}" name="prodi" id="prodi"
                                            placeholder="prodi" required>
                                        @error('prodi')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Kelas </label>
                                        <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                                            value="{{ old('kelas', $user->kelas) }}" name="kelas" id="kelas"
                                            placeholder="kelas" required>
                                        @error('kelas')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="3"
                                            placeholder="alamat" required>{{ old('alamat', $user->alamat) }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3" id="imagePreview" style="display:none;">
                                        <img src="#" id="preview" class="img-fluid" alt="Preview Gambar"
                                            width="200">
                                    </div>
                                @endcannot
                                <div class="mb-3">
                                    <label for="" class="form-label">Pilih Gambar</label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                        name="gambar" id="gambar" accept="image/*" onchange="previewImage(event)">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <script>
                                    function previewImage(event) {
                                        var reader = new FileReader();
                                        reader.onload = function() {
                                            var output = document.getElementById('preview');
                                            output.src = reader.result;
                                            document.getElementById('imagePreview').style.display = 'block';
                                        }
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Simpan Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
