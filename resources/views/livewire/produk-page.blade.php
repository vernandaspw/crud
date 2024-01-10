<div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5 pt-3">
            <div class="col-md-3">
                @if($editID)
                <div class="card shadow rounded">
                    <div class="card-header bg-warning">
                        <b>Edit produk</b>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <form wire:submit='editSimpan'>
                                <div class="mb-2">
                                    <label for="">Nama produk</label>
                                    <input type="text" wire:model.live='nama_produk' class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="">Keterangan</label>
                                    <input type="text" wire:model.live='keterangan' class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="">Harga</label>
                                    <input type="number" wire:model.live='harga' class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="">Qty</label>
                                    <input type="number" wire:model.live='jumlah' class="form-control">
                                </div>
                                <button class="btn btn-success form-control" type="submit">Simpan</button>
                                <button wire:click="resetInput" class="btn btn-secondary mt-1 form-control"
                                    type="button">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <div class="card shadow rounded">
                    <div class="card-header ">
                        <b>Tambah produk</b>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <form wire:submit='simpan'>
                                <div class="mb-2">
                                    <label for="">Nama produk</label>
                                    <input type="text" wire:model.live='nama_produk' class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="">Keterangan</label>
                                    <input type="text" wire:model.live='keterangan' class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="">Harga</label>
                                    <input type="number" wire:model.live='harga' class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label for="">Qty</label>
                                    <input type="number" wire:model.live='jumlah' class="form-control">
                                </div>
                                <button class="btn btn-success form-control" type="submit">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-9">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>Produk</th>
                                <th>Keterangan</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($produks as $produk)
                                <tr>
                                    <td>
                                        {{ $produk->nama_produk }}
                                    </td>
                                    <td>
                                        {{ $produk->keterangan }}
                                    </td>
                                    <td>
                                        {{ $produk->harga }}
                                    </td>
                                    <td>
                                        {{ $produk->jumlah }}
                                    </td>
                                    <td>
                                        <button wire:click="editPage({{ $produk->id }})"
                                            class="btn btn-warning">Edit</button>
                                        <button wire:click="hapus({{$produk->id}})"
                                            class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
