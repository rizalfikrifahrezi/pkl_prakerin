@extends('layouts.app')

@section('content')
<div class="container">
<h4>Data Baru</h4>
</div>
<form action="{{ route('bidangstudi.store') }}" method="post">
    {{csrf_field()}}
    <div class="container">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama</label>
        <input type="text" class="form-control" name="title" placeholder="Ketik Nama">
        @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
        @endif
    </div>
    </div>

    <div class="container">
    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Penjelasan</label>
        <input type="text" class="form-control" name="content" placeholder="Ketik Penjelasan">
        @if ($errors->has('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
        @endif
    </div>
    </div>

    <div class="container">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('bidangstudi.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection