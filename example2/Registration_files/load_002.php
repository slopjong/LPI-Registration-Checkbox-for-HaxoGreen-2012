var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mediaWiki.loader.register([["site","1336831801",[],"site"],["startup","1336831878",[],"startup"],["user","1336831801",[],"user"],["user.options","1336831801",[],"private"],["skins.vector","1336831801",[]],["skins.monobook","1336831801",[]],["skins.simple","1336831801",[]],["skins.chick","1336831801",[]],["skins.modern","1336831801",[]],["skins.cologneblue","1336831801",[]],["skins.nostalgia","1336831801",[]],["skins.standard","1336831801",[]],["jquery","1336831801",[]],["jquery.async","1336831801",[]],["jquery.autoEllipsis","1336831801",["jquery.highlightText"]],["jquery.checkboxShiftClick","1336831801",[]],["jquery.client","1336831801",[]],["jquery.collapsibleTabs","1336831801",[]],["jquery.color","1336831801",[]],["jquery.cookie","1336831801",[]],["jquery.delayedBind","1336831801",[]],[
"jquery.expandableField","1336831801",[]],["jquery.highlightText","1336831801",[]],["jquery.placeholder","1336831801",[]],["jquery.localize","1336831801",[]],["jquery.suggestions","1336831801",["jquery.autoEllipsis"]],["jquery.tabIndex","1336831801",[]],["jquery.textSelection","1336831801",[]],["jquery.tipsy","1336831801",[]],["jquery.ui.core","1336831801",["jquery"]],["jquery.ui.widget","1336831801",[]],["jquery.ui.mouse","1336831801",["jquery.ui.widget"]],["jquery.ui.position","1336831801",[]],["jquery.ui.draggable","1336831801",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"]],["jquery.ui.droppable","1336831801",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"]],["jquery.ui.resizable","1336831801",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.selectable","1336831801",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.sortable","1336831801",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],[
"jquery.ui.accordion","1336831801",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.autocomplete","1336831801",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"]],["jquery.ui.button","1336831801",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.datepicker","1336831801",["jquery.ui.core"]],["jquery.ui.dialog","1336831801",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"]],["jquery.ui.progressbar","1336831801",["jquery.ui.core","jquery.ui.widget"]],["jquery.ui.slider","1336831801",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"]],["jquery.ui.tabs","1336831801",["jquery.ui.core","jquery.ui.widget"]],["jquery.effects.core","1336831801",["jquery"]],["jquery.effects.blind","1336831801",["jquery.effects.core"]],["jquery.effects.bounce","1336831801",["jquery.effects.core"]],["jquery.effects.clip","1336831801",["jquery.effects.core"]],["jquery.effects.drop","1336831801",[
"jquery.effects.core"]],["jquery.effects.explode","1336831801",["jquery.effects.core"]],["jquery.effects.fold","1336831801",["jquery.effects.core"]],["jquery.effects.highlight","1336831801",["jquery.effects.core"]],["jquery.effects.pulsate","1336831801",["jquery.effects.core"]],["jquery.effects.scale","1336831801",["jquery.effects.core"]],["jquery.effects.shake","1336831801",["jquery.effects.core"]],["jquery.effects.slide","1336831801",["jquery.effects.core"]],["jquery.effects.transfer","1336831801",["jquery.effects.core"]],["mediawiki","1336831801",[]],["mediawiki.util","1336831801",["jquery.checkboxShiftClick","jquery.client","jquery.placeholder"]],["mediawiki.action.history","1336831801",["mediawiki.legacy.history"]],["mediawiki.action.edit","1336831801",[]],["mediawiki.action.view.rightClickEdit","1336831801",[]],["mediawiki.special.preferences","1336831801",[]],["mediawiki.special.search","1336831801",[]],["mediawiki.language","1336831801",[]],["mediawiki.legacy.ajax","1336831878"
,["mediawiki.legacy.wikibits"]],["mediawiki.legacy.ajaxwatch","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.block","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1336831801",[]],["mediawiki.legacy.config","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.diff","1336831801",["mediawiki.legacy.wikibits"],"mediawiki.action.history"],["mediawiki.legacy.edit","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.enhancedchanges","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.history","1336831801",["mediawiki.legacy.wikibits"],"mediawiki.action.history"],["mediawiki.legacy.htmlform","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.metadata","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.mwsuggest","1336831878",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.prefs","1336831801",["mediawiki.legacy.wikibits",
"mediawiki.legacy.htmlform"]],["mediawiki.legacy.preview","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.search","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.shared","1336831801",[]],["mediawiki.legacy.oldshared","1336831801",[]],["mediawiki.legacy.upload","1336831801",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.wikibits","1336831878",["mediawiki.language"]],["mediawiki.legacy.wikiprintable","1336831801",[]],["ext.smw.style","1336831801",[],"ext.smw"],["ext.smw.tooltips","1336831801",["mediawiki.legacy.wikibits","ext.smw.style"],"ext.smw"],["ext.smw.sorttable","1336831801",["mediawiki.legacy.wikibits","ext.smw.style"],"ext.smw"],["ext.semanticforms.main","1336831801",["jquery.ui.autocomplete","jquery.ui.button","jquery.ui.sortable"]],["ext.semanticforms.fancybox","1336831801",[]],["ext.semanticforms.autogrow","1336831801",[]],["ext.semanticforms.popupformedit","1336831801",[
"jquery"]],["ext.semanticforms.autoedit","1336831801",["jquery"]],["ext.semanticforms.submit","1336831801",["jquery"]],["ext.semanticforms.collapsible","1336831801",["jquery"]],["ext.maps.googlemaps2","1336831801",["ext.maps.common","jquery.ui.resizable"],"ext.maps"],["ext.maps.googlemaps3","1336831801",["ext.maps.common","jquery.ui.resizable"],"ext.maps"],["ext.maps.gm3.geoxml","1336831801",[],"ext.maps"],["ext.maps.openlayers","1336831801",["ext.maps.common","jquery.ui.resizable"],"ext.maps"],["ext.maps.yahoomaps","1336831801",["ext.maps.common","jquery.ui.resizable"],"ext.maps"],["ext.maps.common","1336831801",[],"ext.maps"],["ext.maps.coord","1336831801",[],"ext.maps"],["ext.sm.forminputs","1336831801",["ext.maps.coord"],"ext.semanticmaps"],["ext.sm.fi.googlemaps3","1336831801",["ext.maps.googlemaps3","ext.sm.forminputs"],"ext.semanticmaps"],["ext.sm.fi.googlemaps3.single","1336831801",["ext.sm.fi.googlemaps3"],"ext.semanticmaps"],["ext.sm.fi.openlayers","1336831801",[
"ext.maps.openlayers","ext.sm.forminputs"],"ext.semanticmaps"],["ext.sm.fi.yahoomaps","1336831801",["ext.maps.yahoomaps","ext.sm.forminputs"],"ext.semanticmaps"],["ext.Registration","1336831801",[]],["ext.vector.collapsibleNav","1336831877",["jquery.client","jquery.cookie","jquery.tabIndex"],"ext.vector"],["ext.vector.collapsibleTabs","1336831801",["jquery.collapsibleTabs","jquery.delayedBind"],"ext.vector"],["ext.vector.editWarning","1336831877",[],"ext.vector"],["ext.vector.expandableSearch","1336831801",["jquery.client","jquery.expandableField","jquery.delayedBind"],"ext.vector"],["ext.vector.footerCleanup","1336831801",[],"ext.vector"],["ext.vector.sectionEditLinks","1336831801",["jquery.cookie","jquery.clickTracking"],"ext.vector"],["ext.vector.simpleSearch","1336831877",["jquery.client","jquery.suggestions","jquery.autoEllipsis","jquery.placeholder"],"ext.vector"],["ext.GeeQuBox","1336831801",[]],["ext.liquidThreads","1336831801",["jquery.ui.dialog","jquery.ui.droppable"]],[
"ext.liquidThreads.newMessages","1336831801",["ext.liquidThreads"]],["ext.srf.timeline","1336831801",["mediawiki.legacy.wikibits"],"ext.srf"],["ext.srf.jqplot","1336831801",[]],["ext.srf.jqplotbar","1336831801",["ext.srf.jqplot"]],["ext.srf.jqplotpie","1336831801",["ext.srf.jqplot"]]]);mediaWiki.config.set({"wgLoadScript":"/w_2012/load.php","debug":false,"skin":"vector","stylepath":"/w_2012/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/","wgArticlePath":"/2012/$1","wgScriptPath":"/w_2012","wgScriptExtension":".php","wgScript":"/w_2012/index.php","wgVariantArticlePath":false,"wgActionPaths":[],"wgServer":"http://www.haxogreen.lu","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.17.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgMainPageTitle":"HaxoGreen"
,"wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Hg2012","5":"Hg2012 talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","90":"Thread","91":"Thread talk","92":"Summary","93":"Summary talk","102":"Property","103":"Property talk","106":"Form","107":"Form talk","108":"Concept","109":"Concept talk","170":"Filter","171":"Filter talk","420":"Layer","421":"Layer talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"hg2012":4,"hg2012_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"thread":90,"thread_talk":91,"summary":92,"summary_talk":93,"property":102,"property_talk":103,"form":106,"form_talk":107,"concept":108,"concept_talk":109,"filter":170,"filter_talk":171,"layer":420,
"layer talk":421,"image":6,"image_talk":7},"wgSiteName":"haxogreen 2012","wgFileExtensions":["png","jpg","jpeg","gif","svg","pdf","eps","odt","ogg","mp3","gpg","pgp","ogv","oga"],"wgDBname":"dbhg_wiki2012","wgExtensionAssetsPath":"/w_2012/extensions","wgResourceLoaderMaxQueryLength":-1,"wgMWSuggestTemplate":"http://www.haxogreen.lu/w_2012/api.php?action=opensearch\x26search={searchTerms}\x26namespace={namespaces}\x26suggest","wgCollapsibleNavBucketTest":false,"wgCollapsibleNavForceNewVersion":false});};if(isCompatible()){document.write("\x3cscript src=\"/w_2012/load.php?debug=false\x26amp;lang=en\x26amp;modules=jquery%7Cmediawiki\x26amp;only=scripts\x26amp;skin=vector\x26amp;version=20120225T175820Z\"\x3e\x3c/script\x3e");}delete isCompatible;;