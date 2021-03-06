
@extends("user.layouts.master")

@section("title", "Add Experience")

@section("style-sheets")
    <link rel="stylesheet" href="{{ url('/css/request_loading.css') }}">
    <link href="{{ asset('css/image-upload-with-preview.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/edit-user-profile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <form action="{{route('experiences.store')}}" method='post' enctype='multipart/form-data'>
                    @csrf 

                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id"> 
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control @error('title') error @enderror" value="{{old('title')}}">
                        @error('title')
                        <li class="text-error">{{$message}}</li>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="industry_category_id">Select industry category</label>
                        <select name="industry_category_id"  class="form-control @error('industry_category_id') error @enderror" value="{{old('industry_category_id')}}">
                            <option selected="" disabled="">Choose industry category </option>
                            @foreach($industryCategories as $industryCategory)
                                <option value="{{$industryCategory->id}}"
                                    {{ old('industry_category_id') == $industryCategory->id ? "selected" : "" }}> 
                                    {{$industryCategory->name}}
                                </option>
                            @endforeach
                        </select>
                        @error('industry_category_id')
                        <li class="text-error">{{$message}}</li>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="career_level_id">Select career level</label>
                        <select name="career_level_id"  class="form-control @error('career_level_id') error @enderror" value="{{old('career_level_id')}}">
                            <option selected="" disabled="">Choose career level</option>
                            @foreach($careerLevels as $careerLevel)
                                <option value="{{$careerLevel->id}}"
                                    {{ old('career_level_id') == $careerLevel->id ? "selected" : "" }}>
                                    {{$careerLevel->name}}
                                </option>
                            @endforeach
                        </select>
                        @error('career_level_id')
                        <li class="text-error">{{$message}}</li>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" name="company" class="form-control @error('company') error @enderror" value="{{old('company')}}">
                        @error('company')
                        <li class="text-error">{{$message}}</li>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="start_date">Start date</label>
                        <input type="date" name='start_date' class="form-control @error('start_date') error @enderror" value="{{old('start_date')}}">
                        @error('start_date')
                        <li class="text-error">{{$message}}</li>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="end_date">End date</label>
                        <input type="date" name='end_date' class="form-control @error('end_date') error @enderror" value="{{old('end_date')}}">
                        @error('end_date')
                        <li class="text-error">{{$message}}</li>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') error @enderror" name="description" id="content" cols="5" rows="5">{{old('description')}}</textarea>
                        @error('description')
                        <li class="text-error">{{$message}}</li>
                        @enderror
                    </div>

                    <button class="btn btn-success mr-2" type='submit'>Add Experience</button>
                    <a class="btn btn-danger" href="{{route('user.edit')}}">Cancel</a>
                </form>
        </div>
    </div>
</div>
@endsection

