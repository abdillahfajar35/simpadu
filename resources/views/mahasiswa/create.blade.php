@extends('template.main')
@section('content')
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
                <div class="app-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3 class="card-title">Tambah Mahasiswa</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <form action="{{ url('mahasiswa') }}" method="post" enctype="multipart/form-data">
                                        @csrf 
                                        <div class=" card-body">
                                            <div class="form-group">
                                                <label for="nim" class="form-label">NIM</label>
                                                <input type="text" name="nim" id="nim"
                                                class="form-control @error('nim')is-invalid @enderror">
                                                @error('nim')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" id="password"
                                                class="form-control" @error('password')is-invalid @enderror">
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" name="nama" id="nama"
                                                class="form-control" @error('nama')is-invalid @enderror">
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                            @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                class="form-control" @error('tanggal_lahir')is-invalid @enderror">
                                                @error('tanggal_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                            @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="no_telp" class="form-label">No Telp</label>
                                                <input type="text" name="no_telp" id="no_telp"
                                                class="form-control" @error('no_telp')is-invalid @enderror">
                                                @error('no_telp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                            @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" id="email"
                                                class="form-control" @error('email')is-invalid @enderror">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                            </div>
                                            @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="id_prodi" class="form-label">Prodi</label>
                                                <select class="form-select" id="id_prodi" name="id_prodi">
                                                   @foreach ($prodi as $p)
                                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="foto">Upload Foto</label>
                                                <input type="file" class="form-control" @error('file')is-invalid @enderror
                                                id="foto" name="foto" />
                                            @error('file')
                                            <div class="invalid-feedback">
                                                {{ $message }} 
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                            <div class="card-footer">
                                                <a href="{{ url("mahasiswa") }}" class="btn btn-warning">Kembali</a>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                    </form>
</main>
@endsection