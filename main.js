// main entry point
// include your assets here

// get styles
// import '@splidejs/splide/css/core';
import "tailwindcss/base.css";
import '@splidejs/splide/css';
import "./assets/css/styles.css"

// get scripts
import './assets/js/scripts.js'
import Splide from '@splidejs/splide';

console.log( 'hello world' );
console.log( 'another log' );

if ( document.querySelector('.splide') ) {
  new Splide( '.splide' ).mount();
}