@extends('layouts.app')

@section('content')
<div class="container">
<h4>{{ $article->title }}</h4>
<p>{{ $article->content }}</p>
<a href="{{ route('article.index') }}" class="btn btn-info">Kembali</a>
</div>
@endsection