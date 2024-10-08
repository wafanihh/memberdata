@extends('layouts.app')

@section('content')
<div class="pages-heding">
    <div class="page-title mb-3">
        <h3> 
            <span class="bi bi-building"></span>
            Detail Institution 
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body"> 
            <a href="{{route('admin.institution.index')}}" class="btn btn-outline-secondary mb-2">Kembali</a>

            <table class="table table-striped table-brodered">
                <tr>
                    <th>ID</th>
                    <td>{{ $institution->id }}</Strong></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $institution->name }}</Strong></td>
                </tr>
                <tr>
                    <th>Kontak</th>
                    <td>{{ $institution->phonenumber }}</Strong></td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{ $institution->posotion }}</Strong></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $institution->address}}</Strong></td>
                </tr>
                <tr>
                    <th>Tanggal Bergabung</th>
                    <td>{{ $institution->joiningdate }}</Strong></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $institution->status }}</Strong></td>
                </tr>
                <tr>
                    <td>Created_at</td>
                    <td>{{ Carbon\Carbon::parse($institution->created_at)->format('DD MMMM Y HH:mm') }}</td>
                </tr>
                <tr>
                    <td>Updated_at</td>
                    <td>{{ Carbon\Carbon::parse($institution->updated_at)->format('DD MMMM Y HH:mm') }}</td>
                </tr>
            </table>
            </div>
        </div>
</div>
@endsection