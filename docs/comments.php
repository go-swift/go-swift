<?php 

/**
*编号:cxe-03
*我-> 我的评论
*@app= member
*@act = comments
*@param imgurl 头像地址
*@param title 点评的标题
*@param price 现在价格
*@param oldprice 原来价格
*@param star 评价标星 3.5
*@param statuslab 描述(新用户优惠)
*@param comments 评价内容
*@param cmtime 评价时间
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "resultList"=>array(
        array("imgurl"=>"http://s1.nuomi.bdimg.com/upload/deal/2014/8/V_L/1526405-4n6v9cyueg-17156942179791267.jpg","title"=>"xxx汽修店的地址","price"=>"￥70","oldprice"=>"￥120元","star"=>"3.5","statuslab"=>"新用户享受折扣","comments"=>"洗车服务非常细致111...","cmtime"=>"2015-05-23 11:30"),
        array("imgurl"=>"http://e.hiphotos.baidu.com/bainuo/crop%3D0%2C11%2C600%2C363%3Bw%3D470%3Bq%3D80/sign=069b527f5eb5c9ea76bc59a3e8099a31/4ec2d5628535e5ddd511c1ab73c6a7efce1b6280.jpg","title"=>"xxx汽修店的地址","price"=>"￥60","oldprice"=>"￥180元","star"=>"3.5","statuslab"=>"新用户享受折扣","comments"=>"洗车服务非常细致222...","cmtime"=>"2015-05-23 12:30"),
        array("imgurl"=>"http://s0.nuomi.bdimg.com/upload/deal/2014/8/V_L/1549411-yk857ghtx7-18479267937609750.jpg","title"=>"xxx汽修店的地址","price"=>"￥50","oldprice"=>"￥120元","star"=>"3.5","statuslab"=>"新用户享受折扣","comments"=>"洗车服务非常细致333...","cmtime"=>"2015-05-24 11:30"),
        array("imgurl"=>"http://s2.nuomi.bdimg.com/upload/deal/2014/7/V_G/1345148-s4mxbc3wcg-16137105456596755.jpg","title"=>"xxx汽修店的地址","price"=>"￥65","oldprice"=>"￥160元","star"=>"3.5","statuslab"=>"新用户享受折扣","comments"=>"洗车服务非常细致444.洗车服务非常细致444洗车服务非常细致444洗车服务非常细致444..","cmtime"=>"2015-05-25 10:30"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"xxx汽修店的地址","price"=>"￥90","oldprice"=>"￥190元","star"=>"3.5","statuslab"=>"新用户享受折扣","comments"=>"洗车服务非常细致555...","cmtime"=>"2015-05-26 11:12")
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