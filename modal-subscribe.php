<style>
    /* General styles for the modal */

    /*
    Styles for the html/body for special modal where we want 3d effects
    Note that we need a container wrapping all content on the page for the
    perspective effects (not including the modals and the overlay).
    */
    .md-perspective,
    .md-perspective body {
        height: 100%;
        overflow: hidden;
    }

    .md-perspective body  {
        background: #222;
        -webkit-perspective: 600px;
        -moz-perspective: 600px;
        perspective: 600px;
    }

    .container {
        background: #e74c3c;
        min-height: 100%;
    }

    .md-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 50%;
        max-width: 630px;
        min-width: 320px;
        height: auto;
        z-index: 2000;
        visibility: hidden;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
    }

    .md-show {
        visibility: visible;
    }

    .md-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        visibility: hidden;
        top: 0;
        left: 0;
        z-index: 1000;
        opacity: 0;
        background: rgba(0, 99, 65, 0.64);
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    .md-show ~ .md-overlay {
        opacity: 1;
        visibility: visible;
    }

    /* Content styles */
    .md-content {
        color: #fff;
        background: #ddd;
        position: relative;
        border-radius: 3px;
        margin: 0 auto;
    }

    .md-content h3 {
        margin: 0;
        padding: 0.4em;
        text-align: center;
        font-size: 2.4em;
        font-weight: 300;
        opacity: 0.8;
        background: rgba(0,0,0,0.1);
        border-radius: 3px 3px 0 0;
    }

    #modal_logo {
       display: block;
       position: relative;
       width: 120px;
       margin: 0 auto;
   }

   input[name="emailSub"] {
       width: 90%;
       height: 51px;
       color: #006341;
       display: block;
       margin: 6px auto;
       font-size: 18px;
       text-transform: uppercase;
       font-family: 'EurostileLTPro-BoldEx2';
   }

    input[name="submit"] {
        display: block;
        margin: 0 auto;
        font-size: 1em;
        background-color: #006341;
        color: #fff;
        border: none;
        cursor: pointer;
        text-transform: uppercase;
        font-family: 'EurostileLTPro-BoldEx2';
    }

    input[name="emailSub"]::-webkit-input-placeholder { /* Chrome/Opera/Safari */
        font-size: 18px;
        text-transform: uppercase;
        font-family: 'EurostileLTPro-BoldEx2';
    }

    div#submitMessage {
        display: block;
        width: 399px;
        margin: 0 auto;
        text-align: center;
        font-family: 'EurostileLTPro-BoldEx2';
        color: #006341;
    }

   .md-content > div {
       padding: 12px;
   }

   .md-content > form {
       margin: 6px auto;
   }

    .md-content button {
        display: block;
        margin: 0 84%;
        font-size: 1.8em;
        background-color: #006341;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    /* Individual modal styles with animations/transitions */


    /* Effect 7:  slide and stick to top */
    .md-effect-7{
        top: 0;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .md-effect-7 .md-content {
        -webkit-transform: translateY(-200%);
        -moz-transform: translateY(-200%);
        -ms-transform: translateY(-200%);
        transform: translateY(-200%);
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        transition: all .3s;
        opacity: 0;
    }

    .md-show.md-effect-7 .md-content {
        -webkit-transform: translateY(0%);
        -moz-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
        border-radius: 0 0 3px 3px;
        opacity: 1;
    }

    @media screen and (max-width: 32em) {
        body { font-size: 75%; }
    }
</style>






		<div class="md-modal md-effect-7" id="modal-7">
			<div class="md-content">
                <button class="md-close">X</button>
				<h3>SUBSCRIBE</h3>
				<div>
                    <span id="modal_logo"><?php get_template_part('OWLSAsylumSignature'); ?></span>
                    <div id="mod_div">


                            <input type="email" id="emailSub" name="emailSub" placeholder="Example@email.com" required><br >
                            <input type="submit" name="submit" value="Submit" onclick="subscr()">

                    </div>
				</div>
			</div>
		</div><!--this one-->


<script>
function subscr(){
    var xhr = new XMLHttpRequest();

    var url = "<?php echo get_template_directory_uri() ?>/email-subscribe.php";
    var emailSub = document.getElementById("emailSub").value;
    var data = "emailSub="+emailSub;
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            var return_data = xhr.responseText;
            document.getElementById("mod_div").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    xhr.send(data); // Actually execute the request
    document.getElementById("mod_div").innerHTML = "processing...";
}

</script>




		<div class="md-overlay"></div><!-- the overlay element -->

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script>
            /*!
             * classie - class helper functions
             * from bonzo https://github.com/ded/bonzo
             *
             * classie.has( elem, 'my-class' ) -> true/false
             * classie.add( elem, 'my-new-class' )
             * classie.remove( elem, 'my-unwanted-class' )
             * classie.toggle( elem, 'my-class' )
             */

            /*jshint browser: true, strict: true, undef: true */
            /*global define: false */

            ( function( window ) {

                'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

                function classReg( className ) {
                    return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
                }

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
                var hasClass, addClass, removeClass;

                if ( 'classList' in document.documentElement ) {
                    hasClass = function( elem, c ) {
                        return elem.classList.contains( c );
                    };
                    addClass = function( elem, c ) {
                        elem.classList.add( c );
                    };
                    removeClass = function( elem, c ) {
                        elem.classList.remove( c );
                    };
                }
                else {
                    hasClass = function( elem, c ) {
                        return classReg( c ).test( elem.className );
                    };
                    addClass = function( elem, c ) {
                        if ( !hasClass( elem, c ) ) {
                            elem.className = elem.className + ' ' + c;
                        }
                    };
                    removeClass = function( elem, c ) {
                        elem.className = elem.className.replace( classReg( c ), ' ' );
                    };
                }

                function toggleClass( elem, c ) {
                    var fn = hasClass( elem, c ) ? removeClass : addClass;
                    fn( elem, c );
                }

                var classie = {
                    // full names
                    hasClass: hasClass,
                    addClass: addClass,
                    removeClass: removeClass,
                    toggleClass: toggleClass,
                    // short names
                    has: hasClass,
                    add: addClass,
                    remove: removeClass,
                    toggle: toggleClass
                };

// transport
                if ( typeof define === 'function' && define.amd ) {
                    // AMD
                    define( classie );
                } else {
                    // browser global
                    window.classie = classie;
                }

            })( window );

        </script>
		<script>
            /**
             * modalEffects.js v1.0.0
             * http://www.codrops.com
             *
             * Licensed under the MIT license.
             * http://www.opensource.org/licenses/mit-license.php
             *
             * Copyright 2013, Codrops
             * http://www.codrops.com
             */
            var ModalEffects = (function() {

                function init() {

                    var overlay = document.querySelector( '.md-overlay' );

                    [].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

                        var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
                            close = modal.querySelector( '.md-close' );

                        function removeModal( hasPerspective ) {
                            classie.remove( modal, 'md-show' );

                            if( hasPerspective ) {
                                classie.remove( document.documentElement, 'md-perspective' );
                            }
                        }

                        function removeModalHandler() {
                            removeModal( classie.has( el, 'md-setperspective' ) );
                        }

                        el.addEventListener( 'click', function( ev ) {
                            classie.add( modal, 'md-show' );
                            overlay.removeEventListener( 'click', removeModalHandler );
                            overlay.addEventListener( 'click', removeModalHandler );

                            if( classie.has( el, 'md-setperspective' ) ) {
                                setTimeout( function() {
                                    classie.add( document.documentElement, 'md-perspective' );
                                }, 25 );
                            }
                        });

                        close.addEventListener( 'click', function( ev ) {
                            ev.stopPropagation();
                            removeModalHandler();
                        });

                    } );

                }

                init();

            })();
        </script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>

