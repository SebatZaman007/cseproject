@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>

        <form class="forms-sample" action="{{route('bannerimage.update')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="custom-file">
                <input type="hidden" name="id" value="{{$edit->id}}">
                <input type="file" class="custom-file-input" id="inputGroupFile01" name="banner_image">
                <img src="{{asset(BlogImage().$edit->banner_image)}}" width="70px" height="70px" alt="img">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
         
        </form>

      </div>
    </div>
  </div>

@endsection
