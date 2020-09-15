@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@if(session('error'))
	<div class="alert alert-error">
		{{ session('error') }}
	</div>
	@endif

	@if(count($errors) > 0 )
	<div class="alert alert-danger">
		<strong>Perhatian</strong><br>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>	
	</div>
	@endif

	<h1>Form Siswa</h1>
	<!-- Button trigger modal -->

      	<form action="{{ url('siswa', @$siswa->id) }}" method="POST">
      		<div class="form-group">
		@csrf

		@if(!empty($siswa))
			@method('PATCH');
		@endif
        <table class=" table table-bordered table-dark">
			<!-- <tr>
				<td>NIS :</td>
				<td><input type="text" name="nis" autocomplete="off" value="{{ old('nis', @$siswa->nis) }}"></td>
			</tr> -->
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama_depan" autocomplete="off" value="{{ old('nama_depan', @$siswa->nama_depan) }}"></td>
			</tr>
			<tr>
				<td>Alamat:</td>
				<td><input type="text" name="alamat" autocomplete="off" value="{{ old('alamat', @$siswa->alamat) }}"></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td><input type="radio" name="jenis_kelamin" value="L" {{ old('jenis_kelamin', @$siswa->jenis_kelamin) == 'laki' ? 'checked' : '' }} >Laki-laki
				<input type="radio" name="jenis_kelamin" value="P" {{ old('jenis_kelamin', @$siswa->jenis_kelamin) == 'perempuan' ? 'checked' : '' }}>Perempuan</td>
			</tr>
			
			<tr>
				<td>Agama :</td>
				<td>
					<select name="agama">
						<option value="" {{ old('agama', @$siswa->agama) == '' ? 'selected' : '' }}>- Pilih Agama -</option>
						<option value="Islam" {{ old('agama', @$siswa->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
						<option value="Kristen" {{ old('agama', @$siswa->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
						<option value="Hindu" {{ old('agama', @$siswa->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
						<option value="Custom" {{ old('agama', @$siswa->agama) == 'Custom' ? 'selected' : '' }}>Custom</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="Add">
				<button><a href="{{ url('siswa') }}">Cancel</a></button>
				</td>
			</tr>
		</table>
		</div>
	</form>
    

		
</body>
</html>
@endsection