@extends('layouts.app')

@section('content')


    {{-- loader --}}
    @include('includes.loader')
    {{-- end loader --}}


    <!-- header -->
    @include('includes.header')
    <!-- end header -->

    <!-- banner -->
    @include('includes.banner')
    <!-- end banner -->

    <!-- about -->
    @include('includes.about')
    <!-- end about -->

    <!-- service -->
    @include('includes.service')
    <!-- end service -->

    <!-- gallery -->
    @include('includes.gallery')
    <!-- end gallery -->

    <!-- contact -->
    @include('includes.contact')
    <!-- end contact -->

    <!-- footer -->
    @include('includes.footer')
    <!-- end footer -->


@endsection
