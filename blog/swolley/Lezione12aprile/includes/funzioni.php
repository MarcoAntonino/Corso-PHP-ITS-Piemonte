<?php
function formattaData($param)
{
    return date("d F Y H:i", strtotime($param));
}
?>