<?php

if (isset($_POST['submit']))
{
    include_once('conexao.php'); // Certifique-se de que o arquivo 'conexao.php' está configurado corretamente.

    // Obtenha os valores do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL corrigida
    $stmt = $db->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    
    // Substitua os valores corretos nas ligações
    $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":senha", $senha, PDO::PARAM_STR);

    if ($stmt->execute()) {
        // A inserção foi bem-sucedida, então execute um script JavaScript para exibir o modal
        echo "<script>
            var modal = document.getElementById('modal');
            modal.style.display = 'block';

            function fecharModal() {
                modal.style.display = 'none';
            }
            </script>";
    } else {
        echo "Erro ao inserir os dados no banco de dados.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/56db5224e6.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="icon" href="Tech Ninja Store.png">
    <title>Tech | Ninja</title>
</head>
<body>
    <header>
        <img src="Tech Ninja Store.png" class="img1">
        <form class="example" action="">
            <input type="text" name="search" placeholder="Search..">
        </form>
        <div class="icons">
            <div class="user">
                <i class="fa-solid fa-user"></i>
                <p>Faça <a href="#" onclick="document.getElementById('id01').style.display='block'">LOGIN</a> ou <br/>
                crie seu <a href="#" onclick="document.getElementById('id02').style.display='block'">CADASTRO</a></p>
            </div>
            <div class="cart" id="cart-icon">
                <i class="fa-solid fa-cart-shopping"></i>
                <div class="contador-carrinho" id="contador-carrinho">0</div>
            </div>
        </div>
    </header>
    <main>
        <div class="carrinho w3-modal-content w3-animate-top" id="carrinho">
            <span onclick="document.getElementById('carrinho').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <h2>Carrinho de Compras</h2>
            <ul id="carrinho-itens">
                <!-- Itens do carrinho serão adicionados aqui -->
            </ul>
        </div>
        <div class="banner">
        <h1>Seu Texto de Destaque</h1>
        <p>Uma descrição curta do seu banner.</p>
        <a href="#">Saiba Mais</a>
    </div>
        <div class="produtos-grid">
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>smartpho</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button class="comprar" onclick="adicionarAoCarrinho('smartphone', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>tablet',</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('tablet', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>carregad</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('carregador', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>iphone',</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('iphone', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>samsung'</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('samsung', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>fone blu</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('fone bluetoofh', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>headset'</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('headset', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>cabo lig</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('cabo ligth tipo C', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>monitor</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('monitor', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>teclado</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('teclado', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>mouse</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('mouse', 2000)">Comprar</button>
                </div>
            </div>

            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="headset.jpg" alt="" class="produto" width="200">
                </div>
                <div class="titulo">
                    <p>mousepad</p>
                    <h2>R$ 2000</h2>
                    <input type="hidden" name="">
                    <input type="hidden" name="">
                    <button type="button" class="comprar" onclick="adicionarAoCarrinho('mousepad', 2000)">Comprar</button>
                </div>
            </div>
            <!-- Repita a estrutura de produtos semelhantes aqui -->
        </div>
        <!-- Modal de Login -->
        <div class="modal">
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-animate-top">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <form action="/pagina-processa-dados-do-form" method="post">
                        <h1>Fazer Login</h1>
                        <div>
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="usuario_email" />
                        </div>
                        <div>
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" name="senha"></input>
                        </div>
                        <div class="button">
                            <button type="submit">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal de Cadastro -->
            <div id="id02" class="w3-modal">
                <div class="w3-modal-content w3-animate-top">
                    <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <form action="" method="post">
                        <h1>Criar usuário</h1>
                        <div>
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" />
                        </div>
                        <div>
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" />
                        </div>
                        <div>
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha"></input>
                        </div>
                        <div class="button">
                            <button type="submit" name="submit">Cadastrar</button>
                        </div>
                    </form>
                    <!-- Modal de sucesso -->
                    <div id="modal" style="display: none;">
                        <div id="modal-content">
                            <span id="fechar-modal" onclick="fecharModal()">&times;</span>
                            <p>Usuário inserido com sucesso!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div>
            <p>&copy; 2023 Tech Ninja. Todos os direitos reservados.</p>
        </div>
        <div>
            <a href="#">Política de Privacidade</a> |
            <a href="#">Termos de Serviço</a>
        </div>
    </footer>
</body>
</html>


