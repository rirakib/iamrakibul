@php
    $header = \App\Models\Header::orderBy('id','desc')->first();
@endphp
<div id="hero" class="hero route bg-image" style="background-image: url({{ asset('backgroundImage/'.$header->bg_image) }})">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="hero-title mb-4">{{ $header->title ?? 'No Header Here' }}</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $header->designations }}"></span></p>
        </div>
      </div>
    </div>
  </div>
