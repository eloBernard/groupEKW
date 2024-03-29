<?php

require_once ECWID_THEMES_DIR . '/class-ecwid-theme-base.php';

class Ecwid_Theme_Avada extends Ecwid_Theme_Base {

	protected $name = 'Avada';

	public function __construct() {
		parent::__construct();

		add_filter( Ecwid_Nav_Menus::FILTER_USE_JS_API_FOR_CATS_MENU, array( $this, 'filter_use_js_api_for_cats_menu' ) );
		add_filter( 'ecwid_shortcode_content', array( $this, 'shortcode_content' ) );

		$this->create_scroller( array( 'scroll' => 95 ) );
	}

	public function shortcode_content( $content ) {
		ob_start();
		?>
		<script type="text/javascript">
		(function () {
			function initNiceScrollHandler() {
				Ecwid.OnPageLoaded.add( function() {
					if (typeof niceScrollReInit == 'function') {
						niceScrollReInit();
					}

					if (typeof jQuery("html").getNiceScroll == 'object') {
						jQuery("html").getNiceScroll().resize();
					}
				});
			}

			if( typeof Ecwid == 'object' && typeof Ecwid.OnPageLoaded == 'object' ) {
				initNiceScrollHandler();
			}

			document.addEventListener('setupAfterEcwidLoaded', (e) => {
				initNiceScrollHandler();
			});
		})();
		</script>
		<?php
		$content .= ob_get_clean();

		return $content;
	}
}

return new Ecwid_Theme_Avada();
