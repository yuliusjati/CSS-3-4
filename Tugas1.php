<html>
<head><title>Daftar Siswa</title></head>
<Body>
    <h2>Data Siswa</h2>
    <form action="Tugas2.php" method="post" name="form1">
    <table>
    <tr>
    <td>NIS</td>
    <td><input type="text" name="nis"><br></td>
    </tr>
    <tr>
    <td>Nama Depan</td>
    <td><input type="text" name="namade" ><br></td>
    </tr>
    <tr>
    <td>Nama Belakang</td>
    <td><input type="text" name="namabe" ><br></td>
    </tr>
    <tr>
    <td>Tempat lahir</td>
    <td><input type="text" name="tempat" ><br></td>
    </tr>
    <tr>
    <td>Tanggal lahir</td>
    <td><input type="date" name="tanggal" ><br></td>
    </tr>
    <tr>
    <td>Agama</td>
    <td><input type="text" name="agama" ><br></td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="jk" value="Pria">Pria</td>
    <td><input type="radio" name="jk" value="wanita">Wanita</td>
    </tr> 
    <tr>
    <td>Email</td>
    <td><input type="text" name="email"><br></td>
    </tr>
    <tr>
    <td>Telepon</td>
    <td><input type="text" name="tlp"><br></td>
    </tr>
    <tr>
    <td>WhatsApp</td>
    <td><input type="text" name="wa"><br></td>
    </tr>
    <tr>
    <td>Facebook</td>
    <td><input type="text" name="facebook"></td>
    </tr>
    <tr>
    <td>WebSite</td>
    <td><input type="url" name="web"></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><textarea name="alamat" cols="30" rows="2"></textarea></td>
    </tr>
    <tr>
    <td>Jurusan</td>
    <td><select name="jurusan">
    <option value="TKJ">Teknik Konputer Jaringan</option>
    <option value="RPL">Rekayasa Perangkat Lunak</option>
    </select></td>
    </tr>
    <tr>
    <td>Kelas</td>
    <td><input type="radio" name="kelas" value="10">10</td>
    <td><input type="radio" name="kelas" value="11">11</td>
    <td><input type="radio" name="kelas" value="12">12</td>
    </tr>
    <tr>
    <td>Username</td>
    <td><input type="text" name="us"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input type="password" name="password"></td>
    </tr>
    <tr>
    <td>Pesan</td>
    <td><textarea name="pasan" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
    <td><input type="submit" name="submit" value="Simpan"></td>
    </tr>
    <tr>
    <td><input type="reset" value="Ulangi"></td>
    </tr>
    <tr>
    <td><input type="button" value="Kembali" onClick="self.history.back()"></td>
    </tr>
    </table> 
    </form>
</Body>
</html>

