<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HubungiKami;
use App\Http\Controllers\Controller;  // Pastikan 'Controller' bisa ditemukan

class HubungiKamiController extends Controller
{
    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|max:1000',
        ]);

        HubungiKami::create($validated);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
