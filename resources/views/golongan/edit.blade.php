@extends('layouts.app')
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h3 class="mb-4">Edit Data Golongan</h3>

        <form action="{{url('/golongan/' . $row->gol_id)}}" method="POST">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label>KODE GOLONGAN</label>
                <input type="text" class="form-control" name="gol_kode" value="{{ $row->gol_kode}}"></>
            </div>
            <div class="mb-3">
                <label>NAMA GOLONGAN</label>
                <input type="text" class="form-control" name="gol_nama" value="{{ $row->gol_nama}}"></>
            </div>
            <div class="mb-3">
                <a href="{{url('golongan/')}}"><input type="submit" value="BATAL" class="btn btn-danger"></a>
                <input type="submit" value="UPDATE" class="btn btn-success">
            </div>
        </form>
    </div>
@endsection