<?php


#http://adbits.xyz/gL7kXiP
#https://urlcorner.com/CBqzuo1tu69
#eval(str_replace('<?php',"",file_get_contents(("build_index.php"))));
#die(scrape());
#https://shortyearn.com/CBkp4ocd2d7
#die(print_r(bypass_shortlinks("https://1bit.space/api/urldecode/==QfiMESqRGM0lEbiojIuV2avRnIsIicBR3dkVTT4IUdElkUap3QjNENrVmM3Q0Q5ZnYnp0cp5GOVZEaTBTUUtESjZUMtEjO0QjMvwFdld2Lc5Wa35CdlNWdhZWZylmZvw1LcpzcwRHdoJiOiwmc1Jye")));
#$node = exe(file_get_contents("asu.html"));die(print_r($node));
#print_r(bypass_shortlinks("https://rsshort.com/VDLJxwM"));
#print_r(bypass_shortlinks("https://earnow.online/L5u0D6HU"));
#print_r(bypass_shortlinks("https://go.illink.net/CBlwbocwnke"));
//print_r(bypass_shortlinks("https://linx.cc/Y7vZY2M"));
#print_r(bypass_shortlinks("https://clks.pro/onfbBNh7OOdd0JS"));
#print_r(bypass_shortlinks("https://go.shorti.io/CBqgokmfh18"));
/*$icon = base64_encode(file_get_contents("xxx.png"));
print multibot("rscaptcha",$icon,"https://www.fabianwennink.nl");
exit;
*/

function build($url=0){
  if(preg_match("#(clk.st|clks.pro)#is",$url)){
    $inc = "/clkclk.";
  } else {
    $inc = "/flyinc.";
  }
  $r = parse_url($url);
  return [
    "client_id" => az_num(8)."-".az_num(4)."-".az_num(4)."-".az_num(4)."-".az_num(16),
    "links" => "https://".$r["host"].$r["path"],
    "inc" => "https://".$r["host"].$inc.$r["path"],
    "go" => [
      "https://".$r["host"]."/links/go",
      "https://".$r["host"]."/go".$r["path"],
      "https://".$r["host"]."/".explode("/",$r["path"])[1]."/links/go",
      "https://go/".$r["host"].$r["path"],
      "https://".$r["host"]."/xreallcygo".$r["path"]
      ]];
}

function visit_short($r, $site_url = 0, $data_token = 0){
    $file_name = "control";
    $control = file($file_name);
    if(!$control[0]){
      $control = ["tolol"];
    }
    $config = arr_rand(config());
    $list = $r["name"];
    if(!$list[0]){
      return "refresh";
    }
    $exp = 0;
    for($i=0;$i<count($config);$i++){
        for($s=0;$s<count($list);$s++){
            $open = multiexplode(["_","{","[","(","-desktop","-easy","-mid","-hard"],str_replace(" ","",trimed(strtolower($list[$s]))))[0];
                if(strtolower($config[$i]) == $open){
                    for($p=0;$p<count($control);$p++){
                        if(strtolower(str_replace(n,"",$control[$p])) == host.$open or strtolower(str_replace(n,"",$control[$p])) == $open or explode("•",$r["left"][$s])[0] == explode("•",$r["left"][$s])[1] or explode("/",trim(explode("<",$r["left"][$s])[0]))[0] == 0 or explode("/",trim(explode("<",$r["left"][$s])[0]))[0][0] == "-"){
                            goto up;
                        }
                    }
                    if(preg_replace("/[^0-9]/","",$r["visit"][$s])){
                        if(mode == "af"){
                            $r1 = base_run(host.$r["visit"][$s],http_build_query([$r["token"][1][$s] => $r["token"][2][$s]]));
                        } elseif(mode == "icon"){
                            $cap = icon_bits();
                            if(!$cap){
                              return "refresh";
                            }
                            $data2 = http_build_query([
                                "a" => "getShortlink",
                                "data" => preg_replace("/[^0-9]/","",$r["visit"][$s]),
                                "token" => $r["token"],
                                "captcha-idhf" => 0,
                                "captcha-hf" => $cap
                            ]);
                            $res = base_run(host."system/ajax.php",$data2)["json"];
                            if($res->shortlink){
                                $r1["url"] = $res->shortlink;
                                goto run;
                            }
                        } elseif(mode == "no_icon"){
                            $data = http_build_query([
                                "a" => "getShortlink",
                                "data" => preg_replace("/[^0-9]/",
                                "",$r["visit"][$s]),
                                "token" => $r["token"]
                            ]);
                            $res = base_run(host."system/ajax.php",$data)["json"];
                            if($res->shortlink){
                                $r1["url"] = $res->shortlink;
                                goto run;
                            }
                        } elseif(mode == "vie_free"){
                          if(preg_match("#pre_verify#is",$r["visit"][$s])){
                           $left = $r["left"][$s];
                           $r = base_run($r["visit"][$s]);
                           $cap = multi_atb($r["res"]);
                           if(!$cap){
                             return "refresh";
                           }
                           $rsp = array("antibotlinks" => $cap);
                           $r["visit"][$s] = $r["visit"][0];
                           $r["left"][$s]  = $left;
                          }
                            if($r["token_csrf"][1][0]){
                                $data = data_post($r["token_csrf"], "one", $rsp);
                            }
                            if($site_url == 1){
                              $r1 = base_run(str_replace("go","cancel",$r["visit"][$s]),$data);
                              if(preg_match("#".host."#is",$r1["url1"])){
                                preg_match_all('#location: (.*)#i', $r1["r"], $res);
                                if($res[1][1]){
                                  $r1["url1"] = trimed($res[1][1]);
                                }
                              }
                            } else {
                              $r1 = base_run($r["visit"][$s],$data);
                            }
                            if(preg_match("#".host."#is",$r1["url1"])){
                              $r1["url"] = "";
                              goto run;
                            }
                            if($r1["url1"]){
                                $r1["url"] = $r1["url1"];
                            }
                        } elseif(mode == "only_site"){
                            $r1 = base_run($site_url.$r["visit"][$s]);
                            if($r1["url1"]){
                              $r1["url"] = $r1["url1"];
                            }
                        } elseif(mode == "site_url"){
                            if($data_token){
                              $data_token = $data_token.$r["visit"][$s];
                            }
                            $r1 = base_run($site_url, $data_token);
                        } elseif(mode == "path"){
                            $r1 = base_run(host.$r["visit"][$s]);
                        } elseif(mode == "firefaucet"){
                           $data = $r[$list[$s]];
                            for($rq=0;$rq<count($data[1]);$rq++){
                              if($data[0][$rq]){
                                $rrq = "$rq";
                              }
                            }
                            $raw = explode("&&","&".$data[2][$rrq])[1];
                            parse_str($raw, $out);
                            for($tq=0;$tq<count($r["code"]);$tq++){
                              if($out[$r["code"][$tq]]){
                                $data_post =  str_replace($out[$r["code"][$tq]], $r[$r["code"][$tq]], $raw);
                              }
                            }
                            $r1 = base_run(host.$data[1][$rrq]."/", $data_post);
                        } elseif(mode == "ofer"){
                          /*$data = http_build_query([
                            "action" => "getShortlink",
                            "sid" => "Murcaluse",
                            "key" => "6l54uj4b6lmjljh1mvwgyqj0aovufc",
                            "data" => $r["visit"][$s],
                            "token" => $data_token
                            ]);*/
                          $data = http_build_query(array_merge([
                            "action" => "getShortlink",
                            //"sid" => "1196255",
                            //"key" => "qbgxxjznt1xfm07irbrybnhiwqr2sh",
                            "data" => $r["visit"][$s],
                            //"token" => $data_token
                            ], $data_token));#die($data);
                            $r1 = base_offer($site_url, $data, 1);
                            $data = http_build_query(["action" => "redirect"]);
                            if(!$r1["json"]->link){
                              return "refresh";
                            }
                            L(10);
                            $r1 = base_offer($r1["json"]->link, $data, 1);
                        } else {
                            die(m."mode bypass not found".n);
                        }
                        run:
                        if(!parse_url($r1["url"])["scheme"]){
                      /*    #if(preg_match("#refresh#is", $res->message)){
                              if(!file_get_contents($file_name)){
                                file_put_contents($file_name, host.$list[$s]);
                              } else {
                                file_put_contents($file_name, get_e($file_name).n.host.$list[$s]);
                              }
                           # }*/
                            print m."Failed to generate this link ".p.$list[$s];
                            r();
                            return "refresh";
                        }
                        ket_line("",$list[$s],"left",trim(explode("<",$r["left"][$s])[0]));
                        ket("",k.$r1["url"]).line();
                        refresh:
                        $exp++;
                        if($exp == 2){
                            goto up;
                        }
                        $r2 = bypass_shortlinks($r1["url"]);
                        if(!$r2){
                            goto refresh;
                        }
                        return $r2;
                    }
                }
            }
        up:
    }
}


