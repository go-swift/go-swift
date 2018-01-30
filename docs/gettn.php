<?php 

/**
*编号:cxe-02
*我的收藏 和 我的订单 列表
*@app= order
*@act = setorder
**************{收藏和订单列表 resultList}****************
*@param uid        用户id
*@param sid        商户id
*@param type       商品状态 //1,为洗车 2,保养 3,美容
*@param price      核算后的总价
*@param goods_list 保养的条目 //1,2,3
**/

echo cxe();
function cxe(){
    // $_GET['flag'] = 1222;
    $arr = array(
    "result"=>"1",
    "resultList"=>array(
        "add_time"=>"1433630229",
        "anonymous"=>"0",
        "buyer_id"=>"0",
        "buyer_name"=>"18857115882",
        "buyer_tel"=>"1587832312",
        "discount"=>"0",
        "evaluation_status"=>"0",
        "evaluation_time"=>"0",
        "extension"=>"0",
        "finished_time"=>"0",
        "goods_amount"=>"0",
        "invoice_no"=>"0",
        "order_amount"=>"0",
        "order_id"=>"63",
        "order_sn"=>"188571158821433630229",
        "out_trade_sn"=>"0",
        "pay_alter"=>"0",
        "pay_message"=>"0",
        "pay_time"=>"0",
        "payment_code"=>"0",
        "payment_id"=>"0",
        "payment_name"=>"0",
        "postscript"=>"0",
        "seller_id"=>"0",
        "seller_name"=>"0",
        "ship_time"=>"0",
        "status"=>"0",
        "type"=>"2",
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