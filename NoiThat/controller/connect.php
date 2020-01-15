<?php
    require_once "../modal/Use.php";
    require_once "../modal/Admin.php";
    require_once "../modal/Product.php";
    session_start();
    global $db;
    $checkLogin=false;

    function connect_db()
    {
        global $db;
        if (!$db){
            $server = "localhost";
            $user = "root";
            $password ="";
            $dbName = "noithat";
            $db = new mysqli($server, $user, $password, $dbName);
        }
    }
    function username()
    {
        global $db;
        connect_db();
        $sql = "SELECT * from User";
        $result = $db->query($sql)->fetch_all();   
        return $result;
    }
    function get_all_Admin()
    {
        global $db;
        connect_db();
        $sql = "SELECT * from Admin";
        $result = $db->query($sql)->fetch_all();   
        return $result;
    }
    function get_login($name,$pass){
        global $checkLogin;
        $check=false;      
        for($i=0;$i<count(get_user_into_object());$i++){
            if(get_user_into_object()[$i]->username==$name && get_user_into_object()[$i]->password==$pass){
                ?>
                <script>
                    location.href = "index.php";
                   
                </script>
                <?php
                $arr=array($name,$pass);
                $_SESSION['login'] = $arr;
                $checkLogin=true;  
                $check=true;
                return $name;
            }
        }
        for($i=0;$i<count(get_all_Admin());$i++){
            if(get_Admin_into_object()[$i]->username==$name && get_Admin_into_object()[$i]->password==$pass){
                ?>
                <script>
                    location.href = "areachart.php";  
                </script>
                <?php
                $check=true;
                return $name;
            }
        }
        if($check==false){
            ?>
                <script>
                    alert("login fail");                 
                </script>
            <?php
        }
    }
    function get_all_product()
    {
        global $db;
        connect_db();
        $sql = "SELECT * from product";
        $result = $db->query($sql)->fetch_all();   
        return $result;
    }

    function get_product_into_object(){
        $arrPro = array();
    //class abstrast not created object;                                                    
        for($i = 0; $i < count(get_all_product()); $i++) 
        {
            $pro = new product(get_all_product()[$i][0], get_all_product()[$i][1],get_all_product()[$i][2],get_all_product()[$i][3],get_all_product()[$i][4] ,get_all_product()[$i][5],get_all_product()[$i][6],get_all_product()[$i][7],get_all_product()[$i][8]);			
            array_push($arrPro, $pro);
            		
        }
        return $arrPro;
    }

    function idUser(){
        global $db;
        connect_db();
        $sql = "SELECT id FROM User where username"."=". "'".$_SESSION['login'][0]."'"." AND password=". "'".$_SESSION['login'][1]. "'";
        $result=$db->query($sql)->fetch_all();
        return $result[0][0];
    }
    function addProduct($id,$idUser){
        connect_db();
        global $db;     
        $check=false;
        for($i=0;$i<count(get_all_Cart());$i++){
            if(get_all_Cart()[$i][1]==$id){
                $sql="UPDATE Oder set quantity=((select quantity from Oder where idOder=".$id.")+1) where id=(select id from Oder where idOder=".$id.")";
                $check=true;
                $db->query($sql);
            }
        }
        if($check==false ){
            $sql = "INSERT into Oder values(null,".$id.",1,".$idUser.")";
            $db->query($sql);
        }
        
    }
    function get_all_Cart()
    {
        global $db;
        connect_db();
        $sql = "SELECT * from Oder where idUser=".idUser();
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function get_all_cartAdmin()
    {
        global $db;
        connect_db();
        $sql = "SELECT * from oderBought";
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function delete($id){
        connect_db();
        global $db;
        $sql = "DELETE from Oder where idOder=".$id;
        $db->query($sql);
    }
    function total(){
        $total=0;
        for($i=0;$i<count(get_all_Cart());$i++){
            $total+=get_all_product()[get_all_Cart()[$i][1]-1][2]*get_all_Cart()[$i][2];
        }
        return $total;
    }
    function tang($id){
        global $db;
        connect_db();
        $sql="UPDATE Oder set quantity=((select quantity from Oder where idOder=".$id.")+1) where id=(select id from Oder where idOder=".$id.")";
        $db->query($sql);
    }
    function giam($id){
        global $db;
        connect_db();
        $sql="UPDATE Oder set quantity=((select quantity from Oder where idOder=".$id.")-1) where id=(select id from Oder where idOder=".$id.")";
        $db->query($sql);
    }
    function checkTypePro($typePro){
        if($typePro==1){
            return 'b';
        }else if($typePro==2){
            return 't';
        }else if($typePro==3){
            return 'g';
        }else{
            return 'd';
        }
    }

    function addProductAdimn($name,$price,$type,$typePro,$detail,$image,$quan,$dat){
        global $db;
        connect_db();
        $sql="INSERT into product values(null,'$name',".$price.",'$type','$detail','$image','".checkTypePro($typePro)."',".$quan.",'$dat')";
        echo $sql;
        $db->query($sql);
    }
    function  addUser($name,$adr,$user,$pass,$phone){
        global $db;
        connect_db();
        $sql="INSERT into User values(null,'$user','$pass','$name','$adr','$phone')";
        $db->query($sql);
    }
    function getNumCart(){
        global $db;
        connect_db();
        $check=false;
        if (empty($_SESSION['login'])) {
           
        }else{
            $sql="SELECT COUNT(idOder) FROM Oder where idUser=".idUser();
            $result=$db->query($sql)->fetch_all();
            return $result[0][0];
        }
        if($check==false){
            return 0;
        }
    }
    function getNameCart(){
        global $db;
        connect_db();
        $check=false;
        if (empty($_SESSION['login'])) {
           
        }else{
            return get_user_into_object()[idUser()-1]->username;
        }
        if($check==false){
            return 'Tai khoan';
        }
    }
    function getOderName(){
        global $db;
        connect_db();
        $sql="SELECT * FROM product ORDER BY name ASC";
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function getOderPriH(){
        global $db;
        connect_db();
        $sql="SELECT * FROM product ORDER BY price DESC";
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function getOderPriL(){
        global $db;
        connect_db();
        $sql="SELECT * FROM product ORDER BY price ASC";    
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function getMorePro(){
        global $db;
        connect_db();
        $sql="SELECT idUser,idOder,SUM(quantity) FROM oderBought GROUP BY idOder ORDER BY SUM(quantity) DESC";
        $result = $db->query($sql)->fetch_all(); 
        return $result;
    }
    function getTextSearch($text){
        global $db;
        connect_db();
        $sql="SELECT * FROM product WHERE name LIKE "."'". "%".$text."%"."'";
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function getCustomer(){
        global $db;
        connect_db();
        $sql="SELECT * FROM oderBought GROUP BY idUser";
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function getUploadFile($typePro){
        $type=checkTypePro($typePro);
        if($type=='t'){
            $target_dir = "img/tu/";
        }else if($type=='b'){
            $target_dir = "img/ban/";
        }else if($type=='g'){
            $target_dir = "img/giuong/";
        }else if($type=='d'){
            $target_dir = "img/den/";
        }
        
        // chỉ định thư mục nơi tệp sẽ được đặt
        echo $_FILES["fileToUpload"]["name"];
        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
        // chỉ định đường dẫn của tệp sẽ được tải lên
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // giữ phần mở rộng tệp của tệp
        // Check if image file is a actual image or fake image
        if(isset($_POST["add"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                return $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    function insertOderBought(){
        global $db;
        connect_db();
        $count=0;
        $date = getdate();
        for ($i = 0; $i < count(get_all_Cart()); $i++) {
            $sql="INSERT into oderBought values (null,".get_all_Cart()[$i][1].",".get_all_Cart()[$i][2].",".get_all_Cart()[$i][3].",'".$date['year']."-".$date['mon']."-".$date['mday']." ".$date['hours'].":".$date['minutes'].":".$date['seconds']."')";
            $count=$count+1;
            $db->query($sql);
        }   
        $sql = "DELETE from Oder where  idUser=".idUser();
        $db->query($sql);
    }
    function get_all_OderBought()
    {
        global $db;
        connect_db();
        $sql = "SELECT * from oderBought";
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function addHeaartUser($id){
        global $db;
        connect_db();
        $check=false;
        for ($i = 0; $i < count(get_all_Heart()); $i++) {
            if(get_all_Heart()[$i][1]==$id){
                $sql="DELETE from heart where  idOder=".$id;
                $db->query($sql);
                $check=true;
            }
        }
        if($check==false){
            $sql="INSERT into heart values (null,$id,".idUser().")";
            echo $sql;
            $db->query($sql);
        }   
    }
    function get_all_Heart()
    {
        global $db;
        connect_db();
        $sql = "SELECT * from heart where idUser=".idUser();
        $result = $db->query($sql)->fetch_all();
        return $result;
    }
    function checkHeartExits($id)
    { 
       $check=false;
        if (empty($_SESSION['login'])) {
           
        }else{
            for ($i=0;$i<count(get_all_Heart());$i++) {
                if (get_all_Heart()[$i][1]==$id) {
                    $check=true;
                    return true;
                }
            }
        }
        if($check==false){
            return false;
        }
    }
    function allHeart($id){
        global $db;
        connect_db();
        $sql = "SELECT COUNT(idOder) FROM heart where idOder=".$id;
        $result = $db->query($sql)->fetch_all();
        return $result[0][0];
    }
    function countPro($str){
        $count=0;
        for ($j = 0; $j < count(get_all_OderBought()); $j++) {
            if (get_all_product()[get_all_OderBought()[$j][1]][6]==$str) {
                $count=$count+1;
            }
        }
        return $count;
    }
    function checkDateDay($str){
        $count=0;
        $now = getdate();
        for($i=0;$i<count(get_all_cartAdmin());$i++){
            $date = getdate(strtotime(date(get_all_cartAdmin()[$i][4])));
            if($date['weekday']==$str){
                $count=$count+1;
            }
        }
        return $count;
    }

    // ========================  test object ==============================

    function get_user(){
        global $db;
        connect_db();
        $sql = "SELECT * from User";
        $result = $db->query($sql)->fetch_all();   
        return $result;
    }
    function get_user_into_object(){
        $arrUser = array();
        for($i = 0; $i < count(get_user()); $i++) 
        {
            $User = new User(get_user()[$i][0], get_user()[$i][1],get_user()[$i][2],get_user()[$i][3],get_user()[$i][4] ,get_user()[$i][5]);			
            array_push($arrUser, $User);
            		
        }
        return $arrUser;
    }
    function get_Admin_into_object(){
        $arrAdmin = array();
        for($i = 0; $i < count(get_all_Admin()); $i++) 
        {
            $Admin = new Admin(get_all_Admin()[$i][0], get_all_Admin()[$i][1],get_all_Admin()[$i][2]);			
            array_push($arrAdmin, $Admin);  		
        }
        return $arrAdmin;
    }
    function get_message(){
        global $db;
        connect_db();
        $sql = "SELECT * from message";
        $result = $db->query($sql)->fetch_all();   
        return $result;
    }
?>