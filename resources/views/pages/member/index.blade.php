@extends('layouts.app')

@section('content')
<div class="pages-heding">
    <div class="page-title mb-3">
        <h3> 
            <span class="bi bi-building"></span>
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
                                <th>member Name</th> 
                                <th>Phone Number</th> 
                                <th>Posotion</th>
                                <th>Address</th>
                                <th>Joining Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach  ($members as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->phonenumber}}</td>
                            <td>{{ $item->posotion}}</td>
                            <td>{{ $item->address}}</td>
                            <td>{{ $item->joiningdate}}</td>
                            <td>{{ $item->Status}}</td>
                            <td>
                                <a href="{{ route('admin.member.show', $item->id)}}" 
                                    class="btn btn-outline-secondary btn-sm me-1">
                                    <span class="bi bi-eye"></span>
                                    Show
                                </a>
                                <a href="#" class="btn btn-danger btn-sm me-1">
                                    <span class="bi bi-trash"></span>
                                    Delete
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
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('/assets/vendors/simple-datatables/style.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let datatable = document.getElementById('datatable');
    console.log(datatable)
    new simpleDatatables.DataTable(datatable);
</script>
@endpush