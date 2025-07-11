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
                        <li class="breadcrumb-item active" aria-current="page">Data Prodi</li>
                    </ol>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Prodi</h3>
                                        <div class="card-tools">
                                            <a href="prodi/create" class="btn btn-primary">Tambah</a>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Prodi</th>
                                                    <th>Kaprodi</th>
                                                    <th>Jurusan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            </tbody>

                                            
                                        
                                            @foreach ($prodi as $p)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $p->nama }}</td>
                                                    <td>{{ $p->kaprodi }}</td>
                                                    <td>{{ $p->jurusan }}</td>
                                                   
                                                    <td><form action="{{ url("prodi/$p->id") }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                                                        <a href="{{ url("prodi/$p->id/edit") }}"
                                                            class="btn btn-warning">Edit</a>
                                                        </form>
                                                    </tr>
                                                    @endforeach


                                                    </tbody>
                                        </table>
                                    </div>
</main>
@endsection