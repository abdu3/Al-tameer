<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #252525;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
.wrap{
    word-wrap: break-word;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

    @extends('layouts.app')

    @section('content')



<div class="sidebar">
  <a class="active" href="#Messages">{{__('main.dash-Messages')}}</a>
  <a class="" href="/reset-password">{{__('main.dash-change')}} </a>
  <a class="" href="/logout">{{__('main.dash-logout')}}</a>
  <div class="dropdown">
    <button class="btn btn-black dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ LaravelLocalization::getCurrentLocaleNative() }}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
              {{ $properties['native'] }}
          </a>
  @endforeach
    </div>
  </div>
</div>

<div class="content">

    <div class="row">
        <div class="col-md-12 col-sm-3 col logo_section">
           <div class="full">
              <div class="center-desk">
                 <div class="logo">
                    <a href="index.html"><img src="{{URL::asset('images/logo.png')}}" alt="#" /></a>
                 </div>
              </div>
           </div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">{{__('main.cont-name')}}</th>
            <th scope="col">{{__('main.cont-type')}}</th>
            <th scope="col">{{__('main.cont-location')}}</th>
            <th scope="col"> {{__('main.cont-phone')}}</th>
            <th scope="col">{{__("main.cont-Whatsapp")}}</th>
            <th scope="col">{{__('main.cont-message')}}</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $messages as $message )
        <tr >
          <th scope="row">{{$message->name}}</th>
          <td>{{$message->type}}</td>
          <td>{{$message->location}}</td>
          <td>{{$message->phoneNum}}</td>
          <td>{{$message->whatsappNum}}</td>
          <td class="wrap" >{{$message->message}}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection

</body>
</html>
