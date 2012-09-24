<!-- food section -->

<div class="slideshow_bg">
  <div class="slideshow top_down_shadow">
    <img src="<?php echo base_url(); ?>images/temp/temp_1.jpg">
  </div>
</div>

<div class="site_top_ads_bg">
  <div class="site_top_ads">
    <div class="site_top_ads_item site_top_ads_item_1 round_corner_3px center_shadow">
      <div class="site_top_ads_hover_shadow"><div class="site_top_ads_hover_text">永福早茶</div></div>
    </div>
    <div class="site_top_ads_item site_top_ads_item_2 round_corner_3px center_shadow">
      <div class="site_top_ads_hover_shadow"><div class="site_top_ads_hover_text">晴天小超人</div></div>
    </div>
    <div class="site_top_ads_item site_top_ads_item_3 round_corner_3px center_shadow">
      <div class="site_top_ads_hover_shadow"><div class="site_top_ads_hover_text">可可小屋</div></div>
    </div>
    <div class="site_top_ads_item site_top_ads_item_4 round_corner_3px center_shadow">
      <div class="site_top_ads_hover_shadow"><div class="site_top_ads_hover_text">Bed Breakfast</div></div>
    </div>
  </div>
</div>

<div class="site_search_bar_bg top_down_shadow_light">
  <div class="site_search_bar">
    <div class="site_search_bar_menu">
      <div class="site_search_bar_menu_item site_search_bar_menu_item_cuisine"></div>
      <div class="site_search_bar_menu_item site_search_bar_menu_item_reputation"></div>
      <div class="site_search_bar_menu_item site_search_bar_menu_item_area"></div>
      <div class="site_search_bar_menu_item site_search_bar_menu_item_new"></div>
      <div class="site_search_bar_menu_item site_search_bar_menu_item_topic"></div>
    </div>
    
    <div class="site_search_bar_menu_2">
      <div class="site_search_bar_menu_item site_search_bar_menu_item_map"></div>
      <div class="site_search_bar_search"><input type="text" class="site_search_bar_input" id="site_search_bar_input_food" name="site_search_bar_input_food" maxlength="50" /></div>
    </div>
  </div>
</div>

<div class="site_search_bar_sub_bg">
  <div class="site_search_bar_sub">
    <div class="site_search_bar_sub_left">所有菜系 ＋ 本月最火 ＋ 多伦多</div>
    <div class="site_search_bar_sub_right">
      <div class="site_search_bar_sub_right_item"><b>显示模式</b></div>
      <div class="site_search_bar_sub_right_item">列表</div>
      <div class="site_search_bar_sub_right_item">缩图</div>
      <div class="site_search_bar_sub_right_item">地图模式</div>
    </div>
  </div>
</div>

<div class="site_pin_bg">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.masonry.min.js"></script>
  <div class="site_pin_holder">
    <div id="site_pin_container">
    <?php  
	for($i=1;$i<=22;$i+=1){
	?>
      <div class="site_pin_item center_shadow">
        <div class="site_pin_item_img">
          <img class="round_corner_3px" src="<?php echo base_url(); ?>images/temp/resto/resturant-temp-<?=$i;?>.jpg" />
        </div>
        <div class="site_pin_item_resto_title_bg">
          <div class="site_pin_item_resto_title">餐馆 <?php echo rand(100, 999); ?></div>
          <div class="site_pin_item_resto_cuisine">综合菜系</div>
        </div>
        <div class="site_pin_item_resto_desc">
        餐馆简介在此显示...
        </div>
        <div class="site_pin_item_special">
        招牌菜：珍宝鱼翅
        </div>
        <div class="site_pin_item_menu">
          <div class="site_pin_item_menu_item">主页</div>
          <div class="site_pin_item_menu_item">菜单</div>
          <div class="site_pin_item_menu_item">优惠卷</div>
          <div class="site_pin_item_menu_item tred">六周年酬宾会</div>
        </div>
        <div class="site_pin_item_stats">
          <div class="site_pin_item_stats_item">推荐 <font class="tred">30</font></div>
          <div class="site_pin_item_stats_item">品论 <font class="tred">12</font></div>
          <div class="site_pin_item_stats_item">围观 <font class="tred">100</font></div>
        </div>
        <?php 
		$reply_num = rand(1,4);
		for($k=1;$k<=$reply_num;$k+=1){ ?>
        <div class="site_pin_item_reply">
        会员<?=$k?>：菜色不错，价格公道。
        </div>
        <?php } ?>
        <div class="site_pin_item_reply"><input type="text" class="site_pin_item_quick_reply" id="resto_id_quick_reply" name="resto_id_quick_reply" value="comment" /></div>
      </div>
      <?php
	  }
	  ?>
      <script>
	  var $container = $('#site_pin_container');
      $container.imagesLoaded(function(){
        $container.masonry({
          itemSelector : '.site_pin_item'
        //columnWidth : 220
        });
      });
	  </script>
      <div class="clr"></div>
    </div>
  </div>
