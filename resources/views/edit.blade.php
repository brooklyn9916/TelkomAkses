@extends('layouts.main')

@section('container')
    <form class="form form-horizontal" action="{{ route('form.update', $data->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" value="{{ $data->nik }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NISN</label>
                <input type="text" name="nisn" class="form-control" value="{{ $data->nisn }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $data->email }}">
            </div>
        </div>
        <button type=" submit" class="btn btn-primary me-1 mb-1">Submit</button>
    </form>
@endsection
