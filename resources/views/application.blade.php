<x-app-layout>

    <section class="bg-[#0A0A0A] text-white">

        <div class="max-w-7xl mx-auto px-6 lg:px-16 py-16 lg:py-20">

            <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.3em] mb-5">
                STEALL MEMBERSHIP
            </p>

            <h1 class="font-display font-extrabold text-4xl md:text-6xl leading-tight">
                Daftar Menjadi
                <span class="block text-[#B91C1C]">
                    Anggota STEALL.
                </span>
            </h1>

            <p class="text-white/60 max-w-2xl leading-relaxed mt-6">
                Lengkapi formulir di bawah untuk mendaftarkan diri sebagai
                calon anggota STEALL Basketball SMK Telkom Makassar.
            </p>

        </div>

    </section>


    @if ($application)

        {{-- JIKA SUDAH MENDAFTAR --}}
        <section class="min-h-[60vh] flex items-center justify-center px-6 py-16">

            <div class="w-full max-w-2xl border border-[#1F2937]/10 p-8 md:p-12">

                <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-4">
                    APPLICATION STATUS
                </p>


                @if ($application->status === 'pending')

                    <h2 class="font-display font-bold text-3xl md:text-4xl mb-5">
                        Pendaftaran Sedang Diproses.
                    </h2>

                    <p class="text-[#1F2937]/60 leading-relaxed">
                        Data pendaftaran kamu sudah berhasil dikirim.
                        Saat ini pendaftaran sedang menunggu proses
                        verifikasi dari admin STEALL.
                    </p>

                    <div class="mt-8 border-t border-[#1F2937]/10 pt-6">

                        <span class="inline-block px-4 py-2 text-xs font-bold tracking-widest bg-yellow-100 text-yellow-700">
                            MENUNGGU VERIFIKASI
                        </span>

                    </div>

                @elseif ($application->status === 'accepted')

                    <h2 class="font-display font-bold text-3xl md:text-4xl mb-5">
                        Selamat, Kamu Diterima!
                    </h2>

                    <p class="text-[#1F2937]/60 leading-relaxed">
                        Pendaftaran kamu telah disetujui. Kamu sekarang
                        menjadi bagian dari STEALL Basketball SMK Telkom Makassar.
                    </p>

                    <div class="mt-8 border-t border-[#1F2937]/10 pt-6">

                        <span class="inline-block px-4 py-2 text-xs font-bold tracking-widest bg-green-100 text-green-700">
                            MEMBER STEALL
                        </span>

                    </div>

                @elseif ($application->status === 'rejected')

                    <h2 class="font-display font-bold text-3xl md:text-4xl mb-5">
                        Pendaftaran Belum Diterima.
                    </h2>

                    <p class="text-[#1F2937]/60 leading-relaxed">
                        Maaf, pendaftaran kamu belum dapat diterima saat ini.
                        Kamu dapat menghubungi pengurus STEALL untuk informasi lebih lanjut.
                    </p>

                    <div class="mt-8 border-t border-[#1F2937]/10 pt-6">

                        <span class="inline-block px-4 py-2 text-xs font-bold tracking-widest bg-red-100 text-red-700">
                            BELUM DITERIMA
                        </span>

                    </div>

                @endif


                <a
                    href="{{ route('dashboard') }}"
                    class="inline-flex items-center gap-3 mt-10 text-sm font-semibold text-[#B91C1C] hover:text-[#7F1D1D]"
                >
                    ← KEMBALI KE DASHBOARD
                </a>

            </div>

        </section>

    @else

        {{-- JIKA BELUM MENDAFTAR --}}
        <section class="bg-[#F3F4F6] py-16 lg:py-20">

            <div class="max-w-4xl mx-auto px-6">

                @if (session('error'))

                    <div class="mb-8 border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
                        {{ session('error') }}
                    </div>

                @endif


                <form
                    method="POST"
                    action="{{ route('application.store') }}"
                    class="bg-white border border-[#1F2937]/10 p-7 md:p-12"
                >

                    @csrf


                    {{-- ========================= --}}
                    {{-- DATA PRIBADI --}}
                    {{-- ========================= --}}

                    <div class="mb-12">

                        <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-3">
                            01 — DATA PRIBADI
                        </p>

                        <h2 class="font-display font-bold text-2xl md:text-3xl">
                            Informasi Kamu
                        </h2>

                    </div>


                    <div class="grid md:grid-cols-2 gap-x-8 gap-y-7">


                        {{-- Nama --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                NAMA LENGKAP
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name', auth()->user()->name) }}"
                                required
                                class="w-full border-0 border-b border-[#1F2937]/20 bg-transparent px-0 py-3 focus:ring-0 focus:border-[#B91C1C]"
                            >

                            @error('name')
                                <p class="text-red-600 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Kelas --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                KELAS
                            </label>

                            <input
                                type="text"
                                name="class"
                                value="{{ old('class') }}"
                                placeholder="Contoh: XI RPL 1"
                                required
                                class="w-full border-0 border-b border-[#1F2937]/20 bg-transparent px-0 py-3 focus:ring-0 focus:border-[#B91C1C]"
                            >

                            @error('class')
                                <p class="text-red-600 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Jurusan --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                JURUSAN
                            </label>

                            <select
                                name="major"
                                required
                                class="w-full border-0 border-b border-[#1F2937]/20 bg-transparent px-0 py-3 focus:ring-0 focus:border-[#B91C1C]"
                            >

                                <option value="">
                                    Pilih jurusan
                                </option>

                                <option value="RPL" @selected(old('major') === 'RPL')>
                                    RPL
                                </option>

                                <option value="TJKT" @selected(old('major') === 'TJKT')>
                                    TJKT
                                </option>

                                <option value="DKV" @selected(old('major') === 'DKV')>
                                    DKV
                                </option>

                                <option value="TO" @selected(old('major') === 'TO')>
                                    TO
                                </option>

                            </select>

                            @error('major')
                                <p class="text-red-600 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Nomor WhatsApp --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                NOMOR WHATSAPP
                            </label>

                            <input
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="08xxxxxxxxxx"
                                required
                                class="w-full border-0 border-b border-[#1F2937]/20 bg-transparent px-0 py-3 focus:ring-0 focus:border-[#B91C1C]"
                            >

                            @error('phone')
                                <p class="text-red-600 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>



                    {{-- ========================= --}}
                    {{-- DATA BASKET --}}
                    {{-- ========================= --}}

                    <div class="border-t border-[#1F2937]/10 mt-14 pt-12 mb-12">

                        <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-3">
                            02 — BASKETBALL PROFILE
                        </p>

                        <h2 class="font-display font-bold text-2xl md:text-3xl">
                            Pengalaman Bermain
                        </h2>

                    </div>


                    <div class="grid md:grid-cols-2 gap-x-8 gap-y-7">


                        {{-- Posisi --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                POSISI UTAMA
                            </label>

                            <select
                                name="position"
                                required
                                class="w-full border-0 border-b border-[#1F2937]/20 bg-transparent px-0 py-3 focus:ring-0 focus:border-[#B91C1C]"
                            >

                                <option value="">
                                    Pilih posisi
                                </option>

                                <option value="Point Guard">
                                    Point Guard
                                </option>

                                <option value="Shooting Guard">
                                    Shooting Guard
                                </option>

                                <option value="Small Forward">
                                    Small Forward
                                </option>

                                <option value="Power Forward">
                                    Power Forward
                                </option>

                                <option value="Center">
                                    Center
                                </option>

                                <option value="Belum Menentukan">
                                    Belum Menentukan
                                </option>

                            </select>

                            @error('position')
                                <p class="text-red-600 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Tinggi --}}
                        <div>

                            <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                                TINGGI BADAN (CM)
                            </label>

                            <input
                                type="number"
                                name="height"
                                value="{{ old('height') }}"
                                placeholder="Contoh: 175"
                                min="100"
                                max="250"
                                class="w-full border-0 border-b border-[#1F2937]/20 bg-transparent px-0 py-3 focus:ring-0 focus:border-[#B91C1C]"
                            >

                            @error('height')
                                <p class="text-red-600 text-xs mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>


                    {{-- Pengalaman --}}
                    <div class="mt-8">

                        <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                            PENGALAMAN BERMAIN
                        </label>

                        <textarea
                            name="experience"
                            rows="4"
                            placeholder="Ceritakan pengalaman kamu dalam bermain basket..."
                            class="w-full border border-[#1F2937]/15 bg-transparent p-4 text-sm focus:ring-0 focus:border-[#B91C1C]"
                        >{{ old('experience') }}</textarea>

                        @error('experience')
                            <p class="text-red-600 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>



                    {{-- ========================= --}}
                    {{-- ALASAN --}}
                    {{-- ========================= --}}

                    <div class="border-t border-[#1F2937]/10 mt-14 pt-12">

                        <p class="text-[#B91C1C] text-xs font-semibold tracking-[0.25em] mb-3">
                            03 — JOIN STEALL
                        </p>

                        <h2 class="font-display font-bold text-2xl md:text-3xl">
                            Kenapa Kamu Ingin Bergabung?
                        </h2>

                    </div>


                    <div class="mt-8">

                        <label class="block text-xs font-semibold tracking-widest text-[#1F2937]/60 mb-3">
                            ALASAN BERGABUNG
                        </label>

                        <textarea
                            name="reason"
                            rows="6"
                            required
                            placeholder="Ceritakan alasan kamu ingin menjadi bagian dari STEALL..."
                            class="w-full border border-[#1F2937]/15 bg-transparent p-4 text-sm focus:ring-0 focus:border-[#B91C1C]"
                        >{{ old('reason') }}</textarea>

                        @error('reason')
                            <p class="text-red-600 text-xs mt-2">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Submit --}}
                    <div class="border-t border-[#1F2937]/10 mt-12 pt-8 flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                        <p class="text-xs text-[#1F2937]/50 leading-relaxed max-w-sm">
                            Pastikan semua data yang kamu masukkan sudah benar sebelum mengirimkan pendaftaran.
                        </p>

                        <button
                            type="submit"
                            class="bg-[#B91C1C] text-white px-8 py-4 text-sm font-semibold tracking-wide hover:bg-[#7F1D1D] transition-colors"
                        >
                            KIRIM PENDAFTARAN →
                        </button>

                    </div>

                </form>

            </div>

        </section>

    @endif

</x-app-layout>