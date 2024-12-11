// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan halaman signin
    public function signin()
    {
        return view('signin');
    }

    // Fungsi untuk menangani form signin
    public function postSignin(Request $request)
    {
        // Simulasikan validasi dan login
        $data = $request->all();
        session()->put('user', ['email' => $data['email'], 'is_login' => true]);

        return redirect('/profile')->with('success', 'Login Berhasil!');
    }

    // Fungsi untuk menampilkan halaman signup
    public function signup()
    {
        return view('signup');
    }

    // Fungsi untuk menangani form signup
    public function postSignup(Request $request)
    {
        // Simulasikan proses registrasi
        $data = $request->all();
        session()->put('user', ['name' => $data['name'], 'email' => $data['email'], 'is_login' => true]);

        return redirect('/signin')->with('success', 'Registration Successful!');
    }
}
