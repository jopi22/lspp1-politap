@extends('layout/admin1')
@section('isi')
@include('layout/verifikasi')
{{-- <---------------------- PAGE HEADER ----------------------> --}}
<div class="page-header">
    <h4>
        <i class="fab fa-pagelines"></i>  Edit Formulir APL-02
    </h4>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom  bg-danger">
            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('formapl2.index') }}">Formulir APL-02</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Formulir APL-02</li>
        </ol>
    </nav>
</div><br>

{{ $formapl2->kode }}
{{ $formapl2->skema }}<br>



@endsection
