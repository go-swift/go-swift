<?php 

/**
*编号:cxe-05
*商品详情
*@app= order
*@act = prooductdetail
**************{收藏和订单列表 resultList}****************
*@param uid        用户id
*@param sid        商户id
*@param type       商品状态 //1,为洗车 2,保养 3,美容
*@param price      核算后的总价
*@param goods_list 保养的条目 //1,2,3
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "resultList"=>array("headDic"=>array("headUrl"=>"http://img.autoimg.cn/logo/brand/50/130739684141276606.jpg","tittle"=>"疯狂洗车二","titleDesc"=>"超值洗车","oldPrice"=>"14","newPrice"=>"50","soldNo"=>"已经售20份"),
 "provInfo"=>array("name"=>"维斯级双楠店","starNo"=>"3","distance"=>"最近的<100m","phoneNo"=>"1339380002"), 
 "content"=>"最近有最新的套餐信息 可以获取到..\n188元享受高级商务套餐",
 "commentNo"=>"还有23条",
 "comments"=>array(array("imgurl"=>"http://s1.nuomi.bdimg.com/upload/deal/2014/8/V_L/1526405-4n6v9cyueg-17156942179791267.jpg","title"=>"xxx汽修店的地址","starnum"=>"3","comments"=>"洗车服务非常细致111...") ,array("imgurl"=>"http://s1.nuomi.bdimg.com/upload/deal/2014/8/V_L/1526405-4n6v9cyueg-17156942179791267.jpg","title"=>"xxx汽修店的地址","starnum"=>"3","comments"=>"洗车服务非常细致111...") ,array("imgurl"=>"http://s1.nuomi.bdimg.com/upload/deal/2014/8/V_L/1526405-4n6v9cyueg-17156942179791267.jpg","title"=>"xxx汽修店的地址","starnum"=>"3","comments"=>"洗车服务非常细致111...") )                 
    
));
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