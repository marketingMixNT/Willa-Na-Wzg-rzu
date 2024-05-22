<button class='lg:hidden' aria-label='otwórz menu' id='hamburger' >
    <img src='/icons/hamburger.svg' alt='' width='48' height='48' class='w-12' />
</button>




<div id='menu' class='menu-close fixed inset-0 flex flex-col justify-between items-center py-8 px-4 bg-third z-50'>

    <div class="flex justify-between w-full">
        
        <div >
            <x-nav.LanguageSwitcher/>
        </div>
        
        <button class='self-end' aria-label='zamknij menu' id="close">
            <img src='/icons/close.svg' alt='' width='24' height='24' class=' w-6' />
        </button>
    </div>

    <a href='/'>
        <img src="/logo--white.png" alt="" class='w-40 md:w-64' />
    </a>



    <ul class='flex flex-col justify-center  w-full text-3xl font-extralight text-white  '>
        <x-nav.NavItemMobile href='/#pokoje'>
            Pokoje
        </x-nav.NavItemMobile>
        <x-nav.NavItemMobile href='/#okolica'>
            Okolica
        </x-nav.NavItemMobile>

        <x-nav.NavItemMobile href='/#kontakt'>
            Kontakt
        </x-nav.NavItemMobile>
    </ul>


    <div class='mb-4 mx-auto px-6 '>
        <a href='https://www.booking.com/hotel/pl/willa-pracus.pl.html' class='link-btn'>
            Zarezerwuj
        </a>
    </div>
</div>
