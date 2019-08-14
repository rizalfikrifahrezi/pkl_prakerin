@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang di Website
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<h4>Artikel Baru</h4>
<form action="{{ route('article.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title">
        @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Content</label>
        <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('article.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
@endsection
