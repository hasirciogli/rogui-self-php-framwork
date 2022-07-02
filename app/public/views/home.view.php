<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        body{
            font-family: Verdana;
            color: white;
            padding: 0;
            margin: 0;
        }

        p{
            text-align: center;
        }

        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
        }

        .form{
            width: 600px;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
        }
        .form > .header {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 60px;

            font-family: Trebuchet MS;
            font-weight: Bold;
            font-size: 30px;


            color: black;
        }

        .form > .items {
            display: flex;
            flex-wrap: wrap;
            background: #545454;
            border-radius: 10px;
            overflow: hidden;
        }

        .form > .items > .item {
            display: flex;
            justify-content: center;
            align-items: center;

            flex-direction: column;
        }

        .form > .items > .item:nth-child(1){
            width: calc(100% / 2 - 1px);
            height: calc(340px / 2 - 1px);
            border-right: 1px solid black;
            border-bottom: 1px solid black;
        }

        .form > .items > .item:nth-child(2){
            width: calc(100% / 2 - 1px);
            height: calc(340px / 2 - 1px);
            border-bottom: 1px solid black;
        }

        .form > .items > .item:nth-child(3){
            width: calc(100% / 2 - 1px);
            height: calc(340px / 2 - 1px);
            border-right: 1px solid black;
        }

        .form > .items > .item:nth-child(4){
            width: calc(100% / 2 - 1px);
            height: calc(340px / 2 - 1px);
        }
    </style>
</head>
<body>
    <div class="kksideko-loader-sider">
        <div id="kksideko-sidler-left" class="kksideko-loader-sider-left"></div>
        <div id="kksideko-sidler-right" class="kksideko-loader-sider-right"></div>
        <div class="kksideko-loader">
            <div class="kksideko-loader-spinner"></div>
        </div>
    </div>

    <div class="container">
        <div class="form">
            <div class="header">ROGUI</div>
            <div class="items">
                <div class="item">
                    <h3>Easy Design</h3>
                    <p>
                        Free designable css and javascript system. Make website for easy
                    </p>
                </div>
                <div class="item">
                    <h3>Migration</h3>
                    <p>
                        Database migration system like laravel but its beta now.
                    </p>
                </div>
                <div class="item">
                    <h3>Controller</h3>
                    <p>
                        Easy controller and model system. (Router is best!);
                    </p>
                </div>
                <div class="item">
                    <h3>API</h3>
                    <p>
                        Make apı with our rest api (wait 1.8 version...) that's beta right now;
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>