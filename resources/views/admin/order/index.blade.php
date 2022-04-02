@extends('admin.master')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Order Table</h4>

        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Phone Number</th>
                <th>Adress</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>


          @foreach($order as $orders)
              <tr>
                <td>{{$orders->name}}</td>
                <td>{{$orders->phone}}</td>
                <td >{{$orders->address}}</td>
                <td>{{$orders->product_name}}</td>
                <td>{{$orders->quantity}}</td>
                <td>{{$orders->price}}</td>
                <td>{{$orders->status}}</td>
                <td>
                     <a class="btn btn-success" href="{{route('update.status',$orders->id)}}">Delivered</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
