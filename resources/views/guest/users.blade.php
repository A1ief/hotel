<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Guest</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-dark text-white">
   <nav class="navbar navbar-expand-lg navbar-dark border-bottom border-secondary m-2">
      <div class="container">
         <a class="navbar-brand">AKSATA MINI HOTEL</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active fw-bold" href="{{ route('login') }}">login</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active fw-bold" href="{{ route('register') }}">register</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="container mx-auto pt-5 text-center" style="margin-top: 7%">
      <h1 class="fw-bold">AKSATA HOTEL</h1>
      <h3 class="fw-bold mt-3 mb-3">About Me</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente aliquid et quod amet quam reiciendis
         cupiditate quaerat, dolore nihil quo voluptatibus ipsam saepe pariatur cum in quos enim voluptatum unde
         accusamus ad dolor quia ea eum a. Repudiandae delectus porro animi aliquid earum debitis ducimus recusandae nam
         a exercitationem eveniet assumenda soluta iure, quam facilis quae itaque rem id illo possimus unde? Vitae
         tempore voluptates a, saepe, optio magni harum debitis quo facere blanditiis id aliquam culpa. Harum
         praesentium, perspiciatis nesciunt alias eligendi officiis. Maxime eveniet sunt hic amet ea omnis iure ipsam
         nesciunt quam. Tempore ducimus quibusdam consectetur commodi.</p>
   </div>
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1"
         d="M0,128L40,117.3C80,107,160,85,240,112C320,139,400,213,480,250.7C560,288,640,288,720,250.7C800,213,880,139,960,122.7C1040,107,1120,149,1200,165.3C1280,181,1360,171,1400,165.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
   </svg>
   <div class="bg-white text-dark">
    <div class="container">
      <div class="row">
         {{-- {{ dd($getkamar->jenis_kamar) }} --}}
      @foreach ($kamar as $item)
      <div class="col-md-4 d-flex justify-content-center">
      <div class="card shadow-lg" style="width: 18rem;">
        <img src="{{ asset('images/Double-Bed.jpg') }}" class="card-img-top" alt="errorcuy">
        <div class="card-body">
          <h5 class="card-title">{{ $item->jenis_kamar }}</h5>
          <p>{{ Str::limit($item->deskripsi, 100) }}</p>
          <a href="{{ url('detail/'. $item->id_kamar) }}" class="btn btn-sm btn-primary col-3" style="float: right">Lihat</a>
        </div>
      </div>
   </div>
      @endforeach
   </div>
  </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
