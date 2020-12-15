@extends('admin.layouts.master')
@section('title','Dashboard')
@section('css')
    <link rel="stylesheet" href="{{asset('css/reset-passord.css')}}">
@endsection
@section('content')
    <div class="mt-4 p-4 offset-md-4 col-md-4 password-content">
        <h2 class="text-center">Reset Password</h2>
        <div>
            <form action="{{route('password.update')}}" method='post' enctype='multipart/form-data'>
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name='password' class="form-control @error('password') error @enderror">
                    @error('password')
                    <li class="text-error">{{$message}}</li>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name='password_confirmation' class="form-control">
                </div>
                <button class="btn btn-success" type='submit'>Reset Password</button>
                <a class="btn btn-primary" href="{{route('admin.password')}}">Cancel</a>
            </form>
        </div>
    </div>   
@endsection