<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Menampilkan halaman formulir pendaftaran.
     */
    public function create()
    {
        // Cek apakah user sudah pernah mendaftar
        $application = Application::where(
            'user_id',
            auth()->id()
        )->first();

        return view('application', compact('application'));
    }


    /**
     * Menyimpan data pendaftaran ke database.
     */
    public function store(Request $request)
    {
        // Cek agar satu akun hanya bisa mendaftar satu kali
        $existingApplication = Application::where(
            'user_id',
            auth()->id()
        )->first();

        if ($existingApplication) {
            return redirect()
                ->route('application')
                ->with(
                    'error',
                    'Kamu sudah mengirim pendaftaran sebelumnya.'
                );
        }


        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:100',
            'major' => 'required|string|max:100',
            'phone' => 'required|string|max:20',

            'position' => 'required|string|max:100',

            'height' => 'nullable|integer|min:100|max:250',

            'experience' => 'nullable|string|max:2000',

            'reason' => 'required|string|max:2000',
        ]);


        // Simpan data ke database
        Application::create([
            'user_id' => auth()->id(),

            'name' => $validated['name'],
            'class' => $validated['class'],
            'major' => $validated['major'],
            'phone' => $validated['phone'],

            'position' => $validated['position'],

            'height' => $validated['height'] ?? null,

            'experience' => $validated['experience'] ?? null,

            'reason' => $validated['reason'],

            'status' => 'pending',
        ]);


        return redirect()
            ->route('dashboard')
            ->with(
                'success',
                'Pendaftaran berhasil dikirim. Silakan tunggu proses verifikasi.'
            );
    }
}