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
                    <div class="breadcrumb-item"><a href="#">Pembelian</a></div>
                    <div class="breadcrumb-item">Edit</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Edit Data Pembelian</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pembelians.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="id_pelanggan">Id Pelanggan</label>
                                <input type="text" name="id_pelanggan" value="{{ $data->id_pelanggan }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="total_pembelian">Total Pembelian</label>
                                <input type="number" min=0 name="total_pembelian" class="form-control" value="{{ $data->total_pembelian }}" required>
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
