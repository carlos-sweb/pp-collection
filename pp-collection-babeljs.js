"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!!
 * Power Panel Collection <https://github.com/carlos-sweb/pp-collection>
 * @author Carlos Illesca
 * @version 1.0.0 (2020/01/01 03:18 PM)
 * Released under the MIT License
 */
(function (factory) {
  var root = (typeof self === "undefined" ? "undefined" : _typeof(self)) == 'object' && self.self === self && self || (typeof global === "undefined" ? "undefined" : _typeof(global)) == 'object' && global.global === global && global;

  if (typeof define === 'function' && define.amd) {
    define(['exports'], function (exports) {
      root.ppCollection = factory(root, exports);
      module.exports = root.ppCollection;
    });
  } else if (typeof exports !== 'undefined') {
    factory(root, exports); // Finally, as a browser global.
  } else {
    root.ppCollection = factory(root, {});
  }
})(function (root, ppCollection) {
  return function (preOptions) {
    var preOptions = preOptions || {};
    return function (options) {
      var _this = this;

      /**
      *@var model
      *@type Function
      */
      this.model = preOptions.model || null;
      /*
      *@var model
      *@type Array
      */

      this.collection = []; //HERE INITUIALIZE MODEL CONSTRUCTOR MODEL

      options.forEach(function (_model) {
        _this.collection.push(new _this.model(_model));
      });
      /*
      *Native Function forEach from array
      */

      this.forEach = function (func) {
        return this.collection.forEach(func);
      };
      /*
      *Native Function filter from array
      */


      this.filter = function (func) {
        return this.collection.filter(func);
      };
      /**
      *@var filterBy
      *
      */
      // deberia agregar multiples filed and values


      this.filterBy = function (field, value, sensitivity) {
        if (!_typeof(sensitivity) == 'boolean') {
          sensitivity = false;
        }

        return this.collection.filter(function (item) {
          if (typeof field == 'string') {
            if (item.has(field)) {
              return sensitivity ? item.get(field).includes(value) : item.get(field).toLowerCase().includes(value.toLowerCase());
            }
          }

          if (typeof field.forEach == 'function') {
            var match = false;
            field.forEach(function (fieldItem) {
              if (item.has(fieldItem)) {
                var _match = sensitivity ? item.get(fieldItem).includes(value) : item.get(fieldItem).toLowerCase().includes(value.toLowerCase());

                if (_match && !match) {
                  match = true;
                }
              }
            });
            return match; // -------------------------------------------------------------------
          }

          return false;
        });
      };
      /**
      *
      *
      */


      this.getAll = function () {
        return this.collection;
      };
      /*
      *At
      *@param position
      */


      this.at = function (position) {
        if (typeof position == 'number') {
          if (position <= this.collection.length) {
            return this.collection[position];
          } else {
            return null;
          }
        } else {
          return null;
        }
      };

      this.push = function (obj) {
        this.collection.push(new this.model(obj));
      };

      this.pop = function () {
        this.collection.pop();
      };

      this.unshift = function () {// pending
      };

      this.shift = function () {
        this.collection.shift();
      };

      this.slice = function (start, end) {
        return this.collection.slice(start, end);
      };

      this.length = function () {
        return this.collection.length;
      }; // deberia agrandar By para poder recibir una 


      this.sortBy = function (by, direction, collection) {
        var direction = direction == null || direction == undefined ? true : direction;
        var collectionValue = [];
        var collection = typeof collection == 'undefined' ? this.collection : collection;

        for (var i = 0; i < collection.length; i++) {
          if (collection[i].has(by)) {
            // no permitir duplkicaciones del valor indexOf validation
            collectionValue.push(collection[i].get(by));
          }
        } // Aqui no se deberia permitir valores duplicados


        collectionValue = direction ? collectionValue.sort() : collectionValue.sort().reverse();
        var vtr = [];

        for (var i = 0; i < collectionValue.length; i++) {
          vtr = [].concat(_toConsumableArray(vtr), _toConsumableArray(this.getAll().filter(function (Item) {
            return Item.get(by) == collectionValue[i];
          })));
        }

        return vtr;
      };
      /**
      *@pluck Function
      */


      this.pluck = function (nameProperty) {
        var pluck = [];

        if (typeof nameProperty == 'string') {
          this.collection.forEach(function (item) {
            if (item.has(nameProperty)) {
              pluck.push(item.get(nameProperty));
            }
          });
        }

        return pluck;
      }; // --------------------------------------------------------------------    
      // --------------------------------------------------------------------

    };
  };
});
