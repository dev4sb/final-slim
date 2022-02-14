<!DOCTYPE html>
<html>
    <head>
        <title>X</title>
        <meta charset=utf-8 >
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name=robots content="index, follow"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php 
        $access_token = "dsfjds28838djddj";
        $options = array( 
            "is_enabled" => "1", 
            "merchant_id" => "XXXXXXXXXX", 
            "display_badge" => "Yes",
            "badge_position" => "BOTTOM_RIGHT", 
            "Language" => "English", 
            "dialog_box_position" => "Center",
            "estimated_delivery_days" => "3",
            "allow_backorder" => "yes",
            "backorder_estimated_delivery_days" => "5",
        );

        ?>


        <?php 

        require '../Database.php';
        require '../config.php';

        $db = new Database(DB_NAME, DB_USERNAME, DB_PASSWORD, DB_HOST); 

        if(isset($_GET) && !empty($_GET)){

            $db->select("sf-stores",array("domain_name"=>$_GET['shop']));
            $shop =$db->result_array(); 

            $id = $shop[0]['id'];
            $access_token = $shop[0]['access_token'];

            $db->select("sf-options",array("store_id"=>$id ));
            $shopConfigs = $db->result_array(); 

            $options = array();
            foreach ($shopConfigs as $value) {
                $options[$value["option_name"]] = $value["option_value"];
            } 

            //  print_r($access_token);

            if($_GET['success'] == 1){
                $message = "Added";
            }else if($_GET['success'] == 2){
                $message = "Settings has been updated";
            }

            ?>
            <?php if($message){ ?><div class="success-msg"><?php echo $message; ?></div><?php } ?>

             <a href="index.php">Home</a>
             <br/><br/>
            
            <form action="add.php" method="post" name="form1">
                <table width="25%" border="0">
                    <tr> 
                        <td>Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr> 
                        <td>Age</td>
                        <td><input type="text" name="age"></td>
                    </tr>
                    <tr> 
                        <td>Email</td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td><input type="submit" name="Submit" value="Add"></td>
                    </tr>
                </table>
            </form>

            <?php
        }else {

        }

        ?> 

    </body>
</html>
