<!--Include Header-->
<?php  
  $path = $_SERVER['DOCUMENT_ROOT'] ;
  $path .= "/includes/header.php";
  include ($path);
  include($_SERVER['DOCUMENT_ROOT'] . "/includes/app-dashboard-header.php");
?>

    <div class="main-page" style="min-height: 660px;">
        <div class="row">
            <div class="small-12 medium-12 large-12 columns">
                <div class="container-fluid">
                    <div class="row">
                        <div class="columns">
                            <h2 class="title" style="border-bottom: 1px solid #4c9cb4; margin-bottom: 30px;">Dashboard</h2>
                        </div>
                    </div>                     
                </div>
                <!-- /.container-fluid -->

                <div class="row">
                  <div class="columns">
                    <a class="dashboard-nav-card" href="#" style="background: #5da423;">
                        <?php                      
                            $dbconn = DB_Connect_Direct();
                            $query = "SELECT id from student;";
                            $result = DB_Query($dbconn, $query);
                            if ($result != false) {
                              $totalstudents=DB_NumRows($result);
                            }
                            DB_FreeResult($result);
                        ?>
                      <i class="dashboard-nav-card-icon fa fa-users" aria-hidden="true"></i>
                      <p class="dashboard-nav-card-title"><?php echo htmlentities(number_format($totalstudents));?></p>
                      <h3 class="dashboard-nav-card-title-sub">Registered Users</h3>

                      <?php
                          /*$query_result_array = array();                      
                          $dbconn = DB_Connect_Direct();
                          $query = "SELECT COUNT(S.id) AS CNT, S.`status` FROM student AS S GROUP BY S.`status`;";
                          $result = DB_Query($dbconn, $query);
                          if ($result != false) {
                            while ($obj = DB_FetchObject($result)) { //Build Array from result
                                $query_result_array[] = $obj;
                            } // end while ($obj = DB_FetchObject($result));
                          }
                          DB_FreeResult($result);

                          echo "<ul style=\"list-style-type: none; margin: 10px -16px 0px 60px; padding-top: 56px; font-size: smaller;\">";
                          foreach ($query_result_array as $obj) {
                                                     
                            echo "  <li>"; 
                            echo "     <div style=\"width: 100%; display: inline-block; line-height: .5rem;\"><span style=\"float: left;\">" . Get_Status($obj->status) . "</span><strong style=\"float: right;\"> " . number_format($obj->CNT) .  "</strong></div>";
                            echo "  </li>";
                            
                          }
                          echo "</ul>";*/
                      ?>

                    </a>
                  </div>

                  <div class="columns">
                    <a class="dashboard-nav-card" href="#" style="background: #1779ba;">
                        <?php 
                            $dbconn = DB_Connect_Direct();
                            $query = "SELECT * from  subjects;";
                            $result = DB_Query($dbconn, $query);
                            if ($result != false) {
                              $totalsubjects=DB_NumRows($result);
                            }
                            DB_FreeResult($result);
                        ?>
                      <i class="dashboard-nav-card-icon fa fa-graduation-cap" aria-hidden="true"></i>
                      <p class="dashboard-nav-card-title"><?php echo htmlentities($totalsubjects);?></p>
                      <h3 class="dashboard-nav-card-title-sub">Subjects Listed</h3>
                    </a>
                  </div>

                  <div class="columns">
                    <a class="dashboard-nav-card" href="#" style="background: blueviolet;">
                        <?php 
                            $dbconn = DB_Connect_Direct();
                            $query = "SELECT * from  grade;";
                            $result = DB_Query($dbconn, $query);
                            if ($result != false) {
                              $totalclasses=DB_NumRows($result);
                            }
                            DB_FreeResult($result);
                        ?>
                      <i class="dashboard-nav-card-icon fa fa-home" aria-hidden="true"></i>
                      <p class="dashboard-nav-card-title"><?php echo htmlentities($totalclasses);?></p>
                      <h3 class="dashboard-nav-card-title-sub">Total classes listed</h3>
                    </a>
                  </div>

                  <div class="columns">
                    <a class="dashboard-nav-card" href="#" style="background: brown;">
                        <?php 
                            /*$dbconn = DB_Connect_Direct();
                            $query = "SELECT  distinct StudentId from  tblresult;";
                            $result = DB_Query($dbconn, $query);
                            if ($result != false) {
                              $totalresults=DB_NumRows($result);
                            }
                            DB_FreeResult($result);*/
                        ?>
                      <i class="dashboard-nav-card-icon fa fa-building" aria-hidden="true"></i>
                      <p class="dashboard-nav-card-title"></p>
                      <h3 class="dashboard-nav-card-title-sub">Results Declared</h3>
                    </a>
                  </div>
                </div>

            </div>
            <div class="small-12 medium-6 large-6 columns">
                <div id="chart-container" style="padding: 15px 0;">
                    <canvas id="RegStudentGraph" style="position: relative; height:40vh; width:40vw" ></canvas>
                </div>              
            </div>
            <div class="small-12 medium-6 large-6 columns">
                <div id="chart-container" style="padding: 15px 0;">
                    <canvas id="StudentSubjectsGraph" style="position: relative; height:40vh; width:40vw" ></canvas>
                </div>              
            </div>
            <div class="small-12 medium-6 large-6 columns">
                <div id="chart-container" style="padding: 15px 0;">
                    <canvas id="StudentClassGraph" style="position: relative; height:40vh; width:40vw" ></canvas>
                </div>              
            </div>
        </div>
    </div>
    <!-- /.main-page -->





