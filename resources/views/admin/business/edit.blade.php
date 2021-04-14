@extends('layout.admin.main')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-9">
                    <h4 class="card-title">Form Create Business Unit</h4>
                </div>
                <div class="col-3">
                    <a class="nav-link btn btn-info create-new-button" href="{{ url('/business') }}">Back</a>
                </div>
            </div>
            <p class="card-description"> edit business unit below </p>
            <form method="post" action="{{ route('business.update', $bisnis[0]->id) }}" enctype="multipart/form-data"
                class="forms-sample">
                {{ csrf_field() }}
                @method('PATCH')
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control text-white" id="title" name="title" placeholder="Name"
                        value="{{ $bisnis[0]->title }}">
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <div class="input-group col-xs-12">
                        <div class="row">
                            <div class="col-12">
                                <img style="width: 30%" src="{{ asset('uploads/' . $bisnis[0]->image) }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-3">
                                <input type="file" name="image" class="form-control file-upload-info"
                                    placeholder="Upload Image">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
</div>

@endsection