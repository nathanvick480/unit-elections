<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv=X-UA-Compatible content="IE=Edge,chrome=1" />
    <meta name=viewport content="width=device-width,initial-scale=1.0,maximum-scale=1.0" />

    <title>Unit Elections Portal | Tulpe Lodge - Order of the Arrow, BSA</title>

    <link rel="stylesheet" href="libraries/bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="libraries/fontawesome-free-5.12.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body class="d-flex flex-column h-100" id="section-conclave-report-form" data-spy="scroll" data-target="#scroll" data-offset="0">
  <div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <svg width="100%" height="100%" viewBox="0 0 950 149" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g><text x="182.294px" y="49.486px" style="font-family:'MuseoSans-700', 'Museo Sans', 'Arial', sans-serif;font-weight:600;font-size:27.322px;fill:#fff; letter-spacing: 0.06em; text-transform: uppercase;">Tulpe Lodge</text></g><path d="M101.906,110.697l13.312,-13.312l34.56,34.561l-13.311,13.311l-34.561,-34.56Zm63.47,20.077l1.931,0l0,6.432l-1.251,0l0,-4.351c0,-0.125 0,-0.301 0.003,-0.526c0.004,-0.226 0.007,-0.401 0.007,-0.523l-1.221,5.4l-1.304,0l-1.211,-5.4c0,0.122 0.003,0.297 0.003,0.523c0.003,0.225 0.006,0.401 0.006,0.526l0,4.351l-1.254,0l0,-6.432l1.957,0l1.173,5.057l1.161,-5.057Zm-5.055,0l0,1.139l-1.925,0l0,5.293l-1.352,0l0,-5.293l-1.931,0l0,-1.139l5.208,0Zm-19.707,-31.851c-0.616,-3.376 -4.25,-6.81 -7.477,-8.087c-2.864,-1.13 -6.706,-0.358 -9.06,1.588c-2.559,1.124 -4.3,-1.54 -5.938,-3.175c0.817,-0.719 1.487,-1.482 1.535,-2.565c0.103,-0.919 -0.255,-1.787 -1.076,-2.199c-2.149,-0.818 -3.736,1.176 -5.168,2.408c0.56,-0.666 0.408,-1.844 0.15,-2.614c-0.612,-1.023 -1.688,-1.479 -2.764,-1.841c-1.536,0.412 -3.379,0.1 -4.405,-1.228c0.514,-1.331 1.281,-2.407 2.666,-2.972c3.683,-0.921 7.579,-0.716 11.108,-2.199c0.821,-0.924 1.74,-2.046 2.355,-3.173c-1.228,-0.722 1.078,-1.388 0.155,-2.305c-0.511,-2.051 2.099,-2.408 2.608,-4.148c0.155,-0.566 -0.869,-1.384 0.053,-1.893c-0.256,-1.177 0.308,-2.459 1.485,-3.121c1.075,-1.286 -0.204,-2.461 0.819,-3.789c2.763,-2.565 -1.946,-4.511 -2.766,-6.557c-2.403,-0.766 -4.502,-2.148 -7.267,-1.741c-0.717,-0.919 -2.256,0.307 -3.023,-0.869c0.052,-1.077 -0.766,-1.895 -1.534,-2.661c-1.383,0.254 -2.153,-1.128 -3.379,-1.334c-1.74,-1.841 -4.147,-2.708 -6.249,-4.092c0.103,-2.253 -2.457,-0.206 -2.867,-2.253c-1.636,-1.023 -2.099,-3.534 -4.452,-3.326c-1.588,-0.978 -3.688,0.507 -5.226,-1.026c-2.452,0 -4.4,-1.436 -6.65,-2.053c-2.101,-0.763 -5.122,0.311 -6.401,-2.099c-2.665,-1.023 -3.74,-3.735 -6.092,-5.578c-0.615,-0.204 -1.282,0.05 -1.794,-0.666c-1.687,0.05 -3.174,-0.409 -4.761,-0.051c-1.946,2.252 -5.069,0.254 -7.32,-0.259c-1.382,-0.663 -2.253,-2.047 -3.638,-2.712c-0.97,-0.869 -2.353,-0.716 -3.635,-0.97c-0.049,-0.462 -0.51,-0.307 -0.87,-0.36c-1.177,-0.871 -3.122,-0.361 -4.555,-0.255c-1.125,-0.716 -2.202,-1.589 -3.277,-2.461c-0.666,-0.969 -2.151,-0.408 -2.558,-1.637c-1.231,-1.125 -2.715,-2.202 -4.457,-2.509c-2.306,-0.867 -4.3,1.229 -6.758,0.513c-0.816,-0.716 -1.689,-1.175 -2.61,-1.59c-0.872,-0.047 -1.692,-0.659 -2.614,-0.867c-2.404,0.867 -4.042,-1.382 -6.092,0.05c-0.459,0.462 -1.226,0.311 -1.686,0.158c-0.41,0.101 -0.822,0.507 -0.822,0.919c0.822,2.56 0.256,5.069 0.461,7.732c1.333,1.429 -0.406,3.377 0.769,4.761c1.69,1.279 0.308,3.377 1.228,4.91c1.588,1.185 1.793,3.026 2.661,4.511c0.104,0.919 0.975,1.482 0.822,2.453c1.844,0.619 0.358,2.305 0.664,3.534c0.819,0.925 0.923,1.948 1.333,2.971c1.178,0.051 0.767,1.59 1.278,2.306c1.026,0.716 0.924,2.046 2.048,2.661c-0.359,1.996 1.279,3.431 0.361,5.48c1.328,1.33 0.973,3.225 1.022,4.913c0,2.252 3.021,2.513 3.073,4.505c1.432,1.536 1.226,3.177 1.024,5.122c0.612,1.021 -0.257,3.12 1.229,3.782c0.614,0.621 -0.617,1.337 0.358,1.797c0.101,0.922 0.408,1.638 1.226,2.15c1.334,2.046 2.715,3.738 4.66,5.373c2.51,1.489 1.589,4.764 1.945,7.069c-0.973,3.327 2.971,4.812 3.278,7.68c0.309,0.712 1.125,0.919 1.18,1.688c1.583,0.767 0.97,3.124 2.966,3.377c0,0.617 0.565,1.283 0,1.847c-0.153,0.763 0.771,1.38 1.331,2.046c-0.101,1.435 1.537,2.151 2.149,3.382c0.257,0.559 -0.407,1.534 0.515,1.945c0.051,2.506 3.378,3.378 3.582,5.835c-0.358,0.971 0.411,1.845 0.923,2.662c0.104,0.924 1.28,1.482 1.126,2.559c0.206,0.925 1.177,1.483 1.948,1.847c0.715,2.145 3.122,1.992 4.248,3.633c0.921,0.513 1.843,-0.106 2.611,-0.564c1.742,0 2.662,-1.945 4.251,-2.404c2.148,-1.541 4.864,-1.796 7.166,-3.075c2.406,-2.1 3.021,-5.581 4.146,-7.935c-0.051,-1.382 -0.563,-2.608 -1.229,-3.894c0.205,-1.02 -0.357,-2.198 -0.05,-3.221c0.665,-1.894 3.174,-0.821 4.557,-0.872c0.409,0.204 0.868,0.768 1.228,0.513c0.974,0.255 0.154,1.382 0.307,2.148c0.308,1.027 0.769,2 1.687,2.718c0.769,0.355 2.253,0.305 2.82,0.05c-1.127,1.332 -3.281,2.453 -2.92,4.451c0.053,0.774 0.615,1.436 1.281,1.689c1.741,0.615 2.917,-0.77 4.196,-1.739c1.228,1.739 3.944,2.816 3.227,5.275c-2.048,2.457 -2.814,6.296 -1.896,9.366c1.181,3.022 4.2,6.552 7.528,7.629c5.224,1.022 11.008,-0.359 14.951,-4.812l-20.583,-20.787l17.763,-17.764l20.892,20.58c2.661,-2.253 3.99,-5.224 4.915,-8.192c0.202,-2.05 0.408,-4.092 0.051,-6.092Zm-35.736,24.987c0.972,0.565 2.253,1.43 2.659,2.559c0.105,0.816 0.414,1.743 -0.1,2.459c-0.666,0.868 -1.893,0.969 -2.814,0.561c-1.436,-0.511 -2.612,-1.999 -2.868,-3.482c-0.309,-1.64 1.687,-2.812 3.123,-2.097Zm76.751,-31.671c0,13.508 10.426,24.131 23.475,24.131c13.115,0 23.541,-10.623 23.541,-24.131c0,-13.246 -10.426,-23.541 -23.541,-23.541c-13.049,0 -23.475,10.295 -23.475,23.541Zm649.904,0c0,13.508 10.426,24.131 23.475,24.131c13.115,0 23.541,-10.623 23.541,-24.131c0,-13.246 -10.426,-23.541 -23.541,-23.541c-13.049,0 -23.475,10.295 -23.475,23.541Zm-398.756,0c0,13.508 10.427,24.131 23.476,24.131c13.115,0 23.541,-10.623 23.541,-24.131c0,-13.246 -10.426,-23.541 -23.541,-23.541c-13.049,0 -23.476,10.295 -23.476,23.541Zm354.231,23.344l16.59,0l0,-3.803l-5.967,0l0,-15.738l6.623,0c3.016,0 3.934,0.59 5.18,2.82l7.738,13.246c1.639,2.885 2.361,3.475 6.361,3.475l2.492,0l0,-3.803l-1.312,0c-1.705,0 -2.557,-0.197 -3.279,-1.508l-7.672,-13.115c-0.721,-1.312 -1.574,-1.902 -1.574,-1.902l0,-0.131c6.296,-1.115 10.23,-6.164 10.23,-13.049c0,-6.099 -2.951,-9.902 -7.475,-11.541c-2.558,-0.853 -5.05,-1.049 -8.197,-1.049l-19.738,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm-507.084,0l19.476,0c3.41,0 6.36,-0.197 9.246,-1.115c9.18,-2.754 14.819,-10.557 14.819,-21.901c0,-11.148 -5.508,-19.082 -14.229,-21.902c-3.082,-0.918 -5.902,-1.18 -9.836,-1.18l-19.476,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm91.476,0l16.59,0l0,-3.803l-5.967,0l0,-15.738l6.623,0c3.016,0 3.934,0.59 5.18,2.82l7.738,13.246c1.639,2.885 2.361,3.475 6.361,3.475l2.492,0l0,-3.803l-1.312,0c-1.705,0 -2.557,-0.197 -3.279,-1.508l-7.672,-13.115c-0.721,-1.312 -1.574,-1.902 -1.574,-1.902l0,-0.131c6.296,-1.115 10.23,-6.164 10.23,-13.049c0,-6.099 -2.951,-9.902 -7.475,-11.541c-2.558,-0.853 -5.05,-1.049 -8.197,-1.049l-19.738,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm-136.132,0l16.591,0l0,-3.803l-5.968,0l0,-15.738l6.623,0c3.017,0 3.935,0.59 5.181,2.82l7.737,13.246c1.64,2.885 2.361,3.475 6.361,3.475l2.492,0l0,-3.803l-1.312,0c-1.704,0 -2.557,-0.197 -3.278,-1.508l-7.672,-13.115c-0.722,-1.312 -1.574,-1.902 -1.574,-1.902l0,-0.131c6.295,-1.115 10.229,-6.164 10.229,-13.049c0,-6.099 -2.95,-9.902 -7.475,-11.541c-2.557,-0.853 -5.049,-1.049 -8.197,-1.049l-19.738,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm457.248,0l14.754,0l0,-3.803l-5.311,0l4.327,-11.869l17.968,0l4.393,11.869l-5.311,0l0,3.803l14.754,0l0,-3.803l-4.721,0l-15.542,-42.295l-5.049,0l-15.541,42.295l-4.721,0l0,3.803Zm49.836,0l16.59,0l0,-3.803l-5.967,0l0,-15.738l6.623,0c3.017,0 3.935,0.59 5.18,2.82l7.738,13.246c1.64,2.885 2.361,3.475 6.361,3.475l2.492,0l0,-3.803l-1.312,0c-1.705,0 -2.557,-0.197 -3.278,-1.508l-7.673,-13.115c-0.721,-1.312 -1.573,-1.902 -1.573,-1.902l0,-0.131c6.295,-1.115 10.229,-6.164 10.229,-13.049c0,-6.099 -2.951,-9.902 -7.475,-11.541c-2.558,-0.853 -5.05,-1.049 -8.197,-1.049l-19.738,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm-412.001,0l33.77,0l0,-9.902l-4.131,0l0,5.968l-19.016,0l0,-17.312l17.442,0l0,-3.934l-17.442,0l0,-16.984l17.77,0l0,5.639l4.197,0l0,-9.573l-32.59,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm551.936,-42.295l4.656,0l10.754,42.295l5.377,0l10.23,-36.262c0.393,-1.377 0.524,-3.017 0.524,-3.017l0.262,0c0,0 0.132,1.64 0.525,3.017l10.164,36.262l5.443,0l10.688,-42.295l4.722,0l0,-3.803l-14.886,0l0,3.803l5.508,0l-8.262,33.902c-0.328,1.442 -0.459,3.016 -0.459,3.016l-0.262,0c0,0 -0.197,-1.574 -0.59,-3.016l-10.623,-37.705l-4.263,0l-10.557,37.705c-0.393,1.442 -0.59,3.016 -0.59,3.016l-0.262,0c0,0 -0.132,-1.574 -0.46,-3.016l-8.262,-33.902l5.508,0l0,-3.803l-14.885,0l0,3.803Zm-244.394,42.295l33.77,0l0,-9.902l-4.131,0l0,5.968l-19.016,0l0,-17.312l17.442,0l0,-3.934l-17.442,0l0,-16.984l17.77,0l0,5.639l4.197,0l0,-9.573l-32.59,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm-151.476,0l17.049,0l0,-3.803l-6.426,0l0,-16.918l16.852,0l0,-3.935l-16.852,0l0,-17.377l16.262,0l0,5.771l4.131,0l0,-9.836l-31.016,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm96.459,0l16.656,0l0,-3.803l-6.033,0l0,-17.312l26.689,0l0,17.312l-6.033,0l0,3.803l16.656,0l0,-3.803l-6.033,0l0,-38.492l6.033,0l0,-3.803l-16.656,0l0,3.803l6.033,0l0,17.246l-26.689,0l0,-17.246l6.033,0l0,-3.803l-16.656,0l0,3.803l6.033,0l0,38.492l-6.033,0l0,3.803Zm-33.311,0l16.655,0l0,-3.803l-6.032,0l0,-38.361l12.852,0l0,7.475l4.197,0l0,-11.409l-38.689,0l0,11.409l4.131,0l0,-7.475l12.918,0l0,38.361l-6.032,0l0,3.803Zm-482.574,-3.247c-1.228,-0.511 -2.46,0.617 -3.787,0.208c-1.282,-1.482 -2.869,-2.46 -2.459,-4.611c-0.972,-0.559 -0.36,-2.098 -1.794,-2.202c0.412,-0.716 -0.358,-1.689 -0.715,-2.455c-0.922,-0.513 0.05,-1.382 -0.613,-2.05c0.202,-1.127 0.202,-2.252 1.229,-2.968c0.715,-0.612 1.687,-0.665 2.611,-0.259c1.381,1.488 1.636,3.281 1.686,5.175c1.487,0.152 0.256,2.504 1.998,1.788c0,0.925 0.768,0.873 1.383,1.181c1.077,0.667 2.304,1.383 2.15,2.765c-0.922,1.023 -0.358,2.712 -1.689,3.428Zm769.329,-20.097c0,-11.017 8.393,-19.345 18.688,-19.345c10.361,0 18.754,8.328 18.754,19.345c0,11.279 -8.393,19.934 -18.754,19.934c-10.295,0 -18.688,-8.655 -18.688,-19.934Zm-649.904,0c0,-11.017 8.393,-19.345 18.688,-19.345c10.361,0 18.755,8.328 18.755,19.345c0,11.279 -8.394,19.934 -18.755,19.934c-10.295,0 -18.688,-8.655 -18.688,-19.934Zm251.148,0c0,-11.017 8.394,-19.345 18.689,-19.345c10.361,0 18.754,8.328 18.754,19.345c0,11.279 -8.393,19.934 -18.754,19.934c-10.295,0 -18.689,-8.655 -18.689,-19.934Zm-147.017,19.41l0,-38.23l8.459,0c3.213,0 5.836,0.131 8.525,1.049c6.885,2.426 11.148,8.918 11.148,18.099c0,9.311 -4.459,15.672 -11.476,17.967c-2.557,0.852 -5.115,1.115 -8.197,1.115l-8.459,0Zm-180.756,-22.659l-16.64,16.536c-0.97,0.465 -1.893,-0.457 -2.254,-1.229c-0.049,-0.558 0.312,-1.021 0.515,-1.534l15.975,-15.971c0.511,-0.209 1.278,-0.463 1.843,-0.108c0.614,0.617 1.123,1.539 0.561,2.306Zm24.269,13.317c-0.565,0.969 -1.688,1.274 -2.767,0.913c-1.227,-0.511 -2.354,-1.633 -2.865,-2.864c-0.359,-0.666 -0.258,-1.587 0.155,-2.199c0.511,-0.614 1.228,-0.716 1.946,-0.824c1.278,0.361 2.608,1.185 3.275,2.357c0.357,0.766 0.611,1.843 0.256,2.617Zm-47.411,-0.413c-0.973,-1.384 -1.174,-3.331 -2.148,-4.814c0.255,-0.973 1.127,-1.843 2.148,-2.148l3.739,0.561c0.509,0.412 1.331,0.51 1.484,1.282c-0.817,0.714 -0.051,2.405 -1.281,2.915c-1.329,0.615 -2.249,2.972 -3.942,2.204Zm-12.9,-6.962c-0.461,1.175 0.41,2.762 -1.024,3.478c-1.281,-0.563 -3.636,0.153 -3.531,-1.995c0.407,-1.026 -1.282,-1.892 -0.258,-2.915c-0.511,-0.925 1.024,-0.925 0.82,-1.742c0.972,-0.158 2.254,-1.336 2.919,0.048c0.462,-0.15 0.766,0.464 0.973,0.769c-0.103,0.307 -0.31,0.818 -0.051,1.179c0.562,0.358 0.562,0.769 0.152,1.178Zm633.783,1.11l7.017,-18.885c0.524,-1.508 0.656,-2.951 0.656,-2.951l0.196,0c0,0 0.197,1.443 0.722,2.951l6.885,18.885l-15.476,0Zm-614.791,-4.847c0.36,-0.359 0.923,-0.823 0.514,-1.436c0.462,-0.564 1.076,-0.969 1.739,-0.718c-0.049,0.665 0.615,0.411 1.024,0.513c0.515,0.513 1.18,1.282 1.078,1.998c-1.129,1.33 -2.049,2.661 -3.432,3.634c-0.513,-0.102 -1.074,-0.152 -1.28,-0.77c0.051,-1.073 0.871,-2.1 0.357,-3.221Zm-10.287,-0.666c-0.412,-0.411 -0.669,-1.077 -0.36,-1.584c0.819,-1.232 2.253,-0.316 3.276,-0.514c0.409,0.712 1.791,1.588 1.025,2.561c0.717,1.533 -1.075,2.303 -1.025,3.687c-0.92,0.608 -1.69,-0.263 -2.561,-0.516c-0.561,-1.175 -1.226,-2.455 -0.355,-3.634Zm163.437,1.579l0,-18.689l8.984,0c2.361,0 4.525,0.262 6.098,0.853c3.214,1.245 5.05,3.934 5.05,8.131c0,5.901 -3.738,9.705 -9.312,9.705l-10.82,0Zm136.132,0l0,-18.689l8.984,0c2.36,0 4.524,0.262 6.098,0.853c3.213,1.245 5.049,3.934 5.049,8.131c0,5.901 -3.737,9.705 -9.311,9.705l-10.82,0Zm415.608,0l0,-18.689l8.984,0c2.36,0 4.524,0.262 6.098,0.853c3.213,1.245 5.049,3.934 5.049,8.131c0,5.901 -3.737,9.705 -9.311,9.705l-10.82,0Zm-44.656,0l0,-18.689l8.984,0c2.36,0 4.524,0.262 6.098,0.853c3.213,1.245 5.049,3.934 5.049,8.131c0,5.901 -3.737,9.705 -9.311,9.705l-10.82,0Zm-648.407,-10.898c0.514,1.023 0.567,2.305 -0.05,3.326c-1.127,1.125 -2.763,1.539 -2.713,3.332l-0.973,0.761c-0.359,-0.663 -0.257,-1.48 -1.128,-1.736c-0.407,-1.232 -0.765,-2.712 -1.994,-3.434c-0.512,-0.817 -0.77,-2.097 -0.462,-2.813c0.716,-0.307 1.946,-1.432 2.305,-0.152c1.739,-1.027 3.172,1.021 5.015,0.716Zm-18.328,3.687c-0.049,-0.97 0.974,-1.59 1.332,-2.255c1.843,0.101 2.048,-2.661 3.84,-2.098l1.843,-0.614c0.357,0.975 0.869,1.585 0.462,2.712c-0.409,1.432 -2.305,2.305 -1.896,3.941c-1.179,1.383 -2.968,0.819 -4.403,0.718c0,-1.435 -2.662,-0.922 -1.178,-2.404Zm-38.549,-0.769c-0.668,0.357 -1.284,0.975 -2.155,0.616c-1.176,-0.772 -1.942,-1.843 -2.709,-2.922l-0.565,-0.353c0.767,-0.772 0.255,-1.697 0.307,-2.565c1.025,-0.406 1.331,-2.147 2.56,-1.84c0.719,-0.618 1.126,0.205 1.842,0.101c0.616,1.127 1.693,2.512 0.769,3.839c2.457,0.716 -0.665,1.796 -0.049,3.124Zm17.763,-12.542c-0.462,1.585 1.638,2.353 1.232,3.891c1.483,0.871 1.327,2.457 2.508,3.427c0.152,1.077 -0.566,2.001 -1.436,2.458c-0.871,0.153 -1.741,0.715 -2.662,0.412c-0.82,-1.023 -2.353,-0.305 -3.123,-1.895c-0.406,-1.333 -2.099,-2.205 -2.354,-3.686c0.716,-1.743 -0.923,-3.688 0.766,-5.072l2.253,-1.841c0.924,0.716 3.277,0.305 2.816,2.306Zm15.001,7.729c-0.205,-0.617 0.205,-0.817 0.256,-1.488c0.716,-0.406 1.282,-1.07 2.098,-0.97c0.975,0.564 1.641,0.817 2.05,1.946c-0.462,0.874 -1.588,2.305 -2.611,2.305c-0.821,-0.309 -1.332,-1.027 -1.793,-1.793Zm20.224,-21.759c1.023,0.206 1.484,1.587 1.843,2.557c0.665,0.566 0.717,1.641 1.126,2.359c-0.053,0.46 -0.359,0.871 -0.257,1.484c1.127,0.616 0.104,1.846 0.46,2.714c-0.816,0.919 -1.226,2.559 -2.609,2.712c-0.513,1.229 -2.098,1.998 -2.968,2.968c-0.973,0.053 -1.741,1.232 -2.867,0.618c-0.667,-0.666 -0.924,-1.229 -1.076,-2.1c0.204,-2.253 2.609,-2.924 2.917,-5.066c0.768,-0.462 1.228,-1.23 1.281,-2.1c-1.382,-0.975 1.487,-2.61 -0.718,-3.076c-0.307,-1.429 -2.457,-1.121 -2.25,-2.864c0.816,-0.818 1.379,-2.61 3.019,-2.1c0.564,1.074 1.893,0.666 2.099,1.894Zm11.008,4.862c-0.102,-0.921 0.105,-1.84 0.51,-2.559c1.024,-0.921 2.253,-0.819 3.535,-0.767c0.717,1.128 2.151,1.334 2.407,2.716l0.971,2.612c-1.844,1.427 -0.46,4.144 -2.711,5.266c-1.949,0 -2.766,3.18 -4.865,2.205c-0.666,-0.869 -1.947,-1.229 -1.487,-2.509l-0.409,-0.206c-0.305,-2.556 1.178,-4.556 2.049,-6.758Zm-57.033,6.451c-1.437,1.023 -2.921,0.36 -4.251,-0.458c-1.179,-0.563 -2.919,0.046 -3.38,-1.538c-0.356,-1.382 0.052,-2.506 0.412,-3.789l0.716,0c-0.258,-0.763 -0.258,-1.793 0,-2.658c0.972,-1.074 2.046,0.307 3.071,-0.516c0.717,0.923 2.252,1.229 2.098,2.715c1.177,0.459 1.537,2.049 2.764,2.663c-0.562,1.382 0.768,3.123 -1.43,3.581Zm24.367,-6.754c0,-0.618 -0.663,-0.871 -1.076,-1.282c0.207,-1.125 -0.05,-2.507 -1.277,-3.223c-1.175,-0.152 -0.767,-1.894 -2.099,-1.59c-0.41,-1.229 0.612,-2.357 -0.41,-3.276c-0.053,-1.178 1.282,-1.073 1.432,-2.15c0.205,-0.205 0.359,-0.46 0.717,-0.412c0.154,-0.357 0.976,-0.563 1.486,-0.972c1.022,0.102 0.564,1.59 1.69,1.486c0.766,0.357 0.409,0.921 0.154,1.38c0.358,0.872 1.33,1.641 1.022,2.665c1.691,0.564 0.153,2.203 1.588,2.815c0.306,0.102 0,0.411 0,0.72c0.561,1.175 0.717,2.15 -0.463,3.123c0.257,0.662 0.104,1.432 -0.765,1.685c-0.77,-0.459 -2.204,0.666 -1.999,-0.969Zm-39.525,-6.146c-1.125,-0.307 -2.2,-0.766 -3.326,-0.766c-0.822,-1.128 -2.407,-0.77 -3.02,-2.104c-0.768,-0.048 -0.82,-0.817 -0.922,-1.33c0.255,-0.969 0.666,-1.996 -0.309,-2.762c-1.382,-2.506 1.844,-3.588 3.533,-2.506c1.127,0.817 1.844,2.145 1.996,3.324c1.282,1.792 3.742,0.871 4.968,2.61c-0.205,0.716 -0.564,1.488 -0.77,2.204l-2.15,1.33Zm51.401,-11.672l0.055,0.151c0.869,-1.795 3.276,-1.023 4.967,-1.282c1.021,1.029 2.917,-0.665 3.323,1.387c0.156,0.97 1.128,1.843 0.105,2.661c-0.818,0.203 -1.025,1.229 -1.791,1.488c-2.459,-0.309 -5.018,3.478 -6.914,0.355c-0.304,-1.534 -0.665,-3.326 0.255,-4.76Zm-35.476,3.12c-0.616,0 -1.229,0 -1.485,-0.564c0.767,-1.071 -0.82,-1.33 -0.462,-2.405c-1.997,-0.662 0.923,-1.739 -0.358,-2.708c0.051,-1.286 1.483,-1.897 2.458,-2.256c0.819,0.716 1.893,0.152 2.712,-0.259c0.92,1.229 2.049,1.641 3.38,2.052c0.972,0.15 0.615,1.638 1.739,1.33c0.871,0.457 0.205,1.641 0.055,2.302c-0.361,0.975 -0.155,2.409 -1.487,2.919c-1.023,0.206 -1.945,-0.51 -2.816,0.152c-1.228,-0.614 -2.66,0.102 -3.736,-0.563Zm13.977,-12.956c3.483,0.108 6.144,2.261 9.215,3.079c0.971,-0.564 1.432,1.229 2.2,0.151c0.871,0.565 -0.049,1.382 0.719,2.047c0.253,0.564 -0.462,1.28 -0.872,1.793c-2.559,0.925 -6.195,2.61 -8.601,0.412c-1.79,-0.153 -2.458,-2.664 -4.248,-3.124c-0.257,-0.769 -0.768,-1.586 -0.664,-2.41l2.251,-1.948Zm-29.182,0.519c1.022,-1.127 2.507,-0.05 3.479,-1.435c1.232,-0.104 1.536,1.328 2.869,1.024c0.511,0.304 1.127,0.715 1.228,1.228c-0.514,1.023 0.666,1.59 0.359,2.509c-1.025,1.742 -3.279,2.455 -3.841,4.347c-0.41,0.108 -0.87,0.467 -1.226,0.108c-1.383,-0.458 -1.438,-1.946 -2.254,-2.87c0.816,-1.43 -1.382,-2.301 -0.512,-3.787l-0.31,0.1c-0.255,-0.353 0.053,-0.866 0.208,-1.224Zm5.782,-7.323c0.871,-0.051 -0.049,-0.976 0.822,-1.021c0.615,0.305 1.587,0.153 2.15,-0.106c0.716,-0.413 1.485,0.458 2.201,-0.255c0.459,0.562 1.383,0.562 1.894,1.072l0.051,0.259c1.023,-0.513 1.125,0.513 1.483,1.283c0.77,0.558 -0.407,0.916 -0.257,1.48l-1.788,0.871l-0.054,-0.359c-0.561,-0.05 -1.023,0.817 -1.583,0.26c-0.104,-1.127 -1.127,0 -1.539,-0.618c-0.459,0.564 -1.026,0.105 -1.586,0.153c-0.615,-1.023 -2.099,-1.689 -1.794,-3.019Zm-17.711,-3.789c-0.462,0.767 -1.382,1.483 -2.254,2.046c-1.178,-0.358 -2.305,-0.972 -3.431,-1.586c-0.206,-0.923 -0.871,-1.793 -0.871,-2.614c1.743,-0.818 2.098,-3.123 4.302,-2.966l1.483,0.153c-0.201,1.127 1.281,1.178 0.717,2.254c0.054,0.356 0.411,0.714 -0.152,0.971c0.511,0.206 -0.154,1.178 0.206,1.742Z" style="fill:#fff;fill-rule:nonzero;"/></svg>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse c-navbar-content" id="navbar-main">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="https://tulpelodge.org" target="_blank">Tulpe Lodge Home</a>
                <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <main class="container-fluid flex-shrink-0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <div class="row">
            <div class="col-12">
                <section>
                    <?php
                    if ($_GET['error'] == 1) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Something went wrong. Please try again. If this continues, please <a href="#" data-toggle="modal" data-target="#contact">contact the Lodge leadership team</a>.
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                    </div>
                    <?php }
                    if ($_GET['contact'] == 1) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thanks!</strong> Your contact form has been submitted, and we'll be in touch soon.
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
                    </div>
                    <?php } ?>
                </section>
            </div>
        </div>
        <?php

        include 'unitelections-info.php';

        if (isset($_GET['accessKey'])) {
            if (preg_match("/^([a-z\d]){8}-([a-z\d]){4}-([a-z\d]){4}-([a-z\d]){4}-([a-z\d]){12}$/", $_GET['accessKey'])) {
            $accessKey = $_POST['accessKey'] = $_GET['accessKey'];
            if(!isset($_COOKIE[$accessKey]) || $_GET['ignorePreviousSubmission'] == "true") {
                //let them vote
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $unitInfoQuery = $conn->prepare("SELECT * from unitElections where accessKey = ?");
                $unitInfoQuery->bind_param("s", $accessKey);
                $unitInfoQuery->execute();
                $unitInfoQ = $unitInfoQuery->get_result();
                if ($unitInfoQ->num_rows > 0) {
                    $unitInfo = $unitInfoQ->fetch_assoc();

                    ?><h2>Unit Election: <?php echo $unitInfo['unitNumber'] . " " . $unitInfo['unitCommunity']; ?></h2>
                    <?php

                    $tz = 'America/New_York';
                    $timestamp = time();
                    $dt = new DateTime("now", new DateTimeZone($tz));
                    $dt->setTimestamp($timestamp);

                    $date = $dt->format("Y-m-d");
                    $hour = $dt->format("H");
                    if (($unitInfo['dateOfElection'] == $date && (($hour >= 17) && ($hour < 21))) || $_GET['ignoreTime'] == "true") {
                    //if the today is the date of the election and its between 5pm and 8:59pm ET then allow voting
                    $eligibleScoutsQuery = $conn->prepare("SELECT * from eligibleScouts where unitId = ?");
                    $eligibleScoutsQuery->bind_param("s", $unitInfo['id']);
                    $eligibleScoutsQuery->execute();
                    $eligibleScoutsQ = $eligibleScoutsQuery->get_result();
                    if ($eligibleScoutsQ->num_rows > 0) {
                        // there are eligibleScouts

                        //insert instructions and video embed here
                        if (!isset($_GET['watchedVideo'])) {
                        ?>
                        <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Election Information</h5>
                            <div class="d-none">The Order of the Arrow is Scouting’s National Honor Society. The fourfold purpose of the OA is:
                            <ol class="mb-3">
                                <li>To recognize those campers – Scouts and Scouters – who best exemplify the Scout Oath and Law in their daily lives, and by such recognition cause other campers to conduct themselves in such manner as to warrant recognition.</li>
                                <li>To develop and maintain camping traditions and spirit.</li>
                                <li>To promote Scout camping, which reaches its greatest effectiveness as a part of the unit’s camping program, both year-round and in the summer camp, as directed by the camping committee of the council.</li>
                                <li>To crystallize the Scout habit of helpfulness into a life purpose of leadership in cheerful service to others.</li>
                            </ol>

                            Youth membership qualifications:
                            <ol class="mb-3">
                            <li>Registered member of the Boy Scouts of America</li>
                            <li>Hold the rank of First Class, hold the Scouts BSA First Class rank, the Venturing Discovery Award, or the Sea Scout Ordinary rank or higher</li>
                            <li>In the past two years, have completed fifteen (15) days and nights of camping under the auspices of the Boy Scouts of America.  The fifteen days and nights of camping must include one long-term camp of six days and five nights, and the balance of the camping must be short-term (1, 2, or 3 night) camping trips.</li>
                            <li>Scoutmaster approval</li>
                            </ol></div>
                            The video below contains a brief summary of the Order of the Arrow and its programs as well as an explanation of the election procedures. Please watch it before voting.
                            <div class="mt-3 col-10 mx-auto embed-responsive embed-responsive-16by9">
                            <video controls poster="/assets/video-thumb.jpg">
                                <source src="/assets/2016_lodge_unit_elections.mp4" type="video/mp4">
                                <div class="alert alert-danger" role="alert">Your browser does not support embedded video at this time. Please watch on Youtube here: <a class="alert-link" href="https://www.youtube.com/watch?v=lHI81b1m41Q" target="_blank">https://www.youtube.com/watch?v=lHI81b1m41Q</a></div>
                            </video>
                            </div>
                        </div>
                        </div>
                        <a href="/?accessKey=<?php echo $accessKey; ?>&watchedVideo=true<?php echo ($_GET['ignoreTime'] == 'true' ? '&ignoreTime=true' : ''); ?><?php echo ($_GET['ignorePreviousSubmission'] == 'true' ? '&ignorePreviousSubmission=true' : ''); ?>" class="btn btn-primary mb-3">I'm ready to vote!</a>
                        <?php
                    } else {
                        //insert form elements here
                        ?>
                        <a href="/?accessKey=<?php echo $accessKey; ?><?php echo ($_GET['ignoreTime'] == 'true' ? '&ignoreTime=true' : ''); ?><?php echo ($_GET['ignorePreviousSubmission'] == 'true' ? '&ignorePreviousSubmission=true' : ''); ?>" class="btn btn-secondary mb-3">Show video</a>
                        <div class="card mb-3">
                        <div class="card-body">
                            <p>Remember: The election is by secret ballot, so no one will know for who you are voting. The OA is not a popularity contest! Don't vote for a Scout just because he is your friend, or older than the rest. What really counts is his loyalty to the Scout Oath and Law.</p>
                            <p>Who is a friend to all? Who is pleasant and easy to get along with? Who is cheerful, even when he has many tiresome jobs to do? Who has served your unit all year round, faithfully attending meetings and helping with service projects? Do you think he will continue his service in the future? Vote for only those you believe will continue in unselfish service to your troop.</p>
                        </div>
                        </div>
                        <form method="POST" action="index-process.php" enctype="multipart/form-data" id="unitElectionForm">
                        <input type="hidden" name="unitId" id="unitId" value="<?php echo $unitInfo['id']; ?>">
                        <div class="card mb-3">
                            <div class="card-body">
                            <p>Please check the box next to each Scout you would like to vote for. You may vote for all, some, one, or none.</p>
                            <?php $count = 1;
                            while($eligibleScout = $eligibleScoutsQ->fetch_assoc()) {
                                $eligibleScoutsArray[] = $eligibleScout['id'];
                                if ($count > 1) { ?>
                                <hr></hr>
                                <?php } ?>
                                <div class="form-group my-2">
                                    <div class="form-check mb-1">
                                        <input type="hidden" name="eligibleScout-<?php echo $eligibleScout['id']; ?>" id="eligibleScout-<?php echo $eligibleScout['id']; ?>" value="0">
                                        <input name="eligibleScout-<?php echo $eligibleScout['id']; ?>" class="form-check-input" type="checkbox" value="1" id="eligibleScout-<?php echo $eligibleScout['id']; ?>">
                                        <label class="form-check-label" for="eligibleScout-<?php echo $eligibleScout['id']; ?>">
                                            <?php echo $eligibleScout['firstName'] . " " . $eligibleScout['lastName']; ?>
                                        </label>
                                    </div>
                                </div>
                                <?php $count++;
                            } ?>
                            </div>
                        </div>
                        <input type="hidden" id="eligibleScouts" name="eligibleScouts" value="<?php print_r(implode(',', $eligibleScoutsArray)); ?>">
                        <input type="hidden" id="accessKey" name="accessKey" value="<?php echo $accessKey; ?>">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary"><i class="fas fa-paper-plane pr-1"></i> Submit</button>
                        <div class="my-2"><small class="text-muted">Note: You will only be able to submit once, so make sure your ballot is correct!</small></div>
                        </form><?php
                        }
                    } else {
                        //there are not any eligibleScouts
                        ?>
                        <div class="card col-10 mx-auto">
                        <div class="card-body">
                            There are no eligible Scouts in your unit. Thanks for visiting!
                            <br>
                            <br>
                            Are you seeing this by mistake? Contact us <a href="#" data-toggle="modal" data-target="#contact">here</a>.
                        </div>
                        </div>
                        <?php
                    }
                    } else {
                    //voting is not open at this time
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Your unit election is not open at this time. Your unit's election is <?php echo date("l, F j, Y", strtotime($unitInfo['dateOfElection'])); ?> from 5pm to 8:59pm ET.
                    </div>
                    <?php
                    }
                    $unitInfoQuery->close();
                } else {
                    //bad accessKey
                    include 'badAccess.php';
                }

                $conn->close();
                } else {
                //they already voted
                ?>
                <div class="card col-10 mx-auto">
                    <div class="card-body">
                    You've already voted in this election! Thanks!
                    </div>
                </div>
                <?php
                }
            } else {
                include 'badAccess.php';
            }
            } else {
            //accessKey bad
            include 'badAccess.php';
            }


        ?>
    </main>
  </div>
    <?php include "footer.php"; ?>

    <script src="libraries/jquery-3.4.1.min.js"></script>
    <script src="libraries/popper-1.16.0.min.js"></script>
    <script src="libraries/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <div class="modal fade" id="contact" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="contactForm" method="POST" action="contact-process.php">
                    <div class="modal-header">
                        <h5 class="modal-title">Contact the Lodge Leadership Team</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>If you encounter technical issues while submitting your Unit Election ballot, please let the Lodge Leadership team know!</p>
                        <div class="form-group mb-2">
                            <label class="required">Your Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text"><i class="fas fa-fw fa-user"></i></label>
                                </div>
                                <input name="contact_name" id="contact_name" type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="required">Your Email Address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text"><i class="fas fa-fw fa-envelope"></i></label>
                                </div>
                                <input name="contact_email" id="contact_email" type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label class="required">Your Unit</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text"><i class="fas fa-fw fa-sitemap"></i></label>
                                </div>
                                <input name="contact_unit" id="contact_unit" type="text" class="form-control" placeholder="Troop 1 Community" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="required">Description</label>
                            <textarea name="contact_description" id="contact_description" class="form-control" rows="4" required placeholder="Please describe the issue. The more detail you provide, the easier it is for us to help you."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="contact_submit" value="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
