@extends('layouts.app')

@section('content')
<div class="pages-heding">
    <div class="page-title mb-3">
        <h3> 
            <span class="bi bi-people"></span>
            Member
        </h3>
    </div> 
    
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</Th>
                            <th>Nama Siswa</th> 
                            <th>Nama Alat</th> 
                            <th>Total Pinjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status Pengembalian</th>
                            <th>Actions</th> <!-- Kolom Actions -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->nama_alat }}</td>
                            <td>{{ $item->total_pinjam }}</td>
                            <td>{{ $item->tanggal_pinjam }}</td>
                            <td>{{ $item->tanggal_kembali }}</td>
                            <td>{{ $item->status_pengembalian }}</td>
                            <td>
                                <!-- Tombol Show (Detail) -->
                                <a href="{{ route('admin.member.show', $item->id) }}" class="btn btn-outline-secondary btn-sm me-1">
                                    <span class="bi bi-eye"></span> Show
                                </a>
                                
                                <!-- Tombol Edit -->
                                <a href="{{ route('admin.member.edit', $item->id) }}" class="btn btn-outline-warning btn-sm me-1">
                                    <span class="bi bi-pencil"></span> Edit
                                </a>
                                
                                <!-- Tombol Hapus -->
                                <a href="#" class="btn btn-outline-danger btn-sm me-1" onclick="handleDestroy('{{ route('admin.member.destroy', $item->id) }}');">
                                    <span class="bi bi-eraser"></span> Delete
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

<!-- Form untuk Hapus Member -->
<form action="" id="form-delete" method="POST">
    @csrf
    @method('DELETE')
</form>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('/assets/vendors/simple-datatables/style.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Initialize Simple Datatables
    let datatable = document.getElementById('datatable');
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
            text: "Data yang dihapus tidak bisa dikembalikan",
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
