@extends('layout.admin.main')
@section('content')

<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h4 class="card-title">List Contact User</h4>
                </div>
                @if (session('status'))
                    <div class="alert alert-danger mt-4">
                        {{ session('status') }}
                    </div>
                @endif   
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> No</th>
                                <th> name </th>
                                <th> Message </th>
                                <th> Date </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contact as $no => $c)
                            <tr>
                                <td>{{$contact->firstItem()+$no}}</td>
                                <td>{{$c->name}}</td>
                                <td>
                                    @if(strlen($c->message) > 30 )
                                        {{ substr($c->message, 0, 30) . '...'}}
                                    @else 
                                        {{$c->message}}
                                    @endif  
                                </td>
                                <td>{{ substr($c->created_at, 0, 10) . ''}}</td>
                                <td>
                                    <form action="contact/{{ $c->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">delete</button>
                                    </form>
                                    <button class="show btn btn-outline-primary"
                                        nama="{{ $c->name }}"
                                        email="{{ $c->email }}"
                                        message="{{ $c->message }}"
                                    >Details</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        {{ $contact->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection