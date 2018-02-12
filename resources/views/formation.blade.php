@extends('layouts.app')

@section('content')
<div class="for-client section text-center">
  <div class="container">
     @include('message')
     <div class="row">
      @foreach($formation as $myformation)
        <div class="col-xs-12 col-md-4">
          <div class="thumbnail">
            <img src="{{ asset( $myformation->image ) }}" alt="{{ $myformation->title }}" style="height: 200px;">
            <div class="caption">
              <h3>{{ $myformation->title }}</h3>
              <p>{{ $myformation->description }}</p>
              
              <a class="btn btn-primary" role="button" data-toggle="collapse" href="#insc{{ $myformation->id }}" aria-expanded="false" aria-controls="insc">
                  Inscription
                </a>
                <div class="collapse" id="insc{{ $myformation->id }}" >
                 <form class="form-horizontal" method="POST" action="{{ url('inscription') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input  type="hidden" class="form-control" name="formation_id"  value="{{ $myformation->id }}" >
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input  type="text" class="form-control" name="name"  required >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input  type="email" class="form-control" name="email"  required >
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Tel</label>
                            <div class="col-md-10">
                                <input  type="text" class="form-control" name="tel"  required >
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="pagination col-lg-12">
            {!!  $formation->render() !!}
        </div>
      </div>
    </div>
</div>
@endsection
