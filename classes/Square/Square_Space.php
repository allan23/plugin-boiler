<?php
namespace Migrator\Square;

class Square_Space {
	public $url ='https://integratedinsighttherapy.com/';
	public $all_urls = [];
	public function get_sitemap(){
		$request = wp_remote_get($this->url . 'sitemap.xml');
		$sitemap = wp_remote_retrieve_body($request);
		$xml = simplexml_load_string($sitemap);
		foreach ($xml->url as $link){
			$this->all_urls[]=(string) $link->loc;
		}
		print_r($this->all_urls);
	}
}
