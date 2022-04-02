@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>

        <form class="forms-sample" action="{{route('client.update')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="custom-file">
                <input type="hidden" name="id" value="{{$edit->id}}">
                <input type="file" class="custom-file-input" id="inputGroupFile01" name="client_image">
                <img src="{{asset(BlogImage().$edit->client_image)}}" width="70px" height="70px" alt="img">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Client Name</label>
                <input type="text" style="color: black" name="client_name" value="{{$edit->client_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Client Feedback</label>
                <input type="text" style="color: black" name="client_feedback" value="{{$edit->client_feedback}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
              </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>

      </div>
    </div>
  </div>

@endsection
