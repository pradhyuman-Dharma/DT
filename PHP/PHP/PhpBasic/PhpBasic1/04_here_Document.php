<?php
    // echo<<<MYDATA
    // <b>This is first line</b>
    // This is "second line"
    // This is third line
    // MYDATA;

    // $info = <<<MYDATA
    // <b>This is first line</b>
    // This is "second line"
    // This is third line.
    // MYDATA;
    // echo $info;

    # nowdoc - It works similar as single qutoes.

    # Example of nowdoc

    // echo<<< 'MYDATA'
    // <b>This is first line</b>
    // This is "second line"
    // This is third line
    // MYDATA;

    $info = <<< 'MYDATA'
    <b>This is first line</b>
    This is "second line"
    This is third line.
    MYDATA;
    echo $info;

?>