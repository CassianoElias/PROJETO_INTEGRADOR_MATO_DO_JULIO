

<table class="table">

<thead>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Assunto</th>
        <th>Mensagem</th>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php
        include "conexao.php";
        
        $query = "Select nomeCompleto,email,telefone,assunto,mensagem from faleconosco";
        $dados = mysqli_query($conexao, $query);
        if($dados){
            while($linha = mysqli_fetch_assoc($dados)){

                ?>
                <tr>
                    <td><?php echo $linha ("nomeCompleto") ?></td>
                    <td><?php echo $linha ("email") ?></td>
                    <td><?php echo $linha ("telefone") ?></td>
                    <td><?php echo $linha ("assunto") ?></td>
                    <td><?php echo $linha ("mensagem") ?></td>
                    <td>
                        <button>Editar</button>
                        <button>Excluir</button>
                    </td>
                </tr>
                <?php
            }
        }
?>

    
</tbody>
</table>