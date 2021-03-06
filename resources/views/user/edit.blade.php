@extends("user.layouts.master")

@section("title", "Edit profile")

@section("style-sheets")
    <link rel="stylesheet" href="{{ url('/css/request_loading.css') }}">
    <link href="{{ asset('css/image-upload-with-preview.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user/edit-user-profile.css') }}" rel="stylesheet">
@endsection

@section("content")
    <!-- Loading Until Request Done -->
    <div id="loading_untill_request_done">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <!-- End Loading Until Request Done -->
    <div class="container">
        <div class="row mx-auto mt-3">
            <section class="container edit-section">
                <div class="row mx-auto mb-5 justify-content-center">

                    <div class="col col-md-3 col-lg icon-content-container user-edit-btn px-3 mb-3" data-index="1">
                        <i class="fas fa-link"></i>
                        <p>Links</p>
                    </div>

                    <div class="col col-md-3 col-lg icon-content-container user-edit-btn px-3 mb-3" data-index="3">
                        <i class="fas fa-phone"></i>
                        <p>Phones</p>
                    </div>
                    <div class="col col-md-3 col-lg icon-content-container user-edit-btn px-3 mb-3" data-index="4">
                        <i class="fas fa-graduation-cap"></i>
                        <p>Education</p>
                    </div>

                    <div class="col col-md-3 col-lg icon-content-container px-3 mb-3" data-index="2"
                         id="user-edit-profile">
                        <i class="fas fa-hotel"></i>
                        <p>Profile</p>
                    </div>

                    <div class="col col-md-3 col-lg icon-content-container user-edit-btn px-3 mb-3" data-index="5">
                        <i class="fas fa-award"></i>
                        <p>skills</p>
                    </div>

                    <div class="col col-md-3 col-lg icon-content-container user-edit-btn px-3 mb-3" data-index="6">
                        <i class="fas fa-briefcase"></i>
                        <p>Experience</p>
                    </div>
                    <div class="col col-md-3 col-lg icon-content-container user-edit-btn px-3 mb-3" data-index="7">
                        <i class="fas fa-certificate"></i>
                        <p>Certificates</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 edit-section-content">

                        <!-- Edit links section -->
                        <div style="display: none;">
                            <form action='{{ route("user.links.update") }}' method="POST">
                                @csrf
                                @method("PUT")
                                <div class="form-group mb-3">

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-linkedin-in"></i></div>
                                        </div>
                                        <input type="url" name="linkedin"
                                               class="form-control @error('linkedin') is-invalid @enderror"
                                               placeholder="linkedin.com/in/username"
                                               value="{{ old('linkedin') ?? ($links['linkedin'] ?? "") }}">
                                        <input type="hidden" name="linkedin_id"
                                               value="{{ $links['linkedin_id'] ?? "" }}">
                                    </div>
                                    @error("linkedin")
                                    <p class="text-danger">{{ $errors->first("linkedin") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-github"></i></div>
                                        </div>
                                        <input type="url" name="github"
                                               class="form-control @error('github') is-invalid @enderror"
                                               placeholder="github.com/username"
                                               value="{{ old('github') ?? ($links['github'] ?? "") }}">
                                        <input type="hidden" name="github_id" value="{{ $links['github_id'] ?? "" }}">
                                    </div>
                                    @error("github")
                                    <p class="text-danger">{{ $errors->first("github") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-stack-overflow"></i></div>
                                        </div>
                                        <input type="url" name="stackoverflow"
                                               class="form-control @error('stackoverflow') is-invalid @enderror"
                                               placeholder="stackoverflow.com/users/id"
                                               value="{{ old('stackoverflow') ?? ($links['stackoverflow'] ?? "") }}">
                                        <input type="hidden" name="stackoverflow_id"
                                               value="{{ $links['stackoverflow_id'] ?? "" }}">
                                    </div>
                                    @error("stackoverflow")
                                    <p class="text-danger">{{ $errors->first("stackoverflow") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-behance"></i></div>
                                        </div>
                                        <input type="url" name="behance"
                                               class="form-control @error('behance') is-invalid @enderror"
                                               placeholder="behance.net/username"
                                               value="{{ old('behance') ?? ($links['behance'] ?? "") }}">
                                        <input type="hidden" name="behance_id" value="{{ $links['behance_id'] ?? "" }}">
                                    </div>
                                    @error("behance")
                                    <p class="text-danger">{{ $errors->first("behance") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-facebook"></i></div>
                                        </div>
                                        <input type="url" name="facebook"
                                               class="form-control @error('facebook') is-invalid @enderror"
                                               placeholder="facebook.com/username"
                                               value="{{ old('facebook') ?? ($links['facebook'] ?? "") }}">
                                        <input type="hidden" name="facebook_id"
                                               value="{{ $links['facebook_id'] ?? "" }}">
                                    </div>
                                    @error("facebook")
                                    <p class="text-danger">{{ $errors->first("facebook") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-twitter"></i></div>
                                        </div>
                                        <input type="url" name="twitter"
                                               class="form-control @error('twitter') is-invalid @enderror"
                                               placeholder="twitter.com/username"
                                               value="{{ old('twitter') ?? ($links['twitter'] ?? "") }}">
                                        <input type="hidden" name="twitter_id" value="{{ $links['twitter_id'] ?? "" }}">
                                    </div>
                                    @error("twitter")
                                    <p class="text-danger">{{ $errors->first("twitter") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-instagram"></i></div>
                                        </div>
                                        <input type="url" name="instagram"
                                               class="form-control @error('instagram') is-invalid @enderror"
                                               placeholder="instagram.com/username"
                                               value="{{ old('instagram') ?? ($links['instagram'] ?? "") }}">
                                        <input type="hidden" name="instagram_id"
                                               value="{{ $links['instagram_id'] ?? "" }}">
                                    </div>
                                    @error("instagram")
                                    <p class="text-danger">{{ $errors->first("instagram") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fab fa-youtube"></i></div>
                                        </div>
                                        <input type="url" name="youtube"
                                               class="form-control @error('youtube') is-invalid @enderror"
                                               placeholder="youtube.com/username"
                                               value="{{ old('youtube') ?? ($links['youtube'] ?? "") }}">
                                        <input type="hidden" name="youtube_id" value="{{ $links['youtube_id'] ?? "" }}">
                                    </div>
                                    @error("youtube")
                                    <p class="text-danger">{{ $errors->first("youtube") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fas fa-blog"></i></div>
                                        </div>
                                        <input type="url" name="blog"
                                               class="form-control @error('blog') is-invalid @enderror"
                                               placeholder="Your blog"
                                               value="{{ old('blog') ?? ($links['blog'] ?? "") }}">
                                        <input type="hidden" name="blog_id" value="{{ $links['blog_id'] ?? "" }}">
                                    </div>
                                    @error("blog")
                                    <p class="text-danger">{{ $errors->first("blog") }}</p>
                                    @enderror

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text w-100 justify-content-center"><i
                                                    class="fas fa-globe"></i></div>
                                        </div>
                                        <input type="url" name="website"
                                               class="form-control @error('website') is-invalid @enderror"
                                               placeholder="Your personal website"
                                               value="{{ old('website') ?? ($links['website'] ?? "") }}">
                                        <input type="hidden" name="website_id" value="{{ $links['website_id'] ?? "" }}">
                                    </div>
                                    @error("website")
                                    <p class="text-danger">{{ $errors->first("website") }}</p>
                                    @enderror

                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-warning">Edit links</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger ml-3">Cancel</a>
                                </div>
                            </form>

                        </div>

                        <!-- Edit Profile section -->
                        <div style="display: block;">
                            <div class="col-sm-12">
                                <form action='{{ route("user.update", $user) }}' method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")

                                    <div class="form-group mb-3">
                                        <label for="first_name">First name</label>
                                        <input type="text" name="first_name" id="name"
                                               class="form-control @error('first_name') is-invalid @enderror"
                                               value="{{ old('first_name') ?? $user->first_name }}"
                                               placeholder="First name">

                                        @error("first_name")
                                        <p class="text-danger">{{ $errors->first("first_name") }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="last_name">Last name</label>
                                        <input type="text" name="last_name" id="last_name"
                                               class="form-control @error('last_name') is-invalid @enderror"
                                               value="{{ old('last_name') ?? $user->last_name }}"
                                               placeholder="Last name">

                                        @error("last_name")
                                        <p class="text-danger">{{ $errors->first("last_name") }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="career_level_id">Select career level</label>
                                        <select name="career_level_id"
                                                class="form-control @error('career_level_id') is-invalid @enderror"
                                                value="{{$profile->careerLevel->name ?? ''}}">
                                            @foreach($careerLevels as $careerLevel)
                                                <option value="{{$careerLevel->id}}"> {{$careerLevel->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('career_level_id')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="country_id">Select country</label>
                                        <select name="country_id"
                                                class="form-control @error('company_id') error @enderror"
                                                value="{{$profile->country->name ?? ''}}">
                                            <option>Select country</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}"
                                                        @if($country->id ?? '' === $profile->country->id ?? '') selected @endif
                                                > {{$country->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="city_id">Select city</label>
                                        <select name="city_id"
                                                class="form-control @error('company_id') is-invalid @enderror"
                                                value="{{$profile->city->name ?? ''}}">
                                            <option>Select city</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}"
                                                        @if($city->id ?? '' === $profile->city->id ?? '') selected @endif
                                                > {{$city->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('city_id')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="gender">Select gender</label>
                                        <select name="gender" class="form-control @error('gender') is-invalid @enderror"
                                                value="{{$profile->gender ?? ''}}">
                                            <option value="{{$profile->gender ?? ''}}"
                                                    @if($profile->gender ?? '' == 0) selected @endif> male
                                            </option>
                                            <option value="{{$profile->gender ?? ''}}"
                                                    @if($profile->gender ?? '' == 1) selected @endif> female
                                            </option>
                                        </select>
                                        @error('gender')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="min_salary">Min salary</label>
                                        <input type="text" name="min_salary"
                                               class="form-control @error('min_salary') is-invalid @enderror"
                                               value="{{$profile->min_salary ?? ''}}">
                                        @error('min_salary')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="job_title">Job title</label>
                                        <input type="text" name="job_title"
                                               class="form-control @error('job_title') error @enderror"
                                               value="{{$profile->job_title ?? ''}}">
                                        @error('job_title')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="education_level">Education level</label>
                                        <select class="form-control" name="education_level" id="education_level">
                                            <option
                                                {{ $profile->education_level  ?? '' == 'High School' ? 'selected' : '' }} value="High School">
                                                High School
                                            </option>
                                            <option
                                                {{ $profile->education_level  ?? '' == 'Bachelor Degree' ? 'selected' : '' }} value="Bachelor Degree">
                                                Bachelor Degree
                                            </option>
                                            <option
                                                {{ $profile->education_level  ?? '' == 'Master Degree' ? 'selected' : '' }} value="Master Degree">
                                                Master Degree
                                            </option>
                                            <option
                                                {{ $profile->education_level  ?? '' == 'Doctorate Degree' ? 'selected' : '' }} value="Doctorate Degree">
                                                Doctorate Degree
                                            </option>
                                        </select>
                                        @error("proficiency")
                                        <p class="help text-danger">{{ $errors->first("proficiency") }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="military_status">Military status</label>
                                        <select name="military_status"
                                                class="form-control @error('military_status') is-invalid @enderror"
                                                value="{{old('military_status')}}">
                                            @if(isset($profile))
                                                <option
                                                    value={{ $profile->military_status  ?? ''}} selected>{{$profile->military_status  ?? ''}}</option>
                                            @endif
                                            <option
                                                {{ $profile->military_status  ?? '' == 'Exempted' ? 'selected' : '' }} value="Exempted">
                                                Exempted
                                            </option>
                                            <option
                                                {{ $profile->military_status  ?? '' == 'Completed' ? 'selected' : '' }} value="Completed">
                                                Completed
                                            </option>
                                            <option
                                                {{ $profile->military_status  ?? '' == 'Postponed' ? 'selected' : '' }} value="Postponed">
                                                Postponed
                                            </option>
                                            <option
                                                {{ $profile->military_status  ?? '' == 'Serving' ? 'selected' : '' }} value="Serving">
                                                Serving
                                            </option>
                                            <option
                                                {{ $profile->military_status  ?? '' == 'Does not apply' ? 'selected' : '' }} value="Does not apply">
                                                Does not apply
                                            </option>
                                        </select>
                                        @error('military_status')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="mr-3">
                                            <input type="text" disabled placeholder="Upload Your image">
                                        </label>
                                        <input id="image" name="image" type="file">
                                        @error('image')
                                        <li class='text-danger'>{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="cv" class="mr-3">
                                            <input type="text" disabled placeholder="Upload Your cv">
                                        </label>
                                        <input id="cv" name="cv" type="file"/>
                                        @error('cv')
                                        <li class="text-danger">{{$message}}</li>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                        <a href="{{ url()->previous() }}" class="btn btn-danger ml-2">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Edit phones section -->
                        <div style="display: none;">
                            <div class="col-12">
                                <form action='{{ route("user.phone.update") }}' method="POST">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group mb-3">
                                        <label for="phone-select">Phones</label>
                                        <select name="phone_id" id="phone-select" class="custom-select">
                                            <option selected disabled>Choose a phone</option>
                                            @foreach($phones as $phone)
                                                <option value="{{ $phone->id }}">{{ $phone->number }}</option>
                                            @endforeach
                                        </select>

                                        <div class="input-group my-3" id="edit-number-input-container">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text w-100 justify-content-center"><i
                                                        class="fas fa-phone"></i></div>
                                            </div>
                                            <input type="text" name="edited_number" id="edit-number-input"
                                                   class="form-control @error('edited_number') is-invalid @enderror"
                                                   placeholder="Number" value="{{ old('edited_number')}}">
                                        </div>
                                        @error("edited_number")
                                        <p class="text-danger">{{ $errors->first("edited_number") }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3 row justify-content-center" id="form-action-controller">
                                        <a href="javascript:" class="btn btn-primary" id="show-phone-edit-btn">Edit
                                            phone</a>
                                        <button type="submit" class="btn btn-warning" id="phone-edit-btn">Edit phone
                                        </button>
                                        <button href="{{route('company.phone.delete',1)}}" class="btn btn-danger ml-3"
                                                id="phone-delete-btn" form="delete-phone-form">Delete phone
                                        </button>
                                        <a href="{{ url()->previous() }}" class="btn btn-secondary ml-3">Cancel</a>
                                    </div>
                                </form>
                                <form action='{{ route("user.phone.add") }}' method="POST" id="add-phone-form">
                                    <div class="form-group mb-3">
                                        @csrf
                                        <div class="input-group my-3" id="new-number-input-container">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text w-100 justify-content-center"><i
                                                        class="fas fa-phone"></i></div>
                                            </div>
                                            <input type="text" name="new_number"
                                                   class="form-control @error('new_number') is-invalid @enderror"
                                                   placeholder="Number" value="{{ old('new_number')}}">
                                        </div>
                                        @error("new_number")
                                        <p class="text-danger">{{ $errors->first("new_number") }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success" id="add-new-phone"
                                            form="add-phone-form">
                                        Add phone
                                    </button>
                                </form>
                                <form action='{{ route("user.phone.delete", 0) }}' method="POST"
                                      id="delete-phone-form">
                                    @csrf
                                    @method("delete")
                                </form>
                                <a href="javascript:" class="btn btn-primary" id="show-add-new-phone">Add phone</a>
                            </div>
                        </div>

                        <!-- Edit education section -->
                        <div style="display: none;">
                            <div class="col-sm-12">
                                @foreach($educations as $education)
                                    <div class="user-education">
                                        <div class="font-weight-bolder mb-3">
                                            <span class="pr-3">{{$education->field_of_study}}</span>
                                            <a href="{{route('educations.edit',$education->id)}}"
                                               class="user-education-edit float-right"><i class="fas fa-edit"></i></a>
                                            <form class="user-education-delete form-inline float-right"
                                                  action="{{ route("educations.destroy", $education) }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="user-education-delete pr-3 float-right"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                        <div>
                                            <span class="d-block">at {{$education->organization}}</span>
                                            <span class="pr-3">Grade: {{$education->grade}}</span>
                                            <span>Degree: {{$education->degree}}</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <span
                                                class="pr-3">From: {{\Carbon\Carbon::parse($education->start_date)->format('M/Y')}}</span>
                                            <span>To: {{\Carbon\Carbon::parse($education->end_date)->format('M/Y')}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{route('educations.create')}}" class="btn btn-primary p-2">Add education</a>

                            </div>
                        </div>

                        <!-- Edit skills section -->
                        <div style="display: none;">
                            <div class="col-sm-12">
                                @foreach($skills as $skill)
                                    <div class="user-certificate">
                                        <div class="font-weight-bolder">
                                            <span class="pr-3">{{$skill->name}}</span>
                                            <a href="{{route('skill.edit',$skill->id)}}"
                                               class="certificate-edit float-right"><i class="fas fa-edit"></i></a>
                                            <form class="delete form-inline float-right"
                                                  action="{{ route('user.skill.delete', $skill) }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="certificate-delete pr-3 float-right"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                        <hr>
                                        <div>
                                            <span
                                                class="font-weight-bold">Proffeciency: </span><span>{{ $skill->pivot->proficiency}}</span>
                                        </div>
                                        <div>
                                            <span
                                                class="text-secondary font-italic">{{$skill->pivot->year_of_experience}}</span>
                                            <span class="font-italic text-secondary">of experience</span>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{route('skill.add')}}" class="btn btn-primary p-2">Add skill</a></div>
                        </div>

                        <!-- Edit experience section -->
                        <div style="display: none;">
                            <div class="col-sm-12">
                                @foreach($experiences as $experience)
                                    <div class="user-experience">
                                        <div class="font-weight-bolder">
                                            <span class="pr-3">{{$experience->title}}</span>
                                            <span>at {{$experience->company}}</span>
                                            <a href="{{route('experiences.edit',$experience->id)}}"
                                               class="experience-edit float-right"><i class="fas fa-edit"></i></a>
                                            <form class="delete form-inline float-right"
                                                  action="{{ route("experiences.destroy", $experience) }}"
                                                  method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="experience-delete pr-3 float-right"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                        <hr>
                                        <div>
                                            <span
                                                class="pr-3">From: {{\Carbon\Carbon::parse($experience->start_date)->format('M/Y')}}</span>
                                            <span>To: {{\Carbon\Carbon::parse($experience->end_date)->format('M/Y')}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{route('experiences.create')}}" class="btn btn-primary p-2">Add experience</a>
                            </div>
                        </div>

                        <!-- Edit certificates section -->
                        <div style="display: none;">
                            <div class="col-sm-12">
                                @foreach($certificates as $certificate)
                                    <div class="user-certificate">
                                        <div class="font-weight-bolder">
                                            <i class="fas fa-certificate pr-2"></i>
                                            <a href="{{$certificate->certificate_url}}"
                                               class="user-certificate-name text-decoration-none"><span
                                                    class="pr-3">{{$certificate->name}}</span></a>
                                            <a href="{{route('certificates.edit',$certificate->id)}}"
                                               class="certificate-edit float-right"><i class="fas fa-edit"></i></a>
                                            <form class="delete form-inline float-right"
                                                  action="{{ route("certificates.destroy", $certificate) }}"
                                                  method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="certificate-delete pr-3 float-right"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                        <div>
                                            <span>at {{$certificate->organization}}</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <span class="font-weight-bold font-italic">Awarded Date:</span><span
                                                class="pr-3 text-secondary">{{\Carbon\Carbon::parse($certificate->awarded_date)->format('d/m/Y')}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{route('certificates.create')}}" class="btn btn-primary p-2">Add
                                    certificate</a>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
        </div>
    </div>

@endsection

@section("scripts")
    <script src="{{ asset('js/image-upload-with-preview.js') }}"></script>
    <script src="{{ asset('js/corresponding-cities.js') }}"></script>
    <script src="{{ asset('js/user/edit-user-profile.js') }}"></script>
@endsection
