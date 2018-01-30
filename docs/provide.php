<?php 

/**
*编号:cxe-04
*商家详情页面（三部分 1.商家信息-providerinfo 2.商品列表-resultList 3.最新评价-firstcomment）
*@app= member
*@act = provideinfo
**************{门店信息 providerinfo}****************
*@param headurl 头像地址
*@param providername 门店名字 
*@param providetype 类型 洗车、美容、保养
*@param area 区域
*@param distance 距离
*@param loaction 服务地址
*@param telphone 电话
**************{商品列表 resultList}****************
*@param imgurl 头像
*@param title 商品的名字
*@param price 商品的价格
*@param oldprice 商品原价
*@param statuslab 商品状态 新用户打折
*@param soldnum 已经销售多少份
**************{第一条评价 firstcomment}****************
*@param headurl 头像地址 
*@param usrname 评价人的别名
*@param comment 评价内容
*@param star 评价星级 3.5
*@param totalnum 总评价人数
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "replynum"=>"34",
    "firstcomment"=>array(
	array(
          "headurl"=>"http://p1.meituan.net/126.126/shaitu/0ba5c3bf643cfb549895f3fc1e2836e1314718.jpg",
          "usrname"=>"中国警告",
          "comment"=>"服务特别好，看你需要什么马上就过来，菜品也不错",
          "star"=>"3.5"
    ),
    array(
          "headurl"=>"http://p1.meituan.net/126.126/shaitu/0ba5c3bf643cfb549895f3fc1e2836e1314718.jpg",
          "usrname"=>"google最棒",
          "comment"=>"服务特别好，看你需要什么马上就过来，菜品也不错，环境也不错，下次会再去的！也不需要排队",
          "star"=>"3.5"
    ),
    array(
          "headurl"=>"http://p1.meituan.net/126.126/shaitu/0ba5c3bf643cfb549895f3fc1e2836e1314718.jpg",
          "usrname"=>"香港大叔333",
          "comment"=>"服务特别好，看你需要什么马上就过来，环境也不错，下次会再去的！也不需要排队",
          "star"=>"3.5"
    )
    ),
    "providerinfo"=>array(
        "headurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png",
        "providername"=>"西部汽车城商家",
        "providetype"=>"洗车",
        "area"=>"双楠店",
        "distance"=>"<200m",
        "loaction"=>"红牌楼16号",
        "store_id"=>"2",
        "telphone"=>"028-88911022"
    ),
    "resultList"=>array(
array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","price"=>"13","oldprice"=>"53","statuslab"=>"新用户享受","soldnum"=>"已售23份","goods_id"=>"1"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"13","oldprice"=>"43","statuslab"=>"新用户享受","soldnum"=>"已售24份","goods_id"=>"2"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"15","oldprice"=>"63","statuslab"=>"新用户享受","soldnum"=>"已售33份","goods_id"=>"3"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到武侯","price"=>"16","oldprice"=>"53","statuslab"=>"新用户享受","soldnum"=>"已售43份","goods_id"=>"4"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"17","oldprice"=>"77","statuslab"=>"新用户享受","soldnum"=>"已售26份","goods_id"=>"5"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"18","oldprice"=>"83","statuslab"=>"新用户享受","soldnum"=>"已售53份","goods_id"=>"6"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"19","oldprice"=>"63","statuslab"=>"新用户享受","soldnum"=>"已售43份","goods_id"=>"7"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车便宜到双楠","price"=>"20","oldprice"=>"55","statuslab"=>"新用户享受","soldnum"=>"已售73份","goods_id"=>"8")
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