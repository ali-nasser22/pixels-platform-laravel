<x-layout title="Pixels - Profile">
    <!--Navigation-->
    @include('partials.navigation',['showPostButton' => true])
    <!--Content-->
    <main class="flex flex-col grow gap-4 overflow-y-auto no-scrollbar py-4 px-4 -mx-4">
        <a class="group flex items-baseline gap-1.5" href="/feed">
            <svg
                class="size-3"
                fill="none"
                viewBox="0 0 12 12"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M6.857 0v1.714H5.143V0zM5.143 1.715v1.714H3.429V1.715zM3.427 3.429v1.714H1.713V3.429zM1.715 5.143v1.714H0V5.143zm1.713 1.715v1.714H1.714V6.858zm1.714 1.714v1.714H3.428V8.572zm1.715 1.713V12H5.143v-1.714z"
                    fill="currentColor"
                ></path>
                <path
                    class="opacity-60 group-hover:opacity-100"
                    d="M12 0v1.714h-1.714V0zm-1.714 1.714v1.714H8.572V1.714zM8.57 3.428v1.714H6.856V3.428zM6.857 5.143v1.714H5.143V5.143zM8.57 6.858v1.714H6.856V6.858zm1.715 1.714v1.714H8.571V8.572zM12 10.286V12h-1.714v-1.714z"
                    fill="currentColor"
                ></path>
            </svg>
            <span>back</span>
        </a>
        <!--Profile Header-->
        <header>
            <img alt="" src="{{$profile->cover_url}}"/>
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
        <nav class="overflow-x-auto no-scrollbar pt-6 pb-4">
            <ul class="flex justify-center sm:justify-end gap-8 text-sm min-w-max">
                <li><a href="#">Posts</a></li>
                <li><a class="text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100"
                       href="#">Replies</a></li>
                <li><a class="text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100" href="#">Highlights</a>
                </li>
                <li><a class="text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100" href="#">Inspiration
                        Streams</a>
                </li>
            </ul>
        </nav>
        <!--Feed-->
        <ol class="pt-4 border-pixel-light/10 border-t">
            <!--Feed Items-->
            @foreach($posts as $item)
                <x-post
                    :post="$item->isRepost() && $item->content == null ?$item->repostOf : $item"
                    :show-engagement="true"
                    :show-replies="true"/>
            @endforeach
        </ol>
        <!--Footer-->
        <footer class="mt-30 ml-14">
            <p class="text-center">That's all, Folks!</p>
            <hr class="border-pixel-light/10 my-4">
            <!--white-noise image-->
            <div class="h-20"
                 style="background-image: url('{{ asset('images/white-noise.gif') }}'); background-repeat: repeat;"></div>
        </footer>
    </main>
    <!--SideBar-->
    @include('partials.aside')
</x-layout>
