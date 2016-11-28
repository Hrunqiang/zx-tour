<?php
/**
 * sphinx 检索类
 * @author Administrator
 *
 */
class SphinxModel {
	protected  $rs_data = array('error'=>'65535','msg'=>'未知错误','data'=>array());
	public function search($wd,$page,$perp=1){
		import("ORG.Mine.sphinxapi");
		$rs_data	= $this->rs_data;
		$rs_data['data']= (object) array();
		//传过了n参数数据
		$wd	= htmlentities($wd,ENT_QUOTES,"UTF-8");
		$perp		= intval($perp);
		$perp		= ($perp>0 && $perp<=999)?$perp:5;
		$page		= intval($page);
		$page = ($page>1)?$page:1;
		if(empty($wd)){
			return false;
		}
		
		$s      = new SphinxClient();
		$s->setMaxQueryTime(3000);
		$s->setServer(C("SPHINX_HOST"), C("SPHINX_PORT"));
			// 			if(!empty($cls)){
			// 				$s->SetFilter("cls", array($cls));
			// 			}
		$s->SetLimits(($page-1)*$perp,$perp);
		$s->setMaxQueryTime(3000);                                              //最大查询时间3秒
		$s->SetMatchMode(SPH_MATCH_ALL);//匹配所有查询的词
			// 			$s->SetSortMode ( SPH_SORT_RELEVANCE );;
			// 			$ds->SetSortMode(SPH_SORT_EXPR,"if(@weight>=10,@weight/10+ln(view)*0.6+pubDate,@weight+ln(view)*0.6+pubDate)");
			// 			$s->SetSortMode(SPH_SORT_EXTENDED,"@weight DESC");
		//$s->SetSortMode(SPH_SORT_EXTENDED,"@weight DESC,m_gametime asc");
		//$s->SetFilterRange('m_city',"北京");
		//$s->SetFilter("m_city ='北京'");
			//$s->SetFilter($attribute, $values);
		$result = $s->query("$wd",C("SPHINX_INDEX"));
		//$result = $s->query("m_city = '北京'",C("SPHINX_INDEX"));
			// 			echo $s->GetLastError();
		if($result && $result['total']>=1 && $result['matches']){
			return $result['matches'];
		}else{
			return false;
		}
	}
	
	public function search_test($wd,$page,$perp=1){
		import("ORG.Mine.sphinxapi");
		$rs_data	= $this->rs_data;
		$rs_data['data']= (object) array();
		//传过了n参数数据
		$wd	= htmlentities($wd,ENT_QUOTES,"UTF-8");
		$perp		= intval($perp);
		$perp		= ($perp>0 && $perp<=30)?$perp:5;
		$page		= intval($page);
		$page = ($page>1)?$page:1;
		if(empty($wd)){
			return false;
		}
	
		$s      = new SphinxClient();
		$s->setMaxQueryTime(3000);
		echo C("SPHINX_HOST")."<br>";
		echo C("SPHINX_PORT")."<br>";
		$s->setServer(C("SPHINX_HOST"), C("SPHINX_PORT"));
		// 			if(!empty($cls)){
		// 				$s->SetFilter("cls", array($cls));
		// 			}
		$s->SetLimits(($page-1)*$perp,$perp);
		$s->setMaxQueryTime(3000);                                              //最大查询时间3秒
		$s->SetMatchMode(SPH_MATCH_ALL);//匹配所有查询的词
		// 			$s->SetSortMode ( SPH_SORT_RELEVANCE );;
		// 			$ds->SetSortMode(SPH_SORT_EXPR,"if(@weight>=10,@weight/10+ln(view)*0.6+pubDate,@weight+ln(view)*0.6+pubDate)");
		// 			$s->SetSortMode(SPH_SORT_EXTENDED,"@weight DESC");
		$s->SetSortMode(SPH_SORT_EXTENDED,"@weight DESC,m_gametime asc");
		//$s->SetFilterRange('m_city',"北京");
		//$s->SetFilter("m_city ='北京'");
		//$s->SetFilter($attribute, $values);
		echo C("SPHINX_INDEX")."<br>";
		$result = $s->query("$wd",C("SPHINX_INDEX"));
		//$result = $s->query("m_city = '北京'",C("SPHINX_INDEX"));
					echo $s->GetLastError();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
}