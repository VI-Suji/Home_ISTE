<?php
        // define variables and set to empty values
        $name = $email = $college = $birthday = $gender = $course = $phone = $branch = "";
        
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
          }
        
          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input($_POST["email"]);
          }

          if (empty($_POST["course"])) {
            $website = "";
          } else {
            $website = test_input($_POST["email"]);
          }
          if (empty($_POST["branch"])) {
            $website = "";
          } else {
            $website = test_input($_POST["branch"]);
          }
        
          if (empty($_POST["college"])) {
            $website = "";
          } else {
            $website = test_input($_POST["email"]);
          }
        
          if (empty($_POST["phone"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }
        
          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        function insertMemberRecord($name,$email,$college,$birthday,$gender,$course,$phone,$branch)
    {
        $query = "INSERT INTO registered_users (name,email,college,birthday,gender,course,phone,branch) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $paramType = "ssss";
        $paramArray = array(
            $name
            $email
            $college
            $birthday
            $gender
            $course
            $phone
            $branch
        );
        $insertId = $this->ds->insert($query, $paramType, $paramArray);
        return $insertId;
    }
        ?>

