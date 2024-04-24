@extends('dashboard.layouts.main')
@section('admin-ta')
    <div class="row">

        <div class="col-lg-15">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Info!</strong> {{ session('success') }}
                </div>
            @endif
        </div>

    </div>

    <div class="container mt-2">
        <div class="table-responsive-lg">
            <link rel="stylesheet" type="text/css"
                href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" />
            <link rel="stylesheet" type="text/css"
                href="https:////cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css" />

            <table id="profil2" class="table table-striped" style="width:100%">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        {{-- <th scope="col">kode</th> --}}
                        <th scope="col">Name</th>
                        <th scope="col">Nim</th>
                        <th scope="col">NO Tlp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $item)
                        <tr class="">
                            <td scope="row">{{ $loop->iteration }}</td>
                            {{-- <td>{{ $item->kode }}</td> --}}
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->no_tlp }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->prodi }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                @if ($item->gambar)
                                    <img src="{{ asset('user-images/' . $item->gambar) }}" style="max-height: 150px" class="img-fluid mt-2 d-block" alt="{{ $item->name }}">
                                @else
                                    <img src="https://source.unsplash.com/1200x400?{{ $item->name }}" class="img-fluid mt-2" alt="{{ $item->name }}">
                                @endif
                            </td>

                           <td>
                              <form action="/profil2/{{ $item->kode }}" method="post" class="d-inline">
                                    <!-- Timpa method post menjadi delete -->
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                        onclick="return confirm('Apakah anda yakin ingin hapus ? {{ $item->name }}')"
                                        class="badge bg-danger border-0">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                            {{-- @endcan --}}
                        </tr>
                    @endforeach

                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
                    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
                    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
                    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>

                    <script type="text/javascript">
                        let table = new DataTable('#profil2');
                    </script>

                </tbody>

            </table>
        </div>

    </div>

@endsection
