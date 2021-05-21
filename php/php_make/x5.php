<?php
                       
                    try {
                        include "../php/conn.php";
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $sql = 
                        "SELECT Model, Make, Torque, Power, Acceleration, Max_speed 
                        FROM acceleration
                        WHERE make = 'BMW' AND model = 'X5'";
                        
                        $stmt = $conn->query($sql);
                        $rows = $stmt->fetchAll();
                        $num_rows = count($rows);

                            if ($num_rows > 0) {
                                foreach($conn->query($sql) as $row) {
                                    echo "<tr>
                                    <td>" . $row["Make"]. "</td>
                                    <td>" . $row["Model"] . "</td>
                                    <td>" . $row["Torque"]. "</td>
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

