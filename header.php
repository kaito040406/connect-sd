<!DOCTYPE html>
<html lang="en">

<head>
    <title>matching</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <!-- CSSを読み込んだ後にjsを読み込むようにしましょう -->
    <!-- <script src="script.js"></script> -->
    <!-- デフォルトのjqを削除 -->
    <?php
    wp_deregister_script('jquery');
    wp_head();
    ?>

    <!-- jquery読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    </script>
</head>

<body>
    <div id="myPageContent" class="container-fluid">
        <section id="home">
            <div class="container">
                <div class="top">
                    <!-- <div class="flex"> -->
                    <div class="top-logo">
                        <div class="top-logo-img">
                            <a href=""><img src="http://matchingwp.local/wp-content/uploads/2021/04/CONNECT企業とインフルエンサーをつなぐ.png" alt=""></a>
                        </div>
                    </div>
                    <div class="top-me">
                        <!-- <p>インフルエンサーと、商品やサービスをPRしたい企業のマッチングプラットフォーム</p> -->
                    </div>
                    <div class="top-bo">
                        <div class="panel　x ">
                            <a href=""><button>ログイン</button></a>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <?php wp_head(); ?>