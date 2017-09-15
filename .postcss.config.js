module.exports = {
  plugins: [
    require('postcss-fakeid'),
    require("postcss-easy-import")(),
    require("postcss-cssnext")({
      features: {
        // Mix takes care of this.
        autoprefixer: false
      }
    })
  ]
};
