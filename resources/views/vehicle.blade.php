<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <title>vehicle</title>

 
</head>
<body>
   


    
  <div class="container w-full max-w-7xl">
    <div x-data="{ open: false }" class="
  flex flex-col
  max-w-screen-xl
  p-5
  mx-auto
  md:items-center md:justify-between md:flex-row md:px-6
  lg:px-8
">
      <div class="flex flex-row items-center justify-between lg:justify-start">
        <a href="./index.html" class="
      text-lg
      font-bold
      tracking-tighter
      text-blue-600
      transition
      duration-500
      ease-in-out
      transform
      tracking-relaxed
      lg:pr-8
    "> wickedblocks </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden pb-4 border-blue-600 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2">
        <a class="
      px-4
      py-2
      mt-2
      text-sm text-gray-500
      md:mt-0
      hover:text-blue-600
      focus:outline-none focus:shadow-outline
    " href="#">About</a>
        <a class="
      px-4
      py-2
      mt-2
      text-sm text-gray-500
      md:mt-0
      hover:text-blue-600
      focus:outline-none focus:shadow-outline
    " href="#">Contact</a>
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
          <button @click="open = !open" class="
        flex flex-row
        items-center
        w-full
        px-4
        py-2
        mt-2
        text-sm text-left text-gray-500
        md:w-auto md:inline md:mt-0
        hover:text-blue-600
        focus:outline-none focus:shadow-outline
      ">
            <span>Dropdown List</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0 md:-mt-1">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="
        absolute
        right-0
        z-30
        w-full
        mt-2
        origin-top-right
        rounded-md
        shadow-lg
        md:w-48
      " style="display: none">
            <div class="px-2 py-2 bg-white rounded-md shadow">
              <a class="
            block
            px-4
            py-2
            mt-2
            text-sm text-gray-500
            md:mt-0
            hover:text-blue-600
            focus:outline-none focus:shadow-outline
          " href="#">Link #1</a>
              <a class="
            block
            px-4
            py-2
            mt-2
            text-sm text-gray-500
            md:mt-0
            hover:text-blue-600
            focus:outline-none focus:shadow-outline
          " href="#">Link #2</a>
              <a class="
            block
            px-4
            py-2
            mt-2
            text-sm text-gray-500
            md:mt-0
            hover:text-blue-600
            focus:outline-none focus:shadow-outline
          " href="#">Link #3</a>
            </div>
          </div>
        </div>
        <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
          <button class="
        items-center
        block
        px-10
        py-2.5
        text-base
        font-medium
        text-center text-blue-600
        transition
        duration-500
        ease-in-out
        transform
        border-2 border-white
        shadow-md
        rounded-xl
        focus:outline-none
        focus:ring-2
        focus:ring-offset-2
        focus:ring-gray-500
      "> Sign in </button>
          <button class="
        items-center
        block
        px-10
        py-3
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
      "> Sign up </button>
        </div>
      </nav>
    </div>
  </div>





      <section class="text-gray-600 body-font mt-24 ml-8">
          {{-- {{ dd($body) }} --}}
          {{-- <div class="grid grid-row-3"> --}}
              <div class="flex flex-wrap sm:m-4 mx-4 -mb-10 -mt-4 bg-gray-100">
                  @foreach ($body["cars"] as $car )
              <div class="p-4 md:w-1/3 sm:mb-0 mb-6 shadow-xl">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="http://10.47.12.61:8080/storage/images/{{ $car['car_photo'] }}">
              </div>
              <h2 class="text-xl font-medium title-font text-black mt-5">{{ $car['car_name'] }}</h2>
              <h2 class="text-xl font-medium title-font text-black mt-5">${{ $car['car_price'] }}.00</h2>
              <p class="text-base leading-relaxed mt-2 truncate">{{ $car['car_info'] }}</p>
             <a href="{{ route('carinfo',$car['id']) }}" class="text-indigo-500 inline-flex items-center mt-3">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            @endforeach
          </div>
        {{-- </div> --}}
      </section>

    <ul class="background">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
     </ul>
    
     

</body>
</html>