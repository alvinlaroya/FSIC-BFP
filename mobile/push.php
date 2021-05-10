<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../includes/push-notification/push.min.js"></script>
    <script src="https://code.query.com/jquery-3.3.1.min.js"></script>
<script src="../includes/push-notification/serviceWorker.min.js"></script>
<script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
</head>
<body>
    <button type="button" onclick="start()">Click</button>
<script>

            function start(){
              Push.create("MOBAlert", {
                body: 'Record Archived',
                icon: '../includes/push-notification/MOBALERT_LOGO.png',
                timeout: 20000,
                onClick: function () {
                  location.href = "https://www.facebook.com";
                  this.close();
                },
              });
            }
</script>
</body>
</html>