@extends('admin.master')

@section('content')

<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description">
            <p class="btn btn-success"  class="card-description">
                <a href="{{route('client.create')}}">Client Table</a>
            </p>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Client Image</th>
                <th>Client Name</th>
                <th>Client Feedback</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($client as $clientitem)
                <tr>
                    <td>
                        <img src="{{BlogImage().$clientitem->client_image}}" alt="image">
                    </td>
                    <td>{{$clientitem->client_name}}</td>
                    <td> {{ Str::limit($clientitem->client_feedback, 50) }}</td>

                        <td>
                            <a class="btn btn-success" href="{{route('client.edit',$clientitem->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('client.delete',$clientitem->id)}}">Delete</a>
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
