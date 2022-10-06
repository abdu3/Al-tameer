@extends('layouts.app')

@section('content')
    {{-- loader --}}
    @include('includes.loader')
    {{-- end loader --}}


    <!-- header -->
    @include('includes.header')
    <!-- end header -->


    {{-- contact --}}

    <!-- header -->
    @include('includes.contact')

    <!-- end header -->

    {{-- end contact --}}

    <!-- footer -->
    @include('includes.footer')
    <!-- end footer -->
@endsection
