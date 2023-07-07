@extends('layouts.app')
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3>
                Data Pelanggan
                <a class="btn btn-sm float-end" href="{{url('pelanggan/create')}}"><input type="submit" value="TAMBAH" class="btn btn-success"></input></a>
            </h3>
        </div>
    <div class="overflow-x-auto">
        <table class="table table-bordered border-primary table-hover ">
            <tr>
                <th>ID</th>
                <th>NAMA GOLONGAN PELANGGAN</th>
                <th>No. PELANGGAN</th>
                <th>NAMA PELANGGAN</th>
                <th>ALAMAT PELANGGAN</th>
                <th>NoHp PELANGGAN</th>
                <th>KTP PELANGGAN</th>
                <th>SERI PELANGGAN</th>
                <th>NO METERAN</th>
                <th>STATUS/AKTIF</th>
                <th>USER ID PELANGGAN</th>
                <th>TANGGAL PENAMBAHAN</th>
                <th>TANGGAL PERUBAHAN</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </tr>
        @foreach ($rows as $row)
    
            <tr>
                <td>{{ $row->pel_id }}</td>
                <td>{{ $row->golongan->gol_nama }}</td>
                <td>{{ $row->pel_no }}</td>
                <td>{{ $row->pel_nama }}</td>
                <td>{{ $row->pel_alamat }}</td>
                <td>{{ $row->pel_hp }}</td>
                <td>{{ $row->pel_ktp }}</td>
                <td>{{ $row->pel_seri }}</td>
                <td>{{ $row->pel_meteran }}</td>
                <td>{{ $row->pel_aktif }}</td>
                <td>{{ $row->user->name }}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
                <td><a class="btn btn-primary" href="{{ url('pelanggan/'. $row->pel_id . '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pelanggan/' . $row->pel_id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    </div>
@endsection