<?php




$Authorization = json_encode([
  "grant_type" => "password",#<-biarin gausah diisi
  "client_id" => "943",
  "client_secret" => "BvPLlsZAc3cjakJlf9s8SwWyr2KF09NdosP2f9xd",
  "username" => "wikij59092@wanbeiz.com",
   "password" => "wikij59092@wanbeiz.com"
   ]);
function demo($methode,$sitekey,$site){
  while(true){
    $host = "recaptcha-v3-solver-0-1-score.p.rapidapi.com";
    $h = array(
      'X-RapidAPI-Key: bb5ef0f9f7msh7c6f6bbd32b20e5p138ee2jsn7f7e780ec6f8',
      'X-RapidAPI-Host: '.$host);
      $response = curl("https://".$host."/?siteKey=".$sitekey."&action=examples/v3scores&site=".$site,$h);
      if($response[0][0]["x-ratelimit-requests-remaining"] == 0){die($response[1]);
      }
      if(!$response[2]->token){
        continue;
      }
      return $response[2]->token;
  }
}
function demok($methode,$sitekey,$site){
  while(true){
    $host = "recaptcha-v2-solver.p.rapidapi.com";
    $h = array(
      'X-RapidAPI-Key: 5a6415fc95msh3d2bd7a05de9698p123541jsnc5536eda498e',
      'X-RapidAPI-Host: '.$host);
      $response = curl("https://".$host."/?siteKey=".$sitekey."&site=".$site,$h);
      if($response[0][0]["x-ratelimit-requests-remaining"] == 0){die($response[1]);
      }
      if(!$response[2]->token){
        continue;
      }
      return $response[2]->token;
  }
}

function c(){
    if(strtoupper(substr(PHP_OS,0,3)) == 'WIN'){
        $clear = 'cls';
    } else {
        $clear = 'clear';
    }
    pclose(popen($clear,'w'));
}

function az_num($amount = false){
  $array = array_merge(range("A", "Z"), range(0, 9));
  for($s=0;$s<count($array);$s++){
    if(range(0, 25)[$s] >= $s){
      $az .= $array[$s];
    }
    $az_num .= $array[$s];
  }
  if($amount >= 1){
    return substr(str_shuffle(strtolower($az).$az_num),0,$amount);
  } else {
    die(m."masukan jumlah angka".n.n.p."contoh -> az_num(123);".n);
  }
}

function recaptchav3($sitekey,$pageurl){
  $h = [
    "Host: www.recaptcha.net",
    "User-Agent: Googlebot/2.1 (+https://www.google.net/bot.html)",
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8",
    "Referer: ".$pageurl,
    "Accept-Encoding: gzip, deflate, br",
    "Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"
    ];
    $anchor_url = "https://www.recaptcha.net/recaptcha/api2/anchor?ar=1&k=".$sitekey."&co=".str_replace("=",".",base64_encode("https://".parse_url($pageurl)["host"].":443"))."&hl=id&v=".az_num(24)."&size=invisible&cb=".strtolower(az_num(12));
    $query = parse_url($anchor_url);
    foreach(explode("&",$query["query"]) as $i => $line){
      list($key, $value ) = explode('=',$line);
      $results[$key] = $value;
    }
    $r = curl($anchor_url,$h);
    preg_match('/"recaptcha-token" value="(.*?)"/', $r[1], $token);
    sleep(3);
    $data = http_build_query([
      "v" => $results["v"],
      "reason" => "q",
      "c" => $token[1],
      "k" => $results["k"],
      "co" => $results["co"]
      ]);
      $h1 = [
        "Host: www.recaptcha.net",
        "Content-Length: ".strlen($data),
        "User-Agent: Googlebot/2.1 (+https://www.google.net/bot.html)",
        "Accept: */*",
        "Origin: https://www.recaptcha.net",
        "Referer: ".$anchor_url,
        "Accept-Encoding: gzip, deflate, br",
        "Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"
        ];
        $r1 = curl("https://www.recaptcha.net/recaptcha/api2/reload?k=".$results["k"],$h1,$data);
        preg_match("/\d+/", explode('"',$r1[1])[4],$s);
        if($s[0] >= 110){
          preg_match('/"rresp","(.*?)"/', $r1[1], $rresp);
          return $rresp[1];
        }
}



function multiexplode($delimiters,$string){
    $ready = str_replace($delimiters, $delimiters[0],$string);
    return explode($delimiters[0],$ready);
}

function arr_rand($my_array = array()) {
  $copy = array();
  while (count($my_array)) {
    $element = array_rand($my_array);
    $copy[$element] = $my_array[$element];
    unset($my_array[$element]);
  }
  return array_merge($copy);
}

function set_cookie($result){
preg_match_all('/^Set-Cookie:\s*([^;\r\n]*)/mi', $result, $matches);
$cookies = array();
foreach($matches[1] as $item){
    parse_str($item, $cookie);
    $cookies = array_merge($cookies, $cookie);
}
return str_replace(["0[","]"],"",str_replace("&0[",";",urldecode(http_build_query([$cookies])))).";";
}

function movePage(){
        return [
         0 => "ERROR CONNECTION",
         100 => "Response 100 Continue",
         101 => "Response 101 Switching Protocols",
         200 => "Response 200 OK",
         201 => "Response 201 Created",
         202 => "Response 202 Accepted",
         203 => "Response 203 Non-Authoritative Information",
         204 => "Response 204 No Content",
         205 => "Response 205 Reset Content",
         206 => "Response 206 Partial Content",
         300 => "Response 300 Multiple Choices",
         301 => "Response 301 Moved Permanently",
         302 => "Response 302 Found",
         303 => "Response 303 See Other",
         304 => "Response 304 Not Modified",
         305 => "Response 305 Use Proxy",
         307 => "Response 307 Temporary Redirect",
         400 => "Response 400 Bad Request",
         401 => "Response 401 Unauthorized",
         402 => "Response 402 Payment Required",
         403 => "Response 403 Forbidden",
         404 => "Response 404 Not Found",
         405 => "Response 405 Method Not Allowed",
         406 => "Response 406 Not Acceptable",
         407 => "Response 407 Proxy Authentication Required",
         408 => "Response 408 Request Time-out",
         409 => "Response 409 Conflict",
         410 => "Response 410 Gone",
         411 => "Response 411 Length Required",
         412 => "Response 412 Precondition Failed",
         413 => "Response 413 Request Entity Too Large",
         414 => "Response 414 Request-URI Too Large",
         415 => "Response 415 Unsupported Media Type",
         416 => "Response 416 Requested range not satisfiable",
         417 => "Response 417 Expectation Failed",
         500 => "Response 500 Internal Server Error",
         501 => "Response 501 Not Implemented",
         502 => "Response 502 Bad Gateway",
         503 => "Response 503 Service Unavailable",
         504 => "Response 504 Gateway Time-out"
         ];
}

