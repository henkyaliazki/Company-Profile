@extends('layouts/layout')

@section('title', 'Home - Noval Ali Group')


@section('content')
    <section id="hero" class="hero section dark-background">

        <img src="{{ asset ('assets/img/world-dotted-map.png')}}" alt="" class="hero-bg" data-aos="fade-in">

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Indonesia Dalam Genggaman. Kirim Sekarang!</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Pengiriman cepat, aman, dan mudah ke seluruh Indonesia.
                        Lacak paket Anda secara real-time dan nikmati layanan pelanggan 24/7.</p>

                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                      data-purecounter-duration="0" class="purecounter">232</span>
                                <p>Pengiriman Sukses</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                      data-purecounter-duration="0" class="purecounter">121</span>
                                <p>On Progress</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="0"
                                      class="purecounter">0</span>
                                <p>Pengiriman Gagal</p>
                            </div>
                        </div><!-- End Stats Item -->
                    </div>

                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{asset('assets/img/hero-img.svg')}}" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                    <div>
                        <h4 class="title">Pengiriman Kilat</h4>
                        <p class="description">Barang Anda sampai dengan cepat dan aman, kemanapun tujuannya.
                            Lacak paket real-time</p>
                        <a href="{{ url('/order') }}" class="readmore stretched-link"><span>Pesan Sekarang!</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                    <div>
                        <h4 class="title">Pengiriman Antar Kota</h4>
                        <p class="description">Kirim barang Anda ke seluruh Indonesia dengan harga terjangkau dan
                            pengiriman cepat</p>
                        <a href="#" class="readmore stretched-link"><span>Pesan Sekarang</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 class="title">Asuransi Pengiriman</h4>
                        <p class="description">Lindungi barang Anda dari kehilangan atau kerusakan dengan asuransi
                            pengiriman kami</p>
                        <a href="#" class="readmore stretched-link"><span>Dapatkan Penawaran</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up"
                     data-aos-delay="200">
                    <img src="{{asset('assets/img/halaman-depan-pt.jpg')}}" class="img-fluid" alt="">
                    {{--            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>--}}
                </div>

                <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                    <h3>Tentang Kami</h3>
                    <p>
                        PT. Noval Ali Group, perusahaan jasa pengiriman yang berkomitmen untuk memberikan solusi
                        pengiriman yang cepat, aman, dan terpercaya. Berdiri sejak tahun 2022, kami
                        telah menjalin kemitraan strategis dengan J&T Cargo untuk menghadirkan layanan pengiriman
                        yang luas dan efisien ke seluruh Indonesia
                    </p>
                    <h3>Mengapa memilih kami?</h3>
                    <ul>
                        <li>
                            <i class="bi bi-globe-asia-australia"></i>
                            <div>
                                <h5>Jaringan Luas</h5>
                                <p>Jangkauan pengiriman ke seluruh Indonesia.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-box-seam-fill"></i>
                            <div>
                                <h5>Aman dan Terpercaya</h5>
                                <p>Asuransi pengiriman dan pengemasan yang aman.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bi bi-gear-fill"></i>
                            <div>
                                <h5>Fleksibilitas</h5>
                                <p>Berbagai pilihan layanan yang dapat disesuaikan dengan kebutuhan Anda</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Our Services<br></span>
            <h2>Our ServiceS</h2>
            <p>Kami menyediakan solusi pengiriman lengkap untuk memenuhi kebutuhan Anda.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/img/service-5.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h3>Packaging</h3>
                        <p class="">Kami menawarkan solusi pengemasan yang lengkap untuk melindungi produk Anda selama
                            proses pengiriman.Dengan pilihan bahan dan desain yang beragam,
                            kami memastikan produk Anda sampai ke tangan pelanggan dalam kondisi sempurna</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/img/service-2.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Logistics</a></h3>
                        <p>Percayakan pengiriman barang Anda kepada kami. Dengan jaringan luas dan sistem pelacakan yang
                            canggih,
                            kami menjamin pengiriman tepat waktu dan aman ke seluruh Indonesia, bahkan dunia</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{asset('assets/img/service-3.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="#" class="stretched-link">Cargo</a></h3>
                        <p>Butuh mengirimkan kargo dalam jumlah besar? Kami siap membantu. Dengan pengalaman kami dalam
                            pengiriman
                            kargo, kami menjamin pengiriman yang aman dan efisien ke seluruh dunia</p>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    {{--    <!-- Call To Action Section -->--}}
    {{--    <section id="call-to-action" class="call-to-action section dark-background">--}}

    {{--      <img src="{{asset('assets/img/cta-bg.jpg')}}" alt="">--}}

    {{--      <div class="container">--}}
    {{--        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">--}}
    {{--          <div class="col-xl-10">--}}
    {{--            <div class="text-center">--}}
    {{--              <h3>Call To Action</h3>--}}
    {{--              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
    {{--              <a class="cta-btn" href="#">Call To Action</a>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--        </div>--}}
    {{--      </div>--}}

    {{--    </section><!-- /Call To Action Section -->--}}
    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Features</span>
            <h2>Features</h2>
            <p>Fitur unggulan yang dapat memanjakan kamu dengan berbagai service terbaik</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Layanan Tepat Waktu</h3>
                    <p class="fst-italic">
                        Bosan menunggu paket terlalu lama? Dengan layanan kami, paket Anda akan tiba tepat waktu, setiap
                        saat. Kami menggunakan sistem pelacakan canggih sehingga Anda bisa memantau perjalanan paket
                        Anda secara real-time.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-truck"></i><span> Pengiriman same-day dan next-day</span>
                        </li>
                        <li><i class="bi bi-clock"></i>
                            <span>Pelacakan real-time</span></li>
                        <li><i class="bi bi-telephone"></i><span>Solusi cepat untuk setiap masalah</span></li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                     data-aos-delay="200">
                    <img src="assets/img/kurir-rumah.webp" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Layanan door to door</h3>
                    <p class="fst-italic">
                        Nikmati kenyamanan pengiriman barang tanpa perlu keluar rumah.
                    </p>
                    <p>
                        Dengan layanan door to door kami, Anda tidak perlu repot lagi membawa paket ke kantor
                        pengiriman. Cukup duduk santai, dan kami akan mengambil paket Anda langsung dari rumah atau
                        kantor Anda.
                    </p>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/paket-kecil2.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <h3>Layanan paket kecil</h3>
                    <p>Pengiriman produk fashion, elektronik 3C, kosmetik, makanan segar, perangkat keras dan produk
                        chain store lainnya di seluruh Indonesia, keberangkatan tepat waktu, prioritas transit dan
                        delivery,
                        prioritas pengiriman, pengantaran barang hingga lantai atas tanpa ragu.
                        .</p>
                    <ul>
                        <li><i class="bi bi-check"></i>
                            <span>Kirim paket kecil Anda dengan cepat dan aman ke seluruh Indonesia.</span></li>
                        <li>
                            <i class="bi bi-check"></i><span>Kami menggunakan kemasan khusus untuk melindungi barang Anda.</span>
                        </li>
                        <li><i class="bi bi-check"></i>
                            <span>Dapatkan harga terbaik untuk pengiriman paket kecil Anda.</span>.
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

        </div>

    </section><!-- /Features Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": "auto",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Layanan pengiriman yang sangat cepat dan terpercaya. Paket saya
                                    selalu sampai tepat waktu dan dalam kondisi baik</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Tim yang sangat membantu dalam proses pengiriman barang yang besar
                                    dan rumit. Mereka memberikan solusi yang efektif dan efisien</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Kami sangat puas dengan layanan yang diberikan.
                                    Mereka selalu siap membantu dan memberikan dukungan yang dibutuhkan.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Kualitas pengiriman yang sangat baik dan sesuai dengan yang kami
                                    harapkan. Kami akan terus bekerja sama dengan mereka di masa mendatang</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Selalu menjadi pilihan utama ketika pengiriman keantar wilayah</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>
            <p>Pertanyaan umum yang sering di ajukan</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="faq-container">

                        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3> Berapa lama waktu yang dibutuhkan untuk pengiriman?</h3>
                            <div class="faq-content">
                                <p>Waktu pengiriman tergantung pada tujuan dan jenis layanan yang Anda pilih.
                                    Namun, kami menjamin pengiriman secepat mungkin.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apakah barang saya akan diasuransikan?</h3>
                            <div class="faq-content">
                                <p>Ya, kami menyediakan layanan asuransi untuk melindungi barang Anda selama pengiriman.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana cara melacak paket saya?</h3>
                            <div class="faq-content">
                                <p>Anda dapat melacak paket Anda secara real-time melalui website pada bagian tracking </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Apa yang harus saya lakukan jika paket saya hilang?</h3>
                            <div class="faq-content">
                                <p>Jangan khawatir, kami akan membantu Anda melacak paket Anda.
                                    Jika paket dinyatakan hilang, kami akan segera memproses klaim asuransi Anda.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Berapa biaya pengiriman?</h3>
                            <div class="faq-content">
                                <p>Biaya pengiriman tergantung pada berat, ukuran, dan tujuan pengiriman.
                                    Anda dapat menghitung estimasi biaya pengiriman melalui kalkulator ongkos kirim kami.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection
