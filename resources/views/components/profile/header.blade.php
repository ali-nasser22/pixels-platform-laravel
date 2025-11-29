<!--Profile Header-->
<header>
    <img alt="cover" src="{{$profile->cover_url}}"/>
    <div
        class="-mt-10 flex flex-wrap items-end justify-between gap-4 md:-mt-16"
    >
        <div class="flex items-end gap-4">
            <img
                alt="Avatar for Adrian"
                class="size-20 object-cover md:size-32"
                src="{{$profile->avatar_url}}"
            />
            <div class="flex flex-col text-sm md:gap-1">
                <p class="text-lg md:text-xl">{{$profile->display_name}}</p>
                <p class="text-pixel-light/60 text-sm">{{$profile->handle}}</p>
            </div>
        </div>
        <a
            class="bg-pixel-dark/50 hover:bg-pixel-dark/60 active:bg-pixel-dark/75 border-pixel/50 hover:border-pixel/60 active:border-pixel/75 text-pixel border px-2 py-1 text-sm"
            href="#"
        >
            Edit Profile
        </a>
    </div>
    <div class="[&_a]:text-pixel mt-8 [&_a]:hover:underline">
        <p>{{$profile->bio}}</p>
    </div>
    <dl class="mt-6 flex gap-6">
        <div class="flex gap-1.5">
            <dd>{{$profile->followings_count}}</dd>
            <dt class="text-pixel-light/60">Following</dt>
        </div>
        <div class="flex gap-1.5">
            <dd>{{$profile->followers_count}}</dd>
            <dt class="text-pixel-light/60">Followers</dt>
        </div>
    </dl>
</header>
<!--Navigation/tabs-->
<nav class="overflow-x-auto overflow-y-hidden no-scrollbar pt-6 pb-4">
    <ul class="flex justify-center sm:justify-end gap-8 text-sm min-w-max">
        <li><a href="{{ route('profile.show',$profile->handle) }}"
               class={{request()->routeIs('profile.show') ? " ":"text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100"}}>Posts</a>
        </li>
        <li><a href="{{ route('profile.replies',$profile->handle) }}"
               class={{request()->routeIs('profile.replies') ? " ":"text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100"}}>Replies</a>
        </li>
        <li><a class="text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100"
               href="#">Highlights</a>
        </li>
        <li><a class="text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100" href="#">Inspiration
                Streams</a>
        </li>
    </ul>
</nav>
