<main>
  {{-- Jumbotron --}}
    <div class="img-comcic"></div>

    {{-- Bottone current --}}
    <div class="upper-title">
      <div class="title">
        CURRENT SERIES
      </div>
    </div>

    {{-- Sezione fumetti --}}

    <div class="black">
      <div class="container">
        <div class="row">
          
          @section('content')
            @foreach ($fumetti as $fumettiItem)
            <a href="{{ route('card-fumetto', ['title' => $fumettiItem['title']]) }}">
            <div class="fumetto">
              {{-- link per accedere alla pagina card --}}
              <div class="fumetto-img">
                <img src="{{ $fumettiItem['thumb'] }}" alt="{{ $fumettiItem['title'] }}"> 
              </div>
              <h5>{{ $fumettiItem['title'] }}</h5>  
              </div>
            </a>
            @endforeach
          @endsection

        </div>
        <div>
          <button class="button_load">LOAD MORE</button>
        </div>
      </div>
    </div>

</main>