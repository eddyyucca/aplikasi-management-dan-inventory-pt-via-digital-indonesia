 <table>
     <tr align="center">
         <th rowspan="3"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
         </th>
     </tr>
 </table>
 <br>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
     <thead>
         <tr>
             <th>No</th>
             <th>No Surat</th>
             <th>Perihal</th>
             <th>Bentuk Surat</th>
             <th>Tujuan</th>
             <th>Bagian</th>
             <th>Tanggal</th>
         </tr>
     </thead>
     <!-- memanggil data user -->
     <?php
        $no = 1;
        foreach ($surat as $x) { ?>
         <tbody>
             <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $x->no_surat; ?></td>
                 <td><?= $x->perihal; ?></td>
                 <td><?= $x->bentuk_surat; ?></td>
                 <td><?= $x->tujuan; ?></td>
                 <td><?= $x->bagian; ?></td>
                 <td><?= $x->tanggal; ?></td>

             </tr>
         <?php } ?>
         </tbody>
 </table>
 <script>
     window.print()
 </script>