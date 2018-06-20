
@extends('layout/index')

@section('content-page')
	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Create new Channel</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index-2.html">Doashboard</a>
                </li>
                <li class="active">
                    <strong>Create Channel</strong>
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
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <form method="post" action="create" class="form-horizontal" >
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Type</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="type" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                        <input  type="text" name="image" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alias</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="alias" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">URL</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="url" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Width</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="width" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Height</label>
                                    <div class="col-sm-10">
                                        <input required  type="text" name="height" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Note</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="note" class="form-control" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                        <a class="btn btn-white" onclick="backTicket();">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection