@include('header')

<!-- Popup Modal -->
<div class="modal fade" id="welcomeModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center p-4 rounded-4 shadow">

      <!-- Close Button -->
      <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal"></button>

      <!-- Logo -->
      <div class="mb-3">
        <img src="{{asset('assets/images/logos/company-logo.jpg')}}" alt="Logo" style="height: 70px;">
      </div>

      <!-- Title -->
      <h3 class="fw-bold mb-2">Welcome to VipDigitalHub</h3>

      <!-- Subtitle -->
      <p class="text-muted mb-3">Grow your business with us 🚀</p>

      <!-- Button -->
     


      <a href="/book-appointment" class="btn btn-primary mt-3 d-block mx-auto" style="width: fit-content;padding-left: 58px;">
     Book Appointment 
</a>

    </div>
  </div>
</div>

    <!--  Page Wrapper -->
    <div class="page-wrapper overflow-hidden">
      <!--  Banner Section -->
      <section
        class="banner-section position-relative d-flex align-items-end min-vh-100"
      >
      <video
          class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
          autoplay
          muted
          playsinline
          preload="none"
          poster="{{ asset('assets/images/backgrounds/banner.png') }}"
        >
          <source src="{{ asset('assets/images/backgrounds/banner-video.mp4') }}" type="video/mp4">
        </video>

        <div class="container">
          <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
            <div class="row align-items-center">
              <div class="col-xl-4">
                <div
                  class="d-flex align-items-center gap-4"
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <img
                    src="{{ asset('assets/images/svgs/primary-leaf.svg') }}"
                    alt=""
                    class="img-fluid animate-spin"
                  />
                  <p class="mb-0 text-white fs-5 text-opacity-70">
                    We create
                    <span class="text-primary">high-performing</span> digital
                    designs that elevate brands and enhance conversions.
                  </p>
                </div>
              </div>
            </div>
            <div
              class="d-flex align-items-end gap-3"
              data-aos="fade-up"
              data-aos-delay="200"
              data-aos-duration="1000"
            >
              <h1 class="mb-0 fs-16 text-white lh-1">VipDigitalHub</h1>
              <a
                href="javascript:void(0)"
                class="p-1 ps-7 bg-primary rounded-pill"
              >
                <span
                  class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center"
                >
                  <iconify-icon
                    icon="lucide:arrow-up-right"
                    class="fs-8 text-dark"
                  ></iconify-icon>
                </span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--  Stats & Facts Section -->
      <section
        class="stats-facts py-5 py-lg-11 py-xl-12 position-relative overflow-hidden"
      >
      
        <div class="container">
          <div class="row gap-7 gap-xl-0">
            <div class="col-xl-4 col-xxl-4">
              <div
                class="d-flex align-items-center gap-7 py-2"
                data-aos="fade-right"
                data-aos-delay="100"
                data-aos-duration="1000"
              >
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"
                  >01</span
                >
                <hr class="border-line" />
                <span class="badge text-bg-dark">Stats & facts</span>
              </div>
            </div>
            <div class="col-xl-8 col-xxl-7">
              <div class="d-flex flex-column gap-9">
                <div class="row">
                  <div class="col-xxl-8">
                    <div
                      class="d-flex flex-column gap-6"
                      data-aos="fade-up"
                      data-aos-delay="100"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0">
                        High quality web design solutions you can trust.
                      </h2>
                      <p class="fs-5 mb-0">
                        We create high-quality, responsive websites that combine stunning design with seamless functionality. Our web design solutions are tailored to your business goals, helping you build a strong online presence and deliver an exceptional user experience.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                    <div
                      class="d-flex flex-column gap-6 pt-9 border-top"
                      data-aos="fade-up"
                      data-aos-delay="200"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0 fs-14">
                        <span class="count" data-target="40">30</span>K+
                      </h2>
                      <p class="mb-0">
                        People who have launched their websites
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                    <div
                      class="d-flex flex-column gap-6 pt-9 border-top"
                      data-aos="fade-up"
                      data-aos-delay="300"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0 fs-14">
                        <span class="count" data-target="138">238</span>+
                      </h2>
                      <p class="mb-0">
                        Experienced professionals ready to assist
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                    <div
                      class="d-flex flex-column gap-6 pt-9 border-top"
                      data-aos="fade-up"
                      data-aos-delay="400"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0 fs-14">
                        <span class="count" data-target="3">1</span>M+
                      </h2>
                      <p class="mb-0">
                        Support through messages and live consultations
                      </p>
                    </div>
                  </div>
                </div>
                <a
                  href="about-us.html"
                  class="btn"
                  data-aos="fade-up"
                  data-aos-delay="500"
                  data-aos-duration="1000"
                >
                  <span class="btn-text">Who we are</span>
                  <iconify-icon
                    icon="lucide:arrow-up-right"
                    class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"
                  ></iconify-icon>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="position-absolute bottom-0 start-0"
          data-aos="zoom-in"
          data-aos-delay="100"
          data-aos-duration="1000"
        >
          <img
            src="{{ asset('assets/images/backgrounds/stats-facts-bg.svg') }}"
            alt=""
            class="img-fluid"
          />
        </div>
      </section>

      <!--  Featured Projects Section -->
      <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="d-flex flex-column gap-5 gap-xl-11">
          <div class="container">
            <div class="row gap-7 gap-xl-0">
              <div class="col-xl-4 col-xxl-4">
                <div
                  class="d-flex align-items-center gap-7 py-2"
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"
                    >02</span
                  >
                  <hr class="border-line" />
                  <span class="badge text-bg-dark">Portfolio</span>
                </div>
              </div>
              <div class="col-xl-8 col-xxl-7">
                <div class="row">
                  <div class="col-xxl-8">
                    <div
                      class="d-flex flex-column gap-6"
                      data-aos="fade-up"
                      data-aos-delay="100"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0">Featured projects</h2>
                      <p class="fs-5 mb-0">
                        Explore our featured projects that showcase creativity, innovation, and measurable results. Each project reflects our commitment to delivering high-quality digital solutions tailored to our clients' unique business needs.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured-projects-slider px-3">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="portfolio d-flex flex-column gap-6">
                  <div class="portfolio-img position-relative overflow-hidden">
                    <img
                      src="{{ asset('assets/images/portfolio/portfolio-img-1.jpg')}}"
                      alt=""
                      class="img-fluid"
                    />
                    <div class="portfolio-overlay">
                      <a
                        href="projects-detail.html"
                        class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center"
                      >
                        <iconify-icon
                          icon="lucide:arrow-up-right"
                          class="fs-8 text-dark"
                        ></iconify-icon>
                      </a>
                    </div>
                  </div>
                  <div class="portfolio-details d-flex flex-column gap-3">
                    <h3 class="mb-0">E-Commerce Growth Campaign</h3>
                    <div class="hstack gap-2">
                      <span class="badge text-dark border">UX Strategy</span>
                      <span class="badge text-dark border">UI Design</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="portfolio d-flex flex-column gap-6">
                  <div class="portfolio-img position-relative overflow-hidden">
                    <img
                      src="{{ asset('assets/images/portfolio/portfolio-img-2.jpg') }}"
                      alt=""
                      class="img-fluid"
                    />
                    <div class="portfolio-overlay">
                      <a
                        href="projects-detail.html"
                        class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center"
                      >
                        <iconify-icon
                          icon="lucide:arrow-up-right"
                          class="fs-8 text-dark"
                        ></iconify-icon>
                      </a>
                    </div>
                  </div>
                  <div class="portfolio-details d-flex flex-column gap-3">
                    <h3 class="mb-0">Local Business SEO Optimization</h3>
                    <div class="hstack gap-2">
                      <span class="badge text-dark border"
                        >Web development</span
                      >
                      <span class="badge text-dark border">Digital design</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="portfolio d-flex flex-column gap-6">
                  <div class="portfolio-img position-relative overflow-hidden">
                    <img
                      src="{{ asset('assets/images/portfolio/portfolio-img-3.jpg') }}"
                      alt=""
                      class="img-fluid"
                    />
                    <div class="portfolio-overlay">
                      <a
                        href="projects-detail.html"
                        class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center"
                      >
                        <iconify-icon
                          icon="lucide:arrow-up-right"
                          class="fs-8 text-dark"
                        ></iconify-icon>
                      </a>
                    </div>
                  </div>
                  <div class="portfolio-details d-flex flex-column gap-3">
                    <h3 class="mb-0">Social Media Brand Awareness</h3>
                    <div class="hstack gap-2">
                      <span class="badge text-dark border">UI/UX design</span>
                      <span class="badge text-dark border"
                        >Web development</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="portfolio d-flex flex-column gap-6">
                  <div class="portfolio-img position-relative overflow-hidden">
                    <img
                      src="{{ asset('assets/images/portfolio/portfolio-img-4.jpg') }}"
                      alt=""
                      class="img-fluid"
                    />
                    <div class="portfolio-overlay">
                      <a
                        href="projects-detail.html"
                        class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center"
                      >
                        <iconify-icon
                          icon="lucide:arrow-up-right"
                          class="fs-8 text-dark"
                        ></iconify-icon>
                      </a>
                    </div>
                  </div>
                  <div class="portfolio-details d-flex flex-column gap-3">
                    <h3 class="mb-0">Google Ads Lead Generation</h3>
                    <div class="hstack gap-2">
                      <span class="badge text-dark border">Brand identity</span>
                      <span class="badge text-dark border">Digital design</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="portfolio d-flex flex-column gap-6">
                  <div class="portfolio-img position-relative overflow-hidden">
                    <img
                      src="{{ asset('assets/images/portfolio/portfolio-img-5.jpg') }}"
                      alt=""
                      class="img-fluid"
                    />
                    <div class="portfolio-overlay">
                      <a
                        href="projects-detail.html"
                        class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center"
                      >
                        <iconify-icon
                          icon="lucide:arrow-up-right"
                          class="fs-8 text-dark"
                        ></iconify-icon>
                      </a>
                    </div>
                  </div>
                  <div class="portfolio-details d-flex flex-column gap-3">
                    <h3 class="mb-0">Real Estate Digital Marketing</h3>
                    <div class="hstack gap-2">
                      <span class="badge text-dark border">Photography</span>
                      <span class="badge text-dark border">Studio</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="portfolio d-flex flex-column gap-6">
                  <div class="portfolio-img position-relative overflow-hidden">
                    <img
                      src="{{ asset('assets/images/portfolio/portfolio-img-6.jpg') }}"
                      alt=""
                      class="img-fluid"
                    />
                    <div class="portfolio-overlay">
                      <a
                        href="projects-detail.html"
                        class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center"
                      >
                        <iconify-icon
                          icon="lucide:arrow-up-right"
                          class="fs-8 text-dark"
                        ></iconify-icon>
                      </a>
                    </div>
                  </div>
                  <div class="portfolio-details d-flex flex-column gap-3">
                    <h3 class="mb-0">Healthcare Marketing Strategy</h3>
                    <div class="hstack gap-2">
                      <span class="badge text-dark border">Digital design</span>
                      <span class="badge text-dark border"
                        >Web development</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="services py-5 py-lg-11 py-xl-12" id="services">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-8">
      
      <div class="row mb-3">
        <div class="col-100 ps-lg-3 ps-xl-5">
          <div class="d-flex align-items-center gap-3 mb-3" data-aos="fade-right" data-aos-duration="1000">
            <span class="d-inline-flex align-items-center justify-content-center text-white rounded-circle fw-semibold fs-7 shadow-sm" 
                  style="width: 32px; height: 32px; background-color: #e67e22;">
              03
            </span>
            <hr class="border-dark opacity-25 my-0" style="width: 40px;" />
            <span class="badge px-3 py-2 rounded-pill text-white fw-medium fs-8" 
                  style="background-color: #2c1b18; letter-spacing: 0.05em;">
              Services
            </span>
          </div>
          
          <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <h2 class="display-5 fw-bold mb-0" style="color: #2c1b18; letter-spacing: -0.02em;">What we do</h2>
          </div>
        </div>
      </div>

      <div class="services-scroll-layout pt-2">
        <div class="d-flex flex-column gap-5 gap-lg-12">
          
          <div class="row g-5 service-scroll-row border-top border-dark border-opacity-10 pt-4 pt-lg-5">
            <div class="col-lg-5 ps-lg-3 ps-xl-5 service-title-col">
              <h3 class="display-4 fw-bold service-sticky-title">Web Development</h3>
            </div>
            <div class="col-lg-7">
              <p class="text-dark text-opacity-75 mb-4 fs-5 fw-normal">
                We build fast, responsive, and user-friendly websites tailored to your business needs. Our solutions ensure a seamless user experience and strong online presence.
              </p>
              <div class="atlas-img-wrapper">
                <img src="{{ asset('assets/images/services/services-img-1.jpg') }}" alt="Web Development" class="img-fluid w-100 object-fit-cover rounded-4" style="height: 420px;" />
              </div>
            </div>
          </div>

          <div class="row g-5 service-scroll-row border-top border-dark border-opacity-10 pt-4 pt-lg-5">
            <div class="col-lg-5 ps-lg-3 ps-xl-5 service-title-col">
              <h3 class="display-4 fw-bold service-sticky-title">Website Designing</h3>
            </div>
            <div class="col-lg-7">
              <p class="text-dark text-opacity-75 mb-4 fs-5 fw-normal">
                Creating modern, visually appealing, and user-friendly website designs that leave a lasting impression and match premium industrial standards.
              </p>
              <div class="atlas-img-wrapper">
                <img src="{{ asset('assets/images/services/services-img-3.jpg') }}" alt="Website Design" class="img-fluid w-100 object-fit-cover rounded-4" style="height: 420px;" />
              </div>
            </div>
          </div>

          <div class="row g-5 service-scroll-row border-top border-dark border-opacity-10 pt-4 pt-lg-5">
            <div class="col-lg-5 ps-lg-3 ps-xl-5 service-title-col">
              <h3 class="display-4 fw-bold service-sticky-title">Android Apps</h3>
            </div>
            <div class="col-lg-7">
              <p class="text-dark text-opacity-75 mb-4 fs-5 fw-normal">
                Creating custom mobile applications designed to perform flawlessly across all Android devices, expanding your business reach effortlessly.
              </p>
              <div class="atlas-img-wrapper">
                <img src="{{ asset('assets/images/services/services-img-2.jpg') }}" alt="Android Apps" class="img-fluid w-100 object-fit-cover rounded-4" style="height: 420px;" />
              </div>
            </div>
          </div>

          <div class="row g-5 service-scroll-row border-top border-dark border-opacity-10 pt-4 pt-lg-5">
            <div class="col-lg-5 ps-lg-3 ps-xl-5 service-title-col">
              <h3 class="display-4 fw-bold service-sticky-title">Graphics Design</h3>
            </div>
            <div class="col-lg-7">
              <p class="text-dark text-opacity-75 mb-4 fs-5 fw-normal">
                Designing creative and impactful visuals that strengthen your brand identity, business presentations, and user engagement.
              </p>
              <div class="atlas-img-wrapper">
                <img src="{{ asset('assets/images/services/services-img-4.jpg') }}" alt="Graphics Design" class="img-fluid w-100 object-fit-cover rounded-4" style="height: 420px;" />
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

      <!--  Why choose us Section -->
      <section class="why-choose-us py-5 py-lg-11 py-xl-12">
        <div class="container">
          <div class="row justify-content-between gap-5 gap-xl-0">
            <div class="col-xl-3 col-xxl-3">
              <div class="d-flex flex-column gap-7">
                <div
                  class="d-flex align-items-center gap-7 py-2"
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"
                    >04</span
                  >
                  <hr class="border-line" />
                  <span class="badge text-bg-dark">About us</span>
                </div>
                <h2
                  class="mb-0"
                  data-aos="fade-right"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                >
                  Why choose us
                </h2>
                <p
                  class="mb-0 fs-5"
                  data-aos="fade-right"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                >
                  We deliver customized digital marketing solutions that help businesses grow, generate leads, and build a strong online presence. Our focus on quality, innovation, and measurable results sets us apart.
                </p>
              </div>
            </div>
            <div class="col-xl-9 col-xxl-8">
              <div class="row">
                <div class="col-lg-4 mb-7 mb-lg-0">
                  <div
                    class="card position-relative overflow-hidden bg-primary h-100"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                  >
                    <div
                      class="card-body d-flex flex-column justify-content-between"
                    >
                      <div
                        class="d-flex flex-column gap-3 position-relative z-1"
                      >
                        <ul class="list-unstyled mb-0 hstack gap-1">
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-dark"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-dark"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-dark"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-dark"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-line-duotone"
                                class="fs-6 text-dark"
                              ></iconify-icon
                            ></a>
                          </li>
                        </ul>
                        <p class="mb-0 fs-6 text-dark">
                          The team exceeded our expectations with a stunning
                          brand identity.
                        </p>
                      </div>
                      <div class="position-relative z-1">
                        <div class="pb-6 border-bottom">
                          <h2 class="mb-0">98.6%</h2>
                          <p class="mb-0">Customer satisfaction</p>
                        </div>
                        <div class="hstack gap-6 pt-6">
                          <img
                            src="{{ asset('assets/images/profile/avatar-1.png') }}"
                            alt=""
                            class="img-fluid rounded-circle overflow-hidden flex-shrink-0"
                            width="64"
                            height="64"
                          />
                          <div>
                            <h5 class="mb-0">Rajesh Sharma</h5>
                            <p class="mb-0">State Bank of India</p>
                          </div>
                        </div>
                      </div>
                      <div class="position-absolute bottom-0 end-0">
                        <img
                          src="{{ asset('assets/images/backgrounds/customer-satisfaction-bg.svg') }}"
                          alt=""
                          class="img-fluid"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-7 mb-lg-0">
                  <div
                    class="d-flex flex-column gap-7"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="1000"
                  >
                    <div class="position-relative">
                      <img
                        src="{{ asset('assets/images/services/services-img-2.jpg') }}"
                        alt=""
                        class="img-fluid w-100"
                      />
                    </div>

                    <div class="card bg-dark">
                      <div class="card-body d-flex flex-column gap-7">
                        <div>
                          <h2 class="mb-0 text-white">500+</h2>
                          <p class="mb-0 text-white text-opacity-70">
                            Successful projects completed
                          </p>
                        </div>
                        <ul class="d-flex align-items-center mb-0">
                          <li>
                            <a href="javascript:void(0)">
                              <img
                                src="{{ asset('assets/images/profile/user-1.jpg') }}"
                                width="44"
                                height="44"
                                class="rounded-circle border border-2 border-dark"
                                alt="user-1"
                              />
                            </a>
                          </li>
                          <li class="ms-n2">
                            <a href="javascript:void(0)">
                              <img
                                src="{{ asset('assets/images/profile/user-2.jpg') }}"
                                width="44"
                                height="44"
                                class="rounded-circle border border-2 border-dark"
                                alt="user-2"
                              />
                            </a>
                          </li>
                          <li class="ms-n2">
                            <a href="javascript:void(0)">
                              <img
                                src="{{ asset('assets/images/profile/user-3.jpg') }}"
                                width="44"
                                height="44"
                                class="rounded-circle border border-2 border-dark"
                                alt="user-3"
                              />
                            </a>
                          </li>
                          <li class="ms-n2">
                            <a href="javascript:void(0)">
                              <img
                                src="{{ asset('assets/images/profile/user-4.jpg') }}"
                                width="44"
                                height="44"
                                class="rounded-circle border border-2 border-dark"
                                alt="user-4"
                              />
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-7 mb-lg-0">
                  <div
                    class="card border h-100 position-relative overflow-hidden"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-aos-duration="1000"
                  >
                    <span
                      class="border rounded-circle round-490 d-block position-absolute top-0 start-50 translate-middle"
                    ></span>
                    <div
                      class="card-body d-flex flex-column justify-content-between"
                    >
                      <div>
                        <h2 class="mb-0">238+</h2>
                        <p class="mb-0 text-dark">Brands served worldwide</p>
                      </div>
                      <div class="d-flex flex-column gap-3">
                        <a href="index.html" class="logo-dark">
                          <img
                            src="{{ asset('assets/images/logos/logo-dark.svg') }}"
                            alt="logo"
                            class="img-fluid"
                          />
                        </a>
                        <p class="mb-0 fs-5 text-dark">
                          Our global reach allows us to create unique,
                          culturally relevant designs for businesses across
                          different industries.
                        </p>
                      </div>
                    </div>
                    <span
                      class="border rounded-circle round-490 d-block position-absolute top-100 start-50 translate-middle"
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--  Testimonial Section -->
      <section class="testimonial py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="container">
          <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="row gap-7 gap-xl-0">
              <div class="col-xl-4 col-xxl-4">
                <div
                  class="d-flex align-items-center gap-7 py-2"
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"
                    >05</span
                  >
                  <hr class="border-line bg-white" />
                  <span class="badge text-bg-dark">Testimonial</span>
                </div>
              </div>
              <div class="col-xl-8 col-xxl-7">
                <div class="row">
                  <div class="col-xxl-8">
                    <div
                      class="d-flex flex-column gap-6"
                      data-aos="fade-up"
                      data-aos-delay="100"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0">Stories from clients</h2>
                      <p class="fs-5 mb-0 text-opacity-70">
                        Hear from our satisfied clients who have achieved growth, increased visibility, and real business results through our digital marketing solutions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row gap-7 gap-lg-0">
              <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                <div
                  class="card bg-primary w-100"
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <div
                    class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between"
                  >
                    <div class="d-flex flex-column gap-4">
                      <p class="mb-0">Hear from them</p>
                      <h4 class="mb-0">
                        Our website redesign was flawless. They understood our
                        vision perfectly!
                      </h4>
                    </div>
                    <div class="hstack gap-3">
                      <img
                        src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}"
                        alt=""
                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0"
                        width="60"
                        height="60"
                      />
                      <div>
                        <h5 class="mb-1 fw-normal">Vijay Pandey</h5>
                        <p class="mb-0">TechNova Solutions</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xl-6 d-flex align-items-stretch">
                <div
                  class="card bg-dark w-100"
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                >
                  <div
                    class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between"
                  >
                    <div class="d-flex flex-column gap-4">
                      <p class="mb-0 text-white text-opacity-70">
                        Hear from them
                      </p>
                      <h4 class="mb-0 text-white pe-xl-2">
                        From concept to execution, they delivered outstanding
                        results. Highly recommend their expertise!
                      </h4>
                      <div class="hstack gap-2">
                        <ul class="list-unstyled mb-0 hstack gap-1">
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-white"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-white"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-white"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-bold"
                                class="fs-6 text-white"
                              ></iconify-icon
                            ></a>
                          </li>
                          <li>
                            <a class="hstack" href="javascript:void(0)"
                              ><iconify-icon
                                icon="solar:star-line-duotone"
                                class="fs-6 text-white"
                              ></iconify-icon
                            ></a>
                          </li>
                        </ul>
                        <h6 class="mb-0 text-white fw-medium">4.0</h6>
                      </div>
                    </div>
                    <div
                      class="d-flex align-items-center justify-content-between"
                    >
                      <div class="hstack gap-3">
                        <img
                          src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}"
                          alt=""
                          class="img-fluid rounded-circle overflow-hidden flex-shrink-0"
                          width="60"
                          height="60"
                        />
                        <div>
                          <h5 class="mb-1 fw-normal text-white">Priya Verma</h5>
                          <p class="mb-0 text-white text-opacity-70">
                            GrowthSphere Technologies
                          </p>
                        </div>
                      </div>
                      <span
                        ><img
                          src="{{ asset('assets/images/testimonial/quete.svg') }}"
                          alt="quete"
                          class="img-fluid flex-shrink-0"
                      /></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                <div
                  class="card w-100"
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                >
                  <div
                    class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between"
                  >
                    <div class="d-flex flex-column gap-4">
                      <p class="mb-0">Hear from them</p>
                      <h4 class="mb-0">
                        Super smooth process with incredible results. highly
                        recommend!
                      </h4>
                    </div>
                    <div class="hstack gap-3">
                      <img
                        src="{{ asset('assets/images/testimonial/testimonial-3.jpg') }}"
                        alt=""
                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0"
                        width="60"
                        height="60"
                      />
                      <div>
                        <h5 class="mb-1 fw-normal">Shikha Patel</h5>
                        <p class="mb-0">Digital Edge Media</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--  Meet our team Section -->
      <section class="meet-our-team py-5 py-lg-11 py-xl-12">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-11">
      
      <div class="row gap-7 gap-xl-0 mb-5">
        <div class="col-xl-4 col-xxl-4">
          <div class="d-flex align-items-center gap-3 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <span class="round-36 flex-shrink-0 text-white rounded-circle bg-dark hstack justify-content-center fw-bold">06</span>
            <hr class="border-line bg-dark w-25 m-0" />
            <span class="badge text-bg-dark px-3 py-2 rounded-pill">The Team</span>
          </div>
        </div>
        <div class="col-xl-8 col-xxl-7">
          <div class="row">
            <div class="col-xxl-8">
              <div class="d-flex flex-column gap-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-0 fw-bold display-5 text-dark">Meet Our Team</h2>
                <p class="fs-5 mb-0 text-muted">
                  Meet the creative minds and digital experts dedicated to delivering innovative strategies and exceptional results for your business growth.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-4">
        
        <div class="col-md-6 col-xl-3">
          <div class="modern-team-card" data-aos="fade-up" data-aos-delay="100">
            <div class="card-img-wrapper">
              <img src="{{ asset('assets/images/team/team-img-1.jpg') }}" alt="Aarav Sharma" class="team-img" />
              <div class="social-glass-overlay">
                <div class="social-links">
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-twitter.svg') }}" alt="twitter" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-be.svg') }}" alt="behance" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-linkedin.svg') }}" alt="linkedin" /></a>
                </div>
              </div>
            </div>
            <div class="card-info-box">
              <h4 class="member-name">Aarav Sharma</h4>
              <p class="member-role">Project Manager</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3">
          <div class="modern-team-card" data-aos="fade-up" data-aos-delay="200">
            <div class="card-img-wrapper">
              <img src="{{ asset('assets/images/team/team-img-2.jpg') }}" alt="Kiran Gupta" class="team-img" />
              <div class="social-glass-overlay">
                <div class="social-links">
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-twitter.svg') }}" alt="twitter" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-be.svg') }}" alt="behance" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-linkedin.svg') }}" alt="linkedin" /></a>
                </div>
              </div>
            </div>
            <div class="card-info-box">
              <h4 class="member-name">Kiran Gupta</h4>
              <p class="member-role">Marketing Strategist</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3">
          <div class="modern-team-card" data-aos="fade-up" data-aos-delay="300">
            <div class="card-img-wrapper">
              <img src="{{ asset('assets/images/team/team-img-3.jpg') }}" alt="Karan Patel" class="team-img" />
              <div class="social-glass-overlay">
                <div class="social-links">
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-twitter.svg') }}" alt="twitter" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-be.svg') }}" alt="behance" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-linkedin.svg') }}" alt="linkedin" /></a>
                </div>
              </div>
            </div>
            <div class="card-info-box">
              <h4 class="member-name">Karan Patel</h4>
              <p class="member-role">Lead Designer</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3">
          <div class="modern-team-card" data-aos="fade-up" data-aos-delay="400">
            <div class="card-img-wrapper">
              <img src="{{ asset('assets/images/team/team-img-4.jpg') }}" alt="Ananya Singh" class="team-img" />
              <div class="social-glass-overlay">
                <div class="social-links">
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-twitter.svg') }}" alt="twitter" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-be.svg') }}" alt="behance" /></a>
                  <a href="#!" class="social-btn"><img src="{{ asset('assets/images/svgs/icon-linkedin.svg') }}" alt="linkedin" /></a>
                </div>
              </div>
            </div>
            <div class="card-info-box">
              <h4 class="member-name">Ananya Singh</h4>
              <p class="member-role">UX/UI Developer</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

      <!--  Pricing Section -->
  <div class="pricing-tabs-wrapper">
    <div class="pricing-tabs-container">
        <a href="/pricing/web-development" class="pricing-tab-btn active">
            Affordable pricing of Web Development
        </a>
        <a href="/pricing/digital-marketing" class="pricing-tab-btn">
            Affordable pricing of Digital Marketing
        </a>
        <a href="/pricing/android-development" class="pricing-tab-btn">
            Affordable pricing of Android Development
        </a>
    </div>
