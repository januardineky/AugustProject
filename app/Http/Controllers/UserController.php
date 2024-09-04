<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    //
    public function pelanggan()
    {
        $data['pelanggan'] = User::where('level','=','pelanggan')->get();
        return view('pelanggan',$data);
    }

    public function caripelanggan(Request $request)
    {
        $data['pelanggan'] = User::where('level','=','pelanggan')->where('name','LIKE','%'.$request->cari.'%')->get();
        return view('pelanggan',$data);
    }

    public function register()
    {
        return view('register');
    }

    public function createuser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no' => $request->no,
            'password' => bcrypt($request->password),
            'jalan' => $request->jalan,
            'kab' => $request->kab,
            'level' => 'pelanggan',
            'kec' => $request->kec,
            'pos' => $request->pos,
            'detail' => $request->detail,
        ]);
        // $keranjang = new keranjang();
        // $keranjang->id_user = $user->id;
        // $keranjang->save();
        return redirect('/');
    }

    public function auth(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($validate)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->level === 'admin') {
                return redirect('/index');
            }
            else {
                // $id_user = auth()->user()->id;
                return redirect('/home');
            }
        }
        Alert::error('Peringatan', 'Username atau Password salah');
        return redirect('/');

    }

    public function order()
    {
        $data['order'] = Keranjang::with('user','item')->get();
        // dd($data['order']);
        return view('pesanan', $data);
    }

    public function findorder(Request $request)
    {
        $search = $request->cari;
        $data['order'] = Keranjang::whereHas('item', function ($query) use ($search) {
        $query->where('name', 'LIKE', '%'.$search.'%');
        })->orWhereHas('user', function ($query) use ($search) {
        $query->where('name', 'LIKE', '%'.$search.'%');
        })->orWhere('status', 'LIKE', '%'.$search.'%')->get();
        return view('pesanan', $data);
    }

    public function updateorder(Request $request)
    {
        keranjang::where('id_user', $request->id_user)->update([
            'status' => 'Sudah Sampai'
        ]);
        return redirect()->back();
    }

    public function hapusorder(Request $request)
    {
        keranjang::where('id_user',$request->id_user)->delete();
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
