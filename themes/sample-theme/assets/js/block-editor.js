wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );

    wp.blocks.registerBlockStyle( 'core/quote', {
        name: 'fancy-quote',
        label: 'Fancy Quote',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'underline',
        label: 'Underline',
    } );

    wp.blocks.registerBlockStyle( 'core/paragraph', {
        name: 'center',
        label: 'Justify',
    } );
} );