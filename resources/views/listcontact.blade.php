@extends('layouts.app')

@section('content')
<div class="contact section container">
    <h2 class="title"><i class="fa fa-bars"></i> List Contact</h2>
    @include('message')
   <table class="table table-striped">
    <thead>
        <th>Nom</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Date</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($contact as $mycat)
        <tr>
            <td> {{ $mycat->name }} </td>
            <td> {{ $mycat->email }} </td>
            <td> {{ $mycat->subject }} </td>
            <td> {{ $mycat->message }} </td>
            <td> {{ $mycat->created_at }} </td>
            <td>
                <a class="btn btn-danger" href="deleteContact/{{ $mycat->id }}" ><span class="glyphicon glyphicon-trash"></span></a>
                
           </td>
        </tr>
        
       
       
        @endforeach
    </tbody>
</table>
<div class="pagination col-lg-12">
    {!!  $contact->render() !!}
</div>
</div>
@endsection
