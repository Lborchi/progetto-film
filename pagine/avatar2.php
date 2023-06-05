<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Avatar 2</title>
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

        <div class="container1">
            <div class="image-container1">
                <img src="../immagini/avatar2.png">
              <div class="text-box1">
                <h2>Avatar: il sequel del film fanasy leggendario con una risoluzione computerizzata innovativa </h2>
                <p id="firma">DI LUCA BORCHIERO</p>
                <br>
                <p id="titoletto">Avatar 2: La Via dell'Acqua, il film diretto da James Cameron, è il sequel in live action del film campione d'incassi Avatar del 2009.</p>
                <br>
                <p id="firma">CONDIVIDI SU <a id="ig" href="https://www.instagram.com/">INSTAGRAM</a>&nbsp;&nbsp;<a id="facebook" href="https://www.facebook.com/">FACEBOOK</a>&nbsp;&nbsp;<a id="twitter" href="https://twitter.com/">TWITTER</a></p>
              </div>            
            <div class="text-box2">
                <br>
              <div>
                La storia è ambientata diversi anni dopo gli eventi visti nel primo Avatar. Ritroveremo i due protagonisti Jake Sully (Sam Worthington) e Neytiri (Zoe Saldana) ancora insieme e con figli al seguito, pronti a esplorare lo sconfinato mondo di Pandora e ad affrontare nuovi conflitti con l'umanità. La coppia si troverà inoltre a fare i conti con i problemi coniugali, legati all'educazione dei propri figli. È la storia della famiglia Sully, ma anche di un popolo che dovrà affrontare diversi pericoli, nuove battaglie e tragedie per capire fin dove è disposto ad arrivare pur di tenersi al sicuro e sopravvivere.
              </div>
              <br>
              <div id="titoletto">
                AVATAR2: UN FILM CHE STRAVOLGE GLI STANDARD DEL PREQUEL.
              </div>
              <br>
              <div>
                A contrastare lo spirito conquistatore e violento del colonello c’è la dottoressa Grace Augustine (Sigourney Weaver), che vorrebbe entrare in possesso dei giacimenti grazie ad un’azione diplomatica e pacifica. A causa di alcuni fraintendimenti, tuttavia, la linea adottata dalla dottoressa si è rivela inefficace e Quaritch ha ottenuto il consenso per procedere con la forza.
              </div>
              <br>
              <div>
                Del cast fanno parte i nuovi arrivati Kate Winslet, Edie Falco, Michelle Yeoh e Vin Diesel che insieme a Sam Worthington e Zoe Saldana, raggiungono i protagonisti già visti nel primo film Stephen Lang, Sigourney Weaver, Joel David Moore, Matt Gerald e Giovanni Ribisi.Questo non sarà l'ultimo capitolo della serie, James Cameron infatti ha già pianificato la saga di Avatar attraverso altri quattro nuovi film.
              </div>
               <br>
               
               
               
           <h2>Inserisci un commento:</h2>
    
            <form method="post" action="">
              <textarea name="comment" rows="4" cols="50"></textarea><br>
              <input type="submit" value="Invia commento">
            </form>       
            <?php
            $db_host = 'localhost';
            $db_name = 'utenti';
            $db_user = 'root';
            $db_pass = '';
    
             $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
            if (mysqli_connect_errno()) {
              echo "Errore nella connessione al database: " . mysqli_connect_error();
            exit();
            }
    
            if(isset($_POST['comment'])){
            $comment = $_POST['comment'];
        
              if(!empty($comment)){
                $comment = mysqli_real_escape_string($conn, $comment);
            
                  $insert_query = "INSERT INTO comments (comment,utente,pagina)VALUES ('$comment','$username','avatar2')";
              mysqli_query($conn, $insert_query);
            
              }
            }
            if(isset($_POST['delete_comment'])){
              $comment_id = $_POST['delete_comment'];
              
              $delete_query = "DELETE FROM comments WHERE id = '$comment_id'";
              mysqli_query($conn, $delete_query);
          }
            ?>
            <h2>Commenti:</h2>
            
    
            <?php
              //echo '<hr style="background-color: white; margin-top: 10px; margin-bottom: 10px;">';
              $select_query = "SELECT * FROM comments WHERE pagina='avatar2' ORDER BY created_at DESC";
              $result = mysqli_query($conn, $select_query);
    
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                echo '<div class="comment" style="position:relative;">';
                echo '<b><p>'.htmlspecialchars($row['utente']).'</p></b>';
                echo '<p>'.htmlspecialchars($row['comment']).'</p>';
                echo '<form method="post" action="">';
                echo '<input type="hidden" name="delete_comment" value="'.$row['id'].'">';
                echo '<input type="submit" value="Elimina commento">';
                echo '</form>';
                echo '</div>';
              }
            } else {
              echo '<p>Nessun commento presente.</p>';
              }
    
            mysqli_close($conn);
            ?>
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