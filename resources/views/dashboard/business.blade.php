<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>imbaMIS.org</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="clearance-card">
        <h1>Business Clearance</h1>
        @if(Session::has('success'))
        <div class="alert alert-success" role ='alert'>
            {{Session::get('success')}}

        </div>
        @endif
        <form method="post" action="{{url('saveData')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="string" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="purok">Purok:</label>
                <input type="integer" id="purok" name="purok" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="ctc_no">CTC No.:</label>
                <input type="integer" id="ctc_no" name="ctc_no" required>
            </div>
            <div class="form-group">
                <label for="issued_at">Issued at:</label>
                <input type="text" id="issued_at" name="issued_at" required>
            </div>
            <div class="form-group">
                <label for="date_issued">Date Issued:</label>
                <input type="date" id="date_issued" name="date_issued" required>
            </div>
            <div class="form-group">
                <label for="or_no">OR No.:</label>
                <input type="integer" id="or_no" name="or_no" required>
            </div>
            <div class="form-group">
                <label for="amount_paid">Amount Paid:</label>
                <input type="integer" id="amount_paid" name="amount_paid" step="0.01" required>
            </div>
            <button type='submit' class="btn btn-primary"> Save</button>
            <br>
            <a href="http://127.0.0.1:8000/businessData" class="print-link" onclick="printCertificate()">&#128438; PRINT BARANGAY BUSINESS CLEARANCE</a>

        </form>
    </div>

</body>
</html>
