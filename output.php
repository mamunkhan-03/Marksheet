<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Sheet Result</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        h1{
            text-align: center;
        }
        
    </style>
</head>
<body>
<center><div class="txtContainer">
        <h1>Noakhali Science and Technology University</h1>
        <h2>Elaborate Mark Sheet</h2>
        <h3> Year: 3        Term: 2 </h3>
        <h3>Final Examination: 2023</h3>
        <h3>Course Code: CSE3103           Course Title:Web Technology</h3>
        <p>Institute of Information and Technology(B.Sc. in Software Engineering)</p>
        <p>Examiner : Rafid Mostafiz</p>
    </div></center>
    <table border="1">
            <tr>
                <th rowspan="2">Student Roll</th>
                <th colspan="4">1</th>
                <th colspan="4">2</th>
                <th colspan="4">3</th>
                <th colspan="4">4</th>
                <th colspan="4">5</th>
                <th colspan="4">6</th>
                <th colspan="4">7</th>
                <th colspan="4">8</th>
                <th colspan="4">9</th>
                <th rowspan="2">Totall Marks</th>
            </tr>
            <tr>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>               
            </tr>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root"; // MySQL username
        $password = "";     // MySQL password
        $dbname = "marksheet2";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from database
        $sql = "SELECT * FROM StudentMarks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dot =".";
                echo "<tr>";
                echo '<td rowspan="2">' . $row["Id"] . "</td>";
                if ($row["a1"]==0){
                    echo "<td>" . $dot . "</td>";
                }else{
                    echo "<td>" . $row["a1"] . "</td>";
                }
                if ($row["b1"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b1"] . "</td>";
                }
                if ($row["c1"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c1"] . "</td>";
                }
                if ($row["d1"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d1"] . "</td>";
                }
                // echo "<td>" . $row["a1"] . "</td>";
                // echo "<td>" . $row["b1"] . "</td>";
                // echo "<td>" . $row["c1"] . "</td>";
                // echo "<td>" . $row["d1"] . "</td>";

                if ($row["a2"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a2"] . "</td>";
                }
                if ($row["b2"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b2"] . "</td>";
                }
                if ($row["c2"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c2"] . "</td>";
                }
                if ($row["d2"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d2"] . "</td>";
                }

                // echo "<td>" . $row["a2"] . "</td>";
                // echo "<td>" . $row["b2"] . "</td>";
                // echo "<td>" . $row["c2"] . "</td>";
                // echo "<td>" . $row["d2"] . "</td>";

                if ($row["a3"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a3"] . "</td>";
                }
                if ($row["b3"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b3"] . "</td>";
                }
                if ($row["c3"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c3"] . "</td>";
                }
                if ($row["d3"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d3"] . "</td>";
                }

                // echo "<td>" . $row["a3"] . "</td>";
                // echo "<td>" . $row["b3"] . "</td>";
                // echo "<td>" . $row["c3"] . "</td>";
                // echo "<td>" . $row["d3"] . "</td>";

                if ($row["a4"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a4"] . "</td>";
                }
                if ($row["b4"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b4"] . "</td>";
                }
                if ($row["c4"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c4"] . "</td>";
                }
                if ($row["d4"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d4"] . "</td>";
                }

                // echo "<td>" . $row["a4"] . "</td>";
                // echo "<td>" . $row["b4"] . "</td>";
                // echo "<td>" . $row["c4"] . "</td>";
                // echo "<td>" . $row["d4"] . "</td>";
                if ($row["a5"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a5"] . "</td>";
                }
                if ($row["b5"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b5"] . "</td>";
                }
                if ($row["c5"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c5"] . "</td>";
                }
                if ($row["d5"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d5"] . "</td>";
                }

                // echo "<td>" . $row["a5"] . "</td>";
                // echo "<td>" . $row["b5"] . "</td>";
                // echo "<td>" . $row["c5"] . "</td>";
                // echo "<td>" . $row["d5"] . "</td>";

                if ($row["a6"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a6"] . "</td>";
                }
                if ($row["b6"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b6"] . "</td>";
                }
                if ($row["c6"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c6"] . "</td>";
                }
                if ($row["d6"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d6"] . "</td>";
                }

                // echo "<td>" . $row["a6"] . "</td>";
                // echo "<td>" . $row["b6"] . "</td>";
                // echo "<td>" . $row["c6"] . "</td>";
                // echo "<td>" . $row["d6"] . "</td>";

                if ($row["a7"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a7"] . "</td>";
                }
                if ($row["b7"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b7"] . "</td>";
                }
                if ($row["c7"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c7"] . "</td>";
                }
                if ($row["d7"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d7"] . "</td>";
                }

                // echo "<td>" . $row["a7"] . "</td>";
                // echo "<td>" . $row["b7"] . "</td>";
                // echo "<td>" . $row["c7"] . "</td>";
                // echo "<td>" . $row["d7"] . "</td>";

                if ($row["a8"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a8"] . "</td>";
                }
                if ($row["b8"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b8"] . "</td>";
                }
                if ($row["c8"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c8"] . "</td>";
                }
                if ($row["d8"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d8"] . "</td>";
                }

                // echo "<td>" . $row["a8"] . "</td>";
                // echo "<td>" . $row["b8"] . "</td>";
                // echo "<td>" . $row["c8"] . "</td>";
                // echo "<td>" . $row["d8"] . "</td>";
                if ($row["a9"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["a9"] . "</td>";
                }
                if ($row["b9"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["b9"] . "</td>";
                }
                if ($row["c9"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["c9"] . "</td>";
                }
                if ($row["d9"] == 0) {
                    echo "<td>" . $dot . "</td>";
                } else {
                    echo "<td>" . $row["d9"] . "</td>";
                }
                

                // echo "<td>" . $row["a9"] . "</td>";
                // echo "<td>" . $row["b9"] . "</td>";
                // echo "<td>" . $row["c9"] . "</td>";
                // echo "<td>" . $row["d9"] . "</td>";

                echo '<th rowspan="2">' . $row["Total"] . "</th>";
                echo "</tr>";

                echo "<tr>";
        
                echo '<th colspan="4">' . $row["Question1"] . "</th>";
                echo '<th colspan="4">' . $row["Question2"] . "</th>";
                echo '<th colspan="4">' . $row["Question3"] . "</th>";
                echo '<th colspan="4">' . $row["Question4"] . "</th>";
                echo '<th colspan="4">' . $row["Question5"] . "</th>";
                echo '<th colspan="4">' . $row["Question6"] . "</th>";
                echo '<th colspan="4">' . $row["Question7"] . "</th>";
                echo '<th colspan="4">' . $row["Question8"] . "</th>";
                echo '<th colspan="4">' . $row["Question9"] . "</th>";

            
                echo "</tr>";



            }
        } else {
            echo "<tr><td colspan='5'>No data found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>