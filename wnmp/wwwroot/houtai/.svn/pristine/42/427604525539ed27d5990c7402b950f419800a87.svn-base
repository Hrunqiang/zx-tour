<?php
class SearchModel {
	protected  $rs_data = array('error'=>'65535','msg'=>'未知错误','data'=>array());
	public function search($wd,$page,$perp=1){
		import("ORG.Mine.sphinxapi");
		@get_microtime();
		$rs_data	= $this->rs_data;
		$rs_data['data']= (object) array();
		//传过了n参数数据
		$wd	= htmlentities($wd,ENT_QUOTES,"UTF-8");
		$perp		= intval($perp);
		$perp		= ($perp>0 && $perp<=30)?$perp:5;
		$page		= intval($page);
		$page = ($page>1)?$page:1;
		if(empty($wd)){
			$rs_data['error']	=1;
			$rs_data['msg']	='参数错误';
		}else{
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
			$s->SetSortMode(SPH_SORT_EXTENDED,"@weight DESC");
			$result = $s->query("$wd",C("SPHINX_INDEX"));
// 			echo $s->GetLastError();
// 			echo "<pre/>";
// 			echo $wd."<br/>";
            return $result;
// 			var_dump($result);die;
			if($result && $result['total']>=1 && $result['matches']){
				$get_d	= array_pop($result['matches']);
				if(!empty($get_d['attrs'])){
					$rs_data['error']	=0;
					$rs_data['msg']	='ok';
					unset($get_d['attrs']['num']);
					$get_d['attrs']['config']	= array();
// 					$get_d['attrs']['attr']	= json_decode($get_d['attrs']['attr'],true);
// 					if(empty($get_d['attrs']['attr'])){
// 						$get_d['attrs']['attr'] = (object)array();
// 					}
					$rs_data['data']	= $get_d['attrs'];
					unset($get_d);
				}else{
					$rs_data['error']	=31;
					$rs_data['msg']	='none';
				}
			}else{
				if($result && $result['total']==0){
					$rs_data['error']	=31;
					$rs_data['msg']	='none';
				}else{
					$rs_data['error']	=-1;
					$rs_data['msg']	='query error:'.$s->GetLastError();
				}
			}
		}
		return $rs_data;
	}
}