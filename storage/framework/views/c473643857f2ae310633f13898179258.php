<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Details</title>
    <style>
        table, tr, td, th{
            border-collapse:collapse;
            border: 1px solid black;

        }
    </style>
</head>

<body>
    <h1>Appointment details</h1>
    <p>Below are the details of your appointment:</p>
    <ul>
   
        
        
      
    <table class="table table-bordered table-hover ">
        <thead class="table-secondary">
            <tr scope="row">
                <th scope="col">Customer name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">Doctor name</th>
                <th scope="col">date</th>
                <th scope="col">message</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        
                <tr scope="row" align="center" class="table-light">
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->phone); ?></td>
                    <td><?php echo e($data->doctor); ?></td>
                    <td><?php echo e($data->date); ?></td>
                    <td><?php echo e($data->message); ?></td>
                    <td><?php echo e($data->status); ?></td>
                </tr>
          

    </table>
</body>

</html>
<?php /**PATH D:\hms\resources\views/user/document.blade.php ENDPATH**/ ?>