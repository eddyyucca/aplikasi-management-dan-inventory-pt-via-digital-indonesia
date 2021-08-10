 <table>
     <tr align="center">
         <th rowspan="3"><img src="<?= base_url('assets/cop.png') ?>" width="100%">
         </th>
     </tr>
 </table>
 <br>
 <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
         <thead>
             <tr>
                 <th>No</th>
                 <th>No Surat</th>
                 <th>Perihal</th>
                 <th>tanggal Surat</th>
                 <th>tanggal Surat Diterima</th>
                 <th>Bentuk Surat</th>

             </tr>
         </thead>
         <!-- memanggil data user -->
         <?php
            $no = 1;
            foreach ($surat as $x) { ?>
             <tbody>
                 <tr>
                     <td><?= $no++; ?></td>
                     <td><?= $x->no_surat_masuk; ?></td>
                     <td><?= $x->perihal; ?></td>
                     <td><?= $x->tanggal; ?></td>
                     <td><?= $x->tgl_surat_masuk; ?></td>
                     <td><?= $x->bentuk_surat; ?></td>

                 </tr>
             <?php } ?>
             </tbody>
     </table>
 </div>
 <script>
     window.print()
 </script>