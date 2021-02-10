<?php
  $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
  $pdf->SetTitle('test');
  $pdf->SetHeaderMargin(30);
  $pdf->SetTopMargin(20);
  $pdf->setFooterMargin(20);
  // $pdf->SetAutoPageBreak(true);
  $pdf->SetAuthor('Author');
  $pdf->SetDisplayMode('real', 'default');
  $pdf->AddPage();
  // $i=0;

  // set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, "26");

  foreach ($data_pribadi as $row) {
    $html='
    <table border="0.5" cellspacing="" cellpadding="3">
      <tr bgcolor="#ffffff">
        <td width="20%" align="center">Nama</td>
        <td width="20%" align="center">gender</td>
        <td width="20%" align="center">no hp</td>
        <td width="20%" align="center">email</td>
        <td width="20%" align="center">foto</td>
      </tr>
      <tr bgcolor="#ffffff">
        <td width="20%" align="left">'.$row->nama.'</td>
        <td width="20%" align="left">'.$row->gender.'</td>
        <td width="20%" align="left">'.$row->no_hp.'</td>
        <td width="20%" align="left">'.$row->email.'</td>
        <td width="20%"><img src="'.base_url('/assets/images/'.$row->foto).'"></td>
        
      </tr>
    </table>
    ';
    // die(print_r($row->foto));
    // <td width="20%"><img src="'.base_url().'/assets/images/'.$row->foto.'"></td>
  }

  $pdf->writeHTML($html, true, false, true, false, '');
  $pdf->Output('hasil.pdf', 'I');

?>