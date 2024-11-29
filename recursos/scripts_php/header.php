<header>
    <?php
            session_start(); 
            include 'recursos\scripts_php\connect.php'
            ?>
            <h1>RATE OR HATE</h1>
            <div class="nav">
                <ul class>
                    <li><a href="index.php">Catalogo</a></li>
                </ul>
            </div>
            <div class="login">
                <?php
                function check_input($dado){
                    $dado = trim($dado);
                    $dado = htmlspecialchars($dado);
                    return $dado;
                }
                if(isset($_SESSION['email'])){
                    echo "<button class='botao_perfil' onclick='profileToggle();'><img src=" . $_SESSION['foto'] . "alt=' '></button>";
                    echo "
                        <div class='menu_perfil' id='menu_perfil'>
                            <a href='perfil.php'>Ver perfil</a><br>
                            <hr>
                            <a href='recursos\scripts_php\logoff.php'>Sair</a>
                        </div>
                    ";
                }
                else{
                    echo
                    "<ul class>
                        <li><a href='cadastro.php'>Cadastrar</a></li>
                        <li><a href='login.php'>Entrar</a></li>
                    </ul>";

                }
                ?>
            </div>
            <script src="recursos\javascript.js"></script>
        </header>
