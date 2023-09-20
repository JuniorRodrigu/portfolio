<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="stylesheet" href="./style.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Portfolio</title>
</head>

<body>
    <div class="container">
        <nav id="header">
            <div class="nav-logo">
                <a href="#home" class="nav-name">Dev</a>
                <span>.</span>
            </div>
            <div class="nav-menu" id="myNavMenu">
                <ul class="nav_menu_list">
                    <li class="nav_list">
                        <a href="#home" class="nav-link active-link">Home</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="#about" class="nav-link">About</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="#projects" class="nav-link">Projects</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="#contact" class="nav-link">Contact</a>
                        <div class="circle"></div>
                    </li>
                </ul>
            </div>
            <div class="nav-button">
                <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
            </div>
            <div class="nav-menu-btn">
                <i class="uil uil-bars" onclick="myMenuFunction()"></i>
            </div>
        </nav>


<main class="wrapper">

    <section class="featured-box" id="home">
        <div class="featured-text">
            <div class="featured-text-card">
                <span>Junior Rodrigues</span>
            </div>
            <div class="featured-name">
                <p><span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
                <p>Formado em Análise e Desenvolvimento de Sistemas e apaixonado pela programação, estou em busca de uma oportunidade como programador para iniciar uma carreira de sucesso. Minha sólida formação acadêmica e paixão pela tecnologia me capacitaram para contribuir de forma significativa em projetos desafiadores e dinâmicos.
                </p>
            </div>
            <div class="featured-text-btn">
            <button class="btn blue-btn">Contrate-me</button>

                <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
            </div>
            <div class="social_icons">
            <button class="Btn">
      <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512" class="svgIcon"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
      <span class="text">Instagram</span>
    </button>
                <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
         
                <button class="Btn">
      <svg class="svgIcon" viewBox="0 0 496 512" height="1.4em" xmlns="http://www.w3.org/2000/svg"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
      <span class="text">Github</span>
    </button>
            </div>
        </div>
        <div class="featured-image">
            <div class="image">
                <img src="./profile.png" alt="avatar">
            </div>
        </div>
        <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
                <i class="uil uil-mouse-alt"></i>
                <p>Scroll Down</p>
            </a>
        </div>

    </section>
  
    <section class="section" id="about">
        <div class="top-header">
        <h1>Sobre Mim</h1>

        </div>
        <div class="row">
            <div class="col">
                <div class="about-info">
                <h3>Introdução</h3>
<p>Sou um profissional com formação em Análise e Desenvolvimento de Sistemas, apaixonado por programação e ansioso para iniciar uma carreira de sucesso na área. Minha expertise abrange HTML, CSS e JavaScript, bem como o domínio de modernos frameworks e bibliotecas que me permitem criar recursos interativos de forma eficaz.</p>

                    <div class="about-btn">
                        <button class="btn">Download CV <i class="uil uil-import"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
    <div class="skills-box">
        <div class="skills-header">
            <h3>Frontend</h3>
        </div>
        <div class="skills-list">
            <span>HTML</span>
            <span>CSS</span>
            <span>Bootstrap</span>
            <span>JavaScript</span>
            <span>Vue</span>
            <span>React</span>
            <span>Angular</span>
        </div>
    </div>
    <div class="skills-box">
        <div class="skills-header">
            <h3>Backend</h3>
        </div>
        <div class="skills-list">
            <span>PHP</span>
            <span>JAVA</span>
            <span>Python</span>
            <span>C++</span>
            <span>Node.js</span> 
        </div>
    </div>
    <div class="skills-box">
        <div class="skills-header">
            <h3>Database</h3>
        </div>
        <div class="skills-list">
            <span>MySQL</span>
            <span>PostgreSQL</span>
            <span>MongoDB</span>
        </div>
    </div>
</div>

        </div>
    </section>


    <section class="section" id="projects">
        <div class="top-header">
            <h1>Projetos</h1>
        </div>
        <div class="project-container">
            <div class="project-box">
                <i class="uil uil-briefcase-alt"></i>
                <h3>Projetos</h3>
                <label>Concluídos mais de 7 Projetos</label>
            </div>
         
        </div>
    </section>


    <section class="section" id="contact">
        <div class="top-header">
        <h1>Entre em Contato</h1>
<span>Você tem um projeto em mente? Entre em contato comigo aqui.</span>

        </div>
        <div class="row">
            <div class="col">
                <div class="contact-info">
                <h2>Me Encontre <i class="uil uil-corner-right-down"></i></h2>

                    <p><i class="uil uil-envelope"></i> Email: juniorrodrigues1818@gmail.com</p>
                    <p><i class="uil uil-phone"></i> +55 (88)994449696</p>
                </div>
            </div>
       
    </section>

</main>


</body>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="./script.js"></script>
</html>