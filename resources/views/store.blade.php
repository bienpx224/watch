
@extends('layout/index')
@section('css')
    
@endsection

@section('content-page')
	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>List</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">Doashboard</a>
                </li>
                <li class="active">
                    <strong>List</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="#" class="btn btn-primary">This is action area</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content">
        <table class="table">
            <thead>
              <tr>
                <th>Type</th>
                <th>Name</th>
                <th>URL</th>
                <th>Image</th>
                <th>Alias</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>     
              @foreach( $channels as $c )
                @if( $c->state == 1 )
                    <tr class="success">
                @elseif( $c->state == 0 )
                    <tr class="danger">
                @endif

                <form action="{{route('getUpdate',['alias'=>$c->alias])}}" method="get" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <td>{{ $c->type }}</td>
                     <td>{{ $c->name }}</td>
                     <td><a title="{{$c->url}}" target="_blank" href="{{$c->url}}">{{$c->url}}</a></td>
                     <td><img class="icon-channel-medium" src="{{$c->image}}"/></td>
                     <td>{{ $c->alias }}</td>
                     <td><button class="btn btn-primary" type="submit">Update</button></td>
                </form>

              @endforeach
            </tbody>
          </table>
    </div>
@endsection