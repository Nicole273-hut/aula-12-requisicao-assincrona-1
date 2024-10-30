<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Pisos e Azulejos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Calculadora de Pisos e Azulejos</h1>
    
    <label for="largura">Largura do cômodo (em metros):</label>
    <input type="number" id="largura" placeholder="Ex: 4" required>

    <label for="comprimento">Comprimento do cômodo (em metros):</label>
    <input type="number" id="comprimento" placeholder="Ex: 5" required>

    <label for="tamanho">Tamanho do piso/azulejo (em metros quadrados):</label>
    <input type="number" id="tamanho" placeholder="Ex: 0.36 (para 60x60cm)" required>

    <label for="margem">Porcentagem de margem extra (opcional):</label>
    <input type="number" id="margem" placeholder="Ex: 10" min="0" max="100>

    <button onclick="calcular()">Calcular</button>

    <h2 id="resultado"></h2>

    <script>
        function calcular() {
            const largura = parseFloat(document.getElementById('largura').value);
            const comprimento = parseFloat(document.getElementById('comprimento').value);
            const tamanho = parseFloat(document.getElementById('tamanho').value);
            const margem = parseFloat(document.getElementById('margem').value) || 0;

            const areaCômodo = largura * comprimento;
            const quantidadePisos = areaCômodo / tamanho;
            const quantidadeComMargem = quantidadePisos * (1 + margem / 100);

            document.getElementById('resultado').innerText = 
                Você precisará de aproximadamente ${Math.ceil(quantidadeComMargem)} pisos/azulejos.;
        }
    </script>

</body>
</html>