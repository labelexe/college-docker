/* block.js */

//lang
const {__} = wp.i18n;

const {registerBlockType} = wp.blocks;

export default registerBlockType( 'gutenberg-boilerplate/block', {
    // Block Title
    title: __( 'Микроразметка' ),
    // Block Description
    description: __( 'An example block.' ),
    // Block Category
    category: 'common',
    // Block Icon
    icon: 'admin-site',
    // Block Keywords
    keywords: [
        __( 'Boilerplate' ),
        __( 'Hello World' ),
        __( 'Example' ),
    ],
    attributes: {
    },
    // Defining the edit interface
    edit: props => {
        return (
            <h2>{ __( 'Hello Backend' ) }</h2>
        );
    },
    // Defining the front-end interface
    save: props => {
        return (
            <h2>{ __( 'Hello Frontend' ) }</h2>
        );
    },
});


// console.log(wp);
