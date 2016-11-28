<?php
class MlsCjModel extends Model{
	protected  $trueTableName	= "mls_cj";
	protected $connection = 'DB_CONFIG1';

    public function getcj($name,$number){
        if(empty($name) || empty($number)) return false;
        //["id","paiming","number","name","zjtype","zjnumber","mobile","zubie","zcj","jcj","qd","zd","km10","km13","km15","km20","km29","km40"]
        $data = $this->field("paiming,`number`,`name`,mobile,zubie,zcj,jcj,qd,zd,km10,km13,km15,km20,km29,km40")->where("name='$name' and number='$number'")->find();
        return $data;
    }
	
}