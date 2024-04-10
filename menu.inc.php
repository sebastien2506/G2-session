<nav>
        <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="info.php">Information</a></li>
            <li><a href="photos.php">Photos</a></li>
            <?php
            if(isset($_SESSION['monID']) && 
            $_SESSION['monID'] == session_id()) :
            ?>
            <li><a href="admin.php">Administration</a></li>
            <li><a href="disconnecte.php">deconnecter</a></li>
            <?php
            else:
            ?>
                <li><a href="connection">Se connecter</a></li>
            <?php
            endif;
            ?>
        </ul>
    </nav>