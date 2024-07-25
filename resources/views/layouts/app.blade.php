<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} {{ isset($title) ? $title : '' }}</title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css">

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = "{{ env('SMARTSUB_KEY') }}";
        window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    {{-- <script type="application/javascript">
        window.tiledeskSettings=
            {
              projectid: "{{ env('CHAT_BIN') }}",
            };
          (function(d, s, id) {
              var w=window; var d=document; var i=function(){i.c(arguments);};
              i.q=[]; i.c=function(args){i.q.push(args);}; w.Tiledesk=i;
              var js, fjs=d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js=d.createElement(s);
              js.id=id; js.async=true; js.src="https://chat.binnotech.dev/widget/launch.js";
              fjs.parentNode.insertBefore(js, fjs);
          }(document,'script','tiledesk-jssdk'));
    </script> --}}

</head>

<body>
    @yield('content')
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            if(document.getElementById('amount') == null) return;
            document.getElementById('amount').addEventListener('keyup', function() {
                var a = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                this.value = a;
            });
            // document.getElementById('goback').addEventListener('click', function(e) {
            //     e.preventDefault();
            //     window.history.back();
            // });
            // setTimeout(() => {
            //     var cssLink = document.createElement("link");
            //     cssLink.href = "/css/style.css";
            //     cssLink.rel = "stylesheet";
            //     cssLink.type = "text/css";
            //     frames['tiledeskiframe'].document.head.appendChild(cssLink);
            // }, 3000);
        }
    </script>
</body>

</html>
