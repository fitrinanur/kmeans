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
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos dolorem facere sapiente dolorum! Minus minima nam pariatur, rem deleniti laborum suscipit nesciunt aperiam voluptates saepe numquam natus quidem dignissimos obcaecati fuga sapiente ut necessitatibus ipsa quis itaque impedit veritatis molestiae fugit cumque? Perspiciatis tempora voluptatum deleniti aspernatur ipsam id mollitia? Nihil molestias dolor pariatur saepe incidunt quod inventore voluptas doloribus. Eligendi quaerat reiciendis ipsa quisquam nisi iure nam amet accusantium, velit ab magni quos nemo esse blanditiis necessitatibus harum voluptates nobis. Libero dolorem iure vero. Recusandae unde fugit aliquam neque minus, porro dolores quas quibusdam quae quis similique placeat sit pariatur, explicabo modi possimus quia magni iusto praesentium numquam adipisci. Obcaecati ipsam esse sint vitae aspernatur at expedita, officiis totam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection