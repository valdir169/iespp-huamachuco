<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contacto | Camara Comercio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        main {  
            width: 90%;
            margin: auto
        }

        .header-img {
            width: 150px;
            height: 250px;
            margin: auto;
        }

        .header {
            text-align: center;
            padding: 1rem 0;
        }

        .header__title {
            font-size: 1.5;
            text-align: center;
            color: #004592;
            line-height: 30px;
        }

        .header__title>a {
            text-decoration: none;
            color: #004592;
        }

        .header__title:hover {
            text-decoration: underline;
            color: #004592;
        }

        .header__brand {
            text-transform: uppercase;
            font-size: 1rem;
            text-align: center;
        }

        .content_phone {
            margin-bottom: 2rem;
        }

        .phone__title {
            color: #004592;
            font-size: 16px;
            line-height: 0
        }

        .phone__number {
            text-decoration: none;
            color: #004592;
            display: flex;
            flex-direction: row;
            justify-content: start;
            align-items: center;
        }

        .phone__number:hover {
            color: #004592;
            transition: all 500ms ease-in-out;
        }

        .phone__number>i {
            color: #005C4B;
            font-size: 2rem;
            margin-right: 5px;
        }

        .content_message {
            margin-bottom: 1rem;
        }

        .message__title {
            color: #004592;
            font-size: 18px;
            line-height: 1;
        }

        .message__text {
            text-indent: 1rem;
        }

        .footer {
            margin-top: 2rem;
            background-color: #192537;
            border-radius: 1rem 1rem 0 0;
            padding: 1rem;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .footer__social {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

        .social__network {
            text-align: center;
            color: #FFFFFF;
        }
    </style>

</head>

<body>
    <main>
        <div class="header">
            <img class="header-img" src="{{ asset('images/others/logo.png') }}" alt="Iespp Jfsc Huamachuco">
            <h1 class="header__title"><a href="#">IESPP - JOŚE FAUSTINO SANCHEZ CARRION</a></h1><span
                class="header__brand">Dudas o Consultas </span>
        </div>

        <div class="content">
            <div class="content_phone">
                <h4 class="phone__title">Nombres y Apellidos:</h4>{{ $contact['name'] }}
            </div>
            <div class="content__message">
                <h4 class="message__title">Correo electrónico: </h4><span class="message__text">{{ $contact['email'] }}
                </span>
            </div>
            <div class="content__message">
                <h4 class="message__title">Número de celular: </h4><span
                    class="message__text">{{ $contact['cellphone'] }} </span>
            </div>
            <div class="content__message">
                <h4 class="message__title">Duda o Consulta: </h4><span class="message__text">{{ $contact['message'] }}
                </span>
            </div>
        </div>
    </main>
</body>

</html>
