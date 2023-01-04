@extends('layout/admin')

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
<embed src="{{ asset($xnxx->id) }}" type="pdf">
@endsection
