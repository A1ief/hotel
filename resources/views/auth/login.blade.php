<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <!-- Scripts -->
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="background-image:url('{{ asset('images/hotel-ideal.jpg') }}');">
   <div class="container">
      <div class="fw-bold text-white text-center pt-5 mt-3">
         <h1>AKSATA MINI HOTEL</h1>
         <p>"because your satisfaction is our priority"</p>
      </div>
      <div class="row d-flex align-items-center justify-content-center mt-5">
         <div class="col-md-7">
            <div class="card text-center" style="opacity: 80%">
               <div class="card-header fw-bold fs-3 ">
                  {{ __('Login') }}
               </div>

               <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                     @csrf

                     <div class="row mb-3">
                        <label for="email"
                           class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                           <input id="email" type="email"
                              class="form-control @error('email') is-invalid @enderror" name="email"
                              value="{{ old('email') }}" required autocomplete="email" autofocus>

                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                     </div>

                     <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                           <input id="password" type="password"
                              class="form-control @error('password') is-invalid @enderror" name="password" required
                              autocomplete="current-password">

                           @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                     </div>

                     <div class="row mb-0">
                        <div class="col" style="margin-left: 55px">
                           <button type="submit" class="btn btn-sm btn-primary col-md-3 ms-5 me-1">
                              {{ __('Login') }}
                           </button>
                           <button type="reset" class="btn btn-sm btn-primary col-md-3">
                              Reset
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>
