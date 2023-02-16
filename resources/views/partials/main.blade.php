<main>
    <div class="img-comcic"></div>
    <div class="upper-title">
      <div class="title">
        CURRENT SERIES
      </div>
    </div>
    <div class="black">
      <div class="container">
        <div class="row">
            @foreach ($fumetti as $fumettiItem)
            <div class="fumetto">
                <div class="fumetto-img">
                    <img src="{{ $fumettiItem['thumb'] }}" alt="{{ $fumettiItem['title'] }}"> 
                </div>
                <h5>{{ $fumettiItem['title'] }}</h5>     
            </div>
            @endforeach
        </div>
        <div>
          <button class="button_load">LOAD MORE</button>
        </div>
      </div>
    </div>
</main>