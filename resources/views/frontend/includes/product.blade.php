<section class="product_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center ">
        <h4 class="">
         <b>New Arrivals</b>
        </h4>
        <form class="form-inline" action="{{route('search.product')}}" method="GET" style="float: right; padding: 20px">
            @csrf
            <input class="form-control" type="search" name="search" id="">
            <input type="button" value="Search" class="btn btn-success" style="color:black">
        </form>
      </div>
      <div class="row">
          @foreach ($data as $dataitem)
          <div class="col-sm-6 col-md-3">
            <div class="box">
              <div class="img-box">
                <img src="{{asset(BlogImage().$dataitem->product_image)}}" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  {{$dataitem->product_name}}
                </h4>
                <h6 class="price">
                  <span class="new_price">
                    price: {{$dataitem->product_price}}$
                  </span>
                  <br>
                  <span >
                    {{$dataitem->product_description}}
                  </span>
                </h6>
                <form class="from-inlineform-inline justify-content-center" action="{{route('add.cart',$dataitem->id)}}" method="POST">
                    @csrf
                        <div>
                        <input  style="width:100px"  name="quantity"   type="number" value="1" min="1" class="form-control"  >
                       
                        <input   type="submit" value="Add Cart" class="btn btn-success" style="color: black">
                        </div>
            </form>
              </div>
            </div>
          </div>
          @endforeach
      </div>


      {{-- <div  class="d-flex justify-content-center" style="margin-top: 10px">

        {!!$data->links()!!}
      </div> --}}
    </div>
  </section>
