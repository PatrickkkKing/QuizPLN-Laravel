@extends('layouts.app')
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>
                Data Golongan
                <a class="btn btn-sm float-end" href="{{url('golongan/create')}}"><input type="submit" value="TAMBAH" class="btn btn-success"></input></a>
            </h3>
        </div>
        <table class="table table-bordered border-primary table-hover overflow-x-auto">
            <tr>
                <th>ID</th>
                <th>KODE GOLONGAN</th>
                <th>NAMA GOLONGAN</th>
                <th>TANGGAL PENAMBAHAN</th>
                <th>TANGGAL PERUBAHAN</th> 
                <th>EDIT</th>
                <th>HAPUS</th>
            </tr>
        @foreach ($rows as $row)
    
            <tr>
                <td>{{$row->gol_id}}</td>
                <td>{{$row->gol_kode}}</td>
                <td>{{$row->gol_nama}}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
                <td><a class="btn btn-primary" href="{{ url('golongan/'. $row->gol_id . '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('golongan/' . $row->gol_id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
        </table>
    </div>
@endsection