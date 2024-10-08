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
        $member = Member::find($id);
        return view('pages.member.show', compact('members'));
    }

    public function destroy()
    {

    }
}
