/**
 * @author: Slopjong
 */
(function($){

	// If jQuery Tools are loaded outside this scope, be sure that the overlay tool is included
	// and set the following variable to true. If it's set to false the overlay tool defined in 
	// this scope (at the bottom) will be used, which affects the global jQuery variable by
	// extending it with the object member 'tools' also available outside this scope.
	var useExternalOverlayTool = false;
	
	// where is our LPI wiki page?
	var lpicWikiPage = "http://example.com";

	// opening the links in the popup in a new tab?
	var openInNewTab = true;
	
	// LPI checkbox ID used on the production website
	var lpiCheckboxId = "workshop-0";
	
	/*********************************************************************************************/

	// do all the overlay stuff as soon as the document is completely loaded
	$(document).ready(function(){
			
		// timestamp being set on showing the popup 
		var overlayOnShowTimestamp = undefined;	
		
		// the LPI checkbox
		var checkbox = $('#'+ lpiCheckboxId);
		
		// we need to set the relationship in order to use the overlay tool
		checkbox.attr("rel", "#lpi-registration-overlay");
		
		// put a trigger after the checkbox, the checkbox can't be the trigger itself,
		// the click event handler goes crazy for whatever reason
		var trigger = $('<div id="lpi-registration-trigger" rel="#lpi-registration-overlay"></div>');
		checkbox.after(trigger);
	
		var overlay = $('\
			<div id="lpi-registration-overlay" class="modal"> \
				<h2>LPI Certification</h2> \
				\
				<p> \
					We don\'t charge you for the certification costs during the Haxogreen registration process because this is an extra fee being paid on the exam day. \
				</p> \
				<p> \
					On conferences the price is 80 &euro; (or 100 &euro; for LPIC-3 exam 301) which is nearly half of the regular price <strong>but</strong> we support the open source community and cut the price off half for the first 12 attendees that are also registrating for the LPI certification. \
				</p> \
				<p> \
					Though this offer is limited to one exam only because our budget has a upper limit. This means that if you are taking multiple exams you have to pay the full price for the others. \
				</p> \
				<p> \
					More information about the pricing and how to proceed with the exact registration of the certification can be found on this <a href="'+ lpicWikiPage +'" target="'+ /*( openInNewTab ? '_blank' : '' ) +*/'">wiki page</a>. \
				</p> \
				<p> \
					If you agree with the above conditions <strong>and</strong> are aware of the extra costs being paid on the exam day click <em>I\'ve understood</em>, <em>Cancel</em> else. \
				</p> \
				\
				<p id="lpi-take-your-time">Are you sure that you\'ve read these information carefully? We think that you\'ve clicked the button by accident that fast and give you <span id="lpi-read-time"></span> more seconds to spend on this, for free.</p> \
				\
				<button id="lpi-registration-accept">I\'ve understood</button> \
				<button id="lpi-registration-cancel" class="close">Cancel</button> \
				\
			</div> \
		');
		
		// if configured, the links are opened in a new tab
		if(openInNewTab)
			$("a", overlay).attr("target", "_blank");
		
		// style the overlay
		overlay
			.css("background-color", "#ffffff")
			.css("border", "2px solid #333333")
			.css("border-radius", "20px 20px 20px 20px")
			.css("box-shadow", "0 0 150px 200px #eeeeee")
			.css("display", "none")
			.css("opacity", "1")
			.css("padding", "25px")
			.css("text-align", "left")
			.css("width", "642px")
			;
			
		// style the header inside the overlay
		$("h2", overlay)
			.css("border-bottom","1px solid #333333")
			.css("font-size", "20px")
			.css("margin", "0")
			.css("margin-bottom", "15px")
			;
	
		// style the 'take your time' message
		$("#lpi-take-your-time", overlay)
			.hide()
			.css("border", "#FBC2C4 solid 1px")
			.css("background", "#FBE3E4")
			.css("padding", "10px")
			;
		
		// if the overlay is inserted after the trigger element the script has a strange behaviour
		// and doesn't work correctly. So always append it to the body itself, it's far less
		// error-prone.
		$("body").append(overlay);
	
		// function to show the popup but only if the checkbox isn't checked.
		// later in this script a click event is triggered and this would be a
		// never-ending story otherwise
		var showPopup = function(event){
			if(checkbox.is(":checked")){
				event.preventDefault();
				trigger.data("overlay").load();
				overlayOnShowTimestamp = Date.now();
			}
		}
	
		// bind the showPopup function to the checkbox click event
		checkbox.click(showPopup);
		
		// initialize the overlay done on the trigger element and not on the overlay itself
		trigger.overlay({
			mask: {
			color: '#ebecff',
			loadSpeed: 200,
			opacity: 0.9,
			closeOnClick: false
			},
			closeOnClick: false
		});
		
		// bind the accept button click. The user must wait 60 seconds to be able to accept
		$("#lpi-registration-accept").click(function(event){
			
			// the timestamp should be set whenever the overlay appears
			if(overlayOnShowTimestamp !== undefined){
				var diff = Math.ceil( (Date.now() - overlayOnShowTimestamp) / 1000 );
				
				if(diff > 60) {
					checkbox.click();
					trigger.data("overlay").close();
					$("#lpi-take-your-time").hide();
				}
				else {
					//console.log(diff);
					$("#lpi-take-your-time").show("slow");
					$("#lpi-read-time").text(60 - diff);
				}
			}
		});	
	});
	
	/*********************************************************************************************/
	
	/**
	 * jQuery Tools, only the overlay part
	 * works fine with jQuery 1.4.2 and upwards, maybe also with older jQuery versions (not tested)
	 * Important: don't put this in the jQuery's ready event handler because the script breaks then
	 **/
	if(!useExternalOverlayTool)
		(function(a){a.tools=a.tools||{version:"v1.2.6"},a.tools.overlay={addEffect:function(a,b,d){c[a]=[b,d]},conf:{close:null,closeOnClick:!0,closeOnEsc:!0,closeSpeed:"fast",effect:"default",fixed:!a.browser.msie||a.browser.version>6,left:"center",load:!1,mask:null,oneInstance:!0,speed:"normal",target:null,top:"10%"}};var b=[],c={};a.tools.overlay.addEffect("default",function(b,c){var d=this.getConf(),e=a(window);d.fixed||(b.top+=e.scrollTop(),b.left+=e.scrollLeft()),b.position=d.fixed?"fixed":"absolute",this.getOverlay().css(b).fadeIn(d.speed,c)},function(a){this.getOverlay().fadeOut(this.getConf().closeSpeed,a)});function d(d,e){var f=this,g=d.add(f),h=a(window),i,j,k,l=a.tools.expose&&(e.mask||e.expose),m=Math.random().toString().slice(10);l&&(typeof l=="string"&&(l={color:l}),l.closeOnClick=l.closeOnEsc=!1);var n=e.target||d.attr("rel");j=n?a(n):null||d;if(!j.length)throw"Could not find Overlay: "+n;d&&d.index(j)==-1&&d.click(function(a){f.load(a);return a.preventDefault()}),a.extend(f,{load:function(d){if(f.isOpened())return f;var i=c[e.effect];if(!i)throw"Overlay: cannot find effect : \""+e.effect+"\"";e.oneInstance&&a.each(b,function(){this.close(d)}),d=d||a.Event(),d.type="onBeforeLoad",g.trigger(d);if(d.isDefaultPrevented())return f;k=!0,l&&a(j).expose(l);var n=e.top,o=e.left,p=j.outerWidth({margin:!0}),q=j.outerHeight({margin:!0});typeof n=="string"&&(n=n=="center"?Math.max((h.height()-q)/2,0):parseInt(n,10)/100*h.height()),o=="center"&&(o=Math.max((h.width()-p)/2,0)),i[0].call(f,{top:n,left:o},function(){k&&(d.type="onLoad",g.trigger(d))}),l&&e.closeOnClick&&a.mask.getMask().one("click",f.close),e.closeOnClick&&a(document).bind("click."+m,function(b){a(b.target).parents(j).length||f.close(b)}),e.closeOnEsc&&a(document).bind("keydown."+m,function(a){a.keyCode==27&&f.close(a)});return f},close:function(b){if(!f.isOpened())return f;b=b||a.Event(),b.type="onBeforeClose",g.trigger(b);if(!b.isDefaultPrevented()){k=!1,c[e.effect][1].call(f,function(){b.type="onClose",g.trigger(b)}),a(document).unbind("click."+m).unbind("keydown."+m),l&&a.mask.close();return f}},getOverlay:function(){return j},getTrigger:function(){return d},getClosers:function(){return i},isOpened:function(){return k},getConf:function(){return e}}),a.each("onBeforeLoad,onStart,onLoad,onBeforeClose,onClose".split(","),function(b,c){a.isFunction(e[c])&&a(f).bind(c,e[c]),f[c]=function(b){b&&a(f).bind(c,b);return f}}),i=j.find(e.close||".close"),!i.length&&!e.close&&(i=a("<a class=\"close\"></a>"),j.prepend(i)),i.click(function(a){f.close(a)}),e.load&&f.load()}a.fn.overlay=function(c){var e=this.data("overlay");if(e)return e;a.isFunction(c)&&(c={onBeforeLoad:c}),c=a.extend(!0,{},a.tools.overlay.conf,c),this.each(function(){e=new d(a(this),c),b.push(e),a(this).data("overlay",e)});return c.api?e:this}})(jQuery);

	/*********************************************************************************************/
	
	// there's no more to see here
	
})(jQuery);
