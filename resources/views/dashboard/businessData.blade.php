<!DOCTYPE html>
<html>
<head>
    <title>Printable Form</title>
    <link rel="stylesheet" href="getData.css">
</head>
<body>
    @php
    $latestData = $data->last(); 
    @endphp

    <div class="clear-container">
        <div class="printable-form">
            <form>
                <div class="header">
                    <img src="images/logo4.png" alt="Your Logo">
                    <ul>
                        <li>Republic of the Philippines</li>
                        <li>Province of Bukidnon</li>
                        <li>Municipality of Baungon</li>
                        <li>Barangay Imbatug</li>
                    </ul>
                </div>
                <p class = "punong-barangay">Office of Punong Barangay</p>
                <div class="horizontal-line"></div>

                <div class="data"> 
                    <h1>BARANGAY CLEARANCE</h1>

                    <div class="data1">
                        <img src="images/logo2.png" alt="Image Description" class="background-image">
                        <p class="p1"><b>TO WHOM MAY IT CONCERN:</b></p>

                        @if ($latestData)
                            <p class="p2"><b>THIS IS TO CERTIFY THAT</b> <span class = "underline-business"> {{$latestData->name}} </span>,married a resident of P-{{$latestData->purok}} Imbatug, <br> 
                            Baungon, Bukidnon. He is known to me as a peace-loving and law-abiding member of the <br>
                            community with good moral character.</p>

                            <p class="p4">That his / her present / proposed establishment is ()  within (X) not within, the road <br>
                            right of way.</p>

                            <p class="p5">That this <b>Clearance</b> is being issued upon the request of the above-named person to support <br>
                            his/her application for <b> Business Permit.</b> (<span class="permit-underline"></span>) (<span class ="permit-underline"></span>)   </p>

                            <p class="p6"><b>Done</b> this
                                @if ($latestData)
                                    <?php
                                    $date = new DateTime($latestData->date_issued);
                                    $formattedDate = $date->format('F d, Y');
                                    echo $formattedDate;
                                    ?>
                                @else
                                    No data available.
                                @endif
                            , at Barangay Hall office, Imbatug, Baungon, Bukidnon.</p>

                            <p class="p7">By the authority of the Punong Barangay</p>
                            <p class="p8">Sanguniang Barangay Member</p>
                        </div>

                        <p>CTC NO.: {{$latestData->ctc_no}} <br>
                        Issued at: {{$latestData->issued_at}} <br>
                        Date Issued: 
                            @if ($latestData)
                                <?php
                                $date = new DateTime($latestData->date_issued);
                                $formattedDate = $date->format('F d, Y');
                                echo $formattedDate;
                                ?>
                            @else
                                No data available.
                            @endif
                        <br>
                        O.R No.: {{$latestData->or_no}} <br>
                        Amount Paid: {{$latestData->amount_paid}} <br>
                        @else
                            <p>No data available.</p>
                        @endif
                    </p>
                    <div class="horizontal-line-2"></div>
                    <div class="row">
                        <div class="column-container">
                            <div class="name-column">
                                <p>John Doe <br> Punong Barangay</p>
                                <p>Jane Smith <br> Sang. Barangay Member</p>
                                <p>Anna Ko <br> Sang. Barangay Member</p>
                            </div>
                            <div class="name-column">
                                <p>John Doe <br> Punong Barangay</p>
                                <p>Jane Smith <br> Sang. Barangay Member</p>
                                <p>Anna Ko <br> Sang. Barangay Member</p>
                            </div>
                            <div class="name-column">
                                <p>John Doe <br> Punong Barangay</p>
                                <p>Jane Smith <br> Sang. Barangay Member</p>
                                <p>Anna Ko <br> Sang. Barangay Member</p>
                            </div>
                            <div class="name-column">
                                <p>John Doe <br> Punong Barangay</p>
                                <p>Jane Smith <br> Sang. Barangay Member</p>
                                <p>Anna Ko <br> Sang. Barangay Member</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
