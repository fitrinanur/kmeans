@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>PEMETAAN SISTEM SATU ARAH BERDASARKAN TINGKAT KESIBUKAN JALAN KOTA SURAKARTA DENGAN METODE <br/><i>K-Means Clustering</i></h3>
                    <p>Selamat Datang , {{ Auth()->user()->name }}</p>
                    <p>Penggunaan Aplikasi
                        <ol>
                        <li> Insert data master (Data Jalan)
                        </li>
                        <li> klik tombol proses
                        </li>
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
