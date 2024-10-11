@extends('layouts.app')

@section('content')
 <div class="page-heading">
        <div class="page-title">
           <div class="page-title mb-3">
           <h3>
           <span class="bi bi-tools"></span>
           Update Alat
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
            <div class="form-group">
                <label for="jumlah_alat" class="form-label"> Jumlah alat <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="jumlah_alat" id="jumlah_alat" value="{{ $institutions->jumlah_alat }}" required />
            </div>
            <div class="form-group">
                <label for="status_alat" class="form-label"> Status Alat<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="status_alat" id="status_alat" value="{{ $institutions->status_alat }}" required />
            </div>
            <div class="form-group">
                <label for="kode_unik" class="form-label"> Kode Unik <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="kode_unik" id="kode_unik" value="{{ $institutions->kode_unik }}" required />
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm ">Simpan</button>
            <a href="{{route('admin.institution.index')}}" class="btn btn-sm btn-outline-secondary"> Batal </a>
           </div>
           </div>
           </section>
 </div>

@endsection