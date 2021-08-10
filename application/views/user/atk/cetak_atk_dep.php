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
             <th>Item</th>
             <th>Jumlah</th>
             <th>Tanggal Order Terakhir</th>
             <th>Satuan</th>
         </tr>
     </thead>
     <tbody>
         <?php
            $nomor = 1;
            foreach ($data as $x) { ?>
             <tr>
                 <td><?= $nomor++; ?></td>
                 <td><?= $x->item; ?></td>
                 <td><?= $x->qty_order; ?></td>
                 <td><?= $x->tanggal; ?></td>
                 <td><?= $x->satuan; ?></td>

             </tr>
         <?php } ?>
     </tbody>
 </table>
 <script>
     window.print()
 </script>