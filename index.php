<?php
    $question = ["Nhập tuổi của trẻ","Nhập chiều cao của trẻ? (cm)","Nhập cân nặng của trẻ? (kg)","Mức độ hoạt động của trẻ là?"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot nhóm 16</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="container">
        <div id="screen">
            <div id="header">Chatbot tư vấn dinh dưỡng trẻ em</div>
            <div id="messageDisplay">

                <div class="chat botMessage">Nhập tuổi của trẻ</div>
                <!--<div id="messageContainer">
                    <div class="chat userMessage">
                        15 hậ ashfjh asjfhjasf aksfhas
                    </div>
                </div> -->
            </div>
            <div id="userInput">
                <input type="text" name="message" id="message" placeholder="Mời bạn nhập">
                <input type="submit" value="Gửi" id="send" name="send">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    var data = ["chiều cao", "cân nặng", "mức độ"];
    $(document).ready(function() {
        $("#message").on("keyup", function() {


            if ($("#message").val()) {
                $("#send").css("display", "block");
            } else {
                $("#send").css("display", "none");
            }
        });
    });
    $("#send").click(function(e) {
        $age = $("#message").val();
        $appenderMessage = '<div id="messageContainer"><div class="chat userMessage">' +
            $age +
            '</div></div>';
        $("#messageDisplay").append($appenderMessage);
        $appenderMessage = '<div class="chat botMessage">' +
            $data[0] +
            '</div>';
        $("#messageDisplay").append($appenderMessage);
        $height = $("#message").val();
        $appenderMessage = '<div id="messageContainer"><div class="chat userMessage">' +
            $height +
            '</div></div>';
        $("#messageDisplay").append($appenderMessage);
        $.ajax({
            url: "casebase.php",
            data: {
                userMessage: $userMessage
            },
            success: function() {

            }
        });
        $("#message").val('');
        $("#send").css("display", "none");
    })
    </script>
</body>

</html>