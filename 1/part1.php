<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$text = $_POST["text"];
$Color = $_POST["Color"];
$Size = $_POST["Size"];
$style = $_POST["style"];
?>
<head>
        <style type="text/css">
        p{
                color: <?php echo $Color ;?> ;
                font-size: <?php echo $Size ;?>;
                <?php
                        $size= sizeof($style);
                        for ($i = 0 ; $i<$Size; $i++){
                                if($style[$i] == "bold")
                                        echo "font-weight:bold;";       
                                else if($style[$i] == "italic")
                                        echo "font-style:italic;";
                                else if($style[$i] == "underline")
                                        echo "text-decoration:underline";
                        }
                ?>
        }
        </style>
        <title>Assignment 4</title>
</head>

<body>
<p name="text"><?php echo $text;?></p>
<br/>
<p><a href="part1.html">Part A</a></p>
</body>
</html>