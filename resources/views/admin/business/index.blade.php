@extends('layout.admin.main')
@section('content')

<div class="row ">
    <div class="col-12 grid-margin">
        <a class="btn btn-success mb-3" href="{{ url('business/create') }}">+ Add Business</a>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h4 class="card-title">List Business Unit</h4>
                </div>
                @if (session('status'))
                    <div class="alert alert-success mt-4">
                        {{ session('status') }}
                    </div>
                @endif   
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th> No</th>
                                <th> Title </th>
                                <th> Image </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bisnis as $bisnis)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$bisnis->title}}</td>
                                <td>
                                    <img style="width: 150px; height: 150px;" src="uploads/{{ $bisnis->image}}"
                                        alt="image" />
                                </td>
                                <td>
                                    <form action="business/{{ $bisnis->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                    <a class="btn btn-success" href="{{ route('business.edit',$bisnis->id)}}">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection