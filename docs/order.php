<?php 

/**
*编号:cxe-02
*我的收藏 和 我的订单 列表
*@app= member
*@act = order / collect
**************{收藏和订单列表 resultList}****************
*@param imgurl 头像
*@param title 商品的名字
*@param price 商品的价格
*@param oldprice 商品原价
*@param statuslab 商品状态 新用户打折
*@param soldnum 已经销售多少份
**/
echo header("Access-Control-Allow-Origin:*");
echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "resultList"=>array(
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","price"=>"￥13","oldprice"=>"￥53","statuslab"=>"新用户享受","soldnum"=>"已售23份"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"￥13","oldprice"=>"￥43","statuslab"=>"新用户享受","soldnum"=>"已售24份"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"￥13","oldprice"=>"￥63","statuslab"=>"新用户享受","soldnum"=>"已售33份"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到武侯","price"=>"￥13","oldprice"=>"￥53","statuslab"=>"新用户享受","soldnum"=>"已售43份"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"￥13","oldprice"=>"￥77","statuslab"=>"新用户享受","soldnum"=>"已售26份"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"￥13","oldprice"=>"￥83","statuslab"=>"新用户享受","soldnum"=>"已售53份"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"￥13","oldprice"=>"￥63","statuslab"=>"新用户享受","soldnum"=>"已售43份"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"￥13","oldprice"=>"￥55","statuslab"=>"新用户享受","soldnum"=>"已售73份")
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
