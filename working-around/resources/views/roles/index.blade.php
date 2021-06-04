@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Papeis de Utilizador</h2>
            <div>
                @can('role-create')
                <a class="btn btn-sucess" href="{{route('roles.create')}}">Novo Papel</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th width="380px"></th>
            </tr>
            @foreach ($roles as $key->$role)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$role->name}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('roles-show',$role->id)}}">Detalhes</a>
                        @can('role-edit')
                            <a class="btn btn-info" href="{{route('roles-edit',$role->id)}}">Editar</a>
                        @endcan
                        @can('role-delete')
                            {!!Form::open(['method'=>'DELETE','route'=>['roles.destroy',$role->id],'style'=>'display-inline'])!!}
                            {{!!Form::submit()!!}}
                            {{!!Form::close()!!}}
                        @endcan
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
    {{{$roles->render()}}}
@endsection