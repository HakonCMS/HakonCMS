<!DOCTYPE html>
<html>
    <head>
        <title>Hakon</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            a {
                text-decoration: none;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title, .title a {
                color: gray;
                font-size: 96px;
            }

            .title a:hover {
                color: black;
            }

            .subtitle, .subtitle a {
                color: gray;
                font-weight: bold;
            }

            .subtitle a:hover {
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <?php echo e(Html::Hook("Core::Admin::Template::Menu")); ?>

                <div class="title"><a href="https://github.com/efuzyon/hakon">Hakon</a></div>
                <div class="subtitle">Powered by <a href="https://github.com/efuzyon" target="_blank">eFuzyon Technology</a></div>
            </div>
        </div>
    </body>
</html>
