@extends("layouts.public")
@section("content")
<main>
    <div class="home-header-photo"></div>
    <div class="home-header-bounded"></div>
    <a href="lang/ka">Change language to georgian</a>
    <a href="lang/en">Change language to english</a>
    YAY public content!
    <br>
    {{ trans('app.title')}}
    <br>
    @lang("test")
</main>
@endsection
