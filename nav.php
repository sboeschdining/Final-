<!--######################     Main Navigation   ########################## -->
<nav>
<ol>
<?php
/* This sets the current page to not be a link. Repeat this if block for
 *  each menu item */
if ($path_parts['filename'] == "index") {
    print '<li class="activePage">index</li>';
} else {
    print '<li><a href="index.php">Home</a></li>';
}
/* example of repeating */
if ($path_parts['filename'] == "womensteam") {
    print '<li class="activePage">womensteam</li>';
} else {
    print '<li><a href="WomensTeam.php">Womens Team</a></li>';
}
/* example of repeating */
if ($path_parts['filename'] == "mensteam") {
    print '<li class="activePage">menssteam</li>';
} else {
    print '<li><a href="MensTeam.php">Mens Team</a></li>';
}
/* example of repeating */
if ($path_parts['filename'] == "meetthecoaches") {
    print '<li class="activePage">meetthecoaches</li>';
} else {
    print '<li><a href="Meetthecoaches.php">Meet The Coaches</a></li>';
}
/* example of repeating */
if ($path_parts['filename'] == "Belfield") {
    print '<li class="activePage">Belfield</li>';
} else {
    print '<li><a href="Belfield.php">Belfield</a></li>';
}
?>
</ol>
</nav>
