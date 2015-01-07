
	<?php
		$id='';
		$title='not available';
		$code='not available';
		$framework='not available';
		$lisence='not available';
		$product_description='not available';
		$guarante='not available';
		$image_product='noimage.png';
		$price='0';	
	?>
    <div class="sub_items_detail">
      <?php
    	//print_r($productdetail_content);
	foreach($productdetail_content as $r){
		$id=$r->idproduct;
		$title=strtoupper($r->productname);
		$code=strtoupper($r->code);
		$framework=strtoupper($r->frameworkname);
		$lisence=strtoupper($r->lisencename);
		$product_description=$r->detail;
		$image_product=$r->productimage;
		$guarante=$r->guarante;
		$price=number_format($r->price);
	}
		?>
		  <div class="content_detail">
		  
			<table border=0 width='100%'>
			 <tr>
				<td colspan='5'>
					<?='<h1>'.$title.'</h1><h2>'.$code.'</h2>'?>
					<hr>
				</td>
			 </tr>
			 <tr>
				<td>Kode</td>
				<td>: </td>
				<td><?=$code?></td>
			 </tr>
			 <tr>
				<td>Nama</td>
				<td>: </td>
				<td><?=$title?></td>
				<td rowspan='7' colspan=2 width=40%><img src="<?=images($image_product)?>" style="width:50;height:50%"></td>
			 </tr>
			 <tr>
				<td>Framework</td>
				<td>: </td>
				<td><?=$framework?></td>
			 </tr>
			 <tr>
				<td>Licence </td>
				<td>: </td>
				<td><?=$lisence?></td>
			 </tr>
			 <tr>
				<td>Diskripsi</td>
				<td>: </td>
				<td><?=$product_description?></td>
			 </tr>
			 <tr>
				<td>Garansi Sofware</td>
				<td>: </td>
				<td><?='Selamanya!'?></td>
			 </tr>
			 <tr>
				<td>Garansi Service</td>
				<td>: </td>
				<td><?=$guarante?> <sup>Tahun</sup></td>
			 </tr>
			 <tr>
				<td>Harga</td>
				<td>: </td>
				<td><b>$. <?=$price?></b>
					<br>Hubungi kami sekarang!! dan Dapatkan Harga SEPECIAL!<p>
				</td>
			 </tr>
			 <tr>
				<td></td>
				<td></td>
				<td>
				 <button class='button-default'>Pesan Sekarang!</button>
				 <button class='button-warning'>Demo</button>
				</td>
			 </tr>
			</table>
		  </div>
	
      </div>
    </div>
