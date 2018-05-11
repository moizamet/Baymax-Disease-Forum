 var cname_exp = /^[a-zA-Z0-9]*$/;
 var desc_exp = /^[a-zA-Z0-9]*$/;
  function validate_input()
    {
      document.getElementById("hf").innerHTML = "";
      document.getElementById("loa").innerHTML = "";
      document.getElementById("ha").innerHTML = "";
      document.getElementById("wk").innerHTML = "";
      document.getElementById("ba").innerHTML = "";
      document.getElementById("os").innerHTML = "";

      var fever = document.userdetails.hf.value;
      var appetite = document.userdetails.loa.value;
      var head = document.userdetails.ha.value;
      var weak = document.userdetails.wk.value;
      var body = document.userdetails.ba.value;
      var other = document.userdetails.os.value;
      if(fever == "")
      {
        document.getElementById("hf").innerHTML = "Please select value for fever";
        return false;
      }
      if(appetite == "")
      {
        document.getElementById("loa").innerHTML = "Please select value for appetite";
        return false;
      }
      if(head == "")
      {
        document.getElementById("ha").innerHTML = "Please select value for Head ache";
        return false;
      }
      if(weak == "")
      {
        document.getElementById("wk").innerHTML = "Please select value for weakness";
        return false;
      }
      if(body == "")
      {
        document.getElementById("ba").innerHTML = "Please select value for body ache";
        return false;
      }
      if(other == "Choose")
      {
        document.getElementById("os").innerHTML = "Please select value for other symptoms";
        return false;
      }
    }
 function validate_userreg()
  {
     document.getElementById("uname").innerHTML = "";
     document.getElementById("uphone").innerHTML = "";
     document.getElementById("upass").innerHTML = "";
     document.getElementById("upassr").innerHTML = "";
     document.getElementById("uemail").innerHTML = "";
     document.getElementById("uage").innerHTML = "";
     document.getElementById("uzip").innerHTML = "";
      //var assignments
      var name = document.usersignup.uname.value;
      var phone = document.usersignup.uphone.value;
      var pw = document.usersignup.upass.value;
      var rpw = document.usersignup.upassr.value;
      var email = document.usersignup.uemail.value;
      var age = document.usersignup.uage.value;
      var zip = document.usersignup.uzip.value;
      var name_regxp = /^[a-zA-Z]*$/;
      var email_regxp = /^[a-zA-Z0-9]+[@][a-z]+[.][a-z]+$/;
      var phone_regxp = /^[0-9]*$/;
      if(name == "")
      {
        document.getElementById("uname").innerHTML = "Please enter your name";
        return false;
      }
      if(!name.match(name_regxp))
      {
        document.getElementById("uname").innerHTML = "Name should contain only alphabets";
        return false;
      }
      if (phone == "") 
      {
        document.getElementById("uphone").innerHTML = "Please enter phone number";
        return false;
      }
      if (!phone.match(phone_regxp)) 
      {
        document.getElementById("uphone").innerHTML = "Invalid Phone number ...please enter only numbers";
        return false;
      }
      if (phone.length>10) 
      {
        document.getElementById("uphone").innerHTML = "Phone number should contain only 10 digits";
        return false;
      }
      if (email == "") 
      {
        document.getElementById("uemail").innerHTML = "Please enter E-mail";
        return false;
      }
      if (!email.match(email_regxp)) 
      {
        document.getElementById("uemail").innerHTML = "Please enter a valid E-mail";
        return false;
      }
      if(age == "")
      {
        document.getElementById("uage").innerHTML = "Please enter your age";
        return false;
      }
      if(!age.match(phone_regxp))
      {
        document.getElementById("uage").innerHTML = "Age should be a numeric value";
        return false;
      }
      if(age.length > 3)
      {
        document.getElementById("uage").innerHTML = "Please enter valid age";
        return false;
      }
       if(zip == "")
      {
        document.getElementById("uzip").innerHTML = "Please enter Zip code";
        return false;
      }
       if(zip.length > 6)
      {
        document.getElementById("uzip").innerHTML = "Zip code cannot be longer than 6 digits";
        return false;
      }
      if (pw == "")
      {
        document.getElementById("upass").innerHTML = "Please enter password";
        return false;
      }
      if (rpw == "") 
      {
        document.getElementById("upassr").innerHTML = "Please re-enter your password";
        return false;
      }
      if(rpw != pw)
      {
        document.getElementById("upassr").innerHTML = "Passwords do not match";
        return false;
      }
      alert("Form Validated Successfull ");
      return true;
    }
