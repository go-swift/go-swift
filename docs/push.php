<?php
    
    // 这里是我们上面得到的deviceToken，直接复制过来（记得去掉空格）

//deviceToken  在测试版本和上线版本上不一样。    

    //lei ipod touch
    $deviceToken = '80540f53f6c86f1d8b3cddb6d104705b5a6f046dabd6e5aa0ab18ff14458f802';
    
    // Put your private key's passphrase here:
    $passphrase = '123456';
    
    // Put your alert message here:
    $message = 'My first push test!';
    
    ////////////////////////////////////////////////////////////////////////////////
    
    
    $message = array('msg'=>'小小说阅读器','title'=>'小小说','url'=>'http://www.apple.com.cn');
    //$message = array('msg'=>'去商品详细页面','itemtype'=>'2','id'=>'192172');
    //$message = array('msg'=>'去菜单页面','itemtype'=>'1','zktype'=>'1','order'=>'1','zksubtype'=>'1','zktitle'=>'9.9包邮');
    //$message = array('msg'=>'软件升级');
    
    
    $ctx = stream_context_create();
    
    stream_context_set_option($ctx, 'ssl', 'local_cert', 'apns-dev.pem');
    
    stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
    
    // Open a connection to the APNS server
    
    //这个为正是的发布地址
    //$fp = stream_socket_client('ssl://gateway.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT, $ctx);
    
    //这个是沙盒测试地址，发布到appstore后记得修改哦 telnet gateway.sandbox.push.apple.com 2195
    $fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
    
    
    if (!$fp)
    exit("Failed to connect: $err $errstr" . PHP_EOL);
    echo 'Connected to APNS' . PHP_EOL;
    
    // Create the payload body
        
    $body['aps'] = array(
                         'alert' => '欢迎使用推送！哈哈。',
                         'sound' => 'beep.wav',
                         'badge' => 1
                         );
    $body['type']=2;
    $body['data']=$message;
    
    // Encode the payload as JSON
    
    $payload = json_encode($body);
    
    // Build the binary notification
    
    $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
    
    // Send it to the server
    
    $result = fwrite($fp, $msg, strlen($msg));
    
    if (!$result)
    
    echo 'Message not delivered' . PHP_EOL;
    
    else
    
    echo 'Message successfully delivered' . PHP_EOL;
    
    // Close the connection to the server
    
    fclose($fp);
    
    ?>