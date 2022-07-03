@extends('layout/Dashboard')
@section('title','Admin Satu Kopi')
@section('judul','Invoice Pemesanan Produk')
@section('content')
<div class="container-fluid">

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesanan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>

        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><a href="/invoice/detail/{{ $inv->id }}" class="btn btn-sm btn-primary">Detail</a></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>
@endsection