function methode_captcha(){
    return [
        1 => "captchaai",
        2 => "azcaptcha",
        3 => "anycaptcha"
    ];
}

function trimed($txt){
    return preg_replace('/\s+/', '',$txt);
}
        
function t24(){
    tmr(1,60*60*24+120);
}
        
function lah($x=0,$inp=0){
    if($x == 1){
        ket(k.explode("/",host)[2],m."no ".$inp." can be bypassed").line();
    } elseif($x == 2){
        ket(k.explode("/",host)[2],m."sorry there is no method for ".$inp).line();
    } else {
        ket(k.explode("/",host)[2],m."sorry no energy").line();
    }
}

function rt(){
    c();
    $t = $_SERVER["TMPDIR"];
    if(file_exists($t)){
        system("rm -rf $t/* 2>&1");
        return true;
    }
}

function tx($a){
  print(h."Input ".$a.c." > ".p);
  return trim(fgets(STDIN));
}

function ex($a,$b,$c,$d){
    return explode($b,explode($a,$d)[$c])[0];
}

function Save($a){
    if(file_exists($a)){
      $b=file_get_contents($a);
    } else {
        $b = tx($a);
        n;
        file_put_contents($a,$b);
    }
    return $b;
}

function an($input){
    $a = str_split($input); 
    foreach ($a as $b){
      print $b;
      usleep(1500);
    }
}

function tmr($a,$tmr){
    date_default_timezone_set('UTC').r();
    $timr = time()+$tmr;
    $col = [b,c,h,k,m,p,u];
    while(true):
        $res = $timr-time();
        if($res<1){
            break;
        }
        if($a == 1){
            print $col[array_rand($col)].'CLAIM NEXT TIME:'.date(' H',$res).'H'.date(' i',$res).'M'.date(' s',$res).'S'.d;r();
        } elseif($a == 2){
            print $col[array_rand($col)].'please wait'.date(' H:i:s ',$res).d;r();
        }
    endwhile;
}

function L($t){
    r();
    $col = [b,c,h,k,m,p,u];
    for($i=1;$i<=$t;$i++){
        print $col[array_rand($col)]."\rLoading... [".intval($i/$t*100)."%]";
        flush();
        sleep(1);
    }
    r();
}

function r(){
    sleep(1);
    print "\r".str_repeat(' ',62)."\r";
}

function line(){
    print str_repeat(p.'─',50).n;
}

function ket($a,$aa,$b=0,$bb=0,$c=0,$cc=0,$d=0,$dd=0){
    if($a or $aa){
        print h.$a.c." > ".p.$aa.n;
    } if($b or $bb){
        print h.$b.c." > ".p.$bb.n;
    } if($c or $cc){
        print h.$c.c." > ".p.$cc.n;
    } if($d or $dd){
        print h.$d.c." > ".p.$dd.n;
    }
}

function ket_line($a,$aa,$b=0,$bb=0,$c=0,$cc=0){
    if($a or $aa){
        print h.$a.c." > ".p.$aa;
    } if($b or $bb){
        print " | ".h.$b.c." > ".p.$bb;
    } if($c or $cc){print " | ".h.$c.c." > ".p.$cc;
    }
    print n;
}

function curl($url, $header = false, $post = false,  $followlocation = false, $cookiejar = false, $alternativ_cookie = false){
    while(true){
      $default[CURLOPT_URL] = $url;
      if($followlocation){
        $default[CURLOPT_FOLLOWLOCATION] = $followlocation;
      }
      $default[CURLOPT_RETURNTRANSFER] = 1;
      $default[CURLOPT_ENCODING] = 'gzip,deflate';
      $default[CURLOPT_HEADER] = 1;
      if($header){
        $default[CURLOPT_HTTPHEADER] = $header;
      }
      if($post){
        $default[CURLOPT_POST] = 1;
        $default[CURLOPT_POSTFIELDS] = $post;
      }
      if($cookiejar){
        $default[CURLOPT_COOKIEFILE] = $cookiejar;
        $default[CURLOPT_COOKIEJAR] = $cookiejar;
      }
      if($alternativ_cookie){
        $default[CURLOPT_COOKIE] = $alternativ_cookie;
      }
      $options = $default;
      $ch = curl_init();
      curl_setopt_array($ch, $options);
      $output = curl_exec($ch);
      $response = substr($output,curl_getinfo($ch,CURLINFO_HEADER_SIZE));
      $info = curl_getinfo($ch);
      curl_close($ch);
      if(curl_errno($ch) == 0){
        foreach(explode("\r\n",substr($output,0,strpos($output,"\r\n\r\n"))) as $i => $line){
          if($i == 0){
            $headers['http_code'] = $line;
          } else {
            list($key, $value ) = explode(': ',$line);
            $header_array[$key] = $value;}
        }
      } else {
        print m.movePage()[$info["http_code"]];
        r();
        print curl_error($ch);
        r();
        continue;
      }
      print p.movePage()[$info["http_code"]];
      r();
      return [[$header_array, $info, $output],$response, json_decode($response)];
  }
}

