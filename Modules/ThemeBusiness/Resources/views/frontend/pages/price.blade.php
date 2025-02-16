@extends('themebusiness::frontend.layouts.master')

@section('title')
Price | {{ config('app.name') }}
@endsection

@section('main-content')

<div role="main" class="main">
    <section class="page-header page-header-modern page-header-lg bg-tertiary border-0 my-0">
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-10">Prices</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Prices</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section border-0 pb-0 pb-lg-5 m-0">
        <div class="container mt-lg-4 pb-3">
            <div class="row mb-4 pb-2">
                <div class="col">
                    <p class="custom-font-secondary text-4 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. </p>
                    <p class="pb-1 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. </p>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. </p>
                </div>
            </div>
        </div>
    </section>

    @include('themebusiness::frontend.pages.partials.our-price')
    @include('themebusiness::frontend.pages.partials.our-benefit')

    @include('themebusiness::frontend.pages.partials.booking')
</div>
@endsection
