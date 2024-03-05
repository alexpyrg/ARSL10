@extends('layouts.auth')
@section('form')
    <form class="auth-form" action="/auth/login" method="POST">
        @csrf
        <h3>Σύνδεση Χρήστη</h3>
        <div class="input-group">
            <label for="email"> E-mail: </label>
            <input type="email"  placeholder="Your E-mail" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="password" >Password:</label>
            <input type="password" name="password" placeholder="Your password" id="password">
        </div>
            <div class="input-group" id="remember_group">

                <label for="remember_me" id="remember_me_label" >  <input type="checkbox" name="remember_me" id="remember_me"> Απομνημόνευση των στοιχείων μου. </label>
            </div>
        <input type="submit" value="Σύνδεση">
            <h5>Forgot your password? <a class="recover-password" href="/recover-password">Recover Password!</a> </h5>
    </form>
@endsection
