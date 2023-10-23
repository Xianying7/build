<?php


#ini adalah data beta test shortlinks error no komplen
//eval(str_replace("<?php","",file_get_contents("build_index.php")));


//die(print_r(bypass_shortlinks("https://adrev.link/ZJMPEfpH")));
//print_r(bypass_shortlinks("https://mitly.us/5HzGNE"));
//print_r(bypass_shortlinks("https://link1s.com/fNb8aWN"));
//print_r(bypass_shortlinks("https://go.illink.net/CBlwbocwnke"));
//print_r(bypass_shortlinks("https://linx.cc/Y7vZY2M"));
//print_r(bypass_shortlinks("https://go.megaurl.in/BSDJi"));
//print_r(bypass_shortlinks("https://linkdam.me/T2O6pzk"));

function build($url=0){
  if(preg_match("#(clk.st)#is",$url)){
          $inc = "/clkclk.";
        } else {
          $inc = "/flyinc.";
        }
    $r = parse_url($url);
    $az = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return [
        "client_id" => substr(str_shuffle($az),0,8)."-".substr(str_shuffle($az),0,4)."-".substr(str_shuffle($az),0,4)."-".substr(str_shuffle($az),0,4)."-".substr(str_shuffle($az),0,16),
        "links" => "https://".$r["host"].$r["path"],
        "inc" => "https://".$r["host"].$inc.$r["path"],
        "go" => [
            "https://".$r["host"]."/links/go",
            "https://".$r["host"]."/go".$r["path"],
            "https://".$r["host"]."/".explode("/",$r["path"])[1]."/links/go",
            "https://go/".$r["host"].$r["path"]
        ]
    ];
}

function visit_short($r) {
    $control = file("control");
    if(!$control){
      $control = [n];
    }
    $config = arr_rand(config());#die(print_r($config));
    $list = $r["name"];
    $exp = 0;
    for($i=0;$i<count($config);$i++) {
        for($s=0;$s<count($list);$s++) {
            $open = multiexplode(["_","{","[","(","-desktop","-easy","-mid","-hard"],str_replace(" ","",strtolower($list[$s])))[0];//die(print_r($r["left"]));
                if(strtolower($config[$i]) == $open) {
                    for($k=0;$k<count($control);$k++){
                        if(strtolower($control[$k]) == $open or explode("/",trim(explode("<",$r["left"][$s])[0]))[0] == 0 or explode("/",trim(explode("<",$r["left"][$s])[0]))[0][0] == "-") {
                            goto up;
                        }
                    }
                    if(preg_replace("/[^0-9]/","",$r["visit"][$s])) {
                        if(mode == "af") {
                            $r1 = base_run(host.$r["visit"][$s],http_build_query([$r["token"][1][$s] => $r["token"][2][$s]]));
                        } elseif(mode == "icon") {
                            $cap = icon_bits();
                            $data2 = http_build_query([
                                "a" => "getShortlink",
                                "data" => preg_replace("/[^0-9]/","",$r["visit"][$s]),
                                "token" => $r["token"],
                                "captcha-idhf" => 0,
                                "captcha-hf" => $cap
                            ]);
                            $res = base_run(host."system/ajax.php",$data2)["json"];
                            if($res->shortlink) {
                                $r1["url"] = $res->shortlink;
                                goto run;
                            }
                        } elseif(mode == "no_icon") {
                            $data = http_build_query([
                                "a" => "getShortlink",
                                "data" => preg_replace("/[^0-9]/",
                                "",$r["visit"][$s]),
                                "token" => $r["token"]
                            ]);
                            $res = base_run(host."system/ajax.php",$data)["json"];
                            if($res->shortlink) {
                                $r1["url"] = $res->shortlink;
                                goto run;
                            }
                        } elseif(mode == "vie_free") {
                            if($r["token_csrf"][1][0]) {
                                $data = http_build_query([
                                    explode('"',$r["token_csrf"][1][0])[0] => $r["token_csrf"][2][0],
                                    $r["token_csrf"][1][1] => $r["token_csrf"][2][1]
                                ]);
                            }
                            $r1 = base_run($r["visit"][$s],$data);
                            if($r1["url1"]) {
                                $r1["url"] = $r1["url1"];
                            }
                        } elseif(mode == "sl_jepangwah") {
                            $r1 = base_run(host."litecoin/".$r["visit"][$s]);
                        } elseif(mode == "path") {
                            $r1 = base_run(host.$r["visit"][$s]);
                        } else {
                            die(m."mode bypass not found".n);
                        }
                        run:
                        if(!parse_url($r1["url"])["scheme"]) {
                            print m."Failed to generate this link ".p.$list[$s];
                            r();
                            return "refresh";
                        }
                        ket_line("",$list[$s],"left",trim(explode("<",$r["left"][$s])[0]));
                        ket("",k.$r1["url"]).line();
                        refresh:
                        $exp++;
                        if($exp == 2) {
                            goto up;
                        }
                        $r2 = bypass_shortlinks($r1["url"]);
                        if(!$r2) {
                            goto refresh;
                        }
                        return $r2;
                    }
                }
            }
        up:
    }
}


