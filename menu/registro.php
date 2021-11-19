<?php
  if($_REQUEST["usu"] == "admin" and $_REQUEST["con"] == "marti"){
                    header("location: adminindex.php");
    }else {
        header("location: error.php");
    }
?>