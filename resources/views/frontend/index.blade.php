@extends('frontend.master')
@section('home')

@section('title')
Career hive
@endsection


@include('frontend.home.hero-area')
@include('frontend.home.feature-area')

@include('frontend.home.category-area')
@include('frontend.home.course-area')
@include('frontend.home.courses')

@include('frontend.home.fun-area')
@include('frontend.home.cta-area')
@include('frontend.home.testimonial-area')




<div class="section-block"></div>

@include('frontend.home.about-area')

<div class="section-block"></div>

@include('frontend.home.register-area')


<div class="section-block"></div>
@include('frontend.home.client-area')
@include('frontend.home.blog-area')


@include('frontend.home.blog-area')



@include('frontend.home.subscribe-area')


@endsection
 