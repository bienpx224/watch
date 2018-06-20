<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('meta')

    <title>{{ $title or "Biển phạm" }}</title>
    <link rel="icon" href="https://i.imgur.com/8Xc3Mqg.png">

    <link href="{{asset('public/inspinia/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('public/inspinia/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{asset('public/inspinia/css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('public/inspinia/css/style.css') }}" rel="stylesheet">

    <link href="{{asset('public/css/custom.css') }}" rel="stylesheet">

    @yield('css')

    <!-- <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script> -->


</head>

<body class="">

    <div id="wrapper">

        @include('layout/menu')

        <div id="page-wrapper" class="gray-bg">
            
            @include('layout/header')

            @yield('content-page')

            @include('layout/footer')

        </div>
        </div>

    <!-- Mainly scripts -->
    <script type="text/javascript" src="{{asset('public/inspinia/js/jquery-2.1.1.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/inspinia/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/inspinia/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script type="text/javascript" src="{{asset('public/inspinia/js/inspinia.js') }}"></script>
    <script type="text/javascript" src="{{asset('public/inspinia/js/plugins/pace/pace.min.js') }}"></script>

    <script type="text/javascript" src="{{asset('public/js/custom.js') }}"></script>

    @yield('script')

    <script>
     //  var video = document.getElementById('video');
     //  if(Hls.isSupported()) {
     //    var hls = new Hls();
     //    hls.loadSource('http://xmiolive.e14538a7.viettel-cdn.vn/hbo.smil/chunklist_b1500000.m3u8');
     //    // https://video-dev.github.io/streams/x36xhzz/x36xhzz.m3u8
     //    // blob:http://vtv.vn/34c9fccf-1f11-4a14-ba1d-bd2bc071f9ed
     //    hls.attachMedia(video);
     //    hls.on(Hls.Events.MANIFEST_PARSED,function() {
     //      video.play();
     //  });
     // }
     // // hls.js is not supported on platforms that do not have Media Source Extensions (MSE) enabled.
     // // When the browser has built-in HLS support (check using `canPlayType`), we can provide an HLS manifest (i.e. .m3u8 URL) directly to the video element throught the `src` property.
     // // This is using the built-in support of the plain video element, without using hls.js.
     // // Note: it would be more normal to wait on the 'canplay' event below however on Safari (where you are most likely to find built-in HLS support) the video.src URL must be on the user-driven
     // // white-list before a 'canplay' event will be emitted; the last video event that can be reliably listened-for when the URL is not on the white-list is 'loadedmetadata'.
     //  else if (video.canPlayType('application/vnd.apple.mpegurl')) {
     //    video.src = 'https://video-dev.github.io/streams/x36xhzz/x36xhzz.m3u8';
     //    video.addEventListener('loadedmetadata',function() {
     //      video.play();
     //    });
     //  }
    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
</html>
