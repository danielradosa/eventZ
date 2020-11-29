<div class="bottomNav">
    <?php wp_nav_menu(array("theme_location" => "footer-menu"))
?>

</div>

<p>footer.php | Copyright Penda Svane 2020 </p>

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>

</body>
</html>
