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
        <!--Feed-->
        <ol class="mt-4">
            <!--Feed Items-->
            <x-post
                :post="$post"
                :show-replies="true"/>
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
