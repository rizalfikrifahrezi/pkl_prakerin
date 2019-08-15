@extends('layouts.app')

@section('content')    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
    <table class="table table-hover">
        <div class="container">
            <a href="{{ route('bidangstudi.create') }}" class="btn btn-primary">+Baru</a>
        </div>
        <thead>
            <th>Id</th>
            <th>Nama</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($bidangstudis as $bidangstudi)
                <tr>
                    <td>{{ $bidangstudi->id }}</td>
                    <td><a href="{{ route('bidangstudi.show', $bidangstudi->id) }}">{{ $bidangstudi->title }}</a></td>
                    <td>
                        <form action="{{ route('bidangstudi.destroy', $bidangstudi->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('bidangstudi.edit', $bidangstudi->id) }}" class="btn btn-success">Edit</a>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection