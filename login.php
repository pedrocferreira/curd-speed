<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;700&family=Poppins&display=swap');


    h1 {
        text-align: center;
        padding: 0;
        margin: 0;
        text-align: center;
    }

    label {
        background-color: rgb;
        padding: 2px;

    }

    body {
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #7f53ac;
        background-image: linear-gradient(315deg, #7f53ac 0%, #647dee 74%);
        font-family: 'Inter';
    }


    #window {
        background-color: white;
        padding: 6rem 5rem 6rem 5rem;
        border-radius: 6px;
        width: 230px;
        min-width: 20px;
        box-shadow: 5px 5px 15px black;
    }

    #LoginBtn {
        width: 100%;
        padding: .5rem;
        background-color: black;
        color: white;
        font-size: 1rem;
        cursor: pointer;
        font-weight: 600;
        border: solid black 2px;
        font-family: 'Inter';
        border-radius: 1.5px;
        transition: .4s;

    }

    #LoginBtn:hover {
        color: black;
        background-color: white;
        border: solid black 2px;
        background-color: rgba(156, 156, 156, 0.24);
    }

    input {
        width: 100%;
        border: none;
        border-bottom: black solid 1px;
        font-size: 1.1rem;
        padding: 0;
    }

    input:focus {
        background-color: rgba(156, 156, 156, 0.12);
        border-bottom: black solid 1px;
    }

    *:focus {
        outline: none;
        border: none;
    }

    .data {
        padding: 0;
        width: 100%;
    }

    a {
        text-align: center;
        font-family: monospace;
        font-size: 1rem;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyper CMS</title>
</head>

<body>

    <body>

        <div id="window">
            <h1> Login </h1>
            <br>
            <br>
            <br>
            <div class="data">
                <label for="username">
                    <br>
                    <input id="username" type="text" name="" placeholder="Username">
                </label>
                <br>
                <br>
                <br>

                <label for"user-pin">

                    <br>
                    <input type="password" id"user-pin" placeholder="Senha">
                    <br>
                    <br>
                    <br>
                    <button id="LoginBtn" type="submit"> Entrar </button>

                    <br>
                    <br>
                    <br>
                    <div style="text-align: center;">
                        <button onclick="sefode()"><a> Esqueceu a senha? </a></button>
                    </div>
                </label>
            </div>
            <script>
                function sefode() {

                    alert("SE FODE;");
                }
            </script>


        </div>

    </body>

</html>