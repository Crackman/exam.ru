<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Сайт для подготовки к ЕГЭ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobibus - Главная страница</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FFJP3Y3FSN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FFJP3Y3FSN');
    </script>

</head>
<body>

    @include('includes.index.header')
    @yield('content')



    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">

                <!-- Google -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #dd4b39;"
                  href="#!"
                  role="button"
                ><i class="fab fa-google"></i
                    ></a>

                <!-- Instagram -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #ac2bac;"
                  href="#!"
                  role="button"
                ><i class="fab fa-instagram"></i
                    ></a>

                <!-- vk -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #0082ca;"
                  href="https://vk.com/id339593998"
                  role="button"
                ><i class="fa-brands fa-vk"></i>
                </a>
                <!-- Github -->
                <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #333333;"
                  href="https://github.com/Crackman"
                  role="button"
                ><i class="fab fa-github"></i
                    ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="#">Губанов В.А</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="{{ asset('js/app.js') }}" async></script>

</body>
</html>
