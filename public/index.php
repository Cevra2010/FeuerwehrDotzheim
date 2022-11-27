<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feuerwehr Dotzheim</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        #background-video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
        }
        #opacity-layer {
            background-color: #000;
            opacity: 0.7;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
        }
        .line {
            width: 100vw;
            object-fit: cover;
            left: 0;
            right: 0;

            padding-top: 10vh;
            padding-bottom: 10vh;
            z-index: -1;
        }

        .inner-line {
            text-align: center;
            color:#fff;
        }

        .fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeInLeftBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(-2000px, 0, 0);
  transform: translate3d(-2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
  @keyframes fadeInLeftBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(-2000px, 0, 0);
  transform: translate3d(-2000px, 0, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  } 

    .box {
        padding: 8vh;
        background-color: #484848;
        opacity: 0.6;
        transform: skewY(5deg);
        margin-top: 20vh;
    }
    .inner-box {
        padding: 1vh;
        padding-bottom: 10vh;
        transform: skewY(-5deg);
    }
    </style>
</head>
<body class="font-sans">
    <video autoplay muted loop id="background-video">
        <source src="mp4/backgroud-vid.mp4#t=2,8" type="video/mp4">
    </video>
    <div id="opacity-layer"></div>
    <div class="line">
        <div class="inner-line fadeInLeftBig">
            <img src="svg/logo.svg" style="width: 30vh; height: 30vh; margin-left: auto; margin-right: auto;">
            <p style="font-size: 1.2em;">Freiwillige Feuerwehr</p>
            <p style="font-size: 2em; padding-bottom: 2vh;">Wiesbaden-Dotzheim</p>
            <p style="text-transform:uppercase; font-size: 0.8em;">Einsatzabteilung | Jugendfeuerwehr | Förderverein</p>
        </div>
    </div>

    <div class="box">
        <div class="inner-box" style="color: #fff;">
            <h2 style="font-size: 2em; margin-bottom: 2vh;">WIR</h2>
            <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>

            <h2 style="font-size: 2em; margin-top:60px; margin-bottom: 2vh;">KONTAKT</h2>
            <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>

            <div style="margin-top:60px;">Impressum | Datenschutz</div>
        </div>
    </div>
</body>
</html>