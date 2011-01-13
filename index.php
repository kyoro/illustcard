<html>
<head>
<meta name="viewport" content="width=320, user-scalable=no, maximum-scale=1"/> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>もんじゃ画伯イラストトNFCレーディングカード</title>
</head>
<body>
<?php
    ## config
    $my_page_url        = 'http://hakamastyle.net/illustcard/index.php';
    $taglet_endpoint    = 'http://nfc-taglet.com/request_tag.pl';

    $taglet_id = $_GET["taglet_id"];

    if(!$taglet_id){
        ## top menu
        $taglet_link = $taglet_endpoint . '?redirect_uri=' 
                       . mb_convert_encoding($my_page_url, 'UTF-8', 'auto') ;
        print "
            <a href='${taglet_link}'>
            <img src='img/toreca_logo.png' width='100%' />
            </a><br>
            画像をクリックして開始！
        ";
    }else{
        ## card view 
        $number = substr($taglet_id, 10, 1);
        $img_path = "img/$number.jpg";
        print "
            <a href='${my_page_url}'>
            <img src='${img_path}' width='100%' /><br />
            </a>
            Version : ${number}<br />
            画像をクリックしてメニューに戻る
        ";
    }
?>
</body>
</html>
