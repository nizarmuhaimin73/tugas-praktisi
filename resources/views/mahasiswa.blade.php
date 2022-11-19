<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Contoh tutorial CRUD Laravel 9</title>
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Data mahasiswa</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Tambah Data</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Nim</th>
<th>email</th>
<th>Kelas</th>
<th>Alamat</th>
<th width="280px">Action</th>
</tr>
@foreach ($mahasiswa as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->nim }}</td>
<td>{{ $p->email }}</td>
<td>{{ $p->class }}</td>
<td>{{ $p->alamat }}</td>

<td>
<form action="{{ route('mahasiswa.destroy',$p->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('mahasiswa.edit',$p->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>