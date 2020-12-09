@extends('tmp.base')
@section('title', $title)

@section('content')
<div class="container">
    <div class="block_form">
        <div class="response"></div>
        <form id="url_form" action="/short_your_url" method="post">
            <div class="form-group">
                <input id="url" type="text" name="url" class="form-control form-control-lg" type="text" placeholder="url">
            </div>
            <button type="submit" class="btn btn-outline-dark">Сократить</button>
        </form>
    </div>
</div>
@endsection