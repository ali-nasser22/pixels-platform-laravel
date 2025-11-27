<header class="w-48 shrink-0 my-4 pl-4 xl:ml-40  hidden sm:flex flex-col gap-8 justify-between">
    <div class="overflow-y-auto no-scrollbar">
        <!--Logo-->
        <a href="/">
            <svg class="h-8" fill="none" viewBox="0 0 182 61"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M10.083 0H0v10.083h10.083V0Zm10.084 0H10.084v10.083h10.083V0Z"
                      fill="#EEE"></path>
                <path
                    d="M30.25 0H20.165v10.083h10.083V0ZM10.083 10.083H0v10.084h10.083V10.083Zm30.25 0H30.25v10.084h10.083V10.083Zm-30.25 10.084H0V30.25h10.083V20.167Zm30.25 0H30.25V30.25h10.083V20.167ZM10.083 30.25H0v10.083h10.083V30.25Zm10.084 0H10.084v10.083h10.083V30.25Z"
                    fill="#EEE"></path>
                <path
                    d="M30.25 30.25H20.165v10.083h10.083V30.25ZM10.083 40.333H0v10.084h10.083V40.333Zm0 10.084H0V60.5h10.083V50.417ZM60.5 0H50.415v10.083h10.083V0Zm10.083 0H60.5v10.083h10.083V0Zm10.084 0H70.584v10.083h10.083V0ZM70.583 10.083H60.5v10.084h10.083V10.083Zm0 10.084H60.5V30.25h10.083V20.167Zm0 10.083H60.5v10.083h10.083V30.25Zm0 10.083H60.5v10.084h10.083V40.333Zm0 10.084H60.5V60.5h10.083V50.417ZM60.5 50.416H50.415V60.5h10.083V50.416Zm20.167 0H70.584V60.5h10.083V50.416Z"
                    fill="#EEE"></path>
                <path
                    d="M100.833 0H90.75v10.083h10.083V0Zm0 10.083H90.75v10.084h10.083V10.083ZM131.083 0H121v10.083h10.083V0Zm0 10.083H121v10.084h10.083V10.083Zm-30.25 30.25H90.75v10.084h10.083V40.333Zm0 10.084H90.75V60.5h10.083V50.417Zm30.25-10.084H121v10.084h10.083V40.333Zm0 10.084H121V60.5h10.083V50.417ZM110.917 30.25h-10.083v10.083h10.083V30.25Zm10.082-10.084h-10.083V30.25h10.083V20.166Z"
                    fill="#ECA749"></path>
                <path d="M110.917 20.166h-10.083V30.25h10.083V20.166Zm10.082 10.084h-10.083v10.083h10.083V30.25Z"
                      fill="#ECA749"></path>
                <path d="M151.249 0h-10.083v10.083h10.083V0Zm0 10.084h-10.083v10.083h10.083V10.083Z"
                      fill="#EEE"></path>
                <path
                    d="M151.249 20.166h-10.083V30.25h10.083V20.166Zm0 10.084h-10.083v10.083h10.083V30.25Zm0 10.084h-10.083v10.083h10.083V40.333Z"
                    fill="#EEE"></path>
                <path
                    d="M151.249 50.416h-10.083V60.5h10.083V50.416Zm10.084.001H151.25V60.5h10.083V50.417Zm10.084-.001h-10.083V60.5h10.083V50.416Z"
                    fill="#EEE"></path>
                <path d="M181.499 50.416h-10.083V60.5h10.083V50.416Z" fill="#EEE">
                </path>
            </svg>
        </a>
        <!--Nav-->
        <nav class="mt-10">
            <ul class="flex flex-col gap-3.5">
                <li><a class="hover:underline" href="#">Home</a></li>
                <li><a class="hover:underline" href="#">Explore</a></li>
                <!--Active Item-->
                <li class="-ml-4 flex gap-2 items-center">
                    <div class="size-2 bg-pixel shrink-0"></div>
                    <a class="hover:underline" href="#">Notifications</a>
                </li>
                <li><a class="hover:underline" href="#">Lists</a></li>
                <li><a class="hover:underline" href="#">BookMarks</a></li>
                <li><a class="hover:underline" href="#">Jobs</a></li>
                <li><a class="hover:underline" href="#">Communities</a></li>
                <li><a class="hover:underline" href="#">Premium</a></li>
                <li><a class="hover:underline" href="#">Profile</a></li>
                <li><a class="hover:underline" href="#">More</a></li>
            </ul>
        </nav>
    </div>
    @isset($showPostButton)
        <div class="flex flex-col gap-6">
            <button
                class="bg-pixel text-pixel-dark px-4 py-3 border border-transparent text-sm hover:bg-pixel/90 transition-colors duration-150 active:bg-pixel/95 font-bold"
            >Post
            </button>

            @endisset
            <!--User Controls-->
            <div class="flex gap-3.5">
                <a class="shrink-0" href="/profile">
                    <img alt="avatar" class="size-11" src={{asset('images/adrian.png')}}>
                </a>
                <div class="flex flex-col gap-1 text-sm">
                    <p>_adrian</p>
                    <p class="text-pixel-light/60">@tudssss</p>
                </div>
                <button aria-label="Post options" class="flex gap-[3px] group py-2">
                <span
                    class="size-1 bg-pixel-light/40 group-hover:bg-pixel-light/60 transition-opacity duration-100"></span>
                    <span
                        class="size-1 bg-pixel-light/40 group-hover:bg-pixel-light/60 transition-opacity duration-100"></span>
                    <span
                        class="size-1 bg-pixel-light/40 group-hover:bg-pixel-light/60 transition-opacity duration-100"></span>
                </button>
            </div>
            @isset($showPostButton)
        </div>
    @endisset
</header>
