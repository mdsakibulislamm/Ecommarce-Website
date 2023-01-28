
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Register</title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="{{asset('backend')}}/videos/video1.mp4" type="video/mp4">
        <source src="{{asset('backend')}}/videos/video1.ogv" type="video/ogg">
        <source src="{{asset('backend')}}/videos/video1.webm" type="video/webm">
      </video><!-- /video -->
      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal"></span> Register <span class="tx-info">Page</span> <span class="tx-normal"></span></div>
          <div class="tx-white-5 tx-center mg-b-60">The Admin Template For Perfectionist</div>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>

                <input id="name" class="form-control" type="text" name="name" placeholder="Enter your name">
            </div>

            <!-- Email Address -->
            <div class="mt-4">

                <input id="email" class="form-control" type="email" name="email" placeholder="Enter your email">
            </div>

            <!-- Password -->
            <div class="mt-4">

                <input id="password" class="form-control" placeholder="Enter your password"
                                type="password"
                                name="password"
                                required autocomplete="new-password">
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <input id="password_confirmation" class="form-control" placeholder="Enter confirm password"
                                type="password"
                                name="password_confirmation" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
                <button type="submit" class="btn btn-info btn-block">
                    {{ __('Sign up') }}
                </button>
            </div>
        </form>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="{{asset('backend')}}/lib/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>

  </body>
</html>
