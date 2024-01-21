<html>
    <head>
        <title>Test Page</title>
</head>

<body>
<h1>Conditional Statements</h1>

<?php
$x=40;
if($x=50)
    echo "S1";//true part
else
    echo "S2";//false part
    echo "S3";//rest of the code

//condition true -> S1S3
//condition false -> S2S3
//*Can't use more than one line for true part when there is no curly braces
?>

</body>
</html>