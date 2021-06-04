@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detalhes do papel do utilizador</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('roles.index')}}" class="btn btn-info">Lista de papéis</a>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Nome</b>
               {{$role->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Permissões</b>
                @if(!@empty($rolePermissions))
                    @foreach ($rolePermissions as $value )
                        <label class="label label-success">{{$value->name}}</label>
                    @endforeach
                @endif
            </div>
        </div>

    </div>


@endsection
