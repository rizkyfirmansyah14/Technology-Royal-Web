@extends('layout.admin.main')
@section('content')

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <img style="width: 10%;" src="{{ asset('uploads/' . Auth::user()->image) }}" class="img-thumbnail rounded-circle mx-auto mb-4" alt="profile">
                </div>
                <div class="row">
                    <h4 class="card-title mx-auto mb-5">{{{Auth::user()->name}}}</h4>
                </div>
                    @if (session('status'))
                    <div class="alert alert-primary mt-4">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                    <form method="POST" action="{{ route('profile.store')}}"  enctype="multipart/form-data">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Full Name</label>
                            <input type="text" class="form-control bg-transparent"  id="new_name" name="new_name"  value="{{{Auth::user()->name}}}">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" id="eMail" name="email" class="form-control mb-1 bg-transparent  @error('email') is-invalid @enderror" value="{{{Auth::user()->email}}}" disabled>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Current Password</label>
                                <input type="password" class="form-control bg-transparent @error('current_password') is-invalid @enderror"  id="password" name="current_password" value="{{ old('current_password') }}">
                                    @error('current_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}   
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">New Password</label>
                                <input type="password" class="form-control bg-transparent @error('new_password') is-invalid @enderror" name="new_password" id="myInput" value="{{ old('new_password') }}">
                                    @error('new_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}   
                                    </div>
                                    @enderror
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" onclick="myFunction()">
                                        <label class="form-check-label" for="gridCheck">
                                             Show Password
                                         </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPassword4">New Password Again</label>
                            <input type="password" class="form-control mb-1 bg-transparent @error('new_confirm_password') is-invalid @enderror" name="new_confirm_password"  id="myInput2" value="{{ old('new_confirm_password') }}">
                            <div class="form-check">
                                @error('new_confirm_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}   
                                    </div>
                                @enderror
                            <input class="form-check-input" type="checkbox" id="gridCheck" onclick="myFunction2()">
                            <label class="form-check-label" for="gridCheck">
                                Show Password Again
                            </label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">change Profile</label>
                            <input type="file"  name="profile_picture" class="form-control bg-transparent  @error('profile_picture') is-invalid @enderror" id="profile_picture" name="profile_picture" value="{{ old('profile_picture') }}">
                            @error('profile_picture')
                                <div class="invalid-feedback">
                                    {{ $message }}   
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-success mt-4">Update Profile</button>
                        <a class="btn btn-outline-danger mt-4" href="{{url('/dashboard')}}">Cancel</a>
                    </form> 
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection