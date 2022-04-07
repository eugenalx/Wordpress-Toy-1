( function( api ) {

	// Extends our custom "woodworking-carpenter" section.
	api.sectionConstructor['woodworking-carpenter'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );