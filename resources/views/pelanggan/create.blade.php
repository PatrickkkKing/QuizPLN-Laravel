@extends('layouts.app')
@extends('layouts.dashboard')

@section('content')
<div class="overflow-y-auto">
    <h2>Input Data Pelanggan</h2>

    <form action="{{ url('/pelanggan') }}" method="post">
        @csrf
    <div class="overflow-x-auto">
        <div class="mb-3">
            <label for="inputGroupSelect01">Nama Golongan Pelanggan</label>
            <select class="form-select" id="inputGroupSelect01" name="pel_id_gol" id="pel_id_gol">
                <option selected>Pilih Golongan...</option>
                @foreach ($rowGolongan as $golItem)
                    <option value="{{ $golItem->gol_id }}">{{ $golItem->gol_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">Nomor Pelanggan</label>
            <input type="text" name="pel_no" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="pel_nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Alamat Pelanggan</label>
            <input type="text" name="pel_alamat" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Hp Pelanggan</label>
            <input type="text" name="pel_hp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Ktp Pelanggan</label>
            <input type="text" name="pel_ktp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Seri Pelanggan</label>
            <input type="text" name="pel_seri" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">No Meteran Pelanggan</label>
            <input type="text" name="pel_meteran" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Status Pelanggan Aktif</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pel_aktif" id="inlineCheckbox1" value="Y">
            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
        </div>
        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="radio" id="inlineCheckbox2" name="pel_aktif" value="N">
            <label class="form-check-label" for="inlineCheckbox2">No</label>
        </div>
        <div class="mb-3">
            <label for="inputGroupSelect01">ID User Pelanggan</label>
            <select class="form-select" id="inputGroupSelect01" name="pel_id_user" id="pel_id_user">
                <option selected>Pilih User...</option>
                @foreach ($rowsUser as $userItem)
                    <option value="{{ $userItem->id }}">{{ $userItem->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <a href="{{url('pelanggan/')}}" value="BATAL" class="btn btn-danger">BATAL</a>
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </div>
    </form>
</div>
@endsection