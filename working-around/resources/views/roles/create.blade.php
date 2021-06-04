@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Criar novo papel</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('roles.index')}}" class="btn btn-info">Lista de papéis</a>
            </div>
        </div>
    </div>
    @if (count($errors)>0)
    <div class="alert alert-danger">
        <b>OOOOOOppppps!!</b> existem erros que deve corrigir<br/><br/><br/>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(array('route'=>'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Nome</b>
                {!! Form::text('name', null, array('placeholder'=>'Nome','class'=>'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Permissões</b>
                @foreach ($permission as $value )
                    <label>{!! Form::checkbox('permission[]', $value->id, false, array('class'=>'form-control')) !!}
                    {{$value->name}}</label>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
    {!! Form::close() !!}

@endsection
