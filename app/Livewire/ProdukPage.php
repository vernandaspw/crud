<?php

namespace App\Livewire;

use App\Models\Produk;
use Livewire\Component;

class ProdukPage extends Component
{
    public $produks = [];
    public function render()
    {
        $this->produks = Produk::latest()->get();
        return view('livewire.produk-page');
    }

    public $editID, $nama_produk, $keterangan, $harga, $jumlah;

    public function resetInput()
    {
        $this->nama_produk = null;
        $this->keterangan = null;
        $this->harga = null;
        $this->jumlah = null;
        $this->editID = null;
    }

    public function simpan()
    {
        $p = new Produk();
        $p->nama_produk = $this->nama_produk;
        $p->keterangan = $this->keterangan;
        $p->harga = $this->harga;
        $p->jumlah = $this->jumlah;
        $p->save();

        $this->resetInput();
    }

    public function editPage($id)
    {
        $p = Produk::find($id);
        $this->editID = $id;
        $this->nama_produk = $p->nama_produk;
        $this->keterangan = $p->keterangan;
        $this->harga = intval($p->harga);
        $this->jumlah = $p->jumlah;
    }

    public function editSimpan()
    {
        $p = Produk::find($this->editID);
        $p->nama_produk = $this->nama_produk;
        $p->keterangan = $this->keterangan;
        $p->harga = $this->harga;
        $p->jumlah = $this->jumlah;
        $p->save();

        $this->resetInput();
    }

    function hapus($id) {
        Produk::find($id)->delete();
    }

}
