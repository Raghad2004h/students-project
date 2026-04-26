<?php
$students = [
    ["name" => "Ahmad", "grade" => 95, "age" => 20],
    ["name" => "Sara", "grade" => 85, "age" => 19],
    ["name" => "Omar", "grade" => 72, "age" => 21],
    ["name" => "Lina", "grade" => 65, "age" => 18],
    ["name" => "Ali", "grade" => 50, "age" => 22],
];

function calculateStatus($grade){
    if($grade >=0 && $grade <= 100 ){
        if ($grade >= 90) {
        return "Excellent";
    } elseif ($grade >= 80) {
        return "Very Good";
    } elseif ($grade >= 70) {
        return "Good";
    } elseif ($grade >= 60) {
        return "Pass";
    } else {
        return "Fail";
    }
    }else{
        echo "invalid grade";
    }
}



$max = $students[0]['grade'];
$min = $students[0]['grade'];
$total = 0;
$passed = 0;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #e0f7fa, #ffffff);
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}


.container {
    width: 75%;
    margin: 30px auto;
    animation: fadeIn 1s ease-in-out;
}


table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

th {
    background: linear-gradient(to right, #4CAF50, #66bb6a);
    color: white;
    padding: 15px;
    font-size: 16px;
}

td {
    padding: 12px;
    text-align: center;
}

tr {
    transition: 0.3s;
}

tr:hover {
    background-color: #f1f1f1;
    transform: scale(1.01);
}

.pass {
    color: #2e7d32;
    font-weight: bold;
}

.fail {
    color: #c62828;
    font-weight: bold;
}

.stats {
    margin-top: 20px;
    padding: 20px;
    border-radius: 15px;
    background: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.stats p {
    font-size: 18px;
    margin: 10px 0;
}

.student-info {
    width: 75%;
    margin: 20px auto;
    padding: 15px;
    background: linear-gradient(to right, #4CAF50, #81c784);
    color: white;
    border-radius: 12px;
    text-align: center;
    font-size: 18px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    animation: fadeIn 1.5s ease-in-out;
}

.student-info span {
    display: block;
    margin-top: 5px;
    font-weight: bold;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

</head>
<body>
    <h2 style="text-align:center;">Students Table</h2>

    <div class="student-info">
        Developed by:
    <span>Raghad Haniya</span>
    <span>ID: 220221528</span>
</div>

<div class="container">
<table>
    <tr>
        <th>Name</th>
        <th>Grade</th>
        <th>Age</th>
        <th>Status</th>
    </tr>

<?php
    foreach ($students as $student) {
    $grade = $student['grade'];

    if ($grade > $max) $max = $grade;
    if ($grade < $min) $min = $grade;

    $total += $grade;

    if ($grade >= 60) $passed++;

    echo "<tr>";
    echo "<td>{$student['name']}</td>";
    echo "<td>{$grade}</td>";
    echo "<td>{$student['age']}</td>";
   $status = calculateStatus($grade);

   $class = ($grade >= 60) ? "pass" : "fail";

   echo "<td class='$class'>$status</td>";    echo "</tr>";
   }

?>

</table>
</div>

<?php
$average = $total / count($students);
?>

<div class="stats">
    <h3>Statistics:</h3>
    <p>Highest Grade: <?php echo $max; ?></p>
    <p>Lowest Grade: <?php echo $min; ?></p>
    <p>Average Grade: <?php echo $average; ?></p>
    <p>Passed Students: <?php echo $passed; ?></p>
</div>

</body>

</html>