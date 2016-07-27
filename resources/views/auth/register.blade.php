@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('general/label.register') }}</div>
                <div class="panel-body">
                    @include('common.errors')
                    {!! Form::open(['action' => 'Auth\AuthController@postRegister', 'class' => 'form-horizontal frmRegister']) !!}
                        <div class="form-group">
                            {!! Form::label('label', trans('general/label.name'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'id' => 'name',
                                    'placeholder' => trans('general/label.name_placeholder')
                                ]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('label', trans('general/label.email_address'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', null, [
                                    'class' => 'form-control',
                                    'id' => 'email',
                                    'placeholder' => trans('general/label.email_placeholder')
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('label', trans('general/label.password'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', [
                                    'class' => 'form-control',
                                    'id' => 'password',
                                    'placeholder' => trans('general/label.password_placeholder')
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('label', trans('general/label.password_confirm'), ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirm', [
                                    'class' => 'form-control',
                                    'id' => 'password_confirm',
                                    'placeholder' => trans('general/label.password_confirm_placeholder')
                                ]) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit(trans('general/label.register'), [
                                    'class' => 'btn btn-info btn-register',
                                ]) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
