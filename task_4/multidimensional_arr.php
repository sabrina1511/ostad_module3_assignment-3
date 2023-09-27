<?php
function calAverages($studentGrades) {

    foreach ($studentGrades as $student => $grades) {
        $numSubjects = count($grades);
        $totalGrade = array_sum($grades);
        $averageGradePoint = $totalGrade / $numSubjects;

      
        echo "Student: $student\n";
        echo "Grades: " . implode(', ', $grades) . "\n";
        echo "Average Grade Point: $averageGradePoint\n";

        if ($averageGradePoint >= 90) {
            echo "Grade: A\n";
           
        }

        elseif ($averageGradePoint >= 80) {
            echo "Grade: B\n";
           
        }

        elseif ($averageGradePoint >= 70) {
            echo "Grade: C\n";
          
        }

        elseif ($averageGradePoint >= 60) {
            echo "Grade: D\n";
            
        }

        else {
            echo "Grade: F\n";
            
        }

        echo "\n";
    }
}


$studentGrades = array(
    'Student_1' => array('Math' => 94, 'English' => 89, 'Science' => 88),

    'Student_2' => array('Math' => 78, 'English' => 75, 'Science' => 96),

    'Student_3' => array('Math' => 87, 'English' => 89, 'Science' => 98)
);


calAverages($studentGrades);
?>
