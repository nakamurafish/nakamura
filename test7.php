<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="//m.addthis.com/live/red_lojson/300lo.json?si=5a6eaccc5239a635&amp;bkl=0&amp;bl=1&amp;pdt=75&amp;sid=5a6eaccc5239a635&amp;pub=jsdoit&amp;rev=v8.1.5-wp&amp;ln=ja&amp;pc=men&amp;cb=0&amp;ab=-&amp;dp=jsdo.it&amp;dr=www.jstarted.com&amp;fp=Yoichi.Kobayashi%2FtySA&amp;fr=article%2F000211.shtml&amp;of=0&amp;pd=0&amp;irt=0&amp;vcl=0&amp;md=0&amp;ct=1&amp;tct=0&amp;abt=0&amp;cdn=0&amp;pi=1&amp;rb=4&amp;gen=100&amp;chr=UTF-8&amp;mk=judo.it%2CJavaScript%2CHTML5%2CCSS%2Cjsdoit&amp;colc=1517202636275&amp;jsl=8353&amp;uvs=5a6eaccc772d4a4a000&amp;skipb=1&amp;callback=addthis.cbs.oln9_52768472591281010"></script>
    <script type="text/javascript" src="//m.addthisedge.com/live/boost/jsdoit/_ate.track.config_resp"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">

    <title>クリックで遷移するだけのスライドショー - jsdo.it - Share JavaScript, HTML5 and CSS</title>

    <meta property="qc:admins" content="21506643427614">
    <meta property="wb:webmaster" content="5c8153403c54c98f">
    <meta name="description" content="クリックで遷移するだけのスライドショー by Yoichi.Kobayashi @ jsdo.it - share JavaScript, HTML5 and CSS - jsdo.itはブラウザでJavaScript,HTML5,CSSを書いて共有するサイト。他のコードをコピーして編集できます。JavaScript,HTML5,CSSに関する質問&amp;回答もありますよ">

    <meta name="keywords" content="judo.it,JavaScript,HTML5,CSS,jsdoit">

    <meta name="author" content="jsdoit Inc.">
    <meta name="license" content="©jsdoit Inc.">

    <meta property="og:site_name" content="jsdo.it">
    <meta property="fb:page_id" content="138382942860000">
    <meta property="fb:app_id" content="104748116268345">
    <meta property="og:locale" content="ja_JP">

    <meta property="og:type" content="article">

    <meta property="og:url" content="http://jsdo.it/Yoichi.Kobayashi/tySA">

    <meta property="og:description" content="クリックで遷移するだけのスライドショー by Yoichi.Kobayashi @ jsdo.it - ">
    <meta property="twitter:description" content="クリックで遷移するだけのスライドショー by Yoichi.Kobayashi @ jsdo.it - ">




    <meta property="og:image" content="http://jsdo-static-contents.s3.amazonaws.com/images/capture/t/y/S/tySA.jpg?t=1359448677">
    <meta property="og:image:width" content="465">
    <meta property="og:image:height" content="465">

    <meta name="twitter:site" content="@jsdo_it">
    <meta name="twitter:card" content="summary">




    <meta property="og:title" content="クリックで遷移するだけのスライドショー">
    <meta name="twitter:title" content="クリックで遷移するだけのスライドショー">


    <link rel="canonical" href="http://jsdo.it/Yoichi.Kobayashi/tySA">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/img/favicon.ico">
    <link rel="start" href="/" title="home">
    <link rel="stylesheet" type="text/css" media="screen,print" href="/css/common.css?1468627570">

    <link rel="stylesheet" type="text/css" media="screen,print" href="/css/fullscreen.css?1441025678">

    <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.ja.IHlvMZKu2Fw.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQE/rs=AGLTcCPIN3ckN-gG0fs5bZugKuUFVCD1qg/cb=gapi.loaded_0"
        async=""></script>
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript" async="" src="http://platform.stumbleupon.com/1/widgets.js"></script>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
        .at-icon {
            fill: #fff;
            border: 0
        }

        .at-icon-wrapper {
            display: inline-block;
            overflow: hidden
        }

        a .at-icon-wrapper {
            cursor: pointer
        }

        .at-rounded,
        .at-rounded-element .at-icon-wrapper {
            border-radius: 12%
        }

        .at-circular,
        .at-circular-element .at-icon-wrapper {
            border-radius: 50%
        }

        .addthis_32x32_style .at-icon {
            width: 2pc;
            height: 2pc
        }

        .addthis_24x24_style .at-icon {
            width: 24px;
            height: 24px
        }

        .addthis_20x20_style .at-icon {
            width: 20px;
            height: 20px
        }

        .addthis_16x16_style .at-icon {
            width: 1pc;
            height: 1pc
        }

        #at16lb {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1001;
            background-color: #000;
            opacity: .001
        }

        #at_complete,
        #at_error,
        #at_share,
        #at_success {
            position: static!important
        }

        .at15dn {
            display: none
        }

        #at15s,
        #at16p,
        #at16p form input,
        #at16p label,
        #at16p textarea,
        #at_share .at_item {
            font-family: arial, helvetica, tahoma, verdana, sans-serif!important;
            font-size: 9pt!important;
            outline-style: none;
            outline-width: 0;
            line-height: 1em
        }

        * html #at15s.mmborder {
            position: absolute!important
        }

        #at15s.mmborder {
            position: fixed!important;
            width: 250px!important
        }

        #at15s {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABtJREFUeNpiZGBgaGAgAjAxEAlGFVJHIUCAAQDcngCUgqGMqwAAAABJRU5ErkJggg==);
            float: none;
            line-height: 1em;
            margin: 0;
            overflow: visible;
            padding: 5px;
            text-align: left;
            position: absolute
        }

        #at15s a,
        #at15s span {
            outline: 0;
            direction: ltr;
            text-transform: none
        }

        #at15s .at-label {
            margin-left: 5px
        }

        #at15s .at-icon-wrapper {
            width: 1pc;
            height: 1pc;
            vertical-align: middle
        }

        #at15s .at-icon {
            width: 1pc;
            height: 1pc
        }

        .at4-icon {
            display: inline-block;
            background-repeat: no-repeat;
            background-position: top left;
            margin: 0;
            overflow: hidden;
            cursor: pointer
        }

        .addthis_16x16_style .at4-icon,
        .addthis_default_style .at4-icon,
        .at4-icon,
        .at-16x16 {
            width: 1pc;
            height: 1pc;
            line-height: 1pc;
            background-size: 1pc!important
        }

        .addthis_32x32_style .at4-icon,
        .at-32x32 {
            width: 2pc;
            height: 2pc;
            line-height: 2pc;
            background-size: 2pc!important
        }

        .addthis_24x24_style .at4-icon,
        .at-24x24 {
            width: 24px;
            height: 24px;
            line-height: 24px;
            background-size: 24px!important
        }

        .addthis_20x20_style .at4-icon,
        .at-20x20 {
            width: 20px;
            height: 20px;
            line-height: 20px;
            background-size: 20px!important
        }

        .at4-icon.circular,
        .circular .at4-icon,
        .circular.aticon {
            border-radius: 50%
        }

        .at4-icon.rounded,
        .rounded .at4-icon {
            border-radius: 4px
        }

        .at4-icon-left {
            float: left
        }

        #at15s .at4-icon {
            text-indent: 20px;
            padding: 0;
            overflow: visible;
            white-space: nowrap;
            background-size: 1pc;
            width: 1pc;
            height: 1pc;
            background-position: top left;
            display: inline-block;
            line-height: 1pc
        }

        .addthis_vertical_style .at4-icon,
        .at4-follow-container .at4-icon {
            margin-right: 5px
        }

        html>body #at15s {
            width: 250px!important
        }

        #at15s.atm {
            background: none!important;
            padding: 0!important;
            width: 10pc!important
        }

        #at15s_inner {
            background: #fff;
            border: 1px solid #fff;
            margin: 0
        }

        #at15s_head {
            position: relative;
            background: #f2f2f2;
            padding: 4px;
            cursor: default;
            border-bottom: 1px solid #e5e5e5
        }

        .at15s_head_success {
            background: #cafd99!important;
            border-bottom: 1px solid #a9d582!important
        }

        .at15s_head_success a,
        .at15s_head_success span {
            color: #000!important;
            text-decoration: none
        }

        #at15s_brand,
        #at15sptx,
        #at16_brand {
            position: absolute
        }

        #at15s_brand {
            top: 4px;
            right: 4px
        }

        .at15s_brandx {
            right: 20px!important
        }

        a#at15sptx {
            top: 4px;
            right: 4px;
            text-decoration: none;
            color: #4c4c4c;
            font-weight: 700
        }

        #at15sptx:hover {
            text-decoration: underline
        }

        #at16_brand {
            top: 5px;
            right: 30px;
            cursor: default
        }

        #at_hover {
            padding: 4px
        }

        #at_hover .at_item,
        #at_share .at_item {
            background: #fff!important;
            float: left!important;
            color: #4c4c4c!important
        }

        #at_share .at_item .at-icon-wrapper {
            margin-right: 5px
        }

        #at_hover .at_bold {
            font-weight: 700;
            color: #000!important
        }

        #at_hover .at_item {
            width: 7pc!important;
            padding: 2px 3px!important;
            margin: 1px;
            text-decoration: none!important
        }

        #at_hover .at_item.athov,
        #at_hover .at_item:focus,
        #at_hover .at_item:hover {
            margin: 0!important
        }

        #at_hover .at_item.athov,
        #at_hover .at_item:focus,
        #at_hover .at_item:hover,
        #at_share .at_item.athov,
        #at_share .at_item:hover {
            background: #f2f2f2!important;
            border: 1px solid #e5e5e5;
            color: #000!important;
            text-decoration: none
        }

        .ipad #at_hover .at_item:focus {
            background: #fff!important;
            border: 1px solid #fff
        }

        .at15t {
            display: block!important;
            height: 1pc!important;
            line-height: 1pc!important;
            padding-left: 20px!important;
            background-position: 0 0;
            text-align: left
        }

        .addthis_button,
        .at15t {
            cursor: pointer
        }

        .addthis_toolbox a.at300b,
        .addthis_toolbox a.at300m {
            width: auto
        }

        .addthis_toolbox a {
            margin-bottom: 5px;
            line-height: initial
        }

        .addthis_toolbox.addthis_vertical_style {
            width: 200px
        }

        .addthis_button_facebook_like .fb_iframe_widget {
            line-height: 100%
        }

        .addthis_button_facebook_like iframe.fb_iframe_widget_lift {
            max-width: none
        }

        .addthis_toolbox a.addthis_button_counter,
        .addthis_toolbox a.addthis_button_facebook_like,
        .addthis_toolbox a.addthis_button_facebook_send,
        .addthis_toolbox a.addthis_button_facebook_share,
        .addthis_toolbox a.addthis_button_foursquare,
        .addthis_toolbox a.addthis_button_google_plusone,
        .addthis_toolbox a.addthis_button_linkedin_counter,
        .addthis_toolbox a.addthis_button_pinterest_pinit,
        .addthis_toolbox a.addthis_button_stumbleupon_badge,
        .addthis_toolbox a.addthis_button_tweet {
            display: inline-block
        }

        .at-share-tbx-element .google_plusone_iframe_widget>span>div {
            vertical-align: top!important
        }

        .addthis_toolbox span.addthis_follow_label {
            display: none
        }

        .addthis_toolbox.addthis_vertical_style span.addthis_follow_label {
            display: block;
            white-space: nowrap
        }

        .addthis_toolbox.addthis_vertical_style a {
            display: block
        }

        .addthis_toolbox.addthis_vertical_style.addthis_32x32_style a {
            line-height: 2pc;
            height: 2pc
        }

        .addthis_toolbox.addthis_vertical_style .at300bs {
            margin-right: 4px;
            float: left
        }

        .addthis_toolbox.addthis_20x20_style span {
            line-height: 20px
        }

        .addthis_toolbox.addthis_32x32_style span {
            line-height: 2pc
        }

        .addthis_toolbox.addthis_pill_combo_style .addthis_button_compact .at15t_compact,
        .addthis_toolbox.addthis_pill_combo_style a {
            float: left
        }

        .addthis_toolbox.addthis_pill_combo_style a.addthis_button_tweet {
            margin-top: -2px
        }

        .addthis_toolbox.addthis_pill_combo_style .addthis_button_compact .at15t_compact {
            margin-right: 4px
        }

        .addthis_default_style .addthis_separator {
            margin: 0 5px;
            display: inline
        }

        div.atclear {
            clear: both
        }

        .addthis_default_style .addthis_separator,
        .addthis_default_style .at4-icon,
        .addthis_default_style .at300b,
        .addthis_default_style .at300bo,
        .addthis_default_style .at300bs,
        .addthis_default_style .at300m {
            float: left
        }

        .at300b img,
        .at300bo img {
            border: 0
        }

        a.at300b .at4-icon,
        a.at300m .at4-icon {
            display: block
        }

        .addthis_default_style .at300b,
        .addthis_default_style .at300bo,
        .addthis_default_style .at300m {
            padding: 0 2px
        }

        .at300b,
        .at300bo,
        .at300bs,
        .at300m {
            cursor: pointer
        }

        .addthis_button_facebook_like.at300b:hover,
        .addthis_button_facebook_like.at300bs:hover,
        .addthis_button_facebook_send.at300b:hover,
        .addthis_button_facebook_send.at300bs:hover {
            opacity: 1
        }

        .addthis_20x20_style .at15t,
        .addthis_20x20_style .at300bs {
            overflow: hidden;
            display: block;
            height: 20px!important;
            width: 20px!important;
            line-height: 20px!important
        }

        .addthis_32x32_style .at15t,
        .addthis_32x32_style .at300bs {
            overflow: hidden;
            display: block;
            height: 2pc!important;
            width: 2pc!important;
            line-height: 2pc!important
        }

        .at300bs {
            overflow: hidden;
            display: block;
            background-position: 0 0;
            height: 1pc;
            width: 1pc;
            line-height: 1pc!important
        }

        .addthis_default_style .at15t_compact,
        .addthis_default_style .at15t_expanded {
            margin-right: 4px
        }

        #at_share .at_item {
            width: 123px!important;
            padding: 4px;
            margin-right: 2px;
            border: 1px solid #fff
        }

        #at16p {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABtJREFUeNpiZGBgaGAgAjAxEAlGFVJHIUCAAQDcngCUgqGMqwAAAABJRU5ErkJggg==);
            z-index: 10000001;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            padding: 10px;
            margin: 0 auto;
            margin-top: -185px;
            margin-left: -155px;
            font-family: arial, helvetica, tahoma, verdana, sans-serif;
            font-size: 9pt;
            color: #5e5e5e
        }

        #at_share {
            margin: 0;
            padding: 0
        }

        #at16pt {
            position: relative;
            background: #f2f2f2;
            height: 13px;
            padding: 5px 10px
        }

        #at16pt a,
        #at16pt h4 {
            font-weight: 700
        }

        #at16pt h4 {
            display: inline;
            margin: 0;
            padding: 0;
            font-size: 9pt;
            color: #4c4c4c;
            cursor: default
        }

        #at16pt a {
            position: absolute;
            top: 5px;
            right: 10px;
            color: #4c4c4c;
            text-decoration: none;
            padding: 2px
        }

        #at15sptx:focus,
        #at16pt a:focus {
            outline: thin dotted
        }

        #at15s #at16pf a {
            top: 1px
        }

        #_atssh {
            width: 1px!important;
            height: 1px!important;
            border: 0!important
        }

        .atm {
            width: 10pc!important;
            padding: 0;
            margin: 0;
            line-height: 9pt;
            letter-spacing: normal;
            font-family: arial, helvetica, tahoma, verdana, sans-serif;
            font-size: 9pt;
            color: #444;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABtJREFUeNpiZGBgaGAgAjAxEAlGFVJHIUCAAQDcngCUgqGMqwAAAABJRU5ErkJggg==);
            padding: 4px
        }

        .atm-f {
            text-align: right;
            border-top: 1px solid #ddd;
            padding: 5px 8px
        }

        .atm-i {
            background: #fff;
            border: 1px solid #d5d6d6;
            padding: 0;
            margin: 0;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, .15)
        }

        .atm-s {
            margin: 0!important;
            padding: 0!important
        }

        .atm-s a:focus {
            border: transparent;
            outline: 0;
            transition: none
        }

        #at_hover.atm-s a,
        .atm-s a {
            display: block;
            text-decoration: none;
            padding: 4px 10px;
            color: #235dab!important;
            font-weight: 400;
            font-style: normal;
            transition: none
        }

        #at_hover.atm-s .at_bold {
            color: #235dab!important
        }

        #at_hover.atm-s a:hover,
        .atm-s a:hover {
            background: #2095f0;
            text-decoration: none;
            color: #fff!important
        }

        #at_hover.atm-s .at_bold {
            font-weight: 700
        }

        #at_hover.atm-s a:hover .at_bold {
            color: #fff!important
        }

        .atm-s a .at-label {
            vertical-align: middle;
            margin-left: 5px;
            direction: ltr
        }

        .at_PinItButton {
            display: block;
            width: 40px;
            height: 20px;
            padding: 0;
            margin: 0;
            background-image: url(//s7.addthis.com/static/t00/pinit00.png);
            background-repeat: no-repeat
        }

        .at_PinItButton:hover {
            background-position: 0 -20px
        }

        .addthis_toolbox .addthis_button_pinterest_pinit {
            position: relative
        }

        .at-share-tbx-element .fb_iframe_widget span {
            vertical-align: baseline!important
        }

        #at16pf {
            height: auto;
            text-align: right;
            padding: 4px 8px
        }

        .at-privacy-info {
            position: absolute;
            left: 7px;
            bottom: 7px;
            cursor: pointer;
            text-decoration: none;
            font-family: helvetica, arial, sans-serif;
            font-size: 10px;
            line-height: 9pt;
            letter-spacing: .2px;
            color: #666
        }

        .at-privacy-info:hover {
            color: #000
        }

        .body .wsb-social-share .wsb-social-share-button-vert {
            padding-top: 0;
            padding-bottom: 0
        }

        .body .wsb-social-share.addthis_counter_style .addthis_button_tweet.wsb-social-share-button {
            padding-top: 40px
        }

        .body .wsb-social-share.addthis_counter_style .addthis_button_google_plusone.wsb-social-share-button {
            padding-top: 0
        }

        .body .wsb-social-share.addthis_counter_style .addthis_button_facebook_like.wsb-social-share-button {
            padding-top: 21px
        }

        @media print {
            #at4-follow,
            #at4-share,
            #at4-thankyou,
            #at4-whatsnext,
            #at4m-mobile,
            #at15s,
            .at4,
            .at4-recommended {
                display: none!important
            }
        }

        @media screen and (max-width:400px) {
            .at4win {
                width: 100%
            }
        }

        @media screen and (max-height:700px) and (max-width:400px) {
            .at4-thankyou-inner .at4-recommended-container {
                height: 122px;
                overflow: hidden
            }
            .at4-thankyou-inner .at4-recommended .at4-recommended-item:first-child {
                border-bottom: 1px solid #c5c5c5
            }
        }
    </style>
    <style type="text/css">
        .at-branding-logo {
            font-family: helvetica, arial, sans-serif;
            text-decoration: none;
            font-size: 10px;
            display: inline-block;
            margin: 2px 0;
            letter-spacing: .2px
        }

        .at-branding-logo .at-branding-icon {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAMAAAC67D+PAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAZQTFRF////+GlNUkcc1QAAAB1JREFUeNpiYIQDBjQmAwMmkwEM0JnY1WIxFyDAABGeAFEudiZsAAAAAElFTkSuQmCC")
        }

        .at-branding-logo .at-branding-icon,
        .at-branding-logo .at-privacy-icon {
            display: inline-block;
            height: 10px;
            width: 10px;
            margin-left: 4px;
            margin-right: 3px;
            margin-bottom: -1px;
            background-repeat: no-repeat
        }

        .at-branding-logo .at-privacy-icon {
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAKCAMAAABR24SMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAABhQTFRF8fr9ot/xXcfn2/P5AKva////////AKTWodjhjAAAAAd0Uk5T////////ABpLA0YAAAA6SURBVHjaJMzBDQAwCAJAQaj7b9xifV0kUKJ9ciWxlzWEWI5gMF65KUTv0VKkjVeTerqE/x7+9BVgAEXbAWI8QDcfAAAAAElFTkSuQmCC")
        }

        .at-branding-logo span {
            text-decoration: none
        }

        .at-branding-logo .at-branding-addthis,
        .at-branding-logo .at-branding-powered-by {
            color: #666
        }

        .at-branding-logo .at-branding-addthis:hover {
            color: #333
        }

        .at-cv-with-image .at-branding-addthis,
        .at-cv-with-image .at-branding-addthis:hover {
            color: #fff
        }

        a.at-branding-logo:visited {
            color: initial
        }

        .at-branding-info {
            display: inline-block;
            padding: 0 5px;
            color: #666;
            border: 1px solid #666;
            border-radius: 50%;
            font-size: 10px;
            line-height: 9pt;
            opacity: .7;
            transition: all .3s ease;
            text-decoration: none
        }

        .at-branding-info span {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .at-branding-info:before {
            content: 'i';
            font-family: Times New Roman
        }

        .at-branding-info:hover {
            color: #0780df;
            border-color: #0780df
        }
    </style>
    <script type="text/javascript" charset="utf-8" async="" src="https://platform.twitter.com/js/button.df1da1fef194d8f8f3fd803a219a8177.js"></script>
    <style type="text/css">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        .fb_link img {
            border: none
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }
            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reset .fb_dialog_legacy {
            overflow: visible
        }

        .fb_dialog_advanced {
            padding: 10px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px
        }

        .fb_dialog_content {
            background: #fff;
            color: #333
        }

        .fb_dialog_close_icon {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            top: 5px;
            left: 5px;
            right: auto
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_loader {
            background-color: #f6f7f9;
            border: 1px solid #606060;
            font-size: 24px;
            padding: 20px
        }

        .fb_dialog_top_left,
        .fb_dialog_top_right,
        .fb_dialog_bottom_left,
        .fb_dialog_bottom_right {
            height: 10px;
            width: 10px;
            overflow: hidden;
            position: absolute
        }

        .fb_dialog_top_left {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
            left: -10px;
            top: -10px
        }

        .fb_dialog_top_right {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
            right: -10px;
            top: -10px
        }

        .fb_dialog_bottom_left {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
            bottom: -10px;
            left: -10px
        }

        .fb_dialog_bottom_right {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
            right: -10px;
            bottom: -10px
        }

        .fb_dialog_vert_left,
        .fb_dialog_vert_right,
        .fb_dialog_horiz_top,
        .fb_dialog_horiz_bottom {
            position: absolute;
            background: #525252;
            filter: alpha(opacity=70);
            opacity: .7
        }

        .fb_dialog_vert_left,
        .fb_dialog_vert_right {
            width: 10px;
            height: 100%
        }

        .fb_dialog_vert_left {
            margin-left: -10px
        }

        .fb_dialog_vert_right {
            right: 0;
            margin-right: -10px
        }

        .fb_dialog_horiz_top,
        .fb_dialog_horiz_bottom {
            width: 100%;
            height: 10px
        }

        .fb_dialog_horiz_top {
            margin-top: -10px
        }

        .fb_dialog_horiz_bottom {
            bottom: 0;
            margin-bottom: -10px
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title>span {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            -webkit-transform: none;
            height: 100%;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            left: 0;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            width: auto;
            height: auto;
            min-height: initial;
            min-width: initial;
            background: none
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            color: #fff;
            display: block;
            padding-top: 20px;
            clear: both;
            font-size: 18px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .45);
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            width: 100%;
            min-height: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_content .dialog_header {
            -webkit-box-shadow: white 0 1px 1px -1px inset;
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
            border-bottom: 1px solid;
            border-color: #1d4088;
            color: #fff;
            font: 14px Helvetica, sans-serif;
            font-weight: bold;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            -webkit-font-smoothing: subpixel-antialiased;
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
            border: 1px solid #29487d;
            -webkit-background-clip: padding-box;
            -webkit-border-radius: 3px;
            -webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
            display: inline-block;
            margin-top: 3px;
            max-width: 85px;
            line-height: 18px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            border: none;
            background: none;
            color: #fff;
            font: 12px Helvetica, sans-serif;
            font-weight: bold;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #555;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f6f7f9;
            border: 1px solid #555;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-repeat: no-repeat;
            background-position: 50% 50%;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_hide_iframes iframe {
            position: relative;
            left: -10000px
        }

        .fb_iframe_widget_loader {
            position: relative;
            display: inline-block
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_iframe_widget_loader iframe {
            min-height: 32px;
            z-index: 2;
            zoom: 1
        }

        .fb_iframe_widget_loader .FB_Loader {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;
            height: 32px;
            width: 32px;
            margin-left: -16px;
            position: absolute;
            left: 50%;
            z-index: 4
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        .fb_mobile_overlay_active {
            height: 100%;
            overflow: hidden;
            position: fixed;
            width: 100%
        }

        .fb_shrink_active {
            opacity: 1;
            transform: scale(1, 1);
            transition-duration: 200ms;
            transition-timing-function: ease-out
        }

        .fb_shrink_active:active {
            opacity: .5;
            transform: scale(.75, .75)
        }
    </style>
    <style type="text/css"></style>
</head>

<body class="ja">
    <!--<![endif]-->

    <script type="text/javascript">
        var language = "ja"; // used in l()
    </script>

    <!-- script 'type="text/javascript" src="https://www.google.com/jsapi"></script -->

    <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <!-- adtype =  -->
    <!-- Google DoubleClick 広告のスクリプトページ -->
    <div id="containerView">


        <header id="hdViewSite">
            <h1 id="siteName">
                <a href="/">
                    <img src="/img/code/logo_fullscreen.png" width="182" height="30">
                </a>
            </h1>


            <div class="boxNav">
                <ul id="navGlobal">
                    <li id="navGlovalCode">
                        <a href="http://jsdo.it/Yoichi.Kobayashi/tySA" rel="bookmark" title="クリックで遷移するだけのスライドショー">この作品のコードを見る</a>
                    </li>
                    <li id="navGlovalOtherCodes">
                        <a href="http://jsdo.it/Yoichi.Kobayashi/codes" title="Yoichi.Kobayashi">他の作品を見る</a>
                    </li>
                </ul>
                <dl class="listBoxShare group">
                    <dt class="embed">
                        <span>Embed</span>
                    </dt>
                    <dd class="embed">
                        <div class="widgetDesignBox">
                            <div class="image">
                                <img src="/img/code/widget_code_view.png" id="widgetCodeViewImg" width="114" height="116">
                                <img src="/img/code/widget_design_view.png" id="widgetDesignViewImg" width="114" height="116">
                            </div>
                            <div class="select">
                                <input type="radio" name="widgetView" id="widgetDesignView" checked="checked" data-target="widgetDesignViewImg">
                                <label for="widgetDesignView">デザインビュー</label>
                                <br>
                                <input type="radio" name="widgetView" id="widgetCodeView" data-target="widgetCodeViewImg">
                                <label for="widgetCodeView">コードビュー</label>
                            </div>
                            <textarea readonly="readonly" onclick="javascript:this.select();">&lt;script type="text/javascript" src="http://jsdo.it/blogparts/tySA/js"&gt;&lt;/script&gt;</textarea>
                        </div>
                    </dd>
                    <dd>

                        <iframe class="hatena-bookmark-button-frame" title="このエントリーをはてなブックマークに追加" frameborder="0" scrolling="no" width="50" height="20"
                            src="javascript:false" style="width: 50px; height: 20px;"></iframe>
                        <script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8"
                            async="async"></script>

                    </dd>
                    <dd>
                        <script src="http://www.stumbleupon.com/hostedbadge.php?s=3"></script>
                        <iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://badge.stumbleupon.com/badge/embed/3/?url=http%3A%2F%2Fjsdo.it%2FYoichi.Kobayashi%2FtySA%2Ffullscreen"
                            width="65" height="18" id="iframe-stmblpn-widget-1" style="overflow: hidden; margin: 0px; padding: 0px; border: 0px;"></iframe>
                        <script type="text/javascript">   (function () { var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true; li.src = window.location.protocol + '//platform.stumbleupon.com/1/widgets.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s); })(); </script>
                    </dd>
                    <dd>

                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                            title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.83d5793f6ebbe2046330abda6016ae93.ja.html#dnt=false&amp;id=twitter-widget-0&amp;lang=ja&amp;original_referer=http%3A%2F%2Fjsdo.it%2FYoichi.Kobayashi%2FtySA%2Ffullscreen&amp;related=jsdo_it&amp;size=m&amp;text=%E3%82%AF%E3%83%AA%E3%83%83%E3%82%AF%E3%81%A7%E9%81%B7%E7%A7%BB%E3%81%99%E3%82%8B%E3%81%A0%E3%81%91%E3%81%AE%E3%82%B9%E3%83%A9%E3%82%A4%E3%83%89%E3%82%B7%E3%83%A7%E3%83%BC%20%23jsdoit&amp;time=1517202636361&amp;type=share&amp;url=http%3A%2F%2Fjsdo.it%2FYoichi.Kobayashi%2FtySA"
                            style="position: static; visibility: visible; width: 75px; height: 20px;"></iframe>
                        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

                    </dd>
                    <dd class="shareFb">
                        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                        <fb:like href="http://jsdo.it/Yoichi.Kobayashi/tySA" layout="button_count" show_faces="false" width="110"
                            class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=http%3A%2F%2Fjsdo.it%2FYoichi.Kobayashi%2FtySA&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=110">
                            <span style="vertical-align: bottom; width: 61px; height: 20px;">
                                <iframe name="f3bea42623c9e94" width="110px" height="1000px" frameborder="0" allowtransparency="true"
                                    allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df4b15b966edefc%26domain%3Djsdo.it%26origin%3Dhttp%253A%252F%252Fjsdo.it%252Ff1db1a3b1b636d8%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fjsdo.it%2FYoichi.Kobayashi%2FtySA&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=110"
                                    style="border: none; visibility: visible; width: 61px; height: 20px;" class=""></iframe>
                            </span>
                        </fb:like>
                    </dd>
                </dl>
                <!-- /.boxNav -->
            </div>
            <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=jsdoit"></script>
            <script type="text/javascript">
                var addthis_share = {
                    templates: { twitter: "see☞ クリックで遷移するだけのスライドショー http://jsdo.it/Yoichi.Kobayashi/tySA #jsdoit" }
                }
            </script>


            <div id="fullscreen_adArea" class="btnT">
            </div>


            <p id="btnClose">
                <a href="#" class="btnT btnMain" onclick="javascript:document.getElementById('hdViewSite').style.display='none'; return false;">Close Header</a>
            </p>

        </header>

        <section id="sectGeneratedSite">
            <iframe src="http://jsrun.it/Yoichi.Kobayashi/tySA" width="100%" height="100%" id="generated_site">
                use an iframe compat browser, deer
            </iframe>
            <!-- / #sectGeneratedSite -->
        </section>


        <script type="text/javascript">
            var code_site_uri = "http://jsrun.it/Yoichi.Kobayashi/tySA";
            var is_danger = 0; // 1 or 0
        </script>


        <!-- /#containerView -->
    </div>
    <div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;">
        <iframe id="_atssh725" title="AddThis utility frame" src="http://s7.addthis.com/static/sh.d663e43787b663d5491cf753.html#rand=0.480335145200419&amp;iit=1517202636269&amp;tmr=load%3D1517202636144%26core%3D1517202636183%26main%3D1517202636265%26ifr%3D1517202636273&amp;cb=0&amp;cdn=0&amp;md=0&amp;kw=judo.it%2CJavaScript%2CHTML5%2CCSS%2Cjsdoit&amp;ab=-&amp;dh=jsdo.it&amp;dr=http%3A%2F%2Fwww.jstarted.com%2Farticle%2F000211.shtml&amp;du=http%3A%2F%2Fjsdo.it%2FYoichi.Kobayashi%2FtySA&amp;href=http%3A%2F%2Fjsdo.it%2FYoichi.Kobayashi%2FtySA%2Ffullscreen&amp;dt=%E3%82%AF%E3%83%AA%E3%83%83%E3%82%AF%E3%81%A7%E9%81%B7%E7%A7%BB%E3%81%99%E3%82%8B%E3%81%A0%E3%81%91%E3%81%AE%E3%82%B9%E3%83%A9%E3%82%A4%E3%83%89%E3%82%B7%E3%83%A7%E3%83%BC&amp;dbg=0&amp;cap=tc%3D0%26ab%3D0&amp;inst=1&amp;jsl=8353&amp;prod=undefined&amp;lng=ja&amp;ogt=title%2Cheight%2Cwidth%2Cimage%2Cdescription%2Curl%2Ctype%3Darticle&amp;pc=men&amp;pub=jsdoit&amp;ssl=0&amp;sid=5a6eaccc5239a635&amp;srf=0.01&amp;ver=300&amp;xck=0&amp;xtr=0&amp;og=site_name%3Djsdo.it%26locale%3Dja_JP%26type%3Darticle%26url%3Dhttp%253A%252F%252Fjsdo.it%252FYoichi.Kobayashi%252FtySA%26description%3D%25E3%2582%25AF%25E3%2583%25AA%25E3%2583%2583%25E3%2582%25AF%25E3%2581%25A7%25E9%2581%25B7%25E7%25A7%25BB%25E3%2581%2599%25E3%2582%258B%25E3%2581%25A0%25E3%2581%2591%25E3%2581%25AE%25E3%2582%25B9%25E3%2583%25A9%25E3%2582%25A4%25E3%2583%2589%25E3%2582%25B7%25E3%2583%25A7%25E3%2583%25BC%2520by%2520Yoichi.Kobayashi%2520%2540%2520jsdo.it%2520-%26image%3Dhttp%253A%252F%252Fjsdo-static-contents.s3.amazonaws.com%252Fimages%252Fcapture%252Ft%252Fy%252FS%252FtySA.jpg%253Ft%253D1359448677%26width%3D465%26height%3D465%26title%3D%25E3%2582%25AF%25E3%2583%25AA%25E3%2583%2583%25E3%2582%25AF%25E3%2581%25A7%25E9%2581%25B7%25E7%25A7%25BB%25E3%2581%2599%25E3%2582%258B%25E3%2581%25A0%25E3%2581%2591%25E3%2581%25AE%25E3%2582%25B9%25E3%2583%25A9%25E3%2582%25A4%25E3%2583%2589%25E3%2582%25B7%25E3%2583%25A7%25E3%2583%25BC&amp;csi=undefined&amp;rev=v8.1.5-wp&amp;ct=1&amp;xld=1&amp;xd=1"
            style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe>
    </div>
    <style id="service-icons-0"></style>


    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-15793157-5']);
        _gaq.push(['_setDomainName', '.jsdo.it']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_setAllowHash', false]);
        _gaq.push(['_trackPageLoadTime']);
        _gaq.push(['_trackPageview', '/code/fullscreen' + location.pathname]);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>


    <script type="text/javascript">
        var path = "code/fullscreen";
        var token = "";
    </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

    <script type="text/javascript" src="/js/do.js?1441025678"></script>
    <script type="text/javascript" src="/js/notification.js?1441025678"></script>

    <script type="text/javascript" src="http://apis.google.com/js/plusone.js" gapi_processed="true">
        { lang: 'ja' }
    </script>




    <iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/widget_iframe.83d5793f6ebbe2046330abda6016ae93.html?origin=http%3A%2F%2Fjsdo.it"
        style="display: none;"></iframe>
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div></div>
        </div>
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
                <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                    id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1"
                    src="http://staticxx.facebook.com/connect/xd_arbiter/r/lY4eZXm_YWu.js?version=42#channel=f1db1a3b1b636d8&amp;origin=http%3A%2F%2Fjsdo.it"
                    style="border: none;"></iframe>
                <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true"
                    scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame"
                    tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/lY4eZXm_YWu.js?version=42#channel=f1db1a3b1b636d8&amp;origin=http%3A%2F%2Fjsdo.it"
                    style="border: none;"></iframe>
            </div>
        </div>
    </div>
    <iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;"
        title="Twitter analytics iframe"></iframe>
</body>

</html>