function asci($string){
    $res = ip();
    date_default_timezone_set($res["t"]);
    $acssi = [
        "a" => ["┌─┐","├─┤","┴ ┴"],
        "b" => ["┌┐ ","├┴┐","└─┘"],
        "c" => ["┌─┐","│  ","└─┘"],
        "d" => ["┌┬┐"," ││","─┴┘"],
        "e" => ["┌─┐","├┤ ","└─┘"],
        "f" => ["┌─┐","├┤ ","└  "],
        "g" => ["┌─┐","│ ┬","└─┘"],
        "h" => ["┬ ┬","├─┤","┴ ┴"],
        "i" => ["┬","│","┴"],
        "j" => [" ┬"," │","└┘"],
        "k" => ["┬┌─","├┴┐","┴ ┴"],
        "l" => ["┬  ","│  ","┴─┘"],
        "m" => ["┌┬┐","│││","┴ ┴"],
        "n" => ["┌┐┌","│││","┘└┘"],
        "o" => ["┌─┐","│ │","└─┘"],
        "p" => ["┌─┐","├─┘","┴  "],
        "q" => ["┌─┐ ","│─┼┐","└─┘└"],
        "r" => ["┬─┐","├┬┘","┴└─"],
        "s" => ["┌─┐","└─┐","└─┘"],
        "t" => ["┌┬┐"," │ "," ┴ "],
        "u" => ["┬ ┬","│ │","└─┘"],
        "v" => ["┬  ┬","└┐┌┘"," └┘ "],
        "w" => ["┬ ┬","│││","└┴┘"],
        "x" => ["─┐ ┬","┌┴┬┘","┴ └─"],
        "y" => ["┬ ┬","└┬┘"," ┴ "],
        "z" => ["┌─┐","┌─┘","└─┘"],
        " "=>[" "," "," "],
        "1" => ["┬","│","┴"],  
        "2" => ["┌─┐","┌─┘","└─┘"],  
        "3" => ["┌─┐"," ├┤","└─┘"],
        "4" => ["┬ ┬","└─┤","  ┘"],
        "5" => ["┌─┐","└─┐","└─┘"],
        "6" => ["┌─┐","├─┐","└─┘"],
        "7" => ["┌─┐","  │","  ┘"],
        "8" => ["┌─┐","├─┤","└─┘"],
        "9" => ["┌─┐","└─┤","└─┘"],
        "0" => ["┌─┐","│ │","└─┘"]
    ];
    $x = str_split($string);
    print p."time:".date("H:i").str_repeat(p.' ',7).mp." ▶ ".d.p." Re:Hine".str_repeat(p.' ',7)."date:".date("m/d/Y").n;
    line();
    print " ";
    foreach($x as $data){
    print h.$acssi[$data][0];
    }
    print h." country ".c." > ".p.$res["c"].n." ";
    foreach($x as $data){
    print c.$acssi[$data][1];
    }
    print h." region".c." > ".p.$res["r"].n." ";
    foreach($x as $data){
    print p.$acssi[$data][2];
    }
    print h." ip".c." > ".p.$res["i"].n;
    foreach($x as $data){
    print c.$acssi[$data][3];
    }
    line();
}

function ip(){
    $if = json_decode(file_get_contents("https://ipinfo.io/?utm_source=ipecho.net&utm_medium=referral&utm_campaign=upsell_sister_sites"));
        return [
            "i"=>$if->ip,
            "r"=>$if->region,
            "c"=>$if->country,
            "t"=>$if->timezone
        ];
}

function user_agent(){
  if(strtoupper(substr(PHP_OS,0,3)) == 'WIN'){
    $user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Safari/537.36';
  } else {
    $user_agent = 'Mozilla/5.0 (Linux; Android 11; M2012K11AG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/W.X.Y.Z Mobile Safari/537.36';
  }
  return $user_agent;
}


function hmc($xml=0,$u_c = 0){
    global $u_a;
    $h[] = "Host: ".explode("/",host)[2];
    if($xml){
    $h[] = "accept: application/json, text/javascript, */*; q=0.01";
    $h[] = "x-requested-with: XMLHttpRequest";}
    $h[] = "cache-control: max-age=0";
    $h[] = "cookie: ".$u_c;
    $h[] = "user-agent: ".$u_a;
    return $h;
}
        
function hac($xml=0){
    $h[] = "Host:".explode("/",host)[2];
    $h[] = "cache-control: max-age=0";
    if($xml){
    $h[] = "accept: application/json, text/javascript, */*; q=0.01";
    $h[] = "x-requested-with: XMLHttpRequest";}
    $h[] = "user-agent: ".user_agent();
    return $h;
}

function metabypass($method,$sitekey,$pageurl,$rr = 0){
    if($method == 'invisible_recaptchav2' or $method = 'recaptchav2'){
    $method = 2;
    }
  //eval(file_get_contents("Authorization.php"));
  global $Authorization;
  $h = [
    'Content-Type: application/json',
    'Accept: application/json'
    ];
    $access_token = curl("https://app.metabypass.tech/CaptchaSolver/oauth/token",$h,$Authorization)[2]->access_token;
    if(!$access_token){
      die(m."terjadi kesalahan Authorization");
    }
    $h1 = [
      'Content-Type: application/json',
      'Accept: application/json',
      'Authorization: Bearer '.$access_token
      ];
      $data2 = json_encode([
        "url" => $pageurl ,
        "sitekey" => $sitekey,
        "version" => $method
        ]);
        $recaptcha_id = curl("https://app.metabypass.tech/CaptchaSolver/api/v1/services/bypassReCaptcha",$h1,$data2)[2]; print_r($recaptcha_id);
        if($recaptcha_id->status_code == 200){
          while(true){
            sleep(10);
            $response = curl("https://app.metabypass.tech/CaptchaSolver/api/v1/services/getCaptchaResult?recaptcha_id=".$recaptcha_id->data->RecaptchaId,$h1)[2];
            if($response->status_code == 200){
              r();
              return $response->data->RecaptchaResponse;
              } else {
                r();
                print $response->message;
              }
          }
        }
}


