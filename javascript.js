function showForm(formId) 
{
  var form1 = document.getElementById("form1");
  var form2 = document.getElementById("form2");
  var form3 = document.getElementById("form3");
          
  if (formId === "form1") 
  {
     form1.style.display = "block";
     form2.style.display = "none";
     form3.style.display = "none";
     } else if (formId === "form2") {
     form1.style.display = "none";
     form2.style.display = "block";
     form3.style.display = "none";
     } else if (formId === "form3") {
     form1.style.display = "none";
     form2.style.display = "none";
     form3.style.display = "block";
     }
}

// validates the fields of Admin log in form

function validate_fields_form_1()
{
    let name=document.getElementById("Admin_name");
    let address=document.getElementById("Admin_adress");
    let gender=document.getElementById("Admin_Gender");
    let contact=document.getElementById("Admin_contact");
    let email=document.getElementById("Admin_email");
    let password=document.getElementById("Admin_password");
    let description=document.getElementById("Admin_description");
    const regex = /^[a-zA-Z\s]+$/;
    const phoneNumberPattern = /^03[0-9]{2}-[0-9]{7}$/;
    if (!regex.test(name.value)) 
    {
        alert('Please enter name only letters!');
        return false;
    }
    else if(gender.value == "")
    {
        alert('Please enter the gender!');
        return false;
    }
    else if(!phoneNumberPattern.test(contact.value))
    {
        alert('Please follow this pattern 03XX-XXXXXXX');
        return false;
    }
    else if(password.value.length != 8)
    {
        alert('Your password lenght must be 8');
        return false;
    }
    else 
    {
        return true;
    }
}


// validates the fields of Doctor log in form

function validate_fields_form_2()
{
    console.log("here");
    console.log(document.getElementById("Doctor_gender"));
    let name=document.getElementById("Doctor_name");
    let specilization=document.getElementById("Doctor_Specilization");
    let address=document.getElementById("Doctor_adress");
    let gender=document.getElementById("doctor_gender");
    let contact=document.getElementById("Doctor_contact");
    let email=document.getElementById("Doctor_email");
    let password=document.getElementById("Doctor_password");
    let description=document.getElementById("Doctor_description");
    console.log(gender);
    const regex = /^[a-zA-Z\s]+$/;
    const phoneNumberPattern = /^03[0-9]{2}-[0-9]{7}$/;
    if (!regex.test(name.value)) 
    {
        alert('Please enter name only letters!');
        return false;
    }
    else if(specilization.value == "")
    {
        alert('Please select your Specilization!');
        return false;
    }
    else if(gender.value == "")
    {
        alert('Please select the gender!');
        return false;
    }
    else if(!phoneNumberPattern.test(contact.value))
    {
        alert('Please follow this pattern 03XX-XXXXXXX');
        return false;
    }
    else if(password.value.length != 8)
    {
        alert('Your password lenght must be 8');
        return false;
    }
    else 
    {
        return true;
    }
}


// validate the form fields of form 3

function validate_fields_form_3()
{
    let name=document.getElementById("User_name");
    let address=document.getElementById("User_adress");
    let gender=document.getElementById("User_Gender");
    let contact=document.getElementById("User_contact");
    let email=document.getElementById("User_email");
    let password=document.getElementById("User_password");

    const regex = /^[a-zA-Z\s]+$/;
    const phoneNumberPattern = /^03[0-9]{2}-[0-9]{7}$/;
    
    if (!regex.test(name.value)) 
    {
        alert('Please enter name only letters!');
        return false;
    }
    else if(gender.value == "")
    {
        alert('Please enter the gender!');
        return false;
    }
    else if(!phoneNumberPattern.test(contact.value))
    {
        alert('Please follow this pattern 03XX-XXXXXXX');
        return false;
    }
    else if(password.value.length != 8)
    {
        alert('Your password lenght must be 8');
        return false;
    }
    else 
    {
        return true;
    }
}

