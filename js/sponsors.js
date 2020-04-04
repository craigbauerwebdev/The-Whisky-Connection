(function() {
	var sponsorClass = function() {
		var actions = {
			init: function() {
				
				sponsor.sidebar();
				sponsor.footer();
			},
			sidebar: function() {

				sideBarSponsors = [
					{
						aff: 'Reserve Bar',
						code: '<a href="http://www.pjtra.com/t/SkNJSUpPRktDR05HSUZKQ0dNR0ZMSg" target="_blank"><img src="http://www.pjtra.com/b/SkNJSUpPRktDR05HSUZKQ0dNR0ZMSg" border="0" width="100%" title="Shop ReserveBar Today." alt="Shop ReserveBar Today."></a>',
						trackingCode: 'http://www.pjtra.com/t/SkNJSUpPRktDR05HSUZKQ0dNR0ZMSg'
					},
					{
						aff: 'Gold Medal Wine Club',
						code: '<a href="http://www.gopjn.com/t/SkNJSUdJTEhDR05HSUZKQ0dNRktJSg" target="_blank"><img src="//www.gopjn.com/b/SkNJSUdJTEhDR05HSUZKQ0dNRktJSg" border="0" width="100%" title="Gold Medal Wine Club" alt="Gold Medal Wine Club"></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNJSUdJTEhDR05HSUZKQ0dNRktJSg'
					},
					{
						aff: 'Quip',
						code: '<a href="http://www.gopjn.com/t/SkNITEdGTUhDR05HSUZKQ0dLRk9HSw" target="_blank"><img src="//www.gopjn.com/b/SkNITEdGTUhDR05HSUZKQ0dLRk9HSw" border="0" width="100%" title="quip Electric Toothbrush" alt="quip Electric Toothbrush"></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNITEdGTUhDR05HSUZKQ0dLRk9HSw'
					},
					/*{
						aff: 'BBQ Galore',
						code: '<a href="http://www.gopjn.com/t/SkNJSUpJT01DR05HSUZKQ0dNSEZPRw" target="_blank"><img src="//www.gopjn.com/b/SkNJSUpJT01DR05HSUZKQ0dNSEZPRw" border="0" width="100%" title="Shop Barbeques Galore Today!" alt="Shop Barbeques Galore Today!"></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNJSUpJT01DR05HSUZKQ0dNSEZPRw'
					},*/
					{
						aff: 'Drizly',
						code: '<a href="http://www.pntrs.com/t/SkNJSEZPR0hDR05HSUZKQ0dJSUZPTw" target="_blank"><img src="//www.pntrs.com/b/SkNJSEZPR0hDR05HSUZKQ0dJSUZPTw" border="0" width="100%" title="Drizly App Install" alt="Drizly App Install"></a>',
						trackingCode: 'http://www.pntrs.com/t/SkNJSEZPR0hDR05HSUZKQ0dJSUZPTw'
					},
					{
						aff: 'Brite Cellars',
						code: '<a href="http://www.pntrs.com/t/SkNJRk5IT09DR05HSUZKQ0dMSElNRw" target="_blank"><img src="//www.pntrs.com/b/SkNJRk5IT09DR05HSUZKQ0dMSElNRw" border="0" width="100%" title="Take the Bright Cellars Quiz and discover wine you love!" alt="Take the Bright Cellars Quiz and discover wine you love!"></a>',
						trackingCode: 'http://www.pntrs.com/t/SkNJRk5IT09DR05HSUZKQ0dMSElNRw'
					},
					{
						aff: 'Washington Square Watches',
						code: '<a href="http://www.gopjn.com/t/SkNJSUlLSkhDR05HSUZKQ0dNR0tPSQ" target="_blank"><img src="//www.gopjn.com/b/SkNJSUlLSkhDR05HSUZKQ0dNR0tPSQ" border="0" width="100%" title="Shop Washington Square Watches." alt="Shop Washington Square Watches."></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNJSUlLSkhDR05HSUZKQ0dNR0tPSQ'
					},
					{
						aff: 'Craft Beer Club',
						code: '<a href="http://www.gopjn.com/t/SkNJSUdGTkZDR05HSUZKQ0dNRk5JRg" target="_blank"><img src="//www.gopjn.com/b/SkNJSUdGTkZDR05HSUZKQ0dNRk5JRg" border="0" width="100%" title="Subscribe to Craft Beer Club Today!" alt="Subscribe to Craft Beer Club Today!"></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNJSUdGTkZDR05HSUZKQ0dNRk5JRg'
					},
					{
						aff: 'Dollar Shave Club',
						code: '<a href="http://www.pntrs.com/t/SkNJS0ZMR0pDR05HSUZKQ0dIS0xKTA" target="_blank"><img src="//www.pntrs.com/b/SkNJS0ZMR0pDR05HSUZKQ0dIS0xKTA" border="0" width="100%" title="Dollar Shave Club 8" alt="Dollar Shave Club 8"></a>',
						trackingCode: 'http://www.pntrs.com/t/SkNJS0ZMR0pDR05HSUZKQ0dIS0xKTA'
					},
					{
						code: '<a onclick="gtag("event", "click", {"event_category": "Sponsor: Tartan Weddings 300x600"});" href="http://tartanweddings.com" target="_blank"><img src="https://weewhiskyconnection.com/sponsors/tw-300.jpg" border="0" width="100%" title="Get Married In Scotland" alt="Get Married In Scotland" /></a>',
						trackingCode: 'none'
					},
					{
						code: '<a href="http://www.gopjn.com/t/SkNHTEtHTU9DR05HSUZKQ0dIS0xKTA" target="_blank"><img src="//www.gopjn.com/b/SkNHTEtHTU9DR05HSUZKQ0dIS0xKTA" border="0" width="300" height="250" title="DSC An Amazing Shave 300x250" alt="DSC An Amazing Shave 300x250"></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNHTEtHTU9DR05HSUZKQ0dIS0xKTA'
					}
					/*
					{
						aff: '',
						code: '',
						trackingCode: ''
					}
					*/
				];
				//console.log(sideBarSponsors);
				//var sponsor = sideBarSponsors[7], // testing TW
				var sponsor = sideBarSponsors[Math.floor(Math.random()*sideBarSponsors.length)],
				s = sponsor.code;
				if(window.document.getElementById('sidebar-sponsor')) {
					window.document.getElementById('sidebar-sponsor').innerHTML = s;
				}

				

			},
			footer: function() { //bottom-footer-sponsor-desktop // bottom-footer-sponsor-mobile

				footerSponsors = [
					{
						aff: 'Reserve Bar',
						desktopCode: '<a href="http://www.pntra.com/t/SkNJSUpPRk5DR05HSUZKQ0dNR0ZMSg" target="_blank"><img src="//www.pntra.com/b/SkNJSUpPRk5DR05HSUZKQ0dNR0ZMSg" border="0" width="100%" title="Shop ReserveBar Today." alt="Shop ReserveBar Today."></a>',
						mobileCode: '<a href="http://www.pntrac.com/t/SkNJSUpPRkxDR05HSUZKQ0dNR0ZMSg" target="_blank"><img src="//www.pntrac.com/b/SkNJSUpPRkxDR05HSUZKQ0dNR0ZMSg" border="0" width="320" height="50" title="Shop ReserveBar Today." alt="Shop ReserveBar Today."></a>',
						trackingCode: 'http://www.pntra.com/t/SkNJSUpPRk5DR05HSUZKQ0dNR0ZMSg'
					},

					{
						aff: 'Dollar Shave Club',
						desktopCode: '<a href="http://www.pntra.com/t/SkNJS0ZMR0tDR05HSUZKQ0dIS0xKTA" target="_blank"><img src="//www.pntra.com/b/SkNJS0ZMR0tDR05HSUZKQ0dIS0xKTA" border="0" width="728" height="90" title="Dollar Shave Club 9" alt="Dollar Shave Club 9"></a>',
						mobileCode: '<a href="http://www.pntrac.com/t/SkNHS01NTUtDR05HSUZKQ0dIS0xKTA" target="_blank"><img src="//www.pntrac.com/b/SkNHS01NTUtDR05HSUZKQ0dIS0xKTA" border="0" width="234" height="60" title="DSC logo 234x60" alt="DSC logo 234x60"></a>',
						trackingCode: 'http://www.pntrac.com/t/SkNHS01NTUtDR05HSUZKQ0dIS0xKTA'
					},
					/*{
						aff: 'Gold Medal Wine Club',
						desktopCode: '<a href="http://www.pntrac.com/t/SkNJSUdNS09DR05HSUZKQ0dNRktJSg" target="_blank"><img src="//www.pntrac.com/b/SkNJSUdNS09DR05HSUZKQ0dNRktJSg" border="0" width="300" height="100" title="Join Gold Medal Wine Club Today." alt="Join Gold Medal Wine Club Today."></a>',
						mobileCode: '<a href="http://www.pntrac.com/t/SkNJSUdNS09DR05HSUZKQ0dNRktJSg" target="_blank"><img src="//www.pntrac.com/b/SkNJSUdNS09DR05HSUZKQ0dNRktJSg" border="0" width="300" height="100" title="Join Gold Medal Wine Club Today." alt="Join Gold Medal Wine Club Today."></a>',
						trackingCode: 'http://www.pjtra.com/t/SkNJSUdJTEpDR05HSUZKQ0dNRktJSg'
					},*/
					/*{ 
						aff: 'BBQ Galore',
						desktopCode: '<a href="http://www.pntrac.com/t/SkNJSUpJT05DR05HSUZKQ0dNSEZPRw" target="_blank"><img src="//www.pntrac.com/b/SkNJSUpJT05DR05HSUZKQ0dNSEZPRw" border="0" width="320px" height="50" title="Shop Barbeques Galore Today!" alt="Shop Barbeques Galore Today!"></a>',
						mobileCode: '<a href="http://www.pntrac.com/t/SkNJSUpJT05DR05HSUZKQ0dNSEZPRw" target="_blank"><img src="//www.pntrac.com/b/SkNJSUpJT05DR05HSUZKQ0dNSEZPRw" border="0" width="320" height="50" title="Shop Barbeques Galore Today!" alt="Shop Barbeques Galore Today!"></a>',
						trackingCode: 'http://www.pntrac.com/t/SkNJSUpJT05DR05HSUZKQ0dNSEZPRw'
					},*/
					{
						aff: 'Drizly',
						desktopCode: '<a href="http://www.pjatr.com/t/SkNJSEZPSEhDR05HSUZKQ0dJSUZPTw" target="_blank"><img src="//www.pjatr.com/b/SkNJSEZPSEhDR05HSUZKQ0dJSUZPTw" border="0" width="100%" title="Drizly" alt="Drizly - Wee Whisky Connection"></a>',
						mobileCode: '<a href="http://www.pjtra.com/t/SkNJSEZPR0pDR05HSUZKQ0dJSUZPTw" target="_blank"><img src="//www.pjtra.com/b/SkNJSEZPR0pDR05HSUZKQ0dJSUZPTw" border="0" width="320" height="50" title="App Install_320X50" alt="App Install_320X50"></a>',
						trackingCode: 'http://www.pjatr.com/t/SkNJSEZPSEhDR05HSUZKQ0dJSUZPTw'
					},
					{
						aff: 'Brite Cellars',
						desktopCode: '<a href="http://www.pjatr.com/t/SkNJSk9NTk5DR05HSUZKQ0dMSElNRw" target="_blank"><img src="//www.pjatr.com/b/SkNJSk9NTk5DR05HSUZKQ0dMSElNRw" border="0" width="100%" title="Take the Quiz" alt="Take the Quiz"></a>',
						mobileCode: '<a href="http://www.gopjn.com/t/SkNJRktJRktDR05HSUZKQ0dMSElNRw" target="_blank"><img src="//www.gopjn.com/b/SkNJRktJRktDR05HSUZKQ0dMSElNRw" border="0" width="320" height="50" title="Discover Your Wine Experience At Bright Cellars!" alt="Discover Your Wine Experience At Bright Cellars!"></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNJRktJRktDR05HSUZKQ0dMSElNRw'
					},
					{
						aff: 'Quip',
						desktopCode: '<a href="http://www.pjtra.com/t/SkNITEdGTU5DR05HSUZKQ0dLRk9HSw" target="_blank"><img src="//www.pjtra.com/b/SkNITEdGTU5DR05HSUZKQ0dLRk9HSw" border="0" width="100%" title="quip Electric Toothbrush" alt="quip Electric Toothbrush"></a>',
						mobileCode: '<a href="http://www.pntrs.com/t/SkNITEdGTUpDR05HSUZKQ0dLRk9HSw" target="_blank"><img src="//www.pntrs.com/b/SkNITEdGTUpDR05HSUZKQ0dLRk9HSw" border="0" width="320" height="50" title="quip Electric Toothbrush" alt="quip Electric Toothbrush"></a>',
						trackingCode: 'http://www.pntrs.com/t/SkNITEdGTUpDR05HSUZKQ0dLRk9HSw'
					},
					{
						aff: 'Dollar Shave Club',
						desktopCode: '<a href="http://www.gopjn.com/t/SkNJS0ZMRkpDR05HSUZKQ0dIS0xKTA" target="_blank"><img src="//www.gopjn.com/b/SkNJS0ZMRkpDR05HSUZKQ0dIS0xKTA" border="0" width="100%" title="Dollar Shave Club 2" alt="Dollar Shave Club 2"></a>',
						mobileCode: '<a href="http://www.pjtra.com/t/SkNHTEtHTkpDR05HSUZKQ0dIS0xKTA" target="_blank"><img src="//www.pjtra.com/b/SkNHTEtHTkpDR05HSUZKQ0dIS0xKTA" border="0" width="234" height="60" title="DSC Shave Time 234x60" alt="DSC Shave Time 234x60"></a>',
						trackingCode: 'http://www.gopjn.com/t/SkNJS0ZMRkpDR05HSUZKQ0dIS0xKTA'
					}

					/*{ // washington square watches
						desktopCode: '',
						mobileCode: '',
						trackingCode: ''
					}*/
					// to add quip, tile, stetson, cigarPage, Beer Club, Out door tech, Otto Wilde Grillers, Magento, 
				];
				//var s = sideBarSponsors[0].code;
				var sponsor = footerSponsors[Math.floor(Math.random()*footerSponsors.length)];
				//console.log(sponsor);
				// registr event for GA and log sponsor.aff;
				d = sponsor.desktopCode; //728x90
				m = sponsor.mobileCode; //320x50
				window.document.getElementById('bottom-footer-sponsor-desktop').innerHTML = d;
				window.document.getElementById('bottom-footer-sponsor-mobile').innerHTML = m;

				//header ads
				var top_sponsor = footerSponsors[Math.floor(Math.random()*footerSponsors.length)];
				d = top_sponsor.desktopCode; //728x90
				m = top_sponsor.mobileCode; //320x50
				if(window.document.getElementById('top-header-sponsor-desktop')) {
					window.document.getElementById('top-header-sponsor-desktop').innerHTML = d;
				}
				if(window.document.getElementById('top-header-sponsor-mobile')) {
					window.document.getElementById('top-header-sponsor-mobile').innerHTML = m;
				}

				var below_article_sponsor = footerSponsors[Math.floor(Math.random()*footerSponsors.length)];
				d = below_article_sponsor.desktopCode; //728x90
				m = below_article_sponsor.mobileCode; //320x50
				if(window.document.getElementById('below-article-sponsor-desktop')) {
					window.document.getElementById('below-article-sponsor-desktop').innerHTML = d;
				}
				if(window.document.getElementById('below-article-sponsor-mobile')) {
					window.document.getElementById('below-article-sponsor-mobile').innerHTML = m;
				}


			}
		}
		return actions;
	} 
	var sponsor = new sponsorClass();
	sponsor.init();

})();