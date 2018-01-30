<?php
require('./src/PKPass/PKPass.php');

$pass = new PKPass\PKPass();

$pass->setCertificate('./cerpass.p12');  // 2. Set the path to your Pass Certificate (.p12 file)
$pass->setCertificatePassword('123456');     // 2. Set password for certificate
$pass->setWWDRcertPath('./appleWWWD.pem'); // 3. Set the path to your WWDR Intermediate certificate (.pem file)

// Top-Level Keys http://developer.apple.com/library/ios/#documentation/userexperience/Reference/PassKit_Bundle/Chapters/TopLevel.html
$standardKeys         = array(
    'description'        => '期待使用pass',
    'formatVersion'      => 1,
    'organizationName'   => 'Goswift Express',
    'passTypeIdentifier' => 'pass.com.goswift', // 4. Set to yours
    'serialNumber'       => '123456',
    'teamIdentifier'     => 'CM459Q8NK7'           // 4. Set to yours
);
$associatedAppKeys    = array();
$relevanceKeys        = array();
$styleKeys            = array(
    'eventTicket' => array(
        'primaryFields' => array(
            array(
                'key'   => 'origin',
                'label' => '国际认证',
                'value' => '创意iOS'
            ),
            array(
                'key'   => 'destination',
                'label' => 'swift',
                'value' => 'LHR'
            )
        ),
        'secondaryFields' => array(
            array(
                'key'   => 'gate',
                'label' => '级别',
                'value' => 'iOS高级工程师'
            ),
            array(
                'key'   => 'date',
                'label' => '发证时间',
                'value' => '03/11/2016 10:22'
            )
        ),
        'backFields' => array(
            array(
                'key'   => 'passenger-name',
                'label' => '姓名',
                'value' => '卢远强(knight.lu)'
            ),
            array(
                'key'   => 'passenger-name',
                'label' => '概要',
                'value' => '09年6月至今，入行软件开发近7年。经历web网站从3.0替换1.0的全过程，见证移动互联网3G取代2G，4G占领3G的全过程。专注移动领域，融合物联网技术，开创goswift敏创！个人品牌网.'
            ),
            array(
                'key'   => 'passenger-name',
                'label' => '常社区',
                'value' => 'http://www.go-swift.com'
            )
        ),
        'transitType' => 'PKTransitTypeAir'
    )
);
$visualAppearanceKeys = array(
    'barcode'         => array(
        'format'          => 'PKBarcodeFormatQR',
        'message'         => 'http://weixin.qq.com/r/NUN8ZPfEz6qwrbMH9xYn',
        'messageEncoding' => 'utf-8'
    ),
    'backgroundColor' => 'rgb(107,156,196)',
    'logoText'        => '创新源于一种感觉!'
);
$webServiceKeys       = array();

// Merge all pass data and set JSON for $pass object
$passData = array_merge(
    $standardKeys,
    $associatedAppKeys,
    $relevanceKeys,
    $styleKeys,
    $visualAppearanceKeys,
    $webServiceKeys
);

$pass->setJSON(json_encode($passData));

// Add files to the PKPass package
$pass->addFile('images/icon.png');
$pass->addFile('images/icon@2x.png');
$pass->addFile('images/logo.png');

if(!$pass->create(true)) { // Create and output the PKPass
    echo 'Error: '.$pass->getError();
}