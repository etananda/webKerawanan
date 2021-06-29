<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="<?= base_url('resources/ol.css') ?>">
    <link rel="stylesheet" href="<?= base_url('resources/fontawesome-all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/horsey.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/ol3-search-layer.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('resources/ol-layerswitcher.css') ?>">
    <link rel="stylesheet" href="<?= base_url('resources/qgis2web.css') ?>">
    <style>
        .ol-geocoder.gcd-gl-container {
            top: 100px !important;
            left: .5em !important;
            width: 2.1em !important;
            height: 2.1em !important;
        }

        .ol-geocoder .gcd-gl-container {
            width: 2.1em !important;
            height: 2.1em !important;
        }

        .ol-geocoder .gcd-gl-control {
            width: 2.1em !important;
        }

        .ol-geocoder .gcd-gl-expanded {
            width: 15.625em !important;
            height: 2.1875em;
        }

        .ol-touch .ol-geocoder.gcd-gl-container {
            top: 130px !important;
        }

        .ol-geocoder .gcd-gl-btn {
            width: 1.375em !important;
            height: 1.375em !important;
            top: .225em !important;
            background-image: none !important;
        }
    </style>
    <style>
        .search-layer {
            top: 135px;
            left: .5em;
        }

        .ol-touch .search-layer {
            top: 180px;
        }
    </style>
    <style>
        html,
        body {
            background-color: #ffffff;
        }

        .ol-control button {
            background-color: #f8f8f8 !important;
            color: #000000 !important;
            border-radius: 0px !important;
        }

        .ol-zoom,
        .geolocate,
        .gcd-gl-control .ol-control {
            background-color: rgba(255, 255, 255, .4) !important;
            padding: 3px !important;
        }

        .ol-scale-line {
            background: none !important;
        }

        .ol-scale-line-inner {
            border: 2px solid #f8f8f8 !important;
            border-top: none !important;
            background: rgba(255, 255, 255, 0.5) !important;
            color: black !important;
        }
    </style>
    <link href="resources/ol-geocoder.min.css" rel="stylesheet">
    <style>
        .tooltip {
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 4px;
            color: white;
            padding: 4px 8px;
            opacity: 0.7;
            white-space: nowrap;
        }

        .tooltip-measure {
            opacity: 1;
            font-weight: bold;
        }

        .tooltip-static {
            background-color: #ffcc33;
            color: black;
            border: 1px solid white;
        }

        .tooltip-measure:before,
        .tooltip-static:before {
            border-top: 6px solid rgba(0, 0, 0, 0.5);
            border-right: 6px solid transparent;
            border-left: 6px solid transparent;
            content: "";
            position: absolute;
            bottom: -6px;
            margin-left: -7px;
            left: 50%;
        }

        .tooltip-static:before {
            border-top-color: #ffcc33;
        }

        .measure-control {
            top: 65px;
            left: .5em;
        }

        .ol-touch .measure-control {
            top: 80px;
        }
    </style>
    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <title></title>
</head>

<body>
    <div id="map">
        <div id="popup" class="ol-popup">
            <a href="#" id="popup-closer" class="ol-popup-closer"></a>
            <div id="popup-content"></div>
        </div>
    </div>
    <script src="<?= base_url('resources/qgis2web_expressions.js') ?>"></script>
    <script src="<?= base_url('resources/polyfills.js') ?>"></script>
    <script src="<?= base_url('resources/functions.js') ?>"></script>
    <script src="<?= base_url('resources/ol.js') ?>"></script>
    <script src="http://cdn.polyfill.io/v2/polyfill.min.js?features=Element.prototype.classList,URL"></script>
    <script src="<?= base_url('resources/horsey.min.js') ?>"></script>
    <script src="<?= base_url('resources/ol3-search-layer.js') ?>"></script>
    <script src="<?= base_url('resources/ol-layerswitcher.js') ?>"></script>
    <script src="<?= base_url('resources/ol-geocoder.js') ?>"></script>
    <script src="<?= base_url('layers/BatasKecamatan_2.js') ?>"></script>
    <script src="<?= base_url('layers/RuteKeTPS_3.js') ?>"></script>
    <script src="<?= base_url('layers/RuteKeTPA_4.js') ?>"></script>
    <script src="<?= base_url('layers/RuteKeTES_5.js') ?>"></script>
    <script src="<?= base_url('layers/RuteKeTEA_6.js') ?>"></script>
    <script src="<?= base_url('layers/RuteKeSaranaKesehatan_7.js') ?>"></script>
    <script src="<?= base_url('layers/TitikLokasiEvakuasi_8.js') ?>"></script>
    <script src="<?= base_url('layers/SumberGempa_9.js') ?>"></script>
    <script src="<?= base_url('styles/BatasKecamatan_2_style.js') ?>"></script>
    <script src="<?= base_url('styles/RuteKeTPS_3_style.js') ?>"></script>
    <script src="<?= base_url('styles/RuteKeTPA_4_style.js') ?>"></script>
    <script src="<?= base_url('styles/RuteKeTES_5_style.js') ?>"></script>
    <script src="<?= base_url('styles/RuteKeTEA_6_style.js') ?>"></script>
    <script src="<?= base_url('styles/RuteKeSaranaKesehatan_7_style.js') ?>"></script>
    <script src="<?= base_url('styles/TitikLokasiEvakuasi_8_style.js') ?>"></script>
    <script src="<?= base_url('styles/SumberGempa_9_style.js') ?>"></script>
    <script src="<?= base_url('layers/layers.js') ?>" type="text/javascript"></script>
    <script src="<?= base_url('resources/Autolinker.min.js') ?>"></script>
    <script src="<?= base_url('resources/qgis2web.js') ?>"></script>
</body>

</html>