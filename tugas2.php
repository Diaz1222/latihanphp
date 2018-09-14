<html>
<head>
<body>
<center><h2>Tugas</h2></center>
<FORM ACTION="hasil2.php" METHOD="POST">
<table>
<tr>
<td>nama anda</td>
<td>:</td>
<td><input type = "text" name="nama"><br></td>
</tr>
<tr>
<td>nis</td>
<td>:</td>
<td><input type="number" name="nis"><br></td>
</tr>
<tr>
<td>alamat</td>
<td>:</td>
<td><textarea name="alamat"cols="40" rows="5"></textarea></td>
</tr>
<tr>
<td>jenis kelamin</td>
<td>:</td>
<td><input type="radio" name="jk" value="laki-laki" checked>laki-laki<br>
<input type="radio" name="jk" value="wanita"> wanita<br>
<input type="radio" name="jk" value="transgender">transgender<br>
</td>
</tr>
<tr>
<td>agama</td>
<td>:</td>
<td><select name="agama">
    <option value="islam">islam</option>
    <option value="kristen">kristen</option>
    <option value="konghuchu">konghuchu</option>
    <option value="hindu">hindu</option>
    <option value="budha">budha</option>
    </select></td>
</tr>
<tr>
<td>sekolah</td>
<td>:</td>
<td><input type = "text" name="sekolah"></td>
</tr>
   <tr>
   <td>E-mail</td>
   <td>:</td>
   <td><input type = "text" name="email"></td>
   </tr>
   <tr>
   <td>nama orang tua/wali</td>
   <td>:</td>
   <td><input type = "text" name="ortu"></td>
   </tr>
    <tr>
    <td>mapel yang di sukai</td>
    <td>:</td>
    <td><input type="checkbox" name="mapel01" value="matematika(ipa)"checked>mtk<br>
<input type="checkbox" name="mapel02" value="ilmu pengetahuan alam(ipa) ">ipa<br>
<input type="checkbox" name="mapel03" value="ilmu pengetahun sosial(ips)">ips<br>
<input type="checkbox" name="mapel04" value="pengetahuan kewarganegaraan">pkn<br>
<input type="checkbox" name="mapel05" value="ilmu pengetahuan alam(ipa) ">inggris<br>
<input type="checkbox" name="mapel06" value="fisika">fisika<br>
<input type="checkbox" name="mapel07" value="fisika">kimia<br></td>
    </tr>
<tr>
<td>masukan nilai ijazah sd</td>
<td>:</td>
<td><input type="number" name="ijasah"></td>
</tr>
<tr>
<td><input type="submit" name="simpan" value="simpan"></td>
</tr>
</table>
</head>
</html>