<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projeto_01</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="descripition" content="Descrição do meu website">
    <meta charset="UTF-8" />
</head>
<body>

    <header>
        <div class="center">
            <div class="logo left">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" require />
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div><!--center-->
    </section>

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Carlos Roberto</h2>
                <p> O desenvolvimento web é a área da tecnologia voltada à construção de sites, aplicativos, 
                    softwares, bancos de dados e quaisquer outras ferramentas que, de certa forma, constroem 
                    a internet como a conhecemos hoje. No geral, os profissionais que trabalham nestas áreas
                    são os programadores, ou desenvolvedores web, essas pessoas são capacitadas para 
                    compreender, manusear e se utilizar de linguagens de programação para construir 
                    sistemas complexos voltados ao serviço do usuário. 
                </p>
                <p>
                    Java é uma linguagem de programação orientada a objetos que é capaz de, entre outras 
                    funções, desenvolver softwares que rodam em diferentes sistemas operacionais sem que 
                    seja necessário modificá-los. Esta linguagem é uma derivação das anteriores C e C++, 
                    tecnologias muito potentes, porém um pouco complexas demais para os padrões atuais. 
                </p>
            </div><!--w50-->

            <div class="w50 left">
                <!--Pegar imagen depois-->
                <img class="right" src="./image/profile.jpg" />
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-css3-alt"></i></h3>
                <h4>CSS3</h4>
                <P>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley</P>
            </div><!--box-especialidade-->
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h4>html5</h4>
                <P>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley</P>
            </div><!--box-especialidade-->
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h4>Javascript</h4>
                <P>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley</P>
            </div><!--box-especialidade-->
            <div class="clear"></div>
        </div><!--center-->
    </section>

    <section class="extras">
        
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    ``is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley``
                    </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    ´´is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley``
                    </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p class="depoimento-descricao">
                    ´´is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley``
                    </p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
            </div><!--w50-->

            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley</li>
                        <li>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley</li>
                        <li>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley</li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--extras-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <!--Jquery usando CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>
</html>