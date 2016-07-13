<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>qrcode box demo</title>
    <!-- 千万别忘了加 -->
    <meta name="viewport" id="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Public/css/qrcode.box.css">
    <style>
    </style>
    
  </head>
  <body>

  <div id="dataurl"  data-name="<?php echo ($data); ?>"></div>

  <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="/Public/js/jquery.qrcode.min.js"></script>
    <script src="/Public/js/jquery.qrcode.box.js"></script>
    <script>
    
       var el = document.querySelector('#dataurl');
        var data=el.dataset.name;

      function utf16to8(str) {
        var out, i, len, c;
        out = "";
        len = str.length;
        for (i = 0; i < len; i++) {
          c = str.charCodeAt(i);
          if ((c >= 0x0001) && (c <= 0x007F)) {
            out += str.charAt(i);
          } else if (c > 0x07FF) {
            out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
            out += String.fromCharCode(0x80 | ((c >> 6) & 0x3F));
            out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
          } else {
            out += String.fromCharCode(0xC0 | ((c >> 6) & 0x1F));
            out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
          }
        }
        return out;
      }
      $("body").qrcodeBox({
        title: "分享到微信朋友圈",
        des: "使用微信 “扫一扫” 即可分享网页到朋友圈",
        qrcodeText: utf16to8(data),
        offsetX: 0,
        offsetY: 0
      });
    </script>
  </body>
</html>