@extends('admin.master')

@section('content')


<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="btn btn-success"  class="card-description">
            <a href="{{route('product.create')}}">Add Product</a>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Description</th>
                <th>Product Quantity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>
                        <img src="{{asset(BlogImage().$product->product_image)}}" alt="image">
                    </td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->product_quantity}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('product.edit',$product->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('product.delete',$product->id)}}">Delete</a>
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
