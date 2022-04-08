@extends('layouts.main')
@section('container')
<title>Home Page</title>
<!-- Header -->
<section class="header pt-lg-60 pb-50">
        <div class="container mt-5 mantap">
            <div class="row gap-lg-0 gap-5">
                <div class="col-lg-6 col-12 my-auto">
                    <h1 class="header-title color-palette-1 fw-bold mb-2">
                        Forget Work <span class="d-sm-inline d-none"></span><span class="d-sm-none d-inline">a
                        </span><span class="underline-blue"> Let's</span> <br class="d-sm-block d-none"> <span
                            class="underline-blue">Holiday</span> in Orchid Forest
                    </h1>
                    <p class="mt-30 mb-40 text-lg color-palette-1 my-3">Kami menyediakan Wisata alam untuk membantu<br
                            class="d-md-block d-none"> Wisatawan berlibur di Taman alam Bandung Orchid.
                    </p>
                    <div class="d-flex flex-lg-row flex-column gap-4 mt-2">
                        <a class="btn btn-primary btn-lg text-white" href="/ticket" role="button">Buy
                            Now</a>
                        {{-- <a class="btn btn-primary-outline btn-lg" href="/home" role="button">Learn
                            More</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none">
                    <div class="d-flex justify-content-lg-end justify-content-center me-lg-5">
                        <div class="position-relative" data-aos="zoom-in">
                                <img class="w-100 h-100 rounded img-hero" src="https://i.pinimg.com/originals/11/75/00/1175002f9b0ccd863b41cd3aae069bc5.png" alt="" />
                          
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Colum-3 -->
    <section class="container mt-5" id="about">
      <div class="container mt-5 mantap">
            <center><h2 class="text-4xl fw-bold color-palette-1 mb-30" data-sr-id="2" style="visibility: visible; opacity: 1; transition: opacity 0.6s cubic-bezier(0.5, 0, 0, 1) 0.3s;">About</h3></center>
            <center><p class="mt-30 mb-40 text-lg color-palette-1 my-3">Sesuai dengan namanya, Orchid Forest, kawasan ini juga dilengkapi dengan house of anggrek yang banyak dihuni oleh ragam bunga anggrek langka.
            Tak hanya sejukkan pemandangan, kawasan ini juga menjadi salah satu lokasi potensi pengembangan ragam bunga anggrek di Indonesia.<br
                            class="d-md-block d-none"> Jadi Mari berlibur di Taman alam Bandung Orchid Forest.
            </p></center>
        </div>



<!-- Colum-4 -->
   <section class="featured-game mt-5">
        <div class="container-fluid">
            <h2 class="text-4xl fw-bold color-palette-1 mb-30">Wisata<br> Orchid Forest
            </h2>
            <div class="d-flex flex-row flex-lg-wrap overflow-setting justify-content-lg-between gap-lg-3 gap-4"
                data-aos="fade-up">
                <div class="featured-game-card position-relative">
                    <a href="./src/detail.html">
                        <div class="blur-sharp">
                            <img src="asset/asset1.jpg" width="205" height="270" alt="">
                        </div>
                        <div class="cover position-absolute bottom-0 m-32">
                            <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">

                                </div>
                                <div>
                                    <center><h4 class="fw-semibold text-white text-xl m-0">Orchid Forest</h4><center>
                                    <h1 class="fw-light text-white m-0">Gate</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="featured-game-card position-relative">
                    <a href="https://www.instagram.com/orchidforestcikole/">
                        <div class="blur-sharp">
                            <img src="asset/asset2.jpg" width="205" height="270" alt="">
                        </div>
                        <div class="cover position-absolute bottom-0 m-32">
                            <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">

                                </div>
                                <div>
                                    <center><h4 class="fw-semibold text-white text-xl m-0">Orchid Forest</h4><center>
                                    <h1 class="fw-light text-white m-0">Gate</h1>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="featured-game-card position-relative">
                    <a href="https://www.instagram.com/orchidforestcikole/">
                        <div class="blur-sharp">
                            <img src="asset/asset6.jpg" width="205" height="270" alt="">
                        </div>
                        <div class="cover position-absolute bottom-0 m-32">
                            <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">

                                </div>
                                <div>
                                    <center><h4 class="fw-semibold text-white text-xl m-0">Orchid Forest</h4><center>
                                    <h1 class="fw-light text-white m-0">Gate</h1>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="featured-game-card position-relative">
                    <a href="https://www.instagram.com/orchidforestcikole/">
                        <div class="blur-sharp">
                            <img src="https://i.pinimg.com/originals/77/1a/eb/771aeb9bf6c08c26d28fbff204bd6ae1.jpg" width="205" height="270" alt="">
                        </div>
                        <div class="cover position-absolute bottom-0 m-32">
                            <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">

                                </div>
                                <div>
                                    <center><h4 class="fw-semibold text-white text-xl m-0">Orchid Forest</h4><center>
                                    <h1 class="fw-light text-white m-0">Gate</h1>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="featured-game-card position-relative">
                    <a href="https://www.instagram.com/orchidforestcikole/">
                        <div class="blur-sharp">
                            <img src="https://dolanyok.com/wp-content/uploads/2019/09/orchidforestcikole_60584003_198147387824745_65169415303318611_n.jpg" width="205" height="270" alt="">
                        </div>
                        <div class="cover position-absolute bottom-0 m-32">
                            <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">

                                </div>
                                <div>
                                    <center><h4 class="fw-semibold text-white text-xl m-0">Orchid Forest</h4><center>
                                    <h1 class="fw-light text-white m-0">Gate</h1>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </section>
                            
   </p>
  </section>

  <!-- Colum 5 -->
  <section class="event pt-lg-50 pb-60">
        <div class="container-fluid">
            <div class="d-flex flex-lg-row flex-column align-items-center justify-content-center gap-lg-0 gap-4">
                <div class="me-lg-35">
                    <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">1000++</p>
                    <p class="text-lg text-lg-start text-center color-palette-2 m-0">visitors </p>
                </div>
                <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
                <div class="horizontal-line mt-6 mb-6 me-lg-35 ms-lg-35 d-lg-none d-block"></div>
                <div class="me-lg-35 ms-lg-35">
                    <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">20+</p>
                    <p class="text-lg text-lg-start text-center color-palette-2 m-0">Wisata Available</p>
                </div>
                <div class="horizontal-line mt-6 mb-6 me-lg-35 ms-lg-35 d-lg-none d-block"></div>
                <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
                <div class="me-lg-35 ms-lg-35">
                    <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">99,9%</p>
                    <p class="text-lg text-lg-start text-center color-palette-2 m-0">Happy Tourist</p>
                </div>
                <div class="horizontal-line mt-6 mb-6 me-lg-35 ms-lg-35 d-lg-none d-block"></div>
                <div class="vertical-line me-lg-35 ms-lg-35 d-lg-block d-none"></div>
                <div class="me-lg-35 ms-lg-35">
                    <p class="text-4xl text-lg-start text-center color-palette-1 fw-bold m-0">4.7</p>
                    <p class="text-lg text-lg-start text-center color-palette-2 m-0">Rating Worldwide</p>
                </div>
            </div>
        </div>
    </section>
  <!-- column 6-->
  <section class="reached mt-5">
        <div class="container mt-5 mantap">
        <div class="row gap-lg-0 gap-5">
                <div class="col-lg-6 col-12 my-auto">
                    <img class="w-400px  rounded img-hero1" src="asset/asset4.jpg" alt="" />
                          
                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none">
                    <h1 class="header-title color-palette-1 fw-bold mb-2">
                        More <span class="d-sm-inline d-none"></span><span class="d-sm-none d-inline">a
                        </span><span class="underline-blue"> Event's</span> <br class="d-sm-block d-none"> <span
                            class="underline-blue">Holiday</span> in Orchid Forest
                    </h1>
                    <p class="mt-30 mb-40 text-lg color-palette-1 my-3">Through this special event, the Cikole Orchid Forest aims to present the rhythms and sounds of great music wrapped in the beauty of nature, said Executive Director of the Orchid Forest, Maulana Barry Akbar: “Concerts are normally held indoors or at outdoor venues; but this time we bring a music concert with a difference, right here into the midst of this fragrant pine forest, which promises to be a one of a kind experience, especially since we have will bring orchestral music to the show.”<br
                            class="d-md-block d-none"> Wisatawan berlibur di Taman alam Bandung Orchid.
                    </p>
                    <div class="d-flex flex-lg-row flex-column gap-4 mt-2">
                        {{-- <a class="btn btn-primary-outline btn-lg" href="/home" role="button">Learn
                            More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- column 6-->
 <section class="reached mt-5">
        <div class="container mt-5 mantap">
        <div class="row gap-lg-0 gap-5">
                <div class="col-lg-6 col-12 my-auto">
                    <img class="w-400 h-100 rounded img-hero1" src="https://1.bp.blogspot.com/-ztjML4urgmM/XLP_jiB3P6I/AAAAAAABT_k/dU4pG4zjQfEG794SERXpuvLqFOJtsExbQCLcBGAs/s1600/IMG_1908.JPG" alt="" />
                          
                </div>
                <div class="col-lg-6 col-12 d-lg-block d-none">
                    <h1 class="header-title color-palette-1 fw-bold mb-2">
                        More <span class="d-sm-inline d-none"></span><span class="d-sm-none d-inline">a
                        </span><span class="underline-blue"> Store</span> <br class="d-sm-block d-none"> <span
                            class="underline-blue">for Shopping</span> in Orchid Forest
                    </h1>
                    <p class="mt-30 mb-40 text-lg color-palette-1 my-3">Through this special event, the Cikole Orchid Forest aims to present the rhythms and sounds of great music wrapped in the beauty of nature, said Executive Director of the Orchid Forest, Maulana Barry Akbar: “Concerts are normally held indoors or at outdoor venues; but this time we bring a music concert with a difference, right here into the midst of this fragrant pine forest, which promises to be a one of a kind experience, especially since we have will bring orchestral music to the show.”<br
                            class="d-md-block d-none"> Wisatawan berlibur di Taman alam Bandung Orchid.
                    </p>
                    <div class="d-flex flex-lg-row flex-column gap-4 mt-2">
                        {{-- <a class="btn btn-primary-outline btn-lg" href="/home" role="button">Learn
                            More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection