    <!-- Start of Sub Item Descriptions -->
    <div class="sub_items">
      <?php
    	$a=0;
	foreach($product_category as $r){
		$id=$r->idcategory;
		$title=strtoupper($r->title);
		$name='/'.str_replace(' ','-',$r->name);
		$url=$r->url;
		$image=$r->image;
		$content=$r->content;
		 $style="sub_left";
		 if($a%2==1){$style='sub_right';}
		?>
		      <div class="<?=$style?>">
			<div class="sub_items_header">
			  <h1 style="width:100%"><?=anchor(site($url.$id.$name),$title)?></h1>
			</div>
			<div class="sub_items_image"> <img src="<?=images($image)?>" width="167" height="164" alt="Sub Item Name" /> </div>
			<div class="sub_items_text">
			  <p><?=$content?> </p>
			</div>
			<div class="sub_items_cartinfo">
			  <div class="price">
			    <h2>Go</h2>
			  </div>
			  <!--div class="addtocart"> <a href="#"><span>Add to Cart</span></a> </div-->
			  <div class="clearthis">&nbsp;</div>
			</div>
			<div class="clearthis">&nbsp;</div>
		      </div>
	<?php
	 $a++;
	}?>
        <div class="clearthis">&nbsp;</div>
      </div>
      <!-- End of Right Sub Item -->
      <div class="clearthis">&nbsp;</div>
    </div>
    <!-- End of Sub Item Descriptions -->
    <div class="h_divider">&nbsp;</div>
