<?php 

    class ClassConexao {
        public function conectaDB(){
            try {
                $con = new PDO("mysql:localhost;dbname=gerador_rifa", "gerador_rifa", "hYDRl726KoZ_7HkQ");
            } catch (PDOException $erro) {
                return $erro->getMessage();
            }
        }
    }



?>