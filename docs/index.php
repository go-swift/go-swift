<?php 

/**
*编号:cxe-02
*用户首页
*@app= member
*@act = index
*@param imagearr 首页的5张图 洗车 保养 美容 自驾 救援
*@param itemlist 首页的6个列表
*@param name 列表名字 
*@param desc 描述 
*@param url 图片地址 
*@param clickurl 点击的访问地址 
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1;
    $arr = array(
    "result"=>"1",
    "imagearr"=>array("http://git.oschina.net/uploads/images/2015/0523/174658_d715adb9_110056.gif","http://git.oschina.net/uploads/images/2015/0523/174703_5c90aa44_110056.gif","http://git.oschina.net/uploads/images/2015/0523/174710_c2a24187_110056.gif","http://git.oschina.net/uploads/images/2015/0523/174720_e1365b3d_110056.gif","http://git.oschina.net/uploads/images/2015/0523/174729_d8e848c1_110056.gif"),
    "itemlist"=>array(
        array("name"=>"保养小xx","desc"=>"如何保养...","url"=>"http://git.oschina.net/uploads/images/2015/0523/174809_2a857382_110056.gif","menuid"=>"4"),
        array("name"=>"半价洗车xx","desc"=>"半价洗车...","url"=>"http://git.oschina.net/uploads/images/2015/0523/174818_54d55bbe_110056.gif","menuid"=>"5"),
        array("name"=>"加油小技巧","desc"=>"如何加油省钱","url"=>"http://git.oschina.net/uploads/images/2015/0523/174824_353315fb_110056.gif","menuid"=>"6"),
        array("name"=>"半价二手xx","desc"=>"天天特价任你挑","url"=>"http://git.oschina.net/uploads/images/2015/0523/174833_dc768fed_110056.gif","menuid"=>"7"),
        array("name"=>"修车更放心","desc"=>"百家商家优质推荐","url"=>"http://git.oschina.net/uploads/images/2015/0523/174843_2d6594c8_110056.gif","menuid"=>"8"),
        array("name"=>"自驾游路线","desc"=>"天天推荐","url"=>"http://git.oschina.net/uploads/images/2015/0523/174850_546bfc22_110056.gif","menuid"=>"9")
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