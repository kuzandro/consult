<div class="sidebar">
<div class="linking_top">Подписаться</div>
<div class="linking">
<a href="https://www.facebook.com/pages/ООО-Статус/642109985813682"><img src="img/facebook_blue.png" width="60" height="60" /></a>
<a href="https://twitter.com/dengivspb"><img src="img/twitter_blue.png" width="60" height="60" /></a>
<a href="http://feeds.feedburner.com/dengivspb/IxVS"><img src="img/rss_blue.png" width="60" height="60" /></a>
<a href="http://vk.com/dengivspb"><img src="img/vk_blue.png" width="60" height="60" /></a>
<div class="mail">
<form>
E-mail: <input type="text" size="20" /> <input type="image"  src="img/submit_button.png"  />
</form>
</div>
</div>
<div class="linking_top">Поиск</div>
<form method="get" name="searchform" id="searchform" action="<?php bloginfo('siteurl')?>">
<input type="text" name="s" id="s" size="20" value="<?php echo wp_specialchars($s, 1); ?>"/>
<input id="btnSearch" type="submit" name="submit" value="<?php _e('Хочу найти'); ?>" />
</form>
<div class="linking_top">Категории</div>
<ul class="cat">
<?php wp_list_categories('show_count=0&title_li=&hide_empty=0&exclude=1'); ?>
</ul>
</div>