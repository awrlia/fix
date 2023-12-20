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
                    <div class="breadcrumb-item"><a href="#">Shippings</a></div>
                    <div class="breadcrumb-item">Edit</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Edit Data Ongkir</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('shippings.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_kota">Nama Kota</label>
                                <input type="text" name="nama_kota" value="{{ $data->nama_kota }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tarif">Tarif</label>
                                <input type="number" min=0 name="tarif" class="form-control" value="{{ $data->tarif }}" required>
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
