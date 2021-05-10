<?php
    session_start();
    include('includes/connection.php');

    $tables = array();
    $result =mysqli_query($con, "SHOW TABLES");
    while($row = mysqli_fetch_row($result)){
        $tables[] = $row[0];
    }

    $return = '';
    foreach($tables as $table) {
        $result = mysqli_query ($con, "SELECT * FROM " .$table);
        $num_fields = mysqli_num_fields($result);

        $return .= 'DROP TABLE '.$table.';';
        $row2 = mysqli_fetch_row(mysqli_query($con, 'SHOW CREATE TABLE ' .$table));
        $return .= "\n\n".$row2[1].";\n\n";
        
        for($i =0;$i<$num_fields;$i++) {
            while ($row = mysqli_fetch_row($result)){
                $return .= 'INSERT INTO '.$table.' VALUES (';
                for($j=0;$j<$num_fields;$j++) {
                    $row[$j] = addslashes ($row[$j]);
                    if(isset($row[$j])){ $return .= '"' .$row[$j] .'"';} else {$return .= '""';}
                    if($j<$num_fields-1) { $return .= ',';}
                }
                $return .= ") ;\n";
            }
        }
        $return .=  "\n\n\n";
    } 
    $handle = fopen('fsic_application.sql','w+');
    fwrite($handle,$return);
    fclose($handle);

    $fullPath = "fsic_application.sql";

    if ($fd = fopen ($fullPath, "r")) {

        $fsize = filesize($fullPath);
        $path_parts = pathinfo($fullPath);
        $ext = strtolower($path_parts["extension"]);

        header("Content-type: application/pdf");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");            
        header("Content-length: $fsize");
        header("Cache-control: private");

        while(!feof($fd)) {
            $buffer = fread($fd, 2048);
            echo $buffer;
        }
    }

    fclose ($fd);
    exit;

    echo "Successfully backed up";   

    header("Fsic/");

?>