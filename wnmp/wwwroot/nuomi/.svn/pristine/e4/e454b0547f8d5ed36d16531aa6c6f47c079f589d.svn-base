<?php
/**
 * 首页
 * @author hhy
 * createTime 2016-03-20
 */
class RunAction extends Action {
	
	protected $cityclass = array(array("全部"));
    /**
     * 主页
     */
    public function index(){
    	if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger') !== false){
    		//redirect("http://weixin.zx-tour.com");
    	}
    	session("SESSION_ZX_INDEX","http://nuomi.zx-tour.com/Run");
    	$match = trim($_GET['match']);
    	$platform = addslashes(trim($_GET['platform']));
    	//http://weixin.zx-tour.com/?match=528&platform=runninguide
    	if($platform){
    		session("SESSION_ZX_PLATFORM","nuomi");
    	}
    	
    	$matchM = new MatchInfoModel();
    	$country = $matchM->getMatchCountryV2();
    	$domestic = '';
    	$abroad = '';
    	//$city = $matchM->query("SELECT * FROM `cities_copy`");
    	if($country){
    		$cityarr = $countryarr = array();
    		foreach($country as $key =>$value){
    			if($value['m_ptype']=="国内"){
    				$this->setCitys($value['m_city']);
//     				$cityname = explode("-", $value['m_city']);
//     				$cityname = $cityname[1]?trim($cityname[1]):trim($cityname[0]);
//     				if(!in_array($cityname, $cityarr) && $cityname){   					
//     					$domestic.='<p class="option_cell_area" search-type="ch-city">'.$cityname.'</p>';
//     					array_push($cityarr,$value['m_city']);
//     				}
    			}else{
    				if(!in_array($value['m_country'], $countryarr)){
    					$abroad.='<p class="option_cell_area" search-type="ab-country">'.$value['m_country'].'</p>';
    					array_push($countryarr,$value['m_country']);
    				}
    			}
    		}
    		$this->assign("domestic",json_encode($this->cityclass));
    		$this->assign("abroad",$abroad);
    	}
    	
    	$this->assign("now",Date("Y-m-d H:i:s"));
    	$infoM = new ClassInfoModel;
    	//搜索热点词
    	$hotwords = $infoM->getContent("zx_hotwords_nuomi",100);
    	$this->assign("hotwords",$hotwords);
    	$this->display();
    }
    
    public function setCitys($name){
    	$name = explode("-", $name);
    	if($name[0]){
    		$index = array_search($name[0],$this->cityclass[0]);
    		if($index){
    			$name[1] && array_push($this->cityclass[$index],$name[1]);
    		}else{
    			$index = array_push($this->cityclass[0],$name[0]);
    			$this->cityclass[$index-1] = array();
    			if($name[1]){
    				array_push($this->cityclass[$index-1],$name[1]);
    			}
    		}
    	}
    	
    }
}