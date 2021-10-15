
function loginValidate()
{
    var login= document.getElementById("logas").value;
    if(login==="User")
    userlogin();
    else if(login==="Bank")
        Banklogin();
    else
    swal({
        title: "Warning!",
        text: "Please select who you want to login as !!!",
        icon: "warning",
        button: "OK !",
        });
} 
 //Login function      
function userlogin()
{
    $(".btn").html("Login Processing......")
    var formData = new FormData();
    var elements =  document.getElementsByClassName("form-control");
    for  (var i=0; i< elements.length; i++)
    {
        formData.append(elements[i].id, elements[i].value);
    }
    var xmlHttp= new XMLHttpRequest();
    xmlHttp.onreadystatechange = function()
    {
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
        {
            if(xmlHttp.responseText == "success")
            {
            location.assign("index.php");
            }
            else
            {
            $(".btn").html("Login")
            swal({
                title: "Error!",
                text: xmlHttp.responseText,
                icon: "error",
                button: "OK!",
                });
            }
        }

    }
    xmlHttp.open("post", "procedure/login.php");
    xmlHttp.send(formData);
}

//Registration function

function reguser() 
{
    $(".btn").html("Registration is Processing......")
    
        var formData = new FormData()
        var elements =  document.getElementsByClassName("form-control");
        for  (var i=0; i< elements.length; i++)
        {
            formData.append(elements[i].id, elements[i].value);
        }
        var xmlHttp= new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
                if(xmlHttp.responseText == "success")
                {
                    swal
                    ({
                        title: "Success !",
                        text: xmlHttp.responseText,
                        icon: "success",
                        button: "OK!",
                    });
                        location.assign("index.php");
                }
                else
                {
                $(".btn").html("Sign-up")
                swal({
                    title: "Error!",
                    text: xmlHttp.responseText,
                    icon: "error",
                    button: "OK!",
                    });
                }
            }

        }
        xmlHttp.open("post", "procedure/reg.php");
        xmlHttp.send(formData);
}
   

//regBank function
function regBank() 
{
    var agree= document.getElementById("tnc_select1").checked;
    if(agree===true)
    {
        var elements =document.getElementsByClassName("validate")
        var formData=new FormData()
        for  (var i=0; i< elements.length; i++)
        {
            formData.append(elements[i].id, elements[i].value);
        }
        var xmlHttp= new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
            {
                if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
                {
                    if(xmlHttp.responseText == "success")
                    {
                        swal
                        ({
                            title: "Success !",
                            text: xmlHttp.responseText,
                            icon: "success",
                            button: "OK!",
                        });
                            location.assign("index.php");
                    }
                    else
                    {
                    $(".btn").html("Sign-up")
                    swal({
                        title: "Error!",
                        text: xmlHttp.responseText,
                        icon: "error",
                        button: "OK!",
                        });
                    }
                }
            }
            xmlHttp.open("post", "procedure/regbank.php");
            xmlHttp.send(formData);
    }
    else
        alert("Please accept terms and conditions");
    
}


//loginbank function
function Banklogin()
{
    $(".btn").html("Login Processing......")
    var formData = new FormData();
    var elements =  document.getElementsByClassName("form-control");
    for  (var i=0; i< elements.length; i++)
    {
        formData.append(elements[i].id, elements[i].value);
    }
    var xmlHttp= new XMLHttpRequest();
    xmlHttp.onreadystatechange = function()
    {
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
        {
            if(xmlHttp.responseText == "success")
            {
            location.assign("index.php");
            }
            else
            {
            $(".btn").html("Login")
            swal({
                title: "Error!",
                text: xmlHttp.responseText,
                icon: "error",
                button: "OK!",
                });
            }
        }

    }
    xmlHttp.open("POST", "procedure/banklogin.php");
    xmlHttp.send(formData);
}

