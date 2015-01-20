<table class='table'>
 <?php
  foreach($product as $r){
 // print_r($r);
   $image=$r->productimage;
   $id=$r->id;
   $code=$r->code;
   $productname=$r->productname;
   $price=$r->price;
   $category=$r->name;
   $framework=$r->frameworkname;
   $licence=$r->licencename;
   $detail=$r->detail;
  }
 ?>
 <tr>
  <td></td>
  <td><?= img(array('src'=>images($image),'style'=>"width:200px;")) ?></td>
 </tr>
 <tr>
  <td>Kode</td>
  <td>: <?= $code ?></td>
 </tr>
 <tr>
  <td>Nama Produk</td>
  <td>: <?= $productname ?></td>
 </tr>
 <tr>
  <td>Harga Produk</td>
  <td>: <?= $price ?></td>
 </tr>
 <tr>
  <td>Kategori Produk</td>
  <td>: <?= $category ?></td>
 </tr>
 <tr>
  <td>Framework Produk</td>
  <td>: <?= $framework ?></td>
 </tr>
 <tr>
  <td>Licence Produk</td>
  <td>: <?= $licence ?></td>
 </tr>
 <tr>
  <td>Detail Produk</td>
  <td>: <?= $detail ?></td>
 </tr>
 <tr>
  <td></td>
  <td>
  	<div class="btn-group" role="group" style="float:right;">
	  <?=anchor(site('new_product/'),'New','class="btn btn-primary"')?>
	  <?=anchor(site('edit_product/'.$id),'Edit','class="btn btn-default"')?>
	  <?=anchor(site('move_to_trash/'.$id),'Trash','class="btn btn-default"')?>
	  <?=anchor(site('delete_product/'.$id),'Hapus','class="btn btn-danger"')?>
	</div>
  </td>
 </tr>
</table>
<script>
function getinfo(id){
 document.location="<?= site_url('admin/productdetail') ?>/" + id;
}
</script>
