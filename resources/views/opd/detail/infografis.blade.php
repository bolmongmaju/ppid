<!-- ======= Portfoio Section ======= -->
<section id="portfolio" class="portfoio">
    <div class="container" data-aos="fade-up">

      <div class="row portfolio-container">
        @forelse ($infografis as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ $item['image'] }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              {{-- <h4>App 1</h4> --}}
              <p>{{ $item['title'] }}</p>
              <a href="{{ $item['image'] }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $item['title'] }}"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        @empty
            <p>tidak ada infografis</p>
        @endforelse
      </div>

    </div>
  </section><!-- End Portfoio Section -->