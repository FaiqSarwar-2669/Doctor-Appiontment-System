function GoToPannel(pannel)
{
    let dashboard_pannel=document.getElementById("admin-pannel-for-dashbord");     
    let doctor_pannel=document.getElementById("admin-pannel-for-doctor");     
    let patient_pannel=document.getElementById("admin-pannel-for-patient");     
    let appiontment_pannel=document.getElementById("admin-pannel-for-appiontment");     
    let profile_pannel=document.getElementById("admin-pannel-for-profile");     

    if(pannel=='dashboard')
    {
        dashboard_pannel.style.display="block";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="none";
    }
    else if(pannel=='doctor')
    {
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="block";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="none";
    }
    else if(pannel=='patient')
    {
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="block";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="none";
    }
    else if(pannel=='appointment')
    {
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="block";
        profile_pannel.style.display="none";
    }
    else if(pannel=='profile')
    {
        dashboard_pannel.style.display="none";
        doctor_pannel.style.display="none";
        patient_pannel.style.display="none";
        appiontment_pannel.style.display="none";
        profile_pannel.style.display="block";
    }
}