<?php
function calculateResult($marks) {
    $totalMarks = 0;
    $subjectCount = count($marks);
    
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid for one or more subjects.";
        }
        if ($mark < 33) {
            return "Fail - Scored below 33 in one or more subjects.";
        }
        $totalMarks += $mark;
    }

    $averageMarks = $totalMarks / $subjectCount;

    switch (true) {
        case $averageMarks >= 80:
            $grade = "A+";
            break;
        case $averageMarks >= 70:
            $grade = "A";
            break;
        case $averageMarks >= 60:
            $grade = "A-";
            break;
        case $averageMarks >= 50:
            $grade = "B";
            break;
        case $averageMarks >= 40:
            $grade = "C";
            break;
        case $averageMarks >= 33:
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    return "Total Marks: $totalMarks\nAverage Marks: $averageMarks\nGrade: $grade";
}

$subjectMarks = [45, 60, 72, 38, 85];
echo calculateResult($subjectMarks);
?>

