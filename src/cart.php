<?php
include "config.php";
session_start();
if (isset($_POST)) {
  if  (isset($_COOKIE['login'])) {
          $id = $_COOKIE['login'];
  }
      $stmt = "SELECT * FROM  `$_POST[action]` where `user_id`='$id' and `product_id`='$_POST[id]' ";
      $result = mysqli_query($conn, $stmt);
      if (!(mysqli_num_rows($result) > 0)) {
          $stm = "INSERT INTO `$_POST[action]` values('$_POST[id]','$id')";
          $res = mysqli_query($conn, $stm);
      }
    }
    else {
      print_r($_POST);
      print_r($_SESSION);
      foreach($_SESSION[$_POST['action']]['new'] as $values){
          if($values==$_POST['id']){
              return;
          }
      }
      if (isset($_SESSION[$_POST['action']])) {
          array_push($_SESSION[$_POST['action']]['new'], $_POST['id']);
      } else {
          $_SESSION[$_POST['action']]['new'] = array($_POST['id']);
      }
  }

// $id=$_POST['id'];
// // print_r($id);die;
// $data="SELECT * FROM `products` WHERE `id`='$id'";
// $result = mysqli_query($connection,$data);
// $num = mysqli_num_rows($result);
// if($num>0){
// while($r=mysqli_fetch_assoc($result)){ 
//    $name=$r['name'];
//    $price=$r['price'];
//    $image=$r['image'];
//    $id=$r['id'];
// }}

// $key=$id;
// // print_r(!array_key_exists($key,$_SESSION['cart']));die();
// if (array_key_exists($key,$_SESSION['cart']))
//         {
//           $_SESSION['cart'][$key]['quantity']+=1;
//           $_SESSION['cart'][$key]['price']+=$price;
//         }
//       else
//         {
//           $_SESSION['cart'][$key]['name'] = $name;
//           $_SESSION['cart'][$key]['id'] = $id;
//           $_SESSION['cart'][$key]['quantity'] = 1;
//           $_SESSION['cart'][$key]['price'] = $price;
//           $_SESSION['cart'][$key]['image'] = $image;
//         }
//         print_r($_SESSION['cart']);
//         print_r($_COOKIE['user_id']);die();
//         $user_id=$_COOKIE['user_id'];

//         if (isset($_COOKIE['user_id']))
//         {
       
//              $stm = "INSERT INTO `cart` values(NULL,'$id','$user_id')";
//              $res = mysqli_query($connection, $stm);
      
//       }
// array_push($_SESSION['cart'],
//            array($id=>(array("id"=>$id,'name'=>$name,'price'=>$price,'image'=>$image,'quantity'=>1))));


//     foreach($_SESSION['cart'] as $key=>$value)
//     {
//         foreach($value as $k=>$v)
//         {
//             if($id==$k)
//             {
//                $v['quantity']+=1;
//                $v['price']+=$v['price'];
//             }
//             else{
//                 array_push($_SESSION['cart'],
//            array($id=>(array("id"=>$id,'name'=>$name,'price'=>$price,'image'=>$image,'quantity'=>1))));
//             }
//         }
//     }
// }
// else
// {
//     array_push($_SESSION['cart'],
//            array($id=>(array("id"=>$id,'name'=>$name,'price'=>$price,'image'=>$image,'quantity'=>1))));
// }
// print_r($_SESSION['cart']);
// array_push($_SESSION['cart'],
//           array($id=>(array("id"=>$id,'name'=>$name,'price'=>$price,'image'=>$image,'quantity'=>1))));
// foreach($_SESSION['cart'] as $key => $value)
// // {print_r($ke);die;
//     foreach($value as $k => $val){
//         // print_r( $_SESSION['cart']['quantity']);die();\
//         print_r( $_SESSION['cart']['price']);die();
//       if($k==$id)
//       {
//         $_SESSION['cart']['quantity']+=1;
//           $_SESSION['cart']['price']+=$price;
//       }
//         // if (array_key_exists($k,$_SESSION['cart']))
//         // {
//         //   $_SESSION['cart']['quantity']+=1;
//         //   $_SESSION['cart']['price']+=session_start();$price;
//         // }
//       else
//         {
//           array_push($_SESSION['cart'],
//           array($id=>(array("id"=>$id,'name'=>$name,'price'=>$price,'image'=>$image,'quantity'=>1))));
//         }
    
// }
// print_r($id);
// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";
// print_r(array_key_exists($id,$_SESSION['cart']));die();
// if (array_key_exists($id,$_SESSION['cart']))
//         {
//           $_SESSION['cart']['quantity']+=1;
//           $_SESSION['cart']['price']+=$price;
//         }
//       else
//         {
//           array_push($_SESSION['cart'],
//           array($id=>(array("id"=>$id,'name'=>$name,'price'=>$price,'image'=>$image,'quantity'=>1))));
//         }


//  header("location","./view/cartview.php");
// print_r($_SESSION['cart']);
// session_destroy();

?>
