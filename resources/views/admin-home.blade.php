<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
     <title>Document</title>

    <style>
        @keyframes animate {
    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }
    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }
}

.background {
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    background: #1d1e30;
    overflow: hidden;
}
.background li {
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 19s linear infinite;
}




.background li:nth-child(0) {
    left: 67%;
    width: 150px;
    height: 150px;
    bottom: -150px;
    animation-delay: 1s;
}
.background li:nth-child(1) {
    left: 20%;
    width: 149px;
    height: 149px;
    bottom: -149px;
    animation-delay: 5s;
}
.background li:nth-child(2) {
    left: 65%;
    width: 98px;
    height: 98px;
    bottom: -98px;
    animation-delay: 4s;
}
.background li:nth-child(3) {
    left: 63%;
    width: 147px;
    height: 147px;
    bottom: -147px;
    animation-delay: 4s;
}
.background li:nth-child(4) {
    left: 75%;
    width: 119px;
    height: 119px;
    bottom: -119px;
    animation-delay: 5s;
}
.background li:nth-child(5) {
    left: 30%;
    width: 126px;
    height: 126px;
    bottom: -126px;
    animation-delay: 1s;
}
.background li:nth-child(6) {
    left: 83%;
    width: 144px;
    height: 144px;
    bottom: -144px;
    animation-delay: 30s;
}
.background li:nth-child(7) {
    left: 52%;
    width: 93px;
    height: 93px;
    bottom: -93px;
    animation-delay: 26s;
}
    </style>
</head>
<body>
    <ul class="background">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
     </ul>


     
   
     <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <div>
                    <a class="text-2xl font-bold text-white transition-colors duration-200 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">now car sales</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-white dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>
  
            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="items-center md:flex">
                <div class="flex flex-col md:flex-row md:mx-6">
                  
                    {{-- <a class="my-1 text-sm font-medium text-white transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">Home</a> --}}
                    <a class="my-1 text-sm font-medium text-white transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="{{ route('admin.cars') }}">addcars</a>               
                    {{-- <a class="my-1 text-sm font-medium text-white transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">Contact</a> --}}
                    
                    <a class="my-1 text-sm font-medium text-white transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="#">{{ Auth::user()->name }}</a>
  
                    <a class="my-1 text-sm font-medium text-white transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        
                    {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                    </form>
                    
                    </a>
                </div>
  
            </div>
        </div>
    </nav>



    



</body>
</html>