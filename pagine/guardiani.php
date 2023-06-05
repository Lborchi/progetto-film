<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guardiani</title>
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
                <img src="../immagini/guardiani.png">
              <div class="text-box1">
                <h2>Guardiani Della Galassia: il nuovo film firmato Marvel </h2>
                <p id="firma">DI LUCA BORCHIERO</p>
                <br>
                <p id="titoletto">Guardiani della Galassia è un film del 2014 diretto da James Gunn.</p>
                <br>
                <p id="firma">CONDIVIDI SU <a id="ig" href="https://www.instagram.com/">INSTAGRAM</a>&nbsp;&nbsp;<a id="facebook" href="https://www.facebook.com/">FACEBOOK</a>&nbsp;&nbsp;<a id="twitter" href="https://twitter.com/">TWITTER</a></p>
              </div>            
            <div class="text-box2">
                <br>
              <div>
                Dopo la morte di sua madre a causa di un tumore, un bambino viene preso dai Ravagers, un gruppo di pirati contrabbandieri extraterrestri guidati dal loro capo Yondu Udonta.
              </div>
              <br>
              <div id="titoletto">
                GUARDIANI DELLA GALASSIA: UN FILM EMOZIONANTE E COMICO ALLO STESSO TEMPO.
              </div>
              <br>
              <div>
                Ventisei anni dopo, ritroviamo Peter Quill (Chris Pratt), il ragazzo che era stato rapito, sul pianeta Morag, intento a rubare un'oscura sfera chiamata l'Orb. Durante la missione si scontra con Korath, un luogotenente della razza aliena dei Kree, capitanato da Ronan l'accusatore. Quill riesce ad avere la meglio sull'avversario e ad allontanarsi dal pianeta insieme alla sfera. Yondu, conoscendo il valore dell'oggetto e venendo a sapere del furto da parte dell'ex membro del suo equipaggio, mette una taglia sulla sua testa. Ronan, dopo il fallimento di Korath, invia Gamora (Zoe Saldana), la sua guerriera migliore, a recuperare l’Orb.
              </div>
              <br>
              <div>
                Lo scopo di Quill è solo quello di vendere la sfera: per questo si reca a Xandar, la capitale dell'impero Nova, alla ricerca di Broker, un potenziale acquirente. Inaspettatamente, il cliente interrompe le negoziazione in quanto spaventato da Ronan e dal suo desiderio di avere l’artefatto. Gamora, giunta in città, riesce a sottrarre l'Orb a Quill, che si getta al suo inseguimento.
              </div>
               <br>
               <div>
                Nello stesso momento, i mercenari Rocket Raccoon (voce originale Bradley Cooper), un procione antropomorfo, e Groot (voce originale Vin Diesel), un alieno dalle sembianze di un albero, attirati dalla taglia su Quill, intervengono per catturarlo. Nella lotta che ne segue tutti e quattro vengono arrestati dalla polizia dell’impero e imprigionati a Kyln, un penitenziario spaziale da dove nessuno è mai fuggito.
              </div>
               <br>
               <div>
                All'interno della fortezza c'è Drax il Distruttore (Dave Bautista), un uomo che vuole a tutti i costi uccidere Ronan, causa della morte della sua famiglia. Nel tentativo di fare fuori Gamora, Drax scopre che in realtà la guerriera ha tradito il leader dei Kree. Lo strano gruppo formato da Quill, Rocket, Groot, Drax e Gamora si allea dunque per fuggire dalla prigione e portare l’Orb lontano da Ronan. Il loro piano prevede di venderlo al Collezionista, acquirente di un lontano pianeta, ma qualcosa andrà storto...
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
    
          $insert_query = "INSERT INTO comments (comment,utente,pagina)VALUES ('$comment','$username',guardiani)";
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
      $select_query = "SELECT * FROM comments WHERE pagina='guardiani' ORDER BY created_at DESC";
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