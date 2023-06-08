<?php

// Aqui você deve realizar a conexão com o banco de dados
// Consulta SQL para obter os dados necessários
$sql = "
    SELECT Tb_banco.nome AS nome_banco, Tb_convenio.verba,
    MIN(Tb_contrato.data_inclusao) AS data_inclusao_antiga,
    MAX(Tb_contrato.data_inclusao) AS data_inclusao_nova,
    SUM(Tb_contrato.valor) AS soma_valor
    FROM Tb_banco
    INNER JOIN Tb_convenio ON Tb_banco.codigo = Tb_convenio.banco
    INNER JOIN Tb_convenio_servico ON Tb_convenio.codigo = Tb_convenio_servico.convenio
    INNER JOIN Tb_contrato ON Tb_convenio_servico.codigo = Tb_contrato.convenio_servico
    GROUP BY Tb_banco.nome, Tb_convenio.verba
";

// Executa a consulta
$resultado = mysqli_query($conexao, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($resultado) > 0) {
    // Imprime o cabeçalho da relação
    echo "nome do banco | verba | data inclusao mais antiga | data inclusao mais nova | soma do valor\n";

    // Itera sobre os resultados e imprime cada linha da relação
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo $linha['nome_banco'] . " | " . $linha['verba'] . " | " . $linha['data_inclusao_antiga'] . " | " . $linha['data_inclusao_nova'] . " | " . $linha['soma_valor'] . "\n";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Encerra a conexão com o banco de dados
mysqli_close($conexao);

?>
