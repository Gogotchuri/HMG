@extends("layouts.app")
@section("html-body")
    @include("public.partials.navbar")
    @yield("content")
    @include("partials.footer")
@endsection