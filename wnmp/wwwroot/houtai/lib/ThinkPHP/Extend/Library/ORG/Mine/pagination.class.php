<?php
class pagination {

	var $totalpage;
	var $current;
	var $vhead;
	var $pagelinkurl = '';
	/*
	* @param key string 分页区别标记
	* @param int size 每页记录数
	* @param int groupsize 每组页码数
	* @param int current 当前页码
	*/
	function pagination ($totalpage=0, $current=1,$pagelinkurl='')
	{
		$this->totalpage = $totalpage;
		$this->current = $current;
		if ($pagelinkurl) {
			$this->pagelinkurl = $pagelinkurl;
		}
	}
 
	/*
	*设置链接头信息
	* @param string remove 要移除的变量名成
	*/
	function _setLinkhead ()
	{
		parse_str ($_SERVER['QUERY_STRING'], $query);
		foreach ($query as $k => $v)
		{
			if (empty ($v) === true && $v != 0)
			{
				unset ($query[$k]);
			}
		}

		if (isset ($query['pageno']))
		unset ($query['pageno']);

		foreach ($query as $k => $v)
		{
			if (is_array($v))
			{
				$v = implode(',',$v);
				$tmp[] = $k . '=-100,' . urlencode($v);
			}
			else
			{
				$tmp[] = $k . '=' . urlencode($v);
			}
		}
		$vhead = '';
		$this->vhead != '' && $vhead = $this->vhead.'&';
		$tmp[] = 'pageno' . '=';
		$urlstr = strtolower($_SERVER['PHP_SELF']) . '?' .$vhead. implode('&', $tmp);

		return $urlstr;
	}

	//显示页面链接
	function PageLinks () {
		if ($this->totalpage <= 1) return '';
		$linkhead = $this->_setLinkhead ();
        $this->vhead = $linkhead;
		$current = $this->current;
		$totalpage = $this->totalpage;
		$separator = '';
		$content = '';

		$first = "<a title='第一页' target='_self' href='".$this->buildLink(1)."' class='num blu'>1..</a>";
		
		$prev = "<a title='上一页' target='_self' href='".$this->buildLink($current-1)."' class='prev blu'>上一页</a>";

		$next = "<a title='下一页' target='_self' href='".$this->buildLink($current+1)."' class='next blu'>下一页</a>";
		if($current > 5 && $totalpage>12){
			$content .= $first;
		}
		if($current > 1){
			$content .= $prev;
		}

		//循环
		$flag = $totalpage-$current;
		if( $flag>2 ){
			$min = $totalpage <= 10? 1: (($current-4)>0 ? $current-4 : 1);
			$max = $totalpage <= 10? $totalpage: $min + 9;
		}else{
			$min = $totalpage <= 10? 1: (($current-(9-$flag))>0 ? $current-(9-$flag) : 1);
			$max = $totalpage <= 10? $totalpage: $min + 9;
		}
		if($max > $totalpage)
		{
			$t = 11-($max-$totalpage);
			$max = $totalpage;
			$min = $max-$t;
		}

		for($i=$min; $i<=$max; $i++)
		{
			$content .= $i==$current? "<a class='num cur' target='_self'  title='第" . $i . "页' href='".$this->buildLink($i)."'>" . $i . "</a>"
			: "<a title='第" . $i . "页' href='".$this->buildLink($i)."' target='_self' class='num blu'>" . $i . "</a>";
		}
		if($current<$totalpage){
			$content .= $next;
		}
		if($current+5 < $totalpage){
			$content .= '<a href="'.$this->buildLink($totalpage).'"  title="最后页"  target="_self" class="num blu">'.$totalpage.'</a>';
		}
		return $content;
	}
    //显示页面链接
	function PageLinks2 () {
		if ($this->totalpage <= 1) return '';
		$linkhead = $this->_setLinkhead ();
        $this->vhead = $linkhead;
		$current = $this->current;
		$totalpage = $this->totalpage;
		$separator = '';
		$content = '';
         
	    if($current > 1){
         $prev = "<a title='上一页' target='_self' href='".$this->buildLink($current-1)."'>上一页</a>&nbsp;";
		}else{
		 $prev = "<span title='上一页'>上一页</span>&nbsp;";	
		}
	    
		if($current < $totalpage){
         $next = "<a title='下一页' target='_self' href='".$this->buildLink($current+1)."' >下一页</a>&nbsp;";
		}else{
		 $next = "<span title='下一页'>下一页</span>&nbsp;";	
		}
		$content .= $prev;

	//循环
		$flag = $totalpage-$current;
		if( $flag>2 ){
			$min = $totalpage <= 5? 1: (($current-2)>0 ? $current-2 : 1);
			$max = $totalpage <= 5? $totalpage: $min + 4;
		}else{
			$min = $totalpage <= 5? 1: (($current-(4-$flag))>0 ? $current-(4-$flag) : 1);
			$max = $totalpage <= 5? $totalpage: $min + 4;
		}
		if($max > $totalpage)
		{
			$max = $totalpage;
			$min = $max-4;
		}
		
	     if($max==6){
		   	$content.= '<a href="'.$this->buildLink(1).'" target="_self">1</a>';
		 }elseif($max>6){
		   	$content.='<a href="'.$this->buildLink(1).'" target="_self">1</a><span>...</span>';
	     }
		
	     for($i=$min; $i<=$max; $i++)
		{
			$content .= $i==$current? "<span  title='第" . $i . "页' >" . $i . "</span>&nbsp;"
			: "<a title='第" . $i . "页' href='".$this->buildLink($i)."' target='_self'>" . $i . "</a>&nbsp;";
		}
		 if(($totalpage-$current)==3 && $current>1){
		   	$content.= '<a href="'.$this->buildLink($totalpage).'" target="_self">'.$totalpage.'</a>&nbsp;';
		   }elseif(($totalpage-$current)>3){
		   	$content.='<span>...</span><a href="'.$this->buildLink($totalpage).'" target="_self">'.$totalpage.'</a>&nbsp;';
		   }
		
		$content .= $next;
		
		return $content;
	}
	
    function buildLink($num)
	{
	    if ($this->pagelinkurl) {
	    	return str_replace('$p',$num,$this->pagelinkurl);
	    }else{
	        return $this->vhead.$num;
	    }
	}
}

?>