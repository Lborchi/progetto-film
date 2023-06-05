
<!DOCTYPE html>
<html lang="en">
<head>
    <title>2L FILMS</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="../immagini/logo.ico" type="image/x-icon" >


  </head>
  <body>
        <header>      
          <div class="logo"><a href="index.php">  <img src="../immagini/logo.png"> </a>
          </div> 
      <div class="dropdown">
          <button class="dropbtn"><a href="../pagine/home.php">Home</a></button>
      </div>
<div class="dropdown">
<button class="dropbtn">Categorie</button>
<div class="dropdown-content">
  <a href="../pagine/animazione.php"><H3>ANIMAZIONE</H3></a>
  <a href="../pagine/azione.php"><H3>AZIONE</H3></a>
  <a href="../pagine/comici.php"><H3>COMICI</H3></a>
  <a href="../pagine/drammatici.php"><H3>DRAMMATICI</H3></a>
  <a href="../pagine/horror.php"><H3>HORROR</H3></a>
  <a href="../pagine/fantascienza.php"><h3> FANTASCIENZA</H3></a>
  <a href="../pagine/fantasy.php"> <H3>FANTASY</H3></a>
  </div>
   </div>
   <div class="dropdown">
   <button class="dropbtn"><a href="../pagine/consigliati.php">Consigliati</a></button>
   </div>

   <div class="dropdown">
      <button class="dropbtn"><a href="../pagine/piu_visti.php">Più visti</a></button>
      </div>
      <div class="dropdown">
          <button class="dropbtn"><a href="../pagine/new_entry.php">New entry</a></button>
          </div>
  <div class="link"> <a  href="https://streamingcommunity.bike/"> <img src="../immagini/streamingcommunity.png"></a>
  <div class="scritta">Guarda un film</div></div>
 
      <form>
              <input type="text" id="search" placeholder="Cerca...">
              <button type="submit" id="search-btn"><i class="fa fa-search"></i></button>
            </form>

      </header>
    <div id="accedi"><button><a href="logout.php">LOGOUT</a></button></div>
    <div id="benvenuto">
      <?php
            session_start();
            $username = $_SESSION["username"];
      
			$con = new mysqli ("localhost","root","","utenti");
            if (mysqli_connect_error()) {
            echo("connessione non effettuata:" .mysqli_connect_error(). "<br>");
            exit();
            }

			$sql = "SELECT username, nome, cognome 
					FROM registrazione 
					WHERE username='$username'";
			$ris = $con->query($sql) or die("<p>Query fallita!</p>");
			foreach($ris as $riga){
                $nome = $riga["nome"];
                $cognome = $riga["cognome"];
				echo "<div>Benvenuto <b>$nome $cognome</b></div>";
			}
		?>
    </div>
      <div id="menu-principale"><h2 id="home">Home</h2></div>
      <div id="scritta_home">Qui puoi leggere tutte le recensioni dei film visti dalla redazione di 2LFilms: le informazioni sulla trama e la nostra critica possono aiutarti a scegliere cosa vedere al cinema o guardare in tv.</div>
      <div class="container">
          <div class="image-container">
            <a href="../pagine/shazam.php"><img src="../immagini/shazam.png"></a>
            <div class="text-box">
              <a href="../pagine/shazam.php">
              <h2>Shazam! Furia degli Dei: recensione del nuovo film DC</h2>
              </a>
              <p>Shazam! Furia degli Dei è il nuovo film DC, diretto da David F. Sandberg, con Zachary Levi ed Helen Mirren tra i protagonisti del cast. Questa è la recensione.</p>
            </div>
          </div>
          <div class="image-container">
            <a href="../pagine/whale.php"><img src="../immagini/the_whale.jpg"></a>
            <div class="text-box">
              <a href="../pagine/whale.php">
              <h2>The Whale: il significato nascosto del meraviglioso film di Aronofsky</h2>
              </a>
              <p>La spiegazione del significato e del finale di The Whale, film candidato agli Oscar di Darren Aronofsky in cui Brendan Fraser interpreta un obeso grave.</p>
            </div>
          </div>
          <div class="image-container">
              <a href="../pagine/antman.php"><img src="../immagini/antman.png"></a>
            <div class="text-box">
              <a href="../pagine/antman.php">
              <h2>Ant-Man and the Wasp: Quantumania, Kang e una fase 5 del MCU che parte nel caos </h2>
              </a>
              <p>Ant-Man and the Wasp: Quantumania, scritto insieme al co-sceneggiatore di Rick and Morty, è un inizio caotico e piuttosto noioso per la fase 5 del MCU.</p>
            </div>
          </div>
        </div>
        
  
  <footer>
      <div class="left">
        <p><a href="../pagine/scrivi_con_noi.php">SCRIVI CON NOI</a> <a>/</a> <a href="../pagine/contatti.php">CONTATTI</a> <a>/</a> <a href="../pagine/chi_siamo.php">CHI SIAMO</a></p>
      </div>
      <div class="center">
        <a href="../https://instagram.com/luca.borchiero?igshid=ZDdkNTZiNTM="><img src="../immagini/logo-ig.png" alt="INSTAGRAM"></a>
      </div>
      <div class="right">
        <p><a href="../pagine/termini.php">TERMINI E CONDIZIONI</a> <a>/</a> <a href="../pagine/licenza.php">LICENZA</a> <a>/</a> <a href="../pagine/privacy.php">PRIVACY</a></p>
      </div>
    </footer>
    
    
</body>
</html>