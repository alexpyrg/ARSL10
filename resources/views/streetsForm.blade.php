@extends('layouts.forms')
@section('form')

    <form class action="/save/street" method="POST" class="form-main">
        @csrf
        <div class="form-row fields-1">
            <select name="streetTraffiWayFlow" id="streetTraffiWayFlow">
                <option value="-10123013">Test</option>
            </select>
        </div>
    </form>

@endsection
