@extends('layout/asesi')

@section('judul')
    Profil Anda | LSP-POLITAP
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    <!-- @include('layout/verifikasi') -->
    <div class="page-header">
        <h4>
            <i class="fas fa-user"></i> Profil Anda
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('dashasesi.index') }}">Dashboard</a>
                </li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Profil Anda</li>
            </ol>
        </nav>
    </div><br>
    <div class="card">
        <div class="card-body">
            <h5 class="font font-weight-bold">Data Pribadi :</h5><br>
            <form action="{{ route('formulirapl2.update') }}" method="POST" enctype="multipart/form-data"
                class="form-sample">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name"
                                    value="{{ old('name', Auth::user()->name) }}">
                                @error('name')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Induk Mahasiswa</label>
                            <div class="col-sm-9">
                                <input type="number" maxlength="25" class="form-control" name="email"
                                    value="{{ old('email', Auth::user()->email) }}">
                                @error('email')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="sex_id">
                                    <option value="" holder></option>
                                    @foreach ($sex as $result)
                                        <option value="{{ $result->id }}"
                                            @if (old('sex_id', Auth::user()->sex_id) == $result->id) selected @endif>{{ $result->sex }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('sex_id')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tgl_lahir"
                                    value="{{ old('tgl_lahir', Auth::user()->tgl_lahir) }}">
                                @error('tgl_lahir')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="{{ old('tempat_lahir', Auth::user()->tempat_lahir) }}">
                                @error('tempat_lahir')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" name="email2"
                                        value="{{ old('email2', Auth::user()->email2) }}">
                                </div>
                                @error('email2')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <input type="number" class="form-control" name="no_hp"
                                        value="{{ old('no_hp', Auth::user()->no_hp) }}">
                                    @error('no_hp')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jurusan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="jurusan_id">
                                    <option value="" holder></option>
                                    @foreach ($jurusan as $result)
                                        <option value="{{ $result->id }}"
                                            @if (old('jurusan_id', Auth::user()->jurusan_id) == $result->id) selected @endif>{{ $result->jurusan }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('jurusan_id')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="semester_id">
                                    <option value="" holder></option>
                                    @foreach ($semester as $result)
                                        <option value="{{ $result->id }}"
                                            @if (old('semester_id', Auth::user()->semester_id) == $result->id) selected @endif>{{ $result->semester }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('semester_id')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Warga Negara</label>
                            <div class="col-sm-9">
                                <select name="negara" class="form-control" id="">
                                    <option value="{{ old('negara', Auth::user()->negara) }}" holder>{{ old('negara', Auth::user()->negara) }}</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Warga Asing" >Warga Asing</option>
                                </select>
                                @error('negara')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kata Sandi</label>
                            <div class="col-sm-9">
                                <input type="number" maxlength="25" class="form-control" name="email"
                                    value="{{ old('email', Auth::user()->email) }}">
                                @error('password')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Sesuai KTP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat"
                                    value="{{ old('alamat', Auth::user()->alamat) }}">
                                @error('alamat')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg"
                                        class="form-control">
                                    <a href="{{ old('image', Auth::user()->image) }}" target="_blank"
                                        class="btn btn-info"><i class="fas fa-download"></i></a>
                                </div><br>
                                <img src="{{ old('image', Auth::user()->image) }}" width="100px"
                                    type="application/pdf">
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="font font-weight-bold">Data Pekerjaan Sekarang :</h5><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Institusi</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="20" class="form-control" name="institusi"
                                    value="{{ old('institusi', Auth::user()->institusi) }}">
                                @error('institusi')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="25" class="form-control" name="jabatan"
                                    value="{{ old('jabatan', Auth::user()->jabatan) }}">
                                @error('jabatan')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Kantor</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="50" class="form-control" name="alamat_kantor"
                                    value="{{ old('alamat_kantor', Auth::user()->alamat_kantor) }}">
                                @error('alamat_kantor')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No. Telp</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="telp"
                                    value="{{ old('telp', Auth::user()->telp) }}">
                                @error('telp')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Fax</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="fax"
                                    value="{{ old('fax', Auth::user()->fax) }}">
                                @error('fax')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" maxlength="25" class="form-control" name="email3"
                                    value="{{ old('email3', Auth::user()->email3) }}">
                                @error('email3')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Post</label>
                            <div class="col-sm-9">
                                <input type="text" maxlength="20" class="form-control" name="postal"
                                    value="{{ old('postal', Auth::user()->postal) }}">
                                @error('postal')
                                    <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <a href=""><button class="btn btn-rounded btn-info btn-block"><i class="fas fa-save"></i>
                        Simpan</button></a>
            </form>
        </div>
    </div>
@endsection