</div>

      <!--  FAQ Section -->
      <section class="faq py-5 py-lg-11 py-xl-12">
        <div class="container">
          <div class="d-flex flex-column gap-5 gap-xl-11" style="background:white;">
            <div class="row gap-7 gap-xl-0" style="padding:45px;">
              <div class="col-xl-4 col-xxl-4">
                <div
                  class="d-flex align-items-center gap-7 py-2"
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"
                    >08</span
                  >
                  <hr class="border-line bg-white" />
                  <span class="badge text-bg-dark">FAQs</span>
                </div>
              </div>
              <div class="col-xl-8 col-xxl-7">
                <div class="row">
                  <div class="col-xxl-9">
                    <div
                      class="d-flex flex-column gap-6"
                      data-aos="fade-up"
                      data-aos-delay="100"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0">Frequently asked questions</h2>
                      <p class="fs-5 mb-0 text-opacity-70">
                        Discover how we tailor our solutions to meet unique
                        needs, delivering impactful strategies, personalized
                        branding, and exceptional customer experiences.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-end" style="background:white;">
              <div class="col-xl-8">
                <div
                  class="accordion accordion-flush"
                  id="accordionFlushExample"
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                >
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed fs-8 fw-bold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne"
                        aria-expanded="false"
                        aria-controls="flush-collapseOne"
                      >
                        What services does your agency offer?
                      </button>
                    </h2>
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body pt-0 fs-5 text-dark">
                        Yes, we provide post-launch support to ensure smooth
                        implementation and offer ongoing maintenance packages
                        for clients needing regular updates or technical
                        assistance.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed fs-8 fw-bold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo"
                        aria-expanded="false"
                        aria-controls="flush-collapseTwo"
                      >
                        How long does a typical project take?
                      </button>
                    </h2>
                    <div
                      id="flush-collapseTwo"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body pt-0 fs-5 text-dark">
                        Yes, we provide post-launch support to ensure smooth
                        implementation and offer ongoing maintenance packages
                        for clients needing regular updates or technical
                        assistance.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed fs-8 fw-bold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree"
                        aria-expanded="false"
                        aria-controls="flush-collapseThree"
                      >
                        Do you offer custom designs, or do you use templates?
                      </button>
                    </h2>
                    <div
                      id="flush-collapseThree"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body pt-0 fs-5 text-dark">
                        Yes, we provide post-launch support to ensure smooth
                        implementation and offer ongoing maintenance packages
                        for clients needing regular updates or technical
                        assistance.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed fs-8 fw-bold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour"
                        aria-expanded="false"
                        aria-controls="flush-collapseFour"
                      >
                        What’s the cost of a project?
                      </button>
                    </h2>
                    <div
                      id="flush-collapseFour"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body pt-0 fs-5 text-dark">
                        Yes, we provide post-launch support to ensure smooth
                        implementation and offer ongoing maintenance packages
                        for clients needing regular updates or technical
                        assistance.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-bottom">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed fs-8 fw-bold"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive"
                        aria-expanded="false"
                        aria-controls="flush-collapseFive"
                      >
                        Do you provide ongoing support after project completion?
                      </button>
                    </h2>
                    <div
                      id="flush-collapseFive"
                      class="accordion-collapse collapse"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div class="accordion-body pt-0 fs-5 text-dark">
                        Yes, we provide post-launch support to ensure smooth
                        implementation and offer ongoing maintenance packages
                        for clients needing regular updates or technical
                        assistance.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--  Recent news Section -->
      <section class="Recent-news bg-light-gray py-5 py-lg-11 py-xl-12">
        <div class="container">
          <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="row gap-7 gap-xl-0">
              <div class="col-xl-4 col-xxl-4">
                <div
                  class="d-flex align-items-center gap-7 py-2"
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"
                    >09</span
                  >
                  <hr class="border-line bg-white" />
                  <span class="badge text-bg-dark">Resources</span>
                </div>
              </div>
              <div class="col-xl-8 col-xxl-7">
                <div class="row">
                  <div class="col-xxl-8">
                    <div
                      class="d-flex flex-column gap-6"
                      data-aos="fade-up"
                      data-aos-delay="100"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0">Recent news</h2>
                      <p class="fs-5 mb-0 text-opacity-70">
                        Stay updated with the latest digital marketing trends, industry insights, and innovative strategies to help your business stay ahead of the competition.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 mb-7 mb-xl-0">
                <div
                  class="resources d-flex flex-column gap-6"
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <a
                    href="blog-detail.html"
                    class="resources-img resources-img-first position-relative overflow-hidden d-block"
                  >
                    <img
                      src="{{ asset('assets/images/resources/resources-1.jpg')}}"
                      alt="resources"
                      class="img-fluid"
                    />
                  </a>
                  <div class="resources-details">
                    <p class="mb-0">Dec 24, 2026</p>
                    <h4 class="mb-0">A campaign that connects</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                <div
                  class="resources d-flex flex-column gap-6"
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                >
                  <a
                    href="blog-detail.html"
                    class="resources-img position-relative overflow-hidden d-block"
                  >
                    <img
                      src="{{ asset('assets/images/resources/resources-2.jpg')}}"
                      alt="resources"
                      class="img-fluid"
                    />
                  </a>
                  <div class="resources-details">
                    <p class="mb-0">Dec 24, 2026</p>
                    <h4 class="mb-0">
                      An breaking boundaries our latest brand redesign
                    </h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                <div
                  class="resources d-flex flex-column gap-6"
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1000"
                >
                  <a
                    href="blog-detail.html"
                    class="resources-img position-relative overflow-hidden d-block"
                  >
                    <img
                      src="{{ asset('assets/images/resources/resources-3.jpg') }}"
                      alt="resources"
                      class="img-fluid"
                    />
                  </a>
                  <div class="resources-details">
                    <p class="mb-0">Dec 24, 2026</p>
                    <h4 class="mb-0">Recognized for design</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Start: Instagram Reels Section (VIP Digital Hub Theme) -->
