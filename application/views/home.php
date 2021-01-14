<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>halaman utama</title>
</head><body>
  <h1>hello world</h1>
  <button onclick="document.location.href='<?php echo base_url('Welcome/formInput') ?>' ">Tambah</button>
  <table>
    <tr>
      <td>no</td>
      <!-- <td>id</td> -->
      <td>nama</td>
       <td>tempat lahir</td>
       <td>tgl lahir</td>
       <td>gender</td>
       <td>no. hp</td>
       <td>email</td>
       <td>foto</td>
    </tr>
    <?php
    $count = 0;
      foreach($data_pgw as $row){
        $count = $count + 1;
    ?>
    <tr>
      <td><?php echo $count ?></td>
      <!-- <td><?php echo $row->id ?></td> -->
      <td><?php echo $row->nama ?></td>
      <td><?php echo $row->tmp_lahir ?></td>
      <td><?php echo $row->tgl_lahir ?></td>
      <td><?php echo $row->gender ?></td>
      <td><?php echo $row->no_hp ?></td>
      <td><?php echo $row->email ?></td>
      <td><?php echo $row->foto ?></td>
      <td>
         <a href="<?php echo base_url('Welcome/formEdit/').$row->id ?>">Edit</a>
         <a href="<?php echo base_url('Welcome/AksiDelete/').$row->id ?>">Delete</a>
         <a href="<?php echo base_url('Welcome/PrintPdf/').$row->id ?>">Export PDF</a>
      </td>
    </tr>
    <?php
      }
    ?>
  </table>
</body></html>