<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form input data</title>

  <!-- DATEPICKER -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- DATEPICKER -->

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
        <td><input type="text" value="<?php echo $data_pgw->tgl_lahir ?>" name="tgl_lahir" id="tgl_lahir"></td>
      </tr>
      <tr>
        <td>gender</td>
        <td>:</td>
        <td>
          <input type="text" name="gender" value="<?php echo $data_pgw->gender ?>">
          <!-- <select name="gender" id="gender" value="<?php echo $data_pgw->gender ?>"> -->
            <!-- <option>Pria</option> -->
            <!-- <option>Wanita</option> -->
          <!-- </select> -->
        </td>
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
          
          <?php
            if($data_pgw->foto == !NULL){
          ?>
            <img src="<?php echo base_url(); ?>./assets/images/<?php echo $data_pgw->foto; ?>" width="90" height="110" alt="">
            <!-- <input type="file" name="foto"> -->
          <?php
            }else{
          ?>
          <img src="<?php echo base_url(); ?>./assets/images/inf.jpg" width="90" height="110" alt="">
          <input type="file" name="foto">
            <?php } ?>
        </td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" value="SIMPAN"></td>
      </tr>
    </form>
  </table>
</body>
</html>

<script type="text/javascript">
  $( function() {
    $( "#gender" ).selectmenu();
    $( "#tgl_lahir" ).datepicker({
      changeMonth: true,
      changeYear: true,
      showAnim: "drop",
      yearRange: '1900:+0',
    });
  });

</script>
