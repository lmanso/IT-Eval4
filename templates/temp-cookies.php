<div class="flex flex-col">
    <?php
        echo '<p>';
        echo '<ul class="list-style justify-around">';
        foreach ($_POST['action'] as $key => $value) {
            setcookie($key, $value, time() + 365 * 24 * 3600, null , null, false, true );
            echo '<li>' . $value . '</li>';
            }
        echo '</ul>';
        echo '</p>';
?>
</div>