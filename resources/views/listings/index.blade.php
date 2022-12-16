<x-layout>
    <div class="container my-5" id="hero">
        @include('partials._hero')
        <hr>
    </div>
    <div class="container" id="listings">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @unless (count($listings) == 0)
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach

                @else
                    <p class="text-dark">No listings to show.</p>
            @endunless
        </div>
    </div>
    <div class="container my-5">{{$listings->links()}}</div>
</x-layout>