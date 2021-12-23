<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    public function index()
    {
        $users = User::getAll();

        return view('HalamanPengelolaUser', [
            'users' => $users,
        ]);
    }

    public function add()
    {
        return view('TambahUser');
    }

    public function tambah(Request $request)
    {
        $data = $request->all();

        User::create([
            'nama_user' => $data['nama_user'],
            'nip' => $data['nip'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],

        ]);
        Alert::success('Sukses', 'User berhasil dibuat');
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('EditUser', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        if($data['password'] !== null) {
            $user->update(['password' => bcrypt($data['password'])]);
        }
        $user->update([
            'nama_user' => $data['nama_user'], // sesuai name form,
            'nip' => $data['nip'],
            'email' => $data['email'],
            'role' => $data['role'],
        ]);


        Alert::success('Sukses', 'Data user berhasil diupdate');
        return redirect()->route('user.index');
    }
    public function destroy($id) {
        $user = User::find($id);

        $user->delete();
        Alert::success('Sukses', 'Data user berhasil dihapus');
        return redirect()->route('user.index');
    }
}
