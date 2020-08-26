( function( blocks, editor, i18n, element ) {
   var el = element.createElement;
   var __ = i18n.__;
   var RichText = editor.RichText;

   blocks.registerBlockType( 'cspd/case-study-plugin-development', {
      title: __( 'Case Study - Plugin Development', 'cspd' ),
      icon: 'universal-access-alt',
      category: 'common',

      attributes: {
         content: {
            type: 'array',
            source: 'children',
            selector: 'p',
         },
      },

      example: {
         attributes: {
            content: __( 'Hello world' ),
         },
      },

      edit: function( props ) {
         var content = props.attributes.content;
         function onChangeContent( newContent ) {
            props.setAttributes( { content: newContent } );
         }

         return el( RichText, {
            tagName: 'p',
            className: 'cspd-backend',
            onChange: onChangeContent,
            value: content,
         } );
      },

      save: function( props ) {
         return el( RichText.Content, {
            tagName: 'p',
            className: 'cspd-frontend',
            value: props.attributes.content,
         } );
      },
   } );
} )( window.wp.blocks, window.wp.editor, window.wp.i18n, window.wp.element );