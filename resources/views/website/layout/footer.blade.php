<!-- partial:partials/_footer.html -->

{{-- <div class="col-sm-4">
                <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row">
                      @foreach($articles->sortDesc()->take(3) as $latest)
                        <div class="col-3">
                          <img
                          src="assets/images/dashboard/home_1.jpg"
                          alt="thumb"
                          class="img-fluid"
                          />
                        </div>
                        <div class="col-9">
                          <h5>{{ Str::words($latest->title, 5, '...')}}</h5>

</div>
@endforeach
</div>

</div>
</div>
</div> --}}

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <img src="assets/images/logo.svg" class="footer-logo" alt="">
          <h5 class="font-weight-normal mt-4 mb-5">
            Newspaper is your news, entertainment, music fashion website. We
            provide you with the latest breaking news and videos straight from
            the entertainment industry.
          </h5>
          <ul class="social-media mb-3">
            <li>
              <a href="#">
                <i class="mdi mdi-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
          <div class="row">
            <div class="col-sm-12">
              <div class="footer-border-bottom pb-2">
                @foreach($articles->sortDesc()->take(3) as $latest)
                <div class="row mb-md-3">
                  <div class="col-3">
                    <img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid">
                  </div>
                  <div class="col-9">
                    <h5>{{ Str::words($latest->title, 5, '...')}}</h5>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>

          {{-- <div class="row">
    <div class="col-sm-12">
      <div class="footer-border-bottom pb-2">
        @foreach($articles->sortDesc()->take(3) as $article)

        <a href="{{ route('article.show',$article->id) }}">
          <div class="row mb-md-3">
            <div class="col-3">
              <img src="{{asset(Helper::singeleImage($article->image))}}" alt="thumb" class="img-fluid">
            </div>
            <div class="col-9">
              <h5>{{ Str::words($article->title, 5, '...')}}</h5>
            </div>
          </div>
          </a>


          @endforeach
        </div>
      </div>
    </div> --}}

  </div>
  <div class="col-sm-3">
    <h3 class="font-weight-bold mb-3">CATEGORIES</h3>

    @foreach($categories->random(5) as $category)
    <div class="footer-border-bottom pb-2">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="mb-0 font-weight-600">{{ $category->name }}</h5>
        <div class="count">{{ $category->articles->count() }}</div>
      </div>
    </div>
    @endforeach

  </div>
  </div>
  </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center">
            <div class="fs-14 font-weight-600">
              © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> BootstrapDash</a>.
              All rights reserved.
            </div>
            <div class="fs-14 font-weight-600">
              Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank"
                class="text-white">BootstrapDash</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>