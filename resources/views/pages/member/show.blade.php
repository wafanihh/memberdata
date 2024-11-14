@extends('layouts.app')

@section('content')
<div class="pages-heading">
    <div class="page-title mb-3">
        <h3> 
            <span class="bi bi-people"></span>
            Detail Member 
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body"> 
            <a href="{{ route('admin.member.index') }}" class="btn btn-outline-secondary mb-2">Kembali</a>

            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $members->id }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $members->nama_siswa }}</td>
                </tr>
                <tr>
                    <th>Nama Alat</th>
                    <td>{{ $members->nama_alat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pinjam</th>
                    <td>{{ $members->tanggal_pinjam }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kembali</th>
                    <td>{{ $members->tanggal_kembali }}</td>
                </tr>
                <tr>
                    <th>Status Pengembalian</th>
                    <td>{{ $members->status_pengembalian }}</td>
                </tr>
                <tr>
                    <td>Created_at</td>
                    <td>{{ \Carbon\Carbon::parse($members->created_at)->format('d MMMM Y HH:mm') }}</td>
                </tr>
                <tr>
                    <td>Updated_at</td>
                    <td>{{ \Carbon\Carbon::parse($members->updated_at)->format('d MMMM Y HH:mm') }}</td>
                </tr>
            </table>
            </div>
        </div>
    </section>
</div>
@endsection
