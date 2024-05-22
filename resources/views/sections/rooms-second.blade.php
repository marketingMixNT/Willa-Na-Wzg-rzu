<section
		
		class=' lg:h-[95vh]  max:h-[80vh] 2xl:mb-20 px-6  lg:px-16 max:px-12  py-10   '>


	
		<div class='flex flex-col lg:flex-row justify-between  h-full gap-8 md:gap-12 lg:gap-16 2xl:gap-32 '>
			

			<div class='flex flex-col justify-between gap-8 md:gap-16 lg:gap-12 w-full lg:w-[45%] lg:order-1'>
				<div class='space-y-12'>
					<h2 class='heading'>{{__('home.rooms-second.title')}}</h2>
					<p class='text'>
						{{__('home.rooms-second.text')}}
					</p>
				</div>

				<div class=''>
					<ul class='space-y-5'>
						<li class='flex items-center gap-6'>
							<img src='/icons/trees.svg' alt='' class=' w-8 2xl:w-12' />
							<span class='uppercase font-light text-sm 2xl:font-base'>{{__('home.rooms-second.feature')}}</span>
						</li>
						<li class='flex items-center gap-6'>
							<img src='/icons/mountains.svg' alt='' class=' w-8 2xl:w-12' />
							<span class='uppercase font-light text-sm 2xl:font-base'>{{__('home.rooms-second.feature-two')}}</span>
						</li>
						<li class='flex items-center gap-6'>
							<img src='/icons/internet.svg' alt='' class=' w-8 2xl:w-12' />
							<span class='uppercase font-light text-sm 2xl:font-base'>{{__('home.rooms-second.feature-three')}}</span>
						</li>
						<li class='flex items-center gap-6'>
							<img src='/icons/sun.svg' alt='' class=' w-8 2xl:w-12' />
							<span class='uppercase font-light text-sm 2xl:font-base'>{{__('home.rooms-second.feature-four')}}</span>
						</li>
					</ul>
				</div>

				<p class='text--small '>
					{{__('home.rooms-second.text-two')}}
				</p>
			</div>
		
			<div class=' w-full lg:w-[55%] py-6'>
				<x-CarouselRoom />
			</div>
		</div>
	</section>