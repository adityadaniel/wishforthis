@extends('base')

@section('content')
  <section class="space--l">
<div class="container">
  <div class="row justify-content-between">
    <div class="col-md-6 col-lg-5 pos-right">
    <img alt="{{ $gift->name }}" class="border--round box-shadow-wide" src="{{ url('/') }}/uploads/{{ $gift->image }}">
    </div>
    <div class="col-md-6 col-lg-5">
      <div class="mt--1">
        <h2>Gift {{ $gift->name }} for Sally & Stefanus</h2>
        <hr style="border-bottom: 1px solid #efc1ac; width: 2em; border-color: #efc1ac;">
        <form method="POST" action="/gifts">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-12">
              @if ($errors->any())
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              @endif
            </div>
            <div class="col-12">
              <input type="hidden" name="id" value="{{ $gift->id }}">
            </div>
            <div class="col-12 form-group">
              <label for="name">Name</label>
              <input type="text" placeholder="Your name" name="name">
            </div>
            <div class="col-12 form-group">
              <label for="email">Email</label>
              <input type="email" placeholder="Your email" name="email">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn--lg">
                  <span class="btn__text text-uppercase">Submit</span>
                </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection