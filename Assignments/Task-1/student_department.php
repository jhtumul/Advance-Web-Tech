<?php
    class Student
    {
        public $studentName;
        public $studentID;
        public $department;

        function __construct($name, $id)
        {
            $this->studentName = $name;
            $this->studentID = $id;
        }
        function setDepartment($dept)
        {
            $this->department = $dept;
        }
        function showStudentInfo()
        {
            echo "Student Name : <strong>" . $this->studentName . "</strong><br>";
            echo "Student Name : <strong>" . $this->studentID . "</strong><br>";
            echo "Student Department : <strong>" . $this->department->departmentName . "</strong><br>";
        }
    }

    class Department
    {
            public $departmentName;
            public $students = array();
            public static $countC = 0;
            public static $countEEE = 0;
            public static $countBBA = 0;

            //constraction
            function __construct($name)
            {
                $this->departmentName = $name;
            }

            //add students
            function addStudent($student)
            {
                array_push($this->students, $student);
                $student->setDepartment($this);
            }

            //show students
            function showStudents()
            {
                if (!empty($this->students))
                {
                    global $countCS, $countEEE, $countBBA;
                    if ($this->departmentName == "CS")
                    {
                        $countCS++;
                        echo "<h3>All Students $this->departmentName (version-$countCS): <br></h3>";
                    }
                    if ($this->departmentName == "EEE")
                    {
                        $countEEE++;
                        echo "<h3>All Students $this->departmentName (version-$countEEE): <br></h3>";
                    }
                    if ($this->departmentName == "BBA")
                    {
                        $countBBA++;
                        echo "<h3>All Students $this->departmentName (version-$countBBA): <br></h3>";
                    }
                    foreach($this->students as $student)
                    {
                        echo $student->showStudentInfo() . "<br>";
                    }
                }
                else
                    echo "*NO STUDENTS added in $this->departmentName department!*<br>";
            }

            //delete students
            function deleteStudent($studentObject)
            {
                if (!empty($this->students))
                {
                    $studentExist = false;
                    foreach ($this->students as $student)
                    {
                        if ($student == $studentObject)
                        {
                            $newStudents = array();
                            foreach ($this->students as $student)
                            {
                                if ($student != $studentObject)
                                {
                                    array_push($newStudents, $student);
                                }
                            }
                            $this->students = $newStudents;
                            $studentExist = true;
                            break;
                        }
                    }
                    if(!$studentExist)
                    {
                        echo "*Such student does NOT exist in $this->departmentName department!*<br>";
                    }
                }
                else
                    echo "*NO STUDENTS available to be deleted!*<br>";
            }

    }

    $student1 = new Student("Jubair", "15-29999-2");
    $student2 = new Student("Rakib", "12-10101-1");
    $student3 = new Student("Shanto", "19-21270-2");
    $student4 = new Student("Sathi", "17-347189-3");
    $student5 = new Student("Mita", "18-754323-1");
    $student6 = new Student("Lima", "16-21270-3");
    $deptCS = new Department("CS");
    $deptEEE = new Department("EEE");
    $deptBBA = new Department("BBA");
    $deptCS->addStudent($student1);
    $deptCS->addStudent($student2);
    $deptEEE->addStudent($student3);
    $deptEEE->addStudent($student4);
    $deptBBA->addStudent($student5);
    $deptBBA->addStudent($student6);
    $deptCS->showStudents();
    $deptEEE->showStudents();
    $deptBBA->showStudents();
    $deptCS->deleteStudent($student2);
    $deptCS->showStudents();
    $deptEEE->deleteStudent($student3);
    $deptEEE->showStudents();
    $deptBBA->showStudents();
    $deptCS->deleteStudent($student2);
    $deptEEE->deleteStudent($student5);
    $deptCS->showStudents();
    $deptEEE->showStudents();
    $deptBBA->showStudents();
?>
