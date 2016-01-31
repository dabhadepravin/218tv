<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="<?php echo base_path() . path_to_theme(); ?>/favicon.png">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet"
          href="<?php echo base_path() . path_to_theme() ?>/css/app.css?<?php echo variable_get('css_js_query_string', '0') ?>">
    <?php print $styles; ?>
    <?php print $scripts; ?>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-67168629-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body class="<?php print $classes; ?> <?php
if (isset($GLOBALS['body-class'])) {
    echo $GLOBALS['body-class'];
} ?>" <?php print $attributes; ?>>

<!--- facebook sdk -->

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=599028756846382";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- end facebook sdk -->
<div class="w-mtopmenu">
    <div class="mtopmenu">
        <div class="logo">
            <a href="/"><img class="mtoplogo" src="<?php echo base_path() . path_to_theme() ?>/assets/mtoplogo.png" alt=""></a>
        </div>
        <div class="msearch-box">
            <form action="/search/node">
                <input type="text" class="searchtxt" placeholder="ابحث في 218" name="keys">
                <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>


            </form>
        </div>


        <div class="mtwocell">
            <div class="left">

            </div>
            <div class="right">
                <ul>
                    <?php foreach ($menus['nav'] as $index => $item): ?>
                        <?php
                        $url = strtok($_SERVER["REQUEST_URI"], '?');
                        $url_hash = md5(parse_url($url, PHP_URL_PATH));
                        $url_nav = strtok($item['href'], '?');
                        $url_nav_hash = md5(parse_url($url_nav, PHP_URL_PATH));
                        ?>
                        <li><a class="<?php echo $url_hash == $url_nav_hash ? 'active' : '' ?>"
                               href="<?php echo $item['href'] ?>"><?php echo $item['title'] ?></a></li>
                    <?php endforeach ?>

                </ul>

            </div>
        </div>

        <div class="down">

        </div>


    </div>
</div>


<nav class="pushy pushy-right">
    <div style='min-height:750px;height:auto;overflow-y:auto'>
    <ul>
     <div class="msearch-box">
            <form action="/search/node">
                <input type="text" class="searchtxt" placeholder="ابحث في 218" name="keys">
                <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>


            </form>
        </div>
    </ul>
     <ul class="social">
            <li><a href="https://www.facebook.com/218tv" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/218tv" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/u/0/105631431473587138124/posts" target="_blank"><i
                        class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCJaQYZQ8X3wOWtNDT6Wn3Rg" target="_blank"><i
                        class="fa fa-youtube"></i></a></li>
        </ul>
    <ul>
        <?php foreach ($menus['nav'] as $index => $item): ?>
            <?php
            $url = strtok($_SERVER["REQUEST_URI"], '?');
            $url_hash = md5(parse_url($url, PHP_URL_PATH));
            $url_nav = strtok($item['href'], '?');
            $url_nav_hash = md5(parse_url($url_nav, PHP_URL_PATH));
            ?>
            <li><a class="<?php echo $url_hash == $url_nav_hash ? 'active' : '' ?>"
                   href="<?php echo $item['href'] ?>"><?php echo $item['title'] ?></a></li>
        <?php endforeach ?>

    </ul>
        <ul><li style="height:60px;visibility:hidden"></li></ul>
</div>
</nav>

<?php print $page_top; ?>
<div class="w-mnav">
    <div class="mnav">
        <div class="back">
            <a href="/">رجوع</a>
        </div>
        <div class="burger">
            <a class="menu-btn" href="#"><img src="<?php echo base_path() . path_to_theme() ?>/assets/burger.png"
                                              alt=""></a>
        </div>
        <div class="logo">
            <a href="<?php echo base_path() ?>"><img
                    src="<?php echo base_path() . path_to_theme() ?>/assets/logo-mobile.svg" alt=""></a>
        </div>

    </div>
</div>


<div class="w-header">
    <div class="header">
        <div class="logo">
            <a href="<?php echo base_path() ?>"><img src="<?php echo base_path() . path_to_theme() ?>/assets/logo.svg"
                                                     alt=""></a>
        </div>
    </div>
</div>
<div class="w-nav">
    <div class="nav">
        <ul>
            <?php foreach ($menus['nav'] as $index => $item): ?>
                <?php
                $url = strtok($_SERVER["REQUEST_URI"], '?');
                $url_hash = md5(parse_url($url, PHP_URL_PATH));
                $url_nav = strtok($item['href'], '?');
                $url_nav_hash = md5(parse_url($url_nav, PHP_URL_PATH));
                ?>
                <li><a class="<?php echo $url_hash == $url_nav_hash ? 'active' : '' ?>"
                       href="<?php echo $item['href'] ?>"><?php echo $item['title'] ?></a></li>
            <?php endforeach ?>
        </ul>

        <ul class="social">
            <li><a href="https://www.facebook.com/218tv" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/218tv" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/u/0/105631431473587138124/posts" target="_blank"><i
                        class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCJaQYZQ8X3wOWtNDT6Wn3Rg" target="_blank"><i
                        class="fa fa-youtube"></i></a></li>
        </ul>

        <div class="search-box">
            <form action="/search/node">
                <input type="text" class="searchtxt" placeholder="ابحث في 218" name="keys">
                <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>


            </form>
        </div>
    </div>
