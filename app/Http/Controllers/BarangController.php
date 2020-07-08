<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Barang;
use App\Http\Requests\BarangRequest;
use Session;

class BarangController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => [
            'index', 'show', 'cari'
        ]]);
    }

    public function index() {
        $barang_list = Barang::paginate(5);
        $jumlah_barang = Barang::count();
        return view('barang/index', compact('barang_list','jumlah_barang'));
    }

    public function show(Barang $barang) {
        return view('barang.show', compact('barang'));
    }

    public function create() {
        return view('barang.create');
    }

    public function store(BarangRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        Barang::create($input);
        Session::flash('flash_message', 'Data barang berhasil disimpan.');
        return redirect('barang');
    }


    public function edit(Barang $barang) {
        return view('barang.edit', compact('barang'));
    }

    public function update(Barang $barang, BarangRequest $request) {
        $input = $request->all();
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->updateFoto($barang, $request);
        }
        $barang->update($input);
        Session::flash('flash_message', 'Data barang berhasil diupdate.');
        return redirect('barang');
    }

    public function destroy(Barang $barang) {
        $barang->delete();
        Session::flash('flash_message', 'Data barang berhasil dihapus.');
        Session::flash('penting', true);
        return redirect('barang');
    }

    private function uploadFoto(BarangRequest $request) {
        $foto = $request->file('foto');
        $ext  = $foto->getClientOriginalExtension();

        if ($request->file('foto')->isValid()) {
            $foto_name   = date('YmdHis'). ".$ext";
            $request->file('foto')->move('fotoupload', $foto_name);
            return $foto_name;
        }
        return false;
    }

    private function updateFoto(Barang $barang, BarangRequest $request) {
        // Jika user mengisi foto.
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada foto baru.
            $exist = Storage::disk('foto')->exists($barang->foto);
            if (isset($barang->foto) && $exist) {
                $delete = Storage::disk('foto')->delete($barang->foto);
            }

            // Upload foto baru.
            $foto = $request->file('foto');
            $ext  = $foto->getClientOriginalExtension();
            if ($request->file('foto')->isValid()) {
                $foto_name   = date('YmdHis'). ".$ext";
                $upload_path = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);
                return $foto_name;
            }
        }
    }

    private function hapusFoto(Barang $barang) {
        $is_foto_exist = Storage::disk('foto')->exists($barang->foto);

        if ($is_foto_exist) {
            Storage::disk('foto')->delete($barang->foto);
        }
    }

    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            // Query
            $query = Barang::where('namabarang', 'LIKE', '%' . $kata_kunci . '%');

            $barang_list = $query->paginate(2);

            $pagination = $barang_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_barang = $barang_list->total();
            return view('barang.index', compact('barang_list', 'kata_kunci', 'pagination', 'jumlah_barang'));
        }

        return redirect('barang');
    }
}
