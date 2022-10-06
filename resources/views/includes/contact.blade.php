  <!--  contact -->
  <div id="contact" class="contact">
    {{-- @include('includes.flash'); --}}
    <div class="container">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
        @endif
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>{{__('main.contact-us')}}</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form" method="POST" action="{{route('contact')}}">
                @csrf
                <div class="row">
                   <div class="mt-4 col-md-12 ">
                      <input class="contactus" placeholder="{{__('main.cont-name')}}" type="type" name="name">
                   </div>
                    @error('name')
                    <div class="text-sm-start text-danger">{{$message}}</div>
                    @enderror
                   <div class="mt-4 col-md-12">
                      <input class="contactus" placeholder="{{__('main.cont-type')}}" type="type" name="type">
                   </div>
                   @error('type')
                   <div class="text-sm-start text-danger">{{$message}}</div>
                   @enderror
                   <div class="mt-4 col-md-12">
                      <input class="contactus" placeholder="{{__('main.cont-location')}}" type="type" name="location">
                   </div>
                   <div class="mt-4 col-md-12">
                      <input class="contactus" placeholder="{{__('main.cont-phone')}}" type="type" name="PhoneNum">
                   </div>
                   @error('PhoneNum')
                   <div class="text-sm-start text-danger">{{$message}}</div>
                   @enderror
                   <div class="mt-4 col-md-12">
                      <input class="contactus" placeholder="{{__('main.cont-Whatsapp')}}" type="type" name="whatsappNum">
                   </div>
                   @error('whatsappNum')
                   <div class="text-sm-start text-danger">{{$message}}</div>
                   @enderror
                   <div class="mt-4 col-md-12">
                      <textarea class="textarea" placeholder="{{__('main.cont-message')}}" type="type" name="message" ></textarea>
                    </div>
                    @error('message')
                    <div class="text-sm-start text-danger">{{$message}}</div>
                    @enderror
                   <div class="mt-4 col-md-12">
                      <button class="send_btn">{{__('main.cont-send')}}</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=yemen+Sanaa" width="600" height="345" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end contact -->
