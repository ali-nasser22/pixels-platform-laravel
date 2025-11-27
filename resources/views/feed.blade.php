<x-layout title="Pixels - Feed">
    <!--Navigation-->
    @include('partials.navigation')
    <!--Content-->
    <main class="flex flex-col grow gap-4 overflow-y-auto no-scrollbar py-4 px-4 -mx-4">
        <nav class="overflow-x-auto no-scrollbar py-6">
            <ul class="flex justify-center sm:justify-end gap-8 text-sm min-w-max">
                <li><a href="#">For You</a></li>
                <li><a class="text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100" href="#">Idea
                        Streams</a></li>
                <li><a class="text-pixel-light/60 hover:text-pixel-light/80 transition-colors duration-100" href="#">Following</a>
                </li>
            </ul>
        </nav>
        <!--Post Prompt-->
        <div class="flex mt-8 gap-4 items-start border-b border-b-pixel-light/10 pb-4">
            <a class="shrink-0" href="/profile">
                <img alt="Avatar" class="size-10 object-cover" src={{asset('images/adrian.png')}}>
            </a>
            @include('partials.post-form',['labelText'=>'Post Body','fieldName' => "post","placeHolder" => "What's up _adrian?","rows" => "4"])
        </div>
        <!--Feed-->
        <ol class="mt-4">
            <!--Feed Items-->
            @foreach($feedItems as $item)
                @include('partials.feed-item',compact('item'))
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
