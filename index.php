
<?php
class Ejercicios
{
    public function fnA($text)
    {
        try {
            $pattern = '/user-gpe-([0-9]+)/';
            preg_match_all($pattern, $text, $response);
            return json_encode($response[1], JSON_NUMERIC_CHECK);
        } catch (\Throwable $th) {
            return array("status" => false, "data" => 'Ocurrio un error ' . $th->getMessage());
        }
    }

    public function fnB($text){
        try {          
            $regExpression = "/\[(.*?)\]\((.*?)\)/";
            return preg_replace($regExpression,'$1',$text);  
        } catch (\Throwable $th) {
            return array("status" => false, "data" => 'Ocurrio un error ' . $th->getMessage());
        }
    }
}

$ejercicios = new Ejercicios;
$text = 'Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061) que @[Nicolas](user-gpe-1090)';
echo  "Ejercicio numero 1:";
echo $ejercicios->fnA($text)."<br>" ;
echo "Ejercicio numero 2:";
$text = 'Hola @[Franklin](user-gpe-1071) avisa a @[Ludmina](user-gpe-1061) que @[Nicolas](user-gpe-1090) esta aca';
echo $ejercicios->fnB($text);
?>