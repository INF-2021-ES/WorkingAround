@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{route('user.edit', $user->id)}}">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-mid-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" required name="name" id="name" value="{{$user->name}}">
                </div>
            </div>

            <div class="col-mid-12">
                <div class="form-group">
                    <label for="E-Mail">Email</label>
                    <input type="text" required name="email" id="email" value="{{$user->email}}">
                </div>
            </div>

            <div class="col-mid-12">
                <div class="form-group">
                    <label for="address">Adress</label>
                    <input type="text" required name="address" id="address" value="{{$user->address}}">
                </div>
            </div>

            <div class="col-mid-12">
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <input type="text" required name="roles" id="roles" value="{{$user->roles}}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
</div>
@endsection