function azcaptcha($method,$sitekey,$pageurl,$rr = 0){
    if($method == 'hcaptcha' or $method == 'recaptchav3'){
        die(m.'sorry anti byppass '.$method.n);
    }
    if($method == 'invisible_recaptchav2'){
      $method = 'recaptchav2';
    }
    refresh: 
    print p;
    $name_api = "apikey_azcaptcha";
    $apikey = save($name_api);
    $recaptchav2 = http_build_query([
        "key" => $apikey,
        "method" => "userrecaptcha",
        "googlekey" => $sitekey,
        "pageurl" => $pageurl
    ]);
    $hcaptcha = http_build_query([
        "key" => $apikey,
        "method" => "hcaptcha",
        "sitekey" => $sitekey,
        "pageurl" => $pageurl
    ]);
    $type = [
        "hcaptcha" => $hcaptcha,
        "recaptchav2" => $recaptchav2
    ];
    $ua = [
        "host: azcaptcha.com",
        "content-type: application/json/x-www-form-urlencoded"
    ];
    $s = 0;
    while(true){
        $s++;
        $r = curl("https://azcaptcha.com/in.php?".$type[$method],$ua)[1];
        if($r == "ERROR_USER_BALANCE_ZERO"){
            unlink($name_api);
            goto refresh;
        } elseif($r == "ERROR_WRONG_USER_KEY"){
            if($s == 3){
                unlink($name_api);
                goto refresh;
            }
        }
        $id = explode('|',$r)[1];
        if(!$id){
        print "Get ID Captcha";
        r();
        continue;
        }
        sleep(15);
        while(true){
            $r1 = curl("https://azcaptcha.com/res.php?".http_build_query([
                "key" => $apikey,
                "action" => "get",
                "id" => $id
            ]),$ua)[1];
            if($r1 == "CAPCHA_NOT_READY"){
                print str_replace("_"," ",$r1);
                sleep(5);
                r();
                continue;
            } elseif(explode('|', $r1)[1]){
                return explode('|', $r1)[1];
            } else {
                print str_replace("_"," ",$r1);
                r();
                goto refresh;
            }
        }
    }
}

function captchaai($method,$sitekey,$pageurl,$rr = 0){
    if($method == 'hcaptcha' or $method == 'recaptchav3'){
        die(m.'sorry anti byppass '.$method.n);
    }
    if($method == 'invisible_recaptchav2'){
      $method = 'recaptchav2';
    }
    refresh: 
    print p;
    $name_api = "apikey_captchaai";
    $apikey = save($name_api);
    $recaptchav2 = http_build_query([
        "key" => $apikey,
        "method" => "userrecaptcha",
        "googlekey" => $sitekey,
        "pageurl" => $pageurl
    ]);
    $recaptchav3 = http_build_query([
        "key" => $apikey,
        "method" => "userrecaptcha",
        "version" => "v3",
        "action" => "verify",
        "min_score" => "0.3",
        "googlekey" => $sitekey,
        "pageurl" => $pageurl
    ]);
    $hcaptcha = http_build_query([
        "key" => $apikey,
        "method" => "hcaptcha",
        "sitekey" => $sitekey,
        "pageurl" => $pageurl
    ]);
    $type=[
        "recaptchav2" => $recaptchav2,
        "recaptchav3" => $recaptchav3,
        "hcaptcha" => $hcaptcha
    ];
    $ua = [
        "host: ocr.captchaai.com",
        "content-type: application/json/x-www-form-urlencoded"
    ];
    $s = 0;
    while(true){
        $s++;
        $r = curl("https://ocr.captchaai.com/in.php?".$type[$method],$ua)[1];
        if($r == "ERROR_USER_BALANCE_ZERO"){
            unlink($name_api);
            goto refresh;
        } elseif($r == "ERROR_WRONG_USER_KEY"){
            if($s == 3){
                unlink($name_api);
                goto refresh;
            }
        }
        $id = explode('|',$r)[1];
        if(!$id){
            print "Get ID Captcha";
            r();
            continue;
        }
        sleep(5);
        while(true){
            $r1 = curl("https://ocr.captchaai.com/res.php?".http_build_query([
                "key" => $apikey,
                "action" => "get",
                "id" => $id
            ]),$ua)[1];
            if($r1 == "CAPCHA_NOT_READY"){
                print str_replace("_"," ",$r1);
                sleep(5);
                r();
                continue;
            } elseif(explode('|', $r1)[1]){
                return explode('|', $r1)[1];
            } else {
                print str_replace("_"," ",$r1);
                r();
                goto refresh;
            }
        }
    }
}


function multibot($method,$sitekey,$pageurl,$rr = 0){
    if($method == 'invisible_recaptchav2'){
      $method = 'recaptchav2';
    }
    refresh: 
    print p;
    $host = "api.multibot.in";
    $name_api = "apikey_multibot";
    $apikey = save($name_api);
    $recaptchav2 = http_build_query([
        "key" => $apikey,
        "method" => "userrecaptcha",
        "googlekey" => $sitekey,
        "pageurl" => $pageurl
    ]);
    
    $hcaptcha = http_build_query([
        "key" => $apikey,
        "method" => "hcaptcha",
        "sitekey" => $sitekey,
        "pageurl" => $pageurl
    ]);
    $type=[
        "recaptchav2" => $recaptchav2,
        "hcaptcha" => $hcaptcha
    ];
    $ua = [
        "host: ".$host,
        "content-type: application/json/x-www-form-urlencoded"
    ];
    $s = 0;
    while(true){
        $s++;
        $r = curl("http://".$host."/in.php?".$type[$method],$ua)[1];
        if($r == "ERROR_USER_BALANCE_ZERO"){
            unlink($name_api);
            goto refresh;
        } elseif($r == "ERROR_WRONG_USER_KEY"){
            if($s == 3){
                unlink($name_api);
                goto refresh;
            }
        }
        $id = explode('|',$r)[1];
        if(!$id){
            print "Get ID Captcha";
            r();
            continue;
        }
        sleep(5);
        while(true){
            $r1 = curl("http://".$host."/res.php?".http_build_query([
                "key" => $apikey,
                "action" => "get",
                "id" => $id
            ]),$ua)[1];
            if($r1 == "CAPCHA_NOT_READY"){
                print str_replace("_"," ",$r1);
                sleep(10);
                r();
                continue;
            } elseif(strlen($r1) >= 50){
                return explode('|', $r1)[1];
            } else {
                print str_replace("_"," ",$r1);
                r();
                goto refresh;
            }
        }
    }
}

