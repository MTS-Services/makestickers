@extends('frontend.layouts.app', ['title' => 'Home'])

@push('styles')
    <style>
        html,



        .swiper {
            width: 100%;
            height: 100%;
            padding: 0 20px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block !important;
            width: 100% !important;
            height: 200px !important;
            object-fit: cover !important;


        }
    </style>
@endpush

@section('content')
    {{-- hero section --}}
    <section>
        <div class=" w-full bg-no-repeat bg-cover bg-center"
            style="background-image: url('{{ asset('Frontend/images/home-circles-over.webp') }}')">
            <div class="flex justify-center">
                <div class="text-center md:-ms-72 px-4 sm:px-6 py-12 sm:py-24 w-full max-w-xs sm:max-w-md md:max-w-lg">
                    <img src="{{ asset('Frontend/images/makeitstick.png') }}" alt="Make it stick"
                        class="mx-auto w-3/4 sm:w-2/3 md:w-1/2">
                    <h3 class="text-white uppercase py-3 text-sm sm:text-base md:text-lg lg:text-xl font-bold">
                        Custom stickers made easy
                    </h3>
                    <a href="#"
                        class="btn-secondary capitalize inline-flex items-center px-5 sm:px-8 text-sm sm:text-base rounded-none mt-2">
                        <i class="fa-solid fa-pencil pr-1"></i>Make a Sticker
                    </a>
                </div>
            </div>
        </div>
    </section>



    {{-- end hero section --}}
    {{-- Products section --}}
    <section class="md:-mt-20 sm:-mt-10 z-30 mt-4 relative">
        <div class="container  bg-white border-1 border-gray mx-3 md:mx-auto px-0 md:py-16 shadow-lg">
            {{-- cards --}}
            <div class="heading text-center pt-4">
                <h6 class="md:text-heading-6 text-font-12px  text-tertiary uppercase font-bold">Our Custom products</h6>
                <h2 class="md:text-heading-2 text-heading-3 font-bold uppercase">The Goods</h2>
                <span class="w-24 h-0.5 bg-tertiary block mx-auto mb-5 mt-3"></span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3   md:gap-4 sm:gap-2 md:px-4 px-2">
                <div
                    class="card-1 text-center p-2 transform transition duration-300 hover:text-white hover:bg-primary-hover/80 rounded-xl">
                    <img class="w-full mx-auto" src="{{ asset('Frontend/images/custom-stickers-2.jpg') }}" alt="">
                    <h5 class="md:text-heading-5 text-heading-6 pt-1 uppercase font-bold">Custom stickers</h5>
                    <h6 class="md:text-heading-6 text-font-12px  pb-2">Individually cut stickers</h6>
                </div>

                <div
                    class="card-1 text-center p-2 transform transition duration-300 hover:text-white hover:bg-primary rounded-xl">
                    <img class="w-full mx-auto" src="{{ asset('Frontend/images/custom-stickers-2.jpg') }}" alt="">
                    <h5 class="md:text-heading-5 text-heading-6 pt-1 uppercase font-bold">Custom labels</h5>
                    <h6 class="md:text-heading-6 text-font-12px  pb-2">Labels on a roll</h6>
                </div>

                <div
                    class="card-1 text-center p-2 transform transition duration-300 hover:text-white hover:bg-primary rounded-xl">
                    <img class="w-full mx-auto" src="{{ asset('Frontend/images/custom-stickers-2.jpg') }}" alt="">
                    <h5 class="tmd:text-heading-5 text-heading-6 pt-1 uppercase font-bold">Custom pouches</h5>
                    <h6 class="md:text-heading-6 text-font-12px  pb-2">Stand-up zipper pouches</h6>
                </div>
            </div>

            {{-- middel point --}}
            <div class="middel_point pt-8 sm:pt-10 md:pt-12">
              <div class="middel_header text-center px-4">
                  <h6 class="uppercase text-font-12px sm:text-sm md:text-heading-6 text-primary font-bold">
                      MakeStickers Advantages
                  </h6>
                  <h2 class="text-heading-4 sm:text-heading-3 md:text-heading-2 font-bold uppercase">
                      Why We're Special
                  </h2>
                  <span class="w-20 sm:w-24 h-0.5 bg-primary block mx-auto mb-4 mt-2 sm:mb-5 sm:mt-3"></span>
              </div>
          
              <div class="flex flex-col md:flex-row items-center justify-center px-4 sm:px-6 py-8 sm:py-10 bg-white gap-10 md:gap-16">
                  <!-- Left Column -->
                  <div class="space-y-8 sm:space-y-10 max-w-xl w-full">
                      <!-- Feature 1 -->
                      <div class="flex items-start gap-4 ps-4 sm:ps-7">
                          <div class="text-tertiary text-2xl sm:text-3xl">
                              <i class="fas fa-clock"></i>
                          </div>
                          <div>
                              <h3 class="text-tertiary font-bold text-base sm:text-lg md:text-heading-4 uppercase">
                                  On-Demand Printing
                              </h3>
                              <p class="text-gray-600 py-2 text-sm sm:text-font-14px">
                                  We've created a unique process that lets us print any quantity on the fly with little-to-no setup.
                              </p>
                          </div>
                      </div>
          
                      <!-- Feature 2 -->
                      <div class="flex items-start gap-4 ps-4 sm:ps-7">
                          <div class="text-secondary text-2xl sm:text-3xl">
                              <i class="fas fa-crop-alt"></i>
                          </div>
                          <div>
                              <h3 class="text-secondary font-bold text-base sm:text-lg md:text-heading-4 uppercase">
                                  No Designer Needed
                              </h3>
                              <p class="text-gray-600 py-2 text-sm sm:text-font-14px">
                                  Our easy-to-use templates don't require a degree in Graphic Design to create something truly custom.
                              </p>
                          </div>
                      </div>
          
                      <!-- Feature 3 -->
                      <div class="flex items-start gap-4 ps-4 sm:ps-7">
                          <div class="text-primary text-2xl sm:text-3xl">
                              <i class="fas fa-comment-alt"></i>
                          </div>
                          <div>
                              <h3 class="text-primary font-bold text-base sm:text-lg md:text-heading-4 uppercase">
                                  Reassuring at Every Step
                              </h3>
                              <p class="text-gray-600 py-2 text-sm sm:text-font-14px">
                                  You know what you're looking for, and we're here to help make sure you get it.
                              </p>
                          </div>
                      </div>
                  </div>
          
                  <!-- Right Column - Image -->
                  <div class="w-full md:w-auto">
                      <img src="{{ asset('Frontend/images/stickers-two-stacks-2.png') }}" alt="Stickers"
                          class="w-2/3 sm:w-1/2 md:w-72 mx-auto md:mx-0">
                  </div>
              </div>
          </div>
          
            {{-- MakeStickers Advantages --}}
            <div class="bg-white py-16  relative overflow-hidden">
                <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-center items-center gap-10">

                    <!-- Text Section -->
                    <div class="max-w-xl text-center md:text-left pr-24">
                        <h2 class="text-heading-5 font-bold uppercase text-gray-700 mb-2">Makestickers Newsletter</h2>
                        <h1 class="text-heading-3 md:text-4xl font-light text-gray-800 mb-4">
                            Come for the content, stay for the stickers
                        </h1>
                        <p class="text-gray mb-6">
                            Subscribe to the MakeStickers newsletter to receive inspiration, discounts, and more.
                        </p>

                        <!-- Form -->
                        <form class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                            <input type="email" placeholder="Email Address"
                                class="px-3 py-2 rounded-md border border-gray focus:ring-2 bg-white focus:primary-hover focus:outline-none w-80 sm:w-80" />
                            <button type="submit"
                                class="btn-tertiary hover:btn-tertiary text-white font-semibold px-6 py-2 rounded-md transition">
                                SUBSCRIBE
                            </button>
                        </form>

                        <p class="text-font-14px text-gray mt-4 italic ">
                            Emails are sent a few times a month, and you can unsubscribe at any time.
                        </p>
                    </div>

                    <!-- Image Section -->
                    <div class="flex justify-center md:justify-end">
                        <img src="{{ asset('Frontend/images/email-signup-graphic.png') }}" alt="Stickers in envelope"
                            class="w-full max-w-xs md:max-w-sm" />
                    </div>
                </div>

                <!-- Yellow line at bottom -->
                <div class="absolute bottom-0 left-0 w-full h-1 bg-yellow-400"></div>
            </div>

            {{-- MakeStickers Advantages --}}
            <div class="middel_header text-center pt-8 pb-4">
                <h6 class="uppercase text-heading-6 text-secondary font-bold">Instagram Feed</h6>
                <h2 class="text-heading-2 font-bold uppercase">What We're Printing</h2>
                <span class="w-24 h-0.5 bg-secondary block mx-auto mb-5 mt-3"></span>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/485840734_18494317735054684_4029586844195738932_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/486393835_18494983495054684_5823517282445754987_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/486648626_18494715976054684_778217307958471473_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/487363006_18495792271054684_7220331914312801246_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/487694335_18496207030054684_3028987914840157482_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/489022965_18497637586054684_3168029193112239033_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/489067077_18497474908054684_7399820887867029312_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/489893704_18497890297054684_8522145069221889272_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/491441147_18498702913054684_5923952602254522089_n.jpg') }}"
                            alt=""></div>
                    <div class="swiper-slide"><img
                            src="{{ asset('Frontend/images/492149962_18499120909054684_6050623490051198386_n.jpg') }}"
                            alt=""></div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            dots: false,
            slidesPerView: 1,
            spaceBetween: 10,
            // pagination: {
            //   el: ".swiper-pagination",
            //   clickable: true,
            // },
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },
            },
        });
    </script>
@endpush
