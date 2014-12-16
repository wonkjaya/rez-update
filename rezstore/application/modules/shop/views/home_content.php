<?php 
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
	print_r($home_products);
	foreach($home_products as $r){
		$title[]=strtoupper($r->title);
		$content[]=$r->content;
		$image[]=$r->image;	
	}	
	?>
    <div class="sub_items">
      <!-- Start Left Sub Item -->
      <div class="sub_left">
        <div class="sub_items_header">
          <h1>Laser Printer</h1>
          <h2>Model 34-07-L</h2>
        </div>
        <div class="sub_items_image"> <img src="images/item_printer.gif" width="167" height="164" alt="Sub Item Name" /> </div>
        <div class="sub_items_text">
          <p>If you're looking for beautiful and professionally made templates you can find them at Template Beauty.com.</p>
          <p> <strong> Super performance <br />
            3 year warranty <br />
            1 year  free servicing </strong> </p>
        </div>
        <div class="sub_items_cartinfo">
          <div class="price">
            <h2>$45.99</h2>
          </div>
          <div class="addtocart"> <a href="#"><span>Add to Cart</span></a> </div>
          <div class="clearthis">&nbsp;</div>
        </div>
        <div class="clearthis">&nbsp;</div>
      </div>
      <!-- End of Left Sub Item -->
      <!-- Start Right Sub Item -->
      <div class="sub_right">
        <div class="sub_items_header">
          <h1>Scanner</h1>
          <h2>Model 66-0l-X</h2>
        </div>
        <div class="sub_items_image"> <img src="images/item_scanner.gif" width="175" height="170" alt="Sub Item Name" /> </div>
        <div class="sub_items_text">
          <p>To find great hosting providers visit Web Hosting Zoom</p>
          <p> <strong> Super performance <br />
            3 year warranty <br />
            1 year  free servicing </strong> </p>
        </div>
        <div class="sub_items_cartinfo">
          <div class="price">
            <h2>$45.99</h2>
          </div>
          <div class="addtocart"> <a href="#"><span>Add to Cart</span></a> </div>
          <div class="clearthis">&nbsp;</div>
        </div>
        <div class="clearthis">&nbsp;</div>
      </div>
      <!-- End of Right Sub Item -->
      <div class="clearthis">&nbsp;</div>
    </div>
    <!-- End of Sub Item Descriptions -->
    <div class="h_divider">&nbsp;</div>