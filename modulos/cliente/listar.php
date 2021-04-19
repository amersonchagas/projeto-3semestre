<?php
    $sql = "SELECT * FROM cliente";
    $stmt = DB::Conexao()->prepare($sql);
    $stmt->execute();

    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
?>
<table>
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>
</tr>

<?php 
if($clientes){
    foreach($clientes as $cliente){ 
?>
    <tr>
        <td><?php echo $cliente['id'];?></td>
        <td><?php echo $cliente['nome'];?></td>
        <td><?php echo $cliente['email'];?></td>
        <td><?php echo $cliente['telefone'];?></td>
    </tr>
<?php 
    }
} 
?>
</table>