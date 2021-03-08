<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Siswa</title>
</head>
<body>
    <h3>Create Siswa</h3>
    <br>
    <form action="{{ route('siswa.store') }}" method="post">
        @csrf
        @method('POST')
        Nama <br>
        <input type="text" name="nama"> <br>
        Tanggal Lahir <br>
        <input type="date" name="tanggal_lahir"><br>
        Tempat Lahir <br>
        <input type="text" name="tempat_lahir"> <br>
        Jenis Kelamin <br>
        <select name="jenis_kelamin" id="">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select> <br>
        Alamat <br>
        <textarea name="alamat"></textarea> <br>
        <button type="submit"> Simpan</button>
        <a href="{{ url('siswa') }}">Kembali</a>
    </form>
</body>
</html>
