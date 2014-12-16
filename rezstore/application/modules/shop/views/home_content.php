<?php 
$title_content="";
$content="";
$image="";
 foreach($home_content as $r){
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
	if(count($home_products) == 0){
		for($i=0;$i<=1;$i++){
			$id[$i]=0;
			$title[$i]="This Is Title ".$i;
			$content[$i]="this is a content for product ,if you want to edit this product, you can edit with admin panel ".$i;
			$image[$i]="noimage.png";
			$price[]="5444";
		}
	}
	//print_r($home_products);
	foreach($home_products as $r){
		$id[]=$r->idproduct;
		$title[]=strtoupper($r->productname);
		$code[]=$r->code;
		$content_product[]=$r->detail;
		$image_product[]=$r->productimage;
		$price[]=number_format($r->price);	
	}	
	?>
    <div class="sub_items">
      <!-- Start Left Sub Item -->
      <div class="sub_left">
        <div class="sub_items_header">
          <h1><?=anchor(site('detailproduct/'.$id[0]),$title[0])?></h1>
          <h2><?=$code[0]?></h2>
        </div>
        <div class="sub_items_image"> <img src="<?=images($image_product[0],'product')?>" width="167" height="164" alt="Sub Item Name" /> </div>
        <div class="sub_items_text">
          <p><?=$content_product[0]?> </p>
        </div>
        <div class="sub_items_cartinfo">
          <div class="price">
            <h2>$ <?=$price[0]?></h2>
          </div>
          <!--div class="addtocart"> <a href="#"><span>Add to Cart</span></a> </div-->
          <div class="clearthis">&nbsp;</div>
        </div>
        <div class="clearthis">&nbsp;</div>
      </div>
      <!-- End of Left Sub Item -->
      <!-- Start Right Sub Item -->
      <div class="sub_right">
        <div class="sub_items_header">
          <h1><?=anchor(site('detailproduct/'.$id[1]),$title[1])?></h1>
          <h2><?=$code[1]?></h2>
        </div>
        <div class="sub_items_image"> <img src="<?=images($image_product[1],'product')?>" width="175" height="170" alt="Sub Item Name" /> </div>
        <div class="sub_items_text">
          <p><?=$content_product[1]?> </p>
        </div>
        <div class="sub_items_cartinfo">
          <div class="price">
            <h2>$ <?=$price[1]?></h2>
          </div>
          <!--div class="addtocart"> <a href="#"><span>Add to Cart</span></a> </div-->
          <div class="clearthis">&nbsp;</div>
        </div>
        <div class="clearthis">&nbsp;</div>
      </div>
      <!-- End of Right Sub Item -->
      <div class="clearthis">&nbsp;</div>
    </div>
    <!-- End of Sub Item Descriptions -->
    <div class="h_divider">&nbsp;</div>
