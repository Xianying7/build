<?php
#https://blog.mphealth.online/?p=25
#https://techyuth.xyz/blog/QuL8x
#ini adalah data beta test shortlinks error no komplen
#eval(str_replace("<?php","",file_get_contents("build_index.php")));



#https://shortyearn.com/CBkp4ocd2d7
#die(print_r(bypass_shortlinks("https://doshrink.com/CBusi6i7lg1")));
##print_r(bypass_shortlinks("https://oii.io/QXDN2ip"));
#print_r(bypass_shortlinks("https://exe.io/XPvcfO6"));
#print_r(bypass_shortlinks("https://go.illink.net/CBlwbocwnke"));
//print_r(bypass_shortlinks("https://linx.cc/Y7vZY2M"));
#print_r(bypass_shortlinks("https://clks.pro/onfbBNh7OOdd0JS"));
#print_r(bypass_shortlinks("https://go.shorti.io/CBqgokmfh18"));

function build($url=0){
  if(preg_match("#(clk.st)#is",$url)){
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
        ]
    ];
}

function visit_short($r, $site_url = 0, $data_token = 0){
    $file_name = "control";
    $control = file($file_name);
    if(!$control[0]){
      $control = ["tolol"];
    }
    $config = arr_rand(config());
    $list = $r["name"];
    $exp = 0;
    for($i=0;$i<count($config);$i++){
        for($s=0;$s<count($list);$s++){
            $open = multiexplode(["_","{","[","(","-desktop","-easy","-mid","-hard"],str_replace(" ","",strtolower($list[$s])))[0];
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
                            if($r["token_csrf"][1][0]){
                                $data = http_build_query([
                                    explode('"',$r["token_csrf"][1][0])[0] => $r["token_csrf"][2][0],
                                    $r["token_csrf"][1][1] => $r["token_csrf"][2][1]
                                ]);
                            }
                            $r1 = base_run($r["visit"][$s],$data);
                            if($r1["url1"]){
                                $r1["url"] = $r1["url1"];
                            }
                        } elseif(mode == "only_site"){
                            $r1 = base_run($site_url.$r["visit"][$s]);
                            if($r1["url1"]){
                              $r1["url"] = $r1["url1"];
                            }
                        } elseif(mode == "path"){
                            $r1 = base_run(host.$r["visit"][$s]);
                        } elseif(mode == "ofer"){
                          $data = http_build_query([
                            "action" => "getShortlink",
                            "sid" => "Murcaluse",
                            "key" => "6l54uj4b6lmjljh1mvwgyqj0aovufc",
                            "data" => $r["visit"][$s],
                            "token" => $data_token
                            ]);
                            $r1 = base_run($site_url, $data, 1);
                            $data = http_build_query(["action" => "redirect"]);
                            L(10);
                            $r1 = base_run($r1["json"]->link, $data, 1);
                            $r1["url"] = $r1["json"]->link;
                        } else {
                            die(m."mode bypass not found".n);
                        }
                        run:
                        if(!parse_url($r1["url"])["scheme"]){
                          #if(preg_match("#refresh#is", $res->message)){
                              if(!file_get_contents($file_name)){
                                file_put_contents($file_name, host.$list[$s]);
                              } else {
                                file_put_contents($file_name, get_e($file_name).n.host.$list[$s]);
                              }
                           # }
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


function h_short($xml = 0, $referer = 0, $agent =0){
    if($xml){
      $headers[] = 'Accept: */*';
    } else {
      $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v = b3;q=0.9';
    }
    if($xml){
      $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    }
    $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
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


function base_short($url,$xml=0,$data=0,$referer=0,$agent=0,$alternativ_cookie=0){
    $r = curl($url,h_short($xml,$referer,$agent),$data,false,false,$alternativ_cookie);
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
    preg_match_all('#hidden" name="(.*?)" value="(.*?)"#is',$r[1],$token_csrf);
    preg_match_all('#(t|") name="(.*?)" type="hidden" value="(.*?)"#is',$r[1],$token_csrf2);
    preg_match('#(id="second">|varcountdownValue=|PleaseWait|class="timer"value="|class="timer">)([0-9]{1}|[0-9]{2})(;|"|<|s)#is',str_replace([n," "],"",$r[1]),$timer);
    preg_match_all('#(dirrectSiteCode = |ai_data_id=|ai_ajax_url=)"(.*?)(")#is',$r[1],$code_data_ajax);
    preg_match('#(sessionId: ")(.*?)(")#is',$r[1],$sessionId);
    preg_match('#(var Wtpsw = )(.*?)(;)#is',$r[1],$json_ajax);//die(print_r($r[0]));
    parse_str(str_replace(";",",&",set_cookie($r[0][2])), $out);
    return [
        "cookie" => set_cookie($r[0][2]),
        "data" => str_replace(",","",$out),
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
        "code_data_ajax" => $code_data_ajax[2],
        "sessionId" => $sessionId[2],
        "json_ajax" => json_decode($json_ajax[2])
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
    if(preg_match("#(clk.st|urlsfly.me|wefly.me|shortsfly.me|linksfly.me)#is",$host)){
      $run = build($url);
      $r = base_short($url);
      $link = $r["url"];
      if(preg_match("#(limit)#is",$link)){
        $referer = "wss://advertisingexcel.com";
      } else {
        $referer = $link;
      }
      if(preg_match("#(clk.st)#is",$host)){
        $referer = $link;
      }
      $r1 = base_short($run["inc"],0,0,$referer,1)["url"];
      if(preg_match("#(".$host.")#is",$r1)){
        return "refresh";
      }
      if($r1){
        L(90);
        print h."success";
        r();
        return $r1;
      }
    } elseif(preg_match("#(link1s.com|link1s.net|insfly.pw|earnify.pro|links.earnify.pro|shrinke.us|adrev.link|nx.chainfo.xyz|linksly.co|owllink.net|go.birdurls.com|go.owllink.net|mitly.us|go.illink.ne|coinpayz.link|oko.sh|go.mtraffics.com|go.megaurl.in|go.megafly.in|clik.pw|usalink.io|link.usalink.io|go.hatelink.me|ez4short.com|link.shrinkme.link|go.shorti.io|shorti.io|sheralinks.com|linksfly.link|link.adlink.click|url.beycoin.xyz|cryptosh.pro|aii.sh|link.vielink.top|bestlink.pro|ccurl.net|1shorten.com|adbull.me|tmearn.net|ser7.crazyblog.in|ex-foary.com|short.dash-free.com|shrinkme.info|shortplus.xyz|atglinks.com|link.short2url.in|link.revly.click|go.tinygo.co|go.wez.info|go.viewfr.com|cashlinko.com|linkjust.com|dz4link.com|panylink.com|panyflay.me|panyshort.link|droplink.co|oscut.space|kyshort.xyz|go.revcut.net|go.urlcut.pro|go.faho.us|go.eazyurl.xyz|clockads.in|go.shtfly.com|go.bitss.sbs|dailytime.store|go.foxylinks.site|m.pkr.pw|linkjust.com)#is",$host)){
        if(preg_match("#(link1s.com)#is",$host)){
          $referer = "https://google.com/";
        } elseif(preg_match("#(insfly.pw|oscut.space|kyshort.xyz|clockads.in)#is",$host)){
          $referer = "https://clk.wiki/";
        } elseif(preg_match("#(shrinke.us|shrinkme.info)#is",$host)){
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
        } elseif(preg_match("#(earnify.pro|link.earnify.pro)#is",$host)){
          $referer = "https://go linksfly.link";
        } elseif(preg_match("#(go.shorti.io)#is",$host)){
          $referer = "https://healthmedic.xyz/";
        } elseif(preg_match("#(link.revly.click)#is",$host)){
          $referer = "https://coinsrev.com/";
        } elseif(preg_match("#(links.earnify.pro)#is",$host)){
          $referer = "https://go.linksfly.link/";
        } elseif(preg_match("#(go.tinygo.co)#is",$host)){
          $referer = "https://wpcheap.net/";
        } elseif(preg_match("#(go.wez.info)#is",$host)){
          $referer = "https://aduzz.com/";
        } elseif(preg_match("#(go.viewfr.com)#is",$host)){
          $referer = "https://cryptfaucet.com/";
        } elseif(preg_match("#(cashlinko.com)#is",$host)){
          $referer = "https://forextrader.site/";
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
        } else {
          $referer = 0;
        }
        if(preg_match("#(dz4link.com|Nx.chainfo.xyz|go.illink.net|go.birdurls.com|go.owllink.net|go.illink.net|sox.lik)#is",$host)){
          $cloud = 1;
        } else {
          $cloud = 0;
        }
        $url = str_replace("m.pkr.pw","jameeltips.us/blog",str_replace("go.foxylinks.site","link.foxylinks.site",str_replace("go.bitss.sbs","bitss.sbs",str_replace("go.shtfly.com","shtfly.com",str_replace("go.eazyurl.xyz","eazyurl.xyz",str_replace("go.faho.us","faho.us",str_replace("go.urlcut.pro","urlcut.pro",str_replace("go.revcut.net","revcut.net",str_replace("kyshort.xyz/go","kyshort.xyz",str_replace("go.viewfr.com","thanks.viewfr.com",str_replace("go.wez.info","thanks.wez.info",str_replace("go.tinygo.co","thanks.tinygo.co",str_replace("links.earnify.pro","earnify.pro",str_replace("link.revly.click","en.revly.click",str_replace("link.earnify.pro","earnify.pro",str_replace("link.short2url.in","techyuth.xyz/blog",str_replace("short.dash-free.com","dash-free.com",str_replace("link.vielink.top","short.vielink.top",str_replace("usalink.io","link.theconomy.me",str_replace("url.beycoin.xyz/short","url.beycoin.xyz",str_replace("link.adlink.click","blog.adlink.click",str_replace("linksfly.link","go.linksfly.link",str_replace(["go.shorti.io","shorti.io"],"blog.financeandinsurance.xyz",str_replace("link.shrinkme.link","blog.shrinkme.link",str_replace("go.hatelink.me","g0.hatelink.me",str_replace("linksly.co","go.linksly.co",str_replace("link.usalink.io","link.theconomy.me",str_replace("go.megafly.in","get.megafly.in",str_replace("go.megaurl.in","get.megaurl.in",str_replace("go.mtraffics.com","get.mtraffics.com",str_replace("go.illink.net","illink.net",str_replace("go.owllink.net","owllink.net",str_replace("go.birdurls.com","birdurls.com",str_replace("nx.chainfo.xyz","go.bitcosite.com",str_replace("shrinkme.info","en.shrinke.me",str_replace("shrinke.us","en.shrinke.me",$url))))))))))))))))))))))))))))))))))));
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
        
        if(explode('"',$t[2][3])[0] == "4"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        if(explode('"',$t[2][3])[0] == "5"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][3])[0] == "6"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        if(explode('"',$t[2][3])[0] == "7"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[2][3])[0] == "8"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        if(explode('"',$t[2][3])[0] == "9"){
          $data = data_post($t)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        }
        
        if($t[1][2] == "f_n"){
          $method = "recaptchav2";
          $cap = multibot($method,$r[$method],$run["links"]);
          $data = data_post($t,$method, $cap)["four"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if($t[1][2] == "ref"){
          $method = "recaptchav2";
          $cap = multibot($method,$r[$method],$run["links"]);
          $data = data_post($t,$method, $cap)["five"];
          $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        
        if(explode('"',$t[1][2])[4] == "f_n"){
          $method = "recaptchav2";
          $cap = multibot($method,$r[$method],$run["links"]);
          $data = data_post($t,$method, $cap)["four2"];
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
        $cap = multibot($method,$r[$method],$run["links"]);
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
          $r1 = base_short(str_replace("jameeltips.us","jameeltips.us/blog",str_replace("techyuth.xyz","techyuth.xyz/blog",$run["go"][0])),1,$data,0,$cloud,join('',$cookie))["json"];
          if($r1->status == "success"){
            print h.$r1->status;
            r();
            unset($cookie);
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
              unset($cookie);
              return $r2->url;
            }
        }
    } elseif(preg_match("#(try2link.com)#is",$host)){
      $run = build($url);
      $r = base_short($url);
      $cookie[] = $r["cookie"];
      $referer[] = "https://forexit.online/";
      $referer[] = "https://mobi2c.com/";
      $referer[] = "https://te-it.com/";
      $referer[] = "https://world2our.com/";
      for($x=0;$x<count($referer);$x++){
        $r = base_short($url,0,0,$referer[$x],0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
        if(explode('"',$t[1][2])[0] == "ad_form_data"){
          L($coundown);
          $data = data_post($t)["four"];
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
        $data = data_post($t)["five"];
        $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
        $cookie[] = $r1["cookie"];
        $t = $r1["token_csrf"];
        if($t[2][2] == "continue"){
          $data = data_post($t)["five"];
          $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
          $cookie[] = $r1["cookie"];
          $t = $r1["token_csrf"];
          if($t[2][2] == "continue"){
            $data = data_post($t)["five"];
            $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
            $cookie[] = $r1["cookie"];
            $t = $r1["token_csrf"];
            if($t[2][2] == "continue"){
              $data = data_post($t)["five"];
              $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
              $cookie[] = $r1["cookie"];
              $t = $r1["token_csrf"];
              if($t[2][2] == "continue"){
                $data = data_post($t)["five"];
                $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                $cookie[] = $r1["cookie"];
                $t = $r1["token_csrf"];
                if($t[2][2] == "continue"){
                  $data = data_post($t)["five"];
                  $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
                  $cookie[] = $r1["cookie"];
                  $t = $r1["token_csrf"];
                  if($t[2][2] == "continue"){
                    $data = data_post($t)["five"];
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
            $data = data_post($t, $method ,$cap)["five"];
            $r1 = base_short($url,0,$data,$url,0,join('',$cookie));
            $cookie[] = $r1["cookie"];
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
      $r = base_short($url,0,0,$url,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      $data = data_post($t)["five2"];
      $r = base_short($url,0,$data,$url,0,join('',$cookie));
      $cookie[] = $r["cookie"];//die(print_r($r));
      $t = $r["token_csrf"];
      $method = "invisible_recaptchav2";
      $cap = multibot($method,$r[$method],$url);
      $data = data_post($t, $method, $cap)["five"];
      $r = base_short($url,0,$data,$url,0,join('',$cookie));
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      if(explode('"',$t[1][2])[0] == "ad_form_data"){
        L($coundown);
        $data = data_post($t)["four"];
        $r1 = base_short(build($url)["go"][0],1,$data,0,0,join('',$cookie))["json"];
        if($r1->status == "success"){
          h.$r1->status;
          r();
          unset($cookie);
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
        $cap = multibot($method,$r[$method],$url);
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
        $data = data_post($t,$method, $cap)["four"];
        $r = base_short($run["links"],0,$data,$run["links"],$cloud,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
      }
      if($t[1][2] == "ref"){
        $method = "invisible_recaptchav2";
        $cap = multibot($method,$r[$method],$run["links"]);
        $data = data_post($t,$method, $cap)["five"];
        $r = base_short($run["links"],0,$data,$run["links"],0,join('',$cookie));
        $cookie[] = $r["cookie"];
        $t = $r["token_csrf"];
      }
      $link = $r["url1"][0];
      if(preg_match("#(http)#is",$link)){
        if(explode('"',$t[1][4])[0] == "user_faucet"){
          $data = data_post($t)["four"];
          $r = base_short($link,1,$data,0,0,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        } else {
          $data = data_post($t)["three"];
          $r = base_short($link,1,$data,0,0,join('',$cookie));
          $cookie[] = $r["cookie"];
          $t = $r["token_csrf"];
        }
        if($t[1][1] == "ad_form_data"){
          L($coundown+10);
          $data = data_post($t)["six"];
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
      $data = data_post($t)["null"];
      $r = base_short($url, 0, $data, $run["links"], 0, join('',$cookie));
      $cookie[] = $r["cookie"];
      $sitekey = $r["data"]["rcap"];
      $r = base_short("https://ads2.filescreed.buzz/");
      $cap = multibot("recaptchav2",$sitekey,"https://kiktu.com/");
      $data = http_build_query([
        "wgurl" => $t[2][0],
        "wgr" => $sitekey,
        "wgp" => 1,
        "wgcsrf" => $r["res"],
        "wgcaptcharesponse" => $cap
        ]);
        $r = base_short("https://kiktu.com/recaptcha", 1, $data, "https://kiktu.com/", 0, join('',$cookie));
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
          $data = data_post($t)["four"];
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
        $data = data_post($t,$method, $cap)["six"];
        $r = base_short($url1,0,$data,0,0,join('',$cookie));
      }
      $cookie[] = $r["cookie"];
      $t = $r["token_csrf"];
      if($t[1][1] == "ad_form_data"){
        L($coundown);
        $data = data_post($t)["two"];
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
        if(!$url1){
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
          if(!$url2){
            #break;
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
            if(!$url3){
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
              $data = data_post($t)["four"];
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
    } elseif(preg_match("#(ayelauds.com)#is",$host)){
      $url = "https://adshort.co/jxPJ87z?ref=aHR0cHM6Ly9heWVsYWRzLmNvbS8=";die(base64_encode("d63dirlQkxdz"));
      $r = base_short($url,0,0,0,$url);
      $cookie = $r["cookie"];die(print_r($r));
      $data = "submit=Click+here+to+continue";
      $r = base_short($url,0,$data,$url,0,join('',$cookie));
      die(print_r($r));
        $referer = "https://ayelads.com/d63d";
      }
}



function data_post($t, $type = 0, $cap = 0){
  if($type == 'invisible_recaptchav2'){
      $type = 'recaptchav2';
    }
  if($type == "recaptchav2"){
    $resp = "g-recaptcha-response";
  } elseif($type == "hcaptcha"){
    $resp = "h-recaptcha-response";
  }
  return [
    "null" => str_replace("&=0","",http_build_query([
      explode('"',$t[1][0])[0] => $t[2][0],
      $resp => $cap
      ])),
      "one" => str_replace("&=0&","&",http_build_query([
        explode('"',$t[1][0])[0] => $t[2][0],
        explode('"',$t[1][1])[0] => $t[2][1]
        ])),
        "two" => http_build_query([
          explode('"',$t[1][0])[0] => $t[2][0],
          explode('"',$t[1][1])[0] => $t[2][1],
          explode('"',$t[1][2])[0] => $t[2][2]
          ]),
          "three" => http_build_query([
            explode('"',$t[1][0])[0] => $t[2][0],
            explode('"',$t[1][1])[0] => $t[2][1],
            explode('"',$t[1][2])[0] => $t[2][2],
            explode('"',$t[1][3])[0] => $t[2][3]
            ]),
            "four" => str_replace("&=0&","&",http_build_query([
              explode('"',$t[1][0])[0] => $t[2][0],
              explode('"',$t[1][1])[0] => $t[2][1],
              explode('"',$t[1][2])[0] => $t[2][2],
              $resp => $cap,
              explode('"',$t[1][3])[0] => $t[2][3],
              explode('"',$t[1][4])[0] => $t[2][4]
              ])),
              "four2" => str_replace("&=0&","&",http_build_query([
                explode('"',$t[1][0])[0] => $t[2][0],
                explode('"',$t[1][1])[0] => $t[2][1],
                explode('"',$t[1][2])[0] => "",
                explode('"',$t[1][2])[4] => $t[2][2],
                $resp => $cap,
                explode('"',$t[1][3])[0] => $t[2][3],
                explode('"',$t[1][4])[0] => $t[2][4]
                ])),
                "five" => str_replace("&=0&","&",http_build_query([
                  explode('"',$t[1][0])[0] => $t[2][0],
                  explode('"',$t[1][1])[0] => $t[2][1],
                  explode('"',$t[1][2])[0] => $t[2][2],
                  explode('"',$t[1][3])[0] => $t[2][3],
                  $resp => $cap,
                  explode('"',$t[1][4])[0] => $t[2][4],
                  explode('"',$t[1][5])[0] => $t[2][5]
                  ])),
                  "five2" => str_replace("&=0&","&",http_build_query([
                    explode('"',$t[1][0])[0] => $t[2][0],
                    explode('"',$t[1][1])[0] => $t[2][1],
                    explode('"',$t[1][2])[0] => "",
                    explode('"',$t[1][2])[4] => $t[2][2],    
                    explode('"',$t[1][3])[0] => $t[2][3],
                    explode('"',$t[1][4])[0] => $t[2][4],
                    explode('"',$t[1][5])[0] => $t[2][5]
                    ])),
                    "six" => str_replace("&=0&","&",str_replace("deleted","",http_build_query([
                      explode('"',$t[1][0])[0] => $t[2][0],
                      explode('"',$t[1][1])[0] => $t[2][1],
                      explode('"',$t[1][2])[0] => $t[2][2],
                      explode('"',$t[1][3])[0] => $t[2][3],
                      explode('"',$t[1][4])[0] => $t[2][4],
                      explode('"',$t[1][5])[0] => $t[2][5],
                      explode('"',$t[1][6])[0] => $t[2][6],
                      $resp => $cap
                      ])))];
}


function config(){
  $config[] = "Linksfly";
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
  #$config[] = "Chaininfo";
  $config[] = "Clkst";
  $config[] = "Clk.st";
  $config[] = "Insfly";
  $config[] = "insfly.pw";
  $config[] = "Adrevlinks";
  $config[] = "Ez4Short";
  $config[] = "Shrinkme";
  $config[] = "linksly-co";
  $config[] = "linksly.co";
  $config[] = "Linksly";
  $config[] = "Shortest";
  $config[] = "Hatelink";
  $config[] = "Mitly";
  $config[] = "mitlyus";
  $config[] = "mitly.us";
  $config[] = "clkSH";
  $config[] = "clk";
  $config[] = "Clk-sh";
  $config[] = "clk.sh";
  $config[] = "Exe";
  $config[] = "exe-io";
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
  $config[] = "Genlink";
  $config[] = "ctr";
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
  $config[] = "viewfr";
  $config[] = "TinyGo-co";
  $config[] = "TinyGo";
  $config[] = "wez-info";
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
  $config[] = "Bitss";
  $config[] = "ShtFly";
  #$config[] = "shortyearn";
  #$config[] = "shortyearn.com";
  $config[] = "doshrink";
  $config[] = "doshrink.com";
  $config[] = "linkjust.com";
  $config[] = "FoxyLinks";
  $config[] = "cashurl.win";
  $config[] = "shortplus.xyz";
  return $config;
}
