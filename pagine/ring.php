<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>The ring</title>
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
                <img src="../immagini/ring.png">
              <div class="text-box1">
                <h2>The Ring: recensione del nuovo fil horror </h2>
                    <p id="firma">DI LUCA BORCHIERO</p>
                    <br>
                    <p id="titoletto">The Ring è un film del 2002 diretto da Gore Verbinski.</p>
                    <br>
                    <p id="firma">CONDIVIDI SU <a id="ig" href="https://www.instagram.com/">INSTAGRAM</a>&nbsp;&nbsp;<a id="facebook" href="https://www.facebook.com/">FACEBOOK</a>&nbsp;&nbsp;<a id="twitter" href="https://twitter.com/">TWITTER</a></p>
                  </div>            
                <div class="text-box2">
                    <br>
                  
                  <div id="titoletto">
                    THE RING, LA TRAMA DI UN FILMA CARICO DI ANSIA E PAURA.
                  </div>
                  <br>
                  <div>
                    Le adolescenti Katie e Becca discutono della leggenda di una videocassetta maledetta: chi la guarda muore dopo sette giorni. Katie confessa di aver visto il filmato con i suoi amici la settimana precedente e durante la notte viene uccisa da una forza sconosciuta. Al suo funerale, la madre Ruth esorta sua sorella Rachel (Naomi Watts), giornalista di Seattle, ad indagare sulla morte della figlia che è stata ritrovata in un armadio con il corpo sfregiato.
                  </div>
                  <br>
                  <div>
                    Rachel scopre così che anche gli amici di sua nipote sono stati uccisi in strani modi la stessa notte. Si reca successivamente allo Shelter Mountain Inn, il rifugio in montagna dove Katie vide il presunto nastro maledetto: mentre indaga sul gestore della locanda, nota una videocassetta non contrassegnata su uno scaffale e la ruba.
                  </div>
                   <br>
                   <div>
                    Dopo aver preso la stessa stanza in cui Katie aveva soggiornato, guarda con riluttanza il nastro: il video mostra immagini raccapriccianti e inquietanti, che culminano con un pozzo in un campo vuoto. Al termine della registrazione, riceve una telefonata da una voce sconosciuta di bambina che sussurra "sette giorni".
                    A quel punto Rachel chiede aiuto al suo ex Noah (Martin Henderson), un video analista. Guardano il nastro insieme e ne fanno una copia in modo che entrambi possano continuare ad indagare, per riuscire a capire da dove provenga. La giornalista scopre le immagini nascoste di un faro e identifica una donna: Anna Morgan, un'allevatrice ippica che si suicidò insieme alla sua bambina Samara, dopo che alcuni dei suoi cavalli, diventati pazzi, annegarono al largo dell'isola di Moesko. Così Rachel decide di andare a parlare con Richard (Brian Cox), il vedovo della donna, per cercare di svelare il mistero...
                  </div>
                   <br>
                   <h2>CURIOSITÀ SU THE RING</h2>
                   <div>
                    La pellicola è un remake del film diretto da Hideo Nakata del 1998, a sua volta adattamento del libro di Koji Suzuki, ispirato alla storia vera di Chizuko Mifune, nata nel 1886 e convinta di essere una chiaroveggente. La donna si suicidò nel 1910 con del veleno. Prima che la parte di Rachel fosse assegnata a Naomi Watts, fu offerta a Jennifer Love Hewitt, Gwyneth Paltrow, Jennifer Connelly e Kate Beckinsale.Il film è il remake horror di maggior successo con oltre 250 milioni di dollari incassati.
     
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
    
          $insert_query = "INSERT INTO comments (comment,utente,pagina)VALUES ('$comment','$username','ring)";
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
      $select_query = "SELECT * FROM comments WHERE pagina='ring' ORDER BY created_at DESC";
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