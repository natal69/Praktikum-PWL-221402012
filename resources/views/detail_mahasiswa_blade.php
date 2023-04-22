<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>
        <ul>
            Nama : Natal <br>
            NIM : 221402012 <br>
            Makes : Ayam Geprek <br>
            Mikes : Aqua <br>
            <form action="daftar_mahasiswa" method="post">
                @csrf
                <button action="submit" class="btn btn-primary" >Detail Mahasiswa</button>
            </form>
        </ul>
    </div>
</body>
</html>
