 <table>
     <tr align="center">
         <th rowspan="3"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
         </th>
     </tr>
 </table>
 <br>
 <table align="center" width="1000px">
     <tr>
         <th>
             <h1>DATA ATK DEPARTEMEN</h1>
         </th>
     </tr>
 </table>
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
 <table width="100%" border="0">
     <tr align="center">
         <br><br>

         <td colspan="9">
             <img style="float: right;" alt="" src=" <?= base_url('assets/ttd.png') ?>" width="15%">
         </td>
     </tr>
 </table>
 <script>
     window.print()
 </script>