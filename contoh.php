<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Live Chat Messenger Intiwhiz International</title>	
	<link rel="shortcut icon" href="/livechat/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="/livechat/styles/intiwhiz/chat.css" media="all" />
	<script type="text/javascript" src="/livechat/js/1614/common.js"></script>
	<script type="text/javascript" src="/livechat/js/1614/brws.js"></script>
		<link rel="stylesheet" type="text/css" href="/livechat/styles/intiwhiz/chat.css" />
	<script type="text/javascript" src="/livechat/js/1614/respond.min.js"></script>
	<script type="text/javascript">
		<!--
		var threadParams = {
			servl:"/livechat/thread.php",wroot:"/livechat",frequency:2,user:"true",threadid:10,token:6071233,cssfile:"/livechat/styles/intiwhiz/chat.css",ignorectrl:0
		};
		var stxt = 10;
		function getClientHeight() {
			return document.compatMode=='CSS1Compat' || !window.opera?document.documentElement.clientHeight:document.body.clientHeight;
		}
		function getClientWidth() {
			return document.compatMode=='CSS1Compat' || !window.opera?document.documentElement.clientWidth:document.body.clientWidth;
		}
		function setTrueHeight() {
			chatHeight = getClientHeight();
			someHeight = chatHeight-document.getElementById("top").offsetHeight-document.getElementById("chatheader").offsetHeight-document.getElementById("message").offsetHeight-document.getElementById("send").offsetHeight-1;
			document.getElementById("chat").style.height = (someHeight) + "px";
			document.getElementById("chatwnd").style.height = (someHeight-38) + "px";
			
				document.getElementById("avatar-wrapper").style.height = (someHeight-39) + "px";
			

			chatWidth = getClientWidth();
			
				someWidth = chatWidth-28-120;
			
			document.getElementById("chatwnd").style.width = (someWidth) + "px";
		}
		function enlargeFontSize() {
			stxt += 2;
			if (stxt > 14) {
				stxt = 14;
			}
			window.chatwnd.document.getElementById("content").style.fontSize = (stxt) + "px";
		}
		function reduceFontSize() {
			stxt -= 2;
			if (stxt < 8) {
				stxt = 8;
			}
			window.chatwnd.document.getElementById("content").style.fontSize = (stxt) + "px";
		}
		window.onresize = setTrueHeight;		
		//-->
	</script>
	<script type="text/javascript" src="/livechat/js/1614/chat.js"></script>
</head>
<body class="body">
	<div id="badan">
	<div id="top">
		<div id="logo">
			
				
					<a onclick="window.open('http://www.intiwhiz.com');return false;" href="http://www.intiwhiz.com">
						<img onload="setTrueHeight();" src="https://secure.roomnrate.com/intiwhiz/logo_intiwhiz.png" alt=""/>
					</a>
				
			
			&nbsp;
			<div id="page-title">Live Support</div>
			<div class="clear">&nbsp;</div>
		</div>
	</div>
	<div id="chatheader">
		<div class="bgc"><div class="bgl"><div class="bgr">
			
			
				
					<div id="changename1" style="display:inline;">
						<div class="you">You are</div>
						<div class="input-name"><input id="uname" type="text" size="12" value="Guest" class="username"  readonly="readonly"/></div>
						<a class="changename" href="javascript:void(0)" onclick="return false;" title="Change name"><img class="tplimage iexec" src="/livechat/images/free.gif" alt="&gt;&gt;" /></a>
					</div>
					<div id="changename2" style="display:none;">
						<div class="you2">You are</div>
						<a id="unamelink" href="javascript:void(0)" onclick="return false;" title="Change name">Guest</a>
						<a class="changename" href="javascript:void(0)" onclick="return false;" title="Change name"><img class="tplimage ichangeuser" src="/livechat/images/free.gif" alt="" /></a>
					</div>
				
			
			<div class="buttons">
				<a href="javascript:void(0)" onclick="reduceFontSize();"><img class="tplimage fontreduce" src="/livechat/images/free.gif" alt="Reduce font&nbsp;" /></a>
				<a href="javascript:void(0)" onclick="enlargeFontSize();"><img class="tplimage fontenlarge" src="/livechat/images/free.gif" alt="Enlarge font&nbsp;" /></a>
				<img class="empty" src="/livechat/images/free.gif" alt="" />
				
					<a href="/livechat/client.php?thread=10&amp;token=6071233&amp;level=ajaxed&amp;act=mailthread&amp;style=intiwhiz" target="_blank" title="Send chat history by e-mail" onclick="this.newWindow = window.open('/livechat/client.php?thread=10&amp;token=6071233&amp;level=ajaxed&amp;act=mailthread&amp;style=intiwhiz', 'ForwardMail', 'toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,width=603,height=254,resizable=0'); if (this.newWindow != null) {this.newWindow.focus();this.newWindow.opener=window;}return false;"><img class="tplimage iemail" src="/livechat/images/free.gif" alt="Mail&nbsp;"/></a>
				
				
				<a id="togglesound" href="javascript:void(0)" onclick="return false;" title="Toggle sound on/off"><img id="soundimg" class="tplimage isound" src="/livechat/images/free.gif" alt="Sound&nbsp;" /></a>
				<a id="refresh" href="javascript:void(0)" onclick="return false;" title="Refresh"><img class="tplimage irefresh" src="/livechat/images/free.gif" alt="Refresh&nbsp;" /></a>
				
				<a class="closethread" href="javascript:void(0)" onclick="return false;" title="Close chat"><img class="tplimage iclosewin" src="/livechat/images/free.gif" alt="Close chat"/></a>
			</div>
		</div></div></div>
	</div>
	<div id="chat">
		<div class="bgl"><div class="bgr"><div class="sdwbgc"><div class="sdwbgl"><div class="sdwbgr">
			<iframe onload="setTrueHeight();" id="chatwnd" name="chatwnd" src="" frameborder="0" style="width:100%;">
				Sorry, your browser does not support iframes; try a browser that supports W3 standards.
			</iframe>
			<div id="inf">
				<div id="engineinfo" style="display:none;"></div>
				<div id="typingdiv" style="display:none;">Remote user is typing...</div>
			</div>
			
			
			</div></div></div></div></div>
	</div>
	</div>
	<div id="message">
	
		<div class="bgc"><div class="bgl"><div class="bgr">
			<textarea id="msgwnd" class="message" tabindex="0" rows="4" cols="10"></textarea>
		</div></div></div>
	
	</div>
	<div id="send">
	
		<div id="postmessage">
			<div id="predefined-wrapper">
				
			</div>
			<a id="sndmessagelnk" href="javascript:void(0)" onclick="return false;" title="Send message">Send (Ctrl-Enter)</a>
			<div class="clear">&nbsp;</div>
		</div>
	
		<div id="footer"></div>
	</div>
</body>
</html>