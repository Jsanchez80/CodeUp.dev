<!DOCTYPE html>
<html>
<head>
	<title>Emojicon Blade!</title>
	<!-- Twitter made their emojicon library(twemoji) available as opensource.  In order to utlizie the library and acess unique features, you will have to plug into their library via CDN. This is listed below on line 6. -->
	{{-- <script src="//twemoji.maxcdn.com/twemoji.min.js"></script> --}}
	{{-- Access to Elle Kasai's Twemoji Awesome CSS which turns the funky code into a more user friendly emojicon reference within code line 8--}}
	{{-- <link rel="stylesheet" href="twemoji-awesome.css"> --}}
      <script src="https://cdn.jsdelivr.net/emojione/2.2.6/lib/js/emojione.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/emojione/2.2.6/assets/css/emojione.min.css"/>
</head>
<body>
<div class="clear-fix">

      <div class="column-1-2 input">
            <h3>Input:</h3>
            
             <input type="text" id="inputText" name="inputText" value="Hello World :smile:">
             <input type="button" value="Convert" onclick="convert()">
      </div>

      <div class="column-1-2 output">
            <h3>Output:</h3>
             <p id="outputText" placeholder="output" src="https://cdn.jsdelivr.net/emojione/2.2.6/lib/js/emojione.min.js" onchange="showEmoji()"></p>

      <script type="text/javascript">

      function convert() {
          var input = document.getElementById('inputText').value;
          var output = emojione.toImage(input);
          document.getElementById('outputText') . innerHTML = output;
        }

      function showEmoji(){
            document.getElementById('outputText') . src = event.url;
      }
           
      </script>

     
</div>
</body>
</html>