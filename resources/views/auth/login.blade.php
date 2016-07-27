@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('general/label.login') }}</div>
                <div class="panel-body">
                    @include('common.errors')
                    {!! Form::open(['url' => '/login', 'method' => 'POST', 'class' => 'form-horizontal frmLogin']) !!}
                        <div class="form-group">
                            {!! Form::label('label', trans('general/label.email_address'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', '', ['class' => 'form-control email']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('label', trans('general/label.password'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control password']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('remember') !!} {{ trans('general/label.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit(trans('general/label.login'), ['class' => 'btn btn-primary', 'id' => 'btn-login']) !!}
                                <a class="btn btn-primary" href="{{ url('auth/facebook') }}">
                                    <i class="fa fa-facebook fa-fw"></i>
                                    {{ trans('general/label.facebook') }}
                                </a>
                                <a class="btn btn-primary" href="{{ url('auth/google') }}">
                                    <i class="fa fa-google fa-fw"></i>
                                    {{ trans('general/label.google') }}
                                </a>
                                <a class="btn btn-primary" href="{{ url('auth/github') }}">
                                    <i class="fa fa-github fa-fw"></i>
                                    {{ trans('general/label.github') }}
                                </a>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    {{ trans('general/label.reset_password') }}
                                </a>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
