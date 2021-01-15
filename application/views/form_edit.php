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
    <form action="<?php echo base_url('Welcome/AksiEdit') ?>" method="post">
      <tr>
        <td>id</td>
        <td>:</td>
        <td>
          <input type="text" value="<?php echo $data_pgw->id ?>" disabled> 
          <input type="hidden" name="id" value="<?php echo $data_pgw->id ?>">
        </td>
      </tr>
      <tr>
        <td>nama</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_pgw->nama ?>" name="nama"></td>
      </tr>
      <tr>
        <td>tempat lahir</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_pgw->tmp_lahir ?>" name="tmp_lahir"></td>
      </tr>
      <tr>
        <td>tanggal lahir</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_pgw->tgl_lahir ?>" name="tgl_lahir"></td>
      </tr>
      <tr>
        <td>gender</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_pgw->gender ?>" name="gender"></td>
      </tr>
      <tr>
        <td>no hp</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_pgw->no_hp ?>" name="no_hp"></td>
      </tr>
      <tr>
        <td>email</td>
        <td>:</td>
        <td><input type="text" value="<?php echo $data_pgw->email ?>" name="email"></td>
      </tr>
      <tr>
        <td>foto</td>
        <td>:</td>
        <td>
          <!-- <input type="text" value="<?php echo $data_pgw->foto ?>" name="foto"> -->
          <img src="<?php echo base_url(); ?>./assets/images/<?php echo $data_pgw->foto; ?>" width="90" height="110" alt="">
        </td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" value="SIMPAN"></td>
      </tr>
    </form>
  </table>
</body>
</html>