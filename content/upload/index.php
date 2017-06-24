<?php

	$page = 'admin';

	$section = 'upload';

	require_once '../../core/init.php';

	requireAdmin();

	$errorStore = rootPath . '/errors/myerrors.log';

	$courses = Database::getInstance()->query('SELECT course_name FROM courses')->results();

	$lecturers = Database::getInstance()->query('SELECT name FROM lecturers')->results();

	$uploadErrors = uploadErrors();

	$notesRootPath = rootPath . '/downloads/notes/';

	$notesSimplePath = '/downloads/notes/';

	$timeTablesRootPath = rootPath . '/downloads/timetables/';

	$timeTablesSimplePath = '/downloads/timetables/';

	$maxFileSize = 5000000;

	if (isset($_POST['submitnotes'])) 
	{

		$notesName = $_POST['name'];

		$lecturerName = $_POST['lecturer'];

		$courseName = $_POST['course'];

		$year = $_POST['year'];

		$semester = $_POST['semester'];

		$notesFile = $_FILES['file'];

		$uploadError = $notesFile['error'];

		$error = $uploadErrors[$uploadError];

		if ($notesFile['size'] <= $maxFileSize && $notesFile['error'] == 0) 
		{

			$newFileName = date("Y-m-d-h-i-s-a") . '-' . $notesFile['name'];

			$moveFile = move_uploaded_file($notesFile['tmp_name'], $notesRootPath . $newFileName);

			$notesRootPath = $notesRootPath . $newFileName;

			$notesSimplePath = $notesSimplePath . $newFileName;

			$array = array($notesName, $lecturerName, $courseName, $year, $semester, $notesSimplePath, $notesRootPath);

			if ($moveFile) 
			{

				$sqlQuery = 'INSERT INTO notes(name, lecturer, course, year, semester, simplepath, rootpath) VALUES(?, ?, ?, ?, ?, ?, ?)';

				if (Database::getInstance()->query($sqlQuery, $array)) 
				{

					Redirect::to('/content/upload/?notestatus=success');

				}

				else
				{

					$errorListNotes[] = Database::getInstance()->query($sqlQuery, $array)->error();
					
				}

			} 

			else 
			{

				error_log('Failed to move file. This could be because of permisions or there is no such file or directory', 3, $errorStore);

				$errorListNotes[] = 'Failed to upload file, Try again later';

			}

		} 

		else 
		{

			$errorListNotes[] = $error;

		}

	}

	if (isset($_POST['submittimetable'])) 
	{

		$timeTableName = $_POST['name'];

		$uploadedBy = $_POST['lecturer'];

		$academicYear = $_POST['year'];

		$timetableFile = $_FILES['file'];

		$uploadError = $timetableFile['error'];

		$error = $uploadErrors[$uploadError];

		if ($timetableFile['size'] <= $maxFileSize && $timetableFile['error'] == 0) 
		{

			$newFileName = date("Y-m-d-h-i-s-a") . '-' . $timetableFile['name'];

			$moveFile = move_uploaded_file($timetableFile['tmp_name'], $timeTablesRootPath . $newFileName);

			$timeTablesRootPath = $timeTablesRootPath . $newFileName;

			$timeTablesSimplePath = $timeTablesSimplePath . $newFileName;

			$array = array($timeTableName, $uploadedBy, $academicYear, $timeTablesSimplePath, $timeTablesRootPath);

			if ($moveFile) 
			{

				$sqlQuery = 'INSERT INTO timetables(name, addedby, year, simplepath, rootpath) VALUES(?, ?, ?, ?, ?)';

				if (Database::getInstance()->query($sqlQuery, $array)) 
				{

					Redirect::to('/content/upload/?timetablestatus=success');

				}

				else
				{

					$errorListTimeTable[] = Database::getInstance()->query($sqlQuery, $array)->error();

				}

			} 

			else 
			{

				error_log('Failed to move file. This could be because of permisions or there is no such file or directory', 3, $errorStore);

				$errorListTimeTable[] = 'Failed to upload file, Try again later';

			}

		} 

		else 
		{

			$errorListTimeTable[] = $error;

		}
		
	}  

	require_once header;

	require_once uploadsView;

	require_once footer;

?>