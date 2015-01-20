<table class='table'>
 <tr>
  <th style="width:50px;">No</th>
  <th>Kode</th>
  <th>Nama Product</th>
  <th>Harga</th>
  <th>image</th>
 </tr>
 <?php
 $no=1;
  foreach($product as $r){
 ?>
 <tr onclick="getinfo(<?=$r->id?>)">
  <td><?= $no ?></td>
  <td><?= $r->code ?></td>
  <td><?= $r->productname ?></td>
  <td><?= $r->price ?></td>
  <td><?= img(array('src'=>images($r->productimage),'style'=>"width:85px;")) ?></td>
 </tr>
 <?php 
 $no++;
 }?>
</table>
<script>
function getinfo(id){
 document.location="<?= site_url('admin/productdetail') ?>/" + id;
}
</script>
