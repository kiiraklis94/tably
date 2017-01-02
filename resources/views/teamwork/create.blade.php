@extends('layouts.master')

@section('title', 'Create New Team')

@section('header-title', 'Create New Team')

@section('header-other')
    <a href="{{route('teams.index')}}" class="btn btn-primary pull-right">
        <i class="fa fa-arrow-left"></i> Back
    </a>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <form class="form-horizontal" method="post" action="{{route('teams.store')}}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Name</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-save"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
