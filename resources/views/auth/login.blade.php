
@extends('layouts.auth', ['title' => 'Login - Admin'])

@section('content')
<div class="authentication-wrapper authentication-cover">


    <div class="authentication-inner row m-0">
      <!-- /Left Text -->
      <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
        <div class="w-100 d-flex justify-content-center">
          <img
            src="../../assets/img/illustrations/boy-with-rocket-light.png"
            class="img-fluid"
            alt="Login image"
            width="700"
            data-app-dark-img="illustrations/boy-with-rocket-dark.png"
            data-app-light-img="illustrations/boy-with-rocket-light.png" />
        </div>
      </div>
      <!-- /Left Text -->

      <!-- Login -->
      <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
        <div class="w-px-400 mx-auto">
          <!-- Logo -->
          <div class="app-brand mb-5">
            <a href="" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">
                <x-logo/>
              </span>
              <span class="app-brand-text demo text-body fw-bold">Sneat</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Welcome to Sneat! 👋</h4>
          <p class="mb-4">Please sign-in to your account and start the adventure</p>

          @if (session('status'))
          <div class="bg-green-500 p-3 rounded-md shadow-sm mt-3">
              {{ session('status') }}
          </div>
          @endif
          <form id="formAuthentication" class="mb-3"  action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email or Username</label>
              <input
                type="text"
                class="form-control"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email or username"
                autofocus />
            </div>
            @error('email')
                <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                    <div class="px-4 py-2">
                        <p class="text-gray-600 text-sm">{{ $message }}</p>
                    </div>
                </div>
             @enderror
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="{{route('forgot-password')}}">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              @error('password')
              <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                  <div class="px-4 py-2">
                      <p class="text-gray-600 text-sm">{{ $message }}</p>
                  </div>
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100">Sign in</button>
          </form>

          <p class="text-center">
            <span>New on our platform?</span>
            <a href="auth-register-cover.html">
              <span>Create an account</span>
            </a>
          </p>

          <div class="divider my-4">
            <div class="divider-text">or</div>
          </div>

          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
              <i class="tf-icons bx bxl-facebook"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
              <i class="tf-icons bx bxl-google-plus"></i>
            </a>

            <a href="javascript:;" class="btn btn-icon btn-label-twitter">
              <i class="tf-icons bx bxl-twitter"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Login -->
    </div>
  </div>

  @endsection