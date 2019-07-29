@extends('base')

@section('content')
<section class="space--l">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md">
        @foreach ($giftsCollection->chunk(3) as $gifts)
          <div class="row">
            @foreach ($gifts as $gift)
              <div class="col-md-4">
                <div class="boxed boxed--lg boxed--border">
                  <img src="uploads/{{ $gift->image }}" alt="{{ $gift->name }}" class="border--round">
                  <a href="gifts/{{ $gift->id }}">
                    <h3 class="gotham">{{ $gift->name }}</h3>
                  </a>
                  <ul>
                    <li class="text-uppercase">{{ $gift->category }}</li>
                    @if ($gift->price > 1)
                      <li>IDR {{ number_format($gift->price, 2, ',', '.') }}</li>
                    @else
                      <li>-</li>
                    @endif
                  </ul>
                  <a href="{{$gift->store_url}}" target="_blank">
                    <p class="text-uppercase">Buy on {{ $gift->store_name}}</p>
                  </a>
                  <br>
                  @if ($gift->is_available == 0)
                    <a class="btn btn--lg inline-block disabled btn--rose-gold">
                      <span class="btn__text">
                        UNAVAILABLE
                      </span>
                    </a>
                  @else
                    <a href="gifts/{{ $gift->id }}" class="btn btn--lg inline-block btn--rose-gold">
                      <span class="btn__text">
                        AVAILABLE
                      </span>
                    </a>
                  @endif
                </div>
              </div>
            @endforeach
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection