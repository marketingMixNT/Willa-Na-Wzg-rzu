<x-Layout>

    @section('title', __('Willa na Wzgórzu'))
    @section('description', __('Willa na Wzgórzu: komfortowe pokoje w Zakopanem, blisko szlaków górskich. Ciesz się spokojem, ogrodem i wygodą, z centrum w zasięgu spaceru.'))

    @include('sections.rooms')
    @include('sections.rooms-second')
    @include('sections.hero-carousel')
    @include('sections.outdoor')
    @include('sections.contact')
    

</x-Layout>