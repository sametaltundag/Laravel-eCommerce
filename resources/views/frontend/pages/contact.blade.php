@extends('frontend.layouts.app')

@section('title')
    İletişim
@endsection

@section('content')
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{route('anasayfa')}}">Anasayfa</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">İletişim</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h3 mb-3 text-black">Bize form gönder</h2>
        </div>
        <div class="col-md-7">

          <form action="{{route('iletisim.kaydet')}}" method="post">
            @csrf
            <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Ad <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">E-Posta <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Konu </label>
                  <input type="text" class="form-control" name="subject">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Mesajınız </label>
                  <textarea name="message" cols="30" rows="7" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Formu Gönder</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5 ml-auto">
          <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">New York</span>
            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>
          <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">London</span>
            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>
          <div class="p-4 border mb-3">
            <span class="d-block text-primary h6 text-uppercase">Canada</span>
            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
