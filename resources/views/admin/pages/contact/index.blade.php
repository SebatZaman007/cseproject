
@extends('admin.master')

@section('content')

<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description">
            <p class="btn btn-success"  class="card-description">
                <a href="{{route('about.create')}}">Contact</a>
            </p>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Massege</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contactitem)
                <tr>
                   <td>{{$contactitem->contact_name}}</td>
                   <td>{{$contactitem->contact_number}}</td>
                   <td>{{$contactitem->contact_email}}</td>
                   <td>{{$contactitem->contact_message}}</td>
                   <td>
                       <a class="btn btn-primary" href="">send feedback</a>
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
