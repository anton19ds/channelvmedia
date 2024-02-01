(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

require('./lib/jquery.inview');

/*
   import { disableScroll, enableScroll } from './lib/scrollControl'
   import './lib/jquery.scrollTo'

const transitionToLongform = exports.transitionToLongform = function (ev) {
	disableScroll()
	$('html').toggleClass('is-locked')
	$('#content').toggleClass('is-longform')
	setTimeout(function () {
		enableScroll()
		$.scrollTo(0,0)
		$('.site-menu__button').addClass('is-accented')
	}, 700)
	registerHomeInviewHandler()
	if ($('#content').hasClass('is-longform')) {
		$(document).off('scroll', transitionToLongform)
	} else {
		$(document).on('scroll', transitionToLongform)
	}
}

const registerHomeScrollHandler = exports.registerHomeScrollHandler  = function () {
	$('[data-action="scroll-home-header"]').on('click', transitionToLongform)
	if ($('body').hasClass('home-page') && !$('#content').hasClass('is-longform')) {
		$('html').addClass('is-locked')
		$(document).on('scroll', transitionToLongform)
	} else {
		$('html').removeClass('is-locked')
		$(document).off('scroll', transitionToLongform)
	}
}
*/

var setPageBodyClass = exports.setPageBodyClass = function () {
	var path = window.location.pathname;
	var pageClass = path == '/' ? 'home' : path.substring(1).replace(/\//g, '-');
	$('body').removeClass().addClass(pageClass + '-page');
};

var registerSiteMenuHandler = exports.registerSiteMenuHandler = function () {
	$('body').on('click', '[data-action="activate-site-menu"]', function (el) {
		$('.site-menu__button').hide();
		$('.site-menu').addClass('is-active');
		$('body').addClass('no-scroll');
	});
	$('body').on('click', '[data-action="close-site-menu"]', function (el) {
		$('.site-menu__button').show();
		$('.site-menu').removeClass('is-active');
		$('body').removeClass('no-scroll');
	});
}();

var registerHomeInviewHandler = exports.registerHomeInviewHandler = function () {
	if ($('.case-study').length) {
		$('.case-study').append('<div class="case-study__start"></div><div class="case-study__midway"></div><div class="case-study__end"></div>');
		$.each({
			'.case-study__start': 'is-in-start-view',
			'.case-study__midway': 'is-in-midway-view',
			'.case-study__end': 'is-in-end-view'
		}, function (k, v) {
			$(k).on('inview', function (ev, isInView) {
				if (isInView) $(this).parent('.case-study').addClass(v);else $(this).parent('.case-study').removeClass(v);
			});
		});
		$('.client-logo').one('inview', function (ev, isInView) {
			if (isInView) $(this).addClass('is-in-view');else $(this).removeClass('is-in-view');
		});
	}
};

var unregisterHomeInviewHandler = exports.unregisterHomeInviewHandler = function () {
	if ($('.case-study').length) {
		$.each({
			'.case-study__start': 'is-in-start-view',
			'.case-study__midway': 'is-in-midway-view',
			'.case-study__end': 'is-in-end-view'
		}, function (k) {
			$(k).off('inview');
		});
	}
};

},{"./lib/jquery.inview":2}],2:[function(require,module,exports){
(function (global){
'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol ? "symbol" : typeof obj; };

/**
 * author Christopher Blum
 *    - based on the idea of Remy Sharp, http://remysharp.com/2009/01/26/element-in-view-event-plugin/
 *    - forked from http://github.com/zuk/jquery.inview/
 */
(function (factory) {
  if (typeof define == 'function' && define.amd) {
    // AMD
    define(['jquery'], factory);
  } else if ((typeof exports === 'undefined' ? 'undefined' : _typeof(exports)) === 'object') {
    // Node, CommonJS
    module.exports = factory((typeof window !== "undefined" ? window['$'] : typeof global !== "undefined" ? global['$'] : null));
  } else {
    // Browser globals
    factory(jQuery);
  }
})(function ($) {

  var inviewObjects = [],
      viewportSize,
      viewportOffset,
      d = document,
      w = window,
      documentElement = d.documentElement,
      timer;

  $.event.special.inview = {
    add: function add(data) {
      inviewObjects.push({ data: data, $element: $(this), element: this });
      // Use setInterval in order to also make sure this captures elements within
      // "overflow:scroll" elements or elements that appeared in the dom tree due to
      // dom manipulation and reflow
      // old: $(window).scroll(checkInView);e
      //
      // By the way, iOS (iPad, iPhone, ...) seems to not execute, or at least delays
      // intervals while the user scrolls. Therefore the inview event might fire a bit late there
      //
      // Don't waste cycles with an interval until we get at least one element that
      // has bound to the inview event.
      if (!timer && inviewObjects.length) {
        timer = setInterval(checkInView, 250);
      }
    },

    remove: function remove(data) {
      for (var i = 0; i < inviewObjects.length; i++) {
        var inviewObject = inviewObjects[i];
        if (inviewObject.element === this && inviewObject.data.guid === data.guid) {
          inviewObjects.splice(i, 1);
          break;
        }
      }

      // Clear interval when we no longer have any elements listening
      if (!inviewObjects.length) {
        clearInterval(timer);
        timer = null;
      }
    }
  };

  function getViewportSize() {
    var mode,
        domObject,
        size = { height: w.innerHeight, width: w.innerWidth };

    // if this is correct then return it. iPad has compat Mode, so will
    // go into check clientHeight/clientWidth (which has the wrong value).
    if (!size.height) {
      mode = d.compatMode;
      if (mode || !$.support.boxModel) {
        // IE, Gecko
        domObject = mode === 'CSS1Compat' ? documentElement : // Standards
        d.body; // Quirks
        size = {
          height: domObject.clientHeight,
          width: domObject.clientWidth
        };
      }
    }

    return size;
  }

  function getViewportOffset() {
    return {
      top: w.pageYOffset || documentElement.scrollTop || d.body.scrollTop,
      left: w.pageXOffset || documentElement.scrollLeft || d.body.scrollLeft
    };
  }

  function checkInView() {
    if (!inviewObjects.length) {
      return;
    }

    var i = 0,
        $elements = $.map(inviewObjects, function (inviewObject) {
      var selector = inviewObject.data.selector,
          $element = inviewObject.$element;
      return selector ? $element.find(selector) : $element;
    });

    viewportSize = viewportSize || getViewportSize();
    viewportOffset = viewportOffset || getViewportOffset();

    for (; i < inviewObjects.length; i++) {
      // Ignore elements that are not in the DOM tree
      if (!$.contains(documentElement, $elements[i][0])) {
        continue;
      }

      var $element = $($elements[i]),
          elementSize = { height: $element[0].offsetHeight, width: $element[0].offsetWidth },
          elementOffset = $element.offset(),
          inView = $element.data('inview');

      // Don't ask me why because I haven't figured out yet:
      // viewportOffset and viewportSize are sometimes suddenly null in Firefox 5.
      // Even though it sounds weird:
      // It seems that the execution of this function is interferred by the onresize/onscroll event
      // where viewportOffset and viewportSize are unset
      if (!viewportOffset || !viewportSize) {
        return;
      }

      if (elementOffset.top + elementSize.height > viewportOffset.top && elementOffset.top < viewportOffset.top + viewportSize.height && elementOffset.left + elementSize.width > viewportOffset.left && elementOffset.left < viewportOffset.left + viewportSize.width) {
        if (!inView) {
          $element.data('inview', true).trigger('inview', [true]);
        }
      } else if (inView) {
        $element.data('inview', false).trigger('inview', [false]);
      }
    }
  }

  $(w).on("scroll resize scrollstop", function () {
    viewportSize = viewportOffset = null;
  });

  // IE < 9 scrolls to focused elements without firing the "scroll" event
  if (!documentElement.addEventListener && documentElement.attachEvent) {
    documentElement.attachEvent("onfocusin", function () {
      viewportOffset = null;
    });
  }
});

}).call(this,typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {})
},{}],3:[function(require,module,exports){
(function (global){
'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol ? "symbol" : typeof obj; };

/*!
 * smoothState.js is jQuery plugin that progressively enhances
 * page loads to behave more like a single-page application.
 *
 * @author  Miguel Ángel Pérez   reachme@miguel-perez.com
 * @see     http://smoothstate.com
 *
 */

(function (factory) {
  'use strict';

  if ((typeof module === 'undefined' ? 'undefined' : _typeof(module)) === 'object' && _typeof(module.exports) === 'object') {
    factory((typeof window !== "undefined" ? window['$'] : typeof global !== "undefined" ? global['$'] : null), window, document);
  } else {
    factory(jQuery, window, document);
  }
})(function ($, window, document, undefined) {
  'use strict';

  /** Abort if browser does not support pushState */
  if (!window.history.pushState) {
    // setup a dummy fn, but don't intercept on link clicks
    $.fn.smoothState = function () {
      return this;
    };
    $.fn.smoothState.options = {};
    return;
  } 
  /** Abort if smoothState is already present **/
  if ($.fn.smoothState) {
    return;
  }
  var
  /** Used later to scroll page to the top */
  $body = $('html, body'),


  /** Used in debug mode to console out useful warnings */
  consl = window.console,


  /** Plugin default options, will be exposed as $fn.smoothState.options */
  defaults = {

    /** If set to true, smoothState will log useful debug information instead of aborting */
    debug: false,

    /** jQuery selector to specify which anchors smoothState should bind to */
    anchors: 'a',

    /** Regex to specify which href smoothState should load. If empty, every href will be permitted. */
    hrefRegex: '',

    /** jQuery selector to specify which forms smoothState should bind to */
    forms: 'form',

    /** If set to true, smoothState will store form responses in the cache. */
    allowFormCaching: false,

    /** Minimum number of milliseconds between click/submit events. Events ignored beyond this rate are ignored. */
    repeatDelay: 500,

    /** A selector that defines what should be ignored by smoothState */
    blacklist: '.no-smoothState',

    /** If set to true, smoothState will prefetch a link's contents on hover */
    prefetch: false,

    /** The name of the event we will listen to from anchors if we're prefetching */
    prefetchOn: 'mouseover touchstart',

    /** jQuery selector to specify elements which should not be prefetched */
    prefetchBlacklist: '.no-prefetch',

    /** The number of pages smoothState will try to store in memory */
    cacheLength: 0,

    /** Class that will be applied to the body while the page is loading */
    loadingClass: 'is-loading',

    /** Scroll to top after onStart and scroll to hash after onReady */
    scroll: true,

    /**
     * A function that can be used to alter the ajax request settings before it is called
     * @param  {Object} request - jQuery.ajax settings object that will be used to make the request
     * @return {Object}         Altered request object
     */
    alterRequest: function alterRequest(request) {
      return request;
    },

    /**
     * A function that can be used to alter the state object before it is updated or added to the browsers history
     * @param  {Object} state - An object that will be assigned to history entry
     * @param  {string} title - The history entry's title. For reference only
     * @param  {string} url   - The history entry's URL. For reference only
     * @return {Object}         Altered state object
     */
    alterChangeState: function alterChangeState(state, title, url) {
      return state;
    },

    /** Run before a page load has been activated */
    onBefore: function onBefore($currentTarget, $container) {},

    /** Run when a page load has been activated */
    onStart: {
      duration: 0,
      render: function render($container) {}
    },

    /** Run if the page request is still pending and onStart has finished animating */
    onProgress: {
      duration: 0,
      render: function render($container) {}
    },

    /** Run when requested content is ready to be injected into the page  */
    onReady: {
      duration: 0,
      render: function render($container, $newContent) {
        $container.html($newContent);
      }
    },

    /** Run when content has been injected and all animations are complete  */
    onAfter: function onAfter($container, $newContent) {}
  },


  /** Utility functions that are decoupled from smoothState */
  utility = {

    /**
     * Checks to see if the url is external
     * @param   {string}    url - url being evaluated
     * @see     http://stackoverflow.com/questions/6238351/fastest-way-to-detect-external-urls
     *
     */
    isExternal: function isExternal(url) {
      var match = url.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);
      if (typeof match[1] === 'string' && match[1].length > 0 && match[1].toLowerCase() !== window.location.protocol) {
        return true;
      }
      if (typeof match[2] === 'string' && match[2].length > 0 && match[2].replace(new RegExp(':(' + { 'http:': 80, 'https:': 443 }[window.location.protocol] + ')?$'), '') !== window.location.host) {
        return true;
      }
      return false;
    },

    /**
     * Strips the hash from a url and returns the new href
     * @param   {string}    href - url being evaluated
     *
     */
    stripHash: function stripHash(href) {
      return href.replace(/#.*/, '');
    },

    /**
     * Checks to see if the url is an internal hash
     * @param   {string}    href - url being evaluated
     * @param   {string}    prev - previous url (optional)
     *
     */
    isHash: function isHash(href, prev) {
      prev = prev || window.location.href;

      var hasHash = href.indexOf('#') > -1 ? true : false,
          samePath = utility.stripHash(href) === utility.stripHash(prev) ? true : false;

      return hasHash && samePath;
    },

    /**
     * Translates a url string into a $.ajax settings obj
     * @param  {Object|String} request url or settings obj
     * @return {Object}        settings object
     */
    translate: function translate(request) {
      var defaults = {
        dataType: 'html',
        type: 'GET'
      };
      if (typeof request === 'string') {
        request = $.extend({}, defaults, { url: request });
      } else {
        request = $.extend({}, defaults, request);
      }
      return request;
    },

    /**
     * Checks to see if we should be loading this URL
     * @param   {string}    url - url being evaluated
     * @param   {string}    blacklist - jquery selector
     *
     */
    shouldLoadAnchor: function shouldLoadAnchor($anchor, blacklist, hrefRegex) {
      var href = $anchor.prop('href');
      // URL will only be loaded if it's not an external link, hash, or
      // blacklisted
      return !utility.isExternal(href) && !utility.isHash(href) && !$anchor.is(blacklist) && !$anchor.prop('target') && ((typeof hrefRegex === 'undefined' ? 'undefined' : _typeof(hrefRegex)) === undefined || hrefRegex === '' || $anchor.prop('href').search(hrefRegex) !== -1);
    },

    /**
     * Resets an object if it has too many properties
     *
     * This is used to clear the 'cache' object that stores
     * all of the html. This would prevent the client from
     * running out of memory and allow the user to hit the
     * server for a fresh copy of the content.
     *
     * @param   {object}    obj
     * @param   {number}    cap
     *
     */
    clearIfOverCapacity: function clearIfOverCapacity(cache, cap) {
      // Polyfill Object.keys if it doesn't exist
      if (!Object.keys) {
        Object.keys = function (obj) {
          var keys = [],
              k;
          for (k in obj) {
            if (Object.prototype.hasOwnProperty.call(obj, k)) {
              keys.push(k);
            }
          }
          return keys;
        };
      }

      if (Object.keys(cache).length > cap) {
        cache = {};
      }

      return cache;
    },

    /**
     * Stores a document fragment into an object
     * @param   {object}           object - object where it will be stored
     * @param   {string}           url - name of the entry
     * @param   {string|document}  doc - entire html
     * @param   {string}           id - the id of the fragment
     * @param   {object}           state - the history entry's object
     * @return  {object}           updated object store
     */
    storePageIn: function storePageIn(object, url, doc, id, state) {
      var $html = $('<html></html>').append($(doc));
      object[url] = { // Content is indexed by the url
        status: 'loaded',
        // Stores the title of the page, .first() prevents getting svg titles
        title: $html.find('title').first().text(),
        html: $html.find('#' + id), // Stores the contents of the page
        doc: doc, // Stores the whole page document
        state: state };
      // Stores the history entry for comparisons
      return object;
    },

    /**
     * Triggers an 'allanimationend' event when all animations are complete
     * @param   {object}    $element - jQuery object that should trigger event
     * @param   {string}    resetOn - which other events to trigger allanimationend on
     *
     */
    triggerAllAnimationEndEvent: function triggerAllAnimationEndEvent($element, resetOn) {

      resetOn = ' ' + resetOn || '';

      var animationCount = 0,
          animationstart = 'animationstart webkitAnimationStart oanimationstart MSAnimationStart',
          animationend = 'animationend webkitAnimationEnd oanimationend MSAnimationEnd',
          eventname = 'allanimationend',
          onAnimationStart = function onAnimationStart(e) {
        if ($(e.delegateTarget).is($element)) {
          e.stopPropagation();
          animationCount++;
        }
      },
          onAnimationEnd = function onAnimationEnd(e) {
        if ($(e.delegateTarget).is($element)) {
          e.stopPropagation();
          animationCount--;
          if (animationCount === 0) {
            $element.trigger(eventname);
          }
        }
      };

      $element.on(animationstart, onAnimationStart);
      $element.on(animationend, onAnimationEnd);

      $element.on('allanimationend' + resetOn, function () {
        animationCount = 0;
        utility.redraw($element);
      });
    },

    /** Forces browser to redraw elements */
    redraw: function redraw($element) {
      $element.height();
    }
  },


  /** Handles the popstate event, like when the user hits 'back' */
  onPopState = function onPopState(e) {
    if (e.state !== null) {
      var url = window.location.href,
          $page = $('#' + e.state.id), 
          page = $page.data('smoothState'), 
          diffUrl = page.href !== url && !utility.isHash(url, page.href),
          diffState = e.state !== page.cache[page.href].state;

      if (diffUrl || diffState) {
        if (diffState) {
          page.clear(page.href);
        }
        page.load(url, false);
      }
    }
  },


  /** Constructor function */
  
Smoothstate = function Smoothstate(element, options) {
    var
    /** Container element smoothState is run on */
      $container = $(element),


    /** ID of the main container */
    elementId = $container.prop('id'),


    /** If a hash was clicked, we'll store it here so we
     *  can scroll to it once the new page has been fully
     *  loaded.
     */
    targetHash = null,


    /** Used to prevent fetching while we transition so
     *  that we don't mistakenly override a cache entry
     *  we need.
     */
    isTransitioning = false,


    /** Variable that stores pages after they are requested */
    cache = {},


    /** Variable that stores data for a history entry */
    state = {},


    /** Url of the content that is currently displayed */
    currentHref = window.location.href,


    /**
     * Clears a given page from the cache, if no url is provided
     * it will clear the entire cache.
     * @param  {String} url entry that is to be deleted.
     */
    clear = function clear(url) {
      url = url || false;
      if (url && cache.hasOwnProperty(url)) {
        delete cache[url];
      } else {
        cache = {};
      }
      $container.data('smoothState').cache = cache;
    },

    /**
     * Fetches the contents of a url and stores it in the 'cache' variable
     * @param  {String|Object}   request  - url or request settings object
     * @param  {Function}        callback - function that will run as soon as it finishes
     */
    fetch = function fetch(request, callback) {

      // Sets a default in case a callback is not defined
      callback = callback || $.noop;

      // Allows us to accept a url string or object as the ajax settings
      var settings = utility.translate(request);

      // Check the length of the cache and clear it if needed
      cache = utility.clearIfOverCapacity(cache, options.cacheLength);

      // Don't prefetch if we have the content already or if it's a form
      if (cache.hasOwnProperty(settings.url) && typeof settings.data === 'undefined') {
        return;
      }

      // Let other parts of the code know we're working on getting the content
      cache[settings.url] = { status: 'fetching' };

      // Make the ajax request
      var ajaxRequest = $.ajax(settings);

      // Store contents in cache variable if successful
      ajaxRequest.done(function (html) {
        utility.storePageIn(cache, settings.url, html, elementId);
        $container.data('smoothState').cache = cache;
      });

      // Mark as error to be acted on later
      ajaxRequest.fail(function () {
        cache[settings.url].status = 'error';
      });

      // Call fetch callback
      if (callback) {
        ajaxRequest.always(callback);
      }
    },
        repositionWindow = function repositionWindow() {
      // Scroll to a hash anchor on destination page
      if (targetHash) {
        var $targetHashEl = $(targetHash, $container);
        if ($targetHashEl.length) {
          var newPosition = $targetHashEl.offset().top;
          $body.scrollTop(newPosition);
        }
        targetHash = null;
      }
    },


    /** Updates the contents from cache[url] */
    updateContent = function updateContent(url) {
      // If the content has been requested and is done:
      var containerId = '#' + elementId,
          $newContent = cache[url] ? $(cache[url].html.html()) : null;

      if ($newContent.length) {

        // Update the title
        document.title = cache[url].title;

        // Update current url
        $container.data('smoothState').href = url;

        // Remove loading class
        if (options.loadingClass) {
          $body.removeClass(options.loadingClass);
        }

        // Call the onReady callback and set delay
        options.onReady.render($container, $newContent);

        $container.one('ss.onReadyEnd', function () {

          // Allow prefetches to be made again
          isTransitioning = false;

          // Run callback
          options.onAfter($container, $newContent);

          if (options.scroll) {
            repositionWindow();
          }

          bindPrefetchHandlers($container);
        });

        window.setTimeout(function () {
          $container.trigger('ss.onReadyEnd');
        }, options.onReady.duration);
      } else if (!$newContent && options.debug && consl) {
        // Throw warning to help debug in debug mode
        consl.warn('No element with an id of ' + containerId + ' in response from ' + url + ' in ' + cache);
      } else {
        // No content availble to update with, aborting...
        window.location = url;
      }
    },


    /**
     * Loads the contents of a url into our container
     * @param   {string}    url
     * @param   {bool}      push - used to determine if we should
     *                      add a new item into the history object
     * @param   {bool}      cacheResponse - used to determine if
     *                      we should allow the cache to forget this
     *                      page after thid load completes.
     */
    load = function load(request, push, cacheResponse) {

      var settings = utility.translate(request);

      /** Makes these optional variables by setting defaults. */
      if (typeof push === 'undefined') {
        push = true;
      }
      if (typeof cacheResponse === 'undefined') {
        cacheResponse = true;
      }

      var
      /** Used to check if the onProgress function has been run */
      hasRunCallback = false,
          callbBackEnded = false,


      /** List of responses for the states of the page request */
      responses = {

        /** Page is ready, update the content */
        loaded: function loaded() {
          var eventName = hasRunCallback ? 'ss.onProgressEnd' : 'ss.onStartEnd';

          if (!callbBackEnded || !hasRunCallback) {
            $container.one(eventName, function () {
              updateContent(settings.url);
              if (!cacheResponse) {
                clear(settings.url);
              }
            });
          } else if (callbBackEnded) {
            updateContent(settings.url);
          }

          if (push) {
            /** Prepare a history entry */
            state = options.alterChangeState({ id: elementId }, cache[settings.url].title, settings.url);

            /** Update the cache to include the history entry for future comparisons */
            cache[settings.url].state = state;

            /** Add history entry */
            window.history.pushState(state, cache[settings.url].title, settings.url);
          }

          if (callbBackEnded && !cacheResponse) {
            clear(settings.url);
          }
        },

        /** Loading, wait 10 ms and check again */
        fetching: function fetching() {

          if (!hasRunCallback) {

            hasRunCallback = true;

            // Run the onProgress callback and set trigger
            $container.one('ss.onStartEnd', function () {

              // Add loading class
              if (options.loadingClass) {
                $body.addClass(options.loadingClass);
              }

              options.onProgress.render($container);

              window.setTimeout(function () {
                $container.trigger('ss.onProgressEnd');
                callbBackEnded = true;
              }, options.onProgress.duration);
            });
          }

          window.setTimeout(function () {
            // Might of been canceled, better check!
            if (cache.hasOwnProperty(settings.url)) {
              responses[cache[settings.url].status]();
            }
          }, 10);
        },

        /** Error, abort and redirect */
        error: function error() {
          if (options.debug && consl) {
            consl.log('There was an error loading: ' + settings.url);
          } else {
            window.location = settings.url;
          }
        }
      };

      if (!cache.hasOwnProperty(settings.url)) {
        fetch(settings);
      }

      // Run the onStart callback and set trigger
      options.onStart.render($container);

      window.setTimeout(function () {
        if (options.scroll) {
          $body.scrollTop(0);
        }
        $container.trigger('ss.onStartEnd');
      }, options.onStart.duration);

      // Start checking for the status of content
      responses[cache[settings.url].status]();
    },


    /**
     * Binds to the hover event of a link, used for prefetching content
     * @param   {object}    event
     */
    hoverAnchor = function hoverAnchor(event) {
      var request,
          $anchor = $(event.currentTarget);

      if (utility.shouldLoadAnchor($anchor, options.blacklist, options.hrefRegex) && !isTransitioning) {
        event.stopPropagation();
        request = utility.translate($anchor.prop('href'));
        request = options.alterRequest(request);
        fetch(request);
      }
    },


    /**
     * Binds to the click event of a link, used to show the content
     * @param   {object}    event
     */
    clickAnchor = function clickAnchor(event) {

      // Ctrl (or Cmd) + click must open a new tab
      var $anchor = $(event.currentTarget);
      if (!event.metaKey && !event.ctrlKey && utility.shouldLoadAnchor($anchor, options.blacklist, options.hrefRegex)) {

        // stopPropagation so that event doesn't fire on parent containers.
        event.stopPropagation();
        event.preventDefault();

        // Apply rate limiting.
        if (!isRateLimited()) {

          // Set the delay timeout until the next event is allowed.
          setRateLimitRepeatTime();

          var request = utility.translate($anchor.prop('href'));
          isTransitioning = true;
          targetHash = $anchor.prop('hash');

          // Allows modifications to the request
          request = options.alterRequest(request);

          options.onBefore($anchor, $container);

          load(request);
        }
      }
    },


    /**
     * Binds to form submissions
     * @param  {Event} event
     */
    submitForm = function submitForm(event) {
      var $form = $(event.currentTarget);

      if (!$form.is(options.blacklist)) {

        event.preventDefault();
        event.stopPropagation();

        // Apply rate limiting.
        if (!isRateLimited()) {

          // Set the delay timeout until the next event is allowed.
          setRateLimitRepeatTime();

          var request = {
            url: $form.prop('action'),
            data: $form.serialize(),
            type: $form.prop('method')
          };

          isTransitioning = true;
          request = options.alterRequest(request);

          if (request.type.toLowerCase() === 'get') {
            request.url = request.url + '?' + request.data;
          }

          // Call the onReady callback and set delay
          options.onBefore($form, $container);

          load(request, undefined, options.allowFormCaching);
        }
      }
    },


    /**
     * DigitalMachinist (Jeff Rose)
     * I figured to keep these together with this above functions since they're all related.
     * Feel free to move these somewhere more appropriate if you have such places.
     */
    rateLimitRepeatTime = 0,
        isRateLimited = function isRateLimited() {
      var isFirstClick = options.repeatDelay === null;
      var isDelayOver = parseInt(Date.now()) > rateLimitRepeatTime;
      return !(isFirstClick || isDelayOver);
    },
        setRateLimitRepeatTime = function setRateLimitRepeatTime() {
      rateLimitRepeatTime = parseInt(Date.now()) + parseInt(options.repeatDelay);
    },


    /**
     * Binds prefetch events
     * @param   {object}    event
     */
    bindPrefetchHandlers = function bindPrefetchHandlers($element) {

      if (options.anchors && options.prefetch) {
        $element.find(options.anchors).not(options.prefetchBlacklist).on(options.prefetchOn, null, hoverAnchor);
      }
    },


    /**
     * Binds all events and inits functionality
     * @param   {object}    event
     */
    bindEventHandlers = function bindEventHandlers($element) {

      if (options.anchors) {
        $element.on('click', options.anchors, clickAnchor);

        bindPrefetchHandlers($element);
      }

      if (options.forms) {
        $element.on('submit', options.forms, submitForm);
      }
    },


    /** Restart the container's css animations */
    restartCSSAnimations = function restartCSSAnimations() {
      var classes = $container.prop('class');
      $container.removeClass(classes);
      utility.redraw($container);
      $container.addClass(classes);
    };

    /** Merge defaults and global options into current configuration */
    options = $.extend({}, $.fn.smoothState.options, options);

    /** Sets a default state */
    if (window.history.state === null) {
      state = options.alterChangeState({ id: elementId }, document.title, currentHref);

      /** Update history entry */
      window.history.replaceState(state, document.title, currentHref);
    } else {
      state = {};
    }

    /** Stores the current page in cache variable */
    utility.storePageIn(cache, currentHref, document.documentElement.outerHTML, elementId, state);

    /** Bind all of the event handlers on the container, not anchors */
    utility.triggerAllAnimationEndEvent($container, 'ss.onStartEnd ss.onProgressEnd ss.onEndEnd');

    /** Bind all of the event handlers on the container, not anchors */
    bindEventHandlers($container);

    /** Public methods */
    return {
      href: currentHref,
      cache: cache,
      clear: clear,
      load: load,
      fetch: fetch,
      restartCSSAnimations: restartCSSAnimations
    };
  },


  /** Returns elements with smoothState attached to it */
  declaresmoothState = function declaresmoothState(options) {
    return this.each(function () {
      var tagname = this.tagName.toLowerCase();
      // Checks to make sure the smoothState element has an id and isn't already bound
      if (this.id && tagname !== 'body' && tagname !== 'html' && !$.data(this, 'smoothState')) {
        // Makes public methods available via $('element').data('smoothState');
        $.data(this, 'smoothState', new Smoothstate(this, options));
      } else if (!this.id && consl) {
        // Throw warning if in debug mode
        consl.warn('Every smoothState container needs an id but the following one does not have one:', this);
      } else if ((tagname === 'body' || tagname === 'html') && consl) {
        // We dont support making th html or the body element the smoothstate container
        consl.warn('The smoothstate container cannot be the ' + this.tagName + ' tag');
      }
    });
  };

  /** Sets the popstate function */
  window.onpopstate = onPopState;

  /** Makes utility functions public for unit tests */
  $.smoothStateUtility = utility;

  /** Defines the smoothState plugin */
  $.fn.smoothState = declaresmoothState;

  /* expose the default options */
  $.fn.smoothState.options = defaults;
});

}).call(this,typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {})
},{}],4:[function(require,module,exports){
'use strict';

/*!
 * verge 1.9.1+201402130803
 * https://github.com/ryanve/verge
 * MIT License 2013 Ryan Van Etten
 */

(function (root, name, make) {
  if (typeof module != 'undefined' && module['exports']) module['exports'] = make();else root[name] = make();
})(undefined, 'verge', function () {

  var xports = {},
      win = typeof window != 'undefined' && window,
      doc = typeof document != 'undefined' && document,
      docElem = doc && doc.documentElement,
      matchMedia = win['matchMedia'] || win['msMatchMedia'],
      mq = matchMedia ? function (q) {
    return !!matchMedia.call(win, q).matches;
  } : function () {
    return false;
  },
      viewportW = xports['viewportW'] = function () {
    var a = docElem['clientWidth'],
        b = win['innerWidth'];
    return a < b ? b : a;
  },
      viewportH = xports['viewportH'] = function () {
    var a = docElem['clientHeight'],
        b = win['innerHeight'];
    return a < b ? b : a;
  };

  /** 
   * Test if a media query is active. Like Modernizr.mq
   * @since 1.6.0
   * @return {boolean}
   */
  xports['mq'] = mq;

  /** 
   * Normalized matchMedia
   * @since 1.6.0
   * @return {MediaQueryList|Object}
   */
  xports['matchMedia'] = matchMedia ? function () {
    // matchMedia must be binded to window
    return matchMedia.apply(win, arguments);
  } : function () {
    // Gracefully degrade to plain object
    return {};
  };

  /**
   * @since 1.8.0
   * @return {{width:number, height:number}}
   */
  function viewport() {
    return { 'width': viewportW(), 'height': viewportH() };
  }
  xports['viewport'] = viewport;

  /** 
   * Cross-browser window.scrollX
   * @since 1.0.0
   * @return {number}
   */
  xports['scrollX'] = function () {
    return win.pageXOffset || docElem.scrollLeft;
  };

  /** 
   * Cross-browser window.scrollY
   * @since 1.0.0
   * @return {number}
   */
  xports['scrollY'] = function () {
    return win.pageYOffset || docElem.scrollTop;
  };

  /**
   * @param {{top:number, right:number, bottom:number, left:number}} coords
   * @param {number=} cushion adjustment
   * @return {Object}
   */
  function calibrate(coords, cushion) {
    var o = {};
    cushion = +cushion || 0;
    o['width'] = (o['right'] = coords['right'] + cushion) - (o['left'] = coords['left'] - cushion);
    o['height'] = (o['bottom'] = coords['bottom'] + cushion) - (o['top'] = coords['top'] - cushion);
    return o;
  }

  /**
   * Cross-browser element.getBoundingClientRect plus optional cushion.
   * Coords are relative to the top-left corner of the viewport.
   * @since 1.0.0
   * @param {Element|Object} el element or stack (uses first item)
   * @param {number=} cushion +/- pixel adjustment amount
   * @return {Object|boolean}
   */
  function rectangle(el, cushion) {
    el = el && !el.nodeType ? el[0] : el;
    if (!el || 1 !== el.nodeType) return false;
    return calibrate(el.getBoundingClientRect(), cushion);
  }
  xports['rectangle'] = rectangle;

  /**
   * Get the viewport aspect ratio (or the aspect ratio of an object or element)
   * @since 1.7.0
   * @param {(Element|Object)=} o optional object with width/height props or methods
   * @return {number}
   * @link http://w3.org/TR/css3-mediaqueries/#orientation
   */
  function aspect(o) {
    o = null == o ? viewport() : 1 === o.nodeType ? rectangle(o) : o;
    var h = o['height'],
        w = o['width'];
    h = typeof h == 'function' ? h.call(o) : h;
    w = typeof w == 'function' ? w.call(o) : w;
    return w / h;
  }
  xports['aspect'] = aspect;

  /**
   * Test if an element is in the same x-axis section as the viewport.
   * @since 1.0.0
   * @param {Element|Object} el
   * @param {number=} cushion
   * @return {boolean}
   */
  xports['inX'] = function (el, cushion) {
    var r = rectangle(el, cushion);
    return !!r && r.right >= 0 && r.left <= viewportW();
  };

  /**
   * Test if an element is in the same y-axis section as the viewport.
   * @since 1.0.0
   * @param {Element|Object} el
   * @param {number=} cushion
   * @return {boolean}
   */
  xports['inY'] = function (el, cushion) {
    var r = rectangle(el, cushion);
    return !!r && r.bottom >= 0 && r.top <= viewportH();
  };

  /**
   * Test if an element is in the viewport.
   * @since 1.0.0
   * @param {Element|Object} el
   * @param {number=} cushion
   * @return {boolean}
   */
  xports['inViewport'] = function (el, cushion) {
    // Equiv to `inX(el, cushion) && inY(el, cushion)` but just manually do both
    // to avoid calling rectangle() twice. It gzips just as small like this.
    var r = rectangle(el, cushion);
    return !!r && r.bottom >= 0 && r.right >= 0 && r.top <= viewportH() && r.left <= viewportW();
  };

  return xports;
});

},{}],5:[function(require,module,exports){
'use strict';

require('./lib/jquery.smoothstate');

var _handlers = require('./handlers');

var _handlers2 = _interopRequireDefault(_handlers);

var _parallax = require('./parallax');

var _parallax2 = _interopRequireDefault(_parallax);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

// import './lib/granim.min'


$(function () {
	$('body').prepend('<div class="revealer"><div class="revealer__layer"></div><div class="revealer__layer"></div><div class="revealer__layer"></div></div>');

	if (/MSIE/i.test(navigator.userAgent) || /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent)) {
		$('html').addClass('is-ie');
	}

	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		$('html').addClass('is-safari');
	}

	if ('ontouchstart' in window || 'onmsgesturechange' in window) {
		$('html').addClass('is-touch');
	}

	_parallax2.default.init();
	_handlers2.default.setPageBodyClass();
	_handlers2.default.registerHomeInviewHandler();
	// whatGranimHandler()
	// handlers.registerHomeScrollHandler()
/* ----------
----------
	var smoothState = $('#content').smoothState({
		debug: true,
		prefetch: true,
		prefetchOn: 'intent',
		cacheLength: 10,
		repeatDelay: 1300,
		onBefore: function onBefore($currentTarget) {
			_handlers2.default.unregisterHomeInviewHandler();
			$('.revealer').removeClass('revealer--right revealer--up revealer--left revealer--down');
			var revealType = $currentTarget.data('transition');
			revealType = revealType || 'right';
			$('.revealer').addClass('revealer--' + revealType);
		},
		onStart: {
			duration: 1000,
			render: function render($container) {
				$('body').removeClass().addClass('is-transitioning');
			}
		},
		onAfter: function onAfter() {
			setTimeout(function () {
				$('body').removeClass('is-transitioning');
				$('.site-menu__button').show();
				_handlers2.default.registerHomeInviewHandler();
			}, 700);
			_handlers2.default.setPageBodyClass();
			var URLParser = document.createElement('a');
			URLParser.href = smoothState.href;
			_parallax2.default.notifyPathChange(URLParser.pathname);
			//handlers.registerHomeScrollHandler()
			// whatGranimHandler()
		}
	}).data('smoothState');
----------
---------- */
});

