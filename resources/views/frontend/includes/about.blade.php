
  <section class="about_section ">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img src="{{asset(BlogImage().$aboutpage->about_image)}}" class="box_img" alt="about img">
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box ">
            <div class="heading_container">
              <h2 class="">
                About Us
              </h2>
            </div>
            <p class="detail_p_mt">
              {{$aboutpage->about_description}}
            </p>
            <a href="{{route('show.about')}}" class="">
              Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
