<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"><link rel="stylesheet" href="index_files/all.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#000000">

  <title>Rick &amp; Morty WiKi</title>
  <link href="index_files/2.0a9ec390.chunk.css" rel="stylesheet">
  <link href="index_files/main.0e23d7af.chunk.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/2.0a9ec390.chunk.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.0e23d7af.chunk.css') }}">

</head>
<body cz-shortcut-listen="true">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
    <a class="navbar-brand fs-3" href=""> Rick &amp; Morty <span class="text-primary">WiKi</span>
    </a>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav fs-5"><a class="nav-link" href="/rick">Characters</a>
      
    </div></div>
  </nav>
  
<h1 class="text-center mb-3">Characters</h1>
<form class="undefined d-flex flex-sm-row flex-column align-items-center justify-content-center gap-4 mb-5" action="rick" method="POST">
  @csrf
  <input placeholder="Search for characters" class="Search_input__3iTQH" type="text" name="name">
  <button class="Search_btn__VNvBO btn btn-primary fs-5">Search</button>
</form>

<div class="container">
  <div class="row">
    <div class="col-lg-3 mb-5">
      <div class="text-center fw-bold fs-4 mb-2">Filters</div>
      <div style="cursor: pointer;" class="text-primary text-decoration-underline text-center mb-3">Clear Filters</div>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Status</button>
          </h2>

          <div class="form-check">
            <form action="rick" method="POST">
              <input class="form-check-input x" type="hidden" name="species" id="species-0" value="human">
              @csrf
              <button  type="submit" class="btn btn-outline-primary">Human</button>
            </form>
          </div>

          <div class="form-check">
            <form action="rick" method="POST">
              <input class="form-check-input x" type="hidden" name="species" id="species-0" value="alien">
              @csrf
              <button  type="submit" class="btn btn-outline-primary">alien</button>
            </form>
          </div>

        </div>
      </div>
    </div>
   
    @foreach ($apiInfo as $info )
      <a style="text-decoration: none;" class="col-4 mb-4 position-relative text-dark w-25" href="{{ "rick/".$info['id'] }}">
        <div class="Card_card__35wN0 d-flex flex-column justify-content-center">
          <img class="Card_img__1qgJC img-fluid" src="{{$info['image']}}" alt="">
          <div class="">
            <div class="fs-5 fw-bold">{{$info['name']}}</div>
            <div class="">
              <div class="fs-6 fw-normal">Last Location</div>
              <div class="fs-5">{{ $info['location']['name'] }}</div>
            </div>
          </div>
        </div>
        <div class="Card_badge__21uzr position-absolute badge 
        
        @switch($info['status'])
          @case("Alive")
            {{"bg-success"}}
          @break
          
          @case("Dead")
            {{"bg-danger"}}
          @break
            
          @default
            {{"bg-secondary"}}
        @endswitch "  >{{$info['status']}}</div>
      </a>
    @endforeach
  </div>
</div>
</body>

</html>