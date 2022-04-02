<footer class="footer_section">
    <div class="container">
      <div class="footer_content ">
        <div class="row ">
          <div class="col-md-6 col-lg-6 footer-col">
            <div class="footer_detail">
              <a href="index.html">
                <h4>
                  Brolta
                </h4>
              </a>
              <p>
                Exercitationem nisi voluptates mollitia suscipit voluptate minus facere, temporibus placeat ratione porro! Laboriosam esse ab cupiditate qui vel blanditiis, molestias, eaque natus aspernatur ipsam quasi id eos sapiente ducimus non!
              </p>
            </div>
          </div>
          @foreach ($footerpage as $footerpageitem)


          <div class="col-md-6 col-lg-3 ">
            <h4>
              Contact us
            </h4>
            <div class="contact_nav footer-col">
              <a href="{{$footerpageitem->footer_map}}">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="{{$footerpageitem->footer_call}}">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="{{$footerpageitem->footer_mail}}">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
    <div class="footer-info">
      <div class="container">
        <div class="footer-info-box">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
          </p>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
