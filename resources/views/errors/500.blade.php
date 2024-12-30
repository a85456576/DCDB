<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>500  Server error</title>
    <style>
        @font-face {
            font-family: Cairo;
            src: url("../fonts/CairoLight.ttf");
            font-weight: normal !important;
            font-style: normal !important;
        }
        html,
        body {
            height: 100%;
            margin: 0;
        }

        html {
            font-size: 62.5%;
        }

        body {
            font-family: Cairo, sans-serif;
            font-size: 1.5rem;
            color: #293b49;
        }

        a {
            text-decoration: none;
        }

        .wrapper {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .error {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-content: center;
        }

        .number {
            font-weight: 900;
            font-size: 15rem;
            line-height: 1;
        }

        .illustration {
            position: relative;
            width: 12.2rem;
            margin: 0 2.1rem;
        }

        :where(.circle, .clip, .paper, .eyes, .eye, .cheeks, .mouth) {
            position: absolute;
        }

        .circle {
            bottom: 0;
            left: 0;
            width: 12.2rem;
            height: 11.4rem;
            border-radius: 50%;
            background-color: #293b49;
        }

        .clip {
            bottom: 0.3rem;
            left: 50%;
            transform: translateX(-50%);
            overflow: hidden;
            width: 12.5rem;
            height: 13rem;
            border-radius: 0 0 50% 50%;
        }

        .paper {
            bottom: -0.3rem;
            left: 50%;
            transform: translateX(-50%);
            width: 9.2rem;
            height: 12.4rem;
            border: 0.3rem solid #293b49;
            background-color: white;
            border-radius: 0.8rem;
        }

        .paper::before {
            content: "";
            position: absolute;
            top: -0.7rem;
            right: -0.7rem;
            width: 1.4rem;
            height: 1rem;
            background-color: white;
            border-bottom: 0.3rem solid #293b49;
            transform: rotate(45deg);
        }

        .face {
            position: relative;
            margin-top: 2.3rem;
        }

        .eyes {
            top: 0;
            left: 2.4rem;
            width: 4.6rem;
            height: 0.8rem;
        }

        .eye {
            bottom: 0;
            width: 0.8rem;
            height: 0.8rem;
            border-radius: 50%;
            background-color: #293b49;
            animation-name: eye;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }

        .eye__left {
            left: 0;
        }

        .eye__right {
            right: 0;
        }

        @keyframes eye {
            0% {
                height: 0.8rem;
            }

            50% {
                height: 0.8rem;
            }

            52% {
                height: 0.1rem;
            }

            54% {
                height: 0.8rem;
            }

            100% {
                height: 0.8rem;
            }
        }

        .cheeks {
            top: 1.6rem;
            width: 1rem;
            height: 0.2rem;
            border-radius: 50%;
            background-color: #fdabaf;
        }

        .cheeks__left {
            left: 1.4rem;
        }

        .cheeks__right {
            right: 1.4rem;
        }

        .mouth {
            top: 3.1rem;
            left: 50%;
            width: 1.6rem;
            height: 0.2rem;
            border-radius: 0.1rem;
            transform: translateX(-50%);
            background-color: #293b49;
        }

        .text {
            margin-top: 5rem;
            font-size: 2.6em;
            text-align: center;
            font-family: Cairo !important;
            font-weight: 700;
            color: #293b49;
        }

        .button {
            margin-top: 4rem;
            padding: 1.2rem 3rem;
            color: white;
            background-color: #04cba0;
        }

        .button:hover {
            background-color: #01ac88;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="error">
            <div class="number">5</div>
            <div class="illustration">
                <div class="circle"></div>
                <div class="clip">
                    <div class="paper">
                        <div class="face">
                            <div class="eyes">
                                <div class="eye eye__left"></div>
                                <div class="eye eye__right"></div>
                            </div>
                            <div class="cheeks cheeks__left"></div>
                            <div class="cheeks cheeks__right"></div>
                            <div class="mouth"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="number">0</div>
        </div>
        <div class="text">Server erorr</div>
    </div>
</body>
</html>