function h_short($xml = 0, $referer = 0, $agent =0, $boundary = 0){
    if($xml){
      $headers[] = 'Accept: */*';
    } else {
      $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v = b3;q=0.9';
    }
    if($boundary){
      $headers[] = "content-type: multipart/form-data; boundary=----WebKitFormBoundary".$boundary;
    }
    if($xml){
      $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    }
    $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
    ///$headers[] = 'CF-Connecting-IP: 127.0.0.1, 68.180.194.242';
    if($agent){
    #$agent = ' (compatible; Google-Youtube-Links)';
    $agent = ' (compatible; Googlebot/2.1; +https://www.google.com/bot.html)';
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


function base_short($url,$xml=0,$data=0,$referer=0,$agent=0,$alternativ_cookie=0,$boundary=0,$proxy=0){
    start:
    $r = curl($url,h_short($xml,$referer,$agent,$boundary),$data,false,false,$alternativ_cookie,$proxy);
    if($r[0][1]["http_code"] == "0"){
      goto start;
    }
    preg_match('#(reCAPTCHA_site_key":"|data-sitekey=")(.*?)(")#is',$r[1],$recaptchav2);
    preg_match('#(invisible_reCAPTCHA_site_key":")(.*?)(")#is',$r[1],$invisible_recaptchav2);
    preg_match('#(hcaptcha_checkbox_site_key":"|h-captcha" data-sitekey=")(.*?)(")#is',$r[1],$hcaptcha);
    preg_match('#(render=|g-recaptcha btn btn-warning" data-sitekey=")(.*?)(")#is',$r[1],$recaptchav3);
    preg_match_all('#(submit_data" action="|<a href="|action="|href = ")(.*?)(")#is',$r[1],$url1);
    preg_match_all("#(url='|location.href ='|<a href='|var api =".n."  ')(.*?)(')#is",$r[1],$url2);
    preg_match_all("#window.open(.*?)'(.*?)'#is",$r[1],$url3);
    preg_match('#share(.*?)url=(.*?)"#is',$r[1],$url4);
    #preg_match('#skip_button" href="(.*?)"#is',$r[1],$url5);
    preg_match('#</noscript><title>(.*?)<#is',$r[1],$url5);
    preg_match('#url=(.*?)"#is',$r[1],$url6);
    preg_match('#var url="(.*?)"#is',$r[1],$url7);
    preg_match_all('#hidden" name="(.*?)" value="(.*?)"#is',$r[1],$token_csrf);
    preg_match_all('#(t|") name="(.*?)" type="hidden" value="(.*?)"#is',$r[1],$token_csrf2);
    preg_match('#(id="second">|varcountdownValue=|PleaseWait|class="timer"value="|class="timer">)([0-9]{1}|[0-9]{2})(;|"|<|s)#is',str_replace([n," "],"",$r[1]),$timer);
    preg_match_all('#(dirrectSiteCode = |ai_data_id=|ai_ajax_url=)"(.*?)(")#is',$r[1],$code_data_ajax);
    preg_match('#(sessionId: ")(.*?)(")#is',$r[1],$sessionId);
    preg_match('#(var Wtpsw = )(.*?)(;)#is',$r[1],$json_ajax);//die(print_r($r[0]));
    return [
        "status" => $r[0][1]["http_code"],
        "cookie" => set_cookie($r[0][2]),
        "data" => set_cookie($r[0][2], 1),
        "res" => $r[1],
        "hcaptcha" => $hcaptcha[2],
        "recaptchav2" => $recaptchav2[2],
        "recaptchav3" => $recaptchav3[2],
        "invisible_recaptchav2" => $invisible_recaptchav2[2],
        "token_csrf" => $token_csrf,
        "token_csrf2" => $token_csrf2,
        "timer" => $timer[2],
        "json" => json_decode($r[1]),
        "url" => $r[0][1]["redirect_url"],
        "url1" => $url1[2],
        "url2" => $url2[2],
        "url3" => $url3[2],
        "url4" => $url4[2],
        "url5" => $url5[1],
        "url6" => $url6[1],
        "url7" => $url7[1],
        "code_data_ajax" => $code_data_ajax[2],
        "sessionId" => $sessionId[2],
        "json_ajax" => json_decode($json_ajax[2])
    ];
}

function executeNode($r, $stripslashes = 0){
    preg_match_all('#<script>(.*?)</script>#is', $r,$out);
    for($i=0;$i<count($out[1]);$i++){
      if(strpos(ltrim($out[1][$i]), 'var _') == ""){
        continue;
        } elseif(strpos(ltrim($out[1][$i]), 'var _') == 0){
          $res[] = node_js(str_replace('eval', 'console.log', ltrim($out[1][$i])));
        }
    }
    if($res[0]){
      $html = html_entity_decode(str_replace($out[0],$res, $r));
      if($stripslashes){
        $x =  stripslashes($html);
      } else {
        $x = $html;
      }
      preg_match_all('#hidden" name="(.*?)" value="(.*?)"#is',$x,$token);
      preg_match_all('#<div wire:snapshot="(.*?)" wire:#is',$x,$snapshot);
      preg_match('#userToken":"(.*?)"#is',$x,$user_token);
      preg_match('#data-csrf="(.*?)"#is',$x,$csrf);
      preg_match("#location.replace[(]'(.*?)'#is",$x,$url);
      preg_match('#p (\d+/\d+)#is',$x,$step);
      preg_match("#countDown = (\d+)#is",$x,$tmr);
      if($step[1]){
        if(explode("/",$step[1])[0] == explode("/",$step[1])[1]){
        $final = 1;
        }
      }
      if($token[1][1]){
        $fix = [
          array_values(array_unique($token[0])),
          array_values(array_unique($token[1])),
          array_values(array_unique($token[2]))
          ];
      }
      return [
        "res" => $x,
        "token_csrf" => $fix,
        "url" => $url[1],
        "step" => $step[1],
        "final_step" => $final,
        "snapshot" => $snapshot[1],
        "user_token" => $user_token[1],
        "csrf" => $csrf[1],
        "timer" => $tmr[1]
        ];
    }
}


function node_js($code){
    $name = "nodejs".az_num(rand(5,20))."txt";
    file_put_contents($name, $code);
    $response = exec("node ".$name);
    unlink($name);
    if($response){
      return $response;
    } 
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
    if(preg_match("#(cryptoflare.cc|myhealths.icu|clk.st|urlsfly.me|wefly.me|shortsfly.me|linksfly.me)#is",$host)){
      
      $run = build($url);
      $r = base_short($url); #print_r($r);
      $link = $r["url"];
     /* if(preg_match("#(limit)#is",$link)){
        $referer = "wss://advertisingexcel.com";
      } else {
        $referer = $link;
      }*/
      if(preg_match("#(clk.st)#is",$host)){
        $referer = $link;
      } elseif(preg_match("#(cryptoflare.cc|myhealths.icu)#is",$host)){
        $url = str_replace("cryptoflare.cc","linkhives.com",str_replace("myhealths.icu","urlhives.com",$url));
        $run = str_replace(["clkclk./","flyinc./"],"",build($url));
        $referer = "https://mcrypto.club/";
      } else {
        $referer = "wss://advertisingexcel.com";
      }
      
      
      $r1 = base_short($run["inc"],0,0,$referer,1)["url"];#print_r($r1);
      if(preg_match("#(".$host.")#is",$r1)){
        return "refresh";
      }
      if($r1){
        L(90);
        print h."success";
        r();
        return $r1;
      }
    } elseif(preg_match("#(link1s.com|link1s.net|insfly.pw|earnify.pro|links.earnify.pro|shrinke.us|adrev.link|nx.chainfo.xyz|linksly.co|owllink.net|go.birdurls.com|go.owllink.net|mitly.us|go.illink.ne|coinpayz.link|oko.sh|go.mtraffics.com|go.megaurl.in|go.megafly.in|clik.pw|usalink.io|link.usalink.io|go.hatelink.me|ez4short.com|link.shrinkme.link|go.shorti.io|shorti.io|sheralinks.com|linksfly.link|link.adlink.click|url.beycoin.xyz|cryptosh.pro|aii.sh|link.vielink.top|bestlink.pro|ccurl.net|1shorten.com|adbull.me|tmearn.net|ser7.crazyblog.in|ex-foary.com|short.dash-free.com|shrinkme.info|shortplus.xyz|atglinks.com|link.short2url.in|link.revly.click|go.tinygo.co|go.wez.info|go.viewfr.com|cashlinko.com|linkjust.com|dz4link.com|panylink.com|panyflay.me|panyshort.link|droplink.co|oscut.space|oscut.fun|kyshort.xyz|go.revcut.net|go.urlcut.pro|go.faho.us|go.eazyurl.xyz|clockads.in|go.shtfly.com|go.bitss.sbs|dailytime.store|go.foxylinks.site|m.pkr.pw|linkjust.com|adbitfly.com|adshort.co|lollty.com|10short.com|short2money.com|shrinkme.org|teralinks.in|urlpay.in|linksly.pw|short.paylinks.cloud|ez4short.xyz|go.shortsme.in)#is",$host)){
        if(preg_match("#(link1s.com)#is",$host)){
          $referer = "https://google.com/";
        } elseif(preg_match("#(insfly.pw|oscut.space|oscut.fun|kyshort.xyz|clockads.in|linksly.pw)#is",$host)){
          $referer = "https://clk.wiki/";
        } elseif(preg_match("#(shrinke.us|shrinkme.info|shrinkme.org)#is",$host)){
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
          $referer = "https://insurance.uprwssp.org/";
        } elseif(preg_match("#(link.adlink.click)#is",$host)){
          $referer = "https://www.diudemy.com/";
        } elseif(preg_match("#(url.beycoin.xyz)#is",$host)){
          $referer = "https://adsluffa.online/";
        } elseif(preg_match("#(link.vielink.top)#is",$host)){
          $referer = "https://phongcachsao.vn/";
        } elseif(preg_match("#(bestlink.pro)#is",$host)){
          $referer = "https://go.linksly.co/";
        } elseif(preg_match("#(bestlink.pro)#is",$host)){
          $referer = "https://anhdep24.com/";
        } elseif(preg_match("#(adbull.me)#is",$host)){
          $referer = "https://deportealdia.live/";
        } elseif(preg_match("#(shortplus.xyz)#is",$host)){
          $referer = "https://1.newworldnew.com/";
        } elseif(preg_match("#(link.short2url.in)#is",$host)){
          $referer = "https://blog.mphealth.online/";
        } elseif(preg_match("#(earnify.pro|links.earnify.pro)#is",$host)){
          $referer = "https://go.linksfly.link/";
        } elseif(preg_match("#(go.shorti.io)#is",$host)){
          $referer = "https://healthmedic.xyz/";
        } elseif(preg_match("#(link.revly.click)#is",$host)){
          $referer = "https://coinsrev.com/";
        } elseif(preg_match("#(go.tinygo.co)#is",$host)){
          $referer = "https://wpcheap.net/";
        } elseif(preg_match("#(go.wez.info)#is",$host)){
          $referer = "https://aduzz.com/";
        } elseif(preg_match("#(go.viewfr.com)#is",$host)){
          $referer = "https://cryptfaucet.com/";
        } elseif(preg_match("#(cashlinko.com)#is",$host)){
          $referer = "https://techyuth.xyz/";
        } elseif(preg_match("#(linkjust.com)#is",$host)){
          $referer = "https://forexrw7.com/";
        } elseif(preg_match("#(dz4link.com)#is",$host)){
          $referer = "https://dz4link.com/";
        } elseif(preg_match("#(panylink.com)#is",$host)){
          $referer = "https://statepany.online/";
        } elseif(preg_match("#(panyflay.me)#is",$host)){
          $referer = "https://btcpany.com/";
        } elseif(preg_match("#(panyshort.link)#is",$host)){
          $referer = "https://panytourism.online/";
        } elseif(preg_match("#(droplink.co)#is",$host)){
          $referer = "https://yoshare.net/";
        } elseif(preg_match("#(go.bitss.sbs|go.shtfly.com|go.revcut.net.co|go.urlcut.pro|go.faho.us|go.eazyurl.xyz)#is",$host)){
          $referer = "https://away.vk.com/";
        } elseif(preg_match("#(linkjust.com)#is",$host)){
          $referer = "https://forexrw7.com/";
        } elseif(preg_match("#(adbitfly.com)#is",$host)){
          $referer = "https://coinsward.com/";
        } elseif(preg_match("#(adshort.co)#is",$host)){
          $referer = "https://techgeek.digital/";
        } elseif(preg_match("#(lollty.com)#is",$host)){
          $referer = "https://mamahawa.com/";
        } elseif(preg_match("#(short2money.com)#is",$host)){
          $referer = "https://lollty.pro/";
        } elseif(preg_match("#(10short.com)#is",$host)){
          $referer = "https://10short.info/";
        } elseif(preg_match("#(sox.link)#is",$host)){
          $referer = "https://coincroco.com/";
        } elseif(preg_match("#(teralinks.in)#is",$host)){
          $referer = "https://daddy.webseriesreel.in/";
        } elseif(preg_match("#(urlpay.in)#is",$host)){
          $referer = "https://daddy.helpowi.com/";
        } elseif(preg_match("#(ez4short.xyz)#is",$host)){
          $referer = "https://healthynepal.in/";
        } else {
          $referer = 0;
        }
        if(preg_match("#(dz4link.com|Nx.chainfo.xyz|go.illink.net|go.birdurls.com|go.owllink.net|go.illink.net)#is",$host)){
          $cloud = 1;
        } else {
          $cloud = 0;
        }
        if(preg_match("#(sox.link)#is",$host)){
          $proxy = 1;
        } else {
          $proxy = 0;
        }
        $url = str_replace("go.shortsme.in","shortsme.in",str_replace("short.paylinks.cloud","paylinks.cloud",str_replace("clik.pw","pwrpa.cc/go",str_replace("urlpay.in","go.urlpay.in",str_replace("teralinks.in","go.teralinks.in",str_replace("short2money.com","forextrader.site/NewLink",str_replace("lollty.com","forextrader.site/SkipLink",str_replace("adbitfly.com/short","adbitfly.com",str_replace("m.pkr.pw","jameeltips.us/blog",str_replace("go.foxylinks.site","link.foxylinks.site",str_replace("go.bitss.sbs","bitss.sbs",str_replace("go.shtfly.com","shtfly.com",str_replace("go.eazyurl.xyz","eazyurl.xyz",str_replace("go.faho.us","faho.us",str_replace("go.urlcut.pro","urlcut.pro",str_replace("go.revcut.net","revcut.net",str_replace("kyshort.xyz/go","kyshort.xyz",str_replace("go.viewfr.com","thanks.viewfr.com",str_replace("go.wez.info","thanks.wez.info",str_replace("go.tinygo.co","thanks.tinygo.co",str_replace("links.earnify.pro","earnify.pro",str_replace("link.revly.click","en.revly.click",str_replace("link.short2url.in","techyuth.xyz/blog",str_replace("short.dash-free.com","dash-free.com",str_replace("link.vielink.top","short.vielink.top",str_replace("usalink.io","link.theconomy.me",str_replace("url.beycoin.xyz/short","url.beycoin.xyz",str_replace("link.adlink.click","blog.adlink.click",str_replace("linksfly.link","go.linksfly.link",str_replace(["go.shorti.io","shorti.io"],"blog.financeandinsurance.xyz",str_replace("link.shrinkme.link","blog.shrinkme.link",str_replace("go.hatelink.me","g0.hatelink.me",str_replace("linksly.co","go.linksly.co",str_replace("link.usalink.io","link.theconomy.me",str_replace("go.megafly.in","get.megafly.in",str_replace("go.megaurl.in","get.megaurl.in",str_replace("go.mtraffics.com","get.mtraffics.com",str_replace("go.illink.net","illink.net",str_replace("go.owllink.net","owllink.net",str_replace("go.birdurls.com","birdurls.com",str_replace("nx.chainfo.xyz","go.bitcosite.com",str_replace(["shrinkme.org","shrinkme.info"],"en.shrinke.me",str_replace("shrinke.us","en.shrinke.me",$url)))))))))))))))))))))))))))))))))))))))))));
        $run = build($url);#die(print_r($run));
        $r = base_short($run["links"],0,0,$referer,$cloud);
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];#die(print_r($r));
        
        if(preg_match("#(verify/[?]/)#is",$r["url"])){
          $verify = str_replace("http:","https:",$r["url"]);
          $r = base_short($verify,0,0,$verify,0);
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][3])[0] == "2"){
          $data = data_post($t, "five");#die(urldecode($data));
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }#die(print_r($r));
        if(explode('"',$t[2][3])[0] == "3"){
          $data = data_post($t, "five");
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][3])[0] == "4"){
          $data = data_post($t, "five");
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        if(explode('"',$t[2][3])[0] == "5"){
          $data = data_post($t, "five");
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][3])[0] == "6"){
          $data = data_post($t, "five");
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        if(explode('"',$t[2][3])[0] == "7"){
          $data = data_post($t, "five");
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][3])[0] == "8"){
          $data = data_post($t, "five");
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        if(explode('"',$t[2][3])[0] == "9"){
          $data = data_post($t, "five");
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if($t[1][2] == "f_n"){
          $method = "recaptchav2";
          $cap = multibot($method,$r[$method],$run["links"]);
          $rsp = array("g-recaptcha-response" => $cap);
          $data = data_post($t, "four", $rsp);
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if($t[1][2] == "ref"){
          $method = "recaptchav2";
          $cap = multibot($method,$r[$method],$run["links"]);
          $rsp = array("g-recaptcha-response" => $cap);
         $data = data_post($t, "five", $rsp);
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[1][2])[4] == "f_n"){
          $method = "recaptchav2";
          $cap = multibot($method,$r[$method],$run["links"]);
          $rsp = array("g-recaptcha-response" => $cap);
          $data = data_post($t, "four2", $rsp);
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }#die(print_r($r));
        if(explode('"',$t[2][2])[0] == "captcha"){
        $method = "recaptchav2";
        $cap = multibot($method,$r[$method],$run["links"]);
        $rsp = array("g-recaptcha-response" => $cap);
        $data = data_post($t, "five", $rsp);
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
          $data = data_post($t, "four");
          L($coundown);
          if(preg_match("#(lollty.com)#is",$host)){
            $run["go"][0] = str_replace("forextrader.site","forextrader.site/SkipLink",$run["go"][0]);
          } elseif(preg_match("#(short2money.com)#is",$host)){
            $run["go"][0] = str_replace("forextrader.site","forextrader.site/NewLink",$run["go"][0]);
          }
          $r1 = base_short(str_replace("pwrpa.cc","pwrpa.cc/go",str_replace("jameeltips.us","jameeltips.us/blog",str_replace("techyuth.xyz","techyuth.xyz/blog",$run["go"][0]))),1,$data,0,$cloud,join('',$cookie))["json"];
          if($r1->status == "success"){
            print h.$r1->status;
            r();
            unset($cookie);
            return $r1->url;
          }
        }
    } elseif(preg_match("#(tii.la|tei.ai)#is",$host)){
      $url = str_replace("tei.ai", "tii.la", $url);
      $run = build($url);
      $r = base_short($run["links"]);
      $t = $r["token_csrf"];
      $cookie[] = $r["cookie"];
      $data = data_post($t, "three");
        $r1 = base_short($run["links"],"",$data,0,join('',$cookie));
        if($r1["timer"] or $r1["timer"] == 0){
          L($coundown);
          $t = $r1["token_csrf"];
          $cookie[] = $r1["cookie"];
          $data = data_post($t, "two");
            $r2 = base_short($run["go"][0],1,$data,0,0,join('',$cookie))["json"];
            if($r2->status == "success"){
              print h.$r2->status;
              r();
              unset($cookie);
              return $r2->url;
            }
        }
    } elseif(preg_match("#(try2link.com)#is",$host)){
      $run = build($url);
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $referer[] = "https://trip.businessnews-nigeria.com/";
      $referer[] = "https://forexit.online/";
      $referer[] = "https://mobi2c.com/";
      $referer[] = "https://te-it.com/";
      $referer[] = "https://world2our.com/";
      $referer[] = "https://hightrip.net/";
      $referer[] = "https://healthy4pepole.com/";
      $referer[] = "https://to-travel.net/";
      for($x=0;$x<count($referer);$x++){
        $r = base_short($url,0,0,$referer[$x],0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        if(explode('"',$t[1][2])[0] == "ad_form_data"){
          L($coundown);
          $data = data_post($t, "four");
          $r1 = base_short($run["go"][0],1,$data,$url,0,join('',$cookie))["json"];
          if($r1->status == "success"){
            h.$r1->status;
            r();
            unset($cookie);
            return $r1->url;
          }
        }
        sleep(2);
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
      $cookie[] = $r1["cookie"];
      $t = $r1["token_csrf"];
      if($t[2][2] == "continue"){
        $data = data_post($t, "five");
        $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
        $cookie[] = $r1["cookie"];
        $t = $r1["token_csrf"];
        if($t[2][2] == "continue"){
          $data = data_post($t, "five");
          $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
          $cookie[] = $r1["cookie"];
          $t = $r1["token_csrf"];
          if($t[2][2] == "continue"){
            $data = data_post($t, "five");
            $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
            $cookie[] = $r1["cookie"];
            $t = $r1["token_csrf"];
            if($t[2][2] == "continue"){
              $data = data_post($t, "five");
              $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
              $cookie[] = $r1["cookie"];
              $t = $r1["token_csrf"];
              if($t[2][2] == "continue"){
                $data = data_post($t, "five");
                $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                $cookie[] = $r1["cookie"];
                $t = $r1["token_csrf"];
                if($t[2][2] == "continue"){
                  $data = data_post($t, "five");
                  $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                  $cookie[] = $r1["cookie"];
                  $t = $r1["token_csrf"];
                  if($t[2][2] == "continue"){
                    $data = data_post($t, "five");
                    $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                    $cookie[] = $r1["cookie"];
                    $t = $r1["token_csrf"];
                  }
                }
              }
            }
          }
        }
        if(!$t[0][0]){
          return "refresh";
          }
          if($t[2][2] == "captcha"){
            $method = "recaptchav2";
            $cap = multibot($method,$r1[$method],$url);
            $rsp = array("g-recaptcha-response" => $cap);
            $data = data_post($t, "five", $rsp);
            $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
            $cookie[] = $r1["cookie"];
            $t = $r1["token_csrf"];
          }
          if($t[1][2] == "ad_form_data"){
            L($coundown);
            $data = data_post($t, "four");
            $r2 = base_short(build($url)["go"][2],1,$data,$url,0,join('',$cookie))["json"];
          }
          if($r2->status == "success"){
           print h.$r2->status;
           r();
           unset($cookie);
           return $r2->url;
          }
      }
    } elseif(preg_match("#(destyy.com|festyy.com|gestyy.com|hestyy.com|ceesty.com|corneey.com)#is",$host)){
      while(true){
        $r = base_short($url,0,$url);
        $cookie[] = $r["cookie"];
        $link = $r["url"];
        if(preg_match("#(freeze)#is",$link)){
          $r = base_short($link,0,0,0,0,join('',$cookie));
          $cookie[] = $r["cookie"];
          L($coundown);
          $r = base_short($url,0,0,$link,0,join('',$cookie));
          $cookie[] = $r["cookie"]; 
        }
        if(preg_match("#(sessio)#is",$link)){
          $r = base_short($link,0,0,0,0,join('',$cookie));
          $cookie[] = $r["cookie"];
        }
        $sessionId = $r["sessionId"];
        if(!$sessionId){
          unset($cookie);
          continue;
        }
        L($coundown);
        $r1 = base_short("https://clkmein.com/shortest-url/end-adsession?adSessionId=".$sessionId."&adbd=0&callback=reqwest_".time(),0,0,$url,0,join('',$cookie))["res"];
        if(ex('":"','"',2,$r1) == "ok"){
          print h."succses";
          r();
          return str_replace("\/","/",ex('":"','"',1,$r1));
        }
      }
    } elseif(preg_match("#(exe.io)#is",$host)){
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $url = $r["url"];
      if(!parse_url($url)["scheme"]){
        return "refresh";
      }
      $r = base_short($url,0,0,$url,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $data = data_post($t, "five2");
      $r = base_short($url,0,$data,$url,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $method = "invisible_recaptchav2";
      $cap = multibot($method,$r[$method],$url);
      $rsp = array("g-recaptcha-response" => $cap);
      $data = data_post($t, "five", $rsp);
      $r = base_short($url,0,$data,$url,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];#die(print_r($r));
      if(explode('"',$t[1][2])[0] == "ad_form_data"){
        L($coundown);
        $data = data_post($t, "four");
        $r1 = base_short(build($url)["go"][0],1,$data,0,0,join('',$cookie))["json"];
        if($r1->status == "success"){
          h.$r1->status;
          r();
          unset($cookie);
          return $r1->url;
        }
      }
    } elseif(preg_match("#(cuty.io)#is",$host)){
      $r = base_short($url); #die(print_r($r));
      $cookie[] = $r["cookie"];
      $url = $r["url"];
      if($r["url"]){
        $r = base_short($url,0,0,0,0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        $data = data_post($t, "null");
        $r = base_short($url,0,$data,0,0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        $method = "recaptchav2";
        $cap = multibot($method,$r[$method],$url);
        $rsp = array("g-recaptcha-response" => $cap);
        $data = data_post($t, "null", $rsp);
        $r = base_short($url,0,$data,0,0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        if(explode('"',$t[1][1])[0] == "data"){
          L($coundown);
          $data = data_post($t, "two");
          $r1 = base_short(build($url)["go"][1],1,$data,0,0,join('',$cookie));
          if($r1["url"]){
            print h."success";
            r();
            unset($cookie);
            return $r1["url"];
          }
        }
      }
    } elseif(preg_match("#(oii.io|fc-lc.xyz)#is",$host)){
      $run = build($url);
      $r = base_short($run["links"]);
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      if($t[1][2] == "f_n"){
        $method = "invisible_recaptchav2";
        $cap = multibot($method,$r[$method],$run["links"]);
        $rsp = array("g-recaptcha-response" => $cap);
        $data = data_post($t, "four", $rsp);
        $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
      }
      if($t[1][2] == "ref"){
        $method = "invisible_recaptchav2";
        $cap = multibot($method,$r[$method],$run["links"]);
        $rsp = array("g-recaptcha-response" => $cap);
        $data = data_post($t, "five", $rsp);
        $r = base_short($run["links"],0,$data,$run["links"],0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
      }
      $link = $r["url1"][0];
      if(preg_match("#(http)#is",$link)){
        if(explode('"',$t[1][4])[0] == "user_faucet"){
          $data = data_post($t, "four");
          $r = base_short($link,1,$data,0,0,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        } else {
          $data = data_post($t, "three");
          $r = base_short($link,1,$data,0,0,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        if($t[1][1] == "ad_form_data"){
          L($coundown+10);
          $data = data_post($t, "six");
          $r1 = base_short(str_replace("fc-lc.xyz","fc.lc",str_replace("oii.io/links/go","oii.io/links/go1",build($url)["go"][0])),1,$data,$link,0,join('',$cookie))["json"];
          if(preg_match("#(https)#is",$r1->url)){
            h."success";
            r();
            unset($cookie);
            return $r1->url;
          }
        }
      }
    } elseif(preg_match("#(doshrink.com)#is",$host)){
      $run = build($url);
      $r = base_short($run["links"]);
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $url = $r["url1"][0];
      if(!parse_url($url)["scheme"]){
        return "refresh";
      }
      $data = data_post($t, "null");
      $r = base_short($url, 1, $data, $run["links"], 0, join('',$cookie));
      $cookie[] = $r["cookie"];
      $sitekey = $r["data"]["rcap"];
      $cookie[] = $r["cookie"];
      $r = base_short("https://kiktu.com/wp-admin/admin-ajax.php", 1, "action=generate2", "https://kiktu.com/", 0, join('',$cookie));
      $cookie[] = $r["cookie"];
      if(!parse_url($r["url7"])["scheme"]){
        return "refresh";
      }
      $r = base_short($r["url7"]);
      $cap = multibot("recaptchav2",$sitekey,"https://kiktu.com/");
      $data = http_build_query([
        "wgurl" => $t[2][0],
        "wgr" => $sitekey,
        "wgp" => 1,
        "wgcsrf" => $r["res"],
        "wgcaptcharesponse" => $cap
        ]);
        $r = base_short("https://kiktu.com/recaptcha", 0, $data, "https://kiktu.com/", 1, join('',$cookie));
        $cookie[] = $r["cookie"];
        $newcsrf = $r["data"]["newcsrf"];
        $slug = $r["data"]["slug"];
        $r = base_short("https://api.bigdatacloud.net/data/client-ip");
        $ip_n = "websgrid=".$r["json"]->ipNumeric.";";
        $data = json_encode(["ver" => $r["json"]->ipNumeric]);
        $verify = base_short("https://kiktu.com/verify", 1, $data, 0, 0, join('',$cookie));
        $cookie[] = $verify["cookie"];
        $r = base_short($run["links"]."?".http_build_query(["data" => $slug,"secret" => $verify["json"]->response,"wgcsrf" => $newcsrf]), 0 ,0 ,"https://kiktu.com/", 0, $ip_n.join('',$cookie)); 
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        if(explode('"',$t[1][2])[0] == "ad_form_data"){
          L($coundown);
          $data = data_post($t, "four");
          $r1 = base_short($run["go"][0],1,$data,0,0,join('',$cookie))["json"];
          if($r1->status == "success"){
            h.$r1->status;
            r();
            unset($cookie);
            return $r1->url;
          }
        }
    } elseif(preg_match("#(clk.asia)#is",$host)){
      $url = str_replace("clk.asia","clk.wiki",$url);
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $url1 = $url."?".http_build_query([$t[1][0] => $t[2][0]]);
      $r = base_short($url1,0,0,0,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      if($t[1][0] == "token"){
        $method = "hcaptcha";
        $cap = multibot($method,$r[$method],$url1);
        $rsp = array("h-recaptcha-response" => $cap);
        $data = data_post($t, "six", $rsp);
        $r = base_short($url1,0,$data,0,0,join('',$cookie));
      }
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      if($t[1][1] == "ad_form_data"){
        L($coundown);
        $data = data_post($t, "two");
        $r1 = base_short(build($url)["go"][0],1,$data,0,0,join('',$cookie))["json"];
        if($r1->status == "success"){
        h.$r1->status;
        r();
        unset($cookie);
        return $r1->url;
        }
      }
    } elseif(preg_match("#(ctr.sh|easycut.io)#is",$host)){
      while(true){
        if(preg_match("#(ctr.sh)#is",$host)){
          $re = "https://sinonimos.de/?url8j=";
        } elseif(preg_match("#(easycut.io)#is",$host)){
          $re = "https://quesignifi.ca/?url8j=";
        }
        $r = base_short($re.$url);//die(print_r($r));
        $cookie[] = $r["cookie"];
        $url1 = $r["url1"][0];
        if(!parse_url($url1)["scheme"]){
          unset($cookie);
          continue;
        }
        $r = base_short($url1,0,0,$url1,0,join('',$cookie));
        $cookie[] = $r["cookie"];
        if(preg_match("#(ctr.sh)#is",$host)){
          $method = "recaptchav3";
          $cap = recaptchav3($r[$method],$url1);
        } elseif(preg_match("#(easycut.io)#is",$host)){
          $method = "recaptchav2";
        $cap = multibot($method,$r[$method],$url1);
        }
        $data = http_build_query([
          "g-recaptcha-response" => $cap,
          "validator" => "true"
          ]);
          $r = base_short($url1,1,$data,$url1,0,join('',$cookie));
          $cookie[] = $r["cookie"];
          $url2 = $r["url"];
          if(!parse_url($url2)["scheme"]){
            unset($cookie);
            continue;
          }
          $data = http_build_query([
            "no-recaptcha-noresponse" => "true",
            "validator" => "true"
            ]);
            $r = base_short($url2,1,$data,$url2,0,join('',$cookie));
            $cookie[] = $r["cookie"];
            $url3 = $r["url"];
            if(!parse_url($url3)["scheme"]){
              unset($cookie);
              continue;
            }
            $r = base_short($url3,0,$data,$url3,0,join('',$cookie));
            $cookie[] = $r["cookie"];
            $final = $r["url6"];
            if(!$final){
              $url4 = $r["url"];
              $r = base_short($url4,0,$data,$url4,0,join('',$cookie));
              $cookie[] = $r["cookie"];
              $final = $r["url6"];
            }
            $r = base_short(str_replace("&tk","?token",$final),0,0,0,0,join('',$cookie));
            $cookie[] = $r["cookie"];
            $t = $r["token_csrf"];
            if(explode('"',$t[1][2])[0] == "ad_form_data"){
              $data = data_post($t, "four");
              L($coundown);
              $r1 = base_short(build($final)["go"][0],1,$data,0,0,join('',$cookie))["json"];
              if($r1->status == "success"){
                print h.$r1->status;
                r();
                unset($cookie);
                return $r1->url;
              }
            }
      }
    } elseif(preg_match("#(ouo.io)#is",$host)){
      $url = str_replace("ouo.io","ouo.press",$url);
      $run = build($url);
      $r = base_short($run["links"]);
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf2"];
      $method = "recaptchav3";
      if($r[$method]){
        $cap = recaptchav3($r[$method],$run["links"]);
        $data = http_build_query([
          explode('"',$t[2][0])[0] => $t[3][0],
          explode('"',$t[2][1])[0] => $cap,
          "v-token" => "bx"
          ]);
          L($coundown);
          $r1 = base_short($run["go"][4],0,$data,$run["links"],0,join('',$cookie));
          if($r1["url"]){
            print h."success";
            r();
            unset($cookie);
            return $r1["url"];
          }
      }
    } elseif(preg_match("#(earnow.online)#is",$host)){
      while(true){
      $run = build($url);
      $r = base_short($url);
      unset($cookie);
      $link = $r["url"];
      if(!parse_url($link)["scheme"]){
        unset($cookie);
        continue;
      }
      $cookie[] = $r["cookie"];
      $r = base_short($link, 0, 0, $url, 0, join('',$cookie));

      $link = $r["url"];
      if(!parse_url($link)["scheme"]){
        unset($cookie);
        continue;
      }
      $cookie[] = $r["cookie"];
      
      $r = base_short($link, 0, 0, $link, 0, join('',$cookie));
      $link = str_replace("http:","https:",$r["url5"]);
      if(!parse_url($link)["scheme"]){
        unset($cookie);
        continue;
      }
      $cookie[] = $r["cookie"];
     
      $r = base_short($link, 0, 0, $link, 0, join('',$cookie));
      $link = $r["url"];
     if(!parse_url($link)["scheme"]){
        unset($cookie);
        continue;
      }
     
      $cookie[] = $r["cookie"];

      $r = base_short($link, 0, 0, $link, 0, join('',$cookie));
      
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $method = "recaptchav2";
      $cap = multibot($method,$r[$method],$link);
      if(!$cap){
        unset($cookie);
        continue;
      }
      $rsp = array("g-recaptcha-response" => $cap);
      $data = data_post($t, "null", $rsp);
      $r = base_short($link, 0, $data, $link, 0, join('',$cookie));
      
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      L(25);
      $data = data_post($t, "null");
      $r = base_short($link, 0, $data, $link, 0, join('',$cookie));
      
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      L(25);
      $url = $link;
      $data = data_post($t, "null");
      $r = base_short($link, 1, $data, 0, 0, join('',$cookie));
      $link = $r["url"];
     #die(print_r($r));
      if(preg_match("#key#is",$link)){
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        break;
      }
      
      
      
      }
      
      
      
      
      while(true){
      $r = base_short($link, 0, 0, $url, 0, join('',$cookie));
      $link = $r["url"];
      if(!parse_url($link)["scheme"]){
        continue;
      }
      $cookie1[] = $r["cookie"];
      $r = base_short($link, 0, 0, $link, 0, join('',$cookie1));
      
      $link = str_replace("http:","https:",$r["url5"]);
      if(!parse_url($link)["scheme"]){
        unset($cookie1);
        continue;
      }
      $cookie1[] = $r["cookie"];
     
      $r = base_short($link, 0, 0, $link, 0, join('',$cookie1));
      
      $link = $r["url"];
     if(!parse_url($link)["scheme"]){
        unset($cookie1);
        continue;
      }
     
      $cookie1[] = $r["cookie"];
      $data = data_post($t, "null");
      $r = base_short($link, 0, $link, $link, 0, join('',$cookie1));
      $cookie1[] = $r["cookie"];


$method = "recaptchav2";
      $cap = multibot($method,$r[$method],$link);
      if(!$cap){
        unset($cookie);
        continue;
      }
      $rsp = array("g-recaptcha-response" => $cap);
      $data = data_post($t, "null", $rsp);
      $r = base_short($link, 0, $data, $link, 0, join('',$cookie));

      
      die(print_r($r));
      }
      
      
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf2"];
      $method = "recaptchav3";
      if($r[$method]){
        $cap = recaptchav3($r[$method],$run["links"]);
        $data = http_build_query([
          explode('"',$t[2][0])[0] => $t[3][0],
          explode('"',$t[2][1])[0] => $cap,
          "v-token" => "bx"
          ]);
          L($coundown);
          $r1 = base_short($run["go"][4],0,$data,$run["links"],0,join('',$cookie));
          if($r1["url"]){
            print h."success";
            r();
            unset($cookie);
            return $r1["url"];
          }
      }
    } elseif(preg_match("#(rsshort.com)#is",$host)){
      $api = save("scraperapi");
      #$scrape = scrape_valid();
      $r = base_short("http://api.scraperapi.com?api_key=".$api."&keep_headers=true&url=".$url);
      #die(print_r($r));
      $link = $r["url2"][0];
      if(!$link){
        return "refresh";
      }
      $cookie[] = $r["cookie"];
      while(true){
        $r = base_short($link,0,0,$link,0,join('',$cookie));//die(print_r($r));
        if($r["url"]){
          print h."success";
          r();
          return $r["url"];
        }
        $link1 = $r["url1"][0];
        if(!$link1){
          return "refresh";
        }
        $cookie[] = $r["cookie"];
        $cookie[] = array_reverse($cookie);
        $node = executeNode($r["res"],1);#die(print_r($node));
        $rs = "https://".parse_url($link1)["host"]."/";
        if($node["token_csrf"][1][1] == "_iconcaptcha-token"){
          $xxx = rand(200,250);
          $yyy = rand(33,35);
          $rsp = array("ic-hf-se" => $xxx.",".$yyy.",320","ic-hf-id" => 1,"ic-hf-hp" => "");
          $data_post = data_post($node["token_csrf"], "two", $rsp);
          parse_str($data_post, $ic);
          $eol = "\n";
          $boundary = "------WebKitFormBoundary";
          $content = 'Content-Disposition: form-data; name="payload"';
          $code = az_num(16);
          $data = '';
          $data .= $boundary.$code.$eol;
          $data .= $content.$eol.$eol;
          $data .= base64_encode(json_encode(["i" => 1, "a" => 1, "t" => "light", "tk" => $ic["_iconcaptcha-token"], "ts" => round(time() * 1000)])).$eol;
          $data .= $boundary.$code.'--';
          $r = base_short($rs."iconcaptchar/captcharequest",1,$data,$rs,0,join('',$cookie),$code);
          if($r["status"] >= 400){
            continue;
          }
          $r = base_short($rs."iconcaptchar/captcharequest?payload=".base64_encode(json_encode(["i" => 1, "tk" => $ic["_iconcaptcha-token"], "ts" => round(time() * 1000)])),0,0,$rs,0,join('',$cookie));
          if($r["status"] >= 400 or !$r["res"]){
            continue;
          }
          $eol = "\n";
          $boundary = "------WebKitFormBoundary";
          $content = 'Content-Disposition: form-data; name="payload"';
          $code = az_num(16);
          $data = '';
          $data .= $boundary.$code.$eol;
          $data .= $content.$eol.$eol;
          $data .= base64_encode(json_encode(["i" => 1, "x" => $xxx, "y" => $yyy, "w" => 320, "a" => 2, "tk" => $ic["_iconcaptcha-token"], "ts" => round(time() * 1000)])).$eol;
          $data .= $boundary.$code.'--';
          $r = base_short($rs."iconcaptchar/captcharequest",1,$data,$rs,0,join('',$cookie),$code);
          if($r["status"] >= 400){
            continue;
          }
        } else {
          $data_post = $data_post = data_post($node["token_csrf"], "one");
        }
        $r = base_short($link,0,$data_post,$rs,0,join('',$cookie));
        $url = $r["url"];
        if(!$url){
          continue;
        }
        $cookie[] = $r["cookie"];
        continue;
      }
    } elseif(preg_match("#(clks.pro)#is",$host)){
      $run = build($url);
      $scrape = scrape_valid();
      $r = base_short($run["inc"],0,0,"https://mdn.lol/",0,0,0,$scrape);
     # die(print_r($r));
      if(preg_match("#(-cut|final)#is",$r["url"])){
        print "limit";
        return "refresh";
      }
      if($r["url"]){
        L(90);
        print h."success";
        r();
        parse_str(explode("?",$r["url"])[1], $get);
        if($get["get"]){
          return base64_decode($get["get"]);
        } else {
          return $r["url"];
        }
      }
    } elseif(preg_match("#(urlcorner.com)#is",$host)){
      $r = base_short($url);
      $referer = "https://leaveadvice.com/";
      $node = executeNode($r["res"]);
      $link = $node["url"];
      if(!parse_url($link)["scheme"]){
        return "refresh";
      }
      
      
      $cookie[] = $r["cookie"];
      parse_str(str_replace("?","&",$link), $tk);
      $data = http_build_query(["safe_link" => $tk["tk"], "wpcls" => parse_url($link)["host"]]);
      $r = base_short($referer."conf1-srt",1,$data,$referer,0,join('',$cookie));
      
      
      $link = $r["res"];
      if(!parse_url($link)["scheme"]){
        return "refresh";
      }
      $cookie[] = $r["cookie"];
      parse_str(str_replace("?","&",$link), $tk);
      $data = http_build_query(["safe_link" => $tk["tk"], "wpcls" => parse_url($link)["host"]]);
      $r = base_short($referer."conf2-srt",1,$data,$referer,0,join('',$cookie));
      
      
      $link = $r["res"];
      if(!parse_url($link)["scheme"]){
        return "refresh";
      }
      $cookie[] = $r["cookie"];
      $r = base_short($link,0,0,$referer,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      parse_str(str_replace("?","&",$link), $tk);
      
      $method = "hcaptcha";
          $cap = multibot($method,"c328fbe1-085c-4246-a274-6a11b4ae4cd7",$referer);
      $data = http_build_query(["safe_link" => $tk["tk"], 
      $method => $cap, "abv" => false, "adfl" => false
      
      ]);
      $r = base_short($referer."conf3-srt",1,$data,$referer,0,join('',$cookie));
      L(60);
      #die(print_r($r));
      $link = $r["res"];
      if(!parse_url($link)["scheme"]){
        return "refresh";
      }
      $cookie[] = $r["cookie"];
      //$cookie[] = array_reverse($cookie);
      $r = base_short($link,0,0,$referer,0,join('',$cookie));
      
      #$node = executeNode($r["res"]);
      print_r($r);
      

 
      #die(print_r($node));
    } elseif(preg_match("#(mgnet.xyz|1bit.space)#is",$host)){
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $link = explode("https:",parse_url($r["url"])["path"])[1];
      if($link){
        $r1 = base_short($r["url"],0,0,$url,0,join('',$cookie));
        if($r1["url"]){
          base_short($r1["url"],0,0,$url,0,join('',$cookie));
          print h."success";
          r();
          L(90);
          return "https:".$link;
        }
      } else {
        return "refresh";
      }
    } else {
      return "refresh";
    }
}



function data_post($t, $type, $array = 0){
  if($type ==  "null"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0]
      );
  } elseif($type ==  "one"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1]
      );
  } elseif($type ==  "two"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1],
      explode('"',$t[1][2])[0] => $t[2][2]
      );
  } elseif($type ==  "three"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1],
      explode('"',$t[1][2])[0] => $t[2][2],
      explode('"',$t[1][3])[0] => $t[2][3]
      );
  } elseif($type ==  "four"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1],
      explode('"',$t[1][2])[0] => $t[2][2],
      explode('"',$t[1][3])[0] => $t[2][3],
      explode('"',$t[1][4])[0] => $t[2][4]
      );
  } elseif($type ==  "four2"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1],
      explode('"',$t[1][2])[0] => "",
      explode('"',$t[1][2])[4] => $t[2][2],
      explode('"',$t[1][3])[0] => $t[2][3],
      explode('"',$t[1][4])[0] => $t[2][4]
      );
  } elseif($type ==  "five"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1],
      explode('"',$t[1][2])[0] => $t[2][2],
      explode('"',$t[1][3])[0] => $t[2][3],
      explode('"',$t[1][4])[0] => $t[2][4],
      explode('"',$t[1][5])[0] => $t[2][5]
      );
  } elseif($type ==  "five2"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1],
      explode('"',$t[1][2])[0] => "",
      explode('"',$t[1][2])[4] => $t[2][2],    
      explode('"',$t[1][3])[0] => $t[2][3],
      explode('"',$t[1][4])[0] => $t[2][4],
      explode('"',$t[1][5])[0] => $t[2][5]
      );
  } elseif($type ==  "six"){
    $data = array(
      explode('"',$t[1][0])[0] => $t[2][0],
      explode('"',$t[1][1])[0] => $t[2][1],
      explode('"',$t[1][2])[0] => $t[2][2],
      explode('"',$t[1][3])[0] => $t[2][3],
      explode('"',$t[1][4])[0] => $t[2][4],
      explode('"',$t[1][5])[0] => $t[2][5],
      explode('"',$t[1][6])[0] => $t[2][6],
      );
  }
  if($array){
    $build = http_build_query(array_merge($data, $array));
  } else {
    $build = http_build_query($data);
  }
  return str_replace("deleted", "",$build);
}





