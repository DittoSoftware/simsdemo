<!doctype html>
<html>
<head>
<title>Student Data File Merge</title>
<!-- <script src="xlsx.full.min.js"></script> -->
<script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url(); ?>js/jquery.dataTables.min.js"></script>  

<script src="<?php echo base_url(); ?>js/dataTables.buttons.min.js"></script> 
<script src="<?php echo base_url(); ?>js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>js/jszip.min.js"></script> 



<!-- <script src="pdfmake.min.js"></script>  -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" ></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  -->

<link rel="stylesheet" href="<?php echo base_url();?>CSS/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>CSS/jquery.dataTables.min.css">
</head>


<body>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student Id</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Location</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th>Student Id</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Location</th>
            </tr>
        </tfoot>
    </table>
<script>

$(document).ready(function() {
    $('#example').DataTable( {
        // "ajax": '../ajax/data/output.txt'
        "ajax": 'D:\home\site\wwwroot\application\files\output.txt',
        "pageLength": 20,
        dom: 'Blfrtip',
        buttons: [ 'excelHtml5'
            // 'copyHtml5',
            // 'csvHtml5',
            // 'pdfHtml5'
        ]

    } );
} );


</script>
</body>
</html>
