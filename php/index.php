<?php
include('conexao.php');

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Minha Loja de Eletrônicos</title>
</head>
<body>

    <header>
        <h1>Minha Loja de Eletrônicos</h1>
        <div id="cart">
            <h2>Carrinho de Compras</h2>
            <ul id="cart-items">
                <!-- Itens do carrinho aparecerão aqui -->
            </ul>
            <p>Total: R$ <span id="cart-total">0.00</span></p>
        </div>
    </header>
    <main>
      <div class="cards">
        <section class="products">
              <!-- Produtos aparecerão aqui -->
        </section>
      </div>
        
    </main>
    <script src="script.js"></script>
   
</body>
</html>
