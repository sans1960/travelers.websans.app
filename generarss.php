<?php
$web_url = "http://localhost/travelers.websans.app/" ;
$str = "<?xml version='1.0' ?>";
$str .= "<rss version='2.0'>";
    $str .= "<channel>";
        $str .= "<title>My website</title>";
        $str .= "<description>My website</description>";
        $str .= "<language>en-US</language>";
        $str .= "<link>$web_url</link>";
        $conn = mysqli_connect("localhost", "root", "", "travel");
        $result = mysqli_query($conn, "SELECT * FROM posts WHERE destination_id = 1 ORDER BY date DESC");
 
        while ($row = mysqli_fetch_object($result))
        {
            $str .= "<item>";
                $str .= "<title>" . htmlspecialchars($row->title) . "</title>";
                
                $str .= "<link>" . $web_url . "/Post.php?id=" . $row->id . "</link>";
            $str .= "</item>";
        }
 
    $str .= "</channel>";
$str .= "</rss>";
file_put_contents("rss.xml", $str);
echo "Done";

?>