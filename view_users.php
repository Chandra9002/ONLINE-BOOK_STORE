<?php
require_once 'config.php';

$query = "select *from customer";
// PHP mysqli_query()method is used to execute the query 
$exe_query = mysqli_query($connect, $query);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <!-- offset used here to take a margin from both side and it will stick into center   -->
        <div class="row">
            <div class="col-sm-10 offset-1">
                <span style="text-align:center;">
                    <?php if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == 'success') {
                            echo "<h4 style=color:green; >" . "User Created Successfully" . "</h4>";
                        } else {
                            echo "Try Again";
                        }
                    } ?>
                </span>
                <legend style="text-align: center; margin-top:25px; margin-bottom: 25px;"> User's Details</legend>
                <span id="msg"> </span>
                <table class="table">
                    <tr><th>ID</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>ContactNumber</th>
                        <th>createdAT</th>
                        
                    </tr>
                    <!-- Embedding PHP into HTML -->
                    <?php while ($records = mysqli_fetch_assoc($exe_query)) { echo"<pre>"; print_r($records);?>

                        <tr>
                            <td><?php echo $records['ID']; ?></td>
                            <td><?php echo $records['FirstName']; ?></td>
                            <td><?php echo $records['LastName']; ?></td>
                            <td><?php echo $records['Email']; ?></td>
                            <td><?php echo $records['Address'];?></td>
                            <td><?php echo $records['ContactNumber']; ?></td>
                            <td><?php echo $records['CreatedAT'];?></td>
                            <td><a href="" class="user_edit_btn bi bi-pencil-square" data-toggle="modal" data-target="#exampleModal"></a> | <a href="#" class="user_delete_btn bi bi-trash" style="color:red;"></a> </td>
                        </tr>
                    <?php  } ?>
                </table>

            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User's <span id="message"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>

                        <input type="number" id="userid" name="userid" class="form-control" hidden>
                        <div class="form-group">
                            <label>FullName</label>
                            <input type="text" id="fname" name="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="password" id ="password" name="password" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="number" id="contact" name="contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" id="address" name="address" class="form-control">
                        </div>

                    </form>
                    <button id="user_edit_submit_btn" class="btn btn-primary" style="margin-left:40%">submit</button>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

</body>

</html>

<script>
    $(document).ready(function() {

        $('.user_edit_btn').click(function() {
            var row = $(this).closest('tr');


            $('#id').val(row.find('td:eq(0)').text());
            $('#fullname').val(row.find('td:eq(1)').text());
            $('#email').val(row.find('td:eq(2)').text());
            $('#contact').val(row.find('td:eq(3)').text());
            $('#address').val(row.find('td:eq(4)').text());


        });

        $('#user_edit_submit_btn').click(function() {

            var id = document.getElementById('id').value;
            var fullname = document.getElementById('fullname').value;
            var email = document.getElementById('email').value;
            var contact = document.getElementById('contact').value;
            var address = document.getElementById('address').value;

            $.ajax({
                type: "POST",
                url: "action.php?form=edit_user_form",
                data: {
                    id: id,
                    fullname: fullname,
                    email: email,
                    contact: contact,
                    address: address
                },
                cache: false,
                success: function(response) {

                    if (response) {

                        document.getElementById('message').innerHTML = 'User Details update';
                        document.getElementById('message').style.color = 'green';
                    // setTimeout method is used to execute on your time.
                        setTimeout(() => {

                            location.reload();
                        }, 3000);

                    }

                }
            });

        });

        // For Delete Query

        $('.user_delete_btn').click(function() {
            var row = $(this).closest('tr');


            var id = row.find('td:eq(0)').text();


            $.ajax({
                type: "POST",
                url: "action.php?form=delete_user_form",
                data: {
                 id: id
                },
                cache: false,
                success: function(response) {

                    if (response) {

                        document.getElementById('msg').innerHTML = 'User Details Delete';
                        document.getElementById('msg').style.color = 'red';

                        setTimeout(() => {

                            location.reload();
                        }, 3000);

                    }

                }
            });

        });

    });
</script>