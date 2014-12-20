<?php 
$title_content="";
$content="";
$image="";
 foreach($category_content as $r){
	$title_content=strtoupper($r->title);
	$content=$r->content;
	$image=$r->image;
 }
?>
<!-- Start of New Item Description -->
    <div id="new_item">
      <div id="new_item_header">
        <h1><?=$title_content?></h1>
      </div>
      <div id="new_item_image"> <img src="<?=images($image)?>" width="242" height="180" alt="New Item Name" /> </div>
      <div id="new_item_text">
        <?=$content?>
      </div>
      <div id="new_item_link"> <a href="#">.....Read More</a> </div>
      <div class="clearthis">&nbsp;</div>
    </div>
    <!-- End of New Item Description -->
    <div class="h_divider">&nbsp;</div>
    <!-- Start of Sub Item Descriptions -->
	<?php
	if(count($category_products) == 0){
		for($i=0;$i<=1;$i++){
			$id[$i]=0;
			$title[$i]="This Is Title ".$i;
			$content[$i]="this is a content for product ,if you want to edit this product, you can edit with admin panel ".$i;
			$image[$i]="noimage.png";
			$price[]="5444";
		}
	}
	//print_r($home_products);
	?>
    <div class="sub_items">
    	<?php
    	$a=0;
	foreach($category_products as $r){
		$id=$r->idproduct;
		$title=strtoupper($r->productname);
		$code=$r->code;
		$content_product=$r->detail;
		$image_product=$r->productimage;
		$price=number_format($r->price);
		 $style="sub_left";
		 if($a%2==1){$style='sub_right';}
		?>
		      <div class="<?=$style?>">
			<div class="sub_items_header">
			  <h1><?=anchor(site('detailproduct/'.$id),$title)?></h1>
			  <h2><?=$code?></h2>
			</div>
			<div class="sub_items_image"> <img src="<?=images($image_product,'product')?>" width="167" height="164" alt="Sub Item Name" /> </div>
			<div class="sub_items_text">
			  <p><?=$content_product?> </p>
			</div>
			<div class="sub_items_cartinfo">
			  <div class="price">
			    <h2>$ <?=$price?></h2>
			  </div>
			  <!--div class="addtocart"> <a href="#"><span>Add to Cart</span></a> </div-->
			  <div class="clearthis">&nbsp;</div>
			</div>
			<div class="clearthis">&nbsp;</div>
		      </div>
	<?php
	 $a++;
	}
	if(count($category_products) == 0){print_r("data Tidak ada!");}	
	?>
      <div class="clearthis">&nbsp;</div>
    </div>
    <!-- End of Sub Item Descriptions -->
    <div class="h_divider">&nbsp;</div>
