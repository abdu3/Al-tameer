@extends('layouts.app')

@section('content')
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

<section class="px-6 py-8">
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
    @endif
    <h1 class="text-center font-bold"> Rest Password!</h1>
    <div class="d-flex justify-content-center form_container">
        <form action="{{route('reset.password')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="InputEmail1" class="form-label">New Email</label>
              <input type="password" name="new-email" class="form-control  id="InputEmail1" aria-describedby="emailHelp">
              @error('new-email')
              <div class="text-sm-start text-danger">
                {{$message}}
            </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="InputPassword1" class="form-label"> New Password</label>
              <input type="password" name="new-password" class="form-control" id="InputPassword1">
              @error('new-password')
              <div class="text-sm-start text-danger">
                {{$message}}
            </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Change</button>
          </form>
        </div>
        {{-- <div class="container">

            @if ($errors->any())
              <div class="p-3 mb-2 bg-danger text-white">
                    <ul>
                        @foreach ( $errors->all() as $error )
                        <li> {{ $error }}</li>
                        @endforeach
                    </ul>
              </div>
              @endif
        </div> --}}
</section>
@endsection
