<?php 

/**
*编号:cxe-05
*自驾 和 救援 文章列表
*@app= member
*@act = articel
*@param aId 文章ID号
*@param articelTittle 文章标题 
*@param articelDesc 内容简介
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "resultList"=>array(
        array("aId"=>"1","articelTittle"=>"自驾游应该注意","articelDesc"=>"自驾游青城山武侯祠锦里天虹...."),
        array("aId"=>"2","articelTittle"=>"旅游线路一览","articelDesc"=>"青城山3日游，峨眉山3日游，酒店5星级免费住，只需要350元可以享受!"),
        array("aId"=>"3","articelTittle"=>"uber的模式","articelDesc"=>"简单333概述"),
        array("aId"=>"4","articelTittle"=>"半价洗车","articelDesc"=>"周一到周五12点到14点半价洗车"),
        array("aId"=>"5","articelTittle"=>"代购行车记录仪","articelDesc"=>"行车记录仪为您生活添光彩"),
        array("aId"=>"6","articelTittle"=>"车载导航将会没落","articelDesc"=>"车载导航将会被baidu路宝取代")
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