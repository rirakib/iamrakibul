@php
    $services = \App\Models\Service::orderBy('title','asc')->get();
@endphp

<section id="services" class="services-mf pt-5 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($services as $service)
            <div class="col-md-4">
                <div class="service-box">
                <div class="service-ico">
                    <span class="ico-circle"><i class="{{ $service->icon }}"></i></span>
                </div>
                <div class="service-content">
                    <h2 class="s-title">{{ $service->title }}</h2>
                    <p class="s-description text-center">
                        {{ $service->description }}
                    </p>
                </div>
                </div>
            </div>
        @endforeach


      </div>
    </div>
  </section>
