<?php
include('../database/conexao.php');


?>
<script>
app.get('SELECT * FROM obras WHERE nome_obra', function(req, res){
    var searchQuery = req.query.search;

    // Busque no banco de dados usando a consulta de pesquisa
    let sql = `SELECT * FROM obras WHERE nome_obra = ${db.escape(searchQuery)}`;
    db.query(sql, (err, resultadosDaPesquisa) => {
        if(err) throw err;

        // Verifique se os resultados da pesquisa estão vazios
        if(resultadosDaPesquisa.length > 0) {
            // Se não estiverem vazios, redirecione o usuário para a nova tela
            res.redirect('/sua_nova_tela');
        } else {
            // Se estiverem vazios, renderize a página de resultados da pesquisa
            res.render('resultados_da_pesquisa', { resultados: resultadosDaPesquisa });
        }
    });
});
</script>