@extends('layouts.main')
@section('container')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="banner">
  <h2 id="title"> Orchid Forest</h2>

</section>

  <!-- Custom styles for this template -->
  <link href="/css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container mt-5 mantap">
  <main>
    @auth
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="asset/asset-logo.jpg" alt="" width="72" height="57">
      <h2>Customer Feedback Form</h2>
      <p class="lead">Silahkan lengkapi umpan balik  berikut ini dan bantu kami untuk meningkatkan pelayanan dengan memberi pengalaman anda .
                      Apresiasi anda sangat membantu untuk kemajuan website kami.Terimakasih </p>
    </div>

   <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <form action="/review" method="post" class="needs-validation" novalidate >
          @csrf
         <!-- Star -->

          <hr class="my-4">

          <h4 class="mb-3">Rating</h4>
            <div class="my-3">
              <div class="rated1"> Berapa kepuasaan anda mengujungi Wisata alam Orchid Forest</div>
                <div class="stars">
                      <input class="star star-5" id="star-5" type="radio" name="kepuasan" value="5"/>
                      <label class="star star-5" for="star-5"></label>
                      <input class="star star-4" id="star-4" type="radio" name="kepuasan" value="4"/>
                      <label class="star star-4" for="star-4"></label>
                      <input class="star star-3" id="star-3" type="radio" name="kepuasan" value="3"/>
                      <label class="star star-3" for="star-3"></label>
                      <input class="star star-2" id="star-2" type="radio" name="kepuasan" value="2"/>
                      <label class="star star-2" for="star-2"></label>
                      <input class="star star-1" id="star-1" type="radio" name="kepuasan" value="1"/>
                      <label class="star star-1" for="star-1"></label>
                  <span style="padding-left: 20;">Buruk</span> 
                  <span style="padding-left: 160;">Baik</span>
                </div>
              </div>
          
        
              <!-- star1 -->

              <div class="rated1"> Seberapa bersih lingkungan yang anda kunjungi di Wisata alam Orchid Forest</div>
                <div class="stars1"> 
                        <input class="star1 star-5a" id="star-5a" type="radio" name="kebersihan" value="5"/>
                        <label class="star1 star-5a" for="star-5a"></label>
                        <input class="star1 star-4a" id="star-4a" type="radio" name="kebersihan" value="4"/>
                        <label class="star1 star-4a" for="star-4a"></label>
                        <input class="star1 star-3a" id="star-3a" type="radio" name="kebersihan" value="3"/>
                        <label class="star1 star-3a" for="star-3a"></label>
                        <input class="star1 star-2a" id="star-2a" type="radio" name="kebersihan" value="2"/>
                        <label class="star1 star-2a" for="star-2a"></label>
                        <input class="star1 star-1a" id="star-1a" type="radio" name="kebersihan" value="1"/>
                        <label class="star1 star-1a" for="star-1a"></label>
                    <span style="padding-left: 20;">Buruk</span> 
                    <span style="padding-left: 160;">Baik</span>
                </div>
              </div>
            
                <div class="form-group purple-border">
                  <label for="exampleFormControlTextarea4">Tuliskan Pesan</label>
                  <textarea class="form-control @error('pesan') is-invalid @enderror" id="exampleFormControlTextarea4" rows="3" name="pesan" required></textarea>
                  @error('pesan')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
            </div>    
        </div>
            
        <!-- Submit -->
          <hr class="my-4">
          <center><button class="w-50 btn btn-success btn-lg" type="submit" target="myCarousel">Submit</button></center>
      </form>
      </div>
    </div>
  
    <hr class="my-4">
    <center><div class="txt" for="same-address">Wisatawan Kami Yang Terhormat<br>
      Terimakasih telah memilih liburan anda di Wisata Orchid Forest.</br>
      Kami ingin tahu bagaimana kinerja kami mohon luangkan waktu anda untuk
      Memberi kami tanggapan anda yang berharga, karena itu akan membantu kami
      dalam meningkatkan layanan kami.
    </div></center>
    <hr class="my-4">
    @else
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="asset/asset-logo.jpg" alt="" width="72" height="57">
      <h2>Customer Feedback Form</h2>
      <p class="lead">Silahkan lengkapi umpan balik  berikut ini dan bantu kami untuk meningkatkan pelayanan dengan memberi pengalaman anda .
                      Apresiasi anda sangat membantu untuk kemajuan website kami.Terimakasih </p>
    </div>
    <hr class="my-4">
      <center><div class="txt" for="same-address">
                Untuk memberikan review anda harus login/register terlebih dahulu!
              </div>
      </center>
    <hr class="my-4">
    @endauth
  </main>
