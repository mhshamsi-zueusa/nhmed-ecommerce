@extends('frontend.layouts.master')

@section('title','E-SHOP || Gallery')

@section('main-content')
		
		
		<div id="content">

						
			<div id="inner-content" class="wpisset-container wpisset-container-center wpisset-container-fluid">			
			<div class="wpisset-row wpisset-main-grid">

				
				<main id="main" class="wpisset-main wpisset-col-xs-12">

					<h1 class="entry-title">Gallery</h1>
					<div class="entry-content">
					
							
						<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
			<!-- START Hero REVOLUTION SLIDER 6.2.15 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_3_1_wrapper" data-source="gallery" data-aimg=""  data-amobile="enabled"  style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
				<rs-module id="rev_slider_3_1" style="" data-version="6.2.15">
					<rs-slides>
						<rs-slide data-key="rs-25" data-title="Slide" data-thumb="//www.nhmedsupply.com/wp-content/uploads/2022/03/Showroom-banner-02-scaled-50x100.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:0;" class="wpisset-cursor-anim-element" data-cursor-text='Gevitta Vitamin D' data-cursor-color='#005b2e' data-cursor-text-color='#ffffff''>
							<img src="//www.nhmedsupply.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Showroom banner-02" width="2560" height="725" data-lazyload="//www.nhmedsupply.com/wp-content/uploads/2022/03/Showroom-banner-02-scaled.jpg" class="rev-slidebg" data-no-retina>
<!---->						</rs-slide>
						<rs-slide data-key="rs-32" data-title="Slide" data-thumb="//www.nhmedsupply.com/wp-content/uploads/2022/03/Showroom-banner-01-scaled-50x100.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:0;" class="wpisset-cursor-anim-element" data-cursor-text='Gevitta Vitamin D' data-cursor-color='#005b2e' data-cursor-text-color='#ffffff''>
							<img src="//www.nhmedsupply.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" title="Showroom banner-01" width="2560" height="725" data-lazyload="//www.nhmedsupply.com/wp-content/uploads/2022/03/Showroom-banner-01-scaled.jpg" class="rev-slidebg" data-no-retina>
<!---->						</rs-slide>
					</rs-slides>
					<rs-static-layers><!--
					--></rs-static-layers>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_3_1',rl:[1240,1024,778,480],el:[400,650,550,400],gw:[1000,992,768,480],gh:[400,650,550,400],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
					var	revapi3,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						revapi3 = tpj("#rev_slider_3_1")
						if(revapi3==undefined || revapi3.revolution == undefined){
							revslider_showDoubleJqueryError("rev_slider_3_1");
						}else{
							revapi3.revolution({
								sliderLayout:"fullwidth",
								duration:"5000ms",
								visibilityLevels:"1240,1024,778,480",
								gridwidth:"1000,992,768,480",
								gridheight:"400,650,550,400",
								lazyType:"smart",
								spinner:"spinner3",
								perspective:600,
								perspectiveType:"local",
								editorheight:"400,650,550,400",
								responsiveLevels:"1240,1024,778,480",
								progressBar:{disableProgressBar:true},
								navigation: {
									onHoverStop:false,
									bullets: {
										enable:true,
										tmp:"",
										style:"hesperiden",
										v_offset:45
									}
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
				</script>
				<script>
					var htmlDivCss = '	#rev_slider_3_1_wrapper rs-loader.spinner3 div { background-color: #58ae57 !important; } ';
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script>
					var htmlDivCss = unescape("%23rev_slider_3_1_wrapper%20.hesperiden.tp-bullets%20%7B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden.tp-bullets%3Abefore%20%7B%0A%09content%3A%27%20%27%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20border-radius%3A8px%3B%0A%20%20%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%20%23999999%3B%20%2F%2A%20old%20browsers%20%2A%2F%0A%20%20%20%20background%3A%20-moz-linear-gradient%28top%2C%20%20%23999999%200%25%2C%20%23e1e1e1%20100%25%29%3B%20%2F%2A%20ff3.6%2B%20%2A%2F%0A%20%20%20%20background%3A%20-webkit-linear-gradient%28top%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20chrome10%2B%2Csafari5.1%2B%20%2A%2F%0A%20%20%20%20background%3A%20-o-linear-gradient%28top%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20opera%2011.10%2B%20%2A%2F%0A%20%20%20%20background%3A%20-ms-linear-gradient%28top%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20ie10%2B%20%2A%2F%0A%20%20%20%20background%3A%20linear-gradient%28to%20bottom%2C%20%20%23999999%200%25%2C%23e1e1e1%20100%25%29%3B%20%2F%2A%20w3c%20%2A%2F%0A%20%20%20%20filter%3A%20progid%3Adximagetransform.microsoft.gradient%28%20%0A%20%20%20%20startcolorstr%3D%27%23999999%27%2C%20endcolorstr%3D%27%23e1e1e1%27%2Cgradienttype%3D0%20%29%3B%20%2F%2A%20ie6-9%20%2A%2F%0A%09border%3A3px%20solid%20%23e5e5e5%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet%3Ahover%2C%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet.selected%20%7B%0A%09background%3A%23666666%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet-image%20%7B%0A%7D%0A%23rev_slider_3_1_wrapper%20.hesperiden%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script>
					var htmlDivCss = unescape("%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="vc_cta3-container"><div class="vc_general vc_cta3 vc_cta3-style-classic vc_cta3-shape-rounded vc_cta3-align-left vc_cta3-color-classic vc_cta3-icon-size-md"><div class="vc_cta3_content-container"><div class="vc_cta3-content"><header class="vc_cta3-content-header"><h2>New Hampshire Medical Supply - Showrooms</h2></header><p>Visit our Showroom:</p>
<p>5001 New Hampshire Ave NW, Washington, DC 20011</p>
</div></div></div></section></div></div></div></div>
	
							
											
					</div>

					


				</main>

								
			</div>

			</div>
						
		</div>
	    
		
			
				
	
@endsection