module.exports = ({env}) => {
  const liveUrl = "https://www.raconteurpress.com";
  const localUrl = "http://raconteur-press.local";
  let currentUrl;
  if ( env === "development" ) {
    currentUrl = localUrl;
  } else {
    currentUrl = liveUrl;
  }
  return {
    plugins: {
      'postcss-urlrebase': { rootUrl: currentUrl + "/wp-content/themes/raconteur-press/public/assets/"},
      'tailwindcss/nesting': {},
      'postcss-extend': {},
      tailwindcss: {},
      autoprefixer: {},
    },
  }
}
