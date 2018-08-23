<?php
function task1($arr, $i = true)
{
    if ($i) {
        $elem = '<p>' . implode("</p><p>", $arr) . '</p>';
        return $elem;
    } else {
        $elem=implode(" ", $arr);
        return $elem;
    }
}
//===================================
function task2($fst, ...$params)
{

    switch ($fst) {
        case "+":
            $elem=implode("+", $params);
            echo "$elem=";
            $s=$params[0];
            unset($params[0]);
            foreach ($params as $elem) {
                $s+=$elem;
            }
            echo $s;
            break;
        case "-":
            $elem=implode("-", $params);
            echo "$elem=";
            $s=$params[0];
            unset($params[0]);
            foreach ($params as $elem) {
                $s-=$elem;
            }
            echo $s;
            break;
        case "*":
            $elem=implode("*", $params);
            echo "$elem=";
            $s=$params[0];
            unset($params[0]);
            foreach ($params as $elem) {
                $s*=$elem;
            }
            echo $s;
            break;
        case "/":
            $elem=implode("/", $params);
            echo "$elem=";
            $s=$params[0];
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
    if (is_int($cols)and is_int($rows) and $cols>0 and $rows>0) {
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
