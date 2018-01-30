<?php 

/**
*编号:cxe-04
*用户注册
*@app= member
*@act = replylist
*@param imgurl 头像地址
*@param title 标题
*@param starnum 标星 3.5 
*@param comment 评价内容 
*@param timelab 评价时间 
*@param replyCount 总评价条数 
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "replyCount"=>"34",
    "resultList"=>array(
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"这家伙很懒什么也没说","timelab"=>"2015-05-21 11:21"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"说点什么","timelab"=>"2015-05-21 11:21"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"思路各不相同","timelab"=>"2015-05-21 11:21"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"顶上一楼","timelab"=>"2015-05-21 11:21"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"加油朋友","timelab"=>"2015-05-21 11:21"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"加油 不要放弃","timelab"=>"2015-05-21 11:21"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"成功就在眼前","timelab"=>"2015-05-21 11:21"),
        array("imgurl"=>"http://git.oschina.net/uploads/images/2015/0523/151419_47f92035_110056.png","title"=>"洗车111","starnum"=>"3.5","comment"=>"继续再加油吧","timelab"=>"2015-05-21 11:21")
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