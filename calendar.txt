<!DOCTYPE html>
<html>

    <link rel="stylesheet" type="text/css" href="calendar.css" />

    <head>
        <title>Part 2</title> 
    </head>

    <body>

        <?php
            date_default_timezone_set('America/New_York'); 

            $hours_to_show = 11;  
			if(isset($_POST['submit'])){
				$hours_to_show = $_POST["hours_to_show"] - 1;
			}
            $timeStamp = time();
            $todayDate = date("D, F j, Y", $timeStamp);                                                    
            $currentTime = date("g:i a",$timeStamp);     
            $todayDay = date("l", $timeStamp);

            function get_hour_string($timeStamp){ 
                $hour = date("g", $timeStamp);
                $am_or_pm = date("a", $timeStamp);
                return "$hour:00 $am_or_pm";
            }

        ?>
        
        <div class="container">
            <h1> 
                <?php 
                    echo "<br><b>Welcome to my calendar!</b><br>";
                    echo "<br><b>The day of the week</b>: $todayDay";
                    echo "<br><b>Today's date</b>: $todayDate";
                    echo "<br><b>The current time is</b> $currentTime <br>"; 
                ?> 
				<form method="POST">
					Hours to show: <input type="number" name="hours_to_show">
					<input type="submit" value="submit" name = "submit">
				</form>
            </h1>
            <table id="event_table">
            <tr>    
                <th class='hr_td'></th>
                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbspForrest</th> 
                <th class='table_header'>&nbsp&nbsp&nbsp&nbsp&nbspLouis</th>
                <th class='table_header'>&nbsp&nbspHenry</th>
            </tr> 
            <tr> <br> </tr>

        <?php

        for ($i = 0; $i <= $hours_to_show; $i++) { 
            $hours = get_hour_string($timeStamp + $i * 60 * 60); 
            if ($i % 2 == 0) { 

                echo  "<tr class='even_row'> \n ";
                echo "<td class='hr_td'>
                            <b>$hours</b>
                      </td>
                      <td> </td>                        
                      <td> </td> 
                      <td> </td> \n";
                echo "</tr> \n";

            }

            if ($i % 2 != 0) { 

                echo "<tr class='odd_row'> \n";
                echo "<td class='hr_td'>
                            <b>$hours</b>
                      </td>  
                      <td> </td> 
                      <td> </td> 
                      <td> </td> \n";

                echo "</tr> \n";
            }
        }
        ?>	
            </table>
        </div>

    </body>
</html>