//chatsender
function getBankname(bankname)
{
    var userid=document.getElementById("unique_id").innerText
    var loginstatus="";
    var user=document.getElementById('chat');
    var chatuser=''
    var data="";
    if(user.style.display==="none")
    {
    chatuser += 
    '<div class="chat-header"> <div class="row valign-wrapper"><div class="col media-image online pr-0"><img src="app-assets/images/user/7.jpg" alt="" class="circle z-depth-2 responsive-img"></div><div class="col"></div><p class="m-0 id="bankname" blue-grey-text text-darken-4 font-weight-700">'+bankname+'</p></div></div><span class="option-icon"><span class="favorite"><i class="material-icons">star_outline</i> </div>'
                 +
   
                 '<div class="chat-area"><div class="chats"><div class="chats" id="message"><p id="unique_id0" style="display:none">'+userid+'</p><ul class="conversation-list" data-simplebar style="max-height: 460px">' +
                 '<div class="chat-avatar" id="chat-box"></div></div> </ul></div></div></div>'+
                 '<div class="chat-footer"><form onsubmit="enter_chat();" action="javascript:void(0);" class="chat-input">'
                 +'<i class="material-icons mr-2">face</i><i class="material-icons mr-2">attachment</i><input type="text" id="message1" placeholder="Type message here.." class="message mb-0">'+
                 '<a class="btn waves-effect waves-light send" onclick=" preview_image();">Send</a></form></div>';
    user.innerHTML = chatuser;
    user.style.display="inline";
    }
    else
    {
        chatuser="";
        chatuser += '<div class="chat-header"> <div class="row valign-wrapper"><div class="col media-image online pr-0"><img src="app-assets/images/user/7.jpg" alt="" class="circle z-depth-2 responsive-img"></div><div class="col"></div><p  id="bankname"  class="m-0 blue-grey-text text-darken-4 font-weight-700">'+bankname+'</p></div></div><span class="option-icon"><span class="favorite"><i class="material-icons">star_outline</i> </div>'
        +

        '<div class="chat-area"><div class="chats"><div class="chats" id="message"><p id="unique_id0" style="display:none">'+userid+'</p><ul class="conversation-list" data-simplebar style="max-height: 460px">' +
        ' </div></div></div>'+
                 '<div class="chat-footer"><form onsubmit="enter_chat();" action="javascript:void(0);" class="chat-input">'
                 +'<i class="material-icons mr-2">face</i><i class="material-icons mr-2">attachment</i><input type="text" id="message1"  placeholder="Type message here.." class="message mb-0">'+
        '<a class="btn waves-effect waves-light send" onclick=" preview_image();">Send</a></form></div>';

    user.innerHTML = chatuser;
    user.style.display="block";
    //preview_image();
    }
    getchatfromuser();
}


function sendMessage(bank,name,data) {
    var containerElm = document.getElementById('message');
    var divStr = '';
    const timestamp =   new Date().toLocaleString();

    console.log("sender"+ name,
    "message:"+ data,
    "reciever:" +bank,
    "Time:"+timestamp)
    firebase.database().ref("message").push().set({
        "sender": name,
        "message": data,
        "reciever": bank,
        "Time":timestamp
    });

    //Listing for outgoing message
    firebase.database().ref().on("child_added", function (snapshot) {
        divStr += '<ul class="conversation-list" data-simplebar style="max-height: 460px">' +
        '<div class="chat-avatar">' +
    '<i>'+timestamp+'</i>'+ '<div class="conversation-text"> <div class="ctext-wrap">'+snapshot.val().sender+" "+snapshot.val().message+
    '</p></div></div></div> </ul>' ;
    containerElm.innerHTML = divStr;
    });
    return false;
}
// SendMessage

function preview_image() {
    
    var incoming= document.getElementById("unique_id0").innerText
    var mess = document.getElementById("message1").value;
    var containerElm = document.getElementById('message');
    var data={incoming:incoming,mess:mess}
    $.ajax({
        url: 'procedure/insert-chat.php',
        type: 'post',
        data: data,
        dataType: "json",
        success: function(response){
        if(response === 'i'){
            alert("success")
          
        }else{
            alert(response);
        }
        },
    });
    getchat();
}

