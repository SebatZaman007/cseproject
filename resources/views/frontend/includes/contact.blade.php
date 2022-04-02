<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{route('contact.store')}}" method="POST">
                @csrf
              <div>
                <input type="text" name="contact_name" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" name="contact_number" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" name="contact_email" placeholder="Your Email" />
              </div>

              <div >

                <textarea class="form-control" id="exampleFormControlTextarea1" name="contact_message" rows="4" placeholder="Message"></textarea>
              </div>
              {{-- <div>

                <input type="text" name="contact_message" class="message-box" placeholder="Message" />
              </div> --}}
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.4680165022046!2d89.5499698149155!3d22.822167985054882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9008870bfd93%3A0xf684d314e4b6e473!2sNorthern%20University%20of%20Business%20%26%20Technology%20Khulna!5e0!3m2!1sen!2sbd!4v1648804635894!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
