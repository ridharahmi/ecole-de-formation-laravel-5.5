@extends('layouts.app')

@section('content')
<div class="formation section container">
    <div class="info">
        <h2 class="title"><i class="fa fa-bars"></i> List formation</h2>
        <p class="text-right">
      <a href="listformation/create" ><i class="fa fa-plus"></i> Add New Formation</a>
  </p>
  @include('message')
    </div>
   <table class="table table-striped">
    <thead>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Date</th>
        <th></th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($formation as $mycat)
        <tr>
            <td> <img src="{{ $mycat->image }}" > </td>
            <td> {{ $mycat->title }} </td>
            <td> {{ $mycat->description }} </td>
            <td> {{ $mycat->price }} DT</td>
            <td> {{ $mycat->created_at }} </td>
            <td><a href="listformation/{{ $mycat->id }}">Liste Inscription</a></td>
            <td>
                <a href="listformation/{{ $mycat->id }}/edit" class="btn btn-success" title="Edit" style="margin-bottom: 5px;"> <span class="glyphicon glyphicon-edit"></span>
                </a> <a class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete{{ $mycat->id }}" >
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
           </td>
        </tr>
        <div class="modal fade" id="delete{{ $mycat->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                            <h4 class="modal-title custom_align" id="Heading">Delete this entry {{ $mycat->id }}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Article ?
                            </div>
                        </div>
                        <div class="modal-footer ">
                            {!! Form::open(['method'=>'DELETE', 'route'=>['listformation.destroy',$mycat->id]]) !!}
                            <button class="btn btn-success" type="submit">
                                <span class="glyphicon glyphicon-ok-sign"></span> Yes
                            </button>
                            {!! Form::close() !!}
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> No
                            </button>
                        </div>
                    </div>
                
       
       
        @endforeach
    </tbody>
</table>
<div class="pagination col-lg-12">
    {!!  $formation->render() !!}
</div>
</div>
@endsection