function anycaptcha($method,$sitekey,$pageurl,$rr=0){
    refresh:
    $name_api = "apikey_anycaptcha";
    $apikey = save($name_api);
    $h = [
        "Host: api.anycaptcha.com",
        "Content-Type: application/json"
    ];
    $data = json_encode([
        "clientKey" => $apikey
    ]);
    $r = json_decode(curl("https://api.anycaptcha.com/getBalance",$h,$data)[1],1);
    if($r["balance"] <= 0){
        unlink($name_api);
        goto refresh;
    }
    $recaptchav2=json_encode([
        "clientKey" => $apikey,
        "task" => [
            "type" => "RecaptchaV2TaskProxyless",
            "websiteURL" => $pageurl,
            "websiteKey" => $sitekey,
            "isInvisible" => false
            ]
        ]);
    $hcaptcha = json_encode([
        "clientKey" => $apikey,
        "task" => [
        "type" => "HCaptchaTaskProxyless",
        "websiteURL" => $pageurl,
        "websiteKey" => $sitekey
            ]
        ]);
            $type=[
                "hcaptcha" => $hcaptcha,
                "recaptchav2" => $recaptchav2
            ];
            $Create = json_decode(curl('https://api.anycaptcha.com/createTask',$h,$type[$method])[1]);
            if($Create->errorId>0){
                exit(m.$Create->errorCode.n);
    } else {
        while(true){
            $base = json_encode([
                "clientKey" => $apikey,
                "taskId" => $Create->taskId
            ]);
            $Result = json_decode(curl('https://api.anycaptcha.com/getTaskResult',$h,$base)[1]);
            if($Result->status == 'processing'){
                print p.$Result->status;
                sleep(5);
                r();
                continue;
            }
            r();
            return $Result->solution->gRecaptchaResponse;
        }
    }
}

function icon_bits(){
    $data = http_build_query([
        "cID" => 0,
        "rT" => 1,
        "tM" => "light"
    ]);
    $hash = base_run(host."system/libs/captcha/request.php",$data)["json"];
    for ($x = 0; $x < 5; $x++){
        $image = curl(host."system/libs/captcha/request.php?cid=0&hash=".$hash[$x],hmc(),0,true)[1];
        $file_sizes[] = strlen($image);
    }
    for ($z = 0;$z<5;$z++){
        if($file_sizes[$z] !== $file_sizes[0]){
            if($z == 1){
                if($file_sizes[1] == $file_sizes[2]){
                    $ind = 0;
                    goto fix;
                }
            }
            $ind = $z;
        }
    }
    fix:
    $answer = $hash[$ind];
    $data1 = http_build_query([
        "cID" => 0,
        "pC" => $answer,
        "rT" => 2
    ]);
    base_run(host."system/libs/captcha/request.php",$data1);
    return $answer;
}


