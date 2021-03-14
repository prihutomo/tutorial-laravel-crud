<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Siswa</title>
</head>
<body>
    <h3>{{ old('id') ? 'Edit' : 'Create' }} Siswa</h3>
    <br>
    <form action="{{ old('id') ? route('siswa.update', old('id')) : route('siswa.store')  }}" method="post">
        @csrf
        @method((old('id') ? 'PUT' : 'POST'))
        Nama <br>
        <input type="text" name="nama" value="{{ old('nama') }}"> <br>
        Tanggal Lahir <br>
        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"><br>
        Tempat Lahir <br>
        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}"> <br>
        Jenis Kelamin <br>
        <select name="jenis_kelamin" id="">
            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select> <br>
        Alamat <br>
        <textarea name="alamat">{{ old('alamat') }}</textarea> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('siswa') }}">Kembali</a>
    </form>
</body>
</html>
