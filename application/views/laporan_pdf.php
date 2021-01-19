 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
  <table border="0.5" cellspacing="" cellpadding="3">
    <tr>
      <!-- <th>NO</th> -->
      <th>NAMA</th>
      <th>TEMPAT LAHIR</th>
      <th>TANGGAL LAHIR</th>
      <th>GENDER</th>
      <th>NO HP</th>
      <th>EMAIL</th>
      <th>FOTO</th>
    </tr>
    <?php
    // $count = 0;
      foreach($data_pgw as $row){
        // $count = $count + 1;
    ?>
    <tr>
      <!-- <td><?php echo $count ?></td> -->
      <!-- <td><?php echo $row->id ?></td> -->
      <td><?php echo $row->nama ?></td>
      <td><?php echo $row->tmp_lahir ?></td>
      <td><?php echo $row->tgl_lahir ?></td>
      <td><?php echo $row->gender ?></td>
      <td><?php echo $row->no_hp ?></td>
      <td><?php echo $row->email ?></td>
      <!-- <td><?php echo $row->foto ?></td> -->
      <td>
      <img src="<?php echo base_url(); ?>./assets/images/<?php echo $row->foto; ?>" width="90" height="110" alt="">
      </td>
    </tr>
    <?php
      }
    ?>
  </table>   
 </body>
 </html>