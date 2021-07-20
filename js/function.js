function $2(ObjID){

	return document.getElementById(ObjID);

}



function Ajax(TagID,UrlStr){ 

	var xmlHttp=GetXmlHttpObject();

	if (xmlHttp==null){

  		alert ("您的浏览器不支持AJAX!");

		return false;

	}

	var Url="ajax.php"+UrlStr+"&sid="+Math.random();

	xmlHttp.onreadystatechange=function(){

		if (xmlHttp.readyState==4){ 

			if (xmlHttp.status==200){

				if (TagID!="") $2(TagID).innerHTML=xmlHttp.responseText;

			}

		}

	}

	xmlHttp.open("GET",Url,true);

	xmlHttp.send(null);

}



function GetXmlHttpObject(){

	var XmlHttp=null;

	try{

		XmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari

	}

	catch (e){

 	 	// Internet Explorer

  		try{

			XmlHttp=new ActiveXObject("Msxml2.XMLHTTP");

		}

  		catch (e){

			XmlHttp=new ActiveXObject("Microsoft.XMLHTTP");

		}

 	}

	return XmlHttp;

}



function Nav(Val){

	try{

		var Node=$2("nav");

		var TagCount=Node.getElementsByTagName("a").length;

		var Nodes;

		for (var i=0;i<TagCount;i++){

			Nodes=Node.getElementsByTagName("a")[i];

			Nodes.Index=i;

			Nodes.className="nav_out";			

		}

		Node.getElementsByTagName("a")[Val].className="nav_over";

	}

	catch(e){

	}

}

function showbox(ID){
	for(i=1; i<31; i++)
	{
		$("#quyu"+i).hide();
		 $(".diqu"+i).removeClass("cur");	

		}
		
		
	$(".diqu"+ID).addClass("cur");	
	$("#quyu"+ID).show();
	
	$.get("ajax.php?meter=showbox&id="+ID+"&sj="+Math.random(),function(data){$("#quyu"+ID).html(data)});
}


function closebox(ID){
 
 	$(".diqu"+ID).removeClass("cur");	
	$("#quyu"+ID).hide();
 }


function DisDiv(ObjID,Val){

	if (Val==0){

		$2(ObjID).style.display="none";

	}

	else{

		$2(ObjID).style.display="block";

	}

}



function DisDivs(ObjID){

	if ($2(ObjID).style.display=="none"){

		$2(ObjID).style.display="block";

	}

	else{

		$2(ObjID).style.display="none";

	}

}



function MarqueeImage(ObjDiv,Obj1,Obj2,Direction,Speed){

    var demo1 = $2(Obj1);

    var demo2 = $2(Obj2);

    var mydiv = $2(ObjDiv);

	var Tid;

	switch(Direction){

	case "left":

		if (demo1.offsetWidth<=mydiv.offsetWidth) return;

		break;

	case "right":

		if (demo1.offsetWidth<=mydiv.offsetWidth) return;

		break;

	case "top":

		if (demo1.offsetHeight<=mydiv.offsetHeight) return;

		break;

	case "bottom":

		if (demo1.offsetHeight<=mydiv.offsetHeight) return;

		break;

	}

    demo2.innerHTML=demo1.innerHTML;

    Tid=setInterval(Marquee,Speed)

    mydiv.onmouseover=function(){clearInterval(Tid)}

    mydiv.onmouseout=function(){Tid=setInterval(Marquee,Speed)}

    

    function Marquee(){

		switch(Direction){

		case "left":

            if(mydiv.scrollLeft>=demo1.offsetWidth)

                mydiv.scrollLeft=0;

            else

                mydiv.scrollLeft++;

			break;

		case "right":

            if(mydiv.scrollLeft==0)

                mydiv.scrollLeft=demo1.offsetWidth;

            else

                mydiv.scrollLeft--;

			break;

		case "top":

			if(mydiv.scrollTop>=demo1.offsetHeight)

                mydiv.scrollTop=0;

            else

                mydiv.scrollTop++;

			break;

		case "bottom":

			if(mydiv.scrollTop==0)

                mydiv.scrollTop=demo1.offsetHeight;

            else

                mydiv.scrollTop--;

			break;

		}

    }

}



