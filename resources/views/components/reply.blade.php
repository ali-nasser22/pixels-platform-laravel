<li class="relative pt-4 flex items-start gap-4 group/li">
    <!--Line through-->
    <div aria-hidden="true"
         class="absolute top-0 left-5 w-px h-full group-last/li:h-4 bg-pixel-light/10"></div>
    <a class="shrink-0 isolate" href={{ route('profile.show',$item->profile->handle) }}>
        <img alt="avatar" class="size-10 object-cover" src={{$item->profile->avatar_url}}>
    </a>
    <div class="grow border-b border-pixel-light/10 pb-5 pt-1.5">
        <div class="flex justify-between items-center gap-4">
            <div class="flex items-center gap-2.5">
                <p><a class="hover:underline"
                      href={{ route('profile.show',$item->profile->handle) }}>{{$item->profile->display_name}}</a></p>
                <p class="text-xs text-pixel-light/40">{{$item->created_at->diffForHumans()}}</p>
                <p>
                    <a class="text-xs text-pixel-light/40 hover:text-pixel-light/60 transition-opacity duration-100"
                       href={{ route('profile.show',$item->profile->handle) }}>{{$item->profile->handle}}</a></p>
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
        <div class="mt-4 text-sm flex flex-col gap-3">
            {{$item->content}}
        </div>
        <!--Action buttons-->
        <div class="flex justify-between items-center gap-4 mt-6">
            <div class="flex items-center gap-8">
                <!-- Like -->
                <div class="flex items-center gap-1">
                    <button aria-label="Like" class="hover:text-pixel">
                        <svg
                            class="h-[17px]"
                            fill="none"
                            viewBox="0 0 20 17"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#a)" fill="currentColor">
                                <path
                                    d="M5.714 0H2.857v2.857h2.857V0Zm2.858 0H5.714v2.857h2.858V0Zm2.857 2.858H8.57v2.857h2.858V2.858ZM14.288 0h-2.857v2.857h2.857V0Z"
                                />
                                <path
                                    d="M17.143 0h-2.857v2.857h2.857V0ZM20 2.858h-2.857v2.857H20V2.858Z"
                                />
                                <path
                                    d="M20 5.714h-2.857v2.858H20V5.714ZM2.857 2.858H0v2.857h2.857V2.858Z"
                                />
                                <path
                                    d="M2.857 5.714H0v2.858h2.857V5.714Zm2.857 2.858H2.857v2.857h2.857V8.572Zm2.858 2.858H5.714v2.857h2.858v-2.858Zm8.571-2.858h-2.857v2.857h2.857V8.572Zm-2.855 2.858h-2.857v2.857h2.857v-2.858Z"
                                />
                                <path
                                    d="M11.429 14.286H8.57v2.858h2.858v-2.858Z"
                                />
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path d="M0 0h20v17H0z" fill="#fff"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <span class="text-sm">{{$item->likes_count}}</span>
                </div>
                <!-- Comment -->
                <div class="flex items-center gap-1">
                    <button aria-label="Comment" class="hover:text-pixel">
                        <svg
                            class="h-[17px]"
                            fill="none"
                            viewBox="0 0 20 17"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <g clip-path="url(#a)" fill="currentColor">
                                <path d="M3.581 0h1.824v1.824H3.581z"/>
                                <path
                                    d="M1.824 0h1.824v1.824H1.824zm0 10.947h1.824v1.824H1.824zM0 3.649h1.824v1.824H0zm0-1.825h1.824v1.824H0zm18.176 1.825H20v1.824h-1.824zm0-1.825H20v1.824h-1.824z"
                                />
                                <path
                                    d="M0 5.472h1.824v1.824H0zm18.176 0H20v1.824h-1.824zM0 7.297h1.824v1.824H0zm18.176 0H20v1.824h-1.824zM0 9.121h1.824v1.824H0zm18.176 0H20v1.824h-1.824zM3.647 10.947h1.824v1.824H3.647zm9.056 0h1.824v1.824h-1.824zm-7.23 0h1.824v1.824H5.473zm1.824 1.824h1.824v1.824H7.297zm3.581 0h1.824v1.824h-1.824z"
                                />
                                <path
                                    d="M9.122 14.594h1.824v1.824H9.122zm0-9.122h1.824v1.824H9.122zm-3.717 0h1.824v1.824H5.405zm7.431 0h1.824v1.824h-1.824zm1.691 5.475h1.824v1.824h-1.824zM5.405 0h1.824v1.824H5.405zM7.23 0h1.824v1.824H7.23zm1.826 0h1.824v1.824H9.056z"
                                />
                                <path
                                    d="M10.878 0h1.824v1.824h-1.824zm1.825 0h1.824v1.824h-1.824zm1.824 0h1.824v1.824h-1.824zm1.824 0h1.824v1.824h-1.824zm0 10.947h1.824v1.824h-1.824z"
                                />
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path d="M0 0h20v17H0z" fill="#fff"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                    <span class="text-sm">{{$item->replies_count}}</span>
                </div>
                <!-- Re-post -->
                <div class="flex items-center gap-1">
                    <button aria-label="Re-post" class="hover:text-pixel">
                        <svg
                            class="h-[17px]"
                            fill="none"
                            viewBox="0 0 20 17"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M1.429 3.857H0v1.429h1.429V3.857Z"
                                fill="currentColor"
                            />
                            <path
                                d="M2.854 3.857H1.426v1.429h1.428V3.857Z"
                                fill="currentColor"
                            />
                            <path
                                d="M2.854 2.429H1.426v1.429h1.428V2.429Zm1.432 0H2.858v1.429h1.428v-1.43Z"
                                fill="currentColor"
                            />
                            <path
                                d="M4.286 1H2.858v1.429h1.428V1Z"
                                fill="currentColor"
                            />
                            <path
                                d="M5.712 1H4.284v1.429h1.428V1Zm1.432 0H5.716v1.429h1.428V1Z"
                                fill="currentColor"
                            />
                            <path
                                d="M7.144 2.429H5.716v1.429h1.428v-1.43Z"
                                fill="currentColor"
                            />
                            <path
                                d="M8.57 2.429H7.142v1.429H8.57V2.429Z"
                                fill="currentColor"
                            />
                            <path
                                d="M8.57 3.857H7.142v1.429H8.57V3.857Zm1.43 0H8.572v1.429H10V3.857ZM5.712 2.429H4.284v1.429h1.428V2.429Z"
                                fill="currentColor"
                            />
                            <path
                                d="M5.712 3.857H4.284v1.429h1.428V3.857Z"
                                fill="currentColor"
                            />
                            <path
                                d="M5.712 5.286H4.284v1.429h1.428V5.286Z"
                                fill="currentColor"
                            />
                            <path
                                d="M5.712 6.714H4.284v1.429h1.428V6.714Zm0 1.429H4.284v1.429h1.428V8.143Zm1.432 1.429H5.716V11h1.428V9.57Z"
                                fill="currentColor"
                            />
                            <path
                                d="M8.57 9.572H7.142V11H8.57V9.572ZM11.428 11H10v1.428h1.428V11Zm1.428 0h-1.428v1.428h1.428V11Zm0 1.429h-1.428v1.428h1.428V12.43Zm1.43 0h-1.428v1.428h1.428V12.43Zm1.428 1.428h-1.428v1.429h1.428v-1.429Z"
                                fill="currentColor"
                            />
                            <path
                                d="M17.142 13.857h-1.428v1.429h1.428v-1.429Zm-2.856 0h-1.428v1.429h1.428v-1.429Zm2.856-1.428h-1.428v1.428h1.428V12.43Zm1.43 0h-1.428v1.428h1.428V12.43Zm0-1.429h-1.428v1.428h1.428V11Z"
                                fill="currentColor"
                            />
                            <path
                                d="M20 11h-1.429v1.428H20V11Zm-4.286 1.429h-1.428v1.428h1.428V12.43Zm0-1.429h-1.428v1.428h1.428V11Zm0-1.428h-1.428V11h1.428V9.572Z"
                                fill="currentColor"
                            />
                            <path
                                d="M15.714 8.143h-1.428v1.429h1.428V8.143Zm0-1.429h-1.428v1.429h1.428V6.714Z"
                                fill="currentColor"
                            />
                            <path
                                d="M15.714 5.286h-1.428v1.429h1.428V5.286Zm-1.428 0h-1.428v1.429h1.428V5.286Zm-1.43 0h-1.428v1.429h1.428V5.286Z"
                                fill="currentColor"
                            />
                        </svg>
                    </button>
                    <span class="text-sm">{{$item->reposts_count}}</span>
                </div>
            </div>
        </div>
    </div>
</li>
