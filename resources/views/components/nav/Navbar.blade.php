<nav class='  flex justify-between px-4 sm:px-12 xl:px-16 py-4 duration-500 z-50 '>
    
    <a href='/' class='text-3xl font-light text-white mt-1 lg:mt-0 flex justify-center items-center gap-2'>
    <img src='/logo--navbar.png' class='w-12 hidden sm:block ' /><span>


        Willa <span class=' ml-2 font-light'>na <span class='ml-2'>Wzgórzu</span></span> </span>
    </a>

 

    <x-nav.Mobile />

    
    <ul class='hidden lg:flex justify-center items-center gap-12 xl:gap-12 text-white text-lg'>
        <x-nav.NavItemDesktop href='/#pokoje'>{{__('home.header.nav-item-one')}}</x-nav.NavItemDesktop>
        <x-nav.NavItemDesktop href='/#okolica'>{{__('home.header.nav-item-two')}}</x-nav.NavItemDesktop>

        <x-nav.NavItemDesktop href='/#kontakt'>{{__('home.header.nav-item-three')}}</x-nav.NavItemDesktop>
        <x-nav.NavItemDesktop href='https://www.booking.com/hotel/pl/willa-pracus.pl.html'>{{__('home.header.nav-item-four')}}</x-nav.NavItemDesktop>

        <x-nav.LanguageSwitcher/>
    </ul>
</nav>
