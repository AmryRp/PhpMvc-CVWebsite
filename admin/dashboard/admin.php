 <?php
     if (!isset($_SESSION)) {

session_start();

}
            if(isset($_SESSION['user']) && $_SESSION['user'] != "")
                {
                   
                 }
            else{
                    header('Location: https://arp-cv.website/admin/login/'); //redirect URL
                }
        ?>
      
        <meta charset="UTF-8">
         <?php include('header.php'); ?>
         
        <div  class="d-flex align-items-stretch">
            <div id="sidebar" style="background: #1C1B21" class="sidebar py-3 shrink show">
                <div class="nav">
                    <ul class="sidebar-menu list-unstyled">
                        <li class="sidebar-list-item "><a href="#profile" class=" justify-c sidebar-link text-muted "><i class="fas fa-home mr-3 text-gray"></i><span>Profile</span></a></li>
                        <li class="sidebar-list-item "><a href="#education" class="sidebar-link text-muted justify-c "><i class="fas fa-school mr-3 text-gray"></i><span>Education</span></a></li>
                        <li class="sidebar-list-item"><a href="#plan" class="sidebar-link text-muted justify-c"><i class="fas fa-dollar-sign mr-3 text-gray"></i><span>My Plan</span></a></li>
                        <li class="sidebar-list-item"><a href="#experience" class="sidebar-link text-muted justify-c"><i class="fas fa-th-list mr-3 text-gray"></i><span>Experience</span></a></li>
                        <li class="sidebar-list-item"><a href="#skill" class="sidebar-link text-muted justify-c"><i class="fas fa-volleyball-ball mr-3 text-gray"></i><span>Skills</span></a></li>
                    </ul>
                </div>
            </div>
        <div class="container" style="padding-top: 20px;">
       
 <!-- DATA       -->
        <div id="profile" class="tab-content" >
        <button type="button" id="saving" class="btn btn-success saving" data-toggle="modal" data-target="#insertcontact" style="float: right; margin-bottom: 15px"><i class="fa fa-save"></i> Insert Data</button>
        <table class="example tabel table-responsive-xl table-hover" style="align-content: center; text-align: center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Link</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Contact as $task)
        {
            echo "<tr>" ;
            echo "<td class='one'>" . $task['id'] . "</td>";
            echo "<td class='two'>" . $task['nama'] . "</td>";
            echo "<td class='three'>" . $task['link'] . "</td>" ;
            echo "<td><abbr class='tooltipedit'  data-title='Edit Data'><a data-target='#insertcontact' id='updating' data-toggle='modal' type='button' class='btn confirm updating' style='color: blue;'><i class='fa fa-edit'></i></a></abbr>
                        <abbr class='tooltipdelete' data-title='Delete Data'><a onclick='deletealert(event)' href='#deletecontact'type='button' class='btn confirm confirmdelete' style='color: red;'><i class='fa fa-trash'></i></a></abbr>
                    </td>";
            echo "  </tr>";
        }
                ?> 
            </tbody>
            
        </table>
    </div>
    <div id="education" class="tab-content" hidden>
        <button type="button" id="saving" class="btn btn-success saving" data-toggle="modal" data-target="#insertedu" style="float: right; margin-bottom: 15px"><i class="fa fa-save"></i> Insert Data</button>
        <table class="example tabel table-responsive-xl table-hover" style="align-content: center; text-align: center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Jurusan</th>
                    <th>GPA</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Logo</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Education as $edu)
        {
            echo "<tr>" ;
             echo "<td class='one'>" . $edu['id'] . "</td>";
            echo "<td class='two'>" . $edu['nama'] . "</td>";
            echo "<td class='three'>" . $edu['jurusan'] . "</td>" ;
            echo "<td class='four'>" . $edu['gpa'] . "</td>" ;
            echo "<td class='five'>" . $edu['mulai'] . "</td>" ;
            echo "<td class='six'>" . $edu['selesai'] . "</td>" ;
            echo "<td><img style='max-height: 100px; ' src='data:image/jpeg;base64,".trim(base64_encode( $edu['logo'] ))."'/></td>";
            echo "<td><abbr class='tooltipedit'  data-title='Edit Data'><a data-target='#insertedu' id='updating' data-toggle='modal' type='button' class='btn confirm updating' style='color: blue;'><i class='fa fa-edit'></i></a></abbr>
                        <abbr class='tooltipdelete' data-title='Delete Data'><a type='button' class='btn confirm' style='color: red;'><i class='fa fa-trash'></i></a></abbr>
                    </td>";
                      echo "  </tr>";
        }
                ?> 
            </tbody>
            
        </table>
    </div>
    <div id="plan" class="tab-content" hidden>
        <button type="button" id="saving" class="btn btn-success saving" data-toggle="modal" data-target="#insertplan" style="float: right; margin-bottom: 15px"><i class="fa fa-save"></i> Insert Data</button>
        <table class="example tabel table-responsive-xl table-hover" style="align-content: center; text-align: center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Link</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Contact as $task)
        {
            echo "<tr>" ;
            echo "<td class='id'>" . $task['nama'] . "</td>";
            echo "<td class='name'>" . $task['link'] . "</td>" ;
            echo "<td><abbr class='tooltipedit'  data-title='Edit Data'><a data-target='#insertplan' id='updating' data-toggle='modal' type='button' class='btn confirm updating' style='color: blue;'><i class='fa fa-edit'></i></a></abbr>
                        <abbr class='tooltipdelete' data-title='Delete Data'><a type='button' class='btn confirm' style='color: red;'><i class='fa fa-trash'></i></a></abbr>
                    </td>";
                      echo "  </tr>";
        }
                ?> 
            </tbody>
            
        </table>
    </div>
     <div id="experience" class="tab-content" hidden>
        <button type="button" id="saving" class="btn btn-success saving" data-toggle="modal" data-target="#insertexp" style="float: right; margin-bottom: 15px"><i class="fa fa-save"></i> Insert Data</button>
        <table  class="example tabel table-responsive-xl table-hover" style="align-content: center; text-align: center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Link</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Contact as $task)
        {
            echo "<tr>" ;
            echo "<td class='name'>" . $task['nama'] . "</td>";
            echo "<td class='link'>" . $task['link'] . "</td>" ;
            echo "<td><abbr class='tooltipedit'  data-title='Edit Data'><a data-target='#insertexp' id='updating' data-toggle='modal' type='button' class='btn confirm updating' style='color: blue;'><i class='fa fa-edit'></i></a></abbr>
                        <abbr class='tooltipdelete' data-title='Delete Data'><a type='button' class='btn confirm' style='color: red;'><i class='fa fa-trash'></i></a></abbr>
                    </td>";
                      echo "  </tr>";
        }
                ?> 
            </tbody>
            
        </table>
    </div>
     <div id="skill" class="tab-content" hidden>
        <button type="button" id="saving" class="btn btn-success saving" data-toggle="modal" data-target="#insertskill" style="float: right; margin-bottom: 15px"><i class="fa fa-save"></i> Insert Data</button>
        <table  class="example tabel table-responsive-xl table-hover" style="align-content: center; text-align: center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Link</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($Contact as $task)
        {
            echo "<tr>" ;
            echo "<td class='id'>" . $task['nama'] . "</td>";
            echo "<td class='name'>" . $task['link'] . "</td>" ;
            echo "<td><abbr class='tooltipedit'  data-title='Edit Data'><a data-target='#insertskill' id='updating' data-toggle='modal' type='button' class='btn confirm updating' style='color: blue;'><i class='fa fa-edit'></i></a></abbr>
                        <abbr class='tooltipdelete' data-title='Delete Data'><a type='button' class='btn confirm' style='color: red;'><i class='fa fa-trash'></i></a></abbr>
                    </td>";
                    echo "  </tr>";
        }
                ?> 
            </tbody>
            
        </table>
    </div>
    <!-- DATA -->
</div>
</div>
<!-- The Modal Insert -->
  <?php include('modals.php'); ?>
    </body>
    <script>
        $(document).ready(function () {
            $('.nav ul li:first').addClass('active');
            $('.tab-content:not(:first)').attr('hidden',true);
            $('.nav ul li a').click(function (event) {
                event.preventDefault();
                var content = $(this).attr('href');
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
                $(content).attr('hidden',false);
                document.cookie = "pagevalue="+content+"";
                $(content).siblings('.tab-content').attr('hidden',true);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
        $('table.example').DataTable({dom: '<"top"f>rt<"bottom right"p><"clear">',
          "columnDefs": [ {
          "targets": 'no-sort',
          "orderable": false,
        } ]
    });
        $('.dataTables_filter').addClass('pull-left');
    });
    </script>
    <script src="https://arp-cv.website/cv/static/js/alert.js"></script>
    
    </html>
         <?php include('footer.php'); ?>
