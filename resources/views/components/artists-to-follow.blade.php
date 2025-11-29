<div class="mt-10 border border-pixel-light/10 p-4">
    <h2 class="text-sm text-pixel-light/60">Artists To Follow</h2>
    <ol class="flex flex-col gap-4 list-none mt-4">
        @foreach($profiles as $profile)
            <li class="flex justify-between items-center gap-4">
                <div class="flex items-center gap-2.5">
                    <img alt="Avatar" class="size-8 object-cover" src="{{$profile->avatar_url}}">
                    <p class="text-sm truncate">{{$profile->display_name}}</p>
                </div>
                <button class="bg-pixel-dark/50 border border-pixel/50 px-2 py-1 text-pixel
                        hover:border-pixel/60 hover:bg-pixel-dark/60
                        active:border-pixel/75 active:bg-pixel-dark/75
                         transition-colors duration-150 text-sm cursor-pointer">Follow
                </button>
            </li>
        @endforeach
    </ol>
    <a class="text-pixel-light/60 text-sm mt-4 inline-block" href="#">Show More...</a>
</div>
