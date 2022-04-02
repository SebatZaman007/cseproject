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
  <div class="row">
      <div class="col-lg-6">
          <div class="container">
              <div>
                  <h3 style="margin-top: 10px"><b>Billig Form</b></h3><br>
              </div>
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="billuser_name" value="{{$user_details->name}}" aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="billuser_phone" value="{{$user_details->phone}}" aria-describedby="emailHelp" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="billuser_address" value="{{$user_details->address}}" aria-describedby="emailHelp" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="billuser_email" value="{{$user_details->email}}" aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
  </div>


  <!-- end contact section -->

  <!-- footer section -->

  <!-- footer section -->

  @include('frontend.includes.scripts')
</body>

</html>
