@extends('layouts.app')

@section('content')
<div class="page-heading">
    <h3>Edit Member</h3>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('admin.member.index') }}" class="btn btn-sm btn-outline-secondary mb-2">Kembali</a>

            <form action="{{ route('admin.member.update', $members->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="{{ old('nama_siswa', $members->nama_siswa) }}" required />
                </div>

                <div class="form-group mb-3">
                    <label for="nama_alat" class="form-label">Nama Alat</label>
                    <input type="text" class="form-control" name="nama_alat" id="nama_alat" value="{{ old('nama_alat', $members->nama_alat) }}" required />
                </div>

                <div class="form-group mb-3">
                    <label for="total_pinjam" class="form-label">Total Pinjam</label>
                    <input type="number" class="form-control" name="total_pinjam" id="total_pinjam" value="{{ old('total_pinjam', $members->total_pinjam) }}" required />
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ old('tanggal_pinjam', $members->tanggal_pinjam) }}" required />
                </div>

                <div class="form-group mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali', $members->tanggal_kembali) }}" required />
                </div>

                <div class="form-group mb-3">
                    <label for="status_pengembalian" class="form-label">Status Pengembalian</label>
                    <select class="form-control" name="status_pengembalian" id="status_pengembalian">
                        <option value="done" {{ $members->status_pengembalian == 'done' ? 'selected' : '' }}>Done</option>
                        <option value="pending" {{ $members->status_pengembalian == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.member.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</section>
</div>
@endsection
