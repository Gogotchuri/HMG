@extends("layouts.app")
@section("html-body")
    @include("public.partials.navbar")
    @yield("content")
    @include("public.partials.footer")
@endsection