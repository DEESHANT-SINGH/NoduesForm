<?php
include 'pdodbcon.php';
$rollno="";
$grno="";
$id="";
$name="";
$number="";
$email="";
$filename="";
$subject1="";
$subject2="";
$subject3="";
$subject4="";
$subject5="";
$subject6="";
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Student Registration</title>
      <link rel="stylesheet" href="style/form.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <header>Students Form</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Basic
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Info
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Subjects
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="studentinsert.php" method="post">
               <div class="page slide-page">
                  <div class="title">
                     Basic Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        First Name
                     </div>
                     <input  required type="text" name="name"  value="<?php echo $name; ?>" placeholder="Enter Name"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Roll No
                     </div>
                     <input type="text" name="rollno"  value="<?php echo $rollno; ?>" placeholder="Enter ROLLNO"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Email
                     </div>
                     <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email Id"/>
                  </div>
                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Important Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        Gr.No
                     </div>
                     <input type="text" name="grno"  value="<?php echo $grno; ?>" placeholder="Enter GRNO"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Number
                     </div>
                     <input type="number" name="number" value="<?php echo $number; ?>" placeholder="Enter Number"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Enter Fee Receipt No
                     </div>
                     <input type="text" name="filename" value="<?php echo $filename; ?>" placeholder="Enter FEE RECEIPT NO."/>
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Enter Subjects:
                  </div>
                  <div class="field">
                     <div class="label">
                        Subject 1
                     </div>
                     <input type="text" name="subject1" value="<?php echo $subject1; ?>" placeholder="Enter Subject1"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Subject 2
                     </div>
                     <input type="text" name="subject2" value="<?php echo $subject2; ?>" placeholder="Enter Subject2"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Subject 3
                     </div>
                     <input type="text" name="subject3" value="<?php echo $subject3; ?>" placeholder="Enter Subject3"/>
                  </div>

                  

                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Next</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Enter Subjects:
                  </div>
                  <div class="field">
                     <div class="label">
                        Subject 4
                     </div>
                     <input type="text" name="subject4" value="<?php echo $subject4; ?>" placeholder="Enter Subject4"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Subject 5
                     </div>
                     <input type="text" name="subject5" value="<?php echo $subject5; ?>" placeholder="Enter Subject5"/>
                  </div>
                  <div class="field">
                     <div class="label">
                        Subject 6
                     </div>
                     <input type="text" name="subject6" value="<?php echo $subject6; ?>" placeholder="Enter Subject6"/>
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button class="submit" type="submit" name="studentinsert">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script src="script/form.js"></script>
   </body>
</html>