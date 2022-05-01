<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <title>Document</title>

</head>
<body>
   <!-- component -->
<div class="flex">
	<div class="bg-white md:flex w-2/5 md:w-1/4 h-screen border-r border-black hidden">
		<div class="mx-auto py-10">
			<h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">Now CarSales</h1>
			<ul>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
						stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
					</svg>
					<a href="{{ route('home') }}" class="font-semibold">Home</a>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
						stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
					</svg>
					<a href="{{ route('vehicle') }}" class="font-semibold">All Cars</a>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
						stroke="currentColor">
						<path d="M12 14l9-5-9-5-9 5 9 5z" />
						<path
							d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
					</svg>
					<a href="#" class="font-semibold">dashboard</a>
				</li>
				<li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
						stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
					</svg>
					<a href="#" class="font-semibold">Profile</a>
				</li>
			</ul>
		</div>
	</div>
	<main class="bg-white min-h-screen w-full">
		<nav class="flex items-center justify-between px-10 py-6 border-b border-black">
			<div class="flex items-center bg-gray-100 px-4 py-2 rounded-md space-x-3 w-96">
				<input type="text" placeholder="search" class="bg-gray-100 outline-none w-full" />
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer text-gray-500" fill="none"
					viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
				</svg>
			</div>

			<div class="dropdown-menu dropdown-menu-end ml-96" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</div>

			<div class="flex items-center space-x-4">
				<img class="w-8 rounded-full" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="Elon Musk" />
				<p class="hidden md:block">Alucard</p>
			</div>
		</nav>
		<div class="mx-6">
			<h1 class="my-6 text-3xl">Yuh Know Now</h1>
			<div class="md:flex  space-y-3 md:space-y-0 md:space-x-4 mt-6">
				<div class="h-90 rounded-md  bg-gray-300 p-10">
					<p class="text-3xl font-thin text-black cursor-pointer">If anuh we anuh Now</p>
					<div class="flex items-center mt-4 space-x-4">
						<div>
							<h3 class="text-black font-semibold cursor-pointer">Thomas Hope</h3>
							<p class="text-black text-sm font-thin">53K views • 2 weeks ago</p>
						</div>
					</div>
				</div>
				<div class="h-90  rounded-md bg-gray-300 p-10">
					<p class="text-3xl font-thin text-black cursor-pointer">If anuh we anuh Now</p>
					<div class="flex items-center mt-4 space-x-4">
						<div>
							<h3 class="text-black font-semibold cursor-pointer">Thomas Hope</h3>
							<p class="text-black text-sm font-thin">53K views • 2 weeks ago</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mx-6 grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-4 mt-10">
			<div class="bg-gray-300 shadow-lg rounded-t-md overflow-hidden ">
				<div class="">
					<img class="h-36 w-full object-cover" src="https://images.dealer.com/ddc/vehicles/2021/Honda/Civic%20Type%20R/Hatchback/color/Championship%20White-NH_0-228,229,223-640-en_CA.jpg" alt="" />
					<div class="p-2 relative">
						<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
						<p>53K views • 2 weeks ago</p>
      </div>
					</div>
				</div>
				<div class="bg-gray-300 shadow-lg rounded-t-md overflow-hidden">
					<div class="">
						<img class="h-36 w-full  object-cover" src="https://1.bp.blogspot.com/-iU01msSn7YM/X1WJpthijjI/AAAAAAAAFks/79lPa-wcqWYx8VzIAIlR42BjGwVInLHzQCPcBGAYYCw/s2048/2021%2BBMW%2B5%2BSeries%2BM%2BPerformance.jpg" alt="" />
						<div class="p-2 relative">
							<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
							<p>53K views • 2 weeks ago</p>
      </div>
						</div>
					</div>
					<div class="bg-gray-300 shadow-lg rounded-t-md overflow-hidden ">
						<div class="">
							<img class="h-36 w-full object-cover" src="https://cdn.motor1.com/images/mgl/79bpp/s1/2018-mercedes-amg-glc63-coupe-first-drive.jpg" alt="" />
							<div class="p-2 relative">
								<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly</p>
								<p>53K views • 2 weeks ago</p>
      </div>
							</div>
						</div>
						<div class="bg-gray-300 shadow-lg rounded-t-md overflow-hidden ">
							<div class="">
								<img class="w-sm" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29kZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" />
								<div class="p-2 relative">
									<p class="text-lg mt-6 font-semibold">Basic how to ride your skateboard comfortly
									</p>
									<p>53K views • 2 weeks ago</p>
                  </div>
								</div>
							</div>
						</div>
					</div>
					
          </main>
</div>
</body>
</html>