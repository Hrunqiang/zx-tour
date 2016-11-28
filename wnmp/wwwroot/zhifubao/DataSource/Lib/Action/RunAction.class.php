<?php
/**
 * 首页
 * @author hhy
 * createTime 2016-03-20
 */
class RunAction extends Action {
	
	protected $redirectConfig = array(
			'879'=>'16','981'=>'13','990'=>'13','943'=>'45','609'=>'33','807'=>'36','726'=>'22','737'=>'31','664'=>'25','146'=>'12','867'=>'27','966'=>'44','778'=>'42','500'=>'43','751'=>'35','859'=>'39','931'=>'28','799'=>'40','943'=>'45','711'=>'21','528'=>'32','911'=>'37','954'=>'46','482'=>'26','162'=>'13','788'=>'29','897'=>'38','897'=>'38','703'=>'41','851'=>'24','469'=>'17','596'=>'19','917'=>'15','836'=>'18','892'=>'30','799'=>'40',
			);
	protected $cityclass = array(array("全部"));
    /**
     * 主页
     */
    public function index(){
    	if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger') !== false){
    		//redirect("http://weixin.zx-tour.com");
    	}
    	session("SESSION_ZX_INDEX","/Run");
    	$match = trim($_GET['match']);
    	$platform = addslashes(trim($_GET['platform']));
    	//http://weixin.zx-tour.com/?match=528&platform=runninguide
    	if($platform){
    		session("SESSION_ZX_PLATFORM","nuomi");
    	}
    	if($match){
    		$redirectid = $this->redirectConfig[$match];
    		if($redirectid){
    			redirect("/Matchinfo?m_id=".$redirectid."&platform=".$platform);
    		}
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
    	
    	$hotlist = true;
    	$this->assign("hotlist",$hotlist);
    	$this->assign("now",Date("Y-m-d H:i:s"));
    	$infoM = new ClassInfoModel;
    	//banner 图
    	$banner = $infoM->getContent("zx_banner_nuomi");
    	$banner = $banner?$banner:"";
    	$this->assign("banner",$banner);
    	//搜索热点词
    	$hotwords = $infoM->getContent("zx_hotwords_nuomi",100);
    	$this->assign("hotwords",$hotwords);
    	$sexy = session("SESSION_ZX_SEXY")?session("SESSION_ZX_SEXY"):1;
    	$this->assign("sexy",session("SESSION_ZX_SEXY"));
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