<section
			id='okolica'
			class=' lg:h-[95vh]  max:h-[80vh] 2xl:mb-20 px-10 lg:px-16 max:px-12  2xl:pb-10 md:py-10 2xl:py-20   '>
		
			<div class='flex flex-col lg:flex-row justify-between  h-full gap-8 md:gap-12 lg:gap-16 2xl:gap-32 max:gap-64'>
			

				<div class='flex flex-col justify-around gap-8 md:gap-16 lg:gap-12 w-full lg:w-[45%]'>
					<div class='space-y-12'>
						<h2 class='heading'>{{__('home.outdoor.title')}}</h2>
						
						<p class='text'>
							{{__('home.outdoor.text')}} 
						</p>
					</div>
					<p class='text--small'>
						{{__('home.outdoor.text-two')}}</p>
				</div>
				
				<div class=' w-full lg:w-[55%] py-6'>
					<x-CarouselOutdoor />
				</div>
			</div>
		</section>