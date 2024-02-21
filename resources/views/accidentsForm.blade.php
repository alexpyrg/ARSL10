@extends('layouts.forms')
@section('form')

    <form action="/save/accident" method="POST" class="general-form">
        @csrf


    </form>

@endsection
