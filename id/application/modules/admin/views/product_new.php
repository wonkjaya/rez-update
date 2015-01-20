<table class='table'>
 <?php
  foreach($product as $r){
   $image=$r->productimage;
   $id=$r->id;
   $code=$r->code;
   $productname=$r->productname;
   $price=$r->price;
   $category=$r->name;
   $framework=$r->idframework;
   $licence=$r->islicence;
   $detail=$r->detail;
  }
 ?>
 <tr>
  <td></td>
  <td><?= img(array('src'=>images($image),'style'=>"width:200px;")) ?></td>
 </tr>
 <tr>
  <td>Kode</td>
  <td>: <?= form_input('code',$code) ?></td>
 </tr>
 <tr>
  <td>Nama Produk</td>
  <td>: <?= form_input('productname',$productname,'class="input"') ?></td>
 </tr>
 <tr>
  <td>Harga Produk</td>
  <td>: <?= form_input('price',$price,'class="input"') ?></td>
 </tr>
 <tr>
  <td>Kategori Produk</td>
  <td>: <?= form_dropdown('category',$arr_ctg,$category) ?></td>
 </tr>
 <tr>
  <td>Framework Produk</td>
  <td>: <?= form_dropdown('framework',$arr_fw,$framework) ?></td>
 </tr>
 <tr>
  <td>Licence Produk</td>
  <td>: <?= form_dropdown('licence',$arr_lcc,$licence) ?></td>
 </tr>
 <tr>
  <td>Detail Produk</td>
  <td>: <?= textarea('code',$detail) ?></td>
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
