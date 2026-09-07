<nav
    x-data="{ open: false }"
    class="sticky top-0 z-50 bg-[#0A0A0A]/95 backdrop-blur-md border-b border-white/10"
>
    <div class="max-w-7xl mx-auto px-6 lg:px-16">

        <div class="h-20 flex items-center justify-between">

            {{-- LOGO ONLY --}}
            <a
                href="{{ route('dashboard') }}"
                class="flex items-center shrink-0"
            >
                <img
                    src="{{ asset('images/steall-logo.png') }}"
                    alt="STEALL Basketball"
                    class="w-14 h-14 object-contain"
                >
            </a>


            {{-- DESKTOP NAVIGATION --}}
            <div class="hidden lg:flex items-center gap-1">

                <a
                    href="{{ route('dashboard') }}"
                    class="px-4 py-2 text-sm font-medium transition-colors
                    {{ request()->routeIs('dashboard') ? 'text-white' : 'text-white/50 hover:text-white' }}"
                >
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="px-4 py-2 text-sm font-medium transition-colors
                    {{ request()->routeIs('about') ? 'text-white' : 'text-white/50 hover:text-white' }}"
                >
                    About Us
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="px-4 py-2 text-sm font-medium transition-colors
                    {{ request()->routeIs('contact') ? 'text-white' : 'text-white/50 hover:text-white' }}"
                >
                    Contact
                </a>


                {{-- AUTHENTICATED NAVIGATION --}}
                @auth

                    <div class="w-px h-5 bg-white/10 mx-3"></div>

                    <a
                        href="{{ route('roster.index') }}"
                        class="px-4 py-2 text-sm font-medium text-white/50 hover:text-white transition-colors"
                    >
                        Roster
                    </a>

                    <a
                        href="{{ route('schedule.index') }}"
                        class="px-4 py-2 text-sm font-medium text-white/50 hover:text-white transition-colors"
                    >
                        Jadwal
                    </a>

                    <a
                        href="{{ route('gallery.index') }}"
                        class="px-4 py-2 text-sm font-medium text-white/50 hover:text-white transition-colors"
                    >
                        Galeri
                    </a>

                @endauth

            </div>


            {{-- RIGHT SIDE --}}
            <div class="hidden lg:flex items-center gap-4">

                @guest

                    <a
                        href="{{ route('login') }}"
                        class="text-sm font-medium text-white/60 hover:text-white transition-colors"
                    >
                        Login
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="bg-[#B91C1C] text-white px-5 py-2.5 text-sm font-semibold hover:bg-[#991B1B] transition-colors"
                    >
                        Daftar
                    </a>

                @else

                    {{-- USER --}}
                    <div class="relative">

                        <button
                            @click="open = !open"
                            class="flex items-center gap-3 text-sm text-white hover:text-white/70 transition-colors"
                        >

                            <div
                                class="w-9 h-9 flex items-center justify-center bg-[#7F1D1D] text-white font-bold text-sm"
                            >
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>

                            <span class="hidden xl:block font-medium">
                                {{ Auth::user()->name }}
                            </span>

                            <svg
                                class="w-4 h-4 text-white/50 transition-transform"
                                :class="{ 'rotate-180': open }"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m6 9 6 6 6-6"
                                />
                            </svg>

                        </button>


                        {{-- DROPDOWN --}}
                        <div
                            x-show="open"
                            @click.outside="open = false"
                            x-transition
                            class="absolute right-0 top-14 w-52 bg-[#111111] border border-white/10 py-2 shadow-2xl"
                            style="display: none;"
                        >

                            <a
                                href="{{ route('dashboard') }}"
                                class="block px-5 py-3 text-sm text-white/60 hover:text-white hover:bg-white/5 transition-colors"
                            >
                                Dashboard
                            </a>

                            <a
                                href="{{ route('pendaftaran.index') }}"
                                class="block px-5 py-3 text-sm text-white/60 hover:text-white hover:bg-white/5 transition-colors"
                            >
                                Pendaftaran
                            </a>

                            <div class="border-t border-white/10 my-2"></div>

                            <form method="POST" action="{{ route('logout') }}">

                                @csrf

                                <button
                                    type="submit"
                                    class="w-full text-left px-5 py-3 text-sm text-[#B91C1C] hover:bg-white/5 transition-colors"
                                >
                                    Logout
                                </button>

                            </form>

                        </div>

                    </div>

                @endguest

            </div>


            {{-- MOBILE BUTTON --}}
            <button
                @click="open = !open"
                class="lg:hidden w-11 h-11 flex items-center justify-center border border-white/10 text-white"
                aria-label="Toggle navigation"
            >

                <svg
                    x-show="!open"
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg
                    x-show="open"
                    x-cloak
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
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


    {{-- MOBILE MENU --}}
    <div
        x-show="open"
        x-transition
        class="lg:hidden bg-[#0A0A0A] border-t border-white/10"
        style="display: none;"
    >

        <div class="px-6 py-6 space-y-1">

            <a
                href="{{ route('dashboard') }}"
                class="block py-3 text-sm font-medium text-white/70 hover:text-white"
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                class="block py-3 text-sm font-medium text-white/70 hover:text-white"
            >
                About Us
            </a>

            <a
                href="{{ route('contact') }}"
                class="block py-3 text-sm font-medium text-white/70 hover:text-white"
            >
                Contact
            </a>


            @auth

                <div class="border-t border-white/10 my-4"></div>

                <a
                    href="{{ route('roster.index') }}"
                    class="block py-3 text-sm font-medium text-white/70 hover:text-white"
                >
                    Roster Pemain
                </a>

                <a
                    href="{{ route('schedule.index') }}"
                    class="block py-3 text-sm font-medium text-white/70 hover:text-white"
                >
                    Jadwal Latihan
                </a>

                <a
                    href="{{ route('gallery.index') }}"
                    class="block py-3 text-sm font-medium text-white/70 hover:text-white"
                >
                    Galeri
                </a>

                <a
                    href="{{ route('pendaftaran.index') }}"
                    class="block py-3 text-sm font-medium text-white/70 hover:text-white"
                >
                    Pendaftaran Anggota
                </a>

                <form
                    method="POST"
                    action="{{ route('logout') }}"
                    class="pt-4"
                >

                    @csrf

                    <button
                        type="submit"
                        class="w-full bg-[#7F1D1D] py-3 text-sm font-semibold text-white hover:bg-[#5B1111]"
                    >
                        Logout
                    </button>

                </form>

            @else

                <div class="border-t border-white/10 my-4"></div>

                <a
                    href="{{ route('login') }}"
                    class="block py-3 text-sm font-medium text-white/70"
                >
                    Login
                </a>

                <a
                    href="{{ route('register') }}"
                    class="block mt-4 bg-[#B91C1C] py-3 text-center text-sm font-semibold text-white"
                >
                    Daftar Akun
                </a>

            @endauth

        </div>

    </div>

</nav>