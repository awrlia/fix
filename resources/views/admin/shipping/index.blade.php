@extends('layouts.app')

@section('title', 'Default Layout')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Default Layout</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Layout</a></div>
                    <div class="breadcrumb-item">Default Layout</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title"> Data Ongkir</h2>
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body">
                                <a href="{{ route('ongkir.create') }}" class="btn btn-md btn-success mb-3">Add</a>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nama Kota</th>
                                            <th scope="col">Tarif</th>
                                            <th scope="col">AKSI</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($data as $item)
                                            <tr>
                                                

                                                <td>{{ $item->nama_kota }}</td>
                                                <td>{!! $item->tarif !!}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST">
                                                        <a href="#" class="btn btn-sm btn-dark">SHOW</a>
                                                        <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data belum Tersedia.
                                            </div>
                                        @endforelse
                                        </tbody>
                                    </table>  
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