function h_short($xml = 0, $referer = 0, $agent =0){
    if($xml){
        $headers[] = 'Accept: */*';
    } else {
        $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v = b3;q=0.9';
    }
    if($xml){
      $headers[] = 'DNT: 1';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    }
    $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
    if($agent){
    #$agent =' (compatible; Google-InspectionTool/1.0;)';
    $agent = ' (compatible; Google-Youtube-Links)';
    } else {
    $user_agent = user_agent();
    }
    $headers[] = 'User-agent: '.$user_agent.$agent;
    if($xml){
        $headers[] = 'X-Requested-With: XMLHttpRequest';
    }
    if($referer){
        $headers[] = 'referer: '.$referer;
    }
    return $headers;
}


function base_short($url,$xml=0,$data=0,$referer=0,$agent=0,$alternativ_cookie=0){
    $r = curl($url,h_short($xml,$referer,$agent),$data,false,false,$alternativ_cookie);
    preg_match('#(reCAPTCHA_site_key":"|data-sitekey=")(.*?)(")#is',$r[1],$recaptchav2);
    preg_match('#(hcaptcha_checkbox_site_key":")(.*?)(")#is',$r[1],$hcaptcha);
    preg_match_all('#(submit_data" action="|<a href="|action="|href = ")(.*?)(")#is',$r[1],$url1);
    preg_match_all("#(url='|location.href ='|<a href='|var api =".n."  ')(.*?)(')#is",$r[1],$url2);
    preg_match_all("#window.open(.*?)'(.*?)'#is",$r[1],$url3);
    preg_match('#share(.*?)url=(.*?)"#is',$r[1],$url4);
    preg_match_all('#hidden" name="(.*?)" value="(.*?)"#is',$r[1],$token_csrf);
    preg_match('#(id="second">|varcountdownValue=|PleaseWait|class="timer"value="|class="timer">)([0-9]{1}|[0-9]{2})(;|"|<|s)#is',str_replace([n," "],"",$r[1]),$timer);
    preg_match_all('#(dirrectSiteCode = |ai_data_id=|ai_ajax_url=)"(.*?)(")#is',$r[1],$code_data_ajax);
    preg_match('#(sessionId: ")(.*?)(")#is',$r[1],$sessionId);//die(print_r($r[0]));
    return [
        "cookie" => set_cookie($r[0][2]),
        "res" => $r[1],
        "hcaptcha" => $hcaptcha[2],
        "recaptchav2" => $recaptchav2[2],
        "token_csrf" => $token_csrf,
        "timer" => $timer[2],
        "json" => json_decode($r[1]),
        "url" => $r[0][1]["redirect_url"],
        "url1" => $url1[2],
        "url2" => $url2[2],
        "url3" => $url3[2],
        "url4" => $url4[2],
        "code_data_ajax" => $code_data_ajax[2],
        "sessionId" => $sessionId[2]
    ];
}