</div>



<!-- Review tangapan -->
    <main>
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/1367192/pexels-photo-1367192.jpeg?cs=srgb&dl=pexels-eberhard-grossgasteiger-1367192.jpg&fm=jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
            
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img src="https://wisatakaka.com/wp-content/uploads/2018/03/Fasilitas-Orchid-Forest-Cikole.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <img src="https://blog.tripcetera.com/id/wp-content/uploads/2020/03/orchidforestcikole_26325627_149588472409706_6432148704731332608_n-1024x682.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
      
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
      </div>
        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light">Review Wisatawan</h1>
              <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
              <p>
                <a href="#" class="btn btn-primary my-2">Kembali ke atas</a>
              </p>
            </div>
          </div>
        </section>
        <hr class="my-4">
        @if ($posts->count())
            @foreach ($posts as $post)
                <div class="mb-4">
                  <a class="fw-bold link-dark text-capitalize" style="text-decoration: none">{{$post->user->name}}</a> 
                  <span>{{$post->created_at->diffForHumans()}}</span>
                  <p clas="mb-2 text-capitalize">Kepuasan: {{$post->kepuasan}} <br> Kebersihan: {{$post->kebersihan}} <br> Ulasan: {{$post->pesan}}</p>
                  <div>
                    @if ($post->user_id == Auth()->id())
                    <ul class="list-group list-group-horizontal">
                      <li class="list-group-item">
                        <form action="/review/{{$post->id}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </li>
                      <li class="list-group-item">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Update
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                              <form action="/review/{{$post->id}}" method="post" class="needs-validation" novalidate >
                                @csrf
                                @method('put')
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <!-- Star -->                        
                                    <div class="my-3">
                                      <div class="rated1"> 1. Berapa kepuasaan anda mengujungi Wisata alam Orchid Forest</div>
                                        <div class="stars">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio2" value="2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio2" value="3">
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio2" value="4">
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kepuasan" id="inlineRadio2" value="5">
                                            <label class="form-check-label" for="inlineRadio2">5</label>
                                          </div>
                                          
                                          <span style="padding-left: 0;">Buruk</span> 
                                          <span style="padding-left: 160;">Baik</span>
                                        </div>
                                    </div>
                                  
                                
                                      <!-- star1 -->
                                    <div class="my-3">
                                      <div class="rated1"> 2. Seberapa bersih lingkungan yang anda kunjungi di Wisata alam Orchid Forest</div>
                                      <div class="stars">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="kebersihan" id="inlineRadio1" value="1">
                                          <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="kebersihan" id="inlineRadio2" value="2">
                                          <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="kebersihan" id="inlineRadio2" value="3">
                                          <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="kebersihan" id="inlineRadio2" value="4">
                                          <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="kebersihan" id="inlineRadio2" value="5">
                                          <label class="form-check-label" for="inlineRadio2">5</label>
                                        </div>
                                        
                                        <span style="padding-left: 0;">Buruk</span> 
                                        <span style="padding-left: 160;">Baik</span>
                                      </div>
                                      </div>
                                    
                                        <div class="form-group purple-border">
                                          <label for="exampleFormControlTextarea4"> 3. Tuliskan Pesan</label>
                                          <textarea class="form-control @error('pesan') is-invalid @enderror" id="exampleFormControlTextarea4" rows="3" name="pesan" required></textarea>
                                          @error('pesan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                        </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-success" type="submit">Submit</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    
                    
                    @endif
                  </div>
                </div>
            @endforeach
            {{$posts->onEachSide(5)->links()}}
        @else
            <p>Belum ada user review!</p>
        @endif
    </main>
  </body>
</html>

<!-- JS -->

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="/js/form-validation.js"></script>
@endsection

<!-- rating.js file -->
<script src="js/addons/rating.js"></script>