function AddFavorite(sURL,sTitle){

	sURL=encodeURI(sURL); 

	try{

		window.external.addFavorite(sURL,sTitle);

	}

	catch(e){

		try{

			window.sidebar.addPanel(sTitle,sURL,"");

		}

		catch(e){

			alert("加入收藏失败，请使用Ctrl+D进行添加，或手动在浏览器里进行设置！");

		}

	}

}



function SetHome(Url){

	if (document.all){

		document.body.style.behavior='url(#default#homepage)';

		document.body.setHomePage(Url);

	}

	else{

		alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页！");

	}

}



function CheckSearch(Language){

	var SearchKey=$2("search_key");

	if (SearchKey.value=="" || SearchKey.value=="请输入搜索关键词" || SearchKey.value=="Please enter keywords"){

		if (Language=="cn"){

			alert("请输入搜索关键词！");

		}

		else{

			alert("Please enter keywords!");

		}

		SearchKey.focus();

		return;

	}

	location.href="search.php?search_key="+encodeURI(SearchKey.value);

}



function CheckSearch2(Evt,Language){

	Evt=Evt?Evt:(window.event?window.event:"");

	var Key=Evt.keyCode?Evt.keyCode:Evt.which;

	if (Key==13){

		var SearchKey=$2("search_key");

		if (SearchKey.value=="" || SearchKey.value=="请输入搜索关键词" || SearchKey.value=="Please enter keywords"){

			if (Language=="cn"){

				alert("请输入搜索关键词！");

			}

			else{

				alert("Please enter keywords!");

			}

			SearchKey.focus();

			return;

		}

		location.href="search.php?search_key="+encodeURI(SearchKey.value);

	}

}



function FloatDiv(ObjID,Ch){

	var Did=$2(ObjID);

	var DidTop=parseInt(Did.style.top);

	var Diff=(document.documentElement.scrollTop+document.body.scrollTop+Ch-DidTop)*.80;

	Did.style.top=Ch+document.documentElement.scrollTop+document.body.scrollTop-Diff+"px";

	setTimeout("FloatDiv('"+ObjID+"',"+Ch+")",20);

}

function FloatDiv2(ObjID,Ch){

	var Did=$2(ObjID);

	var DidTop=parseInt(Did.style.top);

	var Diff=(document.documentElement.clientHeight-53-Ch+document.documentElement.scrollTop+document.body.scrollTop-DidTop)*.80;

	Did.style.top=document.documentElement.clientHeight-53-Ch+document.documentElement.scrollTop+document.body.scrollTop-Diff+"px";

	setTimeout("FloatDiv2('"+ObjID+"',"+Ch+")",20);

}



function CheckMessage(ObjForm){

	if (ObjForm.f_company.value==""){

		alert("请输入单位名称！");

		ObjForm.f_company.focus();

		return false;

	}

	if (ObjForm.f_name.value==""){

		alert("请输入联系人！");

		ObjForm.f_name.focus();

		return false;

	}

	if (ObjForm.f_tel.value==""){

		alert("请输入联系电话！");

		ObjForm.f_tel.focus();

		return false;

	}

	if (ObjForm.f_code.value==""){

		alert("请输入验证码！");

		ObjForm.f_code.focus();

		return false;

	}

	Reg=/^\w{4}$/;

	if (!Reg.test(ObjForm.f_code.value)){

		alert("无效的验证码！");

		return false;

	}

	ObjForm.submit();

}


 

function showcases(ID){
	
	var page=$2("page");
 
 	$.get("ajax.php?meter=showcases&cid="+ID+"&page="+page.value+"&sj="+Math.random(),function(data){
		
		$("#page").val(parseInt(page.value)+1);
		
		$("#clist").append(data)
		
		});
}


   

function QQ_Close(){

	if($("#qq_online").css("right")=="-130px"){

		$("#qq_online").animate({right:"0px"},300);

	}

	else {

		$("#qq_online").animate({right:"-130px"},300);

	}

}