function whatGranimHandler() {
	if ($('#pr-granim').length) {
		var granimInstance = new Granim({
			element: '#pr-granim',
			name: 'basic-gradient',
			direction: 'left-right',
			opacity: [1, 1],
			isPausedWhenNotInView: true,
			states: {
				"default-state": {
					gradients: [['#35bef5', '#85e6e4'], ['#85e6e4', '#35bef5']]
				}
			}
		});
	}
	if ($('#digital-granim').length) {
		var granimInstance = new Granim({
			element: '#digital-granim',
			name: 'basic-gradient',
			direction: 'left-right',
			opacity: [1, 1],
			isPausedWhenNotInView: true,
			states: {
				"default-state": {
					gradients: [['#7672be', '#57c9f6'], ['#57c9f6', '#7672be']]
				}
			}
		});
	}
	if ($('#content-granim').length) {
		var granimInstance = new Granim({
			element: '#content-granim',
			name: 'basic-gradient',
			direction: 'left-right',
			opacity: [1, 1],
			isPausedWhenNotInView: true,
			states: {
				"default-state": {
					gradients: [['#d44dab', '#7771bd'], ['#7771bd', '#d44dab']]
				}
			}
		});
	}
}

},{"./handlers":1,"./lib/jquery.smoothstate":3,"./parallax":6}],6:[function(require,module,exports){ 
'use strict';

var _verge = require('./lib/verge');

var _verge2 = _interopRequireDefault(_verge);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.init = function () {
	calculateGlobals();
	registerParallax();
	parallax();
	if (!isTouch) {
		window.addEventListener('scroll', scrollHandler, false);
		$(window).on('resize', calculateGlobals); // ensure correct fixed points after reload
		$(window).on('load', calculateGlobals); // ensure fixed points after all assets loaded
	}
};

exports.notifyPathChange = function (path) {
	currentPath = path;
	if (debug) console.log('parallax got: ' + currentPath);
	registerParallax();
	parallax();
};

// =========== INTERNALS

$.extend(_verge2.default);

var debug = false;
var isTouch = 'ontouchstart' in window || 'onmsgesturechange' in window;
var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
var isSafari = navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1;
var handlers = {
	'/': {
		'registers': [homePageParallaxRegister, clientLogosParallaxRegister],
		'handlers': [homePageParallaxHandler, clientLogosParallaxHandler]
	},
	'/home/': {
		'registers': [WPhomePageParallaxRegister, WPclientLogosParallaxRegister],
		'handlers': [WPhomePageParallaxHandler, WPclientLogosParallaxHandler]
	},
	'/what/': {
		'registers': [whatOverviewParallaxRegister],
		'handlers': [whatOverviewParallaxHandler]
	},
	'/websites/': {
		'registers': [websitesOverviewParallaxRegister],
		'handlers': [websitesOverviewParallaxHandler]
	} ,
	'/websites/dadadida/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/websites/fortune-and-frame/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/websites/iguodala-wilkerson/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/websites/imi/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/websites/iq-media/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/websites/mbk-sports/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/websites/starstar/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/websites/uswm/': {
		'registers': [websitesWorkParallaxRegister],
		'handlers': [websitesWorkParallaxHandler]
	},
	'/who/': {
		'registers': [whoParallaxRegister],
		'handlers': [whoParallaxHandler]
	},
	'/what/pr/': {
		'registers': [whatPRParallaxRegister, clientLogosParallaxRegister],
		'handlers': [whatPRParallaxHandler, clientLogosParallaxHandler]
	},
	'/what/digital/': {
		'registers': [whatPRParallaxRegister, clientLogosParallaxRegister],
		'handlers': [whatPRParallaxHandler, clientLogosParallaxHandler]
	},
	'/what/content/': {
		'registers': [whatPRParallaxRegister, clientLogosParallaxRegister],
		'handlers': [whatPRParallaxHandler, clientLogosParallaxHandler]
	},
	'/careers/': {
		'registers': [careersWorkParallaxRegister],
		'handlers': [careersWorkParallaxHandler]
	}
};

var ticking = false;
var top = 0;
var currentPath = window.location.pathname;
var windowHeight = void 0; // initialised in calculateGlobals()
// declared here for external scope of scroll handlers
var csTop = void 0,
    wdTop = void 0,
    logosTop = void 0,
    whatPRTop = void 0,
    whatPRHighlightsTop = void 0;

function calculateGlobals() {
	windowHeight = $(window).height();
	if (handlers[currentPath]) {
		var _iteratorNormalCompletion = true;
		var _didIteratorError = false;
		var _iteratorError = undefined;

		try {
			for (var _iterator = handlers[currentPath].registers[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
				var register = _step.value;

				if (debug) console.log('registering: ' + register.name);
				register();
			}
		} catch (err) {
			_didIteratorError = true;
			_iteratorError = err;
		} finally {
			try {
				if (!_iteratorNormalCompletion && _iterator.return) {
					_iterator.return();
				}
			} finally {
				if (_didIteratorError) {
					throw _iteratorError;
				}
			}
		}
	}
}

function registerParallax() {
	if (handlers[currentPath]) {
		var _iteratorNormalCompletion2 = true;
		var _didIteratorError2 = false;
		var _iteratorError2 = undefined;

		try {
			for (var _iterator2 = handlers[currentPath].registers[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
				var register = _step2.value;

				if (debug) console.log('registering: ' + register.name);
				register();
			}
		} catch (err) {
			_didIteratorError2 = true;
			_iteratorError2 = err;
		} finally {
			try {
				if (!_iteratorNormalCompletion2 && _iterator2.return) {
					_iterator2.return();
				}
			} finally {
				if (_didIteratorError2) {
					throw _iteratorError2;
				}
			}
		}
	}
}

function scrollHandler() {
	if (debug) console.log('calling scrollHandler()');
	top = window.pageYOffset;
	requestTick();
}

function requestTick() {
	if (!ticking) {
		if (debug) console.log('calling requestTick()');
		window.requestAnimationFrame(parallax);
		ticking = true;
	}
}

function parallax() {
	if (debug) console.log('running parallax');
	if (handlers[currentPath]) {
		var _iteratorNormalCompletion3 = true;
		var _didIteratorError3 = false;
		var _iteratorError3 = undefined;

		try {
			for (var _iterator3 = handlers[currentPath].handlers[Symbol.iterator](), _step3; !(_iteratorNormalCompletion3 = (_step3 = _iterator3.next()).done); _iteratorNormalCompletion3 = true) {
				var handler = _step3.value;

				if (debug) console.log('running ' + handler.name);
				handler();
			}
		} catch (err) {
			_didIteratorError3 = true;
			_iteratorError3 = err;
		} finally {
			try {
				if (!_iteratorNormalCompletion3 && _iterator3.return) {
					_iterator3.return();
				}
			} finally {
				if (_didIteratorError3) {
					throw _iteratorError3;
				}
			}
		}
	}
	ticking = false;
}

function homePageParallaxRegister() {
	// csTop = $('.case-studies').offset().top;
}

function homePageParallaxHandler() {
	var pc = top / windowHeight;

	// header poster
	if (pc < 1.2) {
		var offset = (pc * -100).toFixed(5);
		var scale = isFirefox ? 1.0 : (1.0 + pc / 2).toFixed(5);
		var mastTop = (17.5 + pc * 2).toFixed(5);
		var fontSize = (9 + pc * 3).toFixed(5);
		 $('.home-header__poster').css({ 'transform': 'translate3d(0,' + offset + 'px,0) scale3d(' + scale + ',' + scale + ',1.0)' });
		if (isSafari) {
			 $('.home-masthead h1').css('transform', 'scale3d(' + scale + ',' + scale + ',1.0)');
		} else {
			 $('.home-masthead h1').css({ 'font-size': fontSize + 'vw' });
		}
	}

	// intro
	if (pc < 2) {
		$('.intro h3').css({ 'transform': 'translateY(' + (-250 + pc * 250).toFixed(5) + 'px)' });
	}

	// giant V
	if (pc < 9) {
		$('.giant-v').css({ 'transform': 'translate3d(0,' + (-pc * 120).toFixed(5) + 'px,0)', 'opacity': 1.0 });
	} else {
		$('.giant-v').css('opacity', 0);
	}

	// elements
	if (pc > 1.75 && top < csTop - windowHeight / 1.15) {
		$('.elements').css({ 'position': 'fixed', 'opacity': 1.0 });
	} else if (top > csTop - windowHeight) {
		var diff = csTop - windowHeight + 10 - top;
		$('.elements').css('opacity', 1.0 - diff / -400);
	} else {
		$('.elements').css('position', 'absolute');
	}

	// what slide copy
	if (top > 1.75 && top < csTop) {
		$('.what-slide__copy').each(function (idx, el) {
			if ($.inViewport(el)) {
				$(el).css('opacity', (0.1 + (top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5));
			}
		});
	}

	// case studies overlap
	if (!isSafari && !isFirefox) {
		if (top > csTop - windowHeight && top < csTop - windowHeight + 400) {
			var csTopOffset = (csTop - windowHeight - top) / 2;
			$('.case-studies').css({ 'transform': 'translate3d(0,' + csTopOffset + 'px,0)', 'margin-bottom': csTopOffset + 'px' });
		}
	}
}

function clientLogosParallaxRegister() {
	logosTop = $('.client-logos').offset().top;
}

function clientLogosParallaxHandler() {
	if (top > logosTop - windowHeight + 200) {
		$('.client-logo').css('opacity', 1.0 - (logosTop - top) / 800 + 0.1);
	}
}
// --------------------- /HOME/ --------------------- //
function WPhomePageParallaxRegister() {
	// csTop = $('.case-studies').offset().top;
}

function WPhomePageParallaxHandler() {
	var pc = top / windowHeight;

	// header poster
	if (pc < 1.2) {
		var offset = (pc * -100).toFixed(5);
		var scale = isFirefox ? 1.0 : (1.0 + pc / 2).toFixed(5);
		var mastTop = (17.5 + pc * 2).toFixed(5);
		var fontSize = (9 + pc * 3).toFixed(5);
		 $('.home-header__poster').css({ 'transform': 'translate3d(0,' + offset + 'px,0) scale3d(' + scale + ',' + scale + ',1.0)' });
		if (isSafari) {
			 $('.home-masthead h1').css('transform', 'scale3d(' + scale + ',' + scale + ',1.0)');
		} else {
			 $('.home-masthead h1').css({ 'font-size': fontSize + 'vw' });
		}
	}

	// intro
	if (pc < 2) {
		$('.intro h3').css({ 'transform': 'translateY(' + (-250 + pc * 250).toFixed(5) + 'px)' });
	}

	// giant V
	if (pc < 9) {
		$('.giant-v').css({ 'transform': 'translate3d(0,' + (-pc * 120).toFixed(5) + 'px,0)', 'opacity': 1.0 });
	} else {
		$('.giant-v').css('opacity', 0);
	}

	// elements
	if (pc > 1.75 && top < csTop - windowHeight / 1.15) {
		$('.elements').css({ 'position': 'fixed', 'opacity': 1.0 });
	} else if (top > csTop - windowHeight) {
		var diff = csTop - windowHeight + 10 - top;
		$('.elements').css('opacity', 1.0 - diff / -400);
	} else {
		$('.elements').css('position', 'absolute');
	}

	// what slide copy
	if (top > 1.75 && top < csTop) {
		$('.what-slide__copy').each(function (idx, el) {
			if ($.inViewport(el)) {
				$(el).css('opacity', (0.1 + (top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5));
			}
		});
	}

	// case studies overlap
	if (!isSafari && !isFirefox) {
		if (top > csTop - windowHeight && top < csTop - windowHeight + 400) {
			var csTopOffset = (csTop - windowHeight - top) / 2;
			$('.case-studies').css({ 'transform': 'translate3d(0,' + csTopOffset + 'px,0)', 'margin-bottom': csTopOffset + 'px' });
		}
	}
}

function WPclientLogosParallaxRegister() {
	logosTop = $('.client-logos').offset().top;
}

function WPclientLogosParallaxHandler() {
	if (top > logosTop - windowHeight + 200) {
		$('.client-logo').css('opacity', 1.0 - (logosTop - top) / 800 + 0.1);
	}
}
// --------------------- /END HOME/ --------------------- // 
	
function whatOverviewParallaxRegister() {
	wdTop = $('.what-difference').offset().top;
}

function whatOverviewParallaxHandler() {
	var pc = top / windowHeight;
	// giant V
	if (pc < 4.0) {
		$('.what-overview__giant-v').css({ 'display': 'block', 'transform': 'translate3d(0,' + (pc * 450).toFixed(5) + 'px,0)', 'opacity': 1.0 });
		// } else if (pc > 3.5 && pc < 4.0) {
		// 	const diff = (wdTop - windowHeight + 10) - top
		// 	$('.what-overview__giant-v').css('opacity', (1.0 - Math.abs(1.0 - (diff / -250))))
		// } else {
		// $('.what-overview__giant-v').css('opacity', '0')
		$('.what-overview__header').css({ 'transform': 'translate3d(0,' + (pc * 270).toFixed(5) + 'px,0)' });
		// $('.what-overview__action, .what-overview__detail').each( function (idx, el) {
		// 	if ($.inViewport(el)) {
		// 		$(el).css('opacity', (0.1 + (top + windowHeight - $(el).offset().top)/(windowHeight/2)).toFixed(5))
		// 	}
		// })
	}

	if (pc > 2.5) {
		$('.what-difference__headline').css({ 'transform': 'translate3d(0,' + (pc - 2.5 - pc * 200 + 600) + 'px,0)' });
		$('.what-difference__text').each(function (idx, el) {
			if ($.inViewport(el)) {
				$(el).css('opacity', (0.1 + (top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5));
			}
		});
		$('.what-difference__block:nth-child(odd) .what-difference__image').each(function (idx, el) {
			if ($.inViewport(el)) {
				var of = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
				$(el).css({ 'transform': 'translate3d(' + (-20 + of * 15) + 'px,0,0)' });
			}
		});
		$('.what-difference__block:nth-child(even) .what-difference__image').each(function (idx, el) {
			if ($.inViewport(el)) {
				var of2 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
				$(el).css('opacity', (-0.1 + (top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5));
				//$(el).css({'transform': `translate3d(0,${15 + (of2 * -15)}px,0)`})
				//$(el).css({'transform': `translate3d(${20 + (of2 * -15)}px,${15 + (of2 * -15)}px,0)`})
			}
		});
	}

	// elements
	if (top > 1100 - windowHeight / 3 && top + windowHeight < wdTop) {
		$('.elements').css({ 'position': 'fixed', 'top': '33vh', 'opacity': 1.0 });
	} else if (top + windowHeight > wdTop) {
		var diff = wdTop - windowHeight + 10 - top;
		$('.elements').css('opacity', 1.0 - diff / -400);
	} else {
		$('.elements').css({ 'position': 'absolute', 'top': '1100px' });
	}
}

function whatPRParallaxRegister() {
	whatPRTop = $('.what-content').offset().top;
	whatPRHighlightsTop = $('.what-highlights-container').offset().top;
}

function whatPRParallaxHandler() {
	var pc = top / windowHeight;
	// giant V
	if (pc < 3) {
		$('.what-intro__giant-v').css({ 'transform': 'translate3d(0,' + (-pc * 300).toFixed(5) + 'px,0)', 'opacity': 1.0 });
		$('.what-intro__subline').css({ 'opacity': pc + 0.0 });
	} else {
		$('.what-intro__giant-v').css('opacity', 0);
	}
	// capabilities section
	if (top > whatPRTop - windowHeight - 400) {
		var topOffset = -top / 8;
		$('.what-content__giant-v').css({ 'transform': 'translate3d(0,' + topOffset.toFixed(5) + 'px,0)' });
		$('.capability-listing').each(function (el) {
			var elOpacity = Math.abs(windowHeight / 2.5 / ($(this).offset().top - top)).toFixed(3);
			$(this).css({ 'opacity': elOpacity });
		});
	}
	// what PR highlights
	if (top > whatPRHighlightsTop - windowHeight && top < logosTop - windowHeight + 300) {
		$('.what-highlight').each(function (idx, el) {
			var PRoffset = (whatPRHighlightsTop - top - windowHeight) / 5 - idx * 0.1 * (top - whatPRHighlightsTop);
			$(this).css({ 'transform': 'translate3d(0,' + PRoffset + 'px,0)' });
		});
	}
}

function whoParallaxRegister() {}

function whoParallaxHandler() {
	var pc = top / windowHeight; 
	$('.who-header__giant-v').css({ 'display': 'block', 'transform': 'translate3d(0,' + (pc * 90).toFixed(5) + 'px,0)', 'opacity': 1.0 });
	$('.who-header__heading').css({ 'transform': 'translate3d(0,' + (pc * -270).toFixed(5) + 'px,0)' });
	$('.who-body__image.left').each(function (idx, el) {
		//$(el).css({'border': '1px solid green'})
		if ($.inViewport(el)) {
			var of = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (-10 + of * 10) + 'px,0,0)' });
		}
	});
	$('.who-body__image.right').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of2 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (10 + of2 * -10) + 'px,' + (7 + of2 * -7) + 'px,0)' });
			//$(el).css({'transform': `translate3d(${40 + (of2 * -30)}px,${30 + (of2 * -30)}px,0)`})
		}
	});
}
	
function websitesOverviewParallaxRegister() {
	wdTop = $('.websites-overview__action').offset().top;
	wdTop = $('.websites-overview__detail').offset().top;
}
function websitesParallaxRegister() {} 
	
function websitesOverviewParallaxHandler() {
	var pc = top / windowHeight;
	// giant V
	if (pc < 4.0) {
		$('.websites-header__giant-v').css({ 'display': 'block', 'transform': 'translate3d(0,' + (pc * 450).toFixed(5) + 'px,0)', 'opacity': 1.0 }); 
		$('.websites-overview__header').css({ 'transform': 'translate3d(0,' + (pc * 270).toFixed(5) + 'px,0)' }); 
	}

	if (pc > 2.5) {
		$('.websites-difference__headline').css({ 'transform': 'translate3d(0,' + (pc - 2.5 - pc * 200 + 600) + 'px,0)' });
		$('.websites-difference__text').each(function (idx, el) {
			if ($.inViewport(el)) {
				$(el).css('opacity', (0.1 + (top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5));
			}
		});
		$('.websites-difference__block:nth-child(odd) .websites-difference__image').each(function (idx, el) {
			if ($.inViewport(el)) {
				var of = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
				$(el).css({ 'transform': 'translate3d(' + (-20 + of * 15) + 'px,0,0)' });
			}
		});
		$('.websites-difference__block:nth-child(even) .websites-difference__image').each(function (idx, el) {
			if ($.inViewport(el)) {
				var of2 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
				$(el).css('opacity', (-0.1 + (top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5));
				//$(el).css({'transform': `translate3d(0,${15 + (of2 * -15)}px,0)`})
				//$(el).css({'transform': `translate3d(${20 + (of2 * -15)}px,${15 + (of2 * -15)}px,0)`})
			}
		});
	}

	// elements
	if (top > 1100 - windowHeight / 3 && top + windowHeight < wdTop) {
		$('.elements').css({ 'position': 'fixed', 'top': '33vh', 'opacity': 1.0 });
	} else if (top + windowHeight > wdTop) {
		var diff = wdTop - windowHeight + 10 - top;
		$('.elements').css('opacity', 1.0 - diff / -400);
	} else {
		$('.elements').css({ 'position': 'absolute', 'top': '1100px' });
	}
}

	
function websitesWorkParallaxRegister() {}

function websitesWorkParallaxHandler() {
	var pc = top / windowHeight; 
	$('.websites-header__heading').css({ 'transform': 'translate3d(0,' + (pc * -270).toFixed(5) + 'px,0)' });
	$('.websites-body__image.left').each(function (idx, el) {
		//$(el).css({'border': '1px solid green'})
		if ($.inViewport(el)) {
			var of = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (-10 + of * 10) + 'px,0,0)' });
		}
	});
	$('.websites-body__image.right').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of2 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (10 + of2 * -10) + 'px,' + (7 + of2 * -7) + 'px,0)' });
			//$(el).css({'transform': `translate3d(${40 + (of2 * -30)}px,${30 + (of2 * -30)}px,0)`})
		}
	});
}	
function careersWorkParallaxRegister() {}

