<!-- Página de teste de lógica. -->

<?php

// Aqui você deve realizar a conexão com o banco de dados

// Consulta SQL para obter os dados necessários
$sql = "
    SELECT Tb_banco.nome AS nome_banco, Tb_convenio.verba, Tb_contrato.codigo AS codigo_contrato, Tb_contrato.data_inclusao, Tb_contrato.valor, Tb_contrato.prazo
    FROM Tb_contrato
    INNER JOIN Tb_convenio_servico ON Tb_contrato.convenio_servico = Tb_convenio_servico.codigo
    INNER JOIN Tb_convenio ON Tb_convenio_servico.convenio = Tb_convenio.codigo
    INNER JOIN Tb_banco ON Tb_convenio.banco = Tb_banco.codigo
";

// Executa a consulta
$resultado = mysqli_query($conexao, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($resultado) > 0) {
    // Imprime o cabeçalho da relação
    echo "nome do banco | verba | codigo do contrato | data de inclusao | valor | prazo\n";

    // Itera sobre os resultados e imprime cada linha da relação
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo $linha['nome_banco'] . " | " . $linha['verba'] . " | " . $linha['codigo_contrato'] . " | " . $linha['data_inclusao'] . " | " . $linha['valor'] . " | " . $linha['prazo'] . "\n";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Encerra a conexão com o banco de dados
mysqli_close($conexao);

?>
