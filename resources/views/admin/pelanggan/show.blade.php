<!-- resources/views/data-ongkir/create.blade.php -->
@extends('layouts.app')

@section('title', 'edit')

@section('main')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
                <h1>Edit Data</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Produk</a></div>
                    <div class="breadcrumb-item">Edit</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Edit Data Pelanggan</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pelanggans.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama </label>
                                <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">No Telepon</label>
                                <input type="number" min=0 name="no_telepon" class="form-control" value="{{ $data->no_telepon }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" min=0 name="email" class="form-control" value="{{ $data->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" min=0 name="username" class="form-control" value="{{ $data->username }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" min=0 name="password" class="form-control" value="{{ $data->password }}" required>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->

                            <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
