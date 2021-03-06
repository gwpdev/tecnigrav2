<?php

function converio_get_social_links() {

	$socials = array(
		'facebook',
		'twitter',
		'google',
		'googleplus',
		'linkedin',
		'instagram',
		'picasa',
		'flickr',
		'vimeo',
		'youtube',
		'yahoo',
		'delicious',
		'pinterest',
		'evernote',
		'stumbleupon',
		'dribbble',
		'behance',
		'tumblr',
		'blogger',
		'github',
		'lastfm',
		'skype',
		'aim',
		'hi5',
		'bing',
		'bebo',
		'technorati',
		'wordpress',
		'location',
		'tripadvisor',
		'path',
		'livejournal',
		'envato',
		'deviantart',
		'forrst',
		'friendfeed',
		'grooveshark',
		'sharethis',
		'reddit',
		'digg',
		'myspace',
		'amazon',
		'googleplay',
		'apple',
		'appstore',
		'windows',
		'msn',
		'android',
		'xing',
		'spotify',
		'qik',
		'netvibes',
		'disqus',
		'orkut',
		'squidoo',
		'rdio',
		'metacafe',
		'feedburner',
		'yelp',
		'soundcloud',
		'quora',
		'icloud',
		'netlog',
		'newsvine',
		'vk',
		'vkontakte',
		'odnoklassniki',
		'designfloat',
		'yandex',
		'mailru',
		'badoo',
		'vine',
		'mixi',
		'fotolog',
		'sonico',
		'tagged',
		'formspring',
		'skyrock',
		'friendster',
		'classmates',
		'askfm',
		'foursquare',
		'aboutme',
		'weibo',
		'qzone',
		'renren',
		'douban',
		'baidu',
		'cyworld',
		'tuenti',
		'treehouse',
		'zerply',
		'justgiving',
		'kickstarter',
		'user',
		'dropbox',
		'heart',
		'ebay',
		'email',
		'rss'
	);
    $socials_names = array(
		'Facebook',
		'Twitter',
		'Google',
		'Google Plus',
		'LinkedIn',
		'Instagram',
		'Picasa',
		'Flickr',
		'Vimeo',
		'Youtube',
		'Yahoo',
		'Delicious',
		'Pinterest',
		'Evernote',
		'Stumbleupon',
		'Dribbble',
		'Behance',
		'Tumblr',
		'Blogger',
		'Github',
		'Lastfm',
		'Skype',
		'Aim',
		'Hi5',
		'Bing',
		'Bebo',
		'Technorati',
		'WordPress',
		'Location',
		'TripAdvisor',
		'Path',
		'LiveJournal',
		'Envato',
		'Deviantart',
		'Forrst',
		'Friendfeed',
		'Grooveshark',
		'ShareThis',
		'Reddit',
		'Digg',
		'Myspace',
		'Amazon',
		'Google Play',
		'Apple',
		'App Store',
		'Windows',
		'MSN',
		'Android',
		'Xing',
		'Spotify',
		'Qik',
		'Netvibes',
		'Disqus',
		'Orkut',
		'Squidoo',
		'Rdio',
		'Metacafe',
		'feedburner',
		'Yelp',
		'SoundCloud',
		'Quora',
		'iCloud',
		'Netlog',
		'Newsvine',
		'vk',
		'VKontakte',
		'Odnoklassniki',
		'DesignFloat',
		'Yandex',
		'Mail.ru',
		'Badoo',
		'Vine',
		'Mixi',
		'Fotolog',
		'Sonico',
		'Tagged',
		'Formspring',
		'Skyrock',
		'Friendster',
		'Classmates',
		'Ask.fm',
		'Foursquare',
		'About.me',
		'Weibo',
		'Qzone',
		'Renren',
		'Douban',
		'Baidu',
		'Cyworld',
		'Tuenti',
		'Treehouse',
		'Zerply',
		'JustGiving',
		'Kickstarter',
		'User',
		'Dropbox',
		'Heart',
		'Bay',
		'E-mail',
		'RSS'
    );

	$social_links = array();
	foreach ($socials as $k=>$v) {
		if($v == 'rss' && !get_theme_mod('show_rss')){
			$link = new stdClass;
			$link->name = $socials_names[$k];
			$link->url = get_bloginfo('rss2_url');
			$link->class = $v;
			$social_links[] = $link;
		} else {
			$url = get_theme_mod('social_' . $v);
			if($url) {
				$link = new stdClass;
				$link->name = $socials_names[$k];
				$link->url = $url;
				$link->class = $v;
				$social_links[] = $link;
			}
		}
	}
	return $social_links; 
}
