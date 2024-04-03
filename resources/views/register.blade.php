@extends('layouts.auth')
@section('form')

    @error('general_errors')
        Error: {{$message}}
    @enderror
    @error('password')
    Error: {{$message}}
    @enderror
    @error('email')
    Error: {{$message}}
    @enderror
    @error('first_name')
    Error: {{$message}}
    @enderror
    @error('last_name')
    Error: {{$message}}
    @enderror

    <form class="auth-form" action="/register/complete" method="POST">
        @csrf
        <h3> Εγγραφή Χρήστη </h3>

        <div class="input-group">
            <label for="email"> E-mail: </label>
            <input type="email" placeholder="ex. johndoe123@mywebmail.com" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="first_name"> Όνομα: </label>
            <input type="text" placeholder="ex. john" name="first_name" id="first_name">
        </div>
        <div class="input-group">
            <label for="last_name"> Επώνυμο: </label>
            <input type="text" placeholder="ex. doe" name="last_name" id="last_name">
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" placeholder="A very strong password!" name="password" id="password">
        </div>
        <div class="input-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" placeholder="Type that password again here!" name="password_confirmation" id="password_confirmation">
        </div>
            <div class="input-group" id="remember_me">
                <label for="accept_tos" id="remember_me_label"><input type="checkbox" name="accept_tos" id="accept_tos">Αποδέχομαι τους <a href="/terms-of-service">όρους και προϋποθέσεις</a>. </label>

            </div>
        <input type="submit" value="Εγγραφή">
    </form>
@endsection
