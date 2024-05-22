<x-Layout>

    @section('title', __('home.title'))
    @section('description', __('home.description'))

    @include('sections.rooms')
    @include('sections.rooms-second')
    @include('sections.hero-carousel')
    @include('sections.outdoor')
    @include('sections.contact')
    

</x-Layout>