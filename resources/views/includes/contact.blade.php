  <!--  contact -->
  <div id="contact" class="contact">
    {{-- @include('includes.flash'); --}}
    <div class="container">
        @if (session()->has('success'))
        <script type="text/javascript">
        setTimeout(() => {
            let popup = document.getElementById("popup");
            console.log(popup);
            popup.classList.add("open-popup");
        }, 3000);

        </script>
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
    <div class="popup" id="popup">
        <img src="{{URL::asset('images/404-tick.gif')}}">
        <h2>Thank you </h2>
        <p>Your details has been successfully submitted . Thanks!</p>
        <button type="button" onclick="document.getElementById('popup').classList.add('close-popup')">OK</button>
     </div>

 <!-- end contact -->



<style>
    .send_btn{
    padding: 10px 60px;
    background: #fff;
    border: 0;
    outline: none;
    cursor: pointer;
    font-size: 22px;
    font-weight: 500;
    border-radius: 30px;

}

.popup{
    width: 400px;
    background: #ffffff;
    border-radius: 6px;
    position: absolute;
    top: 180%;
    left: 50%;
    transform: translate(-50%,-50%) scale(0.1) ;
    text-align: center;
    padding: 0 30px 30px;
    color: blue;
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
}
.open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
}
.close-popup{
    visibility: hidden;
    top: 0%;
    /* transform: translate(-50%,-50%) scale(0.1); */
}


.popup img{
    width: 100px;
     margin-top: 0%;
     border-radius: 0%;
     box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);

}

.popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;

}

.popup button{
    width: 100%;
    margin-top:50px ;
    padding: 10px 0 ;
    background: #6fd649;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius:4px ;
    cursor: pointer;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);


}
</style>
