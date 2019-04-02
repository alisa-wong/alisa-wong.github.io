<?php 
    $nav = [['index.php', 'Work'], ['about.php', 'About'], ['media/AlisaWong_Resume.pdf target="_blank"', 'Resume']];
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <a href='index.php'><img src='images/signature.png'></a>
    <ul>
        <?php foreach ($nav as $navElement) {
            if ($currentPage == $navElement[0]) {
                $selected = 'current';
            } else {
                $selected = '';
            }
            echo '<li class="' . $selected . '"><a href =' . $navElement[0] . '>' . $navElement[1] . '</a></li>';
        } ?>
    </ul>
</nav>