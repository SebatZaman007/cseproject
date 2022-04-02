@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>

        <form class="forms-sample" action="{{route('footer.update')}}" method="POST" enctype="multipart/form-data" >
            @csrf

              <div class="form-group">
                  <input type="hidden" name="id" value="{{$edit->id}}">
                <label for="exampleInputEmail1">Footer Map</label>
                <input type="text" style="color: black" name="footer_map" value="{{$edit->footer_map}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Footer Call</label>
                <input type="text" style="color: black" name="footer_call" value="{{$edit->footer_call}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Footer Mail</label>
                <input type="text" style="color: black" name="footer_mail" value="{{$edit->footer_mail}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>

      </div>
    </div>
  </div>

@endsection
