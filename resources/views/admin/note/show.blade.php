@extends('layout/admin2')
@section('isi')
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="page-header">
        <h3>
            <i class="fas fa-edit"></i> Edit Catatan
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('note.index') }}">Catatan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Catatan</li>
            </ol>
        </nav>
    </div><br>
    {{-- <---------------------- PAGE HEADER ----------------------> --}}
    <div class="card col-md-8">
        <div class="card-body">
            <a href="{{ route('note.edit', $note->id) }}"><button class="btn btn-warning"><i class="fas fa-edit"></i> Edit
                    Catatan</button></a>
            <div class="card-title"><br>
                <h4>{{ $note->judul }}</h4>
            </div>
            <div>
                <p>
                    {!! $note->isi !!}
                </p>
            </div>
        </div>
    </div>
@endsection
