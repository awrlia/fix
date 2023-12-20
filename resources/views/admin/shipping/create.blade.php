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
                    <div class="breadcrumb-item"><a href="#">Shippings</a></div>
                    <div class="breadcrumb-item">Add</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Tambah Data Ongkir</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('shippings.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama_kota">Nama Kota</label>
                                <input type="text" name="nama_kota" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tarif">Tarif</label>
                                <input type="number" min=0 name="tarif" class="form-control" required>
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
