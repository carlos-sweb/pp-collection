/*!!
 * Power Panel Collection <https://github.com/carlos-sweb/pp-collection>
 * @author Carlos Illesca
 * @version 1.0.0 (2020/01/01 03:18 PM)
 * Released under the MIT License
 */
 (function(factory){

  var root = typeof self == 'object' && self.self === self && self ||
            typeof global == 'object' && global.global === global && global;
  
  if ( typeof define === 'function' && define.amd ) {
    define(['exports'], function( exports ){
      
      root.ppCollection = factory(root, exports);
      module.exports = root.ppCollection;
    });
  
  } else if (typeof exports !== 'undefined') {  
    factory(root, exports);
  // Finally, as a browser global.
  } else {
    root.ppCollection = factory(root, {});
  }
})(function(root, ppCollection) {

	return function(preOptions){	

		this.model = null;

		this.collection = [];

		this.stringify = function(){}
    
    this.add = function(){}

    this.remove = function(){}

    this.reset = function(){}

    this.set = function(){}

    this.get = function(){}

    this.at = function(){}

    this.push = function(){}

    this.pop = function(){}

    this.unshift = function(){}

    this.shift = function(){}

    this.slice = function(){}

    this.length = function(){}

    this.sort = function(){}

    this.pluck = function(){}

    this.where = function(){}

    this.findWhere = function(){}

    this.parse = function(){}

    this.clone = function(){}

	}

});