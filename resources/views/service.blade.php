@extends('layouts.app')

@section('content')
    {{-- loader --}}
    @include('includes.loader')
    {{-- end loader --}}


    <!-- header -->
    @include('includes.header')
    <!-- end header -->


  <!--  service -->
  <div class="service">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>{{__('main.ser-our')}} <span class="green">{{__('main.service-h')}}</span></h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="row">
                <div class="col-md-4 col-sm-6">
                   <div class="service_box">
                      <i><a href="contact.html"><img src="{{URL::asset('images/service1.png')}}" alt="#"/></a></i>
                      <h3>{!!__('main.serv-Specialized-h')!!}</h3>
                      <p>{!!__('main.serv-Specialized-b')!!}</p>
                   </div>
                </div>
                <div class="col-md-4 offset-md-1 col-sm-6">
                   <div class="service_box">
                      <i><a href="contact.html"><img src="{{URL::asset('images/service2.png')}}" alt="#"/></a></i>
                      <h3>{!! __("main.serv-Construction-h") !!}</h3>
                      <p>
                        {!! __("main.serv-Construction-b") !!}
                      </p>
                   </div>
                </div>
                <div class="col-md-4 offset-md-3 col-sm-6 mar_top">
                   <div class="service_box">
                      <i><a href="contact.html"><img src="{{URL::asset('images/service3.png')}}" alt="#"/></a></i>
                      <h3>{{__('main.serv-Concrete-h')}}</h3>
                      <p>{!!__('main.serv-Concrete-b')!!}</p>
                   </div>
                </div>
                <div class="col-md-4 offset-md-1 col-sm-6 mar_top">
                   <div class="service_box">
                      <i><a href="contact.html"><img src="{{URL::asset('images/service4.png')}}" alt="#"/></a></i>
                      <h3>{{__('main.serv-Metal-h')}}</h3>
                      <p> {!!__('main.serv-Metal-b')!!}</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
    <!--  service2-->

    <div class="service">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage">
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-md-10 offset-md-1">
                <div class="row">
                   <div class="col-md-4 col-sm-6">
                      <div class="service_box">
                         <i><a href="contact.html"><img src="{{URL::asset('images/service5.png')}}" alt="#"/></a></i>
                         <h3>{{__('main.serv-Specialized-h')}}</h3>
                         <p>{!!__('main.serv-Specialized-b')!!}</p>
                      </div>
                   </div>
                   <div class="col-md-4 offset-md-1 col-sm-6">
                      <div class="service_box">
                         <i><a href="contact.html"><img src="{{URL::asset('images/service6.png')}}" alt="#"/></a></i>
                         <h3>{{__('main.serv-Decoration-h')}}</h3>

                         <p>
                             {!!__('main.serv-Decoration-b')!!}
                         </p>
                      </div>
                   </div>
                   <div class="col-md-4 offset-md-3 col-sm-6 mar_top">
                      <div class="service_box">
                         <i><a href="contact.html"><img src="{{URL::asset('images/service7.png')}}" alt="#"/></a></i>
                         <h3> {{__('main.serv-Surveying-h')}}</h3>
                         <p>{!!__('main.serv-Surveying-b')!!}</p>
                      </div>
                   </div>
                   <div class="col-md-4 offset-md-1 col-sm-6 mar_top">
                      <div class="service_box">
                         <i><a href="contact.html"><img src="{{URL::asset('images/service8.png')}}" alt="#"/></a></i>
                         <h3>{{__('main.serv-Architectural-h')}}</h3>
                         <p>{!!__('main.serv-Architectural-b')!!}</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 <!-- end service -->


    <!-- footer -->
    @include('includes.footer')
    <!-- end footer -->
@endsection