function getchat() {
    chatBox = document.getElementById('message');
    incoming_id = document.getElementById("unique_id").innerText;
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "procedure/get-chat.php", true);
        xhr.onload = ()=>{
          if(xhr.readyState === XMLHttpRequest.DONE){
              if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                   
                  }
              }
          }
        }
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("incoming_id="+incoming_id);
        scrollToBottom();
}
function scrollToBottom(){
    chatBox = document.getElementById('message');
    chatBox.scrollTop = chatBox.scrollHeight;
  }

//fetch chat
function getchatfromuser() {
    chatBox = document.getElementById('message');
incoming_id = document.getElementById("unique_id").innerText;
setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "procedure/get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){
                scrollToBottom();
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
}, 500);
scrollToBottom()
}

//update password

function updatepword()
{
    let type = document.getElementById("type").value
    var email = document.getElementById("email").value
    var oldpword = document.getElementById("oldpswd").value
    var newpword=document.getElementById("newpswd").value
    var cnewpword=document.getElementById("repswd").value

    if(cnewpword===newpword)
    {
        if(type==6)
        { var data={email:email,oldpword:oldpword,newpword:newpword,cnewpword:cnewpword}
            $.ajax({
                url: 'procedure/userchangepassword.php',
                type: 'post',
                data: data,
                dataType: "json",
                success: function(response){
                if(response === "success"){
                    alert("success")
                }else{
                    alert(response);
                }
                },
            });
        }
        if(type==7)
        { var data={email:email,oldpword:oldpword,newpword:newpword,cnewpword:cnewpword}
            $.ajax({
                url: 'procedure/bankchangepassword.php',
                type: 'post',
                data: data,
                dataType: "json",
                success: function(response){
                if(response === "success"){
                    alert("success")
                }else{
                    alert(response);
                }
                },
            });
        }
        if(type<6)
        { var data={email:email,oldpword:oldpword,newpword:newpword,cnewpword:cnewpword}
            $.ajax({
                url: 'procedure/adminchangepassword.php',
                type: 'post',
                data: data,
                dataType: "json",
                success: function(response){
                if(response === "success"){
                    alert("success")
                }else{
                    alert(response);
                }
                },
            });
        }
    }
    else
    {
        swal
        ({
            title: "Error !",
            text: "Password Does not Match...",
            icon: "error",
            button: "OK!",
        });
    }
}


//Delete user,Admin and bank
function deleteuser(id) 
{
    var userId =id
    
    var data ={userId:userId}
    $.ajax({
        url: 'procedure/deleteuser.php',
        type: 'post',
        data: data,
        dataType: "json",
        success: function(response){
           if(response === "success"){
              alert("success")
           }else{
              alert(response);
           }
        },
     });
}

function deletebank(id) 
{
    var userId =id
    
    var data ={userId:userId}
    $.ajax({
        url: 'procedure/deletebank.php',
        type: 'post',
        data: data,
        dataType: "json",
        success: function(response){
           if(response === "success"){
              alert("success")
           }else{
              alert(response);
           }
        },
     });
}

function deleteAdmin(id) 
{
    var userId =id
    
    var data ={userId:userId}
    $.ajax({
        url: 'procedure/deleteAdmin.php',
        type: 'post',
        data: data,
        dataType: "json",
        success: function(response){
           if(response === "success"){
              alert("success")
           }else{
              alert(response);
           }
        },
     });
}


//Send Mail
function sendmail() 
{
    var sender= document.getElementById("edit-item-from").value
    var reciever= document.getElementById("edit-item-to").value
    var copycontact= document.getElementById("edit-item-CC").value
    var Bcc= document.getElementById("edit-item-BCC").value
    var subject= document.getElementById("edit-item-subject").value
    var message= document.getElementById("mailbody").value
    //var attachment=$('#file')[0].files;

    var data ={sender:sender,reciever:reciever,copycontact:copycontact,Bcc:Bcc,subject:subject,message:message};
    
        console.log(data)
        $.ajax({
            url: 'procedure/sendmail.php',
            type: 'post',
            data: data,
            dataType: "json",
            success: function(response){
               if(response == "Mail Sent....."){
                  alert("Mail Sent")
               }else{
                  alert(response);
               }
            },
         });
    
}


