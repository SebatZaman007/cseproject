<!DOCTYPE html>
<html>

@include('frontend.includes.head')

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{asset('frontend/images/hero-bg.jpg')}}" alt="">
    </div>
    <!-- header section strats -->
   @include('frontend.includes.header')
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity </th>
        <th scope="col">Price</th>
        <th scope="col">Delete</th>

      </tr>
    </thead>
    <tbody>
        <form action="{{route('confirm.order')}}" method="POST">
            @csrf

            @php
                $total=0;
            @endphp
        @foreach ($cart as $cartitem)


      <tr>
        <td>
            <input type="text" name="productname[]" value="{{$cartitem->product_title}}" hidden>
            {{$cartitem->product_title}}
        </td>
        <td>
            <input type="text" name="quantity[]" value=" {{$cartitem->quantity}}" hidden>
            {{$cartitem->quantity}}
        </td>
        <td>
            <input type="text" name="price[]" value=" {{$cartitem->price}}" hidden>
            {{$cartitem->price}}

        </td>

        <td>
            <a href="{{route('showproduct.delete',$cartitem->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @php
                $total += $cartitem->price*$cartitem->quantity ;
            @endphp
      @endforeach

    </tbody>
  </table>
  <h2> <b> Total Price : ${{$total}} </b> </h2><br>
  <a href="{{route('checkout.form')}}" class="btn btn-warning">Check Out</a>
      <button  class="btn btn-success">Confirm Order</button>

</form>
  <!-- end contact section -->

  <!-- footer section -->

  <!-- footer section -->

  @include('frontend.includes.scripts')
</body>

</html>
