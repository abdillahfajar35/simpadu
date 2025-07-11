@extends('template.main')
@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
                    </ol>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Mahasiswa</h3>
                                        <div class="card-tools">
                                            <a href="mahasiswa/create" class="btn btn-primary">Tambah</a>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIM</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>No Telp</th>
                                                    <th>Email</th>
                                                    <th>Id Prodi</th>
                                                    <th>Nama Prodi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            </tbody>

                                            
                                        
                                            @foreach ($mahasiswa as $m)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $m->nim }}</td>
                                                    <td>{{ $m->nama }}</td>
                                                    <td>{{ $m->tanggal_lahir }}</td>
                                                    <td>{{ $m->no_telp }}</td>
                                                    <td>{{ $m->email }}</td>
                                                    <td>{{ $m->id_prodi }}</td>
                                                    <td>{{ $m->prodi->nama }}</td>
                                                   
                                                    <td><form action="{{ url("mahasiswa/$m->nim") }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('Yakin mau delete?')">Hapus</button>
                                                        <a href="{{ url("mahasiswa/$m->nim/edit") }}"
                                                            class="btn btn-warning">Edit</a>
                                                        </form>
                                                    </tr>
                                                    @endforeach


                                                    </tbody>
                                        </table>
                                    </div>
</main>
@endsection