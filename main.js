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
import './node_modules/easy-toggle-state/dist/easy-toggle-state.js'

document.querySelector(".primary-nav").addEventListener("toggleAfter", event => {
	document.querySelector('body').classList.toggle('overflow-hidden');
}, false);

/* Run the handleMobileChange function when the screen sizes changes based on the mobileSize const */
const mobileSize = window.matchMedia( '(min-width: 768px)' );
handleMobileChange( mobileSize );
mobileSize.addEventListener( 'change', handleMobileChange );

function handleMobileChange( event ) {
  /*
   * Remove any inline display values when the screen changes
   * between mobile and desktop state. This allows the default
   * stylings to kick in and prevent any weird "half mobile half desktop"
   * nav display states that sometimes occur while resizing the browser
   * Also remove any active is-open classes from the toggle and nav to reset
   * its state when switching between screen sizes
   */
  if ( event.matches ) {
    document.querySelector('body').classList.remove('overflow-hidden');
    document.querySelector('.primary-nav').classList.remove('is-open');
    document.querySelector('.navbar-toggle').classList.remove('is-open');
  } else {
    window.easyToggleState();
  }
}

if ( document.querySelector('.splide') ) {
  new Splide( '.splide' ).mount();
}