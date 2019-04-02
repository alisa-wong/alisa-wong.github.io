<?php 
    $nav = [['about.php', '../about.php', 'About'], ['media/AlisaWong_Resume.pdf target="_blank"', 'media/AlisaWong_Resume.pdf target="_blank"', 'Resume']];
    $work = ['callbaxx.php'];
    $workSelect = '';
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <a href='../index.php'><img src='../images/signature.png'></a>
    <ul>
        <?php foreach ($work as $workElement) {
            if ($currentPage == $workElement || $currentPage == 'index.php') {
                $workSelect = 'current';
            } else {
                $workSelect = '';
            }
        } 
        echo '<li class="' . $workSelect . '"><a href="index.php">Work</a></li>';
        ?>
        <?php foreach ($nav as $navElement) {
            if ($currentPage == $navElement[0]) {
                $selected = 'current';
            } else {
                $selected = '';
            }
            echo '<li class="' . $selected . '"><a href =' . $navElement[1] . '>' . $navElement[2] . '</a></li>';
        } ?>
    </ul>
</nav>