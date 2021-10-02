<?php
   if (!isset($_SESSION['ACCOUNT_ID'])){
      //redirect(web_root."index.php");
    } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Report Printing</title>
    <link rel="stylesheet" type="text/css" href="css2/jquery-ui">
    <script type="text/javascript" src="js2/jquery-1.12.4 js"></script>
    <script type="text/javascript" src="js2/jquery-360.min"></script>
    <script type="text/javascript" src="js2/jquery-ui"></script>
    <script type="text/javascript">
        $( function() {
        $( "#date" ).datepicker();
        } );
  
    </script>

<style type="text/css">
.table_print {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table_print > thead > tr > th,
.table_print > tbody > tr > th,
.table_print > tfoot > tr > th,
.table_print > thead > tr > td,
.table_print > tbody > tr > td,
.table_print > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  /*border-top: 1px solid #ddd;*/
}
.table_print > thead > tr > th {
  vertical-align: bottom;
  /*border-bottom: 2px solid #ddd;*/
}
.table_print > caption + thead > tr:first-child > th,
.table_print > colgroup + thead > tr:first-child > th,
.table_print > thead:first-child > tr:first-child > th,
.table_print > caption + thead > tr:first-child > td,
.table_print > colgroup + thead > tr:first-child > td,
.table_print > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table_print > tbody + tbody {
  /*border-top: 2px solid #ddd;*/
}
.table_print .table_print {
  background-color: #fff;
}
.search_panel{
  margin-bottom: 5px;
}
.Search_date{
  font-size:15px;
  height:34px;
  width:160px;
}
.Search_partylist{
  font-size:15px;
  height:34px;
  width:160px;
}
.Search_partylist > option {
  padding: 6px;
  color: #000;
}
</style>
  </head>
  
  <body>
  <section id="feature" class="transparent-bg">
        <div class="container"> 
          <div class="col-md-12">
          <form action="index.php?view=attendance" method="POST" >
            <div class="row">
              <div class="search_panel pull-right">
              <label>Date :</label> 
               <input class="Search_date date_pickerfrom" size="11" 
                                  value="<?php Date('m/d/Y') ?>" 
                                  data-date="<?php Date('m/d/Y') ?>" data-date-format="yyyy-mm-dd" data-link-field="any" 
                                  data-link-format="yyyy-mm-dd" type="text"   name="attenddate" id="datemask2">
                  <!-- <label>To :</label>
                  <input class="Search_date date_pickerfrom" size="11" 
                                  value="" 
                                  data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" 
                                  data-link-format="yyyy-mm-dd" type="text" value=""  name="from" id="datemask2"> -->

                   <label> Employee ID :</label>
                   <input type="text" name= "empid" class="Search_partylist Attendance"> 
                  
                     
                    <button class="btn btn-default" type="submit" id="search_attendance"><i class="fa fa-go">GO</i></button> 
                </div>
            </div>
            
           <div class="center wow fadeInDown"> 
                  <h2 class="page-header">Attendance Report</h2>  
                
            </div>
            <div id="error_msg" align="center"></div>

            <div class="row">
                <div class="features">
                  <?php 

                  if (isset($_POST['Attendance'])) {
                    # code...
                   ?>
                   <table id="" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">
                
                  <thead>
                  <tr>
                    <th colspan="2"></th> 
                    <th colspan="2"><center>AM</center></th>
                    <th colspan="2"><center>PM</center></th>
                  </tr>
                    <tr>
                      <th>Student</th>
                      <th>Date</th>
                      <th width="150px">Time-In</th>  
                      <th width="150px">Time-Out</th>
                      <th width="150px">Time-In</th>  
                      <th width="150px">Time-Out</th>  
                    </tr> 
                  </thead> 
                  <tbody>
                    <?php  
                      @$attenddate = date_format(date_create($_POST['attenddate']),'Y-m-d');
                      @$attendid = ($_POST['empid']);

                      $mydb->setQuery("SELECT * FROM `tbltimetable` 
                               WHERE `empid`=`StudentID` AND 'attenddate'='AttendDate'");

                      $cur = $mydb->loadResultList();

                    foreach ($cur as $result) { 
                      echo '<tr>';
                      echo '<td>'. $result->Firstname.','. $result->Lastname.' '. $result->Middlename.'</td>';
                      echo '<td>'. date_format(date_create($result->AttendDate),'M. d, Y').'</td>'; 
                      echo '<td>'. $result->TimeInAM.'</td>'; 
                      echo '<td>'. $result->TimeOutAM.'</td>';  
                      echo '<td>'. $result->TimeInPM.'</td>'; 
                      echo '<td>'. $result->TimeOutPM.'</td>';
                       
                      echo '</tr>';
                    } 
                    ?>
                  </tbody>
                  
                </table> 
                            
                 <?php }else{
                    echo "<h2 class='center'>No Record</h2>";
                    } ?>
                 </div><!--/.services-->
                </div><!--/.row-->  
              </form>
             </div>
          </div><!--/.container-->
      </section><!--/#feature-->

<div class="container">
  <div class="row">
    <form action="attendance_print.php" method="POST" target="_blank">
    <input type="hidden" name="Attendance" value="<?php echo isset($_POST['Attendance']) ? $_POST['Attendance'] : ''; ?>">
    <input type="hidden" name="empid" value="<?php echo isset($_POST['empid']) ? $_POST['attenddate'] : ''; ?>">
   
   <button class="btn btn-primary" target="_blank" href="">Print</button> 
   </form>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
