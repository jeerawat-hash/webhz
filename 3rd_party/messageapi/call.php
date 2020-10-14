<meta http-equiv=Content-Type content="text/html; charset=UTF-8">

<?php 
require("vendor/autoload.php"); 

  
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
//use LINE\LINEBot\Event;
//use LINE\LINEBot\Event\BaseEvent;
//use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\MessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use LINE\LINEBot\MessageBuilder\LocationMessageBuilder;
use LINE\LINEBot\MessageBuilder\AudioMessageBuilder;
use LINE\LINEBot\MessageBuilder\VideoMessageBuilder;
use LINE\LINEBot\ImagemapActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
use LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
use LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
use LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\DatetimePickerTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselColumnTemplateBuilder;

 //   while ($access_all = mssql_fetch_array($access)) {
      
      $access_token = "ypiJzlK3GDN4RCHi8xwvWr6zO3yzy/dba41lAZdW/9ToJx6APCQqy5rrQ+sOL2Oe9kP+JoGm7Aca35V0fsenoK/sQjdgpaGGovclz4/IzkN9/VIcETIbQtkDrZjbp1rLW0TS4C5h7WBo+rhD0b6YEQdB04t89/1O/w1cDnyilFU=";
      $channelSecret = "f203d1a54c93e4ea01cabf18eea52f2a";

      $API_URL = 'https://api.line.me/v2/bot/message';
      $POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);







$jsonFlex = '{
  "type": "flex",
  "altText": "Hello Flex Message",  // แก้ตรงนี้นะครับ
  "contents": {
    "type": "bubble",
    "direction": "ltr",
    "header": {
      "type": "box",
      "layout": "vertical",
      "contents": [
        {
          "type": "text",
          "text": "Purchase",
          "size": "lg",
          "align": "start",
          "weight": "bold",
          "color": "#009813"
        },
        {
          "type": "text",
          "text": "฿ 100.00",
          "size": "3xl",
          "weight": "bold",
          "color": "#000000"
        },
        {
          "type": "text",
          "text": "Rabbit Line Pay",
          "size": "lg",
          "weight": "bold",
          "color": "#000000"
        },
        {
          "type": "text",
          "text": "2019.02.14 21:47 (GMT+0700)",
          "size": "xs",
          "color": "#B2B2B2"
        },
        {
          "type": "text",
          "text": "Payment complete.",
          "margin": "lg",
          "size": "lg",
          "color": "#000000"
        }
      ]
    },
    "body": {
      "type": "box",
      "layout": "vertical",
      "contents": [
        {
          "type": "separator",
          "color": "#C3C3C3"
        },
        {
          "type": "box",
          "layout": "baseline",
          "margin": "lg",
          "contents": [
            {
              "type": "text",
              "text": "Merchant",
              "align": "start",
              "color": "#C3C3C3"
            },
            {
              "type": "text",
              "text": "BTS 01",
              "align": "end",
              "color": "#000000"
            }
          ]
        },
        {
          "type": "box",
          "layout": "baseline",
          "margin": "lg",
          "contents": [
            {
              "type": "text",
              "text": "New balance",
              "color": "#C3C3C3"
            },
            {
              "type": "text",
              "text": "฿ 45.57",
              "align": "end"
            }
          ]
        },
        {
          "type": "separator",
          "margin": "lg",
          "color": "#C3C3C3"
        }
      ]
    },
    "footer": {
      "type": "box",
      "layout": "horizontal",
      "contents": [
        {
          "type": "text",
          "text": "View Details",
          "size": "lg",
          "align": "start",
          "color": "#0084B6",
          "action": {
            "type": "uri",
            "label": "View Details",
            "uri": "https://google.co.th/"
          }
        }
      ]
    }
  }
}
';





// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON

//connect line
  $httpClient = new CurlHTTPClient($access_token);
  $bot = new LINEBot($httpClient, ['channelSecret' => $channelSecret]); 
//conect line

  $events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
  
  foreach ($events['events'] as $event) {

      $userId = $event['source']['userId'];
      $replyToken = $event["replyToken"];
      $message =  $event["message"]["text"];
      $type  =  $event['message']['type'];
      $messageID = $event['message']['id'];
 
 

      switch ($message) {
        case 'MyUserInfo':
              
            $return = new TextMessageBuilder("อยู่ระหว่างพัฒนา.....");
            $bot->replyMessage($replyToken,$return);

          break;
        case 'Marketplace':
              
            $return = new TextMessageBuilder("อยู่ระหว่างพัฒนา.....");
            $bot->replyMessage($replyToken,$return);
          
          break;
        
        default:

                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$jsonFlex]
                ];
 
                  $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
                  $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

          break;
      }







     }

  }
 
echo "OK";

  


 function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

?>
