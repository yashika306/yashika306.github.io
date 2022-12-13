function validateForm() {
    let uname = document.forms["myForm"]["UserName"].value;
    let email = document.forms["myForm"]["email_id"].value;
    let pwd = document.forms["myForm"]["password"];
    let c_pwd = document.forms["myForm"]["c_password"];
    let isValid
    if (uname == "") {
      document.getElementById("req").style.visibility="visible"
      isValid=false
    }
    else{
      document.getElementById("req").style.visibility="hidden"
      isValid=true
    }
    
     if(email == ""){
      console.log("insidewmail Empty")
      document.getElementById("reqEmail").style.visibility="visible"
      isValid=false
    }
    else{
      document.getElementById("reqEmail").style.visibility="hidden"
      isValid=true
    }
    
     if(pwd.value == ""){
      document.getElementById("pwdid").style.visibility="visible"
      isValid=false
    }
    else{
      document.getElementById("pwdid").style.visibility="hidden"
      isValid=true
    }
   
     if(c_pwd.value == ""){
      document.getElementById("c_pwdid").style.visibility="visible"
      isValid=false
    }
    else{
      document.getElementById("c_pwdid").style.visibility="hidden"
      isValid=true
    }
    return isValid
  }