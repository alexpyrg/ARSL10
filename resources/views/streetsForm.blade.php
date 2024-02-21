@extends('layouts.forms')
@section('form')

    <form class action="/save/street" method="POST" class="general-form">
        @csrf
        <input type="text" name="" placeholder="...">
    </form>

@endsection
