@extends('layouts.app')

@section('content')

<div class="container">
<h4>Edit Data</h4>
</div>

<form action="{{ route('bidangstudi.update', $article->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}

    <div class="container">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama</label>
        <input type="text" class="form-control" name="title" placeholder="Ketikkan Nama" value="{{ $bidangstudi->title }}">
        @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
        @endif
    </div>
    </div>

    <div class="container">
    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Penjelasan</label>
        <textarea name="content" cols="30" rows="5" class="form-control">{{ $bidangstudi->content }}</textarea>
        @if ($errors->has('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
        @endif
    </div>
    </div>

    <div class="container">
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('bidangstudi.index') }}" class="btn btn-default">Kembali</a>
    </div>
    </div>
</form>
@endsection