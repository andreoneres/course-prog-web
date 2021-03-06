<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website feito em homenagem ao eterno Rei do Pop, Michael Jackson!" \>
    <meta name="author" content="André Oliveira Neres" />
    <link rel="stylesheet" type="text/css" href="/assets/css/estilos.css?123" />
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <title>Home | Michael Jackson</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header>
        <nav class="menu">
            <img id="imager" src="./assets/img/mm.png" alt="Logo com a letra 'M'" />
            <!-- LOGO-->
            <div class="logo"></div>
            <!-- MENU -->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="https://michaeljackson.com" target="_blank">Site Oficial</a></li>
                <li><a href="form.php">Formulário</a></li>
            </ul>
        </nav>
    </header>

    <!-- MAIN -->
    <main>
        <div>
            <!-- IMAGEM LADO INFORMAÇÕES -->
            <img src="/assets/img/mj.jpg" id="imgd"
                alt="Imagem de um desenho digital com um dos passos de coreografia mais famosos do Michael Jackson, com a legenda: HIS MUSIC WILL LIVE FOREVER/Tradução: Sua música viverá para sempre." />
        </div>
        <!-- INFORMAÇÕES DO ARTISTA -->
        <div class="bio">
            <h1>Michael Jackson</h1>
            <div id="fink">
                <p> Michael Joseph Jackson foi um cantor, compositor, dançarino, produtor musical (1958-2009).
                    Chamado de “Rei do Pop”, Michael Jackson nasceu em Gary, Indiana, nos EUA,
                    em 29 de agosto de 1958. Quando criança, foi o cantor principal do Jackson 5, o grupo de sua
                    família. Com sua carreira solo, Michael se tornou uma das maiores estrelas pop de todos os
                    tempos.
                    O pai de Michael Jackson trabalhava em uma usina siderúrgica, mas, nas horas vagas, tocava
                    guitarra e era empresário musical sem sucesso. Katherine era testemunha de Jeová e tocava piano
                    na igreja.
                    Em 2009, sua morte gerou controvérsia e foi, posteriormente, considerada homicídio por parte de
                    seu médico, Conrad Robert Murray.
                </p>
            </div>
        </div>

    </main>

    <!-- IMAGENS -->
    <div class="pics">
        <img src="/assets/img/boy.jpg" height="324" left="500px"
            alt="Capa do álbum 'Got to be there' do Jackson Five" />
        <img src="/assets/img/thriller.jpeg" height="324"
            alt="Capa do álbum 'Thriller' do Michael Jackson, anteriormente chamada de 'Starlight'" />
        <img src="/assets/img/nologo.webp" height="324"
            alt="Michael Jackson ganha programa de rádio no serviço Sirius XM" />
        <img src="/assets/img/xcape.jpg" height="324" alt="Capa do álbum 'xCape' do Michael Jackson" />
    </div>


    <div class="twodivs">
        <!-- VÍDEO YOUTUBE -->
        <div class="youtube">
            <h3>Música: They Don't Care About Us (Brazil)</h3>
            <iframe width="580" height="335" src="https://www.youtube.com/embed/QNJL6nfu__Q" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <!-- TABELA COM AGENDA -->
        <div class="agenda">
            <h3>Agenda de Shows</h3>
            <table id="tabela">
                <tr>
                    <td><strong>Local</strong></td>
                    <td><strong>Data</strong></td>
                </tr>
                <tr>
                    <td>Campinas - São Paulo - BR</td>
                    <td>26 a 30 de março de 2025</td>
                </tr>
                <tr>
                    <td>Orlando - Califórnia - EUA</td>
                    <td>20 a 23 de março de 2025</td>
                </tr>
                <tr>
                    <td>Miami - Flórida - EUA</td>
                    <td>12 a 16 de abril de 2025</td>
                </tr>
                <tr>
                    <td>Los Angeles - Califórnia - EUA</td>
                    <td>15 a 20 de abril de 2025</td>
                </tr>
                <tr>
                    <td>Boston - Massachusetts - EUA</td>
                    <td>23 a 25 de abril de 2025</td>
                </tr>
            </table>
        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <span>© 2021 MJJ Music. Powered by Sony Music Entertainment. All Rights Reserved.</span>
            <nav>
                <ul class="redes-sociais">
                    <li>
                        <a href="https://www.instagram.com/michaeljackson/" target="_blank">
                            <img src="assets/img/instagram.svg" alt="Instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/michaeljackson/" target="_blank">
                            <img src="assets/img/facebook.svg" alt="Facebook">
                        </a>
                    </li>

                    <li>
                        <a href="https://www.youtube.com/c/MichaelJackson?sub_confirmation=1/" target="_blank">
                            <img src="assets/img/youtube.svg" alt="Youtube">
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </footer>
</body>

</html>