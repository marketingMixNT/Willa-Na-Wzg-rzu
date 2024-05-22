<nav class='  flex justify-between px-4 sm:px-12 xl:px-16 py-4 duration-500 z-50 '>
    
    <a href='/' class='text-3xl font-light text-white mt-1 lg:mt-0 flex justify-center items-center gap-2'>
    <img src='/logo--navbar.png' class='w-12 hidden sm:block ' /><span>


        Willa <span class=' ml-2 font-light'>na <span class='ml-2'>Wzgórzu</span></span> </span>
    </a>

 

    <x-nav.Mobile />

    
    <ul class='hidden lg:flex justify-center items-center gap-12 xl:gap-12 text-white text-lg'>
        <x-nav.NavItemDesktop href='/#pokoje'>Pokoje</x-nav.NavItemDesktop>
        <x-nav.NavItemDesktop href='/#okolica'>Okolica</x-nav.NavItemDesktop>

        <x-nav.NavItemDesktop href='/#kontakt'>Kontakt</x-nav.NavItemDesktop>
        <x-nav.NavItemDesktop href='https://www.booking.com/hotel/pl/willa-pracus.pl.html'>Rezerwuj</x-nav.NavItemDesktop>

        <x-nav.LanguageSwitcher/>
    </ul>
</nav>
