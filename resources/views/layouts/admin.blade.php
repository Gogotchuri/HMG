@extends("layouts.app")
@section("html-body")
    @include("admin.partials.navbar")
    @yield("content")
    @include("partials.footer")
@endsection