<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Siswa</title>
</head>
<body>
    <h3>Edit Siswa</h3>
    <br>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
        @csrf
        @method('PUT')
        Nama <br>
        <input type="text" name="nama" value="{{ $siswa->nama }}"> <br>
        Tanggal Lahir <br>
        <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}"><br>
        Tempat Lahir <br>
        <input type="text" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}"> <br>
        Jenis Kelamin <br>
        <select name="jenis_kelamin" id="">
            <option value="L" {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select> <br>
        Alamat <br>
        <textarea name="alamat">{{ $siswa->alamat }}</textarea> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('siswa') }}">Kembali</a>
    </form>
</body>
</html>
