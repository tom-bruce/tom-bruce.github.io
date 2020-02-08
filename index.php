<!doctype HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    </head>
    <script src="https://aframe.io/releases/0.9.1/aframe.min.js"></script>
    <script src="https://rawgit.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/donmccurdy/aframe-extras@v6.1.0/dist/aframe-extras.min.js"></script>
    <!-- add this script in order to load a large set of 3D model extensions-->
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    
    <body style='margin : 0px; overflow: hidden;'>
    <div style='position: fixed; font-size:2em; top: 10px; width:100%; text-align: center; z-index: 1; font-family: Monospace;'>
	Developed by Tom Bruce. Powered by <a href="https://github.com/jeromeetienne/AR.js/" target="_blank">AR.js</a>.
</div>

        <!-- we add detectionMode and matrixCodeType to tell AR.js to recognize barcode markers -->
        <a-scene embedded arjs='sourceType: webcam; debugUIEnabled: false; detectionMode: mono_and_matrix; matrixCodeType: 3x3;'>

        <a-assets>
            <a-asset-item rotation="-90 0 0" id="animated-asset" src="https://raw.githubusercontent.com/nicolocarpignoli/nicolocarpignoli.github.io/master/ar-playground/models/CesiumMan.gltf"></a-asset-item>
        </a-assets>
        <!-- <a-anchor hit-testing-enabled='true'>
      <a-entity rotation="90 0 0">
        <a-sphere material='src: #earth;' position="0 0.5 0" radius="1" segments-height="53">
          <a-animation attribute="rotation" dur="7000" to="0 360 0" easing="linear" repeat="indefinite">
          </a-animation>
        </a-sphere>
      </a-entity>
    </a-anchor> -->

        <a-marker preset="hiro">
        
            <a-entity
                gltf-model="src: url(https://raw.githubusercontent.com/nicolocarpignoli/nicolocarpignoli.github.io/master/ar-playground/models/CesiumMan.gltf);"
                loop="infinite"
                rotation="0 270 90"
                scale="1">
                <a-text value="Hello, World!"></a-text>
            </a-entity>
        </a-marker>

        <!-- use this <a-entity camera> to support multiple-markers, otherwise use <a-marker-camera> instead of </a-marker> -->
        <a-entity camera></a-entity>
        </a-scene>
    </body>
</html>