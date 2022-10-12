<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
    <!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section"><a href="{{ url('/showcart',Auth::user()->id) }}">
                                    @auth
                                    Cart
                                    <span
                                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-orange-200 uppercase last:mr-0 mr-1">
                                        {{ $count }}
                                    </span>
                                    @endauth

                                    @guest
                                    Cart[0]
                                    @endguest
                                </a></li>

                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            <li>
                                {{-- <a href="{{ url('/dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>

                            @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            </li>
                            @endif
                            @endauth
                </div>
                @endif
                </li>
                </ul>
                {{-- <a class='menu-trigger'>
                    <span>Menu</span>
                </a> --}}
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>



    <div id="top">
        {{-- cart table --}}
        <div class="container mx-auto">
            <div class="overflow-x-auto relative m-12">
                <table class="w-full text-sm text-left text-gray-300 dark:text-gray-300">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="bg-slate-800">
                            <th scope="col" class="py-3 px-6">
                                Food
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Price
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Quantity
                            </th>
                            {{-- <th scope="col" class="py-3 px-6">
                                Action
                            </th> --}}


                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $data)
                        <tr class="bg-slate-800 border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="py-4 px-6">
                                {{ $data->title }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $data->price }}
                            </td>

                            <td class="py-4 px-6">
                                {{ $data->quantity }}
                            </td>

                            {{-- @foreach ($cart_data as $cart_data)
                            <td>
                                <a href="{{ url('/remove',$cart_data->id) }}" class="text-red-500">Remove</a>
                            </td>
                            @endforeach --}}
                        </tr>
                        @endforeach

                        @foreach ($cart_data as $cart_data)
                        <tr style="position: relative; top: -70px; right: -1160px;">
                            <td class="mt-4 p-4">
                                <a href="{{ url('/remove',$cart_data->id) }}" class="text-red-500">Remove</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                <div align="center" style="padding: 5px">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Order
                        Now</button>
                </div>


                <div id="appear">
                    <div class="container mx-auto">
                        <div class="max-w-xl p-5 mx-auto my-10 bg-slate-800 rounded-md shadow-sm">
                            <div>
                                <form action="{{ url('/updatefood',$data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-200">Name</label>
                                        <input type="text" name="name" required
                                            class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md" />
                                    </div>
                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-200">Phone</label>
                                        <input type="number" name="phone" required
                                            class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md" />
                                    </div>

                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-200">Address</label>

                                        <textarea rows="5" name="address"
                                            class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md"
                                            required></textarea>
                                    </div>

                                    {{-- old image --}}

                                    <div class="mb-6">
                                        <button type="submit" id="order"
                                            class="w-full px-2 py-2 text-white bg-violet-500 rounded-md  focus:bg-violet-600 focus:outline-none">
                                            Confirm
                                        </button>

                                        <button type="submit" id="close"
                                            class="w-full px-2 py-2 text-white bg-red-500 rounded-md  focus:bg-red-600 focus:outline-none mt-2">
                                            Close
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $("#order").click(
            function(){
                $("#appear").show();
                console.log('clicked');
            }
        );

        $("#close").click(
            function(){
                $("#appear").hide();;
                console.log('clicked');
            }
        );
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
</body>

</html>
