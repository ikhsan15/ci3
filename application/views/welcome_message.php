<table border="0.5" cellspacing="" cellpadding="3">
	<thead>
		<tr>
      <th>NAMA</th>
      <th>TEMPAT LAHIR</th>
      <th>TANGGAL LAHIR</th>
      <th>GENDER</th>
      <th>NO HP</th>
      <th>EMAIL</th>
      <th>FOTO</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data_pgw as $row): ?>
    <tr>
      <td><?php echo $row->nama ?></td>
      <td><?php echo $row->tmp_lahir ?></td>
      <td><?php echo $row->tgl_lahir ?></td>
      <td><?php echo $row->gender ?></td>
      <td><?php echo $row->no_hp ?></td>
      <td><?php echo $row->email ?></td>
      <td><?php echo $row->foto ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>