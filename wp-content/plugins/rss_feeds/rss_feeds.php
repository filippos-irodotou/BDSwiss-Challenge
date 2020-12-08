<?php
/**
 * Plugin Name: BDSwiss Wordpress
 * Description: Display rss feed using a shortcode
 * Text Domain: bdswiss-wordpress-plugin
 * Author: Filippos Irodotou
 */

function shortcode_rssfeeds($attr){
	
	$rss_feeds = json_decode(get_comment_meta( '1', 'handle_rss', true ));
	
	if ($rss_feeds->recordId == $attr['source']){

		$xml=simplexml_load_file($rss_feeds->url);
		$countRss = count($xml->channel->item);
		$arKeywords = explode(",",$rss_feeds->keywords);
		
		echo '<div class="title-line">
				<img src="'.$rss_feeds->logo.'" width="150" style="padding: 15px;"/><br>
				<p class="rss-feed-description">'. $rss_feeds->description .'</p>
			</div>';
			
		if (empty($rss_feeds->keywords)){
			displayRssFeeds($xml,$rss_feeds->posts_limit);
		}else{
			foreach ($arKeywords as $eachKeyword){
				for($j = 0; $j < $countRss; $j++) {
					if (strpos($xml->channel->item[$j]->title, $eachKeyword) !== false) {
						displayRssFeedsKeywords($xml, $j);
					}
				}
				
			}
		}
	}		
	return;
}

function shortcode_manual_rssfeeds($attr){
	
	$default = array(
        'source' => '#', 
		'posts_limit' => '10',
		'keywords' => '',
		'title' => '',
		'description' => '',
		'logo' => ''
    );
    $a = shortcode_atts($default, $attr);
	
	$xml=simplexml_load_file($a['source']);	
	$countRss = count($xml->channel->item);
	$arKeywords = explode(",",$a['keywords']);
	
	echo '<div class="title-line">
			<img src="'.$a['logo'].'" width="150" style="padding: 15px;"/><br>
			<p class="rss-feed-description">'. $a['description'] .'</p>
		</div>';
		
	
	if ($a['keywords'] == null){
		displayRssFeeds($xml,$a['posts_limit']);
	}else{
		foreach ($arKeywords as $eachKeyword){
			for($j = 0; $j < $countRss; $j++) {
				if (strpos($xml->channel->item[$j]->title, $eachKeyword) !== false) {
					displayRssFeedsKeywords($xml, $j);
				}
			}
			
		}
	}	
	return;
}


function displayRssFeedsKeywords($xml, $i){
	echo '<div class="rss-feed-block">
		<table class="rss-feed-table">
			<tr>
				<td>
					<img class="rss-feed-chart" src="/BDSwiss-Challenge/wp-content/uploads/2020/12/chart-line-solid.svg" />
				</td>
				<td>
					<a href="'.$xml->channel->item[$i]->link.'" class="rss-feed-title" target="_blank">'.$xml->channel->item[$i]->title.'</a><br>
					<span class="rss-feed-pubDate">'.$xml->channel->item[$i]->pubDate.'</span>
				</td>
			</tr>
		</table>
	</div>';
}


function displayRssFeeds($xml, $limit){
	for($i = 0; $i < $limit; $i++) {
		echo '<div class="rss-feed-block">
			<table class="rss-feed-table">
				<tr>
					<td>
						<img class="rss-feed-chart" src="/BDSwiss-Challenge/wp-content/uploads/2020/12/chart-line-solid.svg" />
					</td>
					<td>
						<a href="'.$xml->channel->item[$i]->link.'" class="rss-feed-title" target="_blank">'.$xml->channel->item[$i]->title.'</a><br>
						<span class="rss-feed-pubDate">'.$xml->channel->item[$i]->pubDate.'</span>
					</td>
				</tr>
			</table>
		</div>';
	}
}

add_shortcode('shortcode', 'shortcode_rssfeeds');
add_shortcode('shortcode_manual', 'shortcode_manual_rssfeeds');
