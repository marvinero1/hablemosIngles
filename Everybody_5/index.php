﻿<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<!--hppage status="protected"-->
<html xmlns="http://www.w3.org/1999/xhtml" version="XHTML+RDFa 1.0" xmlns:og="http://ogp.me/ns#" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <SCRIPT LANGUAGE="JavaScript">
        document.write(unescape(
            "%3C%53%43%52%49%50%54%20%4C%41%4E%47%55%41%47%45%3D%22%4A%61%76%61%53%63%72%69%70%74%22%3E%3C%21%2D%2D%0D%0A%68%70%5F%6F%6B%3D%74%72%75%65%3B%66%75%6E%63%74%69%6F%6E%20%68%70%5F%64%30%31%28%73%29%7B%69%66%28%21%68%70%5F%6F%6B%29%72%65%74%75%72%6E%3B%76%61%72%20%6F%3D%22%22%2C%61%72%3D%6E%65%77%20%41%72%72%61%79%28%29%2C%6F%73%3D%22%22%2C%69%63%3D%30%3B%66%6F%72%28%69%3D%30%3B%69%3C%73%2E%6C%65%6E%67%74%68%3B%69%2B%2B%29%7B%63%3D%73%2E%63%68%61%72%43%6F%64%65%41%74%28%69%29%3B%69%66%28%63%3C%31%32%38%29%63%3D%63%5E%32%3B%6F%73%2B%3D%53%74%72%69%6E%67%2E%66%72%6F%6D%43%68%61%72%43%6F%64%65%28%63%29%3B%69%66%28%6F%73%2E%6C%65%6E%67%74%68%3E%38%30%29%7B%61%72%5B%69%63%2B%2B%5D%3D%6F%73%3B%6F%73%3D%22%22%7D%7D%6F%3D%61%72%2E%6A%6F%69%6E%28%22%22%29%2B%6F%73%3B%64%6F%63%75%6D%65%6E%74%2E%77%72%69%74%65%28%6F%29%7D%2F%2F%2D%2D%3E%3C%2F%53%43%52%49%50%54%3E"
        )); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">QAPKRV%22NCLEWCEG? HctcQapkrv %3C>#//dwlavkml%22jr]fl*c+ypgvwpl%22dcnqg%7Fdwlavkml%22jr]ao*+ypgvwpl%22dcnqg%7Fdwlavkml%22jr]fg*g+ypgvwpl*g,vcpegv,vceLcog#?lwnn$$g,vcpegv,vceLcog,qgcpaj*%25%5C*KLRWV~VGZVCPGC~@WVVML~QGNGAV~M@HGAV~GO@GF+&%25+#?/3+%7F9dwlavkml%22jr]of*g+yoca?lctkecvmp,wqgpCeglv,klfgzMd*%25Oca%25+#?/39kd*fmawoglv,cnn+ykd*gtglv,`wvvml??0~~*oca$$*gtglv,avpnIg{~~gtglv,ig{Amfg??;3+++ypgvwpl*dcnqg+%7F%7Fgnqgykd*g,ujkaj??1~~*oca$$*g,omfkdkgpq??0~~g,avpnIg{+++ypgvwpl%22dcnqg%7Fgnqg%22kd*g,ujkaj??3+yuklfmu,acrvwpgGtglvq*Gtglv,OMWQGOMTG+9uklfmu,mlomwqgomtg?jr]fl%7F%7F%7Fdwlavkml%22jr]ow*g+ykd*g,ujkaj??3+yuklfmu,pgngcqgGtglvq*Gtglv,OMWQGOMTG+9uklfmu,mlomwqgomtg?lwnn%7F%7Fkd*lctkecvmp,crrLcog,klfgzMd*%25Klvgplgv%22Gzrnmpgp%25+??/3~~*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+#?/3$$fmawoglv,cnn,nglevj#?2++ykd*fmawoglv,cnn+yoca?lctkecvmp,wqgpCeglv,klfgzMd*%25Oca%25+#?/39tgpqkml?rcpqgDnmcv*%252%25)lctkecvmp,wqgpCeglv,qw`qvp*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+)7+.32+9kd*#oca$$tgpqkml%3C6+yfmawoglv,mlamlvgzvoglw?jr]ao%7Fgnqgyfmawoglv,mlomwqgfmul?jr]of9fmawoglv,mlig{fmul?jr]of9%7Ffmawoglv,mlqgngavqvcpv?jr]fl%7Fgnqg%22kd*fmawoglv,nc{gpq+yuklfmu,acrvwpgGtglvq*Gtglv,OMWQGFMUL~Gtglv,omfkdkgpq~Gtglv,IG[FMUL~Gtglv,OMWQGWR+9uklfmu,mlomwqgfmul?jr]of9uklfmu,mlig{fmul?jr]of9uklfmu,mlomwqgwr?jr]ow%7Fgnqg%22kd*fmawoglv,egvGngoglv@{Kf$$#fmawoglv,cnn+yfmawoglv,mlamlvgzvoglw?jr]ao9fmawoglv,mlomwqgfmul?jr]fg%7F%7Fdwlavkml%22jr]lnq*+yuklfmu,qvcvwq?  9pgvwpl%22vpwg%7Fdwlavkml%22jr]lnqn*+yjr]lnq*+9qgvVkogmwv* jr]lnqn*+ .32+%7Fkd*fmawoglv,nc{gpq+fmawoglv,acrvwpgGtglvq*Gtglv,OMWQGMTGP~Gtglv,OMWQGMWV+9fmawoglv,mlomwqgmtgp?jr]lnq9fmawoglv,mlomwqgmwv?jr]lnq9jr]lnqn*+9dwlavkml%22jr]fr3*+ydmp*k?29k>fmawoglv,cnn,nglevj9k))+ykd*fmawoglv,cnnYk_,qv{ng,tkqk`knkv{#? jkffgl +yfmawoglv,cnnYk_,qv{ng,tkqk`knkv{? jkffgl 9fmawoglv,cnnYk_,kf? jr]kf] )fmawoglv,cnnYk_,kf%7F%7F%7F9dwlavkml%22jr]fr0*+ydmp*k?29k>fmawoglv,cnn,nglevj9k))+ykd*fmawoglv,cnnYk_,kf,qw`qvp*2.4+?? jr]kf] +yfmawoglv,cnnYk_,qv{ng,tkqk`knkv{?  9fmawoglv,cnnYk_,kf?fmawoglv,cnnYk_,kf,qw`qvp*4.fmawoglv,cnnYk_,kf,nglevj/4+%7F%7F%7F9uklfmu,ml`gdmpgrpklv?jr]fr39uklfmu,mlcdvgprpklv?jr]fr09fmawoglv,upkvg*%25>qv{ng%22v{rg? vgzv-aqq %22ogfkc? rpklv %3C>#//`mf{yfkqrnc{8lmlg%7F//%3C>-qv{ng%3C%25+9dwlavkml%22jr]lff*+ypgvwpl%22dcnqg%7Ffmawoglv,mlfpceqvcpv?jr]lff9kd*lctkecvmp,crrLcog,klfgzMd*%25Klvgplgv%22Gzrnmpgp%25+#?/3$$*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+??/3~~fmawoglv,cnn,nglevj??2++jr]mi?dcnqg9kd*fmawoglv,cnn+fmawoglv,upkvg*%25>nkli%22pgn?qv{ngqjggv%22v{rg? vgzv-aqq %22jpgd? jr]lwnn,aqq %3C%25+9kd*dpcogq+ykd*vmr,dpcogq,nglevj%3C2+yjr]mi?dcnqg9vmr,nmacvkml?fmawoglv,WPN%7F%7F--//%3C>-QAPKRV%3C"
        )); //
    </SCRIPT>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="monitor-signature" content="monitor:player:html5" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="author" content="Marcelo Ojeda">
    <meta name="Keywords" content="" />
    <meta name="Description" content="Hablemos Ingles" />
    <meta name="Generator" content="Generador OjitO Inc. - ojito.net" />
    <link rel="image_src" href="shot.png" /> 
    <link rel="shortcut icon" href="files/thumb/1.jpg" />
    <link rel="apple-touch-icon" href="files/thumb/1.jpg" /> 


  
    <title>Hablemos Ingles</title>

    <link rel="stylesheet" type="text/css" href="mobile/style/style.css" />
    <link rel="stylesheet" type="text/css" href="mobile/style/player.css" />
    <link rel="stylesheet" type="text/css" href="mobile/style/phoneTemplate.css" />
    <link rel="stylesheet" type="text/css" href="mobile/style/template.css" />
    <script type="text/javascript" src="mobile/javascript/jquery-3.5.1.min.js"></script>

    <script type="text/javascript" src="mobile/javascript/config.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8" />
    <!-- Website Design By: www.happyworm.com -->

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="reproductor/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="reproductor/lib/jquery.min.js"></script>
    <script type="text/javascript" src="reproductor/dist/jplayer/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="reproductor/dist/add-on/jplayer.playlist.min.js"></script>