function antibot($html){
  preg_match_all('#rel=\\\"(.*?)\\\">#is',$html,$rell);
  preg_match_all('#png;base64,(.*?)(\\\"|")#is',$html,$img);
  $text_rel = $rell[1];
  $captcha = googleapis($img[1]);
  $text_main = $captcha;
  $text_res = $captcha[1];
  $txt[] = array('1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five', '6'=>'six', '7'=>'seven', '8'=>'eight', '9'=>'nine', '10'=>'ten', 'notextreturn' => '');
  $txt[] = array('one'=>'1', 'two'=>'2', 'three'=>'3', 'four'=>'4', 'five'=>'5', 'six'=>'6', 'seven'=>'7', 'eight'=>'8', 'nine'=>'9', 'ten'=>'10');
  $txt[] = array('i'=>'1', 'ii'=>'2', 'iii'=>'3', 'iv'=>'4', 'v'=>'5', 'vi'=>'6', 'vii'=>'7', 'viii'=>'8', 'ix'=>'9', 'x'=>'10');
  $txt[] = array('c@t'=>'cat', 'd0g'=>'dog', '1!0n'=>'lion', 't!g3r'=>'tiger', 'm0nk3y'=>'monkey', '31eph@nt'=>'elephant', 'c0w'=>'cow', 'f0x'=>'fox', 'm0us3'=>'mouse', '@nt'=>'ant');
  $txt[] = array('1'=>'2-1', '2'=>'1+1', '3'=>'1+2', '4'=>'2+2', '5'=>'3+2', '6'=>'2+4', '7'=>'3+4', '8'=>'4+4', '9'=>'1+8', '11'=>'5+6');
  $txt[] = array('3-2'=>'1', '8-6'=>'2', '1+2'=>'3', '3+1'=>'4', '9-4'=>'5', '3+3'=>'6', '6+1'=>'7', '2*4'=>'8', '3+6'=>'9', '2+8'=>'10');
  $txt[] = array('200'=>'zoo', '020'=>'ozo', '002'=>'ooz', '500'=>'soo', '050'=>'oso', '005'=>'oos', '101'=>'lol', '505'=>'sos', '202'=>'zoz', '111'=>'lll');
  $txt[] = array('2*a'=>'aa', '3*a'=>'aaa', '2*b'=>'bb', '3*b'=>'bbb', '1*a+1*b'=>'ab', '1*a+2*b'=>'abb', '2*a+2*b'=>'aabb', '2*c'=>'cc', '3*c'=>'ccc', '1*c+1*a'=>'ca', '1*c+1*b'=>'cb', '1*c+2*a'=>'caa', '1*c+2*b'=>'cbb', '2*c+1*a'=>'cca');
  $txt[] = array('aa'=>'2*a', 'aaa'=>'3*a', 'bb'=>'2*b', 'bbb'=>'3*b', 'ab'=>'1*a+1*b', 'abb'=>'1*a+2*b', 'aabb'=>'2*a+2*b', 'cc'=>'2*c', 'ccc'=>'3*c', 'ca'=>'1*c+1*a', 'cb'=>'1*c+1*b', 'caa'=>'1*c+2*a', 'cbb'=>'1*c+2*b', 'cca'=>'2*c+1*a');
  $txt[] = array('--+'=>'oox', '-+-'=>'oxo', '+--'=>'xoo', '++-'=>'xxo', '-++'=>'oxx', '+-+'=>'xox', '---'=>'ooo', '+++'=>'xxx', '+-+-'=>'xoxo', '+-+'=>'-oxox');
  $txt[] = array('oox'=>'--x', 'oxo'=>'-x-', 'xoo'=>'x--', 'xxo'=>'xx-', 'xxo'=>'-xx', 'xox'=>'x-x', 'ooo'=>'---', 'xxx'=>'xxx', 'xoxo'=>'x-x-', 'oxox'=>'-x-x');
  $txt[] = array('--+'=>'--x', '-+-'=>'-x-', '+--'=>'x--', '++-'=>'xx-', '-++'=>'-xx', '+-+'=>'x-x', '---'=>'xxx', '+++'=>'---', '+-+-'=>'x-x-', '-+-+'=>'-x-x');
  $txt[] = array('oo+'=>'--x', 'o+o'=>'-x-', '+oo'=>'x--', '++o'=>'xx-', 'o++'=>'-xx', '+o+'=>'x-x', 'ooo'=>'---', '+++'=>'xxx', '+o+o'=>'x-x-', 'o+o+'=>'-x-x');
  #tambahan
  $txt[] = array('1'=>'-one', '2'=>'-two', '3'=>'-three', '4'=>'-four', '5'=>'-five', '6'=>'-six', '7'=>'-seven', '8'=>'-eight', '9'=>'-nine', '10'=>'-ten');
  $txt[] = array('one'=>'-1', 'two'=>'-2', 'three'=>'-3', 'four'=>'-4', 'five'=>'-5', 'six'=>'-6', 'seven'=>'-7', 'eight'=>'-8', 'nine'=>'-9', 'ten'=>'-10');
  $txt[] = array('cat'=>'cat', 'dog'=>'dog', 'lion'=>'lion', 'tiger'=>'tiger', 'monkey'=>'monkey', 'elephant'=>'elephant', 'cow'=>'cow', 'fox'=>'fox', 'mouse'=>'mouse', 'ant'=>'ant');
  $txt[] = array('c@t'=>'-cat', 'd0g'=>'-dog', '1!0n'=>'-lion', 't!g3r'=>'-tiger', 'm0nk3y'=>'-monkey', '31eph@nt'=>'-elephant', 'c0w'=>'-cow', 'f0x'=>'-fox', 'm0us3'=>'-mouse', '@nt'=>'-ant');
  $txt[] = array('zoo'=>'zoo', 'ozo'=>'ozo', 'ooz'=>'ooz', 'soo'=>'soo', 'oso'=>'oso', 'oos'=>'oos', 'lol'=>'lol', 'sos'=>'sos', 'zoz'=>'zoz', 'lll'=>'lll');
  $txt[] = array('200'=>'200', '020'=>'020', '002'=>'002', '500'=>'500', '050'=>'050', '005'=>'005', '101'=>'101', '505'=>'505', '202'=>'202', '111'=>'111');
  $txt[] = array('zoo'=>'200', 'ozo'=>'020', 'ooz'=>'002', 'soo'=>'500', 'oso'=>'050', 'oos'=>'005', 'lol'=>'101', 'sos'=>'505', 'zoz'=>'202', 'lll'=>'111');
  $txt[] = array('one'=>'one', 'two'=>'two', 'three'=>'three', 'four'=>'four', 'five'=>'five', 'six'=>'six', 'seven'=>'seven', 'eight'=>'eight', 'nine'=>'nine', 'ten'=>'ten');
  $txt[] = array('z00'=>'200', '0z0'=>'020', '00z'=>'002', 's00'=>'500', '0s0'=>'050', '00s'=>'005', 'i0i'=>'i0i', 's0s'=>'505', 'z0z'=>'202', 'iii'=>'111');
  $txt[] = array('200'=>'z00', '020'=>'0z0', '002'=>'00z', '500'=>'s00', '050'=>'0s0', '005'=>'00s', '101'=>'i0i', '505'=>'s0s', '202'=>'z0z', '111'=>'iii');
  #noise
  $txt[] = array('lol'=>'lot','mouss'=>'mouse','com'=>'cow','tig3r'=>'tiger','snow'=>'mouse','cet'=>'cat','mous3'=>'mouse','cot'=>'cat','bor'=>'dog','bor'=>'dog');
  $txt[] = array('monk'=>'monkey','mous3e'=>'mouse','bleph@nt'=>'elephant','seved'=>'seven','ent'=>'ant','10'=>'fen','ten'=>'fen','tion'=>'lion','monk3y'=>'monkey','m0nkey'=>'monkey');
  $txt[] = array('3lephenta'=>'elephant','esnow'=>'mouse','nt'=>'ant','c@t'=>'caf','c0t'=>'cat','111'=>'|||','|||'=>'111','tlg3r'=>'tiger','jet'=>'cat','tigar'=>'tiger');
  $txt[] = array('tig@r'=>'tiger','tlg@r'=>'tiger','mqus3'=>'mouse','don'=>'lion','moo'=>'cow','tan'=>'ten','t@n'=>'ten','ton'=>'ten','tg3r'=>'tiger','tgar'=>'tiger');
  $txt[] = array('fig³r'=>'tiger','tig³r'=>'tiger','tg³r'=>'tiger','tlg³r'=>'tiger','t!g³r'=>'tiger','ssnom'=>'mouse','l¹on'=>'lion','t¹on'=>'lion','mous³'=>'mouse','m0us³','m⁰use'=>'mouse');
  $txt[] = array('3fephent'=>'elephant','3feph@nt'=>'elephant','3faphent'=>'elephant','3fephant'=>'elephant','3f@ph@nt'=>'elephant','3!ephent'=>'elephant','e!eph@nt'=>'elephant','3lephenf'=>'elephant','eleph@nt'=>'elephant','sieph@nt'=>'elephant');
  $txt[] = array('101'=>'lot','3lephant'=>'elephant','110n'=>'lion','3lephent'=>'elephant','cou'=>'cow','cov'=>'cow','tg³r4'=>'tiger','ent14'=>'ant','jxc'=>'fox','monksy'=>'monkey');
  $txt[] = array('110n'=>'tion','cet4'=>'cat','3teph@nt'=>'elephant','eteph@nt'=>'elephant','etephant'=>'elephant','3tephant'=>'elephant','1g3r'=>'tiger','monk3'=>'monkey','monk3'=>'-monkey','hon'=>'lion');
  $txt[] = array('700'=>'200','007'=>'002','070'=>'020','900'=>'500','009'=>'005','090'=>'050','005'=>'០០s','505'=>'sus','blephant'=>'elephant');
  $txt[] = array('one'=>'-one', 'two'=>'-two', 'three'=>'-three', 'four'=>'-four', 'five'=>'-five', 'six'=>'-six', 'seven'=>'-seven', 'eight'=>'-eight', 'nine'=>'-nine', 'ten'=>'-ten');
  $txt[] = array('3leph@nt'=>'elephant','31ephant'=>'elephant','coww'=>'cow','cⓐt'=>'cat','bat'=>'cat','cor'=>'cow','voil'=>'lion','008'=>'005','800'=>'500','080'=>'050');
  for($u = 0;$u<count($txt);$u++){
    for($b = 0;$b<count($text_res);$b++){
      if(explode(",",$text_main[0])[$b] == $txt[$u][$text_res[0]]){
        $text_re[0] = $txt[$u][$text_res[0]];
            break;
      }
    }
  }
  if(!$text_re[0]){
    $text_re[0] = $text_res[0];
  }
  for($u = 0;$u<count($txt);$u++){
    for($b = 0;$b<count($text_res);$b++){
      if(explode(",",$text_main[0])[$b] == $txt[$u][$text_res[1]]){
        $text_re[1] = $txt[$u][$text_res[1]];
        break;
      }
    }
  }
  if(!$text_re[1]){
    $text_re[1] = $text_res[1];
  }
  for($u = 0;$u<count($txt);$u++){
    for($b = 0;$b<count($text_res);$b++){
      if(explode(",",$text_main[0])[$b] == $txt[$u][$text_res[2]]){
        $text_re[2] = $txt[$u][$text_res[2]];
        break;
      }
    }
  }
  if(!$text_re[2]){
    $text_re[2] = $text_res[2];
  }
  $alt = explode(",",$text_main[0]);
  $main = str_replace(",","",$text_main[0]);
  $res = [$text_re[0],$text_re[1],$text_re[2]];
  $rel = [$text_rel[0],$text_rel[1],$text_rel[2]];
  $input = [
  $res[0].$res[1].$res[2],
  $res[0].$res[2].$res[1],
  $res[1].$res[2].$res[0],
  $res[1].$res[0].$res[2],
  $res[2].$res[0].$res[1],
  $res[2].$res[1].$res[0]
  ];
  $input1 = [
    $res[0].$res[1],
    $res[0].$res[2],
    $res[1].$res[2],
    $res[1].$res[0],
    $res[2].$res[0],
    $res[2].$res[1]
    ];
    $input2 = [
      $res[1].$res[2],
      $res[2].$res[1],
      $res[2].$res[0],
      $res[0].$res[2],
      $res[0].$res[1],
      $res[1].$res[0]
      ];
      $input3 = [
        $res[0].$res[2],
        $res[0].$res[1],
        $res[1].$res[0],
        $res[1].$res[2],
        $res[2].$res[1],
        $res[2].$res[0]
        ];
        $output = [
          " ".$rel[0]." ".$rel[1]." ".$rel[2],
          " ".$rel[0]." ".$rel[2]." ".$rel[1],
          " ".$rel[1]." ".$rel[2]." ".$rel[0],
          " ".$rel[1]." ".$rel[0]." ".$rel[2],
          " ".$rel[2]." ".$rel[0]." ".$rel[1],
          " ".$rel[2]." ".$rel[1]." ".$rel[0]
          ];
          for($i = 0;$i<count($input);$i++){
            if(!$input1[$i] || !$input2[$i] || !$input3[$i]){
              print k."refresh antibot captcha!";
              r();
              break;
            }
            if($input[$i] == $main){
              return $output[$i];
            }
            if($input1[$i] == $alt[0].$alt[1]){
              return $output[$i];
            }
            if($input2[$i] == $alt[1].$alt[2]){
              return $output[$i];
            }
            if($input3[$i] == $alt[0].$alt[2]){
              return $output[$i];
            }
          }
}

