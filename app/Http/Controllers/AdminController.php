<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Dashboard Admin
     */
    public function index()
    {
        $applications = Application::latest()->get();

        $total = Application::count();
        $pending = Application::where('status', 'pending')->count();
        $accepted = Application::where('status', 'accepted')->count();
        $rejected = Application::where('status', 'rejected')->count();

        return view('admin.dashboard', compact(
            'applications',
            'total',
            'pending',
            'accepted',
            'rejected'
        ));
    }

    /**
     * Terima pendaftaran
     */
    public function approve(Application $application): RedirectResponse
    {
        $application->update([
            'status' => 'accepted',
        ]);

        return back()->with(
            'success',
            'Pendaftaran berhasil diterima.'
        );
    }

    /**
     * Tolak pendaftaran
     */
    public function reject(Application $application): RedirectResponse
    {
        $application->update([
            'status' => 'rejected',
        ]);

        return back()->with(
            'success',
            'Pendaftaran berhasil ditolak.'
        );
    }

    /**
     * Form edit anggota
     */
    public function edit(Application $application)
{
    return view('admin.edit-member', compact('application'));
}

    /**
     * Update data anggota
     */
 public function update(Request $request, Application $application): RedirectResponse
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'class' => 'required|string|max:255',
        'major' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'position' => 'required|string|max:255',
        'height' => 'nullable|integer|min:100|max:250',
        'experience' => 'nullable|string',
        'reason' => 'required|string',
    ]);

    $application->update($validated);

    // Sinkronkan nama ke akun user terkait, jika ada
    if ($application->user_id) {
        $application->user()->update([
            'name' => $validated['name'],
        ]);
    }

    return redirect()
        ->route('admin.dashboard')
        ->with('success', 'Data anggota berhasil diperbarui.');
}
    /**
     * Hapus anggota
     */
    public function destroy(Application $application): RedirectResponse
    {
        $application->delete();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Data anggota berhasil dihapus.');
    }
}