<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="">
    <title>Document</title>


</head>
<body>
    <section class="text-white bg-gray-900">
        <div class="max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
          <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold text-transparent sm:text-5xl bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
              Now car rental.
      
              <span class="sm:block">
                yuh know now.
              </span>
            </h1>
      
            <p class="max-w-xl mx-auto mt-4 sm:leading-relaxed sm:text-xl">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus numquam ea!
            </p>
      
            <div class="flex flex-wrap justify-center gap-4 mt-8">
              {{-- <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring" href="/get-started">
                Make a reservatoin
              </a> --}}

              <a href="{{ route('reservation') }}" class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">
                Offers
                </a>
              
            </div>
          </div>
        </div>
      </section>
</body>
</html>