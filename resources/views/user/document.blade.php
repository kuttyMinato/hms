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
   
        {{-- <li><strong>Appointment ID:</strong> {{ $data->id }}</li> --}}
        {{-- <li><strong>Doctor Name:</strong> {{  $data->name }}</li>
        <li><strong>Doctor Name:</strong> {{  $data->name }}</li>
  
        <li><strong>Doctor Name:</strong> {{  $data->doctor }}</li>
        <li><strong>Appointment Date:</strong> {{  $data->date }}</li>
     
        <li><strong>Appointent Phone:</strong> {{  $data->phone }}</li>
        <li><strong>Appointent Message:</strong> {{  $data->message }}</li>
        <li><strong>Appointment status:</strong> {{  $data->status }}</li> --}}
      
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
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->doctor }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->message }}</td>
                    <td>{{ $data->status }}</td>
                </tr>
          

    </table>
</body>

</html>
