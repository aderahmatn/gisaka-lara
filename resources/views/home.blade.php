@extends('app')
@section('title','Home')
@section('header')
<div class="container">
    <div class="text-center text-white font-gisaka header" data-aos="fade-up" data-aos-duration="1500">
        Internet Ultra Cepat Dari Rumah
    </div>
    <div class="d-flex justify-content-center mt-2">
        <p class="text-center text-white font-gisaka text-header" data-aos="fade-up" data-aos-duration="1500"
            data-aos-delay="300">
            Rasakan sensasi browsing, download dan streaming tanpa membuang waktu dengan koneksi internet ultra cepat.
        </p>
    </div>
    <div class="d-flex justify-content-center">
        <img src="/images/home4.png" alt="" class="image-header" data-aos="fade-up" data-aos-duration="1500"
            data-aos-delay="900">
    </div>
</div>
@endsection
@section('content')
{{-- unlimited section --}}
<section class="home-2">
    <div class="container py-4 mt-5">
        <div class="row">
            <div class="col-md-6 text-right pt-5" data-aos="fade-right" data-aos-duration="1500">
                <p class="font-gisaka title-section ">Unlimited tanpa batas kuota</p>
                <p class="text-header">Hampir semua provider internet menerapkan kebijakan FUP. Gisaka sama sekali tidak
                    memberlakukan hal tersebut. Kamu bisa streaming ataupun download semua film dan game favoritmu,
                    tanpa khawatir akan penurunan kecepatan.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="/images/unlimited.png" alt="" id="unlimited" class="img-section" style="height:350px"
                    data-aos="fade-left" data-aos-duration="1500">
            </div>
        </div>
    </div>
</section>
{{-- murah section --}}
<section class="bg-light">
    <div class="container py-4 mt-5 p-5">
        <div class="row">
            <div class="col-md-6 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="/images/murah.png" alt="" id="unlimited" class="img-section" style="height:350px">
            </div>
            <div class="col-md-6 text-left pt-5" data-aos="fade-up" data-aos-duration="1500">
                <p class="font-gisaka title-section ">Lebih Cepat, Lebih Terjangkau</p>
                <p class="text-header">Gisaka menawarkan berbagai paket super cepat dengan harga super terjangkau. Bayar
                    lebih murah untuk kualitas dan kecepatan lebih baik.
                </p>
            </div>
        </div>
    </div>
</section>
{{-- paket section --}}
<section class="bg-primary-gs pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white pt-5">
                <p class="font-gisaka text-white header text-center" data-aos="fade-down" data-aos-duration="500">
                    Pilihan Paket Internet Ultra Cepat</p>
                <p class=" text-white text-center" data-aos="fade-down" data-aos-duration="500">Daftar sekarang untuk
                    menikmati internet ultra cepat dan tanpa batas dari gisaka</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title-gs m-0 ">SUPERNOVA</h5>
                        <p class="card-text-gs m-0">300</p>
                        <p class="card-desc-gs">Mbps</p>
                        <p class="card-price-gs">Rp. 1.199.000</p>
                        <p class="card-price-desc-gs text-muted">Nett per bulan</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Download up to <strong>300Mbps</strong></li>
                        <li class="list-group-item">Upload up to <strong>150Mbps</strong></li>
                        <li class="list-group-item">Data <strong>Unlimited</strong></li>
                    </ul>
                    <div class="card-body">
                        <button class="btn-primary-gs">SAYA MAU INI</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title-gs m-0 ">MAGIC WI-FI</h5>
                        <p class="card-text-gs m-0">200</p>
                        <p class="card-desc-gs">Mbps</p>
                        <p class="card-price-gs">Rp. 629.000</p>
                        <p class="card-price-desc-gs text-muted">Nett per bulan</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Download up to <strong>200Mbps</strong></li>
                        <li class="list-group-item">Upload up to <strong>100Mbps</strong></li>
                        <li class="list-group-item">Data <strong>Unlimited</strong></li>
                    </ul>
                    <div class="card-body">
                        <button class="btn-primary-gs">SAYA MAU INI</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title-gs m-0 ">NOVA</h5>
                        <p class="card-text-gs m-0">100</p>
                        <p class="card-desc-gs">Mbps</p>
                        <p class="card-price-gs">Rp. 439.000</p>
                        <p class="card-price-desc-gs text-muted">Nett per bulan</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Download up to <strong>100Mbps</strong></li>
                        <li class="list-group-item">Upload up to <strong>50Mbps</strong></li>
                        <li class="list-group-item">Data <strong>Unlimited</strong></li>
                    </ul>
                    <div class="card-body">
                        <button class="btn-primary-gs">SAYA MAU INI</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title-gs m-0 ">FAST</h5>
                        <p class="card-text-gs m-0">50</p>
                        <p class="card-desc-gs">Mbps</p>
                        <p class="card-price-gs">Rp. 389.000</p>
                        <p class="card-price-desc-gs text-muted">Nett per bulan</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Download up to <strong>50Mbps</strong></li>
                        <li class="list-group-item">Upload up to <strong>25Mbps</strong></li>
                        <li class="list-group-item">Data <strong>Unlimited</strong></li>
                    </ul>
                    <div class="card-body">
                        <button class="btn-primary-gs">SAYA MAU INI</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- promo section --}}
<section>
    <div class="container mt-5">
        <div class="promo-bg">
            <div class="row">
                <div class="col-lg-6 p-5" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                    <p class="promo-title font-gisaka">Promo Special Gisaka</p>
                    <p class="promo-desc">Dapatkan berbagai promo menarik dari Gisaka</p>
                    <button class="btn-primary-gs" style="height: 50px">LIHAT PROMO SPECIAL</button>
                </div>
                <div class="col-lg-6 col-md-2 p-0 ">
                    <img src="/images/promo.png" alt="" style="width: 100%" class="promo-img pr-4" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-delay="600">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- custcare section --}}
<section class="bg-light">
    <div class="container py-4 mt-5 p-5">
        <div class="row">
            <div class="col-md-6 text-center" data-aos="zoom-in" data-aos-duration="1500">
                <img src="/images/murah.png" alt="" id="unlimited" class="img-section" style="height:350px">
            </div>
            <div class="col-md-6 text-left pt-5" data-aos="fade-up" data-aos-duration="1500">
                <p class="font-gisaka title-section ">Layanan Customer Service</p>
                <p class="text-header">Gisaka menawarkan berbagai paket super cepat dengan harga super terjangkau. Bayar
                    lebih murah untuk kualitas dan kecepatan lebih baik.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
