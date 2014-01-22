<!doctype html>
<html lang="fr-FR">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Xmas Rush - Catch them all!</title>
    <meta name="description" content="Become a Xmas Rushaholic, and help Santa catch gifts through 10 amazing levels! Download the game on the App Store and on the Google Play Store.">
	<meta name="keywords" content="Xmas, Christmas, Rush, Jeu, Game, Santa, Père Noël, gifts, cadeaux, App Store, Android, iPhone, Google Play Store">
    
    <link rel="icon" type="image/png" href="img/favicon.png">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    
    <?php Html::css(); ?>
</head>
    <body>
        <div id="main-content">
        <?php View::get("main"); ?>
        </div>

        <?php Html::js(); ?>
        <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-46270974-1']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        </script>
    </body>
</html>