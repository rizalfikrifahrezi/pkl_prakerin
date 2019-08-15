@extends('layouts.app')

@section('content')
<div class="container">
<h4>{{ $bidangstudi->title }}</h4>
<p>{{ $bidangstudi->content }}</p>
<a href="{{ route('bidangstudi.index') }}" class="btn btn-info">Kembali</a>
</div>
@endsection