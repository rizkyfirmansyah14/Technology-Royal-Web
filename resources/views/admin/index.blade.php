@extends('layout.admin.main')
@section('content')
<div class="row">
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{$count_bisnis}}</h3>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-primary ">
              <span class="mdi mdi-office-building"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Business</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{$count_contact}}</h3>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success">
              <span class="mdi mdi-contact-mail"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Contact</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{$count_partner}}</h3>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-primary">
              <span class="mdi mdi-nature-people"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Partner</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">{{$count_user}}</h3>
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-contacts"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Users</h6>
      </div>
    </div>
  </div>
</div>
<div class="row ">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">latest Contact</h4>
        <a href="{{url('/contact')}}">Show More Contact</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> No </th>
                <th> Name </th>
                <th> Email </th>
                <th> Message </th>
                <th> Date </th>
                <th> Action  </th>
              </tr>
            </thead>
            <tbody>
              @foreach($contact as $contact)
              <tr>
                <td> {{$loop->iteration}} </td>
                <td> {{$contact->name}} </td>
                <td> {{$contact->email}} </td>
                <td> 
                @if(strlen($contact->message) > 30 )
                    {{ substr($contact->message, 0, 30) . '...'}}
                @else 
                    {{$contact->message}}
                @endif   
                </td>
                <td>{{ substr($contact->created_at, 0, 10) . ''}}</td>
                <td>
                  <button class="show btn btn-outline-primary"
                  nama="{{ $contact->name }}"
                  email="{{ $contact->email }}"
                  message="{{ $contact->message }}"
                  >Details</button>
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