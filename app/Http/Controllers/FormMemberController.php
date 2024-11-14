<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Institution;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FormMemberController extends Controller
{
    public function index()
    {
        // Mengambil data institution untuk ditampilkan di form
        $institutions = Institution::all();
        return view('pages.form', compact('institutions'));
    }

    // Method untuk menyimpan data form
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nama_alat' => 'required|string|max:255',
            'total_pinjam' => 'required|integer', // Ensure total_pinjam is an integer
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
            'status_pengembalian' => 'required|string|in:done,pending', // Pastikan status ada di form
        ]);

        // Menggunakan Carbon untuk mengonversi tanggal pinjam dan kembali ke format yang benar
        $validated['tanggal_pinjam'] = Carbon::parse($validated['tanggal_pinjam'])->format('Y-m-d');
        $validated['tanggal_kembali'] = Carbon::parse($validated['tanggal_kembali'])->format('Y-m-d');

        // Jika status_pengembalian tidak diisi, maka set default "Pending"
        // Ini bisa diubah tergantung logika bisnis yang Anda inginkan.
        if (!isset($validated['status_pengembalian'])) {
            $validated['status_pengembalian'] = 'pending';
        }

        // Menyimpan data ke database
        Member::create($validated); // Menyimpan data form ke tabel Member

        // Redirect kembali ke form dengan pesan sukses
        return redirect()->route('form.index')->with('success', 'Data berhasil disimpan.');
    }
}
