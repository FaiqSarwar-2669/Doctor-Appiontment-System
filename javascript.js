function showForm() {
    let form = document.getElementById("form1");
    form.style.display = "block";
}

function Show_Selected_Inputs()
{
    let doctor_fields=document.getElementById('doctor_fields');
    let user_fields=document.getElementById('user_fields');
    let selection=document.getElementById('Admin_selection');
    if(selection.value=='User')
    {
        user_fields.style.display="block";
        doctor_fields.style.display="none";
    }
    else if(selection.value=='Doctor')
    {
        doctor_fields.style.display="block";
        user_fields.style.display="none";
    }
    
}


// validates the fields of Admin log in form

function validate_fields_form()
{
    let name=document.getElementById("Admin_name");
    let address=document.getElementById("Admin_adress");
    let gender=document.getElementById("Admin_Gender");
    let contact=document.getElementById("Admin_contact");
    let selection=document.getElementById("Admin_selection");
    let specialization=document.getElementById("select_specialization");
    let email=document.getElementById("Admin_email");
    let password=document.getElementById("Admin_password");
    let password_conform=document.getElementById("Admin_password_conform");
    let description=document.getElementById("Admin_description");
    const regex = /^[a-zA-Z\s]+$/;
    const phoneNumberPattern = /^03[0-9]{2}-[0-9]{7}$/;
    if (!regex.test(name.value)) 
    {
        alert('Please enter name only letters!');
        return false;
    }
    else if(gender.value =="")
    {
        alert('Please enter the gender!');
        return false;
    }
    else if(!phoneNumberPattern.test(contact.value))
    {
        alert('Please follow this pattern 03XX-XXXXXXX');
        return false;
    }
    else if(selection.value=="")
    {
        alert('Please select the category');
        return false;
    }
    else if(specialization.value=="")
    {
        alert('Enter your Specialization');
        return false;
    }
    else if(password.value.length > 8)
    {
        alert('Your password length must be Eigth or less');
        return false;
    }
    else if(password_conform.value.length > 8)
    {
        alert('Your conform password length must be Eigth or less');
        return false;
    }
    else if(password.value != password_conform.value)
    {
        alert('Password does not match');
        return false;
    }
    else 
    {
        return true;
    }
}

