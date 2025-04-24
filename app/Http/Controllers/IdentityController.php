<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IdentityUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdentityController extends Controller
{
    public function showUploadForm()
    {
        return view('auth.upload-identity');
    }

    public function store(Request $request)
    {
        $request->validate([
            'identity' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Simpan file
        $path = $request->file('identity')->store('public/identities');
        
        // Update user
        $request->user()->update([
            'identity_path' => $path,
            'email_verified_at' => now() // Verifikasi email sekaligus
        ]);

        return redirect()->route('dashboard');
    }
}

