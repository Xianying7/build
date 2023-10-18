<?php




function c(){
    if(strtoupper(substr(PHP_OS,0,3)) == 'WIN'){
        $clear = 'cls';
    } else {
        $clear = 'clear';
    }
    pclose(popen($clear,'w'));
}

function multiexplode($delimiters,$string){
    $ready = str_replace($delimiters, $delimiters[0],$string);
    return explode($delimiters[0],$ready);
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
    if(file_exists($a)){$b=file_get_contents($a);
    } else {
        $b = tx($a);n;file_put_contents($a,$b);
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
      print p;
      return [[$header_array, $info, $output],$response];
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


function hmc($xml=0){
    global $u_a,$u_c;
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


function azcaptcha($method,$sitekey,$pageurl,$rr = 0){
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
        sleep(5);
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

function icon($method,$sitekey,$pageurl,$rr){
$a = [ 
    "622a6ffcaeeacb79bc56443917af9caa",
    "5e32f1a4613053667a3227f2508807d7",
    "d9f89b6a52bbba354b173df8621ac6cd",
    "ba7161f4628fcab9e7417b989dc7779c",
    "d67322b3de1b3ed804933c173e5eb7e4",
    "95038481908ea9bda3504470f03d28b8",
    "e035d3e0ff51e7f3dd8f105cf35b50f0",
    "725057ccbb051378d4d0d683d08f4cdb",
    "c1512a7116ec7a35056cae89f773e339",
    "2e9b312f3bba89adf0f1156567b896ac",
    "0604566890fe2a6eb7bef2bb18347b55",
    "e987905dc94ca0e566f26102c71b0b36",
    "39660e8ce374b155d61052152ec97037",
    "8aa8909044c1a6d2a0e2f11436020833",
    "a612410bdf846901f751b224551ae384",
    "e0493af430a9d1dec913e2f921dd4e4e",
    "1f361f4e51279b0e2fa40d66651ef7dc",
    "81f720b4af6d8308a17544a068ce3680",
    "e28dadc4f30e38e5b78b041027ef5df9",
    "8f4f7fc6e2d993af2a89b85f32022a90",
    "05dc184a81ab12be43dece0b47938501",
    "cd0a210489200cb9024177ff6bca42e0",
    "5f9ad682f98ad933f1c24839c8eb5a09",
    "a9d688d3a320926c1b181b4fd25f892a",
    "3e67c5cbc07f2d554d41f33949c05151",
    "94eba227efb0cc9804998fd57454ceaf",
    "8b21839d7e9b0338681a601cc8ad4979",
    "1c146ca637af84fac3020b4ed9018b41",
    "82cb8d270e954d518e9504741ba3028d",
    "b9751aedc9a6994908c9cf5bd859a77f",
    "25764185e8ee536ac417719bb6b2806b",
    "e5bd0f213163919b1b8ebf2949b77053",
    "1854831c88a0d886429d2f53a94e56cd",
    "e1d73340439b36fa1424a1a4f800c8b6",
    "b0be1d9962309d629314e5e100b10e3c",
    "cf5bb328fe5e2068cd6d5103d066e701",
    "10d4bbc30d936b446b5a328989af50cb",
    "01cceaf6efaf0b57f7c92574006107cd",
    "19f7e075103a00a80e44cd2c67ac5959",
    "6a224fc7bd454f0f5d0a1ecc2b09626e",
    "e69a18ad19a81fdcd44795751303aa2d",
    "a582c5aa4311986cf6afe1e6dc4a9de4",
    "2b9327bf2e8d3fa531b639943e063adc",
    "64962b266e4f6a93988e709dc28e5259",
    "7f2b97ac7bba3debc7183412c9cf50c7",
    "e8680cf6b8a33f2ba0174a9101fea26c",
    "40e6c896e2374b2f6639bb4300fb6d78",
    "87cf7190c2c99baadb4b1bca329583dd",
    "48b6b6516bb66d2cb3fd3f1cbff9c755",
    "92bf126e2d1f2d400acc5b06cabe7946",
    "5e78748c47c4c0902777d72b7abbd6e3",
    "630c1e42e115e208a574dadb681f054f",
    "0e6837e093b981881e9b637bd56ef211",
    "adba08a7b5176202d4b246e1877e8922",
    "d79468b2d6bd2cba72ac29bb839f08f6",
    "8afdbf34bd1459e97288ccb196e4805f",
    "b66be23ed22f5b410327704a3bce6fea",
    "b7f3d177a4178c4964a03715dcf41aef",
    "904f52621849ec2bbafb5f6e1ed1906d",
    "048f62365211dd9be3ab9f3e58bcd6ae",
    "25ad74bc4fcbf9e826e89bf1f3839ca5",
    "89d24982402ad6bec5e712d5c1ce1c38",
    "bb5693d2dced651638fd2f84a3887d47",
    "dfca78d834c950592d59bb8adc9281e8",
    "f43d64180dc7c7533ea731eeb0b6f3f1",
    "6df2e3d1efcf981b1a09bf3ec5fba234",
    "e748c3ee158c953b2b98bcf3746568b6",
    "bf150291d7c5204fa2d87e4afd6577ee",
    "26370f7790ec5e964e1d2e171d04ecad",
    "c9c22757126884deae95d0cc66ede8ac",
    "c5eb45c2638560df17506530bcd99c65",
    "6c799b4bd0fcc07a577a0e5c1fde1062",
    "426bb68a133bd7edf9a6ccc8a3f7e535",
    "134f59f2951fba5d8a99508b6242cb25",
    "3dde9bc8f564f08cb72611c98e9d8ceb",
    "758021ded1af737e167d60afedf32a93",
    "b5e149d7b5024cc56e150212f45136b8",
    "fa03bf8e3eb8bf4d1f986bac8d58fc2e",
    "9f6823dae3d8a1108c855c1c681b20a1",
    "31ec8e3e209567f4d5fac49c03c7fdc4",
    "7e235151ae9c56a6f7bd37978e89bfd1",
    "74283144ff69795ce61a690fab102811",
    "0b4d9a3b6edddda03c8068eed3f5b18d",
    "ec4eb6068abc34ed2f78d645d0640a6b",
    "dbc0c8017c1fc057fadccab2482cc912",
    "67aa29bff108e19690cff8202b3a7b58",
    "bda34197f517974d452750fe911af5fa",
    "991bba1e5908a053e963a9710e69ad3f",
    "91b15509d2de8e93730557e1971d8888",
    "e4bb54f8bb840e9ccb6e26f88989ffc9",
    "29b18d8e47d0267423345c947aa48180",
    "4204082566766a279bc2f3152071454b",
    "8793f7d7cc7a548bd36d789838e11643",
    "c5db28ec22ed9b715176504975690ef6",
    "0444b2c617da4717dad0a82cc89e966c",
    "cc57d4f905ac9cd3777647fb0c9c69f3",
    "b8e82e0f0de4381cf29c86fb8794cbec",
    "3fbb62835eef93de682d20585f2b8b76",
    "d3fb247637c4da13847247c8cbb7f066",
    "aa836f7f7bfcc29b193623dfb0c1f151"
];
preg_match('#unescape(.*?)"(.*?)"#is',$rr,$dec);
$r = urldecode($dec[2]);
    for($i = 0;$i<=4;$i++){
        preg_match_all("#data-value='(.*?)' src='data:image/png;base64,(.*?)'#is",$r,$b);
        for($n = 0;$n<500;$n++){
            if($a[$n]==md5($b[2][$i])){
                return $b[1][$i];
            }
        }
    }
}


function antibot($html){
  preg_match_all('#rel=\\\"(.*?)\\\">#is',$html,$rell);
  preg_match_all('#png;base64,(.*?)(\\\"|")#is',$html,$img);
  $text_rel = $rell[1];
  $captcha = googleapis($img[1]);
  $text_main = $captcha;
  $text_res = $captcha[1];
  $txt[] = array('1'=>'one', '2'=>'two', '3'=>'three', '4'=>'four', '5'=>'five', '6'=>'six', '7'=>'seven', '8'=>'eight', '9'=>'nine', '10'=>'ten');
  $txt[] = array('one'=>'1', 'two'=>'2', 'three'=>'3', 'four'=>'4', 'five'=>'5', 'six'=>'6', 'seven'=>'7', 'eight'=>'8', 'nine'=>'9', 'ten'=>'10');
  $txt[] = array('I'=>'1', 'II'=>'2', 'III'=>'3', 'IV'=>'4', 'V'=>'5', 'VI'=>'6', 'VII'=>'7', 'VIII'=>'8', 'IX'=>'9', 'X'=>'10');
  $txt[] = array('C@t'=>'cat', 'd0g'=>'dog', '1!0n'=>'lion', 'T!g3r'=>'tiger', 'm0nk3y'=>'monkey', '31eph@nt'=>'elephant', 'c0w'=>'cow', 'f0x'=>'fox', 'm0us3'=>'mouse', '@nt'=>'ant');
  $txt[] = array('1'=>'2-1', '2'=>'1+1', '3'=>'1+2', '4'=>'2+2', '5'=>'3+2', '6'=>'2+4', '7'=>'3+4', '8'=>'4+4', '9'=>'1+8', '11'=>'5+6');
  $txt[] = array('3-2'=>'1', '8-6'=>'2', '1+2'=>'3', '3+1'=>'4', '9-4'=>'5', '3+3'=>'6', '6+1'=>'7', '2*4'=>'8', '3+6'=>'9', '2+8'=>'10');
  $txt[] = array('200'=>'zoo', '020'=>'ozo', '002'=>'ooz', '500'=>'soo', '050'=>'oso', '005'=>'oos', '101'=>'lol', '505'=>'sos', '202'=>'zoz', '111'=>'lll');
  $txt[] = array('2*A'=>'AA', '3*A'=>'AAA', '2*B'=>'BB', '3*B'=>'BBB', '1*A+1*B'=>'AB', '1*A+2*B'=>'ABB', '2*A+2*B'=>'AABB', '2*C'=>'CC', '3*C'=>'CCC', '1*C+1*A'=>'CA', '1*C+1*B'=>'CB', '1*C+2*A'=>'CAA', '1*C+2*B'=>'CBB', '2*C+1*A'=>'CCA');
  $txt[] = array('AA'=>'2*A', 'AAA'=>'3*A', 'BB'=>'2*B', 'BBB'=>'3*B', 'AB'=>'1*A+1*B', 'ABB'=>'1*A+2*B', 'AABB'=>'2*A+2*B', 'CC'=>'2*C', 'CCC'=>'3*C', 'CA'=>'1*C+1*A', 'CB'=>'1*C+1*B', 'CAA'=>'1*C+2*A', 'CBB'=>'1*C+2*B', 'CCA'=>'2*C+1*A');
  $txt[] = array('--+'=>'oox', '-+-'=>'oxo', '+--'=>'xoo', '++-'=>'xxo', '-++'=>'oxx', '+-+'=>'xox', '---'=>'ooo', '+++'=>'xxx', '+-+-'=>'xoxo', '+-+'=>'-oxox');
  $txt[] = array('OOX'=>'--x', 'OXO'=>'-x-', 'XOO'=>'x--', 'XXO'=>'xx-', 'XXO'=>'-xx', 'XOX'=>'x-x', 'OOO'=>'---', 'XXX'=>'xxx', 'XOXO'=>'x-x-', 'OXOX'=>'-x-x');
  $txt[] = array('--+'=>'--x', '-+-'=>'-x-', '+--'=>'x--', '++-'=>'xx-', '-++'=>'-xx', '+-+'=>'x-x', '---'=>'xxx', '+++'=>'---', '+-+-'=>'x-x-', '-+-+'=>'-x-x');
  $txt[] = array('oo+'=>'--x', 'o+o'=>'-x-', '+oo'=>'x--', '++o'=>'xx-', 'o++'=>'-xx', '+o+'=>'x-x', 'ooo'=>'---', '+++'=>'xxx', '+o+o'=>'x-x-', 'o+o+'=>'-x-x');
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
  $alt = explode(",",str_replace(["."," "],",",$text_main[0]));
  $main = str_replace([","." "],"",$text_main[0]);
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
            if(!str_replace([".",","," "],"",$input1[$i]) || !str_replace([".",","," "],"",$input2[$i]) || !str_replace([".",","," "],"",$input3[$i])){
              print k."refresh antibot captcha!";
              r();
              break;
            }
            if(str_replace([".",","," "],"",$input[$i]) == str_replace([".",","," "],"",$main)){
              return $output[$i];
              break;
            }
            if(str_replace([".",","," "],"",$input1[$i]) == $alt[0].$alt[1] || str_replace([".",","," "],"",$input2[$i]) == $alt[1].$alt[2] || str_replace([".",","," "],"",$input3[$i]) == $alt[0].$alt[2]){
              return $output[$i];
            }
          }
}


function googleapis($img){
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
    $hh = [
      "Accept-Encoding: gzip",
      "User-Agent: Google-API-Java-Client Google-HTTP-Java-Client/1.43.3 (gzip)",
      "x-android-package: image.to.text.ocr",
      "x-android-cert: ad32d34755bb3b369a2ea8dfe9e0c385d73f80f0",
      "Content-Type: application/json; charset=UTF-8",
      "Content-Length: ".strlen($data),
      "Host: vision.googleapis.com",
      "Connection: Keep-Alive"
      ];
    $h = [
      "Accept-Encoding: gzip",
      "User-Agent: Google-API-Java-Client Google-HTTP-Java-Client/1.23.0 (gzip)",
      "x-android-package: kr.infozone.documentrecognition_en",
      "x-android-cert: 00a56ee22492473e1b57670fa9c44185817e5586",
      "Content-Type: application/json; charset=UTF-8",
      "Content-Length: ".strlen($data),
      "Host: vision.googleapis.com",
      "Connection: Keep-Alive"
      ];
     // $api = "AIzaSyA5MInkpSbdSbmozCQSuBY3pylSTgmLlaM";
      $api = "AIzaSyDm5IoUGFaQLpFXqoMvB9i20xc62J0taVA";
      ulang:
      $r = curl("https://vision.googleapis.com/v1/images:annotate?key=".$api,$h,$data)[1];
      if(preg_match("#(error|quota_limit_value|RESOURCE_EXHAUSTED)#is",$r)){
        print p."Please wait, there is a limit!";
        r();
        goto ulang;
      }
      $convert = str_replace([";",":","%","′"],"",strip_tags(str_replace("﻿","",trimed(cark(json_decode($r)->responses[0]->textAnnotations[0]->description)))));
      if($i == 0){
        $text1 = $convert;
      } else {
        $text[] = $convert;
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
          $convert = str_replace(["%","′"],"",strip_tags(str_replace("﻿","",trimed(cark(json_decode(($r3))->t)))));
          if($i == 0){
            $text1 = $convert;
          } else {
            $text[] = $convert;
          }
      }
      return [$text1,$text];
}



function imagetotext($img, $main = false){
  if($main == "main"){
    $from = 0;
    $count = 1;
  } else {
    $from = 1;
    $count = count($img);
  }
  for($i = $from;$i<$count;$i++){
    $code = uniqid();
    if($main == false){
      $x = $i-1;
    } else {
      $x = $i;
    }
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
    "Host: www.imagetotext.io",
    "cache-control: max-age=0",
    "user-agent: ".user_agent(),
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "accept-language: id,id-ID;q=0.9,en-US;q=0.8,en;q=0.7"
    ];
    $r = curl("https://www.imagetotext.io/id",$h);
    preg_match('#name="_token" content="(.*?)"#is',$r[1],$cs);
    for($i = 0;$i<count($imgg);$i++){
      $code = uniqid();
      if($main == false){
        $x = $i-1;
      } else {
        $x = $i;
      }
      $data = '------WebKitFormBoundary'.$code."\n".'Content-Disposition: form-data; name="imgArr"; filename="images.jpeg"'."\n".'Content-Type: image/jpeg'."\n\n".$imgg[$i]."\n".'------WebKitFormBoundary'.$code."\n".'Content-Disposition: form-data; name="count"'."\n".$i."\n".'------WebKitFormBoundary'.$code."\n".'Content-Disposition: form-data; name="tool"'."\n\n".'imageotext'."\n".'------WebKitFormBoundary'.$code.'--';
      $h2 = [
        "Host: www.imagetotext.io",
        "content-length: ".strlen($data),
        "accept: */*","x-csrf-token: ".$cs[1],
        "x-requested-with: XMLHttpRequest",
        "user-agent: ".user_agent(),
        "content-type: multipart/form-data; boundary=----WebKitFormBoundary".$code,
        "origin: https://www.imagetotext.io",
        "referer: https://www.imagetotext.io/",
        "accept-language: id,id-ID;q=0.9,en-US;q=0.8,en;q=0.7"
        ];
        $r2 = curl("https://www.imagetotext.io/image-to-text",$h2,$data,0,0, set_cookie($r[0][2]))[1];
        $convert = strip_tags(str_replace("﻿","",trimed(cark(json_decode(($r2))->text))));
        $target = $convert;
        $text[] = str_replace(["%","′"],"",$convert);
    }
    return $text;
}

function jpgtotext($img, $main = false){
  if($main == "main"){
    $from = 0;
    $count = 1;
  } else {
    $from = 1;
    $count = count($img);
  }
  for($i = $from;$i<$count;$i++){
    $code = uniqid();
    if($main == false){
      $x = $i-1;
    } else {
      $x = $i;
    }
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
    "Host: www.jpgtotext.com",
    "cache-control: max-age=0",
    "user-agent: ".user_agent(),
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
    "accept-language: id,id-ID;q=0.9,en-US;q=0.8,en;q=0.7"
    ];
    $r = curl("https://www.jpgtotext.com/id/gambar-ke-teks",$h);
    preg_match('#csrf-token" content="(.*?)"#is',$r[1],$cs);
    for($i = 0;$i<count($imgg);$i++){
      $code = uniqid();
      if($main == false){
        $x = $i-1;
      } else {
        $x = $i;
      }
      $data ='------WebKitFormBoundary'.$code."\n".'Content-Disposition: form-data; name="language"'."\n\n".'eng'."\n".'------WebKitFormBoundary'.$code."\n".'Content-Disposition: form-data; name="file[]"; filename="g.png"'.$code."\n".'Content-Type: image/png'."\n\n".$imgg[$i]."\n".'------WebKitFormBoundary'.$code.'--';
      $h2 = [
        "Host: www.jpgtotext.com",
        "content-length: ".strlen($data),
        "accept: */*","x-csrf-token: ".$cs[1],
        "x-requested-with: XMLHttpRequest",
        "user-agent: ".user_agent(),
        "content-type: multipart/form-data; boundary=----WebKitFormBoundary".$code,
        "origin: https://www.jpgtotext.com",
        "referer: https://www.jpgtotext.com/",
        "accept-language: id,id-ID;q=0.9,en-US;q=0.8,en;q=0.7"
        ];
        $r2 = curl("https://www.jpgtotext.com/file-upload",$h2,$data,0,0, set_cookie($r[0][2]))[1];
        $convert = strip_tags(str_replace("﻿","",trimed(cark(json_decode(($r2))->text))));
        $target = $convert;
        $text[] = str_replace(["%","′"],"",$convert);
    }
    return $text;
}


function imagetotext2($img, $main = false){
  if($main == "main"){
    $from = 0;
    $count = 1;
    } else {
      $from = 1;
      $count = count($img);
      }
      
      for($i = $from;$i<$count;$i++){
          $code = uniqid();
          if($main == false){
            $x = $i-1;
            } else {
              $x = $i;
              }
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
        "Host: www.imagetotext.cc",
        "cache-control: max-age=0",
        "user-agent: ".user_agent(),
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "accept-language: id,id-ID;q=0.9,en-US;q=0.8,en;q=0.7"
        ];
        $r = curl("https://www.imagetotext.cc/id/konverter-gambar-ke-teks",$h);
        preg_match('#csrf-token" content="(.*?)"#is',$r[1],$cs);
        for($i = 0;$i<count($imgg);$i++){
          $code = uniqid();
          if($main == false){
            $x = $i-1;
          } else {
            $x = $i;
          }
          $data = '------WebKitFormBoundary'.$code."\n".'Content-Disposition: form-data; name="images"; filename="g.png"'."\n".'Content-Type: image/png'."\n\n".$imgg[$i]."\n".'------WebKitFormBoundary'.$code.'--';
          $h2 = [
            "Host: www.imagetotext.cc",
            "content-length: ".strlen($data),
            "accept: */*","x-csrf-token: ".$cs[1],
            "x-requested-with: XMLHttpRequest",
            "user-agent: ".user_agent(),
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary".$code,
            "origin: https://www.imagetotext.cc",
            "referer: https://www.imagetotext.cc/",
            "accept-language: id,id-ID;q=0.9,en-US;q=0.8,en;q=0.7"
            ];
            $r2 = curl("https://www.imagetotext.cc/file-upload",$h2,$data,0,0, set_cookie($r[0][2]))[1];
            $convert = strip_tags(str_replace("﻿","",trimed(cark(json_decode(($r2))->text))));
            $target = $convert;
            $text[] = str_replace(["%","′"],"",$convert);
        }
        return $text;
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

function cark($field){
    $replace = [
        '&Uuml;' => '','&Ouml;' => '','&Auml;' => '','&auml;' => '',
        '&ouml;' => '','&lt;' => '','&gt;' => '','&#039;' => '',
        '&quot;' => '','À' => 'A','Á' => 'A','Â' => 'A','Ã' => 'A',
        'Ä' => 'Ae','Å' => 'A','Ā' => 'A','Ą' => 'A','Ă' => 'A',
        'Æ' => 'A','Ç' => 'C','Ć' => 'C','Č' => 'C', 'Ĉ' => 'C',
        'Ċ' => 'C','Ď' => 'D','Đ' => 'D','Ð' => 'D','È' => 'E',
        'É' => 'E','Ê' => 'E','Ë' => 'E','Ē' => 'E','Ę' => 'E',
        'Ě' => 'E','Ĕ' => 'E','Ė' => 'E','Ĝ' => 'G','Ğ' => 'G',
        'Ġ' => 'G','Ģ' => 'G','Ĥ' => 'H','Ħ' => 'H','Ì' => 'I',
        'Í' => 'I','Î' => 'I','Ï' => 'I','Ī' => 'I','Ń' => 'N',
        'Ĩ' => 'I','Ĭ' => 'I','Į' => 'I','İ' => 'I','ŏ' => 'o',
        'Ĵ' => 'J','Ķ' => 'K','Ł' => 'L','Ľ' => 'L','ô' => 'o',
        'Ĺ' => 'L','Ļ' => 'L','Ŀ' => 'L','Ñ' => 'N','о' => 'o',
        'Ň' => 'N','Ņ' => 'N','Ŋ' => 'N','Ò' => 'O','Ó' => 'O',
        'Ô' => 'O','Õ' => 'O','Ö' => 'O','Ø' => 'O','Ō' => 'O',
        'Ő' => 'O','Ŏ' => 'O','Ŕ' => 'R','Ř' => 'R','Ŗ' => 'R',
        'Ś' => 'S','Š' => 'S','Ş' => 'S','Ŝ' => 'S','Ș' => 'S',
        'Ť' => 'T','Ţ' => 'T','Ŧ' => 'T','Ț' => 'T','ŕ' => 'r',
        'Ù' => 'U','Ú' => 'U','Û' => 'U','Ü' => 'U','ı' => 'i',
        'Ū' => 'U', 'Ů' => 'U','Ű' => 'U','Ŭ' => 'U','ĺ' => 'l',
        'Ũ' => 'U','Ų' => 'U','Ŵ' => 'W','Ý' => 'Y','К' => 'K',
        'Ŷ' => 'Y','Ÿ' => 'Y','Ź' => 'Z','Ž' => 'Z','М' => 'M',
        'Ż' => 'Z','à' => 'a','á' => 'a','â' => 'a','û' => 'u',
        'ã' => 'a','ä' => 'a','å' => 'a','ā' => 'a','ü' => 'u',
        'ą' => 'a','ă' => 'a','ç' => 'c','ć' => 'c','ē' => 'e',
        'č' => 'c','ĉ' => 'c','ċ' => 'c','ď' => 'd','đ' => 'd',
        'ð' => 'd','è' => 'e','é' => 'e','ê' => 'e','ë' => 'e',
        'ę' => 'e','ě' => 'e','ĕ' => 'e','ė' => 'e','ƒ' => 'f',
        'ĝ' => 'g','ğ' => 'g','ġ' => 'g','ģ' => 'g','ĥ' => 'h',
        'ħ' => 'h','ì' => 'i','í' => 'i','î' => 'i','ï' => 'i',
        'ĵ' => 'j','ķ' => 'k','ĸ' => 'k','ł' => 'l','ľ' => 'l',
        'ļ' => 'l','ŀ' => 'l','ñ' => 'n','ń' => 'n','ň' => 'n',
        'ņ' => 'n','ŉ' => 'n','ŋ' => 'n','ò' => 'o','ó' => 'o',
        'õ' => 'o','ö' => 'o','ø' => 'o','ō' => 'o','ő' => 'o',
        'ř' => 'r','ŗ' => 'r','š' => 's','ù' => 'u','ú' => 'u',
        'ū' => 'u','ů' => 'u','ű' => 'u','ŭ' => 'u','ũ' => 'u',
        'ų' => 'u','ŵ' => 'w','ý' => 'y','ÿ' => 'y','ŷ' => 'y',
        'ž' => 'z','ż' => 'z','ź' => 'z','А' => 'A','Е' => 'E',
        'О' => 'O','Т' => 'T','а' => 'a','е' => 'e','м' => 'm'
        ];
        return str_replace(array_keys($replace), $replace, $field);
}