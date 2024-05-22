<footer class='  px-12 md:px-32 py-12 bg-third flex flex-col justify-center items-center xl:justify-start xl:items-start gap-12 xl:gap-0 xl:grid grid-cols-4 text-white'>
    
   
    <div class='col-span-1'>
        <div class='relative flex items-center justify-center max:pl-12'>
            
            <a href="{{route('home')}}" class='flex justify-center items-center'>
                <img src='{{asset('logo--white.png')}}' alt='logo Willa na Wzgórzu w Zakopanym' class=' w-[150px] xl:w-[200px]  max:w-[300px]' width="300" height="209" />
            </a>
        </div>
    </div>

  
    <div class='flex flex-col items-center lg:items-start text-center xl:text-left mx-auto gap-4'>
        <a href="{{route('privacy_policy')}}" class="link-hover"><h2 class='uppercase'>{{__('home.footer.privacy-policy')}}</h2></a
       
        <div></div>
    </div>

    
    <div class='flex flex-col  text-center xl:text-left mx-auto gap-4'>
        <a href='https://maps.app.goo.gl/Ziv89Yi2cS1hckyUA' class="link-hover">
        <h2 class='uppercase'>{{__('home.footer.address')}}</h2>
        
            Żywczańskie 22c <br />
            34-500 Zakopane
       
        </a>
    </div>

   
    <div class='flex flex-col items-end '>
        <div class='flex flex-col justify-center xl:justify-start items-center xl:items-start gap-4 '>
            <h2 class='uppercase'>{{__('home.footer.contact')}}</h2>
            <a class='link-hover' href='mailto:kontakt@willanawzgorzu.pl'>
                kontakt@willanawzgorzu.pl
            </a>
            <a class='link-hover' href='tel:+48795314699'>
                +48 795 314 699
            </a>
        </div>
    </div>

    
    <div class='col-span-4 flex flex-col items-center  xl:items-end gap-4 lg:mt-24'>
        <span class='uppercase text-wrap text-center xs:text-left'>© Willa na Wzgórzu 2024</span>
        <a href='https://marketingmix.pl'>
            <img src='/marketingmix.svg' alt='logo wykonawcy - MarketingMix.pl' class='w-28' />
        </a>
    </div>
</footer>