function careersWorkParallaxHandler() {
	wdTop = $('.careers-overview__action').offset().top;
	var pc = top / windowHeight;
	if (pc < 4.0) {
		$('.careers-header__giant-v').css({ 'display': 'block', 'transform': 'translate3d(0,' + (pc * 450).toFixed(5) + 'px,0)', 'opacity': 1.0 }); 
		$('.careers-overview__header').css({ 'transform': 'translate3d(0,' + (pc * 270).toFixed(5) + 'px,0)' }); 
	}
 
	$('.careers-header__heading').css({ 'transform': 'translate3d(0,' + (pc * -270).toFixed(5) + 'px,0)' });
	$('.careers-overview__action.left').each(function (idx, el) {
		//$(el).css({'border': '1px solid green'})
		if ($.inViewport(el)) {
			var of = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (-10 + of * 40) + 'px,0,0)' });
		}
	});
	$('.careers-body__image.left').each(function (idx, el) {
		//$(el).css({'border': '1px solid green'})
		if ($.inViewport(el)) {
			var of = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (-10 + of * 40) + 'px,0,0)' });
		}
	});
	$('.careers-body__image.right').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of2 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (10 + of2 * -40) + 'px,' + (7 + of2 * -7) + 'px,0)' });
			//$(el).css({'transform': `translate3d(${40 + (of2 * -30)}px,${30 + (of2 * -30)}px,0)`})
		}
	});
	$('.careers-body__text.up').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of3 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 4)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(0,' + (10 + of3 * -100) + 'px,0)' }); 
		}
	});
	$('.careers-body__text.down').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of3 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 4)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(0,' + (10 + of3 * -40) + 'px,0)' }); 
		}
	});
	$('.careers-body__image.up').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of3 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 4)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(0,' + (10 + of3 * -100) + 'px,0)' }); 
		}
	});
	$('.careers-body__image.down').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of3 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 4)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(0,' + (10 + of3 * -40) + 'px,0)' }); 
		}
	});
	$('.careers-body__image.left-fast').each(function (idx, el) {
		//$(el).css({'border': '1px solid green'})
		if ($.inViewport(el)) {
			var of = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (-10 + of * 100) + 'px,0,0)' });
		}
	}); 
	$('.careers-body__image.right-fast').each(function (idx, el) {
		//$(el).css({'border': '1px solid red'})
		if ($.inViewport(el)) {
			var of2 = ((top + windowHeight - $(el).offset().top) / (windowHeight / 2)).toFixed(5);
			$(el).css({ 'transform': 'translate3d(' + (10 + of2 * -100) + 'px,' + (7 + of2 * -7) + 'px,0)' });
			//$(el).css({'transform': `translate3d(${40 + (of2 * -30)}px,${30 + (of2 * -30)}px,0)`})
		}
	});
}
	
	
},{"./lib/verge":4}]},{},[5]);
