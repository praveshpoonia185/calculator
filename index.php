<! DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" width="width-device",initial-scale="1.0">
        <title>Calculator</title>
        <body>
            <div class="container">

            <form method="POST">
                Number-1
<input type="text" name="num1"  placeholder="Enter the Number">
            <br>

            Number-2
            <input type="text" name="num2"  placeholder="Enter the Number">
            <br>
            
           
            <select name="operator">
           <option>choose...</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
            </select>
            <button type="submit" name="submit">Submit</submit>
</form
></div>
<p>
    <! DOCTYPE HTML>
<html>
    

           <p> The Answer is :</p>
<?php
if(isset($_POST['submit'])){
$result1=$_POST['num1'];
$result2=$_POST['num2'];
$operator=$_POST['operator'];
switch($operator){
    
    case "None";
        echo "You Need to Select an Operator!";
        break;
        case "Add";
        echo $result1 + $result2;
        break;
        case "Subtract";
        echo $result1 - $result2 ;
        
        break;
        case "Multiply";
        echo $result1 * $result2;
        break;
        case "Divide";
        echo $result1 / $result2;
        break;

}
}
?>
</body>



    </html>