
@extends('layout/index')

@section('content-page')
	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>This is main title</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">Doashboard</a>
                </li>
                <li class="active">
                    <strong>{{$channel->name or "Chưa rõ"}}</strong>
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
            <iframe scrolling="no" width="{{$channel->width}}" height="{{$channel->height}}" 
            allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"
            src="{{$channel->url}}"
            ></iframe>
    </div>
@endsection