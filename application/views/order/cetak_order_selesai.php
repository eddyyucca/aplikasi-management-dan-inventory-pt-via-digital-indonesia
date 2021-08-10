 <table>
     <tr align="center">
         <th rowspan="3"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
         </th>
     </tr>
 </table>
 <br>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
     <div class="container">
         <thead>
             <tr>
                 <th>No</th>
                 <th>User</th>
                 <th>Departemen</th>
                 <th>Tanggal</th>

             </tr>
         </thead>
         <tbody>
             <?php
                $nomor = 1;
                foreach ($data as $x) { ?>
                 <tr>
                     <td><?= $nomor++; ?></td>
                     <td><?= $x->user; ?></td>
                     <td><?= $x->nama_dep; ?></td>
                     <td><?= $x->tanggal; ?></td>

                 </tr>
             <?php } ?>
         </tbody>
 </table>
 <script>
     window.print()
 </script>