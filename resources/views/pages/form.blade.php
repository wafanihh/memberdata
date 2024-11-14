<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member Form</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
<link rel="shortcut icon" href="{{ asset('/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-header">
                        MEMBER FORM
                    </div>
                    <div class="card-body">
                        <p>Silahkan masukan data anda sebagai anggota, pada form dibawah:</p>

                                            {{-- Display success message if data is saved successfully --}}
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.form.store') }}" method="POST">
                    @csrf

                    {{-- Nama Siswa --}}
                    <div class="form-group mb-3">
                        <label for="nama_siswa">Nama Siswa</label>
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" id="nama_siswa" value="{{ old('nama_siswa') }}" />
                        @error('nama_siswa')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    </div>

                    {{-- Nama Alat --}}
                    <div class="form-group mb-3">
                        <label for="nama_alat">Pilih Alat</label>
                        <select class="form-control @error('nama_alat') is-invalid @enderror" name="nama_alat" id="nama_alat">
                            <option value="">-- Pilih Alat --</option>
                            <option value="Mikroskop" {{ old('nama_alat') == 'Mikroskop' ? 'selected' : '' }}>Mikroskop</option>
                            <option value="Tabung Reaksi" {{ old('nama_alat') == 'Tabung Reaksi' ? 'selected' : '' }}>Tabung Reaksi</option>
                            <option value="Pipet" {{ old('nama_alat') == 'Pipet' ? 'selected' : '' }}>Pipet</option>
                            <option value="Gelas Ukur" {{ old('nama_alat') == 'Gelas Ukur' ? 'selected' : '' }}>Gelas Ukur</option>
                            <option value="pH meter" {{ old('nama_alat') == 'pH meter' ? 'selected' : '' }}>pH meter</option>
                            <option value="Timbangan Analitik" {{ old('nama_alat') == 'Timbangan Analitik' ? 'selected' : '' }}>Timbangan Analitik</option>
                        </select>
                        @error('nama_alat')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Total Pinjam --}}
                    <div class="form-group mb-3">
                        <label for="total_pinjam">Total Pinjam</label>
                        <input type="integer" class="form-control @error('total_pinjam') is-invalid @enderror" name="total_pinjam" id="total_pinjam" value="{{ old('total_pinjam') }}" />
                        @error('total_pinjam')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tanggal Pinjam --}}
                    <div class="form-group mb-3">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}" />
                        @error('tanggal_pinjam')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Tanggal Kembali --}}
                    <div class="form-group mb-3">
                        <label for="tanggal_kembali">Tanggal Pengembalian</label>
                        <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali') }}" />
                        @error('tanggal_kembali')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Status Pengembalian --}}
                    <select class="form-control @error('status_pengembalian') is-invalid @enderror" name="status_pengembalian" id="status_pengembalian">
                        <option value="">-- Pilih Status --</option>
                        <option value="done" {{ old('status_pengembalian') == 'done' ? 'selected' : '' }}>Done</option>
                        <option value="pending" {{ old('status_pengembalian') == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                    @error('status_pengembalian')                                  <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.j') }}s"></script>
<script src="{{ asset('/assets/js/mazer.js') }}"></script>


</body>

</html>