<!--Include Footer-->
  <?php 

    $path = $_SERVER['DOCUMENT_ROOT'] ;
    $path .= "/includes/footer.php";
    include ($path);
    include($_SERVER['DOCUMENT_ROOT'] . "/includes/app-dashboard-footer.php");
  ?>

  <script type="text/javascript">
  
  //Chart Script
  $(document).ready(function () {
      showRegStudentGraph();
      showStudentSubjectsGraph();
      StudentClassGraph();
  });


  function showRegStudentGraph()
  {
      {
          $.post("/includes/reg_student_data.php",
          function (data)
          {
              console.log(data);
               var name = [];
              var marks = [];

              for (var i in data) {
                  name.push(data[i].desc);
                  marks.push(data[i].CNT);
              }

              var chartdata = {
                  labels: name,
                  datasets: [
                      {
                          label: 'Registered Students',
                          backgroundColor: '#5da423',
                          borderColor: '#46d5f1',
                          hoverBackgroundColor: '#CCCCCC',
                          hoverBorderColor: '#666666',
                          data: marks,

                          /*barPercentage: 0.5,
                          barThickness: 30,
                          maxBarThickness: 30,
                          minBarLength: 2*/
                      }
                  ]
              };

              var graphTarget = $("#RegStudentGraph");

              var barGraph = new Chart(graphTarget, {
                  type: 'bar',
                  data: chartdata
              });
          });
      }
  }


  function showStudentSubjectsGraph()
  {
      {
          $.post("/includes/student_subjects_data.php",
          function (data)
          {
              console.log(data);
               var name = [];
              var marks = [];
              var desc = [];

              for (var i in data) {
                  name.push(data[i].subjectcode);
                  marks.push(data[i].CNT);
                  desc.push(data[i].description);
              }

              var chartdata = {
                  labels: name,
                  datasets: [
                      {
                          label: 'Students/Registered Subjects',
                          backgroundColor: '#1779ba',
                          borderColor: '#46d5f1',
                          hoverBackgroundColor: '#CCCCCC',
                          hoverBorderColor: '#666666',
                          data: marks

                          /*barPercentage: 0.5,
                          barThickness: 30,
                          maxBarThickness: 30,
                          minBarLength: 2*/
                      }
                  ]
              };

              var graphTarget = $("#StudentSubjectsGraph");

              var barGraph = new Chart(graphTarget, {
                  type: 'bar',
                  data: chartdata
              });
          });
      }
  }

  function StudentClassGraph()
  {
      {
          $.post("/includes/student_class_data.php",
          function (data)
          {
              console.log(data);
               var name = [];
              var marks = [];
              var desc = [];

              for (var i in data) {
                  name.push(data[i].Name);
                  marks.push(data[i].CNT);
                  desc.push(data[i].grade);
              }

              var chartdata = {
                  labels: name,
                  datasets: [
                      {
                          label: 'Students/Registered Classes',
                          backgroundColor: 'blueviolet',
                          borderColor: '#46d5f1',
                          hoverBackgroundColor: '#CCCCCC',
                          hoverBorderColor: '#666666',
                          data: marks

                          /*barPercentage: 0.5,
                          barThickness: 30,
                          maxBarThickness: 30,
                          minBarLength: 2*/
                      }
                  ]
              };

              var graphTarget = $("#StudentClassGraph");

              var barGraph = new Chart(graphTarget, {
                  type: 'bar',
                  data: chartdata
              });
          });
      }
  }
   //End Chart Script

</script>