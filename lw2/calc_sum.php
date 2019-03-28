<?php

function Div($dividend, $divider)
{
    if ($divider == 0)
    {
        return "Происходит деление на ноль";
    }
    return $dividend / $divider;
}

if (!isset($_GET["arg1"]) || !isset($_GET["arg2"]) || !isset($_GET["operation"]))
{
    echo "Переданы не все параметры arg1, arg2 и operation";
}
else if (count($_GET) > 3)
{
    echo "Переданы лишние параметры";
}
else if (!is_numeric($_GET["arg1"]) || !is_numeric($_GET["arg1"]))
{
    echo "Параметры arg1 и arg2 содержат данные, отличные от числовых";
}
else if ($_GET["operation"] == "add")
{
    echo $_GET["arg1"] + $_GET["arg2"];
}
else if ($_GET["operation"] == "sub")
{
    echo $_GET["arg1"] - $_GET["arg2"];
}
else if ($_GET["operation"] == "mul")
{
    echo $_GET["arg1"] * $_GET["arg2"];
}
else if ($_GET["operation"] == "div")
{
    echo Div($_GET["arg1"], $_GET["arg2"]);
}
else
{
    echo "Параметр operation содержит некорректную операцию";
}