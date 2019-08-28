@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <section id="slide" style="max-width:1000px; max-height:400px !important;">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('lalin.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#888888;opacity:0.8;">
                                        <h5>Pelayanan Perbaikan</h5>
                                        <p>Perbaikan Traffic Light oleh Dinas Perhubungan</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('lalin0.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#888888;opacity:0.8;">
                                        <h5>Rekayasa Lalu Lintas</h5>
                                        <p>Pengaturan Lalu Lintas Kota Surakarta untuk Kenyamanan Masyarakat</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('lalin2.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#888888;opacity:0.8;">
                                        <h5>Rekayasa Lalu Lintas</h5>
                                        <p>Pengaturan Lalu Lintas Kota Surakarta untuk Kenyamanan Masyarakat</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('ujiemisi.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#888888;opacity:0.8;">
                                        <h5>Uji Emisi Kendaraan</h5>
                                        <p>Uji Emisi Kendaraan Sebagai Standart Kelayakan dalam Berkendara</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('mudik1.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#888888;opacity:0.8;">
                                        <h5>Apel Bersama</h5>
                                        <p>Apel Bersama Menyukseskan Program Pelayanan Mudik 2019</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('mudik2.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block" style="background-color:#888888;opacity:0.8;">
                                        <h5>Pelayanan Mudik</h5>
                                        <p>Program Layanan Mudik untuk Masyarakat 2019</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <p>Selamat Datang , {{ Auth()->user()->name }}</p>
                    </div>
                    <div class="card-body">
                        <p>
                            <img src="{{asset('sinus.png')}}" alt="" style="width: 150px;height: 150px; margin-left: 160px;">
                        </p>
                        <p>Panduan Penggunaan Aplikasi
                            <ol>
                                <li> Insert data jalan pada menu data master -> data jalan </li>
                                <li> Pilih menu proses untuk melihat perhitungan</li>
                                <li> Pilih menu maps untuk menampilkan maps</li>
                            </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection