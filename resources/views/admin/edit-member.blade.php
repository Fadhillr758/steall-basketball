<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Anggota — STEALL</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700,800|inter:400,500,600,700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-display {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F5F5F5] min-h-screen">

    {{-- Header --}}
    <header class="bg-[#0A0A0A] text-white">

        <div class="max-w-5xl mx-auto px-6 py-5 flex items-center justify-between">

            <div class="flex items-center gap-3">

                <img
                    src="{{ asset('images/steall-logo.png') }}"
                    class="w-10 h-10 object-contain"
                    alt="STEALL"
                >

                <div>
                    <h1 class="font-display font-bold">
                        STEALL
                    </h1>

                    <p class="text-xs text-white/40">
                        Admin Panel
                    </p>
                </div>

            </div>

            <a
                href="{{ route('admin.dashboard') }}"
                class="text-sm text-white/60 hover:text-white transition"
            >
                ← Kembali
            </a>

        </div>

    </header>


    {{-- Content --}}
    <main class="max-w-5xl mx-auto px-6 py-10">

        <div class="mb-8">

            <p class="text-sm text-gray-400">
                Admin / Anggota
            </p>

            <h1 class="font-display text-3xl font-extrabold mt-1">
                Edit Data Anggota
            </h1>

            <p class="text-gray-500 mt-2">
                Perbarui informasi anggota STEALL.
            </p>

        </div>


        {{-- Form --}}
        <form
            method="POST"
            action="{{ route('admin.member.update', $application->id) }}"
            class="bg-white rounded-2xl border border-black/5 p-6 sm:p-8"
        >

            @csrf
            @method('PATCH')


            <div class="grid md:grid-cols-2 gap-6">

                {{-- Nama --}}
                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $application->name) }}"
                        required
                        class="w-full rounded-xl border-gray-200
                               focus:border-[#7F1D1D]
                               focus:ring-[#7F1D1D]"
                    >

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Kelas --}}
                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Kelas
                    </label>

                    <input
                        type="text"
                        name="class"
                        value="{{ old('class', $application->class) }}"
                        required
                        class="w-full rounded-xl border-gray-200
                               focus:border-[#7F1D1D]
                               focus:ring-[#7F1D1D]"
                    >

                    @error('class')
                        <p class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Jurusan --}}
                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Jurusan
                    </label>

                    <input
                        type="text"
                        name="major"
                        value="{{ old('major', $application->major) }}"
                        required
                        class="w-full rounded-xl border-gray-200
                               focus:border-[#7F1D1D]
                               focus:ring-[#7F1D1D]"
                    >

                </div>


                {{-- Nomor HP --}}
                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Nomor HP
                    </label>

                    <input
                        type="text"
                        name="phone"
                        value="{{ old('phone', $application->phone) }}"
                        required
                        class="w-full rounded-xl border-gray-200
                               focus:border-[#7F1D1D]
                               focus:ring-[#7F1D1D]"
                    >

                </div>


                {{-- Posisi --}}
                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Posisi
                    </label>

                    <select
                        name="position"
                        required
                        class="w-full rounded-xl border-gray-200
                               focus:border-[#7F1D1D]
                               focus:ring-[#7F1D1D]"
                    >

                        <option value="Point Guard"
                            {{ $application->position == 'Point Guard' ? 'selected' : '' }}>
                            Point Guard
                        </option>

                        <option value="Shooting Guard"
                            {{ $application->position == 'Shooting Guard' ? 'selected' : '' }}>
                            Shooting Guard
                        </option>

                        <option value="Small Forward"
                            {{ $application->position == 'Small Forward' ? 'selected' : '' }}>
                            Small Forward
                        </option>

                        <option value="Power Forward"
                            {{ $application->position == 'Power Forward' ? 'selected' : '' }}>
                            Power Forward
                        </option>

                        <option value="Center"
                            {{ $application->position == 'Center' ? 'selected' : '' }}>
                            Center
                        </option>

                    </select>

                </div>


                {{-- Tinggi --}}
                <div>

                    <label class="block text-sm font-semibold mb-2">
                        Tinggi Badan (cm)
                    </label>

                    <input
                        type="number"
                        name="height"
                        value="{{ old('height', $application->height) }}"
                        class="w-full rounded-xl border-gray-200
                               focus:border-[#7F1D1D]
                               focus:ring-[#7F1D1D]"
                    >

                </div>

            </div>


            {{-- Pengalaman --}}
            <div class="mt-6">

                <label class="block text-sm font-semibold mb-2">
                    Pengalaman Basket
                </label>

                <textarea
                    name="experience"
                    rows="4"
                    class="w-full rounded-xl border-gray-200
                           focus:border-[#7F1D1D]
                           focus:ring-[#7F1D1D]"
                >{{ old('experience', $application->experience) }}</textarea>

            </div>


            {{-- Alasan --}}
            <div class="mt-6">

                <label class="block text-sm font-semibold mb-2">
                    Alasan Bergabung
                </label>

                <textarea
                    name="reason"
                    rows="4"
                    required
                    class="w-full rounded-xl border-gray-200
                           focus:border-[#7F1D1D]
                           focus:ring-[#7F1D1D]"
                >{{ old('reason', $application->reason) }}</textarea>

            </div>


            {{-- Button --}}
            <div
                class="mt-8 pt-6 border-t border-gray-100
                       flex flex-col sm:flex-row
                       justify-end gap-3"
            >

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="px-5 py-3 rounded-xl
                           border border-gray-200
                           text-sm font-semibold
                           text-gray-600
                           hover:bg-gray-50
                           text-center transition"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="px-6 py-3 rounded-xl
                           bg-[#7F1D1D] text-white
                           text-sm font-semibold
                           hover:bg-[#5B1111]
                           transition"
                >
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </main>

</body>

</html>