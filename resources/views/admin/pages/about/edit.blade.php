
@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic</h4>
        <p class="card-description"> Basic form elements </p>
        @if (session()->has('message'))
        <div class="btn btn-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>
        @endif
        <form class="forms-sample" action="{{route('about.update')}}"  method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
                <input type="hidden" name="id" value="{{$edit->id}}">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" name="about_image" type="file" id="formFileMultiple" multiple>
                <img src="{{asset(BlogImage().$edit->about_image)}}" width="70px" height="70px" alt="img">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">About Description</label>
                <input type="text" style="color: black" name="about_description" value="{{$edit->about_description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
              </div>
          <button type="submit" class="btn btn-success me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>

@endsection



