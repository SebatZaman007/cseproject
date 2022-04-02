@extends('admin.master')

@section('content')

@extends('admin.master')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        @if (session()->has('message'))
        <div class="btn btn-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>
        @endif
        <form class="forms-sample" action="{{route('product.update')}}"  method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{$edit->id}}">
                <label for="exampleInputEmail1">Product Name</label>
                <input style="color: black" type="text" name="product_name" value="{{$edit->product_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
              </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" name="product_image" type="file" id="formFileMultiple" multiple>
                <img src="{{asset(BlogImage().$edit->product_image)}}" width="70px" height="70px" alt="img">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="number" style="color: black" name="product_price" value="{{$edit->product_price}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input type="text" style="color: black" name="product_description" value="{{$edit->product_description}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="number" style="color: black" name="product_quantity" value="{{$edit->product_quantity}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
          <button type="submit" class="btn btn-success me-2">Submit</button>

        </form>
      </div>
    </div>
  </div>

@endsection


@endsection
