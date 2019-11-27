const path = require('path');
const root = path.resolve(__dirname, 'build');
const paths = [
  '/js/landingpage/classes/modal.js', 
  '/js/landingpage/classes/SignInModal.js', 
  '/js/landingpage/landingpage.js'
];
let entries = paths.map(path => root + path);
module.exports = {
  entry: entries,
  output: {
    filename: 'landingpage.min.js',
    path: path.resolve(__dirname, 'build/js/'),
  },
};