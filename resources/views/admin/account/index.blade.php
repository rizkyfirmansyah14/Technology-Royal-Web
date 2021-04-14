@extends('layout.admin.main')
@section('content')

<div class="row ">
    <div class="col-12 grid-margin">
        <a class="btn btn-success mb-3" href="{{ url('account/create') }}">+ Add Account</a>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h4 class="card-title">List Account Admin</h4>
                </div>
                @if (session('status'))
                    <div class="alert alert-success mt-4">
                        {{ session('status') }}
                    </div>
                @endif   
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> No</th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Image </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profile as $profile)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$profile->name}}</td>
                                <td>{{$profile->email}}</td>
                                <td>
                                <img style="width: 100px; height: 100px;" src="uploads/{{ $profile->image}}"
                                        alt="image" />
                                </td>
                                <td>
                                    @if($profile->isOnline())
                                        <li class="text-success">
                                           Online
                                        </li>
                                    @else
                                        <li class="text-muted">
                                            offline
                                        </li>
                                    @endif
                                </td>
                                <td>
                                    <form action="account/{{ $profile->id }}" method="post"
                                        class="d-inline">
                                            @method('delete')
                                            @csrf
                                            @if($profile->isOnline())
                                            <button  type="submit" class="btn btn-shadow btn-light" disabled>
                                                delete
                                            </button>
                                            @else
                                            <button  type="submit" class="btn btn-shadow btn-danger">
                                                delete
                                            </button>
                                            @endif
                                    </form>
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