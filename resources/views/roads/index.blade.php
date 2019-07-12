@extends('layouts.app')

@section('content')
<div class="container">
    <div class="title-header">
        <div class="row">
            <div class="col-lg-6" style="float:left">
                <h3>Daftar Data Jalan</h3>
            </div>
            <div class="col-lg-6">
                <a class="btn btn-sm btn-primary" style="float:right;" href="{{route('road.create')}}" > Tambah Data</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="content">
        <table class="table table-hover table-sm table-bordered table-striped">
            <caption>Daftar Data Jalan</caption>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Panjang</th>
                    <th scope="col">Lebar</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Kecepatan</th>
                    <th scope="col">Aktifitas</th>
                    <th scope="col">Lajur</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roads as $road)
                <tr>
                    <th scope="row">{{ $road->id }}</th>
                    <td>{{$road->name}}</td>
                    <td>{{$road->long}}</td>
                    <td>{{$road->width}}</td>
                    <td>{{$road->type}}</td>
                    <td>{{$road->time}}</td>
                    <td>{{$road->speed}}</td>
                    <td>{{$road->activity}}</td>
                    <td>{{$road->lane}}</td>
                    <td>
                        <form action="{{ route('road.destroy',$road->id) }}" method="POST">
                            {{-- <a class="btn `btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                            <a class="btn btn-warning btn-sm" href="{{ route('road.edit',$road->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
