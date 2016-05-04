<!DOCTYPE html>
<html>
    <head>
        <title>Hakon</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

        <style>
            html, body {
                height: 100%;
            }

            a {
                text-decoration: none!important;
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

            .btn-info {
            	color: white!important;
            	font-weight: bold;
            	color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><a href="https://github.com/efuzyon/hakon">Hakon</a></div>
                <div class="subtitle">Powered by <a href="https://github.com/efuzyon" target="_blank">eFuzyon Technology</a></div><br />
                <a href="{{ url("/install/info") }}" class="btn btn-info">Install &raquo;</a>
            </div>
        </div>
    </body>
</html>
