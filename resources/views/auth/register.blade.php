@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                              <div>
                                  <label class="form-label" for="firstname">First Name</label>
                                  <input id="firstname" type="text" class="form-control form-control-lg @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                              </div>

                            </div>
                            <div class="col-md-6 mb-4">

                              <div class="form-outline">
                                  <label class="form-label" for="lastName">Last Name</label>
                                  <input id="lastname" type="text" class="form-control form-control-lg @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus/>
                                  @error('lastname')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                              </div>

                            </div>
                          </div>

                          <div class="row">
                              <div class="col-md-6 mb-4 pb-2">

                                  <div class="form-outline">
                                      <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" id="emailAddress" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>

                                </div>
                                <div class="col-md-6 mb-4">
                                  <label for="role" class="col-md-4 col-form-label ">Role</label>
                                  <?php
                                  use App\Models\Role;
                                  $roles = Role::all();
                              ?>

                                      <div class="col-md-6">
                                      <select class="form-select" aria-label="Default select example" name="is_admin">
                                          @foreach($roles as $r)
                                          <option value="{{$r->id}}">{{$r->role_name}}</option>
                                          @endforeach
                                      </select>
                                      </div>
                          </div>

                          </div>

                          <div class="row">
                              <div class="col-md-6 mb-4">

                                  <h6 class="mb-2 pb-1">Gender: </h6>
                                  <?php
                            use App\Models\Gender;
                            $genders = Gender::all();
                        ?>
                        @foreach($genders as $g)
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender_id" id="gender_id" value="{{$g->id}}">
                                <label class="form-check-label" for="gender_id">
                                  {{$g->gender_desc}}
                                </label>
                              </div>
                        @endforeach
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            <div class="col-md-6 mb-4 pb-2">
                                  <label for="image" class="col-md-4 col-form-label text-md-end">Display Picture</label>
                                  <div class="col-md-8">
                                      <input class="form-control" type="file" id="image" name="image">
                                  </div>
                            </div>
                          </div>

                          <div class="row mb-3">
                              <div class="col-md-6">
                                  <label for="password" class="form-label">Password</label>
                                  <div class="input-group mb-2">
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <label for="password_confirmation" class="form-label">Confirm Password</label>
                                  <div class="input-group mb-2">
                                      <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" >
                                      @error('password_confirmation')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                              </div>
                          </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary bg-warning text-dark">
                                    {{ __('Submit') }}
                                </button>
                                <br>
                                @if (Route::has('login'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already have an account? Click here to log in') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
