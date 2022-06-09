<?php
ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = @$_SERVER['HTTP_REFERER'];

$clubname_par = '';

function loggedin(){
    if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])){
        return true;
    }else{
        return false;
    }
}
function getuserfield($field){
    $query = "SELECT `$field` FROM `gmtsignup` WHERE `email`='".$_SESSION['user_id']."'";
    if($query_run = mysql_query($query)){
        if($query_result = mysql_result($query_run, 0, $field)){
            return $query_result;
        }
    }
}

function getexamdetails($field,$examid){
     $query = "SELECT `$field` FROM `gmtexams` WHERE `examid`='".$examid."'";
    if($query_run = mysql_query($query)){
        if($query_result = mysql_result($query_run, 0, $field)){
            return $query_result;
}
}
}

function getscore(){
    $query = "SELECT `score` FROM `score` WHERE `email`='".$_SESSION['user_id']."'";
    if($query_run = mysql_query($query)){
        if($query_result = mysql_result($query_run, 0, 'score')){
            return $query_result;
        }
    }
}


function result($count, $correct, $incorrect, $marks, $wrong_answers, $examid){
   header('Location: result.php?correct='.$correct.'&incorrect='.$incorrect.'&total='.$count.'&marks='.$marks.'&wrong='.$wrong_answers.'&examid='.$examid);
}

    
?>

<script type="text/javascript">
    function menu() {
        window.location = "panel.php";
    }
</script>

<script type="text/javascript">
    function logout() {
        window.location = "logout.php";
    }
</script>