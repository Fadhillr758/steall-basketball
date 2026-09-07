<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard — STEALL Basketball</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.bunny.net">

    <link
        href="https://fonts.bunny.net/css?family=poppins:400,500,600,700,800|inter:400,500,600,700,800&display=swap"
        rel="stylesheet"
    >

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-display {
            font-family: 'Poppins', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>


<body class="bg-[#F5F6F8] text-[#111827]">

<div
    x-data="{ sidebarOpen: false }"
    class="min-h-screen"
>


    {{-- ========================================================= --}}
    {{-- MOBILE OVERLAY --}}
    {{-- ========================================================= --}}

    <div
        x-show="sidebarOpen"
        x-cloak
        @click="sidebarOpen = false"
        class="fixed inset-0 bg-black/40 z-40 lg:hidden"
    ></div>



    {{-- ========================================================= --}}
    {{-- SIDEBAR --}}
    {{-- ========================================================= --}}

    <aside
        class="
            fixed
            left-0
            top-0
            bottom-0
            z-50
            w-72
            bg-[#0A0A0A]
            text-white
            transform
            transition-transform
            duration-300

            lg:translate-x-0

            -translate-x-full
        "

        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    >

        {{-- Logo --}}
        <div
            class="
                h-20
                px-6
                flex
                items-center
                justify-between
                border-b
                border-white/10
            "
        >

            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3"
            >

                <div
                    class="
                        w-10
                        h-10
                        rounded-xl
                        bg-white
                        flex
                        items-center
                        justify-center
                        overflow-hidden
                    "
                >

                    <img
                        src="{{ asset('images/steall-logo.png') }}"
                        alt="STEALL"
                        class="w-8 h-8 object-contain"
                    >

                </div>


                <div>

                    <h1 class="font-display font-extrabold tracking-tight">
                        STEALL
                    </h1>

                    <p class="text-[10px] text-white/40 uppercase tracking-[0.2em]">
                        Admin Panel
                    </p>

                </div>

            </a>


            {{-- Close mobile --}}
            <button
                @click="sidebarOpen = false"
                class="lg:hidden text-white/50 hover:text-white"
            >
                ✕
            </button>

        </div>



        {{-- Sidebar Menu --}}
        <div class="px-4 py-6">

            <p
                class="
                    px-3
                    mb-3
                    text-[10px]
                    font-bold
                    uppercase
                    tracking-[0.2em]
                    text-white/30
                "
            >
                Main Menu
            </p>


            {{-- Dashboard --}}
            <a
                href="{{ route('admin.dashboard') }}"
                class="
                    flex
                    items-center
                    gap-3
                    px-4
                    py-3
                    rounded-xl
                    bg-white
                    text-[#111827]
                    font-semibold
                    text-sm
                "
            >

                <span class="text-lg">
                    ▦
                </span>

                Dashboard

            </a>



            {{-- Website --}}
            <p
                class="
                    px-3
                    mt-8
                    mb-3
                    text-[10px]
                    font-bold
                    uppercase
                    tracking-[0.2em]
                    text-white/30
                "
            >
                Website
            </p>


            <a
                href="{{ route('home') }}"
                class="
                    flex
                    items-center
                    gap-3
                    px-4
                    py-3
                    rounded-xl
                    text-sm
                    text-white/60
                    hover:bg-white/5
                    hover:text-white
                    transition
                "
            >

                <span class="text-lg">
                    ↗
                </span>

                Lihat Website

            </a>

        </div>



        {{-- Sidebar Bottom --}}
        <div
            class="
                absolute
                bottom-0
                left-0
                right-0
                p-4
                border-t
                border-white/10
            "
        >

            <div class="flex items-center gap-3 mb-4">

                <div
                    class="
                        w-10
                        h-10
                        rounded-full
                        bg-[#7F1D1D]
                        flex
                        items-center
                        justify-center
                        font-bold
                    "
                >
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>


                <div class="min-w-0">

                    <p class="text-sm font-semibold truncate">
                        {{ auth()->user()->name }}
                    </p>

                    <p class="text-xs text-white/40">
                        Administrator
                    </p>

                </div>

            </div>


            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="
                        w-full
                        flex
                        items-center
                        gap-3
                        px-4
                        py-3
                        rounded-xl
                        text-sm
                        text-red-400
                        hover:bg-red-500/10
                        transition
                    "
                >

                    <span>
                        ↪
                    </span>

                    Logout

                </button>

            </form>

        </div>

    </aside>



    {{-- ========================================================= --}}
    {{-- MAIN --}}
    {{-- ========================================================= --}}

    <main class="lg:ml-72 min-h-screen">


        {{-- ===================================================== --}}
        {{-- TOPBAR --}}
        {{-- ===================================================== --}}

        <header
            class="
                h-20
                bg-white
                border-b
                border-gray-200
                px-5
                sm:px-8
                flex
                items-center
                justify-between
                sticky
                top-0
                z-30
            "
        >

            <div class="flex items-center gap-4">

                {{-- Mobile Menu --}}
                <button
                    @click="sidebarOpen = true"
                    class="
                        lg:hidden
                        w-10
                        h-10
                        rounded-xl
                        border
                        border-gray-200
                        flex
                        items-center
                        justify-center
                    "
                >
                    ☰
                </button>


                <div>

                    <p class="text-xs text-gray-400">
                        Admin Panel
                    </p>

                    <h2 class="font-display font-bold text-lg">
                        Dashboard
                    </h2>

                </div>

            </div>


            <div class="flex items-center gap-3">

                <div
                    class="
                        hidden
                        sm:flex
                        items-center
                        gap-2
                        px-3
                        py-2
                        rounded-xl
                        bg-green-50
                        text-green-700
                        text-xs
                        font-semibold
                    "
                >

                    <span
                        class="w-2 h-2 rounded-full bg-green-500"
                    ></span>

                    Sistem Aktif

                </div>

            </div>

        </header>



        {{-- ===================================================== --}}
        {{-- CONTENT --}}
        {{-- ===================================================== --}}

        <div class="p-5 sm:p-8">


            {{-- ================================================= --}}
            {{-- WELCOME --}}
            {{-- ================================================= --}}

            <section class="mb-8">

                <p class="text-sm text-gray-400">
                    Selamat datang kembali,
                </p>

                <h1
                    class="
                        font-display
                        text-2xl
                        sm:text-3xl
                        font-extrabold
                        mt-1
                    "
                >
                    {{ auth()->user()->name }} 👋
                </h1>

                <p class="text-gray-500 mt-2 max-w-2xl">
                    Kelola pendaftaran dan anggota STEALL Basketball
                    dari satu tempat.
                </p>

            </section>



            {{-- ================================================= --}}
            {{-- SUCCESS MESSAGE --}}
            {{-- ================================================= --}}

            @if(session('success'))

                <div
                    class="
                        mb-6
                        bg-green-50
                        border
                        border-green-200
                        text-green-700
                        rounded-2xl
                        px-5
                        py-4
                        flex
                        items-center
                        gap-3
                    "
                >

                    <span class="text-xl">
                        ✓
                    </span>

                    <p class="text-sm font-medium">
                        {{ session('success') }}
                    </p>

                </div>

            @endif



            {{-- ================================================= --}}
            {{-- STATISTICS --}}
            {{-- ================================================= --}}

            <section
                class="
                    grid
                    grid-cols-1
                    sm:grid-cols-2
                    xl:grid-cols-4
                    gap-4
                    mb-8
                "
            >


                {{-- Total --}}
                <div
                    class="
                        bg-white
                        rounded-2xl
                        border
                        border-gray-200
                        p-5
                    "
                >

                    <div class="flex items-start justify-between">

                        <div>

                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">
                                Total Pendaftar
                            </p>

                            <p
                                class="
                                    font-display
                                    text-3xl
                                    font-extrabold
                                    mt-3
                                "
                            >
                                {{ $total }}
                            </p>

                        </div>


                        <div
                            class="
                                w-11
                                h-11
                                rounded-xl
                                bg-gray-100
                                flex
                                items-center
                                justify-center
                                text-xl
                            "
                        >
                            👥
                        </div>

                    </div>

                </div>



                {{-- Pending --}}
                <div
                    class="
                        bg-white
                        rounded-2xl
                        border
                        border-gray-200
                        p-5
                    "
                >

                    <div class="flex items-start justify-between">

                        <div>

                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">
                                Menunggu
                            </p>

                            <p
                                class="
                                    font-display
                                    text-3xl
                                    font-extrabold
                                    mt-3
                                "
                            >
                                {{ $pending }}
                            </p>

                        </div>


                        <div
                            class="
                                w-11
                                h-11
                                rounded-xl
                                bg-yellow-50
                                flex
                                items-center
                                justify-center
                                text-xl
                            "
                        >
                            ⏳
                        </div>

                    </div>

                </div>



                {{-- Accepted --}}
                <div
                    class="
                        bg-white
                        rounded-2xl
                        border
                        border-gray-200
                        p-5
                    "
                >

                    <div class="flex items-start justify-between">

                        <div>

                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">
                                Diterima
                            </p>

                            <p
                                class="
                                    font-display
                                    text-3xl
                                    font-extrabold
                                    mt-3
                                "
                            >
                                {{ $accepted }}
                            </p>

                        </div>


                        <div
                            class="
                                w-11
                                h-11
                                rounded-xl
                                bg-green-50
                                flex
                                items-center
                                justify-center
                                text-xl
                            "
                        >
                            ✓
                        </div>

                    </div>

                </div>



                {{-- Rejected --}}
                <div
                    class="
                        bg-white
                        rounded-2xl
                        border
                        border-gray-200
                        p-5
                    "
                >

                    <div class="flex items-start justify-between">

                        <div>

                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">
                                Ditolak
                            </p>

                            <p
                                class="
                                    font-display
                                    text-3xl
                                    font-extrabold
                                    mt-3
                                "
                            >
                                {{ $rejected }}
                            </p>

                        </div>


                        <div
                            class="
                                w-11
                                h-11
                                rounded-xl
                                bg-red-50
                                flex
                                items-center
                                justify-center
                                text-xl
                            "
                        >
                            ✕
                        </div>

                    </div>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- PENDAFTARAN --}}
            {{-- ================================================= --}}

            <section
                id="pendaftar"
                class="
                    bg-white
                    rounded-2xl
                    border
                    border-gray-200
                    overflow-hidden
                    mb-8
                "
            >

                {{-- Header --}}
                <div
                    class="
                        p-5
                        sm:p-6
                        border-b
                        border-gray-100
                        flex
                        flex-col
                        sm:flex-row
                        sm:items-center
                        sm:justify-between
                        gap-3
                    "
                >

                    <div>

                        <h2
                            class="
                                font-display
                                font-bold
                                text-xl
                            "
                        >
                            Pendaftaran Masuk
                        </h2>

                        <p class="text-sm text-gray-400 mt-1">
                            Periksa dan kelola calon anggota STEALL.
                        </p>

                    </div>


                    <div class="text-xs text-gray-400">
                        {{ $applications->count() }} data
                    </div>

                </div>



                {{-- Table --}}
                <div class="overflow-x-auto">

                    <table class="w-full min-w-[900px]">

                        <thead>

                            <tr
                                class="
                                    bg-gray-50
                                    text-left
                                    text-[11px]
                                    uppercase
                                    tracking-wider
                                    text-gray-400
                                "
                            >

                                <th class="px-6 py-4">
                                    Nama
                                </th>

                                <th class="px-6 py-4">
                                    Kelas
                                </th>

                                <th class="px-6 py-4">
                                    Jurusan
                                </th>

                                <th class="px-6 py-4">
                                    Posisi
                                </th>

                                <th class="px-6 py-4">
                                    No. HP
                                </th>

                                <th class="px-6 py-4">
                                    Status
                                </th>

                                <th class="px-6 py-4 text-right">
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-gray-100">

                            @forelse($applications as $application)

                                <tr class="hover:bg-gray-50 transition">

                                    {{-- Nama --}}
                                    <td class="px-6 py-4">

                                        <div class="flex items-center gap-3">

                                            <div
                                                class="
                                                    w-10
                                                    h-10
                                                    rounded-xl
                                                    bg-[#7F1D1D]
                                                    text-white
                                                    flex
                                                    items-center
                                                    justify-center
                                                    font-bold
                                                "
                                            >
                                                {{ strtoupper(substr($application->name, 0, 1)) }}
                                            </div>


                                            <div>

                                                <p class="font-semibold text-sm">
                                                    {{ $application->name }}
                                                </p>

                                                <p class="text-xs text-gray-400">
                                                    {{ $application->created_at->format('d M Y') }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    {{-- Kelas --}}
                                    <td class="px-6 py-4">

                                        <span class="text-sm">
                                            {{ $application->class }}
                                        </span>

                                    </td>


                                    {{-- Jurusan --}}
                                    <td class="px-6 py-4">

                                        <span class="text-sm">
                                            {{ $application->major }}
                                        </span>

                                    </td>


                                    {{-- Posisi --}}
                                    <td class="px-6 py-4">

                                        <span
                                            class="
                                                inline-flex
                                                px-3
                                                py-1.5
                                                rounded-lg
                                                bg-gray-100
                                                text-gray-600
                                                text-xs
                                                font-semibold
                                            "
                                        >
                                            {{ $application->position }}
                                        </span>

                                    </td>


                                    {{-- Phone --}}
                                    <td class="px-6 py-4">

                                        <span class="text-sm text-gray-600">
                                            {{ $application->phone }}
                                        </span>

                                    </td>


                                    {{-- Status --}}
                                    <td class="px-6 py-4">

                                        @if($application->status === 'pending')

                                            <span
                                                class="
                                                    inline-flex
                                                    items-center
                                                    gap-1.5
                                                    px-3
                                                    py-1.5
                                                    rounded-full
                                                    bg-yellow-50
                                                    text-yellow-700
                                                    text-xs
                                                    font-semibold
                                                "
                                            >

                                                <span>●</span>
                                                Menunggu

                                            </span>

                                        @elseif($application->status === 'accepted')

                                            <span
                                                class="
                                                    inline-flex
                                                    items-center
                                                    gap-1.5
                                                    px-3
                                                    py-1.5
                                                    rounded-full
                                                    bg-green-50
                                                    text-green-700
                                                    text-xs
                                                    font-semibold
                                                "
                                            >

                                                <span>●</span>
                                                Diterima

                                            </span>

                                        @else

                                            <span
                                                class="
                                                    inline-flex
                                                    items-center
                                                    gap-1.5
                                                    px-3
                                                    py-1.5
                                                    rounded-full
                                                    bg-red-50
                                                    text-red-700
                                                    text-xs
                                                    font-semibold
                                                "
                                            >

                                                <span>●</span>
                                                Ditolak

                                            </span>

                                        @endif

                                    </td>


                                    {{-- Action --}}
                                    <td class="px-6 py-4">

                                        <div
                                            class="
                                                flex
                                                justify-end
                                                gap-2
                                            "
                                        >

                                            @if($application->status === 'pending')

                                                {{-- Terima --}}
                                                <form
                                                    method="POST"
                                                    action="{{ route(
                                                        'admin.application.approve',
                                                        $application->id
                                                    ) }}"
                                                >

                                                    @csrf
                                                    @method('PATCH')

                                                    <button
                                                        type="submit"
                                                        onclick="return confirm('Terima pendaftaran {{ $application->name }}?')"
                                                        class="
                                                            px-3
                                                            py-2
                                                            rounded-lg
                                                            bg-green-600
                                                            text-white
                                                            text-xs
                                                            font-semibold
                                                            hover:bg-green-700
                                                            transition
                                                        "
                                                    >
                                                        Terima
                                                    </button>

                                                </form>


                                                {{-- Tolak --}}
                                                <form
                                                    method="POST"
                                                    action="{{ route(
                                                        'admin.application.reject',
                                                        $application->id
                                                    ) }}"
                                                >

                                                    @csrf
                                                    @method('PATCH')

                                                    <button
                                                        type="submit"
                                                        onclick="return confirm('Tolak pendaftaran {{ $application->name }}?')"
                                                        class="
                                                            px-3
                                                            py-2
                                                            rounded-lg
                                                            bg-red-50
                                                            text-red-600
                                                            text-xs
                                                            font-semibold
                                                            hover:bg-red-100
                                                            transition
                                                        "
                                                    >
                                                        Tolak
                                                    </button>

                                                </form>

                                            @else

                                                <span
                                                    class="
                                                        text-xs
                                                        text-gray-400
                                                        py-2
                                                    "
                                                >
                                                    Sudah diproses
                                                </span>

                                            @endif

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="7"
                                        class="px-6 py-16 text-center"
                                    >

                                        <div class="text-4xl mb-3">
                                            🏀
                                        </div>

                                        <p class="font-semibold text-gray-600">
                                            Belum ada pendaftaran
                                        </p>

                                        <p class="text-sm text-gray-400 mt-1">
                                            Data pendaftaran siswa akan muncul di sini.
                                        </p>

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- ANGGOTA STEALL --}}
            {{-- ================================================= --}}

            <section
                id="anggota"
                class="
                    bg-white
                    rounded-2xl
                    border
                    border-gray-200
                    overflow-hidden
                "
            >

                {{-- Header --}}
                <div
                    class="
                        p-5
                        sm:p-6
                        border-b
                        border-gray-100
                        flex
                        flex-col
                        sm:flex-row
                        sm:items-center
                        sm:justify-between
                        gap-3
                    "
                >

                    <div>

                        <h2
                            class="
                                font-display
                                font-bold
                                text-xl
                            "
                        >
                            Anggota STEALL
                        </h2>

                        <p class="text-sm text-gray-400 mt-1">
                            Kelola anggota yang telah diterima.
                        </p>

                    </div>


                    <div class="text-sm text-gray-400">

                        {{ $accepted }} anggota

                    </div>

                </div>



                {{-- Members --}}
                <div class="p-5 sm:p-6">

                    <div
                        class="
                            grid
                            md:grid-cols-2
                            xl:grid-cols-3
                            gap-4
                        "
                    >

                        @forelse(
                            $applications->where('status', 'accepted')
                            as $member
                        )

                            <div
                                class="
                                    border
                                    border-gray-100
                                    rounded-2xl
                                    p-5
                                    hover:border-[#7F1D1D]/20
                                    hover:shadow-sm
                                    transition
                                "
                            >

                                {{-- Profile --}}
                                <div
                                    class="
                                        flex
                                        items-center
                                        gap-4
                                    "
                                >

                                    <div
                                        class="
                                            w-12
                                            h-12
                                            rounded-xl
                                            bg-[#7F1D1D]
                                            text-white
                                            flex
                                            items-center
                                            justify-center
                                            font-bold
                                            text-lg
                                        "
                                    >
                                        {{ strtoupper(substr($member->name, 0, 1)) }}
                                    </div>


                                    <div class="flex-1 min-w-0">

                                        <h3 class="font-semibold truncate">
                                            {{ $member->name }}
                                        </h3>

                                        <p class="text-xs text-gray-400 mt-1">
                                            {{ $member->class }}
                                            •
                                            {{ $member->major }}
                                        </p>

                                    </div>

                                </div>



                                {{-- Information --}}
                                <div
                                    class="
                                        mt-5
                                        grid
                                        grid-cols-2
                                        gap-3
                                    "
                                >

                                    <div
                                        class="
                                            bg-gray-50
                                            rounded-xl
                                            p-3
                                        "
                                    >

                                        <p
                                            class="
                                                text-[10px]
                                                uppercase
                                                tracking-wider
                                                text-gray-400
                                            "
                                        >
                                            Posisi
                                        </p>

                                        <p class="text-sm font-semibold mt-1">
                                            {{ $member->position }}
                                        </p>

                                    </div>


                                    <div
                                        class="
                                            bg-gray-50
                                            rounded-xl
                                            p-3
                                        "
                                    >

                                        <p
                                            class="
                                                text-[10px]
                                                uppercase
                                                tracking-wider
                                                text-gray-400
                                            "
                                        >
                                            Tinggi
                                        </p>

                                        <p class="text-sm font-semibold mt-1">

                                            {{ $member->height ?? '-' }}

                                            @if($member->height)
                                                cm
                                            @endif

                                        </p>

                                    </div>

                                </div>



                                {{-- Phone --}}
                                <div
                                    class="
                                        mt-3
                                        bg-gray-50
                                        rounded-xl
                                        p-3
                                    "
                                >

                                    <p
                                        class="
                                            text-[10px]
                                            uppercase
                                            tracking-wider
                                            text-gray-400
                                        "
                                    >
                                        Nomor HP
                                    </p>

                                    <p class="text-sm font-semibold mt-1">
                                        {{ $member->phone }}
                                    </p>

                                </div>



                                {{-- Actions --}}
                                <div
                                    class="
                                        mt-4
                                        pt-4
                                        border-t
                                        border-gray-100
                                        flex
                                        gap-2
                                    "
                                >

                                    {{-- Edit --}}
                                    <a
                                        href="{{ route(
                                            'admin.member.edit',
                                            $member->id
                                        ) }}"
                                        class="
                                            flex-1
                                            text-center
                                            px-4
                                            py-2.5
                                            rounded-xl
                                            bg-gray-100
                                            text-gray-700
                                            text-xs
                                            font-semibold
                                            hover:bg-gray-200
                                            transition
                                        "
                                    >
                                        ✏️ Edit
                                    </a>


                                    {{-- Delete --}}
                                    <form
                                        method="POST"
                                        action="{{ route(
                                            'admin.member.destroy',
                                            $member->id
                                        ) }}"
                                        class="flex-1"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            onclick="return confirm('Yakin ingin menghapus anggota {{ $member->name }}? Data pendaftaran ini akan dihapus secara permanen.')"
                                            class="
                                                w-full
                                                px-4
                                                py-2.5
                                                rounded-xl
                                                bg-red-50
                                                text-red-600
                                                text-xs
                                                font-semibold
                                                hover:bg-red-100
                                                transition
                                            "
                                        >
                                            🗑️ Hapus
                                        </button>

                                    </form>

                                </div>

                            </div>

                        @empty

                            <div
                                class="
                                    md:col-span-2
                                    xl:col-span-3
                                    py-14
                                    text-center
                                "
                            >

                                <div class="text-4xl mb-3">
                                    🏀
                                </div>

                                <p class="font-semibold text-gray-600">
                                    Belum ada anggota
                                </p>

                                <p class="text-sm text-gray-400 mt-1">
                                    Pendaftar yang diterima akan muncul di sini.
                                </p>

                            </div>

                        @endforelse

                    </div>

                </div>

            </section>



            {{-- ================================================= --}}
            {{-- FOOTER --}}
            {{-- ================================================= --}}

            <div
                class="
                    mt-8
                    pt-6
                    border-t
                    border-gray-200
                    flex
                    flex-col
                    sm:flex-row
                    justify-between
                    gap-2
                    text-xs
                    text-gray-400
                "
            >

                <p>
                    © {{ date('Y') }} STEALL Basketball
                </p>

                <p>
                    SMK Telkom Makassar
                </p>

            </div>


        </div>

    </main>

</div>

</body>
</html>