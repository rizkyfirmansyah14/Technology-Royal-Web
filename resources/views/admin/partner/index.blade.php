@extends('layout.admin.main')
@section('content')

<div class="row ">
    <div class="col-12 grid-margin">
        <a class="btn btn-success mb-3" href="{{ url('partner/create') }}">+ Add partner</a>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h4 class="card-title">List Partner </h4>
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
                                <th> Image </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($partner as $partner)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img style="width:200px; height: 50px;" src="uploads/{{ $partner->image}}"
                                        alt="image" />
                                </td>
                                <td>
                                    <form action="partner/{{ $partner->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                    <a class="btn btn-success" href="{{ route('partner.edit',$partner->id)}}">Edit</a>
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