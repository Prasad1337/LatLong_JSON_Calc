<html>
<head>
    <title>Intercom.io Question 2</title>
    <script src="jquery-2.2.0.min.js"></script>
    <script type="text/javascript">
        var txt,json;

        function populateDiv(url)
        {
            var xhr = new XMLHttpRequest();

            xhr.onload = function ()
            {
                txt = this.responseText;
                json = $.parseJSON(JSON.stringify(txt));
                document.getElementById('contents').textContent = json + ' loaded!';
            };

            xhr.open('GET', url);
            xhr.send();
        }

        populateDiv('customers.txt');
    </script>
</head>
<body>
    <div id="contents"></div>
</body>
</html>
