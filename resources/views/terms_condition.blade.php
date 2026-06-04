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
            <h1 class="mb-0 fs-15 text-white lh-1">Terms & Conditions</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--  Terms & Conditions Section -->
    <section class="terms-conditions py-5 py-lg-11">
      <div class="container">
        <p class="fs-5 text-dark fw-medium">By accessing and using our website, you agree to comply with these Terms & Conditions. All content, services, and materials provided on this website are for informational and business purposes only. Users are responsible for ensuring that any information they provide is accurate and up to date. Unauthorized use, reproduction, or distribution of website content is strictly prohibited. We reserve the right to modify our services, content, or terms at any time without prior notice. Continued use of the website constitutes acceptance of any updated terms.
        </p>
        
        <h4 class="my-4">1. Definitions</h4>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">1.1 “Authorized Devices”</span> Devices approved for accessing and using the Company's services, platforms, or applications..</p>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">1.2 “Content”</span> Any text, images, graphics, videos, documents, software, or other materials available through our website or services.</p>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">1.3 “Documentation”</span> User guides, manuals, instructions, policies, and other supporting materials provided by the Company.</p>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">1.4 “Services”</span> All digital marketing, web development, web design, SEO, branding, and related solutions offered by VIP Digital Hub</p>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">1.5 “Order Form”</span> Any proposal, quotation, agreement, invoice, or online form used to purchase or request services from the Company.</p>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">1.6 “Packages”or“Components”</span>Packages or Components refer to the individual services, features, tools, or bundled solutions offered by VIP Digital Hub. These may include web design, web development, digital marketing, SEO, branding, content creation, and other related services. Each package or component may have its own scope, deliverables, pricing, and service terms.</p>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">1.7 “User”</span> Any individual, company, organization, or entity that accesses, uses, or interacts with the Company's website, products, or services       </p>



        <h4 class="my-4">2. License and use rights</h4>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">2.1 Services </span> VIP Digital Hub grants users a limited, non-exclusive, and non-transferable right to access and use its services solely for lawful business or personal purposes. Users may not copy, modify, distribute, resell, or misuse any part of the services without prior written permission from the Company.</p>
        <p class="fs-5 text-dark fw-medium"><span class="fw-bold">2.2 Provisioning the Services</span>
          The Company will provide services as outlined in the agreed proposal, package, or order form. While we strive to ensure uninterrupted and high-quality service, we reserve the right to update, modify, suspend, or discontinue any service feature when necessary for maintenance, security, or operational reasons</p>
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