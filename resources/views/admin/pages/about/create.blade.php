

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
        <form class="forms-sample" action="{{route('about.store')}}"  method="POST" enctype="multipart/form-data" >
            @csrf

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" name="about_image" type="file" id="formFileMultiple" multiple>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">About Description</label>
                <input type="text" style="color: black" name="about_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
              </div>
          <button type="submit" class="btn btn-success me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>

@endsection



