@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="page-title mb-3">
                <h3>
                    <span class="bi bi-building"></span>
                    Institution
                </h3>
            </div>

            <a href="{{ route('admin.institution.create') }}" class="btn btn-outline-info mb-4">
                <span class="bi bi-plus-circle"></span>
                Add New
            </a>

            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Institution Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($institutions as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ route('admin.institution.show', $item->id) }}"
                                                class="btn btn-outline-success btn-sm me-1">
                                                <span class="bi bi-eye"></span>
                                                Show
                                            </a>
                                            <a href="{{ route('admin.institution.edit', $item->id) }}"
                                                class="btn btn-outline-warning btn-sm me-1">
                                                <span class="bi bi-pencil"></span>
                                                Edit
                                            </a>
                                            <a href="#"class="btn btn-outline-danger btn-sm me-1"
                                                onclick="handleDestroy('{{ route('admin.institution.destroy', $item->id) }}')";
                                                formdelete.submit();>
                                                <span class="bi bi-eraser"></span>
                                                Delate
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <form action="" id="form-delete" method="POST">
        @csrf
        @method('DELETE')
    </form>
@endsection
@push('scripts')
    <link rel="stylesheet" href="{{ asset('/assets/vendors/simple-datatables/style.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        let datatable = document.querySelector('#datatable');
        new simpleDatatables.DataTable(datatable);
    </script>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
        function handleDestroy(url) {
            swal({
                    title: "Apakah anda yakin?",
                    text: "Data yang di hapus tidak bisa dikembalikan",
                    icon: "warning",
                    buttons: ['Batal', 'Ya Hapus!'],
                    dangerMode: true,
                })
                .then((confirmed) => {
                    if (confirmed) {
                        $('#form-delete').attr('action', url);
                        $('#form-delete').submit();
                    }
                });

        }
    </script>
@endpush
