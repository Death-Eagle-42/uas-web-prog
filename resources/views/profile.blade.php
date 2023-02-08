@extends('layouts.app')

@section('content')
<div class="container">
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                        <div class="row about-list">
                            <div class="col-md-6">
                                <form method="POST" action="/update1/{{$user->id}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                <div class="row mb-3">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $user->firstname }}" required autocomplete="firstname" autofocus>

                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    @php $checkedmale = ''; $checkedfemale = '';
                                    @endphp
                                    @if(Auth::user()->gender == 'male')
                                        @php $checkedmale = 'checked';
                                        @endphp
                                    @else
                                        @php $checkedfemale = 'checked';
                                        @endphp
                                    @endif

                                        <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>

                                    <div class="col-md-6 gender">
                                        <?php
                                        use App\Models\Gender;
                                        $genders = Gender::all();
                                    ?>
                                    @foreach($genders as $g)
                                            <div class="form-check">
                                            @if(Auth::user()->genders->gender_desc == 'Male')
                                            <input {{$checkedmale}} class="form-check-input" type="radio" name="gender_id" id="gender_id" value="{{$g->id}}">
                                            <label class="form-check-label" for="gender_id">
                                            {{$g->gender_desc}}
                                            </label>

                                            @elseif(Auth::user()->genders->gender_desc == 'Female')
                                            <input {{$checkedfemale}} class="form-check-input" type="radio" name="gender_id" id="gender_id" value="{{$g->id}}">
                                            <label class="form-check-label" for="gender_id">
                                            {{$g->gender_desc}}
                                            </label>

                                            @else
                                            <input class="form-check-input" type="radio" name="gender_id" id="gender_id" value="{{$g->id}}">
                                            <label class="form-check-label" for="gender_id">
                                            {{$g->gender_desc}}
                                            </label>
                                            @endif
                                          </div>
                                    @endforeach
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                   </div>
                                   <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Save') }}
                                            </button>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname" autofocus>

                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                @php $selected = 'selected';
                                @endphp
                                <div class="row mb-3">
                                    <?php
                                  use App\Models\Role;
                                  $roles = Role::all();
                              ?>
                                        <label for="role" class="col-md-4 col-form-label text-md-end">Role</label>
                                            <div class="col-md-6">
                                            <select class="form-select" aria-label="Default select example" name="is_admin" disabled>
                                                @if (Auth::check() && Auth::user()->id==(1))
                                                <option value="1">User</option>
                                                @endif
                                                @if (Auth::check() && Auth::user()->id==(2))
                                                <option {{$selected}} value="2">Admin</option>
                                                @endif
                                            </select>
                                            </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="file" id="image" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="/storage/user/{{Auth::user()->image}}" class="card-img-top" height="500px" width="150px" alt="Card image cap">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>

@endsection
