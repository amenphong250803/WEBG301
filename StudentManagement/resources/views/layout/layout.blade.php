<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Management</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="{{URL('css/layout.css')}}">
        <link rel="stylesheet" href="{{URL('css/index-schedule.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            @include('layout.navbar')
        </header>
        <main>
            <div class="container">
                <div class="left-side">
                    @include('layout.left-side')
                </div>
                <div class="right-side">
                    <div class="title">@yield('title')</div>
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
            @include('layout.footer')
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"
        ></script>
        <script>
            document
                .querySelector(".select-field")
                .addEventListener("click", () => {
                    document.querySelector(".list").classList.toggle("show");
                    document
                        .querySelector(".down-arrow")
                        .classList.toggle("rotate180");
                });
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
