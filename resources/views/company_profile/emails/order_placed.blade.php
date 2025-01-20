<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pesanan Baru Diterima</title>
</head>
<body>
<h1>Pesanan Baru</h1>
<p>Nama: {{ $order->name }}</p>
<p>Email: {{ $order->email }}</p>
<p>Nomor Telepon: {{ $order->phone }}</p>
<p>Alamat: {{ $order->address }}</p>
<p>Jenis Paket: {{ $order->package_type }}</p>
</body>
</html>
