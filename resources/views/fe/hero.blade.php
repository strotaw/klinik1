      <!--== Start Hero Area Wrapper ==-->
      <section class="home-slider-area slider-default bg-img" data-bg-img="{{asset('storage/' . $hero->url_img)}}">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- Start Slide Item -->
              <div class="slider-content-area" data-aos="fade-zoom-in" data-aos-duration="1300">
                <h5>{{$hero->judul1}}</h5>
                <h2>{{$hero->judul2}} <span>{{$hero->judul3}}</span></h2>
              </div>
              <!-- End Slide Item -->
              <div class="swiper-container service-slider-container">
                <div class="swiper-wrapper service-slider service-category">
                @foreach ( $service_slider as $data  )
                  <div class="swiper-slide category-item">
                    <div class="icon">
                      <i class="{{$data->icon}}"></i>
                    </div>
                    <h4>{{$data->judul}}</h4>
                    <p>{{$data->keterangan}}</p>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Hero Area Wrapper ==-->