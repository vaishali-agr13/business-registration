<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Vip Digital Hub</title>
    <link
      rel="shortcut icon"
      type="image/png"
      href="{{asset('assets/images/logos/favicon.svg')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('assets/libs/aos-master/dist/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
  </head>

  <body>
    <!-- Header -->
    <header
      class="header position-fixed start-0 top-0 w-100"
    >
      <div class="container">
        <div
          class="header-wrapper d-flex align-items-center justify-content-between"
        >
          <div class="logo">
            <a href="index.html" class="logo-white">
              <img
                src="{{asset('assets/images/logos/logo-white.svg')}}"
                alt="logo"
                class="img-fluid company-logo"
              />
            </a>
            <a href="index.html" class="logo-dark">
              <img
                src="{{asset('assets/images/logos/logo-dark.svg')}}"
                alt="logo"
                class="img-fluid"
              />
            </a>
          </div>
          <div class="d-flex align-items-center gap-4">
            <div class="btn-group">
              <button
                class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle"
                type="button"
                data-bs-toggle="dropdown"
                data-bs-auto-close="true"
                aria-expanded="false"
              >
                <iconify-icon
                  icon="solar:hamburger-menu-line-duotone"
                  class="menu-icon fs-8 text-dark"
                ></iconify-icon>
              </button>
              <ul class="dropdown-menu dropdown-menu-end p-4">
                <div class="d-flex flex-column gap-6">
                  <div
                    class="hstack justify-content-between border-bottom pb-6"
                  >
                    <p class="mb-0 fs-5 text-dark">Menu</p>
                    <button
                      type="button"
                      class="btn-close opacity-75"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="d-flex flex-column gap-3">
                    <ul
                      class="header-menu list-unstyled mb-0 d-flex flex-column gap-2"
                    >
                      <li class="header-item">
                        <a
                          href="index.html"
                          aria-current="true"
                          class="header-link active hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="assets/images/svgs/secondary-leaf.svg"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Home</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="about-us.html"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />About</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="projects.html"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Projects</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="blog.html"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Blog</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="index.html"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Services</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="contact.html"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Contact</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="index.html"
                          class="header-link hstack gap-2 fs-7 fw-bold text-dark"
                          ><img
                            src="{{asset('assets/images/svgs/secondary-leaf.svg')}}"
                            alt=""
                            width="20"
                            height="20"
                            class="img-fluid animate-spin"
                          />Docs</a
                        >
                      </li>
                      <li class="header-item">
                        <a
                          href="index.html"
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
                          />Register Now</a
                        >
                      </li>
                    </ul>
                    <div class="hstack gap-3">
                      <a
                        href="/backend/admin/login"
                        class="btn btn-outline-light fs-6 bg-white px-3 py-2 text-dark w-50 hstack justify-content-center"
                        >Sign In</a
                      >
                      <a
                        href="/register-business"
                        class="btn btn-dark text-white fs-6 bg-dark px-3 py-2 w-50 hstack justify-content-center"
                        >Register</a
                      >
                    </div>
                  </div>
                  <div>
                    <a class="text-dark" href="tel:+91-7000153244"
                      >+91 7000153244</a
                    >
                    <a
                      class="fs-8 text-dark fw-bold"
                      href="mailto:vipdigitalhub@gmail.com"
                      >vipdigitalhub@gmail.com</a
                    >
                  </div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

   