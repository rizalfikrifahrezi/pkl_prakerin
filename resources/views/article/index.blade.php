@extends('layouts.app')

@section('content')    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>Id</th>
            <th>Nama</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></td>
                    <td>
                        <form action="{{ route('article.destroy', $article->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('article.create') }}" class="btn btn-info btn-sm">Tambah</a>
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection