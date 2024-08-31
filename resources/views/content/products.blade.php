@extends('index')

@section('content')
    <section class="wrapper">

      </div>
      <div class="container">
            <div class="row">

              <video
              autoplay
              muted
              playsinline
              loop
              src="videoplayback.webm"
              class="rounded-5"
            ></video>



            <div class="row my-5">
                <div class="col text-center">
                    <h1 class="display-4 font-weight-bolder text-dark"><b>Rayenmeal products find the best one <i class="bi bi-cup-fill"></i></b></h1>
                    <p class="lead">Make your day feel batter with rayenmeal products, and colorful your mood with rayen meal products</p>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product )
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                    <div class="card text-dark card-has-bg click-col"
                    style="background-image:url('{{ $product->image_url }}');https">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                            alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                                <small class="card-meta mb-2">Thought Leadership</small>
                                <h4 class="card-title mt-0"><a class="text-dark text-decoration-none" herf="https://creativemanner.com">{{ $product->product_name }}</a></h4>
                                <small><i class="far fa-clock"></i>{{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</small>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <img class="mr-3 rounded-circle"
                                        src="https://cdn.prod.website-files.com/5eb6815bc8e0bd376c3cae22/63f4d41751276dcd710fcc5c_kopi%20kenangan.jpg"
                                        alt="Generic placeholder image" style="max-width:50px">
                                    <div class="media-body">
                                        <h6 class="my-0 text-dark d-block">Oz Coruhlu</h6>
                                        <small>Director of UI/UX</small>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                  </div>
                  @endforeach
            </div>

        </div>
      </div>
    </section>
@endsection