function config(){
  $config[] = "Linksfly";
  $config[] = "URLHives";
  $config[] = "Linkfly";
  $config[] = "Linksfly.me";
  $config[] = "Urlsfly";
  $config[] = "Urlsfly.me";
  $config[] = "Shortfly";
  $config[] = "Shortsfly";
  $config[] = "Shortsfly.me";
  $config[] = "Wefly";
  $config[] = "Wefly.me";
  $config[] = "TryLink";
  $config[] = "Try2link";
  $config[] = "try2link.com";
  $config[] = "shorti";
  $config[] = "Shorti.io";
  $config[] = "Owllink";
  $config[] = "owllink.net";
  $config[] = "owllink-net";
  $config[] = "illink";
  $config[] = "illink.net";
  $config[] = "Bird";
  $config[] = "BirdURLs";
  $config[] = "Birdsurl";
  $config[] = "birdurls.com";
  $config[] = "birdsurls.com";
  $config[] = "Link1s";
  $config[] = "link1s.com";
  $config[] = "ShrinkEarn";
  $config[] = "shrinkearn-com";
  $config[] = "shrinkearn.com";
  $config[] = "SheraLinks";
  $config[] = "AdLink";
  $config[] = "adlink.click";
  $config[] = "LinksFly.link";
  $config[] = "LinksFlylink";
  $config[] = "Lksfly";
  $config[] = "LFly";
  #$config[] = "Chaininfo";
  $config[] = "Clkst";
  $config[] = "Clk.st";
  $config[] = "Insfly";
  $config[] = "insfly.pw";
  $config[] = "Adrevlinks";
  $config[] = "Ez4Short";
  $config[] = "ez4shortx";
  $config[] = "Shrinkme";
  $config[] = "linksly-co";
  $config[] = "linksly.co";
  $config[] = "Linksly";
  $config[] = "Lsly";
  $config[] = "Shortest";
  $config[] = "Hatelink";
  $config[] = "Mitly";
  $config[] = "mitlyus";
  $config[] = "mitly.us";
  $config[] = "clkSH";
  $config[] = "clk";
  $config[] = "Clk-sh";
  $config[] = "clk.sh";
  $config[] = "Cut-Urls";
  $config[] = "Exe";
  $config[] = "exe-io";
  $config[] = "exeio";
  $config[] = "Exe.io";
  $config[] = "CPLink";
  $config[] = "Mtraffics";
  $config[] = "Megaurl";
  $config[] = "Megaurl.in";
  $config[] = "megaurl.io";
  $config[] = "Megafly";
  $config[] = "Megafly.in";
  $config[] = "Powclick";
  $config[] = "Earnify";
  $config[] = "Earnifypro";
  $config[] = "cuty-io";
  $config[] = "Cuty";
  $config[] = "Cuti.io";
  $config[] = "cuty.io";
  $config[] = "Usalink";
  $config[] = "usalink-io";
  $config[] = "usalink.io";
  $config[] = "Shrinkme.io";
  $config[] = "shrinkme-io";
  $config[] = "ShrinkmeLink";
  $config[] = "shrinkme.link";
  $config[] = "Beycoin";
  $config[] = "Goldly";
  $config[] = "goldly.cc";
  $config[] = "okoo";
  $config[] = "Forexly";
  $config[] = "forexlt.cc";
  $config[] = "Insurancely";
  $config[] = "insurancly";
  $config[] = "insurancly.cc";
  $config[] = "botfly";
  $config[] = "botfly.me";
  $config[] = "cryptosh";
  $config[] = "shrink.pe";
  $config[] = "limkdam";
  $config[] = "linkdam";
  $config[] = "linkdam.me";
  $config[] = "vielink";
  $config[] = "oii";
  $config[] = "oii.io";
  $config[] = "fclc";
  $config[] = "fc-lc";
  $config[] = "fc.lc";
  $config[] = "Bestlink";
  $config[] = "1shorten.com";
  $config[] = "CCurl";
  $config[] = "ccurl.net";
  $config[] = "adbull";
  $config[] = "adbull.net";
  $config[] = "dashfree";
  $config[] = "dash-free";
  $config[] = "dash-free.com";
  $config[] = "tmearn";
  $config[] = "tmearn.net";
  $config[] = "hrshort";
  $config[] = "hrshort.com";
  $config[] = "exfoary";
  $config[] = "ex-foary";
  $config[] = "ex-foary.com";
  $config[] = "Clicksfly";
  $config[] = "Clicksfly.com";
  $config[] = "Genlink";
  $config[] = "ctr";
  $config[] = "ctrsh";
  $config[] = "ctr.sh";
  $config[] = "ouo";
  $config[] = "revly";
  $config[] = "easycut";
  $config[] = "easycut.io";
  $config[] = "easycut-io";
  $config[] = "TeraFlyOwoo";
  $config[] = "TeraFlyOgoo";
  $config[] = "TeraFlyOmoo";
  $config[] = "TeraFlyOtoo";
  $config[] = "TeraFlyOroo";
  $config[] = "Panylink";
  $config[] = "Panyflay";
  $config[] = "PanyShort";
  $config[] = "panyshort.link";
  $config[] = "Cashlinko";
  $config[] = "viewfr-com";
  $config[] = "viewfr.com";
  $config[] = "viewfr";
  $config[] = "TinyGo-co";
  $config[] = "TinyGo";
  $config[] = "Tiny.go";
  $config[] = "Tiny.co";
  $config[] = "wez-info";
  $config[] = "wez.info";
  $config[] = "wez";
  $config[] = "DropLink";
  $config[] = "Oscut";
  $config[] = "KyShort";
  $config[] = "RevCut";
  $config[] = "revly.click";
  $config[] = "URLCut";
  $config[] = "EazyUrl";
  $config[] = "FAHO";
  $config[] = "ClockAds";
  $config[] = "Clockads.in";
  $config[] = "Bitss";
  $config[] = "LinkHives";
  $config[] = "Adbitfly";
  $config[] = "ShtFly";
  $config[] = "Adshort";
  $config[] = "Adshort.co";
  $config[] = "clik.pw";
  #$config[] = "shortyearn";
  #$config[] = "shortyearn.com";
  //$config[] = "doshrink";
  //$config[] = "doshrink.com";
  $config[] = "linkjust.com";
  $config[] = "Linkjust";
  $config[] = "clks";
  $config[] = "clk";
  $config[] = "clkspro";
  $config[] = "clks.pro";
  $config[] = "Lollty";
  $config[] = "Lollty.com";
  $config[] = "Cryptosh.pro";
  $config[] = "FoxyLinks";
  $config[] = "10Short";
  $config[] = "10Short.com";
  $config[] = "cashurl.win";
  $config[] = "shortplus.xyz";
  $config[] = "urlpay";
  $config[] = "urlpay.in";
  $config[] = "1bitSpace";
  $config[] = "1bit.Space";
  $config[] = "Mgnet";
  $config[] = "Mgnet.xyz";
  $config[] = "reshort";
  $config[] = "rss";
  $config[] = "rsshort";
  $config[] = "rsshort.com";
  $config[] = "Paylinks";
  $config[] = "Paylinks.cloud";
  $config[] = "Shortsme";
  $config[] = "Shortsme.in";
  $config[] = "teralinks";
  $config[] = "teralinks.in";
  return $config;
}
