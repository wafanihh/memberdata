@extends('layouts.app')

@section('content')
 <div class="page-heading">
        <div class="page-title">
           <div class="page-title mb-3">
           <h3>
           <span class="bi bi-building"></span>
           Update Institution
           </h3>
           </div>
           <section class="section">
           <div class="card">
           <div class="card-body">
           <a href="{{route('admin.institution.index')}}" class="btn btn-sm btn-outline-secondary mb-2"> Kembali </a>

           <form action="{{route('admin.institution.update', $institutions->id)}}" method="POST" >
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name" class="form-label"> Nama <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $institutions->name }}" required />
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm ">Simpan</button>
            <a href="{{route('admin.institution.index')}}" class="btn btn-sm btn-outline-secondary"> Batal </a>
           </div>
           </div>
           </section>
 </div>

@endsection