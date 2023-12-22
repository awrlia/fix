<!-- resources/views/data-ongkir/create.blade.php -->
@extends('layouts.app')

@section('title', 'add')

@section('main')
    <div class="main-content">
        <section class="section">
        <div class="section-header">
                <h1>Tambah Data</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Pembelian</a></div>
                    <div class="breadcrumb-item">Add</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Tambah Data Pembelian</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pembelians.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="id_pelanggan">Id Pelanggan</label>
                                <input type="number" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="total_pembelian">Total Pembelian</label>
                                <input type="number" min=0 name="harga" class="form-control" required>
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