<section class="vip-reels-section">
    <div class="vip-reels-container">
        
        <!-- Header Text -->
        <div class="vip-reels-header">
            <h2>Watch Our Latest Reels</h2>
            <p>Follow us on Instagram for daily digital marketing tips, strategies & behind-the-scenes content.</p>
        </div>
        
        <!-- Reels Grid Rows -->
        <div class="vip-reels-grid">
            
            <!-- Reel Card 1 (Chalu Video Embed) -->
            <div class="vip-reel-card">
                <div class="vip-reel-video-container">
                    <iframe src="https://www.instagram.com/reel/C76M0LByvAn/embed" 
                            allowtransparency="true" 
                            allowfullscreen="true" 
                            scrolling="no" 
                            frameborder="0">
                    </iframe>
                </div>
            </div>
            
            <!-- Reel Card 2 (Chalu Video Embed) -->
            <div class="vip-reel-card">
                <div class="vip-reel-video-container">
                    <iframe src="https://www.instagram.com/reel/C8Bv8gty9xG/embed" 
                            allowtransparency="true" 
                            allowfullscreen="true" 
                            scrolling="no" 
                            frameborder="0">
                    </iframe>
                </div>
            </div>
            
            <!-- Reel Card 3 (Chalu Video Embed) -->
            <div class="vip-reel-card">
                <div class="vip-reel-video-container">
                    <iframe src="https://www.instagram.com/reel/C57r893S0pG/embed" 
                            allowtransparency="true" 
                            allowfullscreen="true" 
                            scrolling="no" 
                            frameborder="0">
                    </iframe>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End: Instagram Reels Section -->

      <!--  Get in touch Section -->
      <section class="get-in-touch py-5 py-lg-11 py-xl-12">
        <div class="container">
          <div class="d-flex flex-column gap-5 gap-xl-10">
            <div class="row gap-7 gap-xl-0">
              <div class="col-xl-4 col-xxl-4">
                <div
                  class="d-flex align-items-center gap-7 py-2"
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"
                    >10</span
                  >
                  <hr class="border-line bg-white" />
                  <span class="badge text-bg-dark">Contact us</span>
                </div>
              </div>
              <div class="col-xl-8 col-xxl-7">
                <div class="row">
                  <div class="col-xxl-8">
                    <div
                      class="d-flex flex-column gap-6"
                      data-aos="fade-up"
                      data-aos-delay="100"
                      data-aos-duration="1000"
                    >
                      <h2 class="mb-0">Get in touch</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between gap-7 gap-xl-0">
              <div class="col-xl-3">
                <p
                  class="mb-0 fs-5"
                  data-aos="fade-right"
                  data-aos-delay="100"
                  data-aos-duration="1000"
                >
                  Let’s collaborate and create something amazing! Tell me about
                  your project—I’m all ears.
                </p>
              </div>
              <div class="col-xl-8">
                <form
                  class="d-flex flex-column gap-7"
                  data-aos="fade-up"
                  data-aos-delay="200"
                  data-aos-duration="1000"
                >
                  <div>
                    <input
                      type="text"
                      class="form-control border-bottom border-dark"
                      id="formGroupExampleInput"
                      placeholder="Name"
                    />
                  </div>
                  <div>
                    <input
                      type="email"
                      class="form-control border-bottom border-dark"
                      id="exampleInputEmail1"
                      placeholder="Email"
                      aria-describedby="emailHelp"
                    />
                  </div>
                  <div>
                    <textarea
                      class="form-control border-bottom border-dark"
                      id="exampleFormControlTextarea1"
                      placeholder="Tell us about your project"
                      rows="3"
                    ></textarea>
                  </div>
                  <button
                    type="submit"
                    class="btn w-100 justify-content-center"
                  >
                    <span class="btn-text">Submit message</span>
                    <iconify-icon
                      icon="lucide:arrow-up-right"
                      class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"
                    ></iconify-icon>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

@include('footer')


    <script>



document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function(){
        var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        myModal.show();
    }, 5); // 0.5 sec delay (smooth feel)
});


document.addEventListener("DOMContentLoaded", function () {
  const blocks = document.querySelectorAll(".service-scroll-block");
  const dynamicTitle = document.getElementById("dynamicServiceTitle");

  if (!dynamicTitle || blocks.length === 0) return;

  const observerOptions = {
    root: null,
    rootMargin: "-20% 0px -60% 0px", // Screen ke center area me aate hi trigger hoga
    threshold: 0
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const newTitle = entry.target.getAttribute("data-service-title");
        
        if (dynamicTitle.textContent.trim() !== newTitle) {
          // Smooth fade transition effect
          dynamicTitle.classList.add("title-fade-out");
          
          setTimeout(() => {
            dynamicTitle.textContent = newTitle;
            dynamicTitle.classList.remove("title-fade-out");
          }, 300);
        }
      }
    });
  }, observerOptions);

  blocks.forEach((block) => observer.observe(block));
});
</script>
