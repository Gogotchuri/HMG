@extends("layouts.app")
@section("html-body")
    @include("admin.partials.navbarAdmin")
    @yield("content")
    @include("public.partials.footer")
@endsection