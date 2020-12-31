module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
    // defaultLineHeights: true,
    // standardFontWeights: true
  },
  purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php', './resources/js/**/*.vue'],
  theme: {
    extend: {
      padding: ['hover'],
      maxHeight: ['focus'],   
      textDecoration: ['active'],  
      backgroundColor: ['active'], 
      transitionProperty: ['responsive', 'motion-safe', 'motion-reduce'],
      scale: ['active', 'group-hover', 'hover'],
    },
    scale: {
        '0': '0',
        '25': '.25',
        '50': '.5',
        '75': '.75',
        '90': '.9',
        '95': '.95',
        '100': '1',
        '105': '1.05',
        '110': '1.1',
        '125': '1.25',
        '150': '1.5',
        '200': '2',
        '400': '4',      
        '800': '8',  
    },
  },
  variants: {},
  plugins: []
}
