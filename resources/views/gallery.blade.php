@extends('layouts.app')

@section('content')
    {{-- loader --}}
    @include('includes.loader')
    {{-- end loader --}}


    <!-- header -->
    @include('includes.header')
    <!-- end header -->


    {{-- gallery --}}

    @include('includes.gallery')
 <!-- gallery -->
 {{-- <div class="gallery">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>{{__('main.gall-our')}} <span class="green">{{__('main.gallery-h')}}</span></h2>
                <p>{{__('main.gallery-b')}}</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-4 col-sm-6">
             <div class="gallery_text">
                <div class="galleryh3">
                   <h3>Interior Design</h3>
                   <p>of passages of Lorem <br>
                      Ipsum available <br>
                      , but the majority <br>
                      have suffer
                   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{URL::asset('images/gallery1.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{URL::asset('images/gallery2.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="i{{URL::asset('images/gallery3.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{URL::asset('images/gallery4.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_text">
                <div class="galleryh3">
                   <h3>Interior Design</h3>
                   <p>of passages of Lorem <br>
                      Ipsum available <br>
                      , but the majority <br>
                      have suffer
                   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_text">
                <div class="galleryh3">
                   <h3>Interior Design</h3>
                   <p>of passages of Lorem <br>
                      Ipsum available <br>
                      , but the majority <br>
                      have suffer
                   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{URL::asset('images/gallery5.jpg')}}" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-4 col-sm-6">
             <div class="gallery_img">
                <figure><img src="{{URL::asset('images/gallery6.jpg')}}" alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
 </div> --}}
 <!-- end gallery -->
    {{-- end gallery --}}

    <!-- footer -->
    @include('includes.footer')
    <!-- end footer -->
@endsection
