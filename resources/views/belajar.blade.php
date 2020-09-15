@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
<body>
@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif

	@if(session('error'))
	<div class="alert alert-error">
		{{ session('error') }}
	</div>
	@endif
<div class="container">
<div class="row justify-content-center">
        <div class="col-6">
        	<div >
            	<h1>Data Siswa</h1>
            	
        	</div>
        </div>
        <div class="col-6">
        	<a href="{{url('/siswa/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus-square"></i>Tambah Data</a>
        	<!-- <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
 				<i class="fa fa-plus-square"></i> Tambah Data
			</button> -->
			
        </div>
	
</div>
<table border="1" class="table table-dark" >

	<tr>
		<th>No
		</th>
		<th>Nama </th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Alamat</th>
		<td>Aksi</td>
	</tr>
	@foreach ($siswa as $row)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{$row->nama_depan}}</td>
		<td>{{$row->jenis_kelamin}}</td>
		<td>{{$row->agama}}</td>
		<td>{{$row->alamat}}</td>
		<td>
			<a href="{{ url('/siswa/' . $row->id . '/edit') }}" class="btn btn-primary"><i class="fa fa-edit " ></i></a>
			<a href="/siswa/{{ $row->id }}/destroy" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></a>
			<!-- <form action="{{ url('/siswa', $row->id) }}" method="POST">
				@method('DELETE')
				@csrf
				<button type="submit">Delete</button>
			</form> -->
		</td>
	</tr>
	@endforeach
</table>
</div>
</body>
</html>
@endsection