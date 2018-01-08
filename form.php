<html>
<head>
	//judul
    <title>Prak1</title>
</head>
<body>
<h2><u>Buku Tamu</u></h2>
<form action=save.php method=get>
    <table border=0>
    <tr>
        <td><b>Nama</b></td>
        <td><Input type=text name=nama></td>
    </tr>
    <tr>
        <td><b>Jenis Kelamin</b></td>
        <td><input type=radio value="L" checked name="jkel">laki-Laki
            <input type=radio value="P" name="jkel">Perempuan</td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td><input type=text name=email></td>
    </tr>
    <tr>
        <td><b>Minat</b></td>
        <td><input type=checkbox name=minat1>Represing
            <input type=checkbox name=minat2>Mancing
            <input type=checkbox name=minat3>Kamping
            <input type=checkbox name=minat4>Sopping
        </td>
    </tr>
        <td><b>Komentar</b></td>
        <td><textarea rows=4 cols=40 name=komentar></textarea></td>
    </tr>
    </table>
    <input type=submit value="Simpan"
</form>
</body>
</html>