$(document).ready(function(){

})
$(document).on('click','#submit',function(){
    $name=$("#form3Example1m").val();
    $address=$("#form3Example8").val();
    $pincode=$("#form3Example1n1").val();
    $email=$("#form3Example97").val();
    $pass=$("#form3Example90").val();
    $repass=$("#form3Example99").val();
    $role=$(".select").val();

   let res= validate($name,$address,$pincode,$email,$pass,$repass);
    if(res==true)
    {
        $.ajax({
            url:"signupdata.php",
            type:"POST",
            data:{"name":$name,"address":$address,"pincode":$pincode,"email":$email,"pass":$pass,"role":$role},
            datatype:"json"
        }).done(function(){
            window.location.href="../login.php";
        })
    }
    else{
        console.log("False");
    }
})
$('.reset').click(function(){
    $('#myForm')[0].reset();
});
$('.register').click(function(){
    window.location.href="../signup.php";
})
$(document).on('click','.login',function(){
    let email=$("#email").val();
    let pass=$("#password").val();
    let res=validate(email,pass);
    if(res==true){
        $.ajax({
            url:"logindata.php",
            type:"POST",
            data:{"email":email,"pass":pass},
            datatype:"json"
        }).done(function(result){
            if(result){
                window.location.href="../index.html";
            }
          else{
            alert("Not a approved user!");
          }  
        })
    }
    else{
        alert("Invalid credentials");
    }
})

function validate($name,$address,$pincode,$email,$pass,$repass){
    let flag=true;
    if($name=="")
    {
        $("#error").html("Enter Full name").css("color","Red").fadeOut(2000);
        flag=false;
    }
    if($address=="") {
        $("#errorn").html("Enter Address").css("color","Red").fadeOut(2000);
        flag=false;
    }
    if($pincode=="") {
        $("#errorm").html("Enter Pincode").css("color","Red").fadeOut(2000);
        flag=false;
    }
    if($email=="") {
        $("#errorq").html("Enter Email").css("color","Red").fadeOut(2000);
        flag=false;
    }
    if($pass=="") {
        $("#errorp").html("Enter Password").css("color","Red").fadeOut(2000);
        flag=false;
    }
    if($repass=="") {
        $("#errorr").html("Enter Confirm Password").css("color","Red").fadeOut(2000);
        flag=false;
    }

    if($pass!=$repass)
    {
        $("#errorr").html("Password do not match").css("color","Red").fadeOut(2000);
        $("#form3Example90").css("border-color","red");
        $("#form3Example99").css("border-color","red");
        flag=false;
    }
  return flag;
}