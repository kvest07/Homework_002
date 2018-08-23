<?php
function task1($arr, $i = true)
{
    if ($i) {
        $elem = '<p>' . implode("</p><p>", $arr) . '</p>';
        echo $elem;
    } else {
        $elem=implode(" ", $arr);
        return $elem;
    }
}
//===================================
function task2($fst, ...$params)
{
    $s=$params[0];
    switch ($fst) {
        case "+":
            $elem=implode("+", $params);
            echo "$elem=";
            unset($params[0]);
            foreach ($params as $elem) {
                $s+=$elem;
            }
            echo $s;
            break;
        case "-":
            $elem=implode("-", $params);
            echo "$elem=";
            unset($params[0]);
            foreach ($params as $elem) {
                $s-=$elem;
            }
            echo $s;
            break;
        case "*":
            $elem=implode("*", $params);
            echo "$elem=";
            unset($params[0]);
            foreach ($params as $elem) {
                $s*=$elem;
            }
            echo $s;
            break;
        case "/":
            $elem=implode("/", $params);
            echo "$elem=";
            unset($params[0]);
            foreach ($params as $elem) {
                $s/=$elem;
            }
            echo $s;
            break;
        default:
            echo 'Введите первый параметр + или - или / или *'.'<br/>';
    }
}
//================================================================
function task3($cols, $rows)
{
    if ($cols>0 and $rows>0) {
        $tr=1;
        echo "<table border='1'>" ;

        while ($tr<=$rows) {
            echo "<tr>" ;
            $td=1;
            while ($td<=$cols) {
                echo "<td>".$tr*$td."</td>";
                $td++;
            }
            echo "</tr>";
            $tr++ ;
        }
        echo "</table>".'<br/>' ;
    } else {
        echo 'Введите целые положительные числа'.'<br/>';
    }
}
//=================================================================
