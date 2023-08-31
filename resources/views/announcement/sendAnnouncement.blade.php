<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imbamis.org</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">

</head>
<body> 
    
    <button onclick="openPopup()">Open Pop-up</button>

    <!-- Pop-up container and content -->
    <div class="overlay" id="overlay"></div>
    <div class="popup" id="popup">
        <span class="close-btn" onclick="closePopup()">X</span>
        <div class="logo-container">
            <img src="images/logo4.png" alt="Logo">
            <span>Send Announcement</span>
        </div>

        <form>
            <label for="recipient">Recipient:</label>
            <input type="text" id="recipient" name="recipient" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>

    <script>
        // JavaScript functions to open and close the pop-up
        function openPopup() {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("popup").style.display = "none";
        }
    </script>


</body>
</html>