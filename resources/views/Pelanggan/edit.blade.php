@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Golongan Pel</label>
                <input type="text" class="form-control" name="pel_no" value="{{ $rowGolongan->gol_nama }}" disabled></>
            </div>
            <div class="mb-3">
                <label>No. Pel</label>
                <input type="text" class="form-control" name="pel_no" value="{{ $row->pel_no }}" disabled></>
            </div>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" name="pel_nama" value="{{ $row->pel_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea class="form-control" name="pel_alamat">{{ $row->pel_alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>No. HP</label>
                <input type="text" class="form-control" name="pel_hp" value="{{ $row->pel_hp }}"></>
            </div>
            <div class="mb-3">
                <label>KTP</label>
                <input type="text" class="form-control" name="pel_ktp" value="{{ $row->pel_ktp }}" disabled></>
            </div>
            <div class="mb-3">
                <label>Nomor Seri Pelanggan</label>
                <input type="text" class="form-control" name="pel_seri" value="{{ $row->pel_seri }}" disabled></>
            </div>
            <div class="mb-3">
                <label>No. Meteran</label>
                <input type="text" class="form-control" name="pel_meteran" value="{{ $row->pel_meteran }}"></>
            </div>
            <div class="mb-3">
                <label for="">Status Aktif</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pel_aktif" id="inlineCheckbox1" value="Y"
                    @if ($row->pel_aktif == 'Y') checked @endif>
                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="pel_aktif" value="N"
                    @if ($row->pel_aktif == 'N') checked @endif>
                <label class="form-check-label" for="inlineCheckbox2">No</label>
            </div>
            <div class="mb-3">
                <label>ID User</label>
                <input type="text" class="form-control" name="pel_aktif" value="{{ $rowUser->name }}" disabled></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-none" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
