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
                                        <label for= "institution_id">Instansi</label>
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
                                        <label for = "form">Dari</label>
                                        <input type="text" class="form-control" name="form" id="form"
                                            value="{{ old('form') }}"
                                            class="form-control @error('form') is-invalid @enderror" />
                                        @error('form')
                                            <div class="invalid-feedback d-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">

                                <label for = "position">Posisi</label>
                                <input type="text" class="form-control" name="position" id="position"
                                    value="{{ old('email') }}"
                                    class="form-control @error('position') is-invalid @enderror" />
                                @error('position')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group mb-3">
                                <label for = "phonenumber">Nomor Telp/HP</label>
                                <input type="text" class="form-control" name="phonenumber" id="phonenumber"
                                    value="{{ old('phonenumber') }}"
                                    class="form-control @error('phonenumber') is-invalid @enderror" />
                                @error('phonenumber')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for = "address">Alamat</label>
                                <textarea type="text" class="form-control" name="address" id="address" value="{{ old('address') }}"
                                    class="form-control @error('address') is-invalid @enderror"> </textarea>
                                @error('address')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for = "joining_date">Tgl. Bergabung</label>
                                <textarea type="text" class="form-control" name="joining_date" id="joining_date" value="{{ old('joining_date') }}"
                                    class="form-control @error('joining_date') is-invalid @enderror"> </textarea>
                                @error('joining_date')
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