

<ul class="flex flex-row gap-4 text-white ">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="hover:border-b duration-100 uppercase text-white">
                {{ $properties['slug'] }}
            </a>
        </li>
    @endforeach
</ul>