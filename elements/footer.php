    </div>
    <?=$app->get('parts/bot')?>

    <script src="<?=$app->url?>bower_components/jquery/dist/jquery.min.js"></script>
    <script>window.app_url = '<?=$app->url?>'</script>
    <script>window.app_server_url = '<?=$app->server_url?>'</script>

    <script src="<?=$app->url?>assets/js/libs/prism.js"></script>
    <script src="<?=$app->url?>assets/js/libs/waypoint.js"></script>
    <script src="<?=$app->url?>assets/js/libs/waysticky.js"></script>
    <script src="<?=$app->url?>assets/js/script.js"></script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </body>
</html>