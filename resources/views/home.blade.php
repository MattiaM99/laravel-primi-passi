<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>test laravel</title>
</head>
<body>

<div class="container">
    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">LOGO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profilo') }}">Profilo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('impostazioni') }}">Impostazioni</a>
        </li>
      </ul>
</div>

    <div class="container">
        <h1>HOME</h1>
        <h2>Ciao {{ $name }}</h2>
        <ul>
          Oggi devi:
            @foreach ($todos as $todo )
                <li>
          
                    @if ($loop->last)
 
                    @endif
                    {{ $todo }}
                </li>
            @endforeach

        </ul>
    </div>



</body>
</html>