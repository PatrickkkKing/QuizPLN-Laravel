@extends('layouts.app')
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="mb-4">
            <h3>Input Data Golongan</h3>
        </div>

        <form action="{{url('/golongan')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label>KODE GOLONGAN</label>
                <input type="text" name="gol_kode" class="form-control">
            </div>
            <div class="mb-3">
                <label>NAMA GOLONGAN</label>
                <input type="text" name="gol_nama" class="form-control">
            </div>
            <div class="mb-3">
                <a href="{{url('golongan/')}}" value="BATAL" class="btn btn-danger">BATAL</a>
                <a href="{{url('golongan/create')}}" value="REFRESH" class="btn btn-success">REFRESH</a>
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection