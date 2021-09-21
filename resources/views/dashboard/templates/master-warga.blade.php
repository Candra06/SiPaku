<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SiPaku | Warga</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .navbar {
            -webkit-transition: all 0.6s ease-out;
            -moz-transition: all 0.6s ease-out;
            -o-transition: all 0.6s ease-out;
            -ms-transition: all 0.6s ease-out;
            transition: all 0.6s ease-out;

        }

        .navbar ul {
            color: white;

        }

        .navbar.scrolled {
            /* background: rgb(255, 255, 255); */
            /* IE */
            background: rgba(255, 255, 255);
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
            /* NON-IE */
        }

        footer {
            box-shadow: 6px 3px 6px 6px rgba(0, 0, 0, .2);

        }

    </style>
</head>

<body data-spy="scroll" data-target="#scroll-ku" data-offset="1">
    @include('dashboard.templates.topbar-front')
    <div class="m-0">
        @yield('content')
    </div>

    <div class="modal fade" id="exampleModalLg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&#xD7;</span></button>
                </div>
                <div class="modal-body">
                    <p><b>{{ Auth::user()->name }}</b>, apakah anda yakin ingin keluar?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Close</button>
                    <a class="btn btn-danger" href="" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        function checkScroll() {
            var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

            if ($(window).scrollTop() > startY) {
                console.log('scrolled');
                $('.navbar').addClass("scrolled");
            } else {
                $('.navbar').removeClass("scrolled");
            }
        }

        if ($('.navbar').length > 0) {
            $(window).on("scroll load resize", function() {
                checkScroll();
            });
        }
    </script>
</body>

</html>
