
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get dan Post</title>
</head>
<body>
    <h1>Mengirim data dengan Method GET</h1>
    <a href="index.php?halaman=link1&nama=nadya">link 1</a>


    <hr>
    <h1>Mengirim data dengan method POST</h1>
    <form action="index.php?halaman=link2"method="post">
    <div class="mb-3">
        <label for="nama" class="from-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control">
</div>
<div class="mb-3">
    <label for="kelas" class="form-label">kelas</label>
    <select name="kelas"id="kelas"class="form-control">
        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
        <option value="XI DKV 1 ">XI DKV 1 </option>
        <option value="XI DKV 2 1">XI DKV 2</option>
</select>
</div>
<select name="jk"id="jk"class="form-label" class="form-control">
        <option value="perempuan">perempuan</option>
        <option value="laki laki">laki laki</option>
</select>
</div>  

<button type="submit">kirim</button>
</form>
</body>
</html>
