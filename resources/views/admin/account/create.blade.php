@extends('layout.admin.main')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <dic class="col-9">
                    <h4 class="card-title">Form Create Account</h4>
                </dic>
                <div class="col-3">
                <a class="nav-link btn btn-info create-new-button"  href="{{ url('/account') }}">Back</a>
                </div>
            </div>
            <p class="card-description"> add Acoount below </p>
            <form  method="post" action="{{ route('account.store')}}" enctype="multipart/form-data" class="forms-sample" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control text-white @error('name') is-invalid @enderror" placeholder="Input Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}   
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" class="form-control text-white  @error('email') is-invalid @enderror" placeholder="Input Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}   
                        </div>
                    @enderror                
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">password</label>
                    <input type="password" class="form-control text-white @error('password') is-invalid @enderror" placeholder="Input Password" name="password" required autocomplete="new-password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}   
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Confirm Password</label>
                    <input type="password" class="form-control text-white @error('password_confirmation') is-invalid @enderror" placeholder="input Pssword Confirmation" name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}   
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image Profile</label>
                    <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info @error('profile_picture') is-invalid @enderror" name="profile_picture" value="{{ old('profile_picture') }}" required autocomplete="profile_picture">
                    </div>
                    @error('profile_picture')
                        <div class="invalid-feedback">
                            {{ $message }}   
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection