<header
			class="flex flex-col justify-between w-screen h-screen  bg-blend-multiply bg-gray-300 relative">
			<img src="{{asset('img/willa_na_wzgorzu-7.jpg')}}" alt="widok z góry na Willa na Wzgórzu w Zakopanym" class="w=full h-full object-cover object-top" >

			<div class="fixed top-0 left-0 right-0  z-50 duration-500" id="navbar">
				
				
				<div id="marquee" class='border-b py-3 text-xs text-white flex flex-col gap-20'>
					<span class="mr-6">{{__('home.header.marquee-one')}}</span>
					<span class="mr-6">{{__('home.header.marquee-two')}}</span>
					<span class="mr-6">{{__('home.header.marquee-three')}}</span>
					<span class="mr-6">{{__('home.header.marquee-four')}}</span>
					<span class="mr-6">{{__('home.header.marquee-one')}}</span>
					<span class="mr-6">{{__('home.header.marquee-two')}}</span>
					<span class="mr-6">{{__('home.header.marquee-three')}}</span>
					<span class="mr-6">{{__('home.header.marquee-four')}}</span>
					<span class="mr-6">{{__('home.header.marquee-one')}}</span>
					<span class="mr-6">{{__('home.header.marquee-two')}}</span>
					<span class="mr-6">{{__('home.header.marquee-three')}}</span>
					<span class="mr-6">{{__('home.header.marquee-four')}}</span>
					
					
				</div> 
				

				<x-nav.Navbar/>
			</div>

			<h1 class='text-5xl sm:text-6xl text-center font-normal text-white px-6 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2'>
				{{__('home.header.heading')}}
				<span class='pt-12 font-extralight ml-3'>{{__('home.header.heading-two')}}</span>
			</h1>
			<div class='mx-auto px-6 pb-16 absolute bottom-5 left-1/2  transform -translate-x-1/2 '>
				<a href='https://www.booking.com/hotel/pl/willa-pracus.pl.html' class='link-btn'>
					{{__('home.header.book')}}
				</a>
			</div>
		</header>



        