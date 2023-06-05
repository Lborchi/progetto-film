<!DOCTYPE html>
<html lang="en">
<head>
    <title>2L FILMS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="immagini/logo.ico" type="image/x-icon" >
    
    <?php
session_start();

$utenteAutenticato = false;
if (isset($_SESSION['utente'])) {
    $utenteAutenticato = true;  
}
   ?>

  </head>
    <body>
          <header>      
            <div class="logo"><a href="index2.php">  <img src="immagini/logo.png"> </a>
            </div> 
        <div class="dropdown">
            <button class="dropbtn"><a href="#" onclick="toggleLoginPopup()">Home</a></button>
        </div>
  <div class="dropdown">
  <button class="dropbtn">Categorie</button>
  <div class="dropdown-content">
    <a href="#" onclick="toggleLoginPopup()"><H3>ANIMAZIONE</H3></a>
    <a href="#" onclick="toggleLoginPopup()"><H3>AZIONE</H3></a>
    <a href="#" onclick="toggleLoginPopup()"><H3>COMICI</H3></a>
    <a href="#" onclick="toggleLoginPopup()"><H3>DRAMMATICI</H3></a>
    <a href="#" onclick="toggleLoginPopup()"><H3>HORROR</H3></a>
    <a href="#" onclick="toggleLoginPopup()"><h3> FANTASCIENZA</H3></a>
    <a href="#" onclick="toggleLoginPopup()"> <H3>FANTASY</H3></a>
    </div>
     </div>
     <div class="dropdown">
     <button class="dropbtn"><a href="#" onclick="toggleLoginPopup()">Consigliati</a></button>
     </div>

     <div class="dropdown">
        <button class="dropbtn"><a href="#" onclick="toggleLoginPopup()">Più visti</a></button>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="#" onclick="toggleLoginPopup()">New entry</a></button>
            </div>
    <div class="link"> <a  href="https://streamingcommunity.codes/"> <img src="immagini/streamingcommunity.png"></a>
    <div class="scritta">Guarda un film</div></div>
   
        <form action="search.php" method="get">
                <input type="text" id="search" placeholder="Cerca...">
                <button type="submit" id="search-btn" value="cerca"><i class="fa fa-search"></i></button>
              </form>

        </header>
      
        
      <div id="accedi">
        <button  onclick="toggleLoginPopup()">ACCEDI</button>
      </div>
        <div id="loginPopup" class="popup">
          <div class="popup-content">
              <span class="close-icon" onclick="toggleLoginPopup()"><i class="fas fa-times"></i></span>
              <h2>Effettua l'accesso</h2>
              <form action="./pagine/accedi.php" method="POST">
                  <input type="text" name="username" placeholder="Username" required><br><br>
                  <input type="password" name="password" placeholder="Password" required><br><br>
                  <input type="submit" value="Accedi">
                  <p>Non hai ancora un account? <a href="#" onclick="toggleRegistratiPopup()" id="registrati-link">Registrati</a></p>
              </form>
          </div>
      </div>      
      
      <script>      
        function toggleLoginPopup() {
          var popup = document.getElementById("loginPopup");
          popup.style.display = (popup.style.display === "none") ? "block" : "none";
        }
      </script>
        
    <div id="registrati"><button  onclick="toggleRegistratiPopup()">REGISTRATI</button></div>

        <div id="registratiPopup"class="popup">
          <div class="popup-content">
              <span class="close-icon" onclick="toggleRegistratiPopup()"><i class="fas fa-times"></i></span>
              <h2>Registrazione</h2>
              <form action='./pagine/registrati.php' method="POST">
                  <input type="text" name="nome" placeholder="Nome" required><br><br>
                  <input type="text" name="cognome" placeholder="Cognome" required><br><br>
                  <input type="text" name="username" placeholder="Username" required><br><br>
                  <input type="text" name="email" placeholder="Email" required><br><br>
                  <input type="password" name="password" placeholder="Password" required><br><br>
                  <input type="submit" value="Registrati">
                  <p>Hai già un account? <a href="#" onclick="toggleLoginPopup()" id="registrati-link">Accedi</a></p>
              </form>
          </div>
      </div>
      
      <script>
          
          function toggleRegistratiPopup() {
           
            var popup = document.getElementById("registratiPopup");
            popup.style.display = (popup.style.display === "none") ? "block" : "none";
          }
      </script>
     
        <div id="menu-principale"><h2>Home</h2></div>
        <div id="scritta_home">Qui puoi leggere tutte le recensioni dei film visti dalla redazione di 2LFilms: le informazioni sulla trama e la nostra critica possono aiutarti a scegliere cosa vedere al cinema o guardare in tv.</div>

      
        <div class="container">
            <div class="image-container">
              <a href="#" onclick="toggleLoginPopup()"><img src="immagini/shazam.png"></a>
              <div class="text-box">
                <a href="#" onclick="toggleLoginPopup()">
                <h2>Shazam! Furia degli Dei: recensione del nuovo film DC</h2>
                </a>
                <p>Shazam! Furia degli Dei è il nuovo film DC, diretto da David F. Sandberg, con Zachary Levi ed Helen Mirren tra i protagonisti del cast. Questa è la recensione.</p>
              </div>
            </div>
            <div class="image-container">
              <a href="#" onclick="toggleLoginPopup()"><img src="immagini/the_whale.jpg"></a>
              <div class="text-box">
                <a href="#" onclick="toggleLoginPopup()">
                <h2>The Whale: il significato nascosto del meraviglioso film di Aronofsky</h2>
                </a>
                <p>La spiegazione del significato e del finale di The Whale, film candidato agli Oscar di Darren Aronofsky in cui Brendan Fraser interpreta un obeso grave.</p>
              </div>
            </div>
            <div class="image-container">
                <a href="#" onclick="toggleLoginPopup()"><img src="immagini/antman.png"></a>
              <div class="text-box">
                <a href="#" onclick="toggleLoginPopup()">
                <h2>Ant-Man and the Wasp: Quantumania, Kang e una fase 5 del MCU che parte nel caos </h2>
                </a>
                <p>Ant-Man and the Wasp: Quantumania, scritto insieme al co-sceneggiatore di Rick and Morty, è un inizio caotico e piuttosto noioso per la fase 5 del MCU.</p>
              </div>
            </div>
          </div>
          
          
    
    <footer>
        <div class="left">
          <p><a href="#" onclick="toggleLoginPopup()">SCRIVI CON NOI</a> <a>/</a> <a href="#" onclick="toggleLoginPopup()">CONTATTI</a> <a>/</a> <a href="#" onclick="toggleLoginPopup()">CHI SIAMO</a></p>
        </div>
        <div class="center">
          <a href="https://instagram.com/luca.borchiero?igshid=ZDdkNTZiNTM="><img src="immagini/logo-ig.png" alt="INSTAGRAM"></a>
        </div>
        <div class="right">
          <p><a href="#" onclick="toggleLoginPopup()">TERMINI E CONDIZIONI</a> <a>/</a> <a href="#" onclick="toggleLoginPopup()">LICENZA</a> <a>/</a> <a href="#" onclick="toggleLoginPopup()">PRIVACY</a></p>
        </div>
      </footer>
      
      
</body>
</html>