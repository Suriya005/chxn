<script>
    setInterval(function() {
        var date = new Date();
        var format = "YYYY-MMM-DD DDD";
        dateConvert(date, format)
    }, 1);

    function dateConvert(dateobj, format) {
        var year = dateobj.getFullYear();
        var month = ("0" + (dateobj.getMonth() + 1)).slice(-2);
        var date = ("0" + dateobj.getDate()).slice(-2);
        var date_number = dateobj.getDate();
        var hours = ("0" + dateobj.getHours()).slice(-2);
        var minutes = ("0" + dateobj.getMinutes()).slice(-2);
        var seconds = ("0" + dateobj.getSeconds()).slice(-2);
        var day = dateobj.getDay();
        // var days = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
        var days = ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"];
        //  var months = ["1","2","3","4","5","6","7","8","9","10","11","12"];
        var months = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

        var converted_date = "";

        switch (format) {
            case "YYYY-MM-DD":
                converted_date = year + "-" + month + "-" + date;
                break;
            case "YYYY-MMM-DD DDD":
                converted_date = days[day] + " " + date_number  + " " + months[parseInt(month) - 1] + " " +
                    year + "  " + hours + ":" + minutes + ":" + seconds;
                break;
        }
        //return converted_date;
        // to show it I used innerHTMl in a <p> tag
        document.getElementById("current_datetime").innerHTML = converted_date;
    }
</script>
</body>

</html>