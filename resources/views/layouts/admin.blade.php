@extends("layouts.app")
@section("html-body")
    @include("admin.partials.navbar")
    @yield("content")
    @include("public.partials.footer")
@endsection