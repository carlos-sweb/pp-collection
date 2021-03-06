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
        /**
        *@var filterBy
        *
        */
        // deberia agregar multiples filed and values
        this.filterBy = function( field , value , sensitivity ){          
          
          if( !typeof sensitivity == 'boolean' ){
            sensitivity = false;
          }

          return this.collection.filter(( item )=>{             
            if( typeof field  == 'string' ){
              if( item.has(field) ){
               return sensitivity ? item.get(field).includes(value) : item.get(field).toLowerCase().includes(value.toLowerCase());
              }
            }
            if( typeof field.forEach == 'function' ){                
                
                var match = false;

                field.forEach(( fieldItem )=>{

                  if( item.has(fieldItem) ){
                      var _match = sensitivity ? item.get(fieldItem).includes(value) : item.get(fieldItem).toLowerCase().includes(value.toLowerCase());
                      
                      if( _match && !match){
                        match = true;
                      }
                  }   
                                 
                });

                return match;
                // -------------------------------------------------------------------
            }

            return false;

          });

        }
      /**
      *@var getAll
      *@type Function
      *@description - retorna la colección completa de pp-models
      */  
      this.getAll = function(){

        return this.collection;

      }
      /**
      *@var at
      *@type Function
      *@description - retorna el elemento de la posición solicitada si este existe 
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
      /**
       *@var push 
       *@type Native Function
       *@description - Native Description
       *@param obj  
       */
      this.push = function( obj ){
          this.collection.push( new this.model(obj) );
      }

      this.pop = function(){

        this.collection.pop();

      }

      this.unshift = function(){        

        // pending
                  
      }

      this.shift = function(){

        this.collection.shift();

      }

      this.slice = function( start , end ){

        return this.collection.slice( start , end );

      }

      this.length = function(){

        return this.collection.length;
        
      }

      // deberia agrandar By para poder recibir una 
      this.sortBy = function( by , direction , collection   ){
         
         var direction = direction == null || direction == undefined ? true : direction; 
         
         var collectionValue = [];

         var collection = typeof collection == 'undefined' ?  this.collection : collection;
        

         for( var i = 0; i < collection.length; i++ ){
             if( collection[i].has(by) ){  

               // no permitir duplkicaciones del valor indexOf validation
               collectionValue.push( collection[i].get(by) );

             }
         }         
         // Aqui no se deberia permitir valores duplicados
        collectionValue = direction ?  collectionValue.sort() : collectionValue.sort().reverse();

        var vtr = [];
        
        for( var i = 0; i < collectionValue.length ; i ++ ){             
             vtr = [...vtr,...this.getAll().filter(( Item )=>{
               return Item.get(by) == collectionValue[i];
             })];
        }        
        return vtr;
      }

      /**
      *@pluck Function
      */
      this.pluck = function( nameProperty ){
        var pluck = [];
        if( typeof nameProperty == 'string' ){
           this.collection.forEach(( item )=>{
              if( item.has( nameProperty ) ){
                 pluck.push( item.get(nameProperty) ); 
              } 
           });
        }
        return pluck;
      }
    // --------------------------------------------------------------------    



    // --------------------------------------------------------------------
      }

    }


});