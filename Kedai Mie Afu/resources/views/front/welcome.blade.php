@extends('app')

@section('content')


        <!-- CAROUSEL -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('frontend/img/bab1.jpg')}}" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('frontend/img/bab2.jpg')}}" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('frontend/img/bab3.jpg')}}" class="d-block img-fluid">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END CAROUSEL -->

        <section class="container mt-5 mb-5">
            <h3 class="d-flex justify-content-between">
                <strong>Mie</strong>
                <a href="#" class="btn btn-primary">View All</a>
            </h3>

            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd1.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mie Gore</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd2.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mie Kering</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd3.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mie kering</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd4.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mie Hahha</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-5 mb-5">
            <h3 class="d-flex justify-content-between">
                <strong>Best Selling Product</strong>
                <a href="#" class="btn btn-primary">View All</a>
            </h3>

            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd5.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mie kuah</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd6.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mie mie</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd7.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mie Gaul</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="{{asset('frontend/img/cd8.jpg')}}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <strong class="card-title">Mieehhh</strong>
                            <!-- <p class="card-text">Men's Philadelphia 76ers Allen Iverson Mitchell & Ness Black 2000-01 Hardwood Classics Swingman Jersey</p> -->
                            <div class="row">
                                <a href="{{route('detail')}}" class="btn btn-primary mt-3">Detail</a>
                                <a href="{{route('bucket')}}" class="btn btn-dark mt-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