</head>


<BODY>
    <div class="col-6" style="display: inline-block;">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface">
                    <div class="jp-controls">
                        <button class="jp-previous" role="button" tabindex="0"
                            style="width: 16px !important;padding-right: 23px;">previous</button>
                        <button class="jp-play" role="button" tabindex="0"
                            style="width: 30px !important;padding-right: 35px;">play</button>
                        <button class="jp-next" role="button" tabindex="0"
                            style="width: 16px !important;padding-right: 22px;">next</button>
                        <button class="jp-stop" role="button" tabindex="0"
                            style="width: 16px !important;padding-right: 22px;">stop</button>
                    </div>
                    <!-- <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar"></div>
                    </div>
                </div> -->
                    <!-- <div class="jp-volume-controls">
                    <button class="jp-mute" role="button" tabindex="0" style="width: 7px !important;">mute</button>
                    <button class="jp-volume-max" role="button" tabindex="0" style="width: 7px !important;">max
                        volume</button>
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                </div> -->
                    <!-- <div class="jp-time-holder">
                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                </div> -->
                    <div class="jp-toggles">
                        <!-- <button class="jp-repeat" role="button" tabindex="0" style="width: 9px;">repeat</button> -->
                        <a class="btn btn-primary" type="button" tabindex="0" type="button" data-toggle="collapse"
                            data-target="#collapseExample" aria-expanded="false" style="font-size: 8px;"
                            aria-controls="collapseExample">
                            ▼</a>
                    </div>
                </div>

                <div class="card card-body collapse" id="collapseExample">
                    <div class="jp-playlist">
                        <ul style="background-color: lightblue;
                    width: 190px;
                    height: 445px;
                    overflow: scroll;">
                            <li>&nbsp;</li>
                        </ul>
                    </div>
                </div>
                <div class="jp-no-solution p-1">
                    <span>Update Required</span>
                    To play the media you will need to either update your browser to a recent version or update your
                    <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div>
            </div>
        </div>
    </div>

    <div style="float: right;" class=" ">
        <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
        contraseña</a> -->
        

        <a href="/catalogo.php" class="btn btn-warning" style="color: white;display: inline-block;">Atras</a>
        <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
        contraseña</a> -->
        <a href="/logout.php" class="btn btn-danger" style="color: white;display: inline-block;">Salir</a>
    </div>


    <NOSCRIPT>To display this page you need a browser with JavaScript support.</NOSCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">QAPKRV%22NCLEWCEG? HctcQapkrv %3C>#//dwlavkml%22jr]fa3*+yjr]vc,apgcvgVgzvPcleg*+,gzgaAmooclf* Amr{ +9qgvVkogmwv* jr]fa3*+ .122+%7Fdwlavkml%22jr]fa0*+yankr`mcpfFcvc,angcpFcvc*+9qgvVkogmwv* jr]fa0*+ .122+%7Fkd*lctkecvmp,crrLcog,klfgzMd*%25Klvgplgv%22Gzrnmpgp%25+??/3~~*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+#?/3$$fmawoglv,cnn,nglevj#?2++ykd*fmawoglv,cnn$$lctkecvmp,wqgpCeglv,klfgzMd*%25Mrgpc%25+??/3+ytgpqkml?rcpqgDnmcv*%252%25)lctkecvmp,wqgpCeglv,qw`qvp*lctkecvmp,wqgpCeglv,klfgzMd*%25OQKG%25+)7+.32+9kd*tgpqkml>4+yfmawoglv,upkvg*%25>fkt%22qv{ng? rmqkvkml8c`qmnwvg9ngdv8/3222rz9vmr8/3222rz %3C>klrwv%22v{rg? vgzvcpgc %22lcog? jr]vc %22tcnwg? %22 %22qv{ng? tkqk`knkv{8jkffgl %3C>-fkt%3C%25+9jr]fa3*+%7Fgnqgyjr]fa0*+%7F%7F%7F--//%3C>-QAPKRV%3C"
        )); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">`mf{%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-qgcpaj]amldke,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-`mmiocpi]amldke,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape("")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-NmcfkleHQ,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape("")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">qapkrv%22v{rg? vgzv-hctcqapkrv %22qpa? om`kng-hctcqapkrv-ockl,hq %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape("")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(">qapkrv%22v{rg? vgzv-hctcqapkrv %3C>-qapkrv%3C")); //
    </SCRIPT>
    <SCRIPT LANGUAGE="JavaScript">
        hp_d01(unescape(
            ">lmqapkrv%3C>fkt%3C>jp-%3C>wn%3C>nk%3C>c%22jpgd? dkngq-`cqka/jvon-klfgz,jvon %3CRcegq>-c%3C>-nk%3C>-wn%3C>jp%22qv{ng? ukfvj8:2' -%3C>-fkt%3C>-lmqapkrv%3C>-`mf{%3C"
        )); //
    </SCRIPT>