/// Register Admin
function regAdmin() 
{
    var agree= document.getElementById("tnc_select1").checked;
    if(agree===true)
    {
        var fname= document.getElementById("fname0").value
        var lname= document.getElementById("lname0").value
        var phone= document.getElementById("phone0").value
        var email= document.getElementById("cemail0").value
        var password= document.getElementById("password0").value
        var cpass= document.getElementById("cpassword0").value
        var Role= document.getElementById("role").value
        var data ={fname:fname,lname:lname,email:email,password:password,cpass:cpass,Role:Role,phone:phone};
         console.log(data)
        if(password===cpass)
        {
            $.ajax({
                url: 'procedure/regAdmin.php',
                type: 'post',
                data: data,
                dataType: "json",
                success: function(response){
                   if(response === "success"){
                      alert("success")
                   }else{
                      alert(response);
                   }
                },
             });
        }
        else
        {
            alert("Password does not match")
        }
    }
    else
        alert("Please accept terms and conditions");
    
}

//   Bank chat Viewer

function getuserchat(bankname)
{
    var userid=document.getElementById("unique_id").innerText
    var loginstatus="";
    alert(bankname)
    var user=document.getElementById('chat');
    var chatuser=''

    var data="";
    if(user.style.display==="none")
    {
    chatuser += 
    '<div class="chat-header"> <div class="row valign-wrapper"><div class="col media-image online pr-0"><img src="app-assets/images/user/7.jpg" alt="" class="circle z-depth-2 responsive-img"></div><div class="col"></div><p class="m-0 id="bankname" blue-grey-text text-darken-4 font-weight-700">'+bankname+'</p></div></div><span class="option-icon"><span class="favorite"><i class="material-icons">star_outline</i> </div>'
                 +
   
                 '<div class="chat-area"><div class="chats"><div class="chats" id="message"><p id="unique_id0" style="display:none">'+userid+'</p></div></div></div>'+
                 '<div class="chat-footer"><form onsubmit="enter_chat();" action="javascript:void(0);" class="chat-input">'
                 +'<i class="material-icons mr-2">face</i><i class="material-icons mr-2">attachment</i><input type="text" id="message1" placeholder="Type message here.." class="message mb-0">'+
                 '<a class="btn waves-effect waves-light send" onclick=" preview_image();">Send</a></form></div>';
    user.innerHTML = chatuser;
    user.style.display="inline";
    }
    else
    {
        chatuser="";
        chatuser += '<div class="chat-header"> <div class="row valign-wrapper"><div class="col media-image online pr-0"><img src="app-assets/images/user/7.jpg" alt="" class="circle z-depth-2 responsive-img"></div><div class="col"></div><p  id="bankname"  class="m-0 blue-grey-text text-darken-4 font-weight-700">'+bankname+'</p></div></div><span class="option-icon"><span class="favorite"><i class="material-icons">star_outline</i> </div>'
        +

        '<div class="chat-area"><div class="chats"><div class="chats" id="message"><p id="unique_id0" style="display:none">'+userid+'</p></div></div></div>'+
                 '<div class="chat-footer"><form onsubmit="enter_chat();" action="javascript:void(0);" class="chat-input">'
                 +'<i class="material-icons mr-2">face</i><i class="material-icons mr-2">attachment</i><input type="text" id="message1"  placeholder="Type message here.." class="message mb-0">'+
        '<a class="btn waves-effect waves-light send" onclick=" preview_image();">Send</a></form></div>';

    user.innerHTML = chatuser;
    user.style.display="block";
    //preview_image();
    }
}