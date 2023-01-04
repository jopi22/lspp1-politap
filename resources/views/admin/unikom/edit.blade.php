@extends('layout/admin')

@section('judul')
    {{ $unikom->unikom }} | Admin LSP POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')
    <div class="page-header">
        <h4>
            <i class="fas fa-list"></i> Edit Unit Kompetensi
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('skema.index') }}">Unit Kompetensi</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">{{ $unikom->id }}</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    {{-- EDIT UJIKOM --}}
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <i class="fas fa-list"></i> Edit Unit Kompetensi
            </h4>
            <form action="{{ route('unikom.update', $unikom->id) }}" method="POST" class="form-inline">
                @csrf
                @method('patch')
                <label class="sr-only" for="inlineFormInputName2"></label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="kode_unikom"
                    value="{{ $unikom->kode_unikom }}">
                <label class="sr-only" for="inlineFormInputGroupUsername2"></label>
                <div class="input-group mb- mr-sm-2">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="unikom"
                        value="{{ $unikom->unikom }}">
                </div>
                <label class="sr-only" for="inlineFormInputGroupUsername2"></label>
                <div class="input-group mb-2 mr-sm-2">
                    <select class="form-control" name="skema_id">
                        <option value="" holder>pilih</option>
                        @foreach ($skema as $result)
                            <option value="{{ $result->id }}" @if ($unikom->skema_id == $result->id) selected @endif>
                                {{ $result->skema }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-info mb-2 btn-rounded btn-block"><i class="fas fa-save"> </i> Update</button>
            </form>
        </div>
    </div>
@endsection
