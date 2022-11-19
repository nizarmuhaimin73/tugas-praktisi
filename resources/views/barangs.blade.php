
    <h3><b>Data barang</b></h3>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>
</thead>
<tbody>
    <tr>
        @foreach ($barangs as $i => $b)
    <tr>
            <td>{{ $i+1}}</td>
            <td>{{ $b->nama_produk}}</td>
            <td>{{ $b->harga_beli}}</td>
            <td>{{ $b->harga_jual}}</td>
    </tr>
    @endforeach
</tr>
</tbody>
</table>
