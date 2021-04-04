<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function register()
    {
    	return view('auth.register');
    }

    public function postlogin(Request $req)
    {
    	$username = $req->username;
    	$password = $req->password;
    	$where = [
    		'username' => $username,
    	];

    	$admin = DB::table('table_user')->where($where)->first();
        $petugas = DB::table('table_user')->where($where)->first();
        $siswa = DB::table('table_siswa')->where($where)->first();

        if ($admin && $admin->role == 1) {
            $cek_password = Hash::check($password, $admin->password);
            $role = $admin->role;

            if ($cek_password == true) {
                Session::put([
                    'hasLogin' => true,
                    'id' => $admin->id,
                    'nama_lengkap' => $admin->nama_lengkap,
                    'username' => $admin->username,
                    'tlp' => $admin->tlp,
                    'role' => 1,
                ]);
                return redirect('/admin');
            }
            
        }

        elseif ($petugas && $petugas->role == 2) {
            $cek_password = Hash::check($password, $petugas->password);
            $role = $petugas->role;

            if ($cek_password == true) {
                Session::put([
                    'hasLogin' => true,
                    'id' => $petugas->id,
                    'nama_lengkap' => $petugas->nama_lengkap,
                    'username' => $petugas->username,
                    'tlp' => $petugas->tlp,
                    'role' => 2,
                ]);
                return redirect('/petugas');
            }

        }

        elseif ($siswa) {
            $cek_password = Hash::check($password, $siswa->password);

            if ($cek_password == true) {
                Session::put([
                    'hasLogin' => true,
                    'nisn' => $siswa->nisn,
                    'nis' => $siswa->nis,
                    'nama_lengkap' => $siswa->nama_lengkap,
                    'username' => $siswa->username,
                    'password' => $siswa->password,
                    'id_kelas' => $siswa->id_kelas,
                    'alamat' => $siswa->alamat,
                    'tlp' => $siswa->tlp,
                    'id_spp' => $siswa->id_spp,

                ]);
                return redirect('/siswa');
            }
        }    

        // Username dan Password salah
        else{
            return redirect('/login');
        }    

    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }


}
