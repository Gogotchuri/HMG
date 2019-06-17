@extends("layouts.public")

@section("content")
<div>
    <a href="lang/ka">Change language to georgian</a>
    <a href="lang/en">Change language to english</a>
    YAY public content!
    <br>
    {{ trans('app.title')}}
    <br>
    @lang("test")
</div>
@endsection
