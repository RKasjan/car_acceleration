<?php
                       
                    try {
                        include "conn.php";
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $sql = 
                        "SELECT Model, Make, Generation, Power, Acceleration, Max_speed 
                        FROM acceleration
                        WHERE make = 'Audi' AND model = 'A3'";
                        
                        $stmt = $conn->query($sql);
                        $rows = $stmt->fetchAll();
                        $num_rows = count($rows);

                            if ($num_rows > 0) {
                                foreach($conn->query($sql) as $row) {
                                    echo "<tr>
                                    <td>" . $row["Make"]. "</td>
                                    <td>" . $row["Model"] . "</td>
                                    <td>" . $row["Generation"]. "</td>
                                    <td>" . $row["Power"] . "</td>
                                    <td>" . $row["Acceleration"] . "</td>
                                    <td>" . $row["Max_speed"]. "</td>
                                    </tr>";
                                    }
                                    echo "</table>";
                                } else { echo "0 results"; }
                        

                        }
                        catch(PDOException $err) {
                            echo "Błąd połączenia z bazą: " . $err->getMessage();
                          }
                    ?>

