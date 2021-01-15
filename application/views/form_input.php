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
    <!-- <form action="<php echo base_url('Welcome/AksiInsert') ?>" method="post"> -->
    <?php echo form_open_multipart('Welcome/AksiInsert'); ?>
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
        <td><input type="file" name="foto" class="form-control" size="20"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" value="SIMPAN"></td>
      </tr>
    <?php echo form_close(); ?>
    <!-- </form> -->
  </table>
</body>
</html>