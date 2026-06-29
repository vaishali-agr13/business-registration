<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VIP Digital Hub</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/viphublogo.png" />
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
  <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

<body>

  <!-- Header -->
  <header class="header border-4 border-primary border-top position-fixed start-0 top-0 w-100">
    <div class="container">
      <div class="header-wrapper d-flex align-items-center justify-content-between">
        <div class="logo">
          <a href="/" class="logo-white">
            <img src="../assets/images/logos/logo-white.svg" alt="logo" class="img-fluid">
          </a>
          <a href="/" class="logo-dark">
            <img src="../assets/images/logos/logo-dark.svg" alt="logo" class="img-fluid">
          </a>
        </div>
        <div class="d-flex align-items-center gap-4">

          <div class="btn-group">
            <button
              class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle"
              type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
              <iconify-icon icon="solar:hamburger-menu-line-duotone" class="menu-icon fs-8 text-dark"></iconify-icon>
            </button>
            <ul class="dropdown-menu dropdown-menu-end p-4">
              <div class="d-flex flex-column gap-6">
                <div class="hstack justify-content-between border-bottom pb-6">
                  <p class="mb-0 fs-5 text-dark">Menu</p>
                  <button type="button" class="btn-close opacity-75" aria-label="Close"></button>
                </div>
                <div class="d-flex flex-column gap-3">
                  <ul class="header-menu list-unstyled mb-0 d-flex flex-column gap-2">
                    <li class="header-item">
                      <a href="/" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Home</a>
                    </li>
                    <li class="header-item">
                      <a href="/about-us" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">About</a>
                    </li>
                    <li class="header-item">
                      <a href="/projects" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Projects</a>
                    </li>
                    <li class="header-item">
                      <a href="/blog" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Blog</a>
                    </li>
                    <li class="header-item">
                      <a href="#" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Services</a>
                    </li>
                    <li class="header-item">
                      <a href="/contact" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Contact</a>
                    </li>
                    <li class="header-item">
                      <a href="index.html" class="header-link hstack gap-2 fs-7 fw-bold text-dark"><img
                          src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                          class="img-fluid animate-spin">Docs</a>
                    </li>
                    <li class="header-item">
                        <a
                          href="/book-appointment"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Appointment Booking</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="/register-business"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Business Registration</a
                        >
                      </li>

                      <li class="header-item">
                        <a
                          href="#"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Plan</a
                        >
                      </li>
                  </ul>
                  <div class="hstack gap-3">
                    <!-- <a href="sign-in.html"
                      class="btn btn-outline-light fs-6 bg-white px-3 py-2 text-dark w-50 hstack justify-content-center">Sign
                      In</a>
                    <a href="sign-up.html"
                      class="btn btn-dark text-white fs-6 bg-dark px-3 py-2 w-50 hstack justify-content-center">Sign
                      Up</a> -->
                  </div>
                </div>
                <div>
                  <a class="text-dark" href="tel:+91-7000153244">+91 7000153244</a>
                  <a class="fs-8 text-dark fw-bold" href="mailto:vipdigitalhub@gmail.com">vipdigitalhub@gmail.com</a>
                </div>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--  Page Wrapper -->
  <div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
      style="background-image: url(../assets/images/backgrounds/privacy-policy-banner.jpg);">
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70">Understand the <span class="text-primary">Rules &
                    Guidelines</span>Before Using Our Services</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">Privacy Policy</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--  Privacy Policy Section -->
    <section class="privacy-policy py-5 py-lg-11">
      <div class="container">
        <p class="fs-5 text-dark fw-medium">At VIP Digital Hub, we value your privacy and are committed to protecting your personal information. Any details you share through our website, contact forms, or services are kept secure and used only to provide better support and solutions. We do not sell, trade, or share your personal data with third parties without your consent, except where required by law.
        </p>
        <p class="fs-5 text-dark fw-medium">By signing up for our Services and agreeing to our General Terms and
          Conditions, you consent to the collection, usage, storage, and disclosure of your information as described in
          this Privacy Statement.
        </p>
        <p class="fs-5 text-dark fw-medium">Information collected may include your name, email address, phone number, and business details for communication purposes. We implement industry-standard security measures to safeguard your data. By using our website and services, you agree to the collection and use of information as outlined in this policy. For any privacy-related questions, please feel free to contact our team
        </p>
        <h4 class="my-4">Personal Information Collection</h4>
        <p class="fs-5 text-dark fw-medium">We may collect personal information such as your name, email address, phone number, and business details when you contact us, fill out forms, or use our services. This information helps us provide better support, improve our services, and communicate with you effectively. All collected information is handled securely and used only for legitimate business purposes.
         
        </p>
        <h4 class="my-4">Personal Information You Provide to Us</h4>
        <p class="fs-5 text-dark fw-medium">When you interact with our website or services, you may voluntarily provide information such as your name, email address, phone number, company details, and project requirements
        <p class="fs-5 text-dark fw-medium mb-0">We use this information to respond to inquiries, deliver services, and maintain effective communication. Your information is kept confidential and managed with appropriate security measures.
        </p>
      </div>
    </section>

  </div>

  <footer class="footer bg-dark py-5 py-lg-11 py-xl-12">

    <div class="container">
      <div class="row">
        <div class="col-xl-5 mb-8 mb-xl-0">

          <div class="d-flex flex-column gap-8 pe-xl-5">
            <h2 class="mb-0 text-white">Build something together?</h2>
            <div class="d-flex flex-column gap-2">
              <a href="https://vipdigitalhub.com" target="_blank" class="link-hover hstack gap-3 text-white fs-5">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-7 text-primary"></iconify-icon>
                vipdigitalhub.com
              </a>
              <a href="https://share.google/yflUtzRsx4UmgSMzf" target="_blank"
                class="link-hover hstack gap-3 text-white fs-5">
                <iconify-icon icon="lucide:map-pin" class="fs-7 text-primary"></iconify-icon>
               Front of Petrol Pump, House No. 2, Shravan Kanta, NZM Bypass Road, Estate, Bhopal, Madhya Pradesh 462021
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
          <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
            <li><a class="link-hover fs-5 text-white" href="/">Home</a></li>
            <li><a class="link-hover fs-5 text-white" href="/about-us">About</a></li>
            <li><a class="link-hover fs-5 text-white" id="services" href="#services">Services</a></li>
            <li><a class="link-hover fs-5 text-white" href="/projects">Work</a></li>
            <li><a class="link-hover fs-5 text-white" href="/terms-and-conditions">Terms</a></li>
            <li><a class="link-hover fs-5 text-white" href="/privacy-policy">Privacy Policy</a></li>
            <li><a class="link-hover fs-5 text-white" href="404.html">Error 404</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
          <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
            <li><a class="link-hover fs-5 text-white" href="https://www.facebook.com/vipdigitalhub/">Facebook</a></li>
            <li><a class="link-hover fs-5 text-white" href="https://www.instagram.com/vipdigitalhub/">Instagram</a></li>
            <li><a class="link-hover fs-5 text-white" href="https://x.com/">Twitter</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-xl-3 mb-8 mb-xl-0">
          <p class="mb-0 text-white text-opacity-70 text-md-end">© VIP Digital Hub copyright 2026</p>
        </div>
      </div>
    </div>
  <p class="mb-0 text-white text-opacity-70 text-md-center mt-10">Designed by <a class="text-white" href="https://vipdigitalhub.com/" target="_blank">VIP Digital Hub</a></p>
  </footer>

  <div class="get-template hstack gap-2">
    <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
      id="scrollToTopBtn">
      <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
    </button>
  </div>


  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../assets/libs/aos-master/dist/aos.js"></script>
  <script src="../assets/js/custom.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>