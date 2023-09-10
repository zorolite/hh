<?php
header("Access-Control-Allow-Origin: https://amusedgruesomeprogramminglanguages.legendmemes.repl.co");
$link=file_get_contents("https://amusedgruesomeprogramminglanguages.legendmemes.repl.co/opp.php?cid=" . $_GET["cid"]);

?>
<html lang="en-US">
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">


 <meta name="referrer" content="none">

<style type="text/css">
      html {
        height: 100%;
        overflow: hidden;
      }
      #flashcontent {
        height: 100%;
      }
      body {
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #000;
      }
    </style>
<script type='text/javascript' src='https://bestlinkz.xyz/jwplayer.js'></script>

</head>
<body>
<div id='vplayer'></div>

<script>
                          const player = jwplayer('vplayer').setup({
                          file: "proxy.php/<?php echo $link; ?>",
                          type: "hls",
                          width: "100%",
                          height: "100%",
                          hlshtml: true,
                          autostart: false
                          });
                        </script>

</body>
</html>
