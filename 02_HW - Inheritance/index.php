<?php require_once('includes/header.php'); ?>

<main>
	<div>
		<p>
			<?php echo "School year in Bulgaria starts on " . School::$year_opening; ?>
		</p>
		<p>
			<?php 
			//School::school_schedule_info();
		//echo date('H:i');
		/*	echo "<br>";
			$sub_name = array(
				0 => 'Maths',
				1 => 'English');
			$num_hours = array(
				0 => 20,
				1 => 30);
			$num_marks = array(
				0 => 5,
				1 => 10);


			$teacher = new Teachers('First Teacher', '00-00-00', 'education', 2, $sub_name, $num_hours, $num_marks);
			/*echo "<pre>" ;
			var_dump($teacher);
			echo "</pre>";
			$teacher->InfoTeacher();*/

			/*$sub_name = array(
				0 => 'Maths',
				1 => 'English',
				2 => 'Physics');
			$num_hours = array(
				0 => 20,
				1 => 30,
				2 => 10);
			$num_marks = array(
				0 => 5,
				1 => 10,
				2 => 4);

			$teacher2 = new Teachers('Second Teacher', '00-00-002', 'education2', 3, $sub_name, $num_hours, $num_marks);
			//$mark, $subject, $student_id			
			$teacher2->evaluate(4, 'History', 1);
			$teacher2->evaluate(6, 'Math', 2);
			$teacher2->evaluate(4, 'English', 2);
			
			/*$teacher2->InfoTeacher();

			$teacher2->works(6);*/
			//$st_id, $people_name, $people_phone_number
			$student1 = new Student(3, "First Student", "00-00-00");
			//$student1->gpa(1);
			$student1->StudentInfo(3);
			echo "<hr>";

			/*$student2 = new Student(2, "Second Student", "88-88-88");
			//$student1->gpa(1);
			$student2->StudentInfo(2);*/

			$unit1 = new Unit('My School', '5A');
			$unit1 ->teacherList('5A');
			echo "<hr>";
			$unit1 ->studentList('5A');


			?>
		</p>
	</div>
</main>
<?php require_once('includes/footer.php'); ?>