</BODY>
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {

        new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_1",
            cssSelectorAncestor: "#jp_container_1"
        }, [{
                title: "Unidad 5 Track 1 ",
                mp3: "audios/1.mp3",
                oga: "audios/1.mp3"
            },
            {
                title: "Unidad 5 Track 2 ",
                mp3: "audios/2.mp3",
                oga: "audios/2.mp3"
            },
            {
                title: "Unidad 5 Track 3 ",
                mp3: "audios/3.mp3",
                oga: "audios/3.mp3"
            },
            {
                title: "Unidad 5 Track 4 ",
                mp3: "audios/4.mp3",
                oga: "audios/4.mp3"
            },
            {
                title: "Unidad 5 Track 5 ",
                mp3: "audios/5.mp3",
                oga: "audios/5.mp3"
            },
            {
                title: "Unidad 5 Track 6 ",
                mp3: "audios/6.mp3",
                oga: "audios/6.mp3"
            },
            {
                title: "Unidad 5 Track 7 ",
                mp3: "audios/7.mp3",
                oga: "audios/7.mp3"
            },
            {
                title: "Unidad 5 Track 8 ",
                mp3: "audios/8.mp3",
                oga: "audios/8.mp3"
            },
            {
                title: "Unidad 5 Track 9 ",
                mp3: "audios/9.mp3",
                oga: "audios/9.mp3"
            },
            {
                title: "Unidad 5 Track 10 ",
                mp3: "audios/10.mp3",
                oga: "audios/10.mp3"
            },
            {
                title: "Unidad 5 Track 11 ",
                mp3: "audios/11.mp3",
                oga: "audios/11.mp3"
            },
            {
                title: "Unidad 5 Track 12 ",
                mp3: "audios/12.mp3",
                oga: "audios/12.mp3"
            },
            {
                title: "Unidad 5 Track 13 ",
                mp3: "audios/13.mp3",
                oga: "audios/13.mp3"
            },
            {
                title: "Unidad 5 Track 14 ",
                mp3: "audios/14.mp3",
                oga: "audios/14.mp3"
            },
            {
                title: "Unidad 5 Track 15 ",
                mp3: "audios/15.mp3",
                oga: "audios/15.mp3"
            },
            {
                title: "Unidad 5 Track 16 ",
                mp3: "audios/16.mp3",
                oga: "audios/16.mp3"
            },
            {
                title: "Unidad 5 Track 17 ",
                mp3: "audios/17.mp3",
                oga: "audios/17.mp3"
            },
            {
                title: "Unidad 5 Track 18 ",
                mp3: "audios/18.mp3",
                oga: "audios/18.mp3"
            },
            {
                title: "Unidad 5 Track 19 ",
                mp3: "audios/19.mp3",
                oga: "audios/19.mp3"
            },
            {
                title: "Unidad 5 Track 20 ",
                mp3: "audios/20.mp3",
                oga: "audios/20.mp3"
            },
            {
                title: "Unidad 5 Track 21 ",
                mp3: "audios/21.mp3",
                oga: "audios/21.mp3"
            },
            {
                title: "Unidad 5 Track 22 ",
                mp3: "audios/22.mp3",
                oga: "audios/22.mp3"
            },
            {
                title: "Unidad 5 Track 23 ",
                mp3: "audios/23.mp3",
                oga: "audios/23.mp3"
            },
            {
                title: "Unidad 5 Track 24 ",
                mp3: "audios/24.mp3",
                oga: "audios/24.mp3"
            },
            {
                title: "Unidad 5 Track 25 ",
                mp3: "audios/25.mp3",
                oga: "audios/25.mp3"
            },
            {
                title: "Unidad 5 Track 26 ",
                mp3: "audios/26.mp3",
                oga: "audios/26.mp3"
            },
            {
                title: "Unidad 5 Track 27 ",
                mp3: "audios/27.mp3",
                oga: "audios/27.mp3"
            },
            {
                title: "Unidad 5 Track 28 ",
                mp3: "audios/28.mp3",
                oga: "audios/28.mp3"
            },
            {
                title: "Unidad 5 Track 29 ",
                mp3: "audios/29.mp3",
                oga: "audios/29.mp3"
            },
            {
                title: "Unidad 5 Track 30 ",
                mp3: "audios/30.mp3",
                oga: "audios/30.mp3"
            },
            {
                title: "Unidad 5 Track 31 ",
                mp3: "audios/31.mp3",
                oga: "audios/31.mp3"
            },
            {
                title: "Unidad 5 Track 32 ",
                mp3: "audios/32.mp3",
                oga: "audios/32.mp3"
            },
            {
                title: "Unidad 5 Track 33 ",
                mp3: "audios/33.mp3",
                oga: "audios/33.mp3"
            },
            {
                title: "Unidad 5 Track 34 ",
                mp3: "audios/34.mp3",
                oga: "audios/34.mp3"
            },
            {
                title: "Unidad 5 Track 35 ",
                mp3: "audios/35.mp3",
                oga: "audios/35.mp3"
            },
            {
                title: "Unidad 5 Track 36 ",
                mp3: "audios/36.mp3",
                oga: "audios/36.mp3"
            },
            {
                title: "Unidad 5 Track 37 ",
                mp3: "audios/37.mp3",
                oga: "audios/37.mp3"
            },
            {
                title: "Unidad 5 Track 38 ",
                mp3: "audios/38.mp3",
                oga: "audios/38.mp3"
            },
            {
                title: "Unidad 5 Track 39 ",
                mp3: "audios/39.mp3",
                oga: "audios/39.mp3"
            },
            {
                title: "Unidad 5 Track 40 ",
                mp3: "audios/40.mp3",
                oga: "audios/40.mp3"
            },
            {
                title: "Unidad 5 Track 41 ",
                mp3: "audios/41.mp3",
                oga: "audios/41.mp3"
            },

            {
                title: "Unidad 5 Track 42 ",
                mp3: "audios/42.mp3",
                oga: "audios/42.mp3"
            },

            {
                title: "Unidad 5 Track 43",
                mp3: "audios/43.mp3",
                oga: "audios/43.mp3"
            },

            {
                title: "Unidad 5 Track 44 ",
                mp3: "audios/44.mp3",
                oga: "audios/44.mp3"
            },

            {
                title: "Unidad 5 Track 45 ",
                mp3: "audios/45.mp3",
                oga: "audios/45.mp3"
            },

            {
                title: "Unidad 5 Track 46 ",
                mp3: "audios/46.mp3",
                oga: "audios/46.mp3"
            },

            {
                title: "Unidad 5 Track 47 ",
                mp3: "audios/47.mp3",
                oga: "audios/47.mp3"
            },

            {
                title: "Unidad 5 Track 48 ",
                mp3: "audios/48.mp3",
                oga: "audios/48.mp3"
            },

            {
                title: "Unidad 5 Track 49 ",
                mp3: "audios/49.mp3",
                oga: "audios/49.mp3"
            },

            {
                title: "Unidad 5 Track 50 ",
                mp3: "audios/50.mp3",
                oga: "audios/50.mp3"
            },
            {
                title: "Unidad 5 Track 51 ",
                mp3: "audios/51.mp3",
                oga: "audios/51.mp3"
            },
            {
                title: "Unidad 5 Track 52 ",
                mp3: "audios/52.mp3",
                oga: "audios/52.mp3"
            },
            {
                title: "Unidad 5 Track 53 ",
                mp3: "audios/53.mp3",
                oga: "audios/53.mp3"
            },
            {
                title: "Unidad 5 Track 54 ",
                mp3: "audios/54.mp3",
                oga: "audios/54.mp3"
            },
            {
                title: "Unidad 5 Track 55 ",
                mp3: "audios/55.mp3",
                oga: "audios/55.mp3"
            },
            {
                title: "Unidad 5 Track 56 ",
                mp3: "audios/56.mp3",
                oga: "audios/56.mp3"
            },
            {
                title: "Unidad 5 Track 57 ",
                mp3: "audios/57.mp3",
                oga: "audios/57.mp3"
            },
            {
                title: "Unidad 5 Track 58 ",
                mp3: "audios/58.mp3",
                oga: "audios/58.mp3"
            },
            {
                title: "Unidad 5 Track 59 ",
                mp3: "audios/59.mp3",
                oga: "audios/59.mp3"
            },
            {
                title: "Unidad 5 Track 60 ",
                mp3: "audios/60.mp3",
                oga: "audios/60.mp3"
            },
            {
                title: "Unidad 5 Track 61 ",
                mp3: "audios/61.mp3",
                oga: "audios/61.mp3"
            },
            {
                title: "Unidad 5 Track 62 ",
                mp3: "audios/62.mp3",
                oga: "audios/62.mp3"
            },

            {
                title: "Unidad 5 Track 63 ",
                mp3: "audios/63.mp3",
                oga: "audios/63.mp3"
            },

            {
                title: "Unidad 5 Track 01 ",
                mp3: "audios/64.mp3",
                oga: "audios/64.mp3"
            }, 
            {
                title: "Unidad 5 Track 02 ",
                mp3: "audios/65.mp3",
                oga: "audios/65.mp3"
            },
            {
                title: "Unidad 5 Track 03 ",
                mp3: "audios/66.mp3",
                oga: "audios/66.mp3"
            },
            {
                title: "Unidad 5 Track 04 ",
                mp3: "audios/67.mp3",
                oga: "audios/67.mp3"
            },
            {
                title: "Unidad 5 Track 05",
                mp3: "audios/68.mp3",
                oga: "audios/68.mp3"
            },
            {
                title: "Unidad 5 Track 06 ",
                mp3: "audios/69.mp3",
                oga: "audios/69.mp3"
            },    
            {
                title: "Unidad 5 Track 07 ",
                mp3: "audios/70.mp3",
                oga: "audios/70.mp3"
            },  
            {
                title: "Unidad 5 Track 08 ",
                mp3: "audios/71.mp3",
                oga: "audios/71.mp3"
            },  
            {
                title: "Unidad 5 Track 09 ",
                mp3: "audios/72.mp3",
                oga: "audios/72.mp3"
            },  
            {
                title: "Unidad 5 Track 010 ",
                mp3: "audios/73.mp3",
                oga: "audios/73.mp3"
            },  
            {
                title: "Unidad 5 Track 011 ",
                mp3: "audios/74.mp3",
                oga: "audios/74.mp3"
            },  
            {
                title: "Unidad 5 Track 012 ",
                mp3: "audios/75.mp3",
                oga: "audios/75.mp3"
            },  
            {
                title: "Unidad 5 Track 013 ",
                mp3: "audios/76.mp3",
                oga: "audios/76.mp3"
            },  
            {
                title: "Unidad 5 Track 014 ",
                mp3: "audios/77.mp3",
                oga: "audios/77.mp3"
            },  
            {
                title: "Unidad 5 Track 015 ",
                mp3: "audios/78.mp3",
                oga: "audios/78.mp3"
            },  
            {
                title: "Unidad 5 Track 016 ",
                mp3: "audios/79.mp3",
                oga: "audios/79.mp3"
            },  
            {
                title: "Unidad 5 Track 017 ",
                mp3: "audios/80.mp3",
                oga: "audios/80.mp3"
            },  
            {
                title: "Unidad 5 Track 018 ",
                mp3: "audios/81.mp3",
                oga: "audios/81.mp3"
            },  
            {
                title: "Unidad 5 Track 019",
                mp3: "audios/82.mp3",
                oga: "audios/82.mp3"
            },  
            {
                title: "Unidad 5 Track 020 ",
                mp3: "audios/83.mp3",
                oga: "audios/83.mp3"
            },  
            {
                title: "Unidad 5 Track 021 ",
                mp3: "audios/84.mp3",
                oga: "audios/84.mp3"
            },  
            {
                title: "Unidad 5 Track 022 ",
                mp3: "audios/85.mp3",
                oga: "audios/85.mp3"
            },  
            {
                title: "Unidad 5 Track 023 ",
                mp3: "audios/86.mp3",
                oga: "audios/86.mp3"
            },  
            {
                title: "Unidad 5 Track 024 ",
                mp3: "audios/87.mp3",
                oga: "audios/87.mp3"
            },  
            {
                title: "Unidad 5 Track 025 ",
                mp3: "audios/88.mp3",
                oga: "audios/88.mp3"
            },  
            {
                title: "Unidad 5 Track 026 ",
                mp3: "audios/89.mp3",
                oga: "audios/89.mp3"
            },  
            {
                title: "Unidad 5 Track 027 ",
                mp3: "audios/90.mp3",
                oga: "audios/90.mp3"
            },  
            {
                title: "Unidad 5 Track 028 ",
                mp3: "audios/91.mp3",
                oga: "audios/91.mp3"
            },  
            {
                title: "Unidad 5 Track 029 ",
                mp3: "audios/92.mp3",
                oga: "audios/92.mp3"
            },  
            {
                title: "Unidad 5 Track 030 ",
                mp3: "audios/93.mp3",
                oga: "audios/93.mp3"
            },  
            {
                title: "Unidad 5 Track 031 ",
                mp3: "audios/94.mp3",
                oga: "audios/94.mp3"
            },  
            {
                title: "Unidad 5 Track 032 ",
                mp3: "audios/95.mp3",
                oga: "audios/95.mp3"
            },  
            {
                title: "Unidad 5 Track 033 ",
                mp3: "audios/96.mp3",
                oga: "audios/96.mp3"
            },  
            {
                title: "Unidad 5 Track 034 ",
                mp3: "audios/97.mp3",
                oga: "audios/97.mp3"
            },  
            {
                title: "Unidad 5 Track 035 ",
                mp3: "audios/98.mp3",
                oga: "audios/98.mp3"
            },  
            {
                title: "Unidad 5 Track 036 ",
                mp3: "audios/99.mp3",
                oga: "audios/99.mp3"
            },  
            {
                title: "Unidad 5 Track 037 ",
                mp3: "audios/100.mp3",
                oga: "audios/100.mp3"
            },
            {
                title: "Unidad 5 Track 038 ",
                mp3: "audios/101.mp3",
                oga: "audios/101.mp3"
            },
            {
                title: "Unidad 5 Track 039 ",
                mp3: "audios/102.mp3",
                oga: "audios/102.mp3"
            },
            {
                title: "Unidad 5 Track 040 ",
                mp3: "audios/103.mp3",
                oga: "audios/103.mp3"
            },
            {
                title: "Unidad 5 Track 041 ",
                mp3: "audios/104.mp3",
                oga: "audios/104.mp3"
            },
            {
                title: "Unidad 5 Track 042 ",
                mp3: "audios/105.mp3",
                oga: "audios/105.mp3"
            },
            {
                title: "Unidad 5 Track 043 ",
                mp3: "audios/106.mp3",
                oga: "audios/106.mp3"
            },
            {
                title: "Unidad 5 Track 044 ",
                mp3: "audios/107.mp3",
                oga: "audios/107.mp3"
            },
            {
                title: "Unidad 5 Track 045 ",
                mp3: "audios/108.mp3",
                oga: "audios/108.mp3"
            },
            {
                title: "Unidad 5 Track 046 ",
                mp3: "audios/109.mp3",
                oga: "audios/109.mp3"
            },
            {
                title: "Unidad 5 Track 047 ",
                mp3: "audios/110.mp3",
                oga: "audios/110.mp3"
            },
            {
                title: "Unidad 5 Track 048 ",
                mp3: "audios/111.mp3",
                oga: "audios/111.mp3"
            },
            {
                title: "Unidad 5 Track 049 ",
                mp3: "audios/112.mp3",
                oga: "audios/112.mp3"
            },
            {
                title: "Unidad 5 Track 050 ",
                mp3: "audios/113.mp3",
                oga: "audios/113.mp3"
            },
            {
                title: "Unidad 5 Track 051 ",
                mp3: "audios/114.mp3",
                oga: "audios/114.mp3"
            },
            {
                title: "Unidad 5 Track 052 ",
                mp3: "audios/115.mp3",
                oga: "audios/115.mp3"
            },
            {
                title: "Unidad 5 Track 053 ",
                mp3: "audios/116.mp3",
                oga: "audios/116.mp3"
            },
            {
                title: "Unidad 5 Track 054 ",
                mp3: "audios/117.mp3",
                oga: "audios/117.mp3"
            },
            {
                title: "Unidad 5 Track 055 ",
                mp3: "audios/118.mp3",
                oga: "audios/118.mp3"
            },
            {
                title: "Unidad 5 Track 056 ",
                mp3: "audios/119.mp3",
                oga: "audios/119.mp3"
            },
            {
                title: "Unidad 5 Track 057 ",
                mp3: "audios/120.mp3",
                oga: "audios/120.mp3"
            },
            {
                title: "Unidad 5 Track 058",
                mp3: "audios/121.mp3",
                oga: "audios/121.mp3"
            },
            {
                title: "Unidad 5 Track 059 ",
                mp3: "audios/122.mp3",
                oga: "audios/122.mp3"
            },


        ], {
            swfPath: "../../dist/jplayer",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true
        });

    });
    //]]>
</script>

</html>