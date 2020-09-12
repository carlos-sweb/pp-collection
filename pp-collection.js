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

    return function( preOptions ){

      var preOptions  = preOptions || {};

      return function( options ){

        /**
        *@var model
        *@type Function
        */
        this.model = preOptions.model || null;
        /*
        *@var model
        *@type Array
        */
        this.collection = [];        
        //HERE INITUIALIZE MODEL CONSTRUCTOR MODEL
        options.forEach(( _model )=>{
          this.collection.push( new this.model(_model) );
        });

        /*
        *Native Function forEach from array
        */
        this.forEach = function( func ){
          return this.collection.forEach( func );
        }
        /*
        *Native Function filter from array
        */
        this.filter = function( func ){
          return this.collection.filter( func );
        }

        this.getAll = function(){
          return this.collection;
        }
        /*
        *At
        *@param position
        */
        this.at = function( position ){
          if( typeof position == 'number' ){
              if( position <= this.collection.length ){
                 return this.collection[position]; 
              }else{
                return null;
              }
          }else{
            return null;
          }
        }

      this.push = function( obj ){
          this.collection.push( new this.model(obj) );
      }

      this.pop = function(){
        this.collection.pop();
      }

      this.unshift = function(){
        /// Pendiente 
      }

      this.shift = function(){
        this.collection.shift();
      }

      this.slice = function(){}

      this.length = function(){
        return this.collection.length;
      }

      this.sort = function(){}

      this.pluck = function(){}

      this.where = function(){}

      this.findWhere = function(){}

      this.parse = function(){} 





          

      }

    }


});