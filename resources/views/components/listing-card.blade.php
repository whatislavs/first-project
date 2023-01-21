@props (['listItem'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listItem->logo ? asset('storage/' . $listItem->logo) : asset('/images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listItem->id}}">{{$listItem->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listItem->company}}</div>
            
            <x-listing-tags :tagsCsv="$listItem->tags" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listItem->location}}
            </div>
        </div>
    </div>
</x-card>