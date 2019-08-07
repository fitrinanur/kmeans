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
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('lalin0.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('lalin2.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('ujiemisi.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Fourth slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('mudik1.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Fifth slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('mudik2.jpg') }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>six slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas tenetur dignissimos illo. Facere sint officia perspiciatis debitis maiores quos similique, quam explicabo soluta adipisci eius, veritatis optio facilis dolore accusamus sit sequi tempore ipsam eos deleniti distinctio pariatur! Iusto non harum quia, fugit veniam quisquam amet voluptas quos adipisci! Cum eaque odit vero nemo doloribus dolorem a ut modi molestiae, laudantium libero praesentium alias voluptas optio corporis perferendis nulla quam fuga atque repudiandae? Repellat tempora ad deserunt enim sit delectus nostrum maiores architecto natus ab atque, nihil perspiciatis adipisci possimus repellendus, reiciendis est rerum voluptatibus ipsum corrupti. Voluptates sed a et repudiandae placeat cum voluptatum tempore cupiditate eligendi nulla, necessitatibus ipsam eaque tempora labore natus nesciunt minus laudantium, qui deserunt! Possimus porro necessitatibus ab cumque, dolorum provident est cum. Adipisci laudantium odio voluptatem, ad, minus nulla, possimus nostrum recusandae natus enim error minima quaerat illum quasi corporis nam nesciunt non!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection