<!DOCTYPE html>
<html>
    
    <head>
        <title>fancyBox - Fancy jQuery Lightbox Alternative | Demonstration</title>
        <meta
        http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- Add jQuery library -->
        <script type="text/javascript" src="fancyapps/lib/jquery-1.7.2.min.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="fancyapps/source/jquery.fancybox.js?v=2.0.6"></script>
        <link rel="stylesheet" type="text/css" href="fancyapps/source/jquery.fancybox.css?v=2.0.6" media="screen" />
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 *  Simple image gallery. Uses default settings
                 */

                $('.fancybox').fancybox();

                /*
                 *  Different effects
                 */

                // Change title type, overlay opening speed and opacity
                $(".fancybox-effects-a").fancybox({
                    helpers: {
                        title: {
                            type: 'outside'
                        },
                        overlay: {
                            speedIn: 500,
                            opacity: 0.95
                        }
                    }
                });

                // Disable opening and closing animations, change title type
                $(".fancybox-effects-b").fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',

                    helpers: {
                        title: {
                            type: 'over'
                        }
                    }
                });

                // Set custom style, close if clicked, change title type and overlay color
                $(".fancybox-effects-c").fancybox({
                    wrapCSS: 'fancybox-custom',
                    closeClick: true,

                    helpers: {
                        title: {
                            type: 'inside'
                        },
                        overlay: {
                            css: {
                                'background-color': '#eee'
                            }
                        }
                    }
                });

                // Remove padding, set opening and closing animations, close if clicked and disable overlay
                $(".fancybox-effects-d").fancybox({
                    padding: 0,

                    openEffect: 'elastic',
                    openSpeed: 150,

                    closeEffect: 'elastic',
                    closeSpeed: 150,

                    closeClick: true,

                    helpers: {
                        overlay: null
                    }
                });

                /*
                 *  Button helper. Disable animations, hide close button, change title type and content
                 */

                $('.fancybox-buttons').fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',

                    prevEffect: 'none',
                    nextEffect: 'none',

                    closeBtn: false,

                    helpers: {
                        title: {
                            type: 'inside'
                        },
                        buttons: {}
                    },

                    afterLoad: function () {
                        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                    }
                });


                /*
                 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
                 */

                $('.fancybox-thumbs').fancybox({
                    prevEffect: 'none',
                    nextEffect: 'none',

                    closeBtn: false,
                    arrows: false,
                    nextClick: true,

                    helpers: {
                        thumbs: {
                            width: 50,
                            height: 50
                        }
                    }
                });

                /*
                 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
                 */
                $('.fancybox-media').attr('rel', 'media-gallery').fancybox({
                    openEffect: 'none',
                    closeEffect: 'none',
                    prevEffect: 'none',
                    nextEffect: 'none',

                    arrows: false,
                    helpers: {
                        media: {},
                        buttons: {}
                    }
                });

                /*
                 *  Open manually
                 */

                $("#fancybox-manual-a").click(function () {
                    $.fancybox.open('1_b.jpg');
                });

                $("#fancybox-manual-b").click(function () {
                    $.fancybox.open({
                        href: 'iframe.html',
                        type: 'iframe',
                        padding: 5
                    });
                });

                $("#fancybox-manual-c").click(function () {
                    $.fancybox.open([{
                        href: '1_b.jpg',
                        title: 'My title'
                    }, {
                        href: '2_b.jpg',
                        title: '2nd title'
                    }, {
                        href: '3_b.jpg'
                    }], {
                        helpers: {
                            thumbs: {
                                width: 75,
                                height: 50
                            }
                        }
                    });
                });


            });
        </script>
        <style type="text/css">
            .fancybox-custom .fancybox-skin {
                box-shadow: 0 0 50px #222;
            }
            .radioLabelWrapper {
                background-color: #F2F2F3;
                border: 1px solid #B0B0B0;
                float: left;
                height: auto;
                margin: 0px 10px 0px 0px;
                height: 28px;
                width: auto;
                display: inline;
                color: #58585A;
                padding: 0px 5px 0 3px;
            }
            .radioInputWrapper, .checkboxInputWrapper {
                float: left;
                width: 31px;
                height: 28px;
                border: 1px solid #B0B0B0;
                border-width: 1px 0 1px 1px;
        </style>
    </head>
    
    <body>
        <div class="part">
            <a class="fancybox" href="partnerpop.php#inline1"><h2 style="color:#9F92C7;"><p align="center">JOIN OUR PARTNERSHIP NETWORK</p></h2></a>
        </div>
        <div id="inline1" style="width:400px; display: none;">
            <iframe src="Registration/register.php" height="440" width="95%" scrolling="auto"></iframe>
        </div>
    </body>

</html>