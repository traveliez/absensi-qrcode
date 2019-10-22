@extends('adminlte::page')

@section('title', 'Siakad UPWI')
@section('title_prefix', 'Tambah Matkul - ')

@section('content_header')
<h1>Tambah Mata Kuliah</h1>

{{ Breadcrumbs::render('matkul.create') }}
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="{{ route('matkul.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group has-feedback {{ $errors->has('kode') ? 'has-error' : '' }}">
                            <label for="kode">Kode Mata Kuliah</label><span class="text-danger"> *</span>
                            <input type="text" class="form-control" id="kode" name="kode"
                                placeholder="Kode Mata Kuliah" value="{{ old('kode') }}" required>
                            @if ($errors->has('kode'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kode') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('nama') ? 'has-error' : '' }}">
                            <label for="nama">Nama Mata Kuliah</label><span class="text-danger"> *</span>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                value="{{ old('nama') }}" required>
                            @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('ruang') ? 'has-error' : '' }}">
                            <label for="ruang">Ruangan</label><span class="text-danger"> *</span>
                            <input type="text" class="form-control" id="ruang" name="ruang" placeholder="Ruangan"
                                value="{{ old('ruang') }}" required>
                            @if ($errors->has('ruang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ruang') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <br><br>
                        <small><span class="text-danger">*</span> Wajib Diisi</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