function arr_api(){
$package = [
//"",
"",
"",
"kr.infozone.documentrecognition_en",
"com.inverseai.image_to_text_OCR_scanner",
"aculix.smart.text.recognizer",
"image.to.text.ocr"
];
$cert = [
//"",
"",
"",
"00a56ee22492473e1b57670fa9c44185817e5586",
"FDC669CB376A69B6D6065B8CCE8C188ADDDC4F3E",
"70E6AB2300C9406792452EA39A40690B91519C85",
"FDC669CB376A69B6D6065B8CCE8C188ADDDC4F3E"
];

$api = [
//"AIzaSyAfci4iiOtZc_ORMF2gXlQcG-0Uu2k2mgE",
"AIzaSyDSfHPltpIGd0etqy9CnVdIQGReCIrE35k",
"AIzaSyAwmW3dg4fP99_hGS6QzXb7jKwwnOcBtsE",
"AIzaSyDm5IoUGFaQLpFXqoMvB9i20xc62J0taVA",
"AIzaSyDqfshA40_b5IpjtZEuGJ8oUlRMnY4Ynk4",
"AIzaSyCt2nW_3i-RBp4kLM-9T0CzcbYQlHbJGek",
"AIzaSyA5MInkpSbdSbmozCQSuBY3pylSTgmLlaM"
];

for($i=0;$i<count($cert);$i++) {
$h[] = ["Accept-Encoding: gzip",
      "User-Agent: Dalvik/2.1.0 (Linux; U; Android 13; M2012K11AG Build/TQ3A.230901.001)",
      "x-android-package: ".$package[$i],
      "x-android-cert: ".$cert[$i],
      "Content-Type: application/json; charset=UTF-8",
      "Host: vision.googleapis.com",
      "Connection: Keep-Alive"];
}

$array = [
["api" => $api[0],"header" => $h[0]],
["api" => $api[1],"header" => $h[1]],
["api" => $api[2],"header" => $h[2]],
["api" => $api[3],"header" => $h[3]],
["api" => $api[4],"header" => $h[4]],
//["api" => $api[5],"header" => $h[5]]
];
return arr_rand($array);
}

