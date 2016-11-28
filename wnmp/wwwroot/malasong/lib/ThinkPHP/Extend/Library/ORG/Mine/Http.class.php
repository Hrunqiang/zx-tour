<?php
/**
 * Http Class
*
* 用于模拟HTTP请求，依赖 CURL
*
* @author kitter
*
*/
class Http {
	/**
	 * Curl句柄
	 * @var CURL
	 */
	private $handle;
	/**
	 * HTTP请求超时时间
	 * @var int
	 */
	private $timeout = 20;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->handle = curl_init();
		curl_setopt($this->handle, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($this->handle, CURLOPT_CONNECTTIMEOUT, $this->timeout);
		curl_setopt($this->handle, CURLOPT_HEADER, 0);
		curl_setopt($this->handle, CURLOPT_RETURNTRANSFER, TRUE);
	}

	/**
	 * 设置来源URL
	 * @param string $url
	 */
	public function setReferer($url) {
		curl_setopt($this->handle, CURLOPT_REFERER, $url);
	}

	/**
	 * 设置超时时间
	 * @param int $second
	 */
	public function setTimeout($second=20) {
		$this->timeout = $second;
		curl_setopt($this->handle, CURLOPT_CONNECTTIMEOUT, $this->timeout);
	}

	/**
	 * 用Get方法请求数据
	 * @param string $url
	 */
	public function get($url,$referer="") {
		if($referer){
			curl_setopt ($this->handle,CURLOPT_REFERER,$referer);
		}
		curl_setopt($this->handle, CURLOPT_HTTPGET, TRUE);
		curl_setopt($this->handle, CURLOPT_URL, $url);

		return curl_exec($this->handle);
	}

	/**
	 * 提交数据到指定的URL
	 * @param string $url
	 * @param Array $post_data 类似于 $_GET/$_POST 取得的数据
	 */
	public function post($url, $post_data) {
		curl_setopt($this->handle, CURLOPT_POST, TRUE);
		curl_setopt($this->handle, CURLOPT_URL, $url);
		curl_setopt($this->handle, CURLOPT_POSTFIELDS, $post_data);

		return curl_exec($this->handle);
	}

}
?>