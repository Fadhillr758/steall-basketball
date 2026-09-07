<nav
    x-data="{ mobileOpen: false, profileOpen: false }"
    class="sticky top-0 z-50 bg-[#0A0A0A]/95 backdrop-blur-xl border-b border-white/10"
>
    <div class="max-w-7xl mx-auto px-6 lg:px-16">

        <div class="h-20 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center">
                <img
                    src="{{ asset('images/steall-logo.png') }}"
                    alt="STEALL Basketball"
                    class="h-12 w-auto"
                >
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center gap-1 h-full">

                <a href="{{ route('home') }}"
                    class="relative h-full flex items-center px-5 text-xs font-semibold tracking-[0.15em]
                    {{ request()->routeIs('home') ? 'text-white' : 'text-white/50 hover:text-white' }}">
                    HOME

                    @if(request()->routeIs('home'))
                        <span class="absolute bottom-0 left-5 right-5 h-[2px] bg-[#B91C1C]"></span>
                    @endif
                </a>

                <a href="{{ route('about') }}"
                    class="relative h-full flex items-center px-5 text-xs font-semibold tracking-[0.15em]
                    {{ request()->routeIs('about') ? 'text-white' : 'text-white/50 hover:text-white' }}">
                    ABOUT

                    @if(request()->routeIs('about'))
                        <span class="absolute bottom-0 left-5 right-5 h-[2px] bg-[#B91C1C]"></span>
                    @endif
                </a>

                <a href="{{ route('contact') }}"
                    class="relative h-full flex items-center px-5 text-xs font-semibold tracking-[0.15em]
                    {{ request()->routeIs('contact') ? 'text-white' : 'text-white/50 hover:text-white' }}">
                    CONTACT

                    @if(request()->routeIs('contact'))
                        <span class="absolute bottom-0 left-5 right-5 h-[2px] bg-[#B91C1C]"></span>
                    @endif
                </a>

                @auth

                    <div class="w-px h-5 bg-white/10 mx-3"></div>

                    <a href="{{ route('schedule') }}"
                        class="relative h-full flex items-center px-5 text-xs font-semibold tracking-[0.15em]
                        {{ request()->routeIs('schedule') ? 'text-white' : 'text-white/50 hover:text-white' }}">
                        JADWAL
                    </a>

                    <a href="{{ route('dashboard') }}"
                        class="relative h-full flex items-center px-5 text-xs font-semibold tracking-[0.15em]
                        {{ request()->routeIs('dashboard') ? 'text-white' : 'text-white/50 hover:text-white' }}">
                        DASHBOARD
                    </a>

                @endauth

            </div>

            {{-- Login / Profile --}}
            <div class="hidden lg:flex items-center gap-4">

                @guest

                    <a href="{{ route('login') }}"
                        class="text-xs font-semibold tracking-wider text-white/60 hover:text-white">
                        LOGIN
                    </a>

                    <a href="{{ route('register') }}"
                        class="bg-[#B91C1C] px-5 py-3 text-xs font-bold tracking-wider text-white hover:bg-[#991B1B]">
                        JOIN STEALL →
                    </a>

                @else

                    <div class="relative">

                        <button
                            @click="profileOpen = !profileOpen"
                            class="flex items-center gap-3 border border-white/10 px-2 py-2 pr-3 hover:bg-white/5"
                        >
                            <div class="w-8 h-8 flex items-center justify-center bg-[#B91C1C] text-xs font-bold text-white">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>

                            <div class="text-left">
                                <p class="text-[10px] text-white/40 tracking-wider">
                                    MEMBER
                                </p>

                                <p class="text-xs font-semibold text-white">
                                    {{ auth()->user()->name }}
                                </p>
                            </div>
                        </button>

                        <div
                            x-show="profileOpen"
                            @click.outside="profileOpen = false"
                            x-cloak
                            class="absolute right-0 mt-3 w-52 bg-[#111111] border border-white/10 shadow-2xl"
                        >
                            <a href="{{ route('dashboard') }}"
                                class="block px-5 py-3 text-sm text-white/60 hover:text-white hover:bg-white/5">
                                Dashboard
                            </a>

                            <a href="{{ route('profile.edit') }}"
                                class="block px-5 py-3 text-sm text-white/60 hover:text-white hover:bg-white/5">
                                Profil
                            </a>

                            <div class="border-t border-white/10"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button
                                    type="submit"
                                    class="w-full text-left px-5 py-3 text-sm text-red-400 hover:bg-white/5"
                                >
                                    Logout
                                </button>
                            </form>
                        </div>

                    </div>

                @endguest

            </div>

            {{-- Mobile Button --}}
            <button
                @click="mobileOpen = !mobileOpen"
                class="lg:hidden w-11 h-11 flex items-center justify-center border border-white/10 text-white"
            >
                <svg x-show="!mobileOpen"
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg x-show="mobileOpen"
                    x-cloak
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </button>

        </div>

    </div>

    {{-- Mobile Navigation --}}
    <div
        x-show="mobileOpen"
        x-cloak
        class="lg:hidden bg-[#0A0A0A] border-t border-white/10"
    >
        <div class="px-6 py-5 flex flex-col">

            <a href="{{ route('home') }}"
                class="py-4 border-b border-white/10 text-sm font-semibold text-white">
                HOME
            </a>

            <a href="{{ route('about') }}"
                class="py-4 border-b border-white/10 text-sm font-semibold text-white/60">
                ABOUT
            </a>

            <a href="{{ route('contact') }}"
                class="py-4 border-b border-white/10 text-sm font-semibold text-white/60">
                CONTACT
            </a>

            @auth

                <a href="{{ route('schedule') }}"
                    class="py-4 border-b border-white/10 text-sm font-semibold text-white/60">
                    JADWAL
                </a>

                <a href="{{ route('dashboard') }}"
                    class="py-4 border-b border-white/10 text-sm font-semibold text-white/60">
                    DASHBOARD
                </a>

                <form method="POST" action="{{ route('logout') }}" class="mt-5">
                    @csrf

                    <button
                        type="submit"
                        class="w-full bg-[#7F1D1D] py-3 text-sm font-semibold text-white"
                    >
                        LOGOUT
                    </button>
                </form>

            @else

                <div class="grid grid-cols-2 gap-3 mt-6">

                    <a href="{{ route('login') }}"
                        class="border border-white/20 py-3 text-center text-xs font-bold text-white">
                        LOGIN
                    </a>

                    <a href="{{ route('register') }}"
                        class="bg-[#B91C1C] py-3 text-center text-xs font-bold text-white">
                        JOIN
                    </a>

                </div>

            @endauth

        </div>
    </div>

</nav>