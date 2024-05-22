<section id='kontakt' class='px-6 sm:px-12 md:px-20 py-10  md:py-20 '>

    <div class='flex flex-col justify-center items-center lg:flex-row gap-12 lg:gap-0 '>
      
        <div class='w-full lg:w-1/2 '>
            <img
                src='/img/willa_na_wzgorzu-10.jpg'
                alt='wnętrze Willa na Wzgórzu w Zakopanym'
                loading='lazy'
                class='h-full max-h-[400px] sm:max-h-[500px] lg:min-h-[600px] 2xl:min-h-[800px] max:min-h-[1000px] w-full object-cover lg:pr-24 max:px-24'
            />
        </div>
    
        <div class='w-full  lg:w-1/2 flex flex-col  justify-between gap-12 max:gap-32'>
           
            <div>
                <h2 class='heading'>Napisz do nas</h2>
                <h3 class='heading'>Z przyjemnością Ci pomożemy</h3>




                @if (isset($formSubmitted))
                <script>
                    const formSubmitted = {!! json_encode($formSubmitted) !!};
                    window.onload = function() {
                        if (formSubmitted) {
                            var element = document.getElementById('formContact');
                            var rect = element.getBoundingClientRect();
                            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                            window.scrollTo(0, rect.top + scrollTop - 300);
                        }
                    }
                </script>

                <div id="formContact" class="flex  h-full mt-24">
                    <div class=" flex flex-col gap-4  my-6">

                        <h3 class="text-5xl font-semibold mb-2 ">Dziękujemy za wiadomość!</h3>
                        <span class="text-xl font-normal">Odezwiemy się najszybciej jak to możliwe</span>
                    </div>
                </div>
            @else



                <form method="POST" action="{{ route('contact_form') }}" id="contactForm"   class='w-full flex flex-col gap-8 2xl:pr-64 mt-12'>
                    @csrf
                    {{-- <span class={`text-2xl font-bold uppercase ${sendingForm ? '' : 'hidden'}`}>{result}</span> --}}

                

                    <input
                        type='text'
                        name='name'
                        id='name'
                        placeholder='Imię i nazwisko'
                        class='w-full border-secondary border rounded-full border-dashed  px-4 py-3 outline-none focus:border-solid'
                    />

                    <input
                        type='email'
                        id='email'
                        name='email'
                        name='Adres Email'
                        placeholder='Adres email'
                        class='w-full border-secondary border rounded-full border-dashed px-4 py-3 outline-none focus:border-solid'
                    />

                    <textarea
                        name='content'
                        id='content'
                        cols='30'
                        rows='6'
                        class='w-full border-secondary border rounded-3xl border-dashed px-4 py-4 outline-none focus:border-solid'
                        placeholder='Wiadomość'></textarea>

                    <button type='submit' class='btn-submit'>
                        Wyślij
                    </button>
                </form>
                @endif
            </div>
            
            <div class='flex flex-col items-start gap-6 lg:mt-12 lg:hidden 2xl:flex'>
                <a href='https://instagram.com' target='_blank' class='text-3xl link-hover--dark'>
                    @WillaNaWzgorzu
                </a>
                <div class='flex flex-col sm:flex-row justify-center  gap-2 mx-auto'>
                    <a href='https://instagram.com' target='_blank' class=' w-full  sm:w-1/3 h-[250px] max:h-[300px]'>
                        <img
                            src='/img/willa_na_wzgorzu-37.jpg'
                            alt=''
                            class='w-full h-full object-cover'
                            height={300}
                            width={300}
                            loading='lazy'
                        />
                    </a>
                    <a href='https://instagram.com' target='_blank' class=' w-full sm:w-1/3 h-[250px] max:h-[300px]'>
                        <img
                            src='/img/willa_na_wzgorzu-5.jpg'
                            alt=''
                            class='w-full h-full object-cover'
                            height={300}
                            width={300}
                            loading='lazy'
                        />
                    </a>
                    <a href='https://instagram.com' target='_blank' class=' w-full sm:w-1/3 h-[250px] max:h-[300px]'>
                        <img
                            src='/img/willa_na_wzgorzu-41.jpg'
                            alt=''
                            class='w-full h-full object-cover'
                            height={300}
                            width={300}
                            loading='lazy'
                        />
                    </a>
                </div>
                <a href='https://instagram.com' target='_blank' class='link-btn--dark text-center w-full'>
                    Śledź nas
                </a>
            </div>
        </div>
    </div>
  
    <div class='hidden flex-col items-start gap-6 mt-12 lg:flex 2xl:hidden'>
        <a href='https://instagram.com' target='_blank' class='text-3xl link-hover--dark'>
            @WillaNaWzgorzu
        </a>
        <div class='flex flex-col sm:flex-row justify-center  gap-2 mx-auto'>
            <a href='https://instagram.com' target='_blank' class=' w-full  sm:w-1/3 h-[300px]'>
                <img
                    src='/img/willa_na_wzgorzu-37.jpg'
                    alt=''
                    class='w-full h-full object-cover'
                    height={300}
                    width={300}
                    loading='lazy'
                />
            </a>
            <a href='https://instagram.com' target='_blank' class=' w-full sm:w-1/3 h-[300px]'>
                <img
                    src='/img/willa_na_wzgorzu-5.jpg'
                    alt=''
                    class='w-full h-full object-cover'
                    height={300}
                    width={300}
                    loading='lazy'
                />
            </a>
            <a href='https://instagram.com' target='_blank' class=' w-full sm:w-1/3 h-[300px]'>
                <img
                    src='/img/willa_na_wzgorzu-41.jpg'
                    alt=''
                    class='w-full h-full object-cover'
                    height={300}
                    width={300}
                    loading='lazy'
                />
            </a>
        </div>
        <a href='https://instagram.com' target='_blank' class='link-btn--dark text-center w-full'>
            Śledź nas
        </a>
    </div>
</section>