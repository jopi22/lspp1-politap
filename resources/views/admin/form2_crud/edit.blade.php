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

{{-- <---------------------- TAMBAH DATA ----------------------> --}}
    <div class="accordion accordion-solid-header" id="-4" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="heading-11">
                <h6 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="true"
                        aria-controls="collapse-11">
                        &plus; Ketik disini Untuk Menambah Isi Formulir 
                    </a>
                </h6>
            </div>
            <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11"
                data-parent="#accordion-4">
                <div class="card-body">
                    <form action="{{route('formapl2_save')}}" method="POST" class="form-sample">
                        @csrf                        
                            <div class="col-md-12">
                                <label>Isi Nama Unit</label>
                                <input type="text" maxlength="100" class="form-control" 
                            name="unit" placeholder="Unit">
                            </div><br>
                            <div class="col-md-12">
                                <label>Isi Elemen</label>
                                <textarea class="summernote" name="elemen"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="formapl2_id" value="{{ $formapl2->id }}" class="btn btn-success mb-2"><i
                                class="fas fa-save"></i> Simpan</button>
                            </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div><br>

<div class="card col-md-12">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>erwer</td>
                    <td>werwer</td>
                    <td>erwer</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <th>rtewrt</th>
                    <th>rtwertewr</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