function bypass_shortlinks($url){
  ulang:
    $url = str_replace("http:","https:",$url);
    $coundown = 15;
    $host = parse_url(
    $url)["host"];
    $query = parse_url($url);
    if(explode("=",$query["query"])[0] == "api"){
      $url = "https://".explode("=",$query["query"])[2];
      $host = parse_url($url)["host"];
    }
    if(explode("p=",$url)[1]){
      $url = "https://ser7.crazyblog.in".explode("p=",$url)[1];
      $host = parse_url($url)["host"];
    }
    if(preg_match("#(clk.st|urlsfly.me|wefly.me|shortsfly.me|linksfly.me)#is",$host)){fly:
      $run = build($url);
      $r = base_short($url);
      $link = $r["url"];
      if(preg_match("#(".$host.")#is",$link)){
        $referer = "wss://advertisingexcel.com";
      } else {
        $referer = $link;
      }
      if(preg_match("#(clk.st)#is",$host)){
        $referer = $link;
      }
      $r1 = base_short($run["inc"],0,0,$referer,1)["url"];
      if(preg_match("#(".$host.")#is",$r1)){
        die(m."referer perlu di update".n);
        goto fly;
      }
      if($r1){
        L(100);
        print h."success";
        r();
        return $r1;
      }
    } elseif(preg_match("#(link1s.com|insfly.pw|earnify.pro|shrinke.us|adrev.link|nx.chainfo.xyz|linksly.co|owllink.net|go.birdurls.com|go.owllink.net|mitly.us|go.illink.ne|coinpayz.link|oko.sh|go.mtraffics.com|go.megaurl.in|go.megafly.in|clik.pw|usalink.io|link.usalink.io|go.hatelink.me|ez4short.com|link.shrinkme.link|shorti.io|sheralinks.com|linksfly.link|link.adlink.click|url.beycoin.xyz)#is",$host)){
        if(preg_match("#(link1s.com)#is",$host)){
          $referer = "https://google.com/";
        } elseif(preg_match("#(insfly.pw)#is",$host)){
          $referer = "https://clk.wiki/";
        } elseif(preg_match("#(shrinke.us)#is",$host)){
          $referer = "https://themezon.net/";
        } elseif(preg_match("#(nx.chainfo.xyz)#is",$host)){
          $referer = "https://bitzite.com/";
        } elseif(preg_match("#(linksly.co)#is",$host)){
          $referer = "https://en.themezon.net/";
        } elseif(preg_match("#(link.usalink.io|usalink.io)#is",$host)){
          $referer = "https://link.theconomy.me";
        } elseif(preg_match("#(ez4short.com)#is",$host)){
          $referer = "https://ez4mods.com/";
        } elseif(preg_match("#(link.shrinkme.link)#is",$host)){
          $referer = "https://blog.anywho-com.com/";
        } elseif(preg_match("#(sheralinks.com)#is",$host)){
          $referer = "https://blogyindia.com/";
        } elseif(preg_match("#(linksfly.link)#is",$host)){
          $referer = "https://webseriesreel.in/";
        } elseif(preg_match("#(link.adlink.click)#is",$host)){
          $referer = "https://www.diudemy.com/";
        } elseif(preg_match("#(url.beycoin.xyz)#is",$host)){
          $referer = "https://adsluffa.online/";
        } else {
          $referer = 0;
        }
        if(preg_match("#(go.illink.net|go.birdurls.com|go.owllink.net|go.illink.net|sox.lik)#is",$host)){
          $cloud = 1;
        } else {
          $cloud = 0;
        }
        $url = str_replace("usalink.io","link.theconomy.me",str_replace("url.beycoin.xyz/short","url.beycoin.xyz",str_replace("link.adlink.click","blog.adlink.click",str_replace("linksfly.link","go.linksfly.link",str_replace("shorti.io","blog.financeandinsurance.xyz",str_replace("link.shrinkme.link","blog.shrinkme.link",str_replace("go.hatelink.me","g0.hatelink.me",str_replace("linksly.co","go.linksly.co",str_replace("link.usalink.io","link.theconomy.me",str_replace("go.megafly.in","get.megafly.in",str_replace("go.megaurl.in","get.megaurl.in",str_replace("go.mtraffics.com","get.mtraffics.com",str_replace("go.illink.net","illink.net",str_replace("go.owllink.net","owllink.net",str_replace("go.birdurls.com","birdurls.com",str_replace("nx.chainfo.xyz","go.bitcosite.com",str_replace("shrinke.us","en.shrinke.me",$url)))))))))))))))));
        $run = build($url);
        $r = base_short($run["links"],0,0,$referer,$cloud);
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];//die(print_r($r));
        
        if(preg_match("#(verify/[?]/)#is",$r["url"])){
          $verify = str_replace("http:","https:",$r["url"]);
          $r = base_short($verify,0,0,$verify,0);
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if($t[1][2] == "f_n"){
          $method = "recaptchav2";
          $cap = captchaai($method,$r[$method],$run["links"]);
          $data = data_post($t,$method, $cap)["four"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if($t[1][2] == "ref"){
          $method = "recaptchav2";
          $cap = captchaai($method,$r[$method],$run["links"]);
          $data = data_post($t,$method, $cap)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[1][2])[4] == "f_n"){
          $method = "recaptchav2";
          $cap = captchaai($method,$r[$method],$run["links"]);
          $data = data_post($t,$method, $cap)["four2"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][3])[0] == "2"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        if(explode('"',$t[2][3])[0] == "3"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][2])[0] == "captcha"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        $method = "recaptchav2";
        $cap = captchaai($method,$r[$method],$run["links"]);
        $data = data_post($t, $method ,$cap)["five"];
        $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
         $cookie[] = $r["cookie"];
         $t = $r["token_csrf"];
        }
        if(explode('"',$t[1][3])[0] == "ad_form_data"){
          $t = array(
            array_merge(array_diff($t[0],[$t[1][0],$t[2][0]])),
            array_merge(array_diff($t[1], [$t[1][0], $t[2][0]])),
            array_merge(array_diff($t[2], [$t[1][0], $t[2][0]]))
            );
        }
        if(explode('"',$t[1][2])[0] == "ad_form_data"){
          $data = data_post($t)["four"];
          L($coundown);
          $r1 = base_short($run["go"][0],1,$data,0,$cloud,join('',$cookie))["json"];
          if($r1->status == "success"){
            print h.$r1->status;
            r();
            return $r1->url;
          }
        }
    } elseif(preg_match("#(tii.la)#is",$host)){
      $run = build($url);
      $r = base_short($run["links"]);
      $t = $r["token_csrf"];
      $cookie[] = $r["cookie"];
      $data = data_post($t)["three"];
        $r1 = base_short($run["links"],"",$data,0,join('',$cookie));
        if($r1["timer"] or $r1["timer"] == 0){
          L($coundown);
          $t = $r1["token_csrf"];
          $cookie[] = $r1["cookie"];
          $data = data_post($t)["two"];
            $r2 = base_short($run["go"][0],1,$data,0,0,join('',$cookie))["json"];
            if($r2->status == "success"){
              print h.$r2->status;
              r();
              return $r2->url;
            }
        }
    } elseif(preg_match("#(try2link.com)#is",$host)){
      $run = build($url);
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $r1 = base_short($url,0,0,"https://world2our.com/",0,join('',$cookie));
      $cookie[] = $r1["cookie"];
      if($r1["timer"] or $r1["timer"] == 0){
        L($coundown);
        $t = $r1["token_csrf"];
        $data = data_post($t)["four"];
          $r2 = base_short($run["go"][0],1,$data,$url,0,join('',$cookie))["json"];
          if($r2->status == "success"){
            h.$r2->status;
            r();
            return $r2->url;
          }
      }
    } elseif(preg_match("#(linkdam.me|terafly.me|forexly.cc|insurancly.cc|goldly.cc|playstore.pw|botfly.me)#is",$host)){
      $r = base_short($url);
      if(preg_match("#(playstore.pw)#is",$host)){
        $r["url"] = $url;
      } elseif(preg_match("#(botfly.me)#is",$host)){
        $url = "https://adsy.pw/how-to-locate-good-risk-reward-opportunities-in-forex-trading-botfly".parse_url($url)["path"];
      } elseif(explode("?",$r["url"])[1]){
        $url = explode("?",$r["url"])[1];
      } else {
        goto ulang;
      }
      $r1 = base_short($url,0,0,$r["url"]);
      $cookie = $r1["cookie"];
      $t = $r1["token_csrf"];
      if($t[2][2] == "continue"){
        $data = data_post($t)["five"];
        $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
        $cookie = $r1["cookie"];
        $t = $r1["token_csrf"];
        if($t[2][2] == "continue"){
          $data = data_post($t)["five"];
          $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
          $cookie = $r1["cookie"];
          $t = $r1["token_csrf"];
          if($t[2][2] == "continue"){
            $data = data_post($t)["five"];
            $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
            $cookie = $r1["cookie"];
            $t = $r1["token_csrf"];
            if($t[2][2] == "continue"){
              $data = data_post($t)["five"];
              $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
              $cookie = $r1["cookie"];
              $t = $r1["token_csrf"];
              if($t[2][2] == "continue"){
                $data = data_post($t)["five"];
                $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                $cookie = $r1["cookie"];
                $t = $r1["token_csrf"];
                if($t[2][2] == "continue"){
                  $data = data_post($t)["five"];
                  $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                  $cookie = $r1["cookie"];
                  $t = $r1["token_csrf"];
                  if($t[2][2] == "continue"){
                    $data = data_post($t)["five"];
                    $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                    $cookie = $r1["cookie"];
                    $t = $r1["token_csrf"];
                  }
                }
              }
            }
          }
        }
        if(!$t[0][0]){
          L(5);
          goto ulang;
          }
          if($t[2][2] == "captcha"){
            $method = "recaptchav2";
            $cap = captchaai($method,$final[$method],$url);
            $data = data_post($t, $method ,$cap)["five"];
            $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
            $cookie = $r1["cookie"];
            $t = $r1["token_csrf"];
          }
          if($t[1][2] == "ad_form_data"){
            L($coundown);
            $data = data_post($t)["four"];
            $r2 = base_short(build($url)["go"][2],1,$data,$url,0,join('',$cookie))["json"];
          }
          if($r2->status == "success"){
           print h.$r2->status;
           r();
           return $r2->url;
          }
      }
    } elseif(preg_match("#(destyy.com|festyy.com|gestyy.com|hestyy.com|ceesty.com|corneey.com)#is",$host)) {
        while(true) {
            $run = build($url);
            $r = base_short($run["links"]);//die(print_r($r));
            if(!$r["url"]) {
                continue;
            }
            $r1 = base_short($r["url"],0,0,0,0,$r["cookie"].$r1["cookie"]);//die(print_r($r1));
            if(!$r1["sessionId"]) {
                continue;
            }
            L($coundown);
            $r2 = base_short("https://clkmein.com/shortest-url/end-adsession?adSessionId=".$r1["sessionId"]."&adbd=0&callback=reqwest_".time(),0,0,$r["url"],0,$r["cookie"].$r1["cookie"])["res"];
            if(ex('":"','"',2,$r2) == "ok") {
                print h."succses";
                r();
                return str_replace("\/","/",ex('":"','"',1,$r2));
            }
        }
    } elseif(preg_match("#(exe.io)#is",$host)){
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $url = $r["url"];
      $r = base_short($url,0,0,$url,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $data = http_build_query([
        $t[1][0] => $t[2][0],
        explode('"',$t[1][1])[0] => $t[2][1],
        explode('"',$t[1][2])[0] => "",
        explode('"',$t[1][2])[4] => $t[2][2],
        explode('"',$t[1][3])[0] => $t[2][3],
        explode('"',$t[1][4])[0] => $t[2][4],
        explode('"',$t[1][5])[0] => $t[2][5]
        ]);
        $r = base_short($url,0,$data,$url,0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        $method = "recaptchav2";
        $cap = captchaai($method,"6Ldzj74UAAAAAAVQ7-WIlUUfNGJFaKdgRxA7qH94",$url);
        $data = data_post($t, $method, $cap)["five"];
        $r = base_short($url,0,$data,$url,0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        if(explode('"',$t[1][2])[0] == "ad_form_data" or $r["timer"] or $r["timer"] == 0){
          L($coundown);
          $data = data_post($t)["four"];
          $r1 = base_short(build($url)["go"][0],1,$data,0,0,join('',$cookie))["json"];
          if($r1->status == "success"){
            h.$r1->status;
            r();
            return $r1->url;
          }
        }
    } elseif(preg_match("#(cuty.io)#is",$host)){
      $r = base_short($url); 
      $cookie[] = $r["cookie"];
      $url = $r["url"];
      if($r["url"]){
      $r = base_short($url,0,0,0,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $data = data_post($t)["null"];
      $r = base_short($url,0,$data,0,0,join('',$cookie));//die(print_r($r));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $method = "recaptchav2";
      $cap = captchaai($method,$r[$method],$url);
      $data = data_post($t, $method ,$cap)["null"];
      $r = base_short($url,0,$data,0,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      if(explode('"',$t[1][1])[0] == "data"){
        L($coundown);
        $data = data_post($t)["two"];
          $r1 = base_short(build($url)["go"][1],1,$data,0,0,join('',$cookie));
          if($r1["url"]){
            print h."success";
            r();
            return $r1["url"];
          }
          }
        }
    } elseif(preg_match("#(test)#is",$host)){
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
    }
}



function data_post($t, $type = 0, $cap = 0){
  if($type == "recaptchav2"){
    $resp = "g-recaptcha-response";
  } elseif($type == "hcaptcha"){
    $resp = "h-recaptcha-response";
  }
  return [
    "null" => str_replace("&=0","",http_build_query([
            $t[1][0] => $t[2][0],
            $resp => $cap
            ])),
             "one" => str_replace("&=0&","&",http_build_query([
            $t[1][0] => $t[2][0],
            $t[1][1] => $t[2][1],
            //explode('"',$t[1][2])[0] => rand(11111111,99999999)
            ])),
    "two" => http_build_query([
      $t[1][0] => $t[2][0],
      $t[1][1] => $t[2][1],
      $t[1][2] => $t[2][2]
      ]),
      "three" => http_build_query([
        $t[1][0] => $t[2][0],
        $t[1][1] => $t[2][1],
        $t[1][2] => $t[2][2],
        $t[1][3] => $t[2][3]
        ]),
        "four" => str_replace("&=0&","&",http_build_query([
          $t[1][0] => $t[2][0],
          explode('"',$t[1][1])[0] => $t[2][1],
          explode('"',$t[1][2])[0] => $t[2][2],
          $resp => $cap,
          explode('"',$t[1][3])[0] => $t[2][3],
          explode('"',$t[1][4])[0] => $t[2][4]
          ])),
          "five" => str_replace("&=0&","&",http_build_query([
            $t[1][0] => $t[2][0],
            explode('"',$t[1][1])[0] => $t[2][1],
            $t[1][2] => $t[2][2],
            $t[1][3] => $t[2][3],
            $resp => $cap,
            explode('"',$t[1][4])[0] => $t[2][4],
            explode('"',$t[1][5])[0] => $t[2][5],
            ])),
            "four2" => str_replace("&=0&","&",http_build_query([ $t[1][0] => $t[2][0],
                    explode('"',$t[1][1])[0] => $t[2][1],
                    explode('"',$t[1][2])[0] => "",
                    explode('"',$t[1][2])[4] => $t[2][2],
                    $resp => $cap,
                    explode('"',$t[1][3])[0] => $t[2][3],
                    explode('"',$t[1][4])[0] => $t[2][4]
                ]))
            ];
  
}


function config() {
  $config[] ="Try2link";
  $config[] ="Shorti.io";
  $config[] ="Owllink";
  $config[] ="Birdsurl";
  $config[] ="Link1s";
  $config[] ="ShrinkEarn";
  $config[] ="SheraLinks";
  $config[] ="AdLink";
  $config[] ="LinksFly.link";
  $config[] ="Urlsfly";
  $config[] ="Urlsfly.me";
  $config[] ="Chaininfo";
  $config[] ="Clkst";
  $config[] ="Clk.st";
  $config[] ="Wefly";
  $config[] ="Wefly.me";
  $config[] ="Insfly";
  $config[] ="Adrevlinks";
  $config[] ="Ez4Short";
  $config[] ="Shortsfly";
  $config[] ="Shortsfly.me";
  $config[] ="Shrinkme";
  $config[] ="Linksly";
  $config[] ="Shortest";
  $config[] ="Linksfly";
  $config[] ="Linkfly";
  $config[] ="Linksfly.me";
  $config[] ="Hatelink";
  $config[] ="Mitly";
  $config[] ="Clk-sh";
  $config[] ="Exe";
  $config[] ="Exe.io";
  $config[] ="CPLink";
  $config[] ="Mtraffics";
  $config[] ="Megaurl";
  $config[] ="Megafly";
  $config[] ="Powclick";
  $config[] ="Earnify";
  $config[] ="Earnifypro";
  $config[] ="Cuty";
  $config[] ="Usalink";
  $config[] ="ShrinkmeLink";
  $config[] ="Beycoin";
  $config[] ="Goldly";
  $config[] ="Forexly";
  $config[] ="Insurancely";
  return $config;
}
