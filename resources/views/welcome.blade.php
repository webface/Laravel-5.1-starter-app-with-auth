@extends('layouts.master')
@section('content')

<div class="starter-template">
    <h1>webfaCeMEdia</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    @if (Auth::check())
    <a class="btn btn-primary" href="{{ url('/auth/logout') }}">Logout</a>
    @endif
</div>

</div>
@endsection