</div>

<div class="site_pagination_bg">
    <div class="site_pagination">
    <div class="site_pagination_item"><a href="#">1</a></div>
    <div class="site_pagination_item"><a href="#">2</a></div>
    <div class="site_pagination_item"><a href="#">3</a></div>
    <div class="site_pagination_item"><a href="#">4</a></div>
    <div class="site_pagination_item"><a href="#">5</a></div>
    <div class="clr"></div>
  </div>
</div>

<br /><br /><br />

<div class="content_bg">
  <div class="content">
    <!-- text category -->
    <div class="section_title">
      <div class="section_title_text flt tred" style="width:100px;border-right:1px solid #ddd;">食系</div><div class="section_title_text flt">地区</div>
      <div class="clr"></div>
    </div>
    <div class="site_content_1">
      <ul class="site_content_ul">
        <li><a href="#">粤菜</a></li>
        <li><a href="#">港台菜</a></li>
        <li><a href="#">湘菜</a></li>
        <li><a href="#">苏菜</a></li>
        <li><a href="#">北方菜</a></li>
      </ul>
      <ul class="site_content_ul">
        <li><a href="#">川菜</a></li>
        <li><a href="#">沪菜</a></li>
        <li><a href="#">东南亚餐</a></li>
        <li><a href="#">北美西餐</a></li>
        <li><a href="#">法国</a></li>
      </ul>
      <ul class="site_content_ul">
        <li><a href="#">德国</a></li>
        <li><a href="#">印度</a></li>
        <li><a href="#">意大利</a></li>
        <li><a href="#">日本料理</a></li>
        <li><a href="#">韩国料理</a></li>
      </ul>
      <ul class="site_content_ul">
        <li><a href="#">越南美食</a></li>
        <li><a href="#">酒吧</a></li>
        <li><a href="#">奶茶小吃</a></li>
        <li><a href="#">甜品店</a></li>
        <li><a href="#">家庭厨房</a></li>
      </ul>
      <ul class="site_content_ul">
        <li><a href="#">快餐系列</a></li>
        <li><a href="#">早餐／午餐</a></li>
        <li><a href="#">早茶</a></li>
        <li><a href="#">素食</a></li>
        <li><a href="#">生猛海鲜</a></li>
      </ul>
      
      <ul class="site_content_ul">
        <li><a href="#">火锅</a></li>
        <li><a href="#">烧烤</a></li>
        <li><a href="#">自助餐</a></li>
        <li><a href="#">All You Can Eat</a></li>
        <li><a href="#">其他</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>

<br /><br /><br />

<div class="content_bg">
  <div class="content">
    <!-- weibo image -->
    <div class="section_title">
      <div class="section_title_text tred">食相</div>
    </div>
    <div class="site_social_image">
      <div class="site_social_image_item">
      <img src="<?php echo base_url(); ?>images/temp/social_food_image/temp_social_img_1.jpg" />
      </div>
      <div class="site_social_image_item">
      <img src="<?php echo base_url(); ?>images/temp/social_food_image/temp_social_img_2.jpg" />
      </div>
      <div class="site_social_image_item">
      <img src="<?php echo base_url(); ?>images/temp/social_food_image/temp_social_img_3.jpg" />
      </div>
      <div class="site_social_image_item">
      <img src="<?php echo base_url(); ?>images/temp/social_food_image/temp_social_img_4.jpg" />
      </div>
    <div class="clr"></div>
    </div>
  </div>
</div>

<br /><br /><br />

<script type="text/javascript">
//temporary ads image
$(".site_top_ads_item_1").css("background", "url(<?php echo base_url(); ?>images/temp/ads/temp_ads_1.jpg) no-repeat");
$(".site_top_ads_item_2").css("background", "url(<?php echo base_url(); ?>images/temp/ads/temp_ads_2.jpg) no-repeat");
$(".site_top_ads_item_3").css("background", "url(<?php echo base_url(); ?>images/temp/ads/temp_ads_3.jpg) no-repeat");
$(".site_top_ads_item_4").css("background", "url(<?php echo base_url(); ?>images/temp/ads/temp_ads_4.jpg) no-repeat");
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/site_food.js"></script>