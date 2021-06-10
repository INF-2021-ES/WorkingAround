@extends('layouts.app')
@section('pageTitle', 'Create Service')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Service') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('service.insert', $id)}}">
                        @csrf
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="4" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="price" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection