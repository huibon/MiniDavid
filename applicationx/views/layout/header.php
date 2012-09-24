<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />

<div class="header1_bg">
  <div class="header1">
    <div class="header1_logo"><a href="/">KOOLYTE</a></div>
  </div>
</div>

<div class="header2_bg">
  <div class="header2">
    <div class="header_top_menu">
      <?php
	  $active_state = 0;
      //get the menu item active state
	  if(strpos($current_uri, "food") !== false){
        $active_state = 1;
	  }else if(strpos($current_uri, "real_estate") !== false){
	    $active_state = 2;
	  }else if(strpos($current_uri, "auto") !== false){
	    $active_state = 3;
	  }else if(strpos($current_uri, "map") !== false){
	    $active_state = 4;
	  }
	  ?>
    
      <a href="<?php echo base_url(); ?>"><div class="header_top_menu_item header_top_menu_item_home
      <?php
      if($active_state == 0){
	    echo " header_top_menu_item_active";
	  }
	  ?>
      "></div></a>
      <a href="<?php echo base_url(); ?>food"><div class="header_top_menu_item header_top_menu_item_eat
      <?php
      if($active_state == 1){
	    echo " header_top_menu_item_active";
	  }
	  ?>
      "></div></a>
      <a href="<?php echo base_url(); ?>real_estate"><div class="header_top_menu_item header_top_menu_item_live
      <?php
      if($active_state == 2){
	    echo " header_top_menu_item_active";
	  }
	  ?>
      "></div></a>
      <a href="<?php echo base_url(); ?>auto"><div class="header_top_menu_item header_top_menu_item_move
      <?php
      if($active_state == 3){
	    echo " header_top_menu_item_active";
	  }
	  ?>
      "></div></a>
      <a href="<?php echo base_url(); ?>map"><div class="header_top_menu_item header_top_menu_item_map
      <?php
      if($active_state == 4){
	    echo " header_top_menu_item_active";
	  }
	  ?>
      "></div></a>
    </div>
    <div class="clr"></div>
  </div>
</div>