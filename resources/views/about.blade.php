@extends('layouts.app')

@section('content')
    {{-- loader --}}
    @include('includes.loader')
    {{-- end loader --}}


    <!-- header -->
    @include('includes.header')
    <!-- end header -->


    {{-- about --}}

    <div id="about" class="about">
        <div class="container">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <h2>{{__('main.us-h')}} <span class="green">{{__('main.about-h')}}</span></h2>
                    <h3>{!!__('main.who-are-we2')!!}</span></h3>
                    <p>
                        {{__('main.who-are-b')}}

                    </p>

                 </div>
              </div>
              <div class="col-md-7">
                 <div class="about_img">
                    <figure><img src="{{URL::asset('images/about.png')}}" alt="#" /></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div id="about" class="about">
        <div class="container">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <h3>{!! __('main.who-can-h') !!}</h3>
                    <p>

                    {!! __('main.who-can-b') !!}

                    </p>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="about_img">
                    <figure><img src="{{URL::asset('images/about.png')}}" alt="#" /></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div id="about" class="about">
        <div class="container">
           <div class="row">
              <div class="col-md-5">
                 <div class="titlepage">
                    <h3>{!! __('main.c-vision-h')!!}</h3>
                    <p>
                        {!! __('main.c-vision-b')!!}
                    </p>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="about_img">
                    <figure><img src="{{URL::asset('images/about.png')}}" alt="#" /></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>
    {{-- end about --}}

    <!-- footer -->
    @include('includes.footer')
    <!-- end footer -->
@endsection
