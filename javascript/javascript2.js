function GoToPannel(pannel)
{
    let dashboard_pannel=document.getElementById("admin-pannel-for-dashbord");     
    let doctor_pannel=document.getElementById("admin-pannel-for-doctor");     
    let patient_pannel=document.getElementById("admin-pannel-for-patient");     
    let appiontment_pannel=document.getElementById("admin-pannel-for-appiontment");     
    let profile_pannel=document.getElementById("admin-pannel-for-profile");     

    if(pannel=='dashboard')
    {
        console.log("1");
        dashboard_pannel.style.display="block";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="none";
    }
    else if(pannel=='doctor')
    {
        console.log("2");
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="block";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="none";
    }
    else if(pannel=='patient')
    {
        console.log("3");
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="block";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="none";
    }
    else if(pannel=='appointment')
    {
        console.log("4");
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="block";
        profile_pannel.style.display="none";
    }
    else if(pannel=='profile')
    {
        console.log("5");
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="block";
    }
}