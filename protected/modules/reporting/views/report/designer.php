		<script type="text/javascript">
			function getCallbackUrl() {
				var href = document.location.href;
				if (href.indexOf("?") > 0) href = href.substr(0, href.indexOf("?"));
				//return href + "#MARKER_REPORT_PARAMS#";
                return href + "<?php echo $MARKER_REPORT_PARAMS?>";
			}
			
			function changeTitle(title) {
				window.document.title = title;
			}
			
			function printAsHtml(text) {
				if (navigator.userAgent.indexOf("Opera") != -1)
				{
					var operaWin = window.open("about:blank");
					operaWin.document.body.innerHTML = text;
					operaWin.opener.focus();
					operaWin.print();
					operaWin.close();
					operaWin = null;
				}
				else
				{
					printFrame = document.getElementById("printFrame");
					if (printFrame == null)
					{
						printFrame = document.createElement("iframe");
						printFrame.id = "printFrame";
						printFrame.name = "printFrame";
						printFrame.width = "0px";
						printFrame.height = "0px";
						printFrame.style.position = "absolute";
						printFrame.style.border = "none";
						document.body.appendChild(printFrame, document.body.firstChild);
					}
					
					printFrame.contentWindow.document.open();
					printFrame.contentWindow.document.write(text);
					printFrame.contentWindow.document.close();
					printFrame.contentWindow.focus();
					printFrame.contentWindow.print();
				}
			}
			
			// Available commands: Save, Exit, ExitImmediately
			function sendCommand(command) {
				var flashMovie = document.getElementById("DesignerFx_PHP");
				flashMovie.send(command);
			}
			
			var swfVersionStr = "10.2.0";
			<!-- To use express install, set to playerProductInstall.swf, otherwise the empty string. -->
			var xiSwfUrlStr = "<?php echo $this->module->getAssetsUrl()?>/swf/playerProductInstall.swf";
			var flashvars = {};
			var params = {};
			params.quality = "high";
			params.bgcolor = "#e8e8e8";
			params.allowscriptaccess = "always";
			params.allowfullscreen = "true";
			var attributes = {};
			attributes.id = "DesignerFx_PHP";
			attributes.name = "DesignerFx_PHP";
			attributes.align = "middle";
			swfobject.embedSWF(
				"<?php echo $this->module->getAssetsUrl()?>/swf/DesignerFx_PHP.swf", "flashContent", "100%", "100%", 
				swfVersionStr, xiSwfUrlStr, flashvars, params, attributes);
			<!-- JavaScript enabled so display the flashContent div in case it is not replaced with a swf object. -->
			swfobject.createCSS("#flashContent", "display:block;text-align:left;");
		</script>
	</head>
	<body>
		<div id="flashContent">
			<p>To view this page ensure that Adobe Flash Player version 10.2 or greater is installed.</p>
			<script type="text/javascript"> 
				var pageHost = ((document.location.protocol == "https:") ? "https://" :	"http://"); 
				document.write("<a href='http://www.adobe.com/go/getflashplayer'><img src='" 
								+ pageHost + "www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a>" ); 
			</script> 
		</div>
		
		<noscript>
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="DesignerFx_PHP">
				<param name="movie" value="<?php echo $this->module->getAssetsUrl()?>/swf/DesignerFx_PHP.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#e8e8e8" />
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="allowFullScreen" value="true" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="<?php echo $this->module->getAssetsUrl()?>/swf/DesignerFx_PHP.swf" width="100%" height="100%">
					<param name="quality" value="high" />
					<param name="bgcolor" value="#e8e8e8" />
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="allowFullScreen" value="true" />
				<!--<![endif]-->
				<!--[if gte IE 6]>-->
					<p>Either scripts and active content are not permitted to run or Adobe Flash Player version 10.2 or greater is not installed.</p>
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflashplayer">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</noscript>