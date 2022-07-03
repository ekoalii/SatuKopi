@extends('layout/Dashboard')
@section('title','Admin Satu Kopi')
@section('judul','Data Barang')
@section('content')
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
            <div class="col-6 mt-2">
            <a href="/barang/tambah" class="btn btn-primary text-white">                
                Tambah
            </a>
        </div><br>
              <div class="table table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>No</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Gambar</th>
                      <th>Action</th>

                    </tr>
                </thead>
                    <tbody>
                        <?php $no =1; ?>
                        @foreach ($barang as $brg)
                        <tr>
                            <td>{{ $no }} <?php $no++; ?></td>
                            <td>{{ $brg->nama_brg }}</td>
                            <td>{{ $brg->keterangan }}</td>
                            <td>{{ $brg->kategori }}</td>
                            <td>{{ $brg->harga }}</td>
                            <td>{{ $brg->stok }}</td>
                            <td>{{ $brg->gambar }}</td>
                            <td>     
                            <a href="/barang/edit/{{ $brg->id_brg }}" class="badge badge-warning">Edit</a>
                            <a href="/barang/hapus/{{ $brg->id_brg }}" class="badge badge-danger">Hapus</a>
                        </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
                </div>
</div>

@endsection