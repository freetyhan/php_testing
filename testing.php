<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP MYSQL Retrieve Testing</title>
</head>

<body>
<h1 class="fs-5">Twitter Hashtag # or Handle @</h1>
<textarea id="hash-handle-textarea" placeholder="Enter twitter Hashtag (#) or Handle (@) e.g., @SunriseRestaurant. Separate each word by comma &quot;,&quot;" rows="3" cols="40%"></textarea>
<button class="btn btn-primary" id="hashHandleButton" type="button" onclick="hashHandleParse()">Save</button>
<!-- this is reading current data to the textarea -->
<?php
$connect = mysqli_connect("137.184.230.178", "aks", "123", "photo_gallery");
$query = 'SELECT * from usernames';
$result = mysqli_query($connect, $query);

$usernames = array();
while($username = mysqli_fetch_assoc($result))
{
    $usernames[] = $username;
}
$usernameStr = implode(',', $usernames);
echo($usernameStr);
?>
</body>

</html>