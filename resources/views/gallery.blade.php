@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Email</th>
                    <th scope="col">Pas Foto</th>
                    <th scope="col">Fotocopy</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            @foreach ($data as $d)
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->nik }}</td>
                        <td>{{ $d->nisn }}</td>
                        <td>{{ $d->email }}</td>
                        <td>
                            <img src="{{ asset('data_pasfoto/' . $d->pasfoto) }}" alt="{{ $d->name }}" width="100">
                        </td>
                        <td>
                            <img src="{{ asset('data_fotocopy/' . $d->fotocopy) }}" alt="{{ $d->name }}" width="100">
                        </td>
                        <td>
                            <a href="{{ route('form.edit', $d->id) }}">
                                <button class="btn btn-success">Edit</button>
                            </a>
                            <a href="/delete_data/{{ $d->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
            @endforeach
        </table>


    </div>
@endsection
