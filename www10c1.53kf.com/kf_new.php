	$53.data('u_stat_id','');
	(function(window,undefined){
		if($53.data('api_uuid') == ""){
			$53.data('api_uuid','9e2e2c2d602da3fabf5484f01043c7d0');
       		$53.setUuid('9e2e2c2d602da3fabf5484f01043c7d0');
		}
        $53.setHost('www10c1.53kf.com');
        $53.setSign('dc54cb19b8c0bf389b64906ce37d2bdc');
        var _kfApi = $53.createApi();
    	function KfStat(){
            this.data = {
                stat_id:'',
                product_key:''
            };
            this.put = function(key,value){
                    var _this = this;
                    if((key !== 'stat_id' && key !== 'product_key') || value == '' || value == null){
                        return false;
                    }
                    _this.data[key] = value;
                    if(key == 'stat_id'){
                        _kfApi.push('cmd','jzl');
                        _kfApi.push('stat_id',value);
                        _kfApi.query();
//                        var data = [["jzl_stat_id_70751269",value,-1]];
//                        $53.setKfCookie(data);
                    }
                };
        }
        var _53stat = new KfStat();
        window._kfApi = _kfApi;
        window._53stat = _53stat;
})(window);		(function(window,undefined){
			if(typeof _kfApi == 'undefined') var _kfApi = $53.createApi();
            window.hz6d_KfStat = function(id,stat_id){
        		if((typeof id == "undefined") || id == "" || (typeof stat_id == "undefined") || stat_id == "") return false;
        		_kfApi.push('cmd','stat');
                _kfApi.push('id',id);
                _kfApi.push('stat_id',stat_id);
                _kfApi.query();
            }
	    })(window);	$53.data('tpl','crystal_blue');
        $53.setWorkers([{"worker_id":"anna@ecfocus.com","worker_card":"\u8096\u82b3","state":0},{"worker_id":"web@ecfocus.com","worker_card":"","state":1},{"worker_id":"13590308967@qq.com","worker_card":"\u5c0f\u8d75","state":1}]);
        $53.setGroups([{"group_id":"293317","group_name":"\u9500\u552e\u90e8"},{"group_id":"19803517","group_name":"\u8c37\u79d8\u7ec4"}]);
        $53.setOnline('1');
    

	// record once visit uuid
	if($53.getCookie('53uvid') != 1) {
		$53.setCookie('53uvid',1);
		$53.data('page_type',1);
	} else {
		$53.data('page_type',2);
	}
	//$53.data('visit_uuid','');
