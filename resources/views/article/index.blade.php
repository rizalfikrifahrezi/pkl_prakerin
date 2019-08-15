@extends('layouts.app')

@section('content')    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
    <table class="table table-hover">
        <thead>
            <th>Id</th>
            <th>Nama</th>
            <th>Aksi</th>
        </thead>
        <div class="container">
        <a href="{{ route('article.create') }}" class="btn btn-primary">+Baru</a>
        </div>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></td>
                    <td>
                        <form action="{{ route('article.destroy', $article->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-success">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection