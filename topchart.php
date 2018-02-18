<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">

</head>

<body>


<div id="#feed">
    <div class="content">
        <p>Hello munira http://www.laelitenetwork.com</p>
    </div>
    <div class="content">
        <p>I am sorry http://8elite.com and follow us</p>
    </div>
    <div class="content">
        <p>please!!! http://www.google.com</p>
    </div>
</div>




<script src="Bootstrap/js/jquery-2.2.1.min.js" > </script>
<script>
$('#feed').ready(function(){
    // Get each div
    $('.content').each(function(){
        // Get the content
        var str = $(this).html();
        // Set the regex string
        var regex = /(https?:\/\/([-\w\.]+)+(:\d+)?(\/([\w\/_\.]*(\?\S+)?)?)?)/ig
        // Replace plain text links by hyperlinks
        var replaced_text = str.replace(regex, "<a href='$1' target='_blank'>$1</a>");
        // Echo link
        $(this).html(replaced_text);
    });
});

</script>
<script src="Bootstrap/js/bootstrap.min.js"> </script>
</body>
</html>