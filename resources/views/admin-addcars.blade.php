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



    

    
    <section class="text-blueGray-700">
        <div class="container items-center px-5 py-12 lg:px-20">
          <div class="
        flex flex-col
        w-full
        max-w-md
        p-10
        mx-auto
        my-6
        transition
        duration-500
        ease-in-out
        transform
        bg-white
        rounded-lg
        md:mt-0
      ">
            <div class="mt-8">
              <section class="flex flex-col w-full h-full p-1 overflow-auto">
                <header class="
              flex flex-col
              items-center
              justify-center
              py-12
              text-base
              transition
              duration-500
              ease-in-out
              transform
              bg-white
              border border-dashed
              rounded-lg
              text-blueGray-500
              focus:border-blue-500
              focus:outline-none
              focus:shadow-outline
              focus:ring-2
              ring-offset-current ring-offset-2
            ">
                  <p class="
                flex flex-wrap
                justify-center
                mb-3
                text-base
                leading-7
                text-blueGray-500
              ">
                    <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
                  </p>
              <form enctype="multipart/form-data" method="POST" action="{{ route('submitcars') }}">
                @csrf
                
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
                  <div>

                    <input type="text">
                    <div class="  w-auto
                    px-2
                    py-1
                    my-2
                    mr-2
                    transition
                    duration-500
                    ease-in-out
                    transform
                    border
                    rounded-md
                    text-blueGray-500
                    hover:text-blueGray-600
                    text-md
                    focus:shadow-outline focus:outline-none focus:ring-2
                    ring-offset-current ring-offset-2
                    hover:bg-blueGray-100">
                        <img 
                        src="{{ url('storage/pics/default.jpg') }}"
                        id="profileDisplay">

                        <a onclick="triggerClick()" id="profileDispalys">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            Photo</a> 
                            <input hidden type="file" name="car_photo" value=""
                            onchange="displayImage(this)" id="car_photo">



                            <script>
                                function triggerClick(e) {
                                document.getElementById('car_photo').click()
                                }
                                function displayImage(e) {
                                    if (e.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload =function(e) {
                                            document.getElementById('profileDisplay').setAttribute('src', e.target.result);
                                        }
                                        reader.readAsDataURL(e.files[0]);
                                    }
                                }


                                
                            </script>
                    </div>

              
                </header>
              </section>
              <div class="mt-6">

                      {{-- <label>  --}}
                        {{-- <input id="car_photo" name="car_photo" type="file" class="
                        
                      w-auto
                      px-2
                      py-1
                      my-2
                      mr-2
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border
                      rounded-md
                      text-blueGray-500
                      hover:text-blueGray-600
                      text-md
                      focus:shadow-outline focus:outline-none focus:ring-2
                      ring-offset-current ring-offset-2
                      hover:bg-blueGray-100
                      " />
                    
                    Upload a photo
                  </label> --}}
                      <label for="email" class="block text-sm font-medium text-neutral-600"> Car name  </label>
                      <div class="mt-1">
                        <input id="car_name" name="car_name" type="text" required="" placeholder="name of car" class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base text-neutral-600
                      placeholder-gray-300
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-transparent
                      rounded-lg
                      bg-gray-50
                      focus:outline-none
                      focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                      </div>
                    </div>
                    <div class="space-y-1">
                      <label for="car_price" class="block text-sm font-medium text-neutral-600"> Car Price </label>
                      <div class="mt-1">
                        <input id="car_price" name="car_price" type="text" required="" placeholder="........." class="
                      block
                      w-full
                      px-5
                      py-3
                      text-base text-neutral-600
                      placeholder-gray-300
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border border-transparent
                      rounded-lg
                      bg-gray-50
                      focus:outline-none
                      focus:border-transparent
                      focus:ring-2
                      focus:ring-white
                      focus:ring-offset-2
                      focus:ring-offset-gray-300
                    ">
                      </div>
                    </div>
                  </div>
                  <div>
                    <label for="car_info" class="block text-sm font-medium text-neutral-600"> Car info </label>

                    <textarea class="
                  block
                  w-full
                  px-5
                  py-3
                  mt-2
                  text-base text-neutral-600
                  placeholder-gray-300
                  transition
                  duration-500
                  ease-in-out
                  transform
                  border border-transparent
                  rounded-lg
                  bg-gray-50
                  focus:outline-none
                  focus:border-transparent
                  focus:ring-2
                  focus:ring-white
                  focus:ring-offset-2
                  focus:ring-offset-gray-300
                  apearance-none
                  autoexpand
                " id="car_info" type="text" name="car_info" placeholder="info..." required=""></textarea>
                  </div>
                  <div class="flex items-center justify-between">
                    <div class="flex items-center">
                      <input id="remember-me" name="remember-me" type="checkbox" placeholder="Your password" class="
                    w-4
                    h-4
                    text-blue-600
                    border-gray-200
                    rounded
                    focus:ring-blue-500
                  ">
                      <label for="remember-me" class="block ml-2 text-sm text-neutral-600"> Remember me </label>
                    </div>
                    <div class="text-sm">
                      <a href="#" class="font-medium text-blue-600 hover:text-blue-500"> Forgot your password? </a>
                    </div>
                  </div>
                  <div>
                    <button id="submitcars" type="submit" class="
                  flex
                  items-center
                  justify-center
                  w-full
                  px-10
                  py-4
                  text-base
                  font-medium
                  text-center text-white
                  transition
                  duration-500
                  ease-in-out
                  transform
                  bg-blue-600
                  rounded-xl
                  hover:bg-blue-700
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-blue-500
                "> Addcar </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    













      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSF1Bw8HfcJo=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>


</body>
</html>