<?php 
session_start();

$usuario_autenticado = false;
$usuario_id= null;
$usuario_perfil_id = 
$perfis = array(1=>'Adm','User'=>2);

$usuarios_app= array(
    
array('id'=> 1,'email' => 'adm@gmail.com', 'senha' => '12345abc','perfil_id' => 1),
array('id'=>2,'email' => 'professor@gmail.com', 'senha' => '123abc','perfil_id' => 1),
array('id'=>3,'email' => 'aluno1@gmail.com', 'senha' => '4321abc','perfil_id' => 2),
array('id'=>4,'email' => 'aluno2@gmail.com', 'senha' => '40028922','perfil_id' => 2),
);

 foreach($usuarios_app as $user){
    echo'Usuário app:' . $user['email'] . '/ ' . 'Senha: ' . $user['senha'];
    echo '</br>';
    echo'Usuário form:' . $_POST['email'] . '/ ' . 'Senha: ' . $_POST['senha'];
    echo '<hr>';

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_perfil_id = $user['perfil_id'];
    }
    if($usuario_autenticado){

        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;

        if( $_SESSION['perfil_id'] == 1){
            header('location: home.php') ;
        }
        else{
            header('location: home2.php') ;
        }
    }
    else{
        header('location: index.php?login=erro') ;
        $_SESSION['autenticado'] = 'NÃO';
    }
 }
?>