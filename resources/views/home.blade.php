@extends('layouts.app')

@section('content')
<div class="home section container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>
                <div class="panel-body text-center">
                   <div class="col-lg-4">
                       <h3>{{ $formation }}</h3>
                       Number de formation 
                   </div>
                   <div class="col-lg-4">
                       <h3>{{ $contact }}</h3>
                       Number de contact
                   </div>
                    <div class="col-lg-4">
                       <h3>{{ $inscription }}</h3>
                       Number de inscription
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
