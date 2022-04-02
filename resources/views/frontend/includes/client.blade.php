<section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap">
          <div class="owl-carousel client_owl-carousel">

              @foreach ($clientpage as $clientpageitem)
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset(BlogImage().$clientpageitem->client_image)}}" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    {{$clientpageitem->client_name}}
                  </h5>

                  <p>
                    {{$clientpageitem->client_feedback}}
                  </p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
