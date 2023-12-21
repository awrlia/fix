<!-- resources/views/data-ongkir/create.blade.php -->
@extends('layouts.app')

@section('title', 'add')

@section('main')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
                <h1>Tambah Data </h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Pelanggan</a></div>
                    <div class="breadcrumb-item">Add</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Tambah Data Pelanggan</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pelanggans.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" min=0 name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" min=0 name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">No Telepon</label>
                                <input type="number" min=0 name="no_telepon" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" min=0 name="nama" class="form-control" required>
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
