@extends('layouts.success')

@section('title', 'Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex-align-items-center">
      <div class="col text-center">
        <img src="/frontend/images/mail.png" alt="">
        <h1>Opps!</h1>
        <p>Your Transaction is Unfinish</p>
          <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">
            Home Page
          </a>
      </div>
    </div>
  </main>
@endsection

