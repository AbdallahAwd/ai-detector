<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')

    <title>@yield('title')</title>
</head>

<body>
    @php
        $currentPath = $_SERVER['REQUEST_URI'];
        
    @endphp


    {{-- header --}}
    <header class="container mx-auto">
        <nav class="flex flex-row items-center justify-between">
            <div class="text-black text-4xl p-5  font-medium">
                <a href="{{ route('home') }}">Censor <span class="font-nova-flat text-orange-400">AI</span> </a>
            </div>
            @php
                $hoverStyle = 'hover:text-orange-500 transition ';
            @endphp
            <div>
                <ul class="hidden md:flex space-x-12">
                    <li class="relative">
                        <div class="flex flex-col items-center ">
                            <a href="{{ route('home') }}"
                                class="{{ $currentPath === '/' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Home</a>

                        </div>
                    </li>


                    <li><a href="{{ route('feature') }}"
                            class="{{ $currentPath === '/features' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Features</a>
                    </li>
                    <li><a href="{{ route('contact') }}"
                            class="{{ $currentPath === '/contact' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Contact</a>
                    </li>
                    <li><a href="{{ route('faq') }}"
                            class="{{ $currentPath === '/faq' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Faq</a>
                    </li>
                </ul>
            </div>
            @if ($currentPath === '/')
                <div class="hidden md:block">
                    <button href="" class="bg-orange-400 text-white p-2.5 rounded-full"
                        onclick="scrollToTarget()">Try
                        it</button>
                </div>
            @endif

            {{-- mobile screen --}}
            <div id="hamberger" class="md:hidden p-5 cursor-pointer z-10">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div id="menu" class="hidden bg-dark-blue text-white h-[100vh] absolute inset-0 ">
                <ul class="h-full grid place-items-center py-8">

                    <li id="hLink" class="relative">
                        <div class="flex flex-col items-center ">
                            <a href="{{ route('home') }}"
                                class="{{ $currentPath === '/' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Home</a>

                        </div>
                    </li>


                    <li id="hLink"><a href="{{ route('feature') }}"
                            class="{{ $currentPath === '/features' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Features</a>
                    </li>
                    <li id="hLink"> <a href="{{ route('contact') }}"
                            class="{{ $currentPath === '/contact' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Contact</a>
                    </li>
                    <li id="hLink"><a href="{{ route('faq') }}"
                            class="{{ $currentPath === '/faq' ? $hoverStyle . 'text-orange-500' : $hoverStyle }}">Faq</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <script>
        const hamberger = document.getElementById("hamberger");
        const menu = document.getElementById("menu");
        const hLink = document.getElementById("hLink");
        const faSolid = document.querySelector(".fa-solid");

        hamberger.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            faSolid.classList.toggle("fa-xmark");

            if (faSolid.classList.contains("text-white")) {
                faSolid.classList.remove('text-white');
            } else {
                faSolid.classList.add('text-white');
            }
        });
    </script>

    <main class="container p-3 mx-auto ">
        @yield('content')
    </main>
    {{-- footer --}}
    <footer class="bg-gray-800 mt-10 text-white py-6">
        <h1 class="text-white text-2xl text-center p-2">
            What are you waiting for? Download Our app Now!
        </h1>

        <a href="https://drive.google.com/file/d/1SIpBg7kUF4UOjsluPl8b-8fvzl3J8exg/view?usp=sharing"
            class="flex flex-col mt-8 space-x-2 md:flex-row items-center justify-center">
            <img src="{{ asset('img/google.png') }}" class="w-1/3 h-1/3 mb-2 md:w-1/12 " alt="">
            <img src="{{ asset('img/apple.png') }}" class="w-1/3 h-1/3 mb-2 md:w-1/12 " alt="">
        </a>
        <div class="container mx-auto flex flex-col items-center mt-5 justify-around md:flex-row">
            <div class="text-white text-4xl p-5  font-medium">
                <a href="{{ route('home') }}">Censor <span class="font-nova-flat text-orange-400">AI</span> </a>
            </div>
            <div class=" p-2">
                <p class="text-xl">Company</p>
                <a href="" class="text-gray-400 text-sm">SoftGrove</a>
            </div>
            <div class=" p-2">
                <p class="text-xl">Product</p>
                <a href="" class="text-gray-400 text-sm">AI Detector</a>
            </div>
            <div class=" p-2">
                <p class="text-xl">Legal</p>
                <div class="flex flex-col p-1">
                    <a href="" class="text-gray-400 mt-1 text-sm">Privacy Policy</a>
                    <a href="" class="text-gray-400 mt-1 text-sm">Terms of Use</a>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-8 text-center">
            <p>&copy;2023 SoftGrove. All rights reserved.</p>
        </div>

    </footer>
    @if ($currentPath == '/result')
        <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.8.0/build/player/lottie.min.js"></script>
    @endif
    <script>
        function scrollToTarget() {
            const target = document.querySelector('#detect');
            target.scrollIntoView({
                behavior: 'smooth',

            });
        }
    </script>
</body>

</html>
