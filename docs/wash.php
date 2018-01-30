<?php 

/**
*编号:cxe-02
*洗车列表
*@app= member
*@act = wash
*@param imgurl 头像地址
*@param title 门店的名字 
*@param price 价格暂时(忽略)
*@param location 位置 
*@param status （洗车、保养、美容）
*@param distance （距离<100m） 
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "resultList"=>array(
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"￥13","star"=>"3","location"=>"内双楠","status"=>"洗车","distance"=>"<100m"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151410_155d28dd_110056.png","title"=>"北站运输中心","price"=>"￥14","star"=>"3","location"=>"外双楠","status"=>"刷车","distance"=>"<110m"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151403_805968d6_110056.png","title"=>"一级洗车中心","price"=>"￥15","star"=>"3","location"=>"双楠","status"=>"洗车","distance"=>"<140m"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151410_155d28dd_110056.png","title"=>"中心洗车","price"=>"￥13","star"=>"3","location"=>"红牌楼","status"=>"洗车","distance"=>"<150m"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"北站贝尔中心","price"=>"￥17","star"=>"3","location"=>"北站","status"=>"洗车","distance"=>"<160m"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"承运中心北","price"=>"￥15","star"=>"3","location"=>"九眼桥","status"=>"洗车","distance"=>"<170m"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151410_155d28dd_110056.png","title"=>"新希望国际","price"=>"￥14","star"=>"3","location"=>"新希望","status"=>"洗车","distance"=>"<180m"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151403_805968d6_110056.png","title"=>"洗涤快速处理","price"=>"￥13","star"=>"3","location"=>"天府广场","status"=>"洗车","distance"=>"<220m")
        )
    );
    $arr1 = array(
        "result"=>"0",
        "message"=>"调用接口错误"
        );
	$flag = intval($_GET['flag']);
    switch ($flag) {
        case 1:
            return json_encode($arr);
            break;
        case 0:
            return json_encode($arr1);
            break;
        default:
    }
}
 ?>