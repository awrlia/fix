<!-- resources/views/data-ongkir/create.blade.php -->
@extends('layouts.app')

@section('title', 'add')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <h2 class="section-title">Tambah Data Ongkir</h2>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('data-ongkir/create') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama_kota">Nama Kota</label>
                                <input type="text" name="nama_kota" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tarif">Tarif</label>
                                <input type="text" name="tarif" class="form-control" required>
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
