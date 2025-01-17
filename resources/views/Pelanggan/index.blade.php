@extends('layouts.app')

@section('content')
    <h2>Data Pelanggan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Pelanggan</a>
    </h2>
    <table class="table table-bordered table-hover">
        @if ($rows->isEmpty())
            <h4 class="mt-5 text-center text-danger">Tidak Ada Data Pelanggan.<br> Harap Masukkan Data terlebih dahulu</h4>
        @else
            <tr class="table-success">
                <th id="" class="text-center">ID</th>
                <th id="" class="text-center">Golongan Pel</th>
                <th id="" class="text-center">No. Pel</th>
                <th id="" class="text-center">Nama</th>
                <th id="" class="text-center">Alamat</th>
                <th id="" class="text-center">No. HP</th>
                <th id="" class="text-center">KTP</th>
                <th id="" class="text-center">No. Seri</th>
                <th id="" class="text-center">No. Meteran</th>
                <th id="" class="text-center">Status</th>
                <th id="" class="text-center">ID User</th>
                <th id="" class="text-center">EDIT</th>
                <th id="" class="text-center">DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr class="table-light">
                    <td class="text-center">{{ $row->pel_id }}</td>
                    <td class="text-center">{{ $row->golongan->gol_nama }}</td>
                    <td class="text-center">{{ $row->pel_no }}</td>
                    <td class="text-center">{{ $row->pel_nama }}</td>
                    <td class="text-center">{{ $row->pel_alamat }}</td>
                    <td class="text-center">{{ $row->pel_hp }}</td>
                    <td class="text-center">{{ $row->pel_ktp }}</td>
                    <td class="text-center">{{ $row->pel_seri }}</td>
                    <td class="text-center">{{ $row->pel_meteran }}</td>
                    <td class="text-center">{{ $row->pel_aktif }}</td>
                    <td class="text-center">{{ $row->user->name }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a>
                    </td>
                    <td class="text-center">
                        <form class=" btn-sm float-none" action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger justify-content-center">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    @extends('layouts.footer')
@endsection