function googleapis($img, $type=0){
  $arr_api = arr_api();
  for($i = 0;$i<count($img);$i++){
    ob_start();
    $base64_string = base64_decode($img[$i]);
    $image = imagecreatefromstring($base64_string);
    imagefilter($image, IMG_FILTER_SMOOTH, 1);
    imagefilter($image,IMG_FILTER_NEGATE);
    imagefilter($image, IMG_FILTER_GRAYSCALE);
    imagecropauto($image , IMG_CROP_DEFAULT);
    imagepng($image);
    $data = ob_get_contents();
    ob_end_clean();
    $imgg[] = $data;
    $data = json_encode(["requests"=>[["features"=>[["maxResults"=> 1,"type" => "DOCUMENT_TEXT_DETECTION"]],"image" => ["content" => base64_encode($imgg[$i])]]]]);
    ulang:
      
      
      
      $r = curl("https://vision.googleapis.com/v1/images:annotate?key=".$arr_api[$i]["api"],$arr_api[$i]["header"],$data)[1];
      if(preg_match("#(error|quota_limit_value|RESOURCE_EXHAUSTED)#is",$r)){print_r($r);die($arr_api[$i]["api"]);
        print p."Please wait, there is a limit!";
        r();
        goto ulang;
      }
      if($type == "normal"){
        return trimed(strip_tags(transliterator_transliterate('Any-Latin;Latin-ASCII;',str_replace([n,"﻿"],"",json_decode($r)->responses[0]->textAnnotations[0]->description))));
      }
      $convert = strtolower(str_replace([",,,,,,",",,,,,",",,,,",",,,",",,"],",",str_replace([" ",":","&",":","$","★","{","}","(",")","·",";","°","¯","`",".","ʾ","✔","#","_","܀","ʿ","܆","'"],",",rtrim(ltrim(strip_tags(transliterator_transliterate('Any-Latin;Latin-ASCII;',str_replace([n,"﻿"],"",json_decode($r)->responses[0]->textAnnotations[0]->description))))))));
      if($i == 0){
        $text1 = $convert;
      } else {
        $text[] = str_replace(",","",$convert);
      }
  }
  return [$text1,$text];
}

function ifimageediting($img, $main = false){
  for($i = 0;$i<count($img);$i++){
    ob_start();
    $base64_string = base64_decode($img[$i]);
    $image = imagecreatefromstring($base64_string);
    imagefilter($image, IMG_FILTER_SMOOTH, 1);
    imagefilter($image,IMG_FILTER_NEGATE);
    imagefilter($image, IMG_FILTER_GRAYSCALE);
    imagecropauto($image , IMG_CROP_DEFAULT);
    imagepng($image);
    $data = ob_get_contents();
    ob_end_clean();
    $imgg[] = $data;
  }
  $h = [
    "Host: ifimageediting.com",
    "cache-control: max-age=0",
    "user-agent: ".user_agent(),
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "accept-language: id,id-ID;q=0.9,en-US;q=0.8,en;q=0.7"
    ];
    $r = curl("https://ifimageediting.com/id/image-to-text",$h,0);
    preg_match('#csrf-token" content="(.*?)"#is',$r[1],$cs);
    $code = uniqid();
    $boundary = "------WebKitFormBoundary";
    $type = 'Content-Type: ';
    $disposition = 'Content-Disposition: form-data; name=';
    $eol = "\n";
    $data = '';
    $data .= $boundary.$code.$eol;
    $data .= $disposition.'"_token"'.$eol.$eol;
    $data .= $cs[1].$eol;
    for($z = 0;$z<count($imgg);$z++){
      $data .= $boundary.$code.$eol;
      $data .= $disposition.'"upload_img[]"; filename="img'.$z.'.png"'.$eol;
      $data .= $type.'image/png'.$eol.$eol;
      $data .= $imgg[$z].$eol;
    }
    $data .= $boundary.$code.$eol;
    $data .= $disposition.'"upload_img[]"; filename=""'.$eol;
    $data .= $type.'application/octet-stream'.$eol.$eol;
    for($x = 0;$x<count($imgg);$x++){
      $data .= $boundary.$code.$eol;
      $data .= $disposition.'"images[]"; filename="img'.$x.'.png"'.$eol;
      $data .= $type.'image/png'.$eol.$eol;
      $data .= $imgg[$x].$eol;
    }
    $data .= $boundary.$code.'--';
    $h2 = [
      "Host: ifimageediting.com",
      "content-length: ".strlen($data),
      "cache-control: max-age=0",
      "origin: https://ifimageediting.com",
      "content-type: multipart/form-data; boundary=----WebKitFormBoundary".$code,
      "user-agent: ".user_agent(),
      "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
      "referer: https://ifimageediting.com/id/image-to-text",
      "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];
      $r2 = curl("https://ifimageediting.com/id/image-to-text",$h2,$data,0,0, set_cookie($r[0][2]));
      preg_match('#csrf-token" content="(.*?)"#is',$r2[1],$css);
      preg_match_all('#data-hash="(.*?)"#is',$r2[1],$hash);
      for($i = 0;$i<count($imgg);$i++){
        $code = uniqid();
        $data2 = '';
        $data2 .= $boundary.$code.$eol;
        $data2 .= 'Content-Disposition: form-data; name="hash"'.$eol.$eol;
        $data2 .= $hash[1][$i].$eol;
        $data2 .= $boundary.$code.'--';
        $h3 = [
          "Host: ifimageediting.com",
          "content-length: ".strlen($data2),
          "x-csrf-token: ".$css[1],
          "user-agent: ".user_agent(),
          "content-type: multipart/form-data; boundary=----WebKitFormBoundary".$code,
          "accept: application/json, text/javascript, */*; q=0.01",
          "x-requested-with: XMLHttpRequest",
          "origin: https://ifimageediting.com",
          "referer: https://ifimageediting.com/id/image-to-text",
          "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"
          ];
          $r3 = curl("https://ifimageediting.com/text-conversion",$h3,$data2,0,0, set_cookie($r[0][2]).set_cookie($r2[0][2]))[1];
          $convert = str_replace(["%","′"],"",strip_tags(str_replace("﻿","",trimed(transliterator_transliterate('Any-Latin;Latin-ASCII;',json_decode(($r3))->t)))));
          if($i == 0){
            $text1 = $convert;
          } else {
            $text[] = $convert;
          }
      }
      return [$text1,$text];
}



function mtk($a,$b,$c){
  if($b=="+"){
    return $a+$c;
  } elseif($b=="-"){
    return $a-$c;
  } elseif($b=="*"){
    return $a*$c;
  } elseif($b=="/"){
    return $a/$c;
  } else {
    return "error";
  }
}


        
function antb($ab){
    $a = $ab[1][0];
    $b = $ab[1][1];
    $c = $ab[1][2];
    return [
        [" ".$b,$c,$a],
        [" ".$a,$b,$c],
        [" ".$a,$c,$b],
        [" ".$b,$a,$c],
        [" ".$c,$b,$a],
        [" ".$c,$a,$b]
    ];
}

rt();
c();
const b = "\033[1;34m",
      c = "\033[1;36m",
      h = "\033[1;32m",
      k = "\033[1;33m",
      m = "\033[1;31m",
      mp = "\033[101m\033[1;37m",
      p = "\033[1;37m",
      u = "\033[1;35m",
      d = "\033[0m",
      n = "\n";
