@extends('frontend.index')

@section('form')

  <!-- font awesome -->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/font-awesome.css')}}">
  <!-- main css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style.css')}}">
    <!-- responsive css -->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/responsive.css')}}">
   <!-- color skin-->
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/skins/color-1.css')}}">
  <!-- switcher  css -->
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-1" href="{{asset('/frontend/css/skins/color-1.css')}}" >
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-2" href="{{asset('/frontend/css/skins/color-2.css')}}" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-3" href="{{asset('/frontend/css/skins/color-3.css')}}" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-4" href="{{asset('/frontend/css/skins/color-4.css')}}" disabled>
  <link rel="stylesheet" type="text/css" class="alternate-style" title="color-5" href="{{asset('/frontend/css/skins/color-5.css')}}" disabled>
  <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style-switcher.css')}}">
  <div class="row">
                <div class="contact-form">
<form action="{{ route('contact.send') }} " method="post" enctype="multipart/form-data">
@csrf
                 
                    <div class="row">
                      <div class="w-50">
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="text" placeholder="Name Surname" name="name" class="input-control">
                        </div>
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="text" placeholder="faculty course" name="faculty" class="input-control">
                        </div>
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="tel" placeholder="phone number" name="phone" class="input-control">
                        </div>
                        <div class="input-group outer-shadow hover-in-shadow">
                          <input type="text" placeholder="club" name="club" class="input-control">
                        </div>
                      </div>
                      <div class="w-50">
                        <div class="input-group outer-shadow hover-in-shadow">
                          <textarea class="input-control" placeholder="your message" name="message"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="submit-btn">
                        <button type="submit" class="btn-1 outer-shadow hover-in-shadow">Submit</button>
                      </div>
                    </div>
                  </form>
                  </div>
                    </div>

@endsection