</div>

<div class="w-weather-newsletter">
    <div class="weather-newsletter">
        <div class="form-newsletter">
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
                <form action="//ana.us11.list-manage.com/subscribe/post?u=dc3c27747693723b928932a2a&amp;id=37251ca25b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">

                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="أدخل بريدك الالكتروني" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_dc3c27747693723b928932a2a_37251ca25b" tabindex="-1" value=""></div>
                        <div class="submit_form_btn"><input type="submit" value="اشترك" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>
            <!--End mc_embed_signup-->
        </div>
        <ul>
            <li>
                <div class="icon ny">
                    <img src="" class="weather-icon-ny" alt="Weather Icon"/>
                </div>
                <div class="info">
                    <div>سبها</div>
                    <div class="weather-temperature-ny"></div>
                </div>
            </li>
            <li>
                <div class="icon ca">
                    <img src="" class="weather-icon-ca" alt="Weather Icon"/>
                </div>
                <div class="info">
                    <div>بنغازي</div>
                    <div class="weather-temperature-ca"></div>
                </div>
            </li>
            <li>
                <div class="icon tr">
                    <img src="" class="weather-icon-tr" alt="Weather Icon"/>
                </div>
                <div class="info">
                    <div>طرابلس</div>
                    <div class="weather-temperature-tr"></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="site-overlay"></div>
<div id="container">
    <?php print $page; ?>
</div>
<div class="w-footer">
    <div class="footer">
        <div class="flogo">
            <a href="<?php echo base_path() ?>"><img
                    src="<?php echo base_path() . path_to_theme() ?>/assets/footer-logo.png" alt=""></a>
        </div>

        <ul class="nav">
            <?php foreach ($menus['footer'] as $item): ?>
                <li><a href="<?php echo $item['href'] ?>"><?php echo $item['title'] ?></a></li>
            <?php endforeach ?>
        </ul>

        <ul class="social">
            <li><a href="https://www.facebook.com/218tv" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.twitter.com/218tv" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://plus.google.com/u/0/105631431473587138124/posts" target="_blank"><i
                        class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCJaQYZQ8X3wOWtNDT6Wn3Rg" target="_blank"><i
                        class="fa fa-youtube"></i></a></li>
        </ul>

    </div>
</div>


<div class="mshrink hide">
    <a class="" href="#"> <?php echo $mlabels[0] ?></a>
</div>


<div class="mrelated">
    <a class="" href="#"> <?php echo $mlabels[1] ?></a>
</div>

<ul class="msocial">
    <li>
        <a href="#">
            <div class="mface msi"></div>
        </a>
    </li>
    <li>
        <a href="#">
            <div class="mtw msi">
            </div>
        </a>
    </li>

    <li>
        <a href="#">
            <div class="mgoogle msi">

            </div>
        </a>
    </li>
</ul>


<?php print $page_bottom; ?>
  
<script type="text/javascript"
        src="<?php echo base_path() . path_to_theme() ?>/js/app.js?<?php echo variable_get('css_js_query_string', '0') ?>"></script>



<script>

    $('.mrelated a').on('click', function () {
        $('.first').addClass('first-open');
        $('.second').addClass('hide');
        $('.msocial').addClass('hide');

        $(this).parent().addClass('hide');
        $('.mshrink').removeClass(('hide'));

        //front hero
        $('.w-hero').addClass('hide');
        $('.main').addClass('secondary')

    });

    $('.mshrink a').on('click', function () {
        $('.msocial').removeClass('hide');
        $('.first').removeClass('first-open');
        $('.second').removeClass('hide');

        $(this).parent().addClass('hide');
        $('.mrelated').removeClass(('hide'));
        $('.w-hero').removeClass('hide');
        $('.main').removeClass('secondary')


    });


</script>

<?php if($is_front) {  ?>
    <script>
        var isMobile = false; //initiate as false
        $(function(){
            // device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
            if(isMobile == true){
             $("div.two-items article").each(function(){
                if($(this).hasClass('with-img')){
                    $(this).removeClass('with-img');
                    $(this).find("a.with-img-text").hide();
                    $(this).find("h3").attr("style","margin: 0.8125em 0;height: 2.25em;font-size: 1.075em;line-height: 1.5em");
                    $(this).find("h3").show();
                    $(this).find("h3 a").attr("style","bottom:0px;padding:0px;color:#222;text-shadow:none;");
                }
             });
            }
            $('.w-mnav').addClass('hide');
            var waypoint = new Waypoint({
                element: $('.hero'),
                handler: function(direction) {
                    $('.w-mnav').removeClass('trans');
                }
            });
            $('.w-mtopmenu').remove();
                $(this).scrollTop(0);
                $('.w-mnav').removeClass('hide');
                
        });


        var firstrun = true;
        $(window).on('scroll',function(e){
            console.log($(this).scrollTop());
            console.log(firstrun);
            if ($(this).scrollTop() > 648 && firstrun  ) {

                $('.w-mtopmenu').remove();
                //$(this).scrollTop(0);
                $('.w-mnav').addClass('trans');
                //firstrun = false;

                //lol this is to make sure we reached point 1 because scrollTaop changes after removing the first block
            };
        });




    </script>
<?php } ?>

</body>
</html>