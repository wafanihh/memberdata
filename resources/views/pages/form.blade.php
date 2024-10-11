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

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form action="{{ route('form.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="full_name">Nama lengkap</label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                    value="{{ old('full_name') }}"
                                    class="form-control @error('full_name') is-invalid @enderror" />
                                @error('full_name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for= "institution_id">Nama Alat</label>
                                        <select name="institution_id"
                                            class="form-select @error('institution_id') is-invalid @enderror">

                                            @foreach ($institutions as $item)
                                                <option value="{{ $item->id }}"
                                                    @if (old('institution_id') == $item->id) selected @endif>
                                                    {{ $item->name }}

                                                </option>
                                            @endforeach

                                        </select>

                                        @error('institution_id')
                                            <div class="invadid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label for = "nama_alat">Nama Alat</label>
                                        <input type="text" class="form-control" name="nama_alat" id="nama_alat"
                                            value="{{ old('nama_alat') }}"
                                            class="form-control @error('nama_alat') is-invalid @enderror" />
                                        @error('nama_alat')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">

                                <label for = "tanggal_pinjam">Tanggal Pinjam</label>
                                <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam"
                                    value="{{ old('tanggal_pinjam') }}"
                                    class="form-control @error('tanggal_pinjam') is-invalid @enderror" />
                                @error('tanggal_pinjam')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for = "tanggal_kembali">Tnaggalm Pinjam</label>
                                <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali"
                                    value="{{ old('tanggal_kembali') }}"
                                    class="form-control @error('tanggal_kembali') is-invalid @enderror" />
                                @error('tanggal_kembali')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for = "status_pengembalian">Alamat</label>
                                <textarea type="text" class="form-control" name="status_pengembalian" id="status_pengembalian" value="{{ old('status_pengembalian') }}"
                                    class="form-control @error('status_pengembalian') is-invalid @enderror"> </textarea>
                                @error('status_pengembalian')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class= "btn btn-primary">Submit
                                <span class="bi bi-send ms-2"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.j') }}s"></script>
    <script src="{{ asset('/js/mazer.js') }}"></script>


</body>

</html>