//	$53.data('in_time','');
	$53.data('company_id','70751269');
	$53.data('visit_num',$53.getCookie('53uvid'));

	var hz6d_referer = '&referer=' + $53.EN(window.location.href); //当前访问页面 
	var kf_success=1, kftype=2,
	powered_by_53kf_url = 'http://www.53kf.com',
	powered_by_53kf_txt = 'Powered by 53KF';
    
    
	var onliner_zdfq = $53.getCookie("onliner_zdfq70751269"); // onliner_zdfq: 0.初始值 2.点击接受 3.点击拒绝 
	if (onliner_zdfq == "")
	{
		onliner_zdfq = 0;
		document.cookie = "onliner_zdfq70751269=" + onliner_zdfq;
	}
	var hz6d_kf_type = 2;
	var hz6d_pos_model = 1;
	var hz6d_hidden = "0";
	var hz6d_close_icon = 0;
	var hz6d_icon_type = 3;
	
	function AccCallBack(){}
	// 加载ivt.php，即中间的接受邀请层 
	if (!$53("ivt_script") && !0){
		$53.createScript('ivt_script', 'https://www10c1.53kf.com/kf_ivt_new.php?kf_sign=Dc1NTMTYxOQzNzEwMDU1NzEwNDc4MDIyNzA3NTEyNjk=&arg=9007605&style=1&isonline=1&kfonline=1&lang=zh-cn&resize=yes&charset=gbk&kflist=off&kf=anna@ecfocus.com,13590308967@qq.com&zdkf_type=1&lnk_overflow=0&callback_id6ds=10150756,10421534&guest_id=10091778952020'+ hz6d_referer + hz6d_from_page_new + '&tpl_name=crystal_blue&tpl_width=800&tpl_height=600&uid=9e2e2c2d602da3fabf5484f01043c7d0&is_group=&' + Math.random() + "&talktitle=" + encodeURIComponent(document.title));
	}      		  	

		  	var kf_script_num = 0;
		  	var script_total = document.getElementsByTagName('script');
		  	for (var i = 0; i < script_total.length; i++){
		    	if (script_total[i].src.toLowerCase().indexOf('kf.php') != -1){
		      		kf_script_num += 1;
		      		break;
		    	}
		  	}
			if (kf_script_num <= 1){
		    	function init_zdytb_arr(zdytb_str){
			      	// 生成 图标 数组 
			      	var zdytb_arrs = [];
			      	var tmp_arrs = zdytb_str.split('#');
			      	for (var i = 0; i < tmp_arrs.length; i++){
			        	zdytb_arrs[i] = [];
			        	zdytb_arrs[i] = tmp_arrs[i].split(',');
			      	}
			      	return zdytb_arrs;
			    }
		
			    function get_input_name_pos(_input_name_arr,_input_name)
			    {
			      // 获取自定义图标 输入值位置 
			      var _pos = 0;
			      for (var i = 0; i < _input_name_arr.length; i++)
			      {
			        if (_input_name_arr[i] == _input_name)
			        {
			          _pos = i;
			          break;
			        }
			      }
			      return _pos;
			    }
	        
		        function _53_close_icon(obj) {
		            if(1 == 4 && 1 == 2){
		                hidden_kf_icon(1,1);
		                return;        
		            }
		           
		            obj.parentNode.parentNode.parentNode.removeChild(obj.parentNode.parentNode)    
		        }
		
			    // 组装自定义图标div 
			    function get_zdytb_divs(on_off,zdytb_on_arrs,zdytb_off_arrs,kficon_click_str)
			    {
			      var element_arrs = (String(on_off) == '1') ? zdytb_on_arrs : zdytb_off_arrs;
			      
			      var divs_str = '';
			      for (var i = 0; i < element_arrs.length; i++)
			      {
			        var element_arr = element_arrs[i];
			        var css_arr_1 = css_name_arr_1;
			        var css_arr_3 = css_name_arr_3;
			        var css_str = '';
			        var link_str = '';
			        var target_str = '';
			        var text_str = '';
			        var click_str = '';
			
			        // 处理css 
			        for (var j = 0;j < css_arr_3.length; j++)
			        {
			          var css_pos = css_arr_3[j];
			          if (element_arr[css_pos] == '' || element_arr[css_pos] == '-')
			            continue;
			          if (css_pos == 8 && element_arr[css_pos].indexOf('http://') == -1)
			            element_arr[css_pos] = "https://" + "www10c1.53kf.com" + "/" + element_arr[css_pos];
			          css_str += css_arr_1[j].replace("c_c",element_arr[css_pos]) + ';';
			        }
			        
			        // 处理文本内容 
			        var text_type_pos = get_input_name_pos(input_name_arr,'text_type');
			        var text_content_pos = get_input_name_pos(input_name_arr,'text_content');
			        var tmp_type = $53.trim(element_arr[text_type_pos]);
			        var tmp_text = $53.htmlDecode($53.trim(element_arr[text_content_pos]).replace(/&amp;/g, '&'));
			        if (tmp_type != '' && tmp_type != '-' && tmp_text != '' && tmp_text != '-')
			        {
			          text_str = tmp_text; 
			        }
			        
			        // 处理连接 
			        var element_type_pos = get_input_name_pos(input_name_arr,'element_type');
			        var link_href_pos = get_input_name_pos(input_name_arr,'link_href');
			        var tmp_e_type = $53.trim(element_arr[element_type_pos]);
			        var tmp_herf = $53.htmlDecode($53.trim(element_arr[link_href_pos]).replace(/&amp;/g, '&'));
			        var im_account_pos = get_input_name_pos(input_name_arr,'im_account');
			        var tmp_im_account = $53.trim(element_arr[im_account_pos]);
			        if ((tmp_e_type == '' || tmp_e_type == '-') && $53.trim(tmp_herf).replace('http://','') != '' && $53.trim(tmp_herf) != '-')
			        {
			          link_str = $53.trim(tmp_herf);
			        }
			        else
			        {
								switch (tmp_e_type)
			          {
			            case 'chat': click_str = kficon_click_str; break;
			            case 'close': click_str = '_53_close_icon(this)'; break; 
			            case 'etel': click_str = 'window.open(\'http://tb.53kf.com/eht.php?company_id=70751269&style_id=103697707\',\'_blank\',\'height=400,width=300,top=100,left=200,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no\')'; break;
			            case 'qq':
										if (tmp_im_account != '' && tmp_im_account != '-'){
											if (tmp_im_account.toLowerCase().indexOf('biz') > -1){ //biz qq
												tmp_im_account = tmp_im_account.replace('biz','');
												link_str = 'https://www10c1.53kf.com/bizqq.php?qq=' + tmp_im_account + '&from=' + window.encodeURIComponent(window.location.href);
											} else{
												link_str = 'tencent://message/?uin=' + tmp_im_account;
											}
											
		                                }
										break;
			            case 'wang': if (tmp_im_account != '' && tmp_im_account != '-') link_str = 'aliim://sendmsg?touid=cntaobao' + tmp_im_account; break;
			            //case 'msn': if (tmp_im_account != '' && tmp_im_account != '-') link_str = 'msnim:chat?contact=' + tmp_im_account; if(tmp_im_account.indexOf('fonlue') > -1) link_str='http://www.53kf.com/?www.53rj.com'; break;
			            default: link_str = '';click_str = '';
			          }
			        }
			        // 处理是否新窗口 
			        var link_target_pos = get_input_name_pos(input_name_arr,'link_target');
			        var tmp_target = $53.trim(element_arr[link_target_pos]);
			        if (tmp_target == '' || tmp_target == '-' || tmp_target == '_blank') target_str = '_blank';
			        else target_str = '_self';
			        var onclick_str = '';
			        if (link_str == '' && click_str != '') onclick_str = 'onclick="' + click_str + ';"';
			        else if (link_str != ''&& click_str != '') onclick_str = ' onclick="' + click_str + ';window.open(\'' + link_str +'\',\'' + target_str + '\');" ';
			        else if (link_str != ''&& click_str == '') onclick_str = ' onclick="window.open(\'' + link_str +'\',\'' + target_str + '\');" ';
			        
			        if (link_str != '' || click_str != '') css_str += "cursor: pointer;";
			        var height_str = element_arr[get_input_name_pos(input_name_arr,'div_height')];
			        if (text_str != '') css_str += "line-height: " + height_str + "px;";
			        // 组装成div 
			        
			        var title_str = '';
			        if (text_str != ''&& onclick_str != '')
			        {
			          title_str = 'title=\"' + text_str + '\"';
			        }
						if(tmp_e_type != 'qq'  && tmp_e_type != 'wang' )	link_str = link_str.replace('http://www.53kf.com',powered_by_53kf_url);
						if(tmp_e_type != 'qq'  && tmp_e_type != 'wang' )	onclick_str =  onclick_str.replace('http://www.53kf.com',powered_by_53kf_url);
			        if(i == 0)
			        {
			          onclick_str = '';
			          divs_str += "<div style=\"position: relative;overflow: hidden;z-index:10086;" + css_str + "\" " + onclick_str + ">";
			        }
			        else if(tmp_im_account != '' && tmp_im_account != '-' && link_str != '')
			        {
			          divs_str += "<a href=\"" + link_str+ "\" target=\"_blank\"><div style=\"position: absolute;overflow: hidden;text-decoration:none;" + css_str + "\" " + title_str + ">" + text_str + "</div></a>";
			        }
			        else
			        {
			          divs_str += "<div style=\"position: absolute;overflow: hidden;" + css_str + "\" " + onclick_str + title_str + ">" + text_str + "</div>";
			        }
			      }
			      divs_str += '</div>';
			      return divs_str;
			    }
		
			    // 定义全局解码数组 
			    var css_name_arr_1 = ["width: c_cpx","height: c_cpx","left: c_cpx","top: c_cpx","z-index: c_c","background-image: url(c_c)","background-repeat: c_c","background-color: #c_c","font-size: c_cpx","color: #c_c","text-align:c_c","font-weight: c_c","font-style: c_c","text-decoration: c_c","font-family:c_c","border-style: c_c","border-width: c_cpx","border-color:#c_c;word-break:break-all;"];
			    var css_name_arr_2 = ["div_width","div_height","div_left","div_top","div_zindex","bg_img_url","bg_img_repeat","bg_color","font_size","text_color","text_align","font_bold","font_italic","text_underline","font_family","border_style","border_width","border_color"];
			    var css_name_arr_3 = [3,4,5,6,7,8,9,10,14,15,16,17,18,19,20,21,22,23];
			    var input_name_str = 'element_id#element_name#element_type#div_width#div_height#div_left#div_top#div_zindex#bg_img_url#bg_img_repeat#bg_color#im_account#text_type#text_content#font_size#text_color#text_align#font_bold#font_italic#text_underline#font_family#border_style#border_width#border_color#link_href#link_target';
			    var input_name_arr = input_name_str.split('#'); // 初始化解码数组 
				// start 客服图标转义url 
			    function hz6d_clicurl(on_off,zdytb_on_arrs,zdytb_off_arrs,kficon_click_str)
			    {
			      var element_arrs = (String(on_off) == '1') ? zdytb_on_arrs : zdytb_off_arrs;
			      var divs_str = '';
						divs_str = element_arrs.replace(/operating="([^"]*)"/g,function(str){
							var vals = str.split('"');
							if(vals[1])
							{
								var click_str = '';
								var link_str ='';
								var target_str = '_blank';
								var hrs = '';
								var valst = vals[1].split("|");
								switch(valst[0])
								{
									case 'KF': 
										var ckick_new_str = kf_click_new = hz6d_html_replace(kficon_click_str);
										ckick_new_str = encodeURIComponent(ckick_new_str);
										ckick_new_str = ckick_new_str.replace(/'/g,"#liyc#");
										click_str = 'hz6d_is_exist(\''+ckick_new_str+'\')';break;
									case 'CLOSE': click_str = '_53_close_icon(this)'; break;
									case 'ETEL': click_str = 'window.open(\'http://tb.53kf.com/eht.php?company_id=70751269&style_id=103697707\',\'_blank\',\'height=400,width=300,top=100,left=200,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no\')'; break;
									case 'QQ': 
										if(valst[1])
										{
											if(valst[1].toLowerCase().indexOf('biz') > -1)
											{
												var qq = valst[1].replace('biz','');
												link_str = 'https://www10c1.53kf.com/bizqq.php?qq=' + qq + '&from=' + window.encodeURIComponent(window.location.href);
											}
											else
											{
												link_str = 'tencent://message/?uin=' + valst[1];
											}
										};
										break;
									//case 'MSN': if (valst[1]) {link_str = 'msnim:chat?contact=' + valst[1]; if(valst[1].indexOf('fonlue') > -1) link_str='http://www.53kf.com/?www.53rj.com';} break;
									case 'WW': 
										if (valst[1]) 
										{
											if(valst[1].toLowerCase().indexOf('###') > -1)
											{
												var wang = valst[1].replace('###','');
												link_str = 'http://amos.alicdn.com/msg.aw?v=2&uid=' + wang +'&site=enaliint&s=21&charset=UTF-8';
											}
											else
											{
												link_str = 'aliim://sendmsg?touid=cntaobao' + valst[1];
											} 
										}
										break;
									case 'HYLINK': if (valst[1]) link_str = valst[1]; if(valst[2]) target_str = valst[2]; hrs = 1;break;
									default: click_str = '';link_str = '';
								}
								var onclick_str = '';
								if (link_str == '' && click_str != '') onclick_str = 'onclick="' + click_str + ';"';
								else if (link_str != ''&& click_str != '') onclick_str = ' onclick="' + click_str + ';window.open(\'' + link_str +'\',\'' + target_str + '\');" ';
								else if (link_str != ''&& click_str == '' && !hrs) onclick_str = ' onclick="window.open(\'' + link_str +'\');" ';
								else if (link_str != ''&& click_str == '' && hrs) onclick_str = 'href="'+ link_str+'" target="'+ target_str +'"';
								return onclick_str;
							}
						});
						return divs_str;
			    }
				//end 
			}
		  
        var openurl = 'https://www10c1.53kf.com/webCompany.php?kf_sign=Dc1NTMTYxOQzNzEwMDU1NzEwNDc4MDIyNzA3NTEyNjk=&arg=9007605&style=1&guest_id=10091778952020&language=zh-cn&charset=gbk&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue&uid=9e2e2c2d602da3fabf5484f01043c7d0&is_group='.replace('&referer={hz6d_referer}',hz6d_referer).replace(/{hz6d_keyword}/gim,hz6d_from_page_new);
        $53.setUrl(openurl);
        if (0 == "1") {
        	$53.setUrl("?arg=9007605&style=1&kflist=off&kf=anna@ecfocus.com,13590308967@qq.com&zdkf_type=1&lnk_overflow=0&callback_id6ds=10150756,10421534&language=zh-cn&charset=gbk&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue");
        }						function _createIconDivMain()
						{
							if ($53(this.config["iconDiv"]) == null)
							{
								var id = this.config["id"];
								setTimeout('kf_icons[' + id + '].createIconDivMain()', 500);
								return;
							}
							if ($53(this.config["iconDiv"]).innerHTML.indexOf('.gif') != -1 || $53(this.config["iconDiv"]).innerHTML.indexOf('.jpg') != -1 || $53(this.config["iconDiv"]).innerHTML.indexOf('.swf') != -1)
							{
								 return;
							}
							var imgsrc = '';
							if (this.config["isonline"] == 1)
							{
								imgsrc = this.config["img_on"];
							}
							else
							{
								imgsrc = this.config["img_off"];
							}
							var html = "";
							html += "<iframe style='position:absolute;z-index:7998;width:0px;height:0px;top:0px;left:0px;' frameborder='0' ></iframe>";
							var kf = "<div onclick=\"setIsinvited();kf_icons[" + this.config["id"] + "].wopen('" + this.setParameter() + "')\" style='width:" + this.config["width"] + "px;height:" + this.config["height"] + "px;background:url(\"" + imgsrc + "\") no-repeat;cursor:pointer;'></div>";
							if (this.config["isonline"] == 1)
							{
								if('1')
								{
									var onval_str = '<div id="KFLOGO" class="Lelem" maxwidth="400" maxheight="400" minwidth="100" minheight="100" style="width: 130px; height: 140px; position: relative; z-index: 10000;"><div class="Lelem" type="img" operating="KF" style="display: block; cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 10001; width: 108px; height: 122px;"><img style="width: 108px; height: 122px;" src="https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/click_btn/clickbtn_4.png"></div></div>';
									var kf_width = onval_str.match(/(width|WIDTH):[ \d]*/);
									var kf_height = onval_str.match(/(height|HEIGHT):[ \d]*/);
									if(kf_width)
									{
										var wid_num = kf_width[0].split(":");
										kf_width = wid_num[1];
									}
									else
									{
										kf_width = this.config["width"];
									}
									if(kf_height)
									{
										var hei_num = kf_height[0].split(":");
										kf_height = hei_num[1];
									}
									else
									{
										kf_height = this.config["height"];
									}
									html += "<div id='" + this.config["iconDivMain"] + "' style='z-index:10085;display:" + this.display + ";left: " + this.left + "px; top: " + this.top + "px;width:" + kf_width + "px;height:" + kf_height + "px; overflow:hidden;POSITION: absolute;'>";
									html += hz6d_clicurl(this.config["isonline"],'<div id="KFLOGO" class="Lelem" maxwidth="400" maxheight="400" minwidth="100" minheight="100" style="width: 130px; height: 140px; position: relative; z-index: 10000;"><div class="Lelem" type="img" operating="KF" style="display: block; cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 10001; width: 108px; height: 122px;"><img style="width: 108px; height: 122px;" src="https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/click_btn/clickbtn_4.png"></div></div>','<div id="KFLOGO" class="Lelem" maxwidth="400" maxheight="400" minwidth="100" minheight="100" style="width: 10px; height: 10px; position: relative; z-index: 10000; cursor: pointer;" operating="null"></div>',kf_icons[this.config["id"]].getClickUrl());
									html += "</div>";
								}
								else
								{
									kf += '<div style="text-align:right"><a style="color:#999;stylefont-size:11px;margin-right:3px;display:inline-block;width:112;text-decoration:none;line-height:20px;;font-family: Microsoft YaHei;font-size:10px;-webkit-text-size-adjust:none" onmouseout="this.style.textDecoration=\'none\'" onmouseover="this.style.textDecoration=\'underline\'" target="_blank" href="' + powered_by_53kf_url + '">' + powered_by_53kf_txt + '</a></div>';
									html += "<div id='" + this.config["iconDivMain"] + "' style='z-index:10085;display:" + this.display + ";left: " + this.left + "px; top: " + this.top + "px;width:" + this.config["width"] + "px;height:" + (parseInt(this.config["height"],10) + 20) +  "px; overflow:hidden;POSITION: absolute;'>" + this.closeIcon() + kf + "</div>";
								}
							}
							else
							{
								if ('1')
								{
									var offval_str = '<div id="KFLOGO" class="Lelem" maxwidth="400" maxheight="400" minwidth="100" minheight="100" style="width: 10px; height: 10px; position: relative; z-index: 10000; cursor: pointer;" operating="null"></div>';
									var kf_width = offval_str.match(/(width|WIDTH):[ \d]*/);
									var kf_height = offval_str.match(/(height|HEIGHT):[ \d]*/);
									if(kf_width)
									{
										var wid_num = kf_width[0].split(":");
										kf_width = wid_num[1];
									}
									else
									{
										kf_width = this.config["width"];
									}
									if(kf_height)
									{
										var hei_num = kf_height[0].split(":");
										kf_height = hei_num[1];
									}
									else
									{
										kf_height = this.config["height"];
									}
									html += "<div id='" + this.config["iconDivMain"] + "' style='z-index:10085;display:" + this.display + ";left: " + this.left + "px; top: " + this.top + "px;width:" + kf_width + "px;height:" + kf_height + "px; overflow:hidden;POSITION: absolute;'>";
									html += hz6d_clicurl(this.config["isonline"],'<div id="KFLOGO" class="Lelem" maxwidth="400" maxheight="400" minwidth="100" minheight="100" style="width: 130px; height: 140px; position: relative; z-index: 10000;"><div class="Lelem" type="img" operating="KF" style="display: block; cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 10001; width: 108px; height: 122px;"><img style="width: 108px; height: 122px;" src="https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/click_btn/clickbtn_4.png"></div></div>','<div id="KFLOGO" class="Lelem" maxwidth="400" maxheight="400" minwidth="100" minheight="100" style="width: 10px; height: 10px; position: relative; z-index: 10000; cursor: pointer;" operating="null"></div>',kf_icons[this.config["id"]].getClickUrl());
									html += "</div>";
								}
								else
								{
									kf += '<div style="text-align:right"><a style="color:#999;stylefont-size:11px;margin-right:3px;display:inline-block;width:112;text-decoration:none;line-height:20px;;font-family: Microsoft YaHei;font-size:10px;-webkit-text-size-adjust:none" onmouseout="this.style.textDecoration=\'none\'" onmouseover="this.style.textDecoration=\'underline\'" target="_blank" href="' + powered_by_53kf_url + '">' + powered_by_53kf_txt + '</a></div>';
									html += "<div id='" + this.config["iconDivMain"] + "' style='z-index:10085;display:" + this.display + ";left: " + this.left + "px; top: " + this.top + "px;width:" + this.config["width"] + "px;height:" + (parseInt(this.config["height"],10) + 20) +  "px; overflow:hidden;POSITION: absolute;'>" + this.closeIcon() + kf + "</div>";
								}
							}	
							$53(this.config["iconDiv"]).innerHTML = html;
							this.iconDivMain = $53(this.config["iconDivMain"]);
						}		function set_hz6d_bottom_logo() {
			try {
				if ('server' != "oem")
				{
					clearTimeout(set_hz6d_bottom_logo.timer);
					$53("hz6d_bottom_logo").style.textAlign = 'right';
					$53("hz6d_bottom_logo").style.textIndent = '0px';
					if("blue" == 'pink' || "blue" == 'yellow2'  || "blue" == 'blue2')
					{
						$53("hz6d_bottom_logo").style.lineHeight = $53("hz6d_bottom_logo").parentNode.offsetHeight + 'px';
						$53("hz6d_bottom_logo").style.position = 'relative';
						$53("hz6d_bottom_logo").style.top = '6px';
					}
					$53("hz6d_bottom_logo").style.backgroundImage = '';
					if ("1" == true) {
						$53("hz6d_bottom_logo").innerHTML  = '<a style="text-decoration:none;color:#999;display:inline-block;margin-right:8px;font-size:11px;;font-family: Microsoft YaHei;font-size:10px;-webkit-text-size-adjust:none" onmouseout="this.style.textDecoration=\'none\'" onmouseover="this.style.textDecoration=\'underline\'" target="_blank" href="' + powered_by_53kf_url + '">' + powered_by_53kf_txt + '</a>';
					}
					else {
						$53("hz6d_bottom_logo").innerHTML  = '<a style="text-decoration:none;color:#999;display:inline-block;margin-right:8px;font-size:11px;;font-family: Microsoft YaHei;font-size:10px;-webkit-text-size-adjust:none" onmouseout="this.style.textDecoration=\'none\'" onmouseover="this.style.textDecoration=\'underline\'" target="_blank" href="' + powered_by_53kf_url + '">' + $53("hz6d_bottom_logo").innerHTML + '</a>';
					}
					$53("hz6d_bottom_logo").style.display = '';
				}
			} catch(e) {
				set_hz6d_bottom_logo.timer = setTimeout(set_hz6d_bottom_logo,100);
			}
		}			if (typeof(kf_icons) == "undefined")
			{
				var kf_icons = new Array();
	/*
				function hishow(id, img_url)
				{
					var divname = "hsdiv" + id;
					if ($53(divname).style.display == "none")
					{
						$53(divname).style.display = "block";
						$53("arrow" + id).src = "https://www10c1.53kf.com/" + img_url + "arrow1.gif";
					}
					else
					{
						$53(divname).style.display = "none";
						$53("arrow" + id).src = "https://www10c1.53kf.com/" + img_url + "arrow2.gif";
					}
				}
                */
				//start
				function hishows(id, obj)
				{
					var divname = "hsdiv" + id,
						mark = obj.getAttribute('mark'),
						a = 'https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/list_img/arrow_down_01.png',
						b = 'https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/list_img/arrow_down.gif',
						c = 'https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/list_img/arrow_left_01.png',
						d = 'https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/list_img/arrow_left.gif';
						e = 'https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/list_img/arrow_left_03.png';
						f = 'https://www10c1.53kf.com/style/setting/ver06/img/icon/logo-skin/list_img/arrow_down_03.png';
					if ($53(divname).style.display == "none")
					{
						$53(divname).style.display = "block";
						if(mark == "changeIcon1")
						{
							$53("arrow" + id).src = b;
						}
						if(mark == "changeIcon2")
						{
							$53("arrow" + id).src = a;
						}
						if(mark == "changeIcon3")
						{
							$53("arrow" + id).src = f;
						}
					}
					else
					{
						$53(divname).style.display = "none";
						if(mark == "changeIcon1")
						{
							$53("arrow" + id).src = d;
						}
						if(mark == "changeIcon2")
						{
							$53("arrow" + id).src = c;
						}
						if(mark == "changeIcon3")
						{
							$53("arrow" + id).src = e;
						}
					}
				}
				//end
				function kfIcon()
				{
					this.config = {};
					this.left = -200; // 图标需要到达的 left 
					this.top = 0;
					this.width = 0; // 图标宽度 
					this.height = 0; // 图标宽度 
					this.offsetLeft = 0; // 距离左侧宽度，包括滚动过的距离 
					this.offsetTop = 0; //距离顶部宽度，包括滚动过的距离 
					this.scrolledX = 0; //图标水平滚动条滚动过的距离 
					this.scrolledY = 0;
					this.issmooth = false; //是否平滑移动 
					this.loopmillisecond = 100; //图标循环定位的毫秒，数值越大越慢，对CPU影响越小 
					this.Xstep = 4; //水平步进基数,数字越大越平滑，也越慢 
					this.Ystep = 4;
					this.pageW = 0; //页面总宽度 
					this.pageH = 0;
					this.display = ""; //是否显示图标,值 "none"|"" 
					this.iconDiv = null;
					this.iconDivMain = null;
					this.autoScrollTimer = null;
					this.init = _init;
					this.autoScroll = kfscroll;
					this.createIconDivMain = _createIconDivMain; // 
					this.setParameter = _setParameter; //在 createIconDivMain 中调用 
					this.wopen = _wopen; //同上 
					this.closeIcon = _closeIcon; //同上 
					this.getClickUrl = _getClickUrl; // 获取点击的url 
				};
	
				function kfscroll()
				{
					if (hz6d_icon_type == 3 && 0 == '1') {
						var pageW = $53.getWH().W,				// 页面总宽度
						pageH = $53.getWH().H,				// 页面总高度
						scrolledX = $53.getS().L,			// 图标水平滚动过的距离
						scrolledY = $53.getS().T,			// 图标垂直滚动过的距离
						height = Math.ceil(this.iconDivMain.clientHeight),		// 图标高度
						width = Math.ceil(this.iconDivMain.clientWidth),			// 图标宽度
						l = scrolledX + (pageW -Math.ceil(this.iconDivMain.clientWidth))*(100/100),		// new left
						t = scrolledY + (pageH -Math.ceil(this.iconDivMain.clientHeight))*(40/100),		// new top
						left = Math.ceil(this.iconDivMain.style.left.replace("px", "")),						// old left
						top = Math.ceil(this.iconDivMain.style.top.replace("px", ""));						// old top

						
						//超出窗口边界，直接移动到窗口边界再平滑移动 
						if (this.issmooth == true)
						{
							if (left != l)
							{
								if (left < (scrolledX - width)) left = scrolledX - width;
								if (left > scrolledX + pageW) left = scrolledX + pageW;
								left = smoothMove(left, l);
							}
							if (top != t)
							{
								if (top < (scrolledY - height)) top = scrolledY - height;
								if (top > scrolledY + pageH) top = scrolledY + pageH;
								top = smoothMove(top, t);
							}
						}
						else if (this.issmooth == false)
						{
							left = l;
							top = t;
							this.issmooth = true;
						}

						this.iconDivMain.style.left = left + "px";
						this.iconDivMain.style.top = top + "px";
						return;
					}
					if (hz6d_icon_type != -1) return;//新版保存过 按新版百分比定位
					try
					{
						this.offsetLeft = this.iconDivMain.offsetLeft;
						this.width = parseInt(this.iconDivMain.style.width.replace("px", ""));
						this.height = parseInt(this.iconDivMain.style.height.replace("px", ""));
					}
					catch (e)
					{
						return;
					}
	
					this.scrolledY = $53.getS().T;
					this.scrolledX = $53.getS().L;
					this.pageH = $53.getWH().H;
					this.pageW = $53.getWH().W;
	
					if (this.config["v_showmodel"] == 1)
					{
						if (this.top != (this.scrolledY + this.pageH))
						{
							var iconDivHeight = this.scrolledY + this.config["offsetH"] - this.offsetTop;
							iconDivHeight = (iconDivHeight > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivHeight));
							this.top = this.offsetTop + iconDivHeight;
						}
					}
					else
					{	
                        if(isNaN(this.height)){
                            this.height = document.getElementById(this.config["iconDivMain"]).offsetHeight;    
                        }
                        if (this.top != (this.scrolledY + this.pageH - this.height - this.config["offsetH"]))
                        {
                            				
                        	var iconDivHeight = this.scrolledY + this.pageH - this.height - this.config["offsetH"] - this.offsetTop;
                        	iconDivHeight = (iconDivHeight > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivHeight));
                        	this.top = this.offsetTop + iconDivHeight;
                        }
								
					}
	
					if (this.config["showmodel"] == 1)
					{
						if (this.left != (this.scrolledX + this.pageW))
						{
							var iconDivWidth = this.scrolledX + this.config["offsetW"] - this.offsetLeft;
							iconDivWidth = (iconDivWidth > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivWidth));
							this.left = this.offsetLeft + iconDivWidth;
						}
					}
					else
					{
						if (this.left != (this.scrolledX + this.pageW - this.width - this.config["offsetW"]))
						{
							var iconDivWidth = this.scrolledX + this.pageW - this.width - this.config["offsetW"] - this.offsetLeft;
							iconDivWidth = (iconDivWidth > 0 ? 1 : -1) * Math.ceil(Math.abs(iconDivWidth));
							this.left = this.offsetLeft + iconDivWidth;
						}
					}
	
					//set kf_icon postiotn
					//超出窗口边界，直接移动到窗口边界再平滑移动 
					var left = parseInt(this.iconDivMain.style.left.replace("px", ""));
					var top = parseInt(this.iconDivMain.style.top.replace("px", ""));
	
					if (this.issmooth == true)
					{
						if (left != this.left)
						{
							if (left < (this.scrolledX - this.width)) left = this.scrolledX - this.width;
							if (left > this.scrolledX + this.pageW) left = this.scrolledX + this.pageW;
							left = smoothMove(left, this.left);
						}
						if (top != this.top)
						{
							if (top < (this.scrolledY - this.height)) top = this.scrolledY - this.height;
							if (top > this.scrolledY + this.pageH) top = this.scrolledY + this.pageH;
							top = smoothMove(top, this.top);
						}
					}
					else if (this.issmooth == false)
					{
						left = this.left;
						top = this.top;
						this.issmooth = true;
					}
	
					this.iconDivMain.style.left = left + "px";
					this.iconDivMain.style.top = top + "px";
				};
	
				function _wopen(com)
				{
					if (this.config["is_zdyurl"] == 1) window.open(this.config["zdyurl"], "_blank", "height=" + 600 + ",width=" + 800 + ",top=50,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
					else window.open(this.config["server_path"] + "/webCompany.php?kf_sign=Dc1NTMTYxOQzNzEwMDU1NzEwNDc4MDIyNzA3NTEyNjk=&arg=" + this.config["arg"] + com, "_blank", "height=" + 600 + ",width=" + 800 + ",top=50,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
				};
	
				function _setParameter()
				{
					var params = "";
					params += this.config["style_id"];
					params += this.config["language"];
					params += this.config["charset"];
				//	params += this.config["introurl"];
					params += this.config["kf"];
					params += this.config["referer"];
					params += this.config["keyword"];
					params += this.config["tfrom"];
                    params += this.config["company_tpl"];
					params += this.config["u_stat_id"];
                                        params += this.config["uid"];
                                        params += this.config["is_group"];
					return params;
				};
				
				function _getClickUrl()
				{
					var _click_str = '';
				
						_click_str += 'setIsinvited();';
						if (this.config["is_zdyurl"] == 1)
						{
							_click_str += 'window.open(\'' + this.config["zdyurl"] + '\', \'_blank\', \'height=600,width=800,top=50,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\')';
						}
						else
						{
							_click_str += 'window.open(\'' + this.config["server_path"] + '/webCompany.php?kf_sign=Dc1NTMTYxOQzNzEwMDU1NzEwNDc4MDIyNzA3NTEyNjk=&arg=' + this.config["arg"] + this.setParameter() + '\', \'_blank\', \'height=600,width=800,top=50,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\')';
						}
			
					return _click_str;
				}

				function _closeIcon()
				{
					return "";
				};
	           
				function _init()
				{
					$53.creElm({id: this.config["iconDiv"],style:'height:auto;width:auto;'},'div');
					this.iconDiv = $53(this.config["iconDiv"]);
					this.createIconDivMain();
				};
			}
			if (typeof(kf_icon_id) == "undefined") kf_icon_id = 1;
			else kf_icon_id++;
			kf_icons[kf_icon_id] = new kfIcon();
			kf_icons[kf_icon_id].config["id"] = kf_icon_id;
			kf_icons[kf_icon_id].config["arg"] = "9007605";
			kf_icons[kf_icon_id].config["style_id"] = "&style=1";
			kf_icons[kf_icon_id].config["isonline"] = "1";
	    	kf_icons[kf_icon_id].config["zdytb_on_arrs"] = [];
	    	kf_icons[kf_icon_id].config["zdytb_off_arrs"] = [];
	    	if (2 == 2)kf_icons[kf_icon_id].config["zdytb_on_arrs"] = init_zdytb_arr("1,\u5916\u6846,-,112,116,-,-,1,-,no-repeat,-,-,-,-,12,-,-,-,-,none,\u5b8b\u4f53,-,-,-,-,_blank#2,\u5728\u7ebf\u56fe\u6807,chat,112,116,0,0,2,https:\/\/www10c1.53kf.com\/img\/kflogo\/v5_2.gif,no-repeat,-,-,zdy,-,12,000000,-,-,-,none,\u5b8b\u4f53,-,-,-,-,_blank");
	    	if (2 == 2)kf_icons[kf_icon_id].config["zdytb_off_arrs"] = init_zdytb_arr("1,\u5916\u6846,-,112,116,-,-,1,-,no-repeat,-,-,-,-,12,-,-,-,-,none,\u5b8b\u4f53,-,-,-,-,_blank#2,\u79bb\u7ebf\u56fe\u6807,chat,112,116,0,0,2,https:\/\/www10c1.53kf.com\/img\/kflogo\/v5_2_off.gif,no-repeat,-,-,zdy,-,12,000000,-,-,-,none,\u5b8b\u4f53,-,-,-,-,_blank");
			kf_icons[kf_icon_id].config["img_on"] = "https://www10c1.53kf.com/img/kflogo/v5_2.gif";
			kf_icons[kf_icon_id].config["img_off"] = "https://www10c1.53kf.com/img/kflogo/v5_2_off.gif";
			kf_icons[kf_icon_id].config["height"] = "116";
			kf_icons[kf_icon_id].config["width"] = "112";
			kf_icons[kf_icon_id].config["auto_hidden_img"] = "";
			kf_icons[kf_icon_id].config["hidden_img_height"] = "";
			kf_icons[kf_icon_id].config["hidden_img_width"] = "";
			kf_icons[kf_icon_id].config["showmodel"] = parseInt("2");
			kf_icons[kf_icon_id].config["offsetW"] = parseInt("1");
			kf_icons[kf_icon_id].config["v_showmodel"] = parseInt("1");
			kf_icons[kf_icon_id].config["offsetH"] = parseInt("165");
			kf_icons[kf_icon_id].config["language"] = "&language=zh-cn";

			kf_icons[kf_icon_id].config["charset"] = "&charset=gbk";
			kf_icons[kf_icon_id].config["kf"] = "&kflist=off&kf=anna@ecfocus.com,13590308967@qq.com&zdkf_type=1&lnk_overflow=0&callback_id6ds=10150756,10421534";
			kf_icons[kf_icon_id].config["referer"] = hz6d_referer;
			kf_icons[kf_icon_id].config["keyword"] = hz6d_from_page_new;
			kf_icons[kf_icon_id].config["tfrom"] = "&tfrom=1";
	//		kf_icons[kf_icon_id].config["record_url"] = "";
            kf_icons[kf_icon_id].config["u_stat_id"] = "";
            kf_icons[kf_icon_id].config["uid"] = "&uid=9e2e2c2d602da3fabf5484f01043c7d0";                                    
            kf_icons[kf_icon_id].config["is_group"] = "&is_group=&is_group=";                                    
			var hz6d_zdyurl = "?arg=9007605&style=1&kflist=off&kf=anna@ecfocus.com,13590308967@qq.com&zdkf_type=1&lnk_overflow=0&callback_id6ds=10150756,10421534&language=zh-cn&charset=gbk&referer={hz6d_referer}{hz6d_keyword}&tpl=crystal_blue";
			hz6d_zdyurl = hz6d_html_replace(hz6d_zdyurl);
			kf_icons[kf_icon_id].config["zdyurl"] = hz6d_zdyurl;
			kf_icons[kf_icon_id].config["is_zdyurl"] = "0";
			kf_icons[kf_icon_id].config["path"] = "http://tb.53kf.com";
			kf_icons[kf_icon_id].config["server_path"] = "https://www10c1.53kf.com";
			kf_icons[kf_icon_id].config["company_tpl"] = "&tpl=crystal_blue";
			kf_icons[kf_icon_id].config["iconDivMain"] = "iconDivMain" + kf_icon_id;
			kf_icons[kf_icon_id].config["iconDiv"] = "iconDiv" + kf_icon_id;
			$53.ready(function(){kf_icons[kf_icon_id].init()});
			kf_icons[kf_icon_id].autoScrollTimer = window.setInterval("kf_icons[" + kf_icon_id + "].autoScroll()", kf_icons[kf_icon_id].loopmillisecond);		function positionIcon(){
			if (0 == '0') {
				try{
					if (hz6d_icon_type == 3) {
						var wid = $53.getWH().W;
						var hei = $53.getWH().H;
						var im = document.getElementById("iconDivMain"+kf_icon_id) || document.getElementById("hz6d_kf_icon_"+kf_icon_id);
						im.style.position = 'fixed';
						im.style.right = 'auto';
						im.style.left = (wid-parseInt(im.clientWidth))*(100/100)+'px';
						im.style.bottom = 'auto';
						im.style.top = (hei-parseInt(im.clientHeight))*(40/100)+'px';
					}else if (hz6d_icon_type != -1) {
						fk.positionIcon(inv_left,inv_top);
					}
				}catch(e){}
			}
			try{
				if (0 == '1') {
					fk.lottoPositionIcon(100,40);
				}
			}catch(e){}
		}
		positionIcon();
		try{
			window.addEventListener("resize",function(){positionIcon()},false);
		}catch(e){
			window.attachEvent("onresize",function(){positionIcon()});
		}