<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <title>{{ strtolower($title_page ?? "Đồ án tốt nghiệp")   }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" sizes="32x32" type="image/png" href="{{ asset('ico.png') }}" />
        @yield('css')

        {{-- Thông báo --}}
        @if(session('toastr'))
            <script>
                var TYPE_MESSAGE = "{{session('toastr.type')}}";
                var MESSAGE = "{{session('toastr.message')}}";
            </script>
        @endif
        <style>
            .main-title {
                color: red;
            }
            .product-item a h3 {
                font-size: 14px !important;
            }
        </style>
      <!--Start of Fchat.vn--><script type="text/javascript" src="https://cdn.fchat.vn/assets/embed/webchat.js?id=6707e22322b4db50701ced08" async="async"></script><!--End of Fchat.vn-->
    </head>
    <body>
        @include('frontend.components.header')
        @yield('content')
        @include('frontend.components.footer')
        <script>
            var DEVICE = '{{  device_agent() }}'
        </script>
        @yield('script')
<!-- 
          Messenger Plugin chat Code
  <div id="fb-root"></div> -->

  <!-- Your Plugin chat code -->
  <!-- <div id="fb-customer-chat" class="fb-customerchat">
  </div> -->

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    // chatbox.setAttribute("page_id", "101046545371764");
    // chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v16.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
<script lang="javascript">var __vnp = {code : 23540,key:'', secret : '5785e349e8e001c4f59820ac2d167c4a'};(function() {var ga = document.createElement('script'  ;ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//core.vchat.vn/code/tracking.js?v=91865'; var s = document.getElementsByTagName('script'  ;s[0].parentNode.insertBefore(ga, s[0]);})();</script>
    </body>
</html>
