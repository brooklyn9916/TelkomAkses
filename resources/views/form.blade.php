@extends('layouts.main')

@section('container')
    <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="inputname" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="inputname" placeholder="Username" name="name">
        </div>
        <div class="mb-3">
            <label for="inputnik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="inputnik" placeholder="NIK" name="nik">
        </div>
        <div class="mb-3">
            <label for="inputnisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="inputnisn" placeholder="NISN" name="nisn">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@example.com"
                name="email">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto Background Merah</label>
            <input class="form-control" type="file" id="file" name="pasfoto" accept="image/png, image/jpeg">
        </div>    
        <div class="mb-3">
            <label for="formFile" class="form-label">Fotocopy KK atau KTP</label>
            <input class="form-control" type="file" id="file" name="fotocopy"accept="image/png, image/jpeg">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
