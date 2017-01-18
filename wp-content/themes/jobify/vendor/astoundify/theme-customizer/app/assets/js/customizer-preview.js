/* global wp, jQuery, astoundifyThemeCustomizerPreview */
(function( $ ){

	var _window = $(window),
		api = wp.customize;

	/**
	 * Handle style controls.
	 *
	 * @since 1.0.0
	 */
	astoundifyThemeCustomizerPreview = $.extend( astoundifyThemeCustomizerPreview, {
		styleControls: {},

		initStyles: function() {
			var self = this;

			// bind all style controls to our updates
			_.each( self.getStyleControls(), function( value, settingId ) {
				api( settingId, function( setting ) {
					setting.bind( self.retrieveStyles );
				} );
			} );
		},

		/**
		 * Update styles dynamically.
		 *
		 * @since 1.0.0
		 */
		retrieveStyles: function() {
			var self = astoundifyThemeCustomizerPreview;

			var updatedStyleControls = {};

			_.each( self.getStyleControls(), function( value, settingId ) {
				api( settingId, function( setting ) {
					updatedStyleControls[ settingId ] = setting();
				} );
			});

			var data = {
				'astoundify-themecustomizer-style-controls': updatedStyleControls
			}

			wp.ajax.post( 'astoundify-themecustomizer-css', data ).done( function( response ) {
				if( response.success !== false ) {
					self.replaceStyles( response );
				}
			} );
		},

		/**
		 * Update the styles in the document
		 *
		 * @since 1.0.0
		 */
		replaceStyles: function( styles ) {
			selector = this.stylesheet;

			$( '#' + selector ).remove();

			$( '<div>', {
				id: selector,
				html: '&shy;<style>' + styles + '</style>',
			} ).appendTo( 'body' );
		},

		/**
		 * Out out all active controls, find the ones that relate to CSS.
		 * This is pretty basic and hacky at the moment, and shuold be made more
		 * dynamic in the future.
		 *
		 * @since 1.0.0
		 */
		getStyleControls: function() {
			var self = astoundifyThemeCustomizerPreview;

			if ( self.styleControls > 1 ) {
				return self.styleControls;
			}

			var extras = [ 
				'background_color', 
				'header_textcolor'
			];

			_.each( api.settings.values, function( value, key ) {
				if( 
						key.match(/color/i) || 
						key.match(/typography/i) ||
						extras.indexOf( key ) != -1 &&
						! key.match( /\-font\-family/i )
					) { 
					self.styleControls[ key ] = value;
				}
			});

			return self.styleControls;
		}
	} );

	$(document).ready(function() {
		astoundifyThemeCustomizerPreview.initStyles();
	});

})( jQuery );
