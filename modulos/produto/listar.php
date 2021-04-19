<?php
    $sql = "SELECT * FROM produto";
    $stmt = DB::Conexao()->prepare($sql);
    $stmt->execute();

    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
?>
<table>
<tr>
    <th>ID</th>
    <th>DESCRICAO</th>
    <th>PRECO</th>
    <th>QUANTIDADE</th>
</tr>

<?php
if($produtos){
    foreach($produtos as $produto){
?>
    <tr>
        <td><?php echo $produto['id'];?></td>
        <td><?php echo $produto['descricao'];?></td>
        <td><?php echo $produto['preco'];?></td>
        <td><?php echo $produto['quantidade'];?></td>
    </tr>
<?php
    }
}    
?>
</table>