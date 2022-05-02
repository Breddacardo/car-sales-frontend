<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

{{-- {{ dd($body) }} --}}
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
        "> Now car sales </a>
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
            <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
              <a class="
              px-4
              py-2
              mt-2
              text-sm text-gray-500
              md:mt-0
              hover:text-blue-600
              focus:outline-none focus:shadow-outline
            " href="#">{{ Auth::user()->name }}</a>
          
           <a class="items-center
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
          focus:ring-gray-500" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
				</a>
   
            </div>
          </nav>
        </div>
      </div>
    



    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="lg:w-4/5 mx-auto flex flex-wrap">
            {{-- @foreach ($collection as $item) --}}
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
              <h2 class="text-sm title-font text-gray-500 tracking-widest">Now car sales</h2>
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $body['cars']['car_name'] }}</h1>
              <div class="flex mb-4">
                <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Car Description</a>
              </div>
              <p class="leading-relaxed mb-4">{{ $body['cars']['car_info'] }}</p>
             
              <div class="flex">
                <span class="title-font font-medium text-2xl text-gray-900">${{ $body['cars']['car_price'] }}</span>
                <a href="#" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Buy Now</a>
              </div>
            </div>
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="http://10.47.12.61:8080/storage/images/{{ $body['cars']['car_photo'] }}">
          </div>
          {{-- @endforeach --}}
        </div>
      </section>
</body>
</html>