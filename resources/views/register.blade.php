@extends('layouts.auth')
@section('form')
    <form class="auth-form" action="/login/authenticate" method="POST">
        <h3> Εγγραφή Χρήστη </h3>
        @csrf
        <div class="input-group">
            <label for="email"> E-mail: </label>
            <input type="email" placeholder="ex. johndoe123@mywebmail.com" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="firstname"> Όνομα: </label>
            <input type="text" placeholder="ex. john" name="firstname" id="firstname">
        </div>
        <div class="input-group">
            <label for="lastname"> Επώνυμο: </label>
            <input type="text" placeholder="ex. doe" name="lastname" id="lastname">
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" placeholder="A very strong password!" name="password" id="password">
        </div>
        <div class="input-group">
            <label for="corfirm_password">Confirm Password:</label>
            <input type="password" placeholder="Type that password again here!" name="confirm_password" id="confirm_password">
        </div>
            <div class="input-group" id="remember_me">
                <label for="accept_tos" id="remember_me_label"><input type="checkbox" name="accept_tos" id="accept_tos">Αποδέχομαι τους <a href="/terms-of-service">όρους και προϋποθέσεις</a>. </label>

            </div>
        <input type="submit" value="Εγγραφή">
    </form>
@endsection
