@extends('layout.admin.main')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <dic class="col-9">
                    <h4 class="card-title">Form Create Partner company </h4>
                </dic>
                <div class="col-3">
                <a class="nav-link btn btn-info create-new-button"  href="{{ url('/partner') }}">Back</a>
                </div>
            </div>
            <p class="card-description"> add partner company in the below </p>
            <form  method="post" action="{{ route('partner.store')}}" enctype="multipart/form-data" class="forms-sample" >
                @csrf
                <div class="form-group">
                    <label>File upload</label>
                    <div class="input-group col-xs-12">
                        <input type="file" name="image" class="form-control file-upload-info @error('image') is-invalid @enderror" placeholder="Upload Image" value="{{ old('image') }}">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}   
                        </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection