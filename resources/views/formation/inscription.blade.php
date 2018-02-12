@extends('layouts.app')

@section('content')
<div class="contact section container">
    <h2 class="title"><i class="fa fa-bars"></i> List Inscription</h2>
   <table class="table table-striped">
    <thead>
        <th>Nom</th>
        <th>Email</th>
        <th>tel</th>
        <th>Date</th>
    </thead>
    <tbody>
        @foreach($inscription as $mycat)
        <tr>
            <td> {{ $mycat->name }} </td>
            <td> {{ $mycat->email }} </td>
            <td> {{ $mycat->tel }} </td>
            <td> {{ $mycat->created_at }} </td>
        </tr>
        
       
       
        @endforeach
    </tbody>
</table>
</div>
@endsection
