<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form input data</title>
</head>
<body>

<h3>form input data</h3>
  <table>
    <form action="<?php echo base_url('Welcome/AksiInsert') ?>" method="post">
      <!-- <tr>
        <td>id</td>
        <td>:</td>
        <td><input type="text" name="id"></td>
      </tr> -->
      <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>
      </tr>
      <tr>
        <td>tempat lahir</td>
        <td>:</td>
        <td><input type="text" name="tmp_lahir"></td>
      </tr>
      <tr>
        <td>tanggal lahir</td>
        <td>:</td>
        <td><input type="text" name="tgl_lahir"></td>
      </tr>
      <tr>
        <td>gender</td>
        <td>:</td>
        <td><input type="text" name="gender"></td>
      </tr>
      <tr>
        <td>no hp</td>
        <td>:</td>
        <td><input type="text" name="no_hp"></td>
      </tr>
      <tr>
        <td>email</td>
        <td>:</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>foto</td>
        <td>:</td>
        <td><input type="text" name="foto"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" value="SIMPAN"></td>
      </tr>
    </form>
  </table>
</body>
</html>