/************************************************************************************************************************/
function validate_doctorreg()
  {
     document.getElementById("dname").innerHTML = "";
     document.getElementById("dphone").innerHTML = "";
     document.getElementById("drcode").innerHTML = "";
     document.getElementById("dspec").innerHTML = "";
     document.getElementById("dzip").innerHTML = "";
     document.getElementById("dpass").innerHTML = "";
     document.getElementById("dpassr").innerHTML = "";
      document.getElementById("demail").innerHTML = "";

      //var assignments
      var name = document.doctorsignup.dname.value;
      var phone = document.doctorsignup.dphone.value;
      var pw = document.doctorsignup.dpass.value;
      var rpw = document.doctorsignup.dpassr.value;
      var dcode = document.doctorsignup.drcode.value;
      var dspec = document.doctorsignup.dspec.value;
      var dzip = document.doctorsignup.dzip.value;
      var email = document.doctorsignup.demail.value;
      var name_regxp = /^[a-zA-Z]*$/;
      var email_regxp = /^[a-zA-Z0-9]+[@][a-z]+[.][a-z]+$/;
      var dcode_regxp = /^[a-zA-Z0-9]*$/;
      var phone_regxp = /^[0-9]*$/;
      if(name == "")
      {
        document.getElementById("dname").innerHTML = "Please enter your name";
        return false;
      }
      if(!name.match(name_regxp))
      {
        document.getElementById("dname").innerHTML = "Name should contain only alphabets";
        return false;
      }
      if (phone == "") 
      {
        document.getElementById("dphone").innerHTML = "Please enter phone number";
        return false;
      }
      if (!phone.match(phone_regxp)) 
      {
        document.getElementById("dphone").innerHTML = "Phone number should contain numbers";
        return false;
      }
      if (phone.length>10) 
      {
        document.getElementById("dphone").innerHTML = "Phone number too long";
        return false;
      }
      if (email == "") 
      {
        document.getElementById("demail").innerHTML = "Please enter E-mail";
        return false;
      }
      if (!email.match(email_regxp)) 
      {
        document.getElementById("demail").innerHTML = "Please enter a valid E-mail";
        return false;

      }
      if (dcode == "") 
      {
        document.getElementById("dcode").innerHTML = "Please enter doctore license number";
        return false;
      }
        if (!dcode.match(dcode_regxp)) 
      {
        document.getElementById("dcode").innerHTML = "License number can only contain letters and numbers";
        return false;
      }
        if (dspec == "") 
      {
        document.getElementById("dspec").innerHTML = "Please enter doctor's specialization";
        return false;
      }
        if (!dspec.match(name_regxp)) 
      {
        document.getElementById("dspec").innerHTML = "Specialization should contain only letters";
        return false;
      }
       if (dzip == "") 
      {
        document.getElementById("dzip").innerHTML = "Please enter doctor's area code";
        return false;
      }
       if (dzip.length>6) 
      {
        document.getElementById("dzip").innerHTML = "Area code cannot be longer than 6 digits";
        return false;
      }
      if (pw == "")
      {
        document.getElementById("dpass").innerHTML = "Please enter password";
        return false;
      }
      if (rpw == "") 
      {
        document.getElementById("dpassr").innerHTML = "Please re-enter your password";
        return false;
      }
      if(rpw != pw)
      {
        document.getElementById("dpassr").innerHTML = "Passwords do not match";
        return false;
      }
      alert("Form Validated Successfull ");
      return true;
    }
/************************************************************************************************************************/
    function validate_userlogin()
    {
      document.getElementById("uname").innerHTML = "";
      document.getElementById("upass").innerHTML = "";
      //var assignnments
      var uname = document.userlogin.uname.value;
      var pw = document.userlogin.upass.value;
      if (uname == "")
       {
        document.getElementById("uname").innerHTML = "Please enter Username";
        return false;
       }
       if(pw == "")
       {
        document.getElementById("upass").innerHTML = "Please enter password";
        return false;
       }
      alert("successfull log");
      return true;
    }

/**********************************************************************************************************************/
     function validate_doctorlogin()
    {
      document.getElementById("dname").innerHTML = "";
      document.getElementById("dpass").innerHTML = "";
      //var assignnments
      var dname = document.doctorlogin.dname.value;
      var dw = document.doctorlogin.dpass.value;
      if (dname == "")
       {
        document.getElementById("dname").innerHTML = "Please enter Username";
        return false;
       }
       if(dw == "")
       {
        document.getElementById("dpass").innerHTML = "Please enter password";
        return false;
       }
      alert("successfull log");
      return true;
    }
/*************************************************************************************************************************/


   