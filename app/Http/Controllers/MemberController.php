<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('created_at', 'DESC')->get();
        return view('pages.member.index', compact('members'));
    }

    public function show($id)
    {
        $members = Member::find($id);
        return view('pages.member.show', compact('members'));
    }

    public function edit($id)
    {
        // Ambil data member berdasarkan ID
        $members = Member::findOrFail($id);

        // Kembalikan view edit dengan data member
        return view('pages.member.edit', compact('members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input untuk field 'name', memastikan nama unik
        $request->validate([
            'nama_siswa' => 'required|max:128',
            'nama_alat' => 'required|max:128',
            'total_pinjam' => 'required|integer',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
            'status_pengembalian' => 'required|in:done,pending',
        ]);

        // Ambil data member berdasarkan ID
        $member = Member::findOrFail($id);

        // Perbarui data member dengan data dari request
        $member->update($request->all());

        // Redirect kembali ke halaman daftar member dengan pesan sukses
        return redirect()->route('admin.member.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('admin.member.index')->with('success', 'Data berhasil dihapus!');
    }
}
