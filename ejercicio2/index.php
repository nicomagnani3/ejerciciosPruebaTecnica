
<?php
class Ejercicio2
{
    public function fn($array, $sortCriterion)
    {
        try {
            $response = $this->getSortArray($array, $sortCriterion);
            return $this->printArrayResponse($response);
        } catch (\Throwable $th) {
            return array("status" => false, "data" => 'Ocurrio un error ' . $th->getMessage());
        }
    }

    function getSortArray($array, $sortCriterion)
    {
        try {
            $columnArray = array();
            foreach ($sortCriterion as $campo => $order) {
                $columnArray[$campo] = array();
                foreach ($array as $index => $value) {
                    $columnArray[$campo]['_' . $index] = strtolower($value[$campo]);
                }
            }
            $putResponse = 'array_multisort(';
            foreach ($sortCriterion as $campo => $order) {
                $order = $this->setOrderArray($order);
                $putResponse .= '$columnArray[\'' . $campo . '\'],' . $order . ',';
            }
            $putResponse = substr($putResponse, 0, -1) . ');';
            eval($putResponse);
            $response = array();
            foreach ($columnArray as $column => $index) {
                foreach ($index as $k => $value) {
                    $k = substr($k, 1);
                    if (!isset($response[$k])) $response[$k] = $array[$k];
                    $response[$k][$column] = $array[$k][$column];
                }
            }
            return $response;
        } catch (\Throwable $th) {
            return array("status" => false, "data" => 'Ocurrio un error ' . $th->getMessage());
        }
    }
    public function setOrderArray($order)
    {
        try {
            if ($order == 'ASC') {
                return "SORT_ASC";
            }
            return "SORT_DESC";
        } catch (\Throwable $th) {
            return array("status" => false, "data" => 'Ocurrio un error ' . $th->getMessage());
        }
    }
    public function printArrayResponse($array)
    {
        try {
            echo ('<pre>');
            print_r($array);
            echo ('<pre>');
        } catch (\Throwable $th) {
            return array("status" => false, "data" => 'Ocurrio un error ' . $th->getMessage());
        }
    }
}
$ejercicios = new Ejercicio2;
$array = [
    ['user' => 'Oscar', 'age' => 18, 'scoring' => 40],
    ['user' => 'Mario', 'age' => 45, 'scoring' => 10],
    ['user' => 'Zulueta', 'age' => 33, 'scoring' => -78],
    ['user' => 'Mario', 'age' => 45, 'scoring' => 78],
    ['user' => 'Patricio', 'age' => 22, 'scoring' => 9],
];
$sortCriterion = ['age' => 'DESC', 'scoring' => 'DESC'];
$ejercicios->fn($array, $sortCriterion);

?>