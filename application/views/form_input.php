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
  <table class="table table-bordered" id="tableLoop">
    <!-- <form action="<php echo base_url('Welcome/AksiInsert') ?>" method="post"> -->
    <?php echo form_open_multipart('Welcome/AksiInsert'); ?>
    <section>
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
        <td><input type="text" name="tgl_lahir" id="tgl_lahir"></td>
      </tr>
    </section>
    <section>
      <tr>
        <td>gender</td>
        <td>:</td>
        <td>
          <!-- <input type="text" name="gender"> -->
          <select name="gender" id="gender">
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
          </select>
        </td>
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
    </section>
    <?php echo form_close(); ?>
    <!-- </form> -->
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
