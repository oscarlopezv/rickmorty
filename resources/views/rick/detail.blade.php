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

<div class="container d-flex justify-content-center mb-5">
    <div class="d-flex flex-column gap-3">
      <h1 class="text-center">{{$info['name']}}</h1>
      <img class="img-fluid" alt="" src="{{$info['image']}}">
      <div class="badge 

    @switch($info['status'])
        @case("Alive")
            {{"bg-success"}}
        @break

        @case("Dead")
            {{"bg-danger"}}
        @break
           
        @default
            {{"bg-secondary"}}
    @endswitch 
      fs-5">{{$info['status']}}</div>
      <div class="content">
        <div class=""><span class="fw-bold">Gender : </span>{{$info['gender']}}</div>
        <div class=""><span class="fw-bold">Location: </span>{{$info['location']['name']}}</div>
        <div class=""><span class="fw-bold">Origin: </span>{{$info['origin']['name']}}</div>
        <div class=""><span class="fw-bold">Species: </span>{{$info['species']}}</div>
      </div>
    </div>
  </div>
</body>

</html>