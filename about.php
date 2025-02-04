<?php include 'header.php'; ?>

<main>
   <h1>About myself</h1>
    <p>MY FIRST WEB PAGE</p1>
    <img src="images\photo.jpeg" alt="About Us Image" class="about-photo">

    <?php
     $team=["Gurveer- developer"];
     ?>

     <ul>
        <?php foreach($team as $member) : ?>
            <li><?php echo $member ;?></li>
            <?php endforeach;?>
        </ul>
        </main>
        <?php include 'footer.php'; ?>