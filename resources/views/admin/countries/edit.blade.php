@extends('admin.layouts.master')
@section('title','Dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
@section('content')
    <div class=" my-5 ">
        <div class="row">
            <div class="col-8 offset-2 pt-3 ">
    <div class="card my-5 ">
        <div class="card-header bg-secondary text-light">
            <h4>Edit Country</h4>
        </div>

        <div class="card-body">
            <form action="{{route('countries.update',$country)}}" method='post' enctype='multipart/form-data'>
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="Name">Country Name</label>
                    <input type="text" name='name' class="form-control admin-input @error('name') error @enderror" value="{{$country->name}}">
                    @error('name')
                    <li class="text-error">{{$message}}</li>
                    @enderror
                </div>
                <button class="btn btn-warning" type='submit'>Update Country</button>
                <a class="btn btn-danger" href="{{route('countries.index')}}">Cancel</a>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
@endsection
