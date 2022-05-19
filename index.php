<?php
//INSERT INTO `student` (`sno`, `regno`, `name`, `email`, `branch`, `semester`, `address`, `phone`, `gender`, `SGPA`, `state`) VALUES (NULL, '2k19mc001', 'Shubee', 's@gmail.com', 'MCE', '5', 'ad adwwda s', '8552154658', 'f', '9', 'jk');
  $insert=false;
  $update=false;
  $delete=false;

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "shubee";
   
   $conn = mysqli_connect($servername, $username, $password, $database);
   
   if(!$conn)
   {
     die("failed". mysqli_connect_error());
   }
   if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `student` WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
  }
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   if(isset($_POST['snoEdit'])){
     //updating
      
     $sno= $_POST["snoEdit"];
     $regno = $_POST["regnoEdit"];
     $name = $_POST["nameEdit"];
     $email = $_POST["emailEdit"];
     $branch = $_POST["branchEdit"];
     $semester = $_POST["semesterEdit"];
     $address = $_POST["addressEdit"];
     $phone = $_POST["phoneEdit"];
     $gender = $_POST["genderEdit"];
     $SGPA = $_POST["SGPAEdit"];
     $state = $_POST["stateEdit"];
   $sql =  "UPDATE `student` SET `regno` = '$regno' ,`name` = '$name' , `email` = '$email' , `branch` = '$branch' , `semester` = '$semester' , `address` = '$address', `phone` = '$phone', `gender` = '$gender', `SGPA` = '$SGPA' , `state` = '$state' WHERE `student`.`sno` = $sno";
       $result = mysqli_query($conn, $sql);
       if($result){
         $update=true;
       }
        
    
    }
    $regno = $_POST["regno"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $branch = $_POST["branch"];
    $semester = $_POST["semester"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $SGPA = $_POST["SGPA"];
    $state = $_POST["state"];
  $sql =  "INSERT INTO `student` (`regno`, `name`, `email`, `branch`, `semester`, `address`, `phone`, `gender`, `SGPA`, `state`) VALUES ('$regno', '$name', '$email', '$branch', '$semester', '$address', '$phone', '$gender', '$SGPA', '$state')";
      $result = mysqli_query($conn, $sql);
      if($result){
       // echo "shubee dubee<br>";
       $insert=true;
    }
    else{
      echo "fail". mysqli_error($conn);
    }

  }    
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    

    <title>Hostel Registration</title>
    

</head>

<body>
    <!--edit modal-->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
    EDIT Modal
</button>-->
 <!-- Edit Modal -->
 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this entry</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
          <div class="modal-body">
            <form action="/pro/index.php" method="post">
              <input type="hidden" name="snoEdit" id="snoEdit"> 
              <div class="form-group">
                <label for="title">Registration number</label>
                <input type="text" class="form-control" id="regnoEdit" name="regnoEdit" aria-describedby="emailHelp">
              </div>
        
              <div class="form-group">
                <label for="desc">Name</label>
                <input type="text" class="form-control" id="nameEdit" name="nameEdit" rows="3">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailEdit" name="emailEdit"aria-describedby="emailHelp">
          
              </div>
              <div class="form-group">
                <label for="desc">Branch</label>
                <input type="text" class="form-control" id="branchEdit" name="branchEdit" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Semester</label>
                <input type="text" class="form-control" id="semesterEdit" name="semesterEdit" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Address</label>
                <input type="text" class="form-control" id="addressEdit" name="addressEdit" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Phone</label>
                <input type="text" class="form-control" id="phoneEdit" name="phoneEdit" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Gender</label>
                <input type="text" class="form-control" id="genderEdit" name="genderEdit" rows="3">
                <div class="form-group">
                    <label for="desc">SGPA</label>
                    <input type="text" class="form-control" id="SGPAEdit" name="SGPAEdit" rows="3">
                  </div>
                  <div class="form-group">
                    <label for="desc">State</label>
                    <input type="text" class="form-control" id="stateEdit" name="stateEdit" rows="3">
                  </div>
              </div>

              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Registration_Form</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <?php
       if($insert){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your details has been inserted successfully
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>×</span>
        </button>
      </div>";
       }
  ?>
  <?php
       if($delete){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your details has been deleted successfully
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>×</span>
        </button>
      </div>";
       }
  ?>
  <?php
       if($update){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your details has been updated successfully
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>×</span>
        </button>
      </div>";
       }
  ?>
  <div class="container my-4">
  <h2>Add your details</h2>
  <form action="/pro/index.php" method="post">
              <div class="form-group">
                <label for="title">Registration number</label>
                <input type="text" class="form-control" id="regno" name="regno" aria-describedby="emailHelp">
              </div>
        
              <div class="form-group">
                <label for="desc">Name</label>
                <input type="text" class="form-control" id="name" name="name" rows="3">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email"aria-describedby="emailHelp">
          
              </div>
              <div class="form-group">
                <label for="desc">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Address</label>
                <input type="text" class="form-control" id="address" name="address" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" rows="3">
              </div>
              <div class="form-group">
                <label for="desc">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" rows="3">
                <div class="form-group">
                    <label for="desc">SGPA</label>
                    <input type="text" class="form-control" id="SGPA" name="SGPA" rows="3">
                  </div>
                  <div class="form-group">
                    <label for="desc">State</label>
                    <input type="text" class="form-control" id="state" name="state" rows="3">
                  </div>
              </div>

              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
  </div>

  <div class="container my-4">
      
      <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Regno</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Branch</th>
      <th scope="col">Semester</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">SGPA</th>
      <th scope="col">State</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  <?php
       $sql = "SELECT * FROM `student`";
       $result = mysqli_query($conn, $sql);
       $sno=0;
       while($row = mysqli_fetch_assoc($result)){
        $sno=$sno+1;
           echo "<tr>
           <th scope='row'>".$sno."</th>
           <td>". $row['regno'] . "</td>
           <td>". $row['name'] . "</td>
           <td>". $row['email'] . "</td>
           <td>". $row['branch'] . "</td>
           <td>". $row['semester'] . "</td>
           <td>". $row['address'] . "</td>
           <td>". $row['phone'] . "</td>
           <td>". $row['gender'] . "</td>
           <td>". $row['SGPA'] . "</td>
           <td>". $row['state'] . "</td>
           <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> 
           <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>

         </tr>";
       }
       
       

      ?>
    
    
  </tbody> 
</table>
  </div>

<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script> 
  <script>
   edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
      element.addEventListener("click", (e)=>{
         console.log("edit");
         tr = e.target.parentNode.parentNode;
         regno = tr.getElementsByTagName("td")[0].innerText;
         name =tr.getElementsByTagName("td")[1].innerText;
         email =tr.getElementsByTagName("td")[2].innerText;
         branch =tr.getElementsByTagName("td")[3].innerText;
         semester =tr.getElementsByTagName("td")[4].innerText;
         address =tr.getElementsByTagName("td")[5].innerText;
         phone =tr.getElementsByTagName("td")[6].innerText;
         gender =tr.getElementsByTagName("td")[7].innerText;
         SGPA =tr.getElementsByTagName("td")[8].innerText;
         state =tr.getElementsByTagName("td")[9].innerText;
         console.log(regno,name,email,branch,semester,address,phone,gender,SGPA,state);
         regnoEdit.value = regno;
         nameEdit.value = name;
         emailEdit.value = email;
         branchEdit.value = branch;
        semesterEdit.value = semester;
         addressEdit.value = address;
         phoneEdit.value = phone;
         genderEdit.value = gender;
         SGPAEdit.value = SGPA;
         stateEdit.value = state;
         snoEdit.value= e.target.id;
        console.log(e.target.id) 
         $('#editModal').modal('toggle');        
      })
    })


    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element)=>{
      element.addEventListener("click", (e)=>{
         console.log("edit");
        sno = e.target.id.substr(1,)
         if( confirm("PAKKAAA??!!!")){
           console.log("yes");
           window.location = `/pro/index.php?delete=${sno}`;
           
         }
        else{
          console.log("no");
        }
             
      })
    })
   </script>
    
  
    </body>
</html>