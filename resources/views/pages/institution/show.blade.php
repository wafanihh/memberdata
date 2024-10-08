@extends('layouts.app')

@section('content')
 <div class="page-heading">
        <div class="page-title">
           <div class="page-title mb-3">
           <h3>
           <span class="bi bi-building"></span>
           Detail Institution
           </h3>
           </div>
           <section class="section">
           <div class="card">
           <div class="card-body">
           

            <table class="table table-striped table-brodered">
                <tr>
                    <th>ID</th>
                    <td><Strong>{{ $institutions->id}}</Strong></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><Strong>{{ $institutions->name}}</Strong></td>
                </tr>
                <tr> 
                    <td>Created_at</td>
                    <td>{{ Carbon\Carbon::parse ( $institutions->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
                </tr>
                <tr>
                    <td>Update_at</td>
                    <td>{{ Carbon\Carbon::parse ( $institutions->update_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
                </tr>
            </table>
            <a href="{{route('admin.institution.index')}}" class="btn btn-sm btn-outline-info mb-2"> Kembali </a>
           </div>
           </div>
           </section>
 </div>

@endsection