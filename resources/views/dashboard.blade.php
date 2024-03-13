@extends('layouts.app')
@section('content')

<div class="content-container">
        <div class="user-profile-banner">
         <h3>{{ 'Αρχική'}}</h3>

         <span class="display-group-inline">
            <h4>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}<br><span class="role-text">{{ $userRole }}</span></h4>
            <img src="{{ asset('images/profile-user.png')}}" alt="Image error." />
         </span>
        </div>

    <div class="flex-row">
        <div class="flex-row-table">
            <span class="table-top-bar">
            <h3>Προσωπικές εγγραφές Accidents</h3>
            </span>
            <table>
                <tr>
                  <th>Company</th>
                  <th>Contact</th>
                  <th>Country</th>
                  <th>Company</th>
                  <th>Contact</th>
                  <th>Country</th>
                  <th>Company</th>
                  <th>Contact</th>
                  <th>Country</th>
                  <th>num</th>
                </tr>
                <tr>
                  <td>Alfreds Futterkiste</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                  <td>Alfreds Futterkiste</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                  <td>G1233123</td>
                  <td>Magazzini Alimentari Riuniti</td>
                  <td>Giovanni Rovelli</td>
                  <td>Italy</td>
                </tr>
                <tr>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                  <td>Alfreds Futterkiste</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                  <td>1231245ny</td>
                </tr>
                <tr>
                  <td>Ernst Handel</td>
                  <td>Roland Mendel</td>
                  <td>Austria</td>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                  <td>Ernst Handel</td>
                  <td>Roland Mendel</td>
                  <td>Austria</td>
                  <td>12312313</td>
                </tr>
                <tr>
                  <td>Island Trading</td>
                  <td>Helen Bennett</td>
                  <td>UK</td>
                  <td>Ernst Handel</td>
                  <td>Roland Mendel</td>
                  <td>Austria</td>
                  <td>Island Trading</td>
                  <td>Helen Bennett</td>
                  <td>UK</td>
                  <td>123123123</td>
                </tr>
                <tr>
                  <td>Laughing Bacchus Winecellars</td>
                  <td>Yoshi Tannamuri</td>
                  <td>Canada</td>
                  <td>Island Trading</td>
                  <td>Helen Bennett</td>
                  <td>UK</td>
                  <td>Laughing Bacchus Winecellars</td>
                  <td>Yoshi Tannamuri</td>
                  <td>Canada</td>
                  <td>1231545y</td>
                </tr>
                <tr>
                  <td>Magazzini Alimentari Riuniti</td>
                  <td>Giovanni Rovelli</td>
                  <td>Italy</td>
                  <td>Laughing Bacchus Winecellars</td>
                  <td>Yoshi Tannamuri</td>
                  <td>Canada</td>
                  <td>Magazzini Alimentari Riuniti</td>
                  <td>Giovanni Rovelli</td>
                  <td>Italy</td>
                  <td>987564</td>
                </tr>
              </table>
        </div>


    </div>
</div>
@endsection
