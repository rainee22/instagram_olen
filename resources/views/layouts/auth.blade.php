<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Exchangeagram Login</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <div>
        <main>
            <div class="flex h-screen items-center justify-center">
                <div class="max-w-[360px] w-full">
                    <div class="bg-white border border-gray-300 py-3 px-8">
                        <!-- Logo -->
                        <div class="flex items-center justify-center">
                            <div class="flex flex-shrink-0 items-center py-3">
                                <!--<img class="h-8 w-auto"
               src="http://178.128.26.9/build/assets/logo-8d7745e6.png" alt="Exchangeagram">-->
                                <img class="h-16 w-auto" src="{{ Vite::asset('resources/images/instagram.png') }}"
                                    alt="Exchangeagram">
                            </div>
                        </div>
                        <!--/. Logo class="max-w-[360px] w-full " -->
                        {{ $slot }}
                    </div>
                    {{ $footer }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>
