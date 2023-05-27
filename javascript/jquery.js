$(document).ready(function(){

    $("#admin-doctor").click(function(){
        loadDoctor();
    });
    $("#admin-patient").click(function(){
        loadPatient();
    });
    $("#admin-appointment").click(function(){
        loadAppointment();
    });
    $("#user-see-appiontment").click(function(){
        let id=$(this).data("id");
        loadUserAppointment(id);
    });
    $("#load-doctor-appointment").click(function(){
        let id=$(this).data("id");
        loadDoctorAppointment(id);
    });
    $("#user-dashboard").click(function(){
        let id=$(this).data("id");
        $.ajax({
            url: '../includes/function.php',
            type: 'POST',
            data: {
                functionName: 'UserDashboardData',
                param1: id
            },
            success: function(response) {
                $('#user-today-appointment').text(response.todayAppointments);
                $('#user-total-appointment').text(response.totalAppointments);
            },
            error: function() {
                console.error('Failed to retrieve data from PHP.');
            }
        });       
    });
    $("#Doctor-dashboard").click(function(){
        let id=$(this).data("id");
        $.ajax({
            url: '../includes/function.php',
            type: 'POST',
            data: {
                functionName: 'DoctorDashboardData',
                param1: id
            },
            success: function(response) {
                $('#Doctor-today-appointment').text(response.todayAppointments);
                $('#Doctor-total-appointment').text(response.totalAppointments);
            },
            error: function() {
                console.error('Failed to retrieve data from PHP.');
            }
        });       
    });
    $("#User-Profile").click(function(){
        let id=$(this).data("id");
        $.ajax({
            url: '../includes/function.php',
            type: 'POST',
            data: {
                functionName: 'UserProfileData',
                param1: id
            },
            success: function(response) {
                $('#User_name').val(response.Name);
                $('#User_address').val(response.Address);
                $('#User_gender').val(response.Gender);
                $('#User_contact').val(response.Contact);
                $('#User_email').val(response.Email);
            },
            error: function() {
                console.error('Failed to retrieve data from PHP.');
            }
        });       
    });
    $("#DoctorProfile").click(function(){
        let id=$(this).data("id");
        $.ajax({
            url: '../includes/function.php',
            type: 'POST',
            data: {
                functionName: 'DoctorProfileData',
                param1: id
            },
            success: function(response) {
                $('#Doctor_name').val(response.Name);
                $('#Doctor_address').val(response.Address);
                $('#Doctor_Gender').val(response.Gender);
                $('#Doctor_Contact').val(response.Contact);
                $('#Doctor_Email').val(response.Email);
                $('#Doctor_Specialization').val(response.Specialization);
            },
            error: function() {
                console.error('Failed to retrieve data from PHP.');
            }
        });       
    });
    $("#save-appointment").click(function(){
        let id=$(this).data("id");
        let doctor=$("#selected-doctor").val();
        let time=$("#time-slot").val();
        let specialization=$("#select_specialization").val();
        $.ajax({
            url:'../backend/doctor-data.php?save=appiontment',
            type:'POST',
            data:{
                id: id,
                specialization: specialization,
                doctor: doctor,
                time: time
            },
            success: function(data){
                if(data=='Appointment Booked Succesfully!!')
                {
                    alert(data);
                    $("#selected-doctor").val('');
                    $("#time-slot").val('');
                    $("#select_specialization").val('');
                }
                else
                {
                    alert(data);
                }
            }
        });
    });
    
    $(document).on("click",".delete-doctor",function(){
        let id = $(this).data("id");
        $.ajax({
            url: '../backend/admin-data.php?delete=doctor',
            type: 'POST',
            data: { 
              id: id ,
            },
            success: function(response) {
                if(response=="Successfully Deleted!!")
                {
                    $(this).closest('tr').remove();
                    alert(response);
                    loadDoctor();
                }
                else
                {
                    alert(response);
                }
            }
          });
    });
    $(document).on("click",".delete-patient",function(){
        let id = $(this).data("id");
        $.ajax({
            url: '../backend/admin-data.php?delete=patient',
            type: 'POST',
            data: { 
              id: id ,
            },
            success: function(response) {
                if(response=="Successfully Deleted!!")
                {
                    $(this).closest('tr').remove();
                    alert(response);
                    loadPatient();
                }
                else
                {
                    alert(response);
                }
            }
          });
    });
    $(document).on("click",".delete-patient-appiontment",function(){
        let id = $(this).data("id");
        let User_id=$("#user-see-appiontment").data("id");
        $.ajax({
            url: '../backend/doctor-data.php?delete=user-appointment',
            type: 'POST',
            data: { 
              id: id ,
            },
            success: function(response) {
                if(response=="Successfully Deleted!!")
                {
                    $(this).closest('tr').remove();
                    alert(response);
                    loadUserAppointment(User_id);
                }
                else
                {
                    alert(response);
                }
            }
          });
    });
    $(document).on("click",".delete-doctor-appiontment",function(){
        let id = $(this).data("id");
        let User_id=$("#load-doctor-appointment").data("id");
        $.ajax({
            url: '../backend/doctor-data.php?delete=doctor-appointment',
            type: 'POST',
            data: { 
              id: id ,
            },
            success: function(response) {
                if(response=="Successfully Deleted!!")
                {
                    $(this).closest('tr').remove();
                    alert(response);
                    loadDoctorAppointment(User_id);
                }
                else
                {
                    alert(response);
                }
            }
          });
    });
    $("#select_specialization").on('change', function(){
        let category_id = $(this).val();
        $.ajax({
            url: "../backend/doctor-data.php?check=doctor",
            type: "POST",
            data: {category_id: category_id},
            success: function(data){
                if(data=="1")
                {
                    alert("Againt this specialization have no doctor")
                }
                else
                {
                    $("#selected-doctor").html(data);
                }
                
            }
        });
    });
    function loadDoctor()
    {
        $.ajax({
            url: '../backend/admin-data.php?load=doctor',
            type: 'POST',
            success: function(response) {
                $("#doctor-record").html(response);
            }
            });
    }
    function loadPatient()
    {
        $.ajax({
            url: '../backend/admin-data.php?load=patient',
            type: 'POST',
            success: function(response) {
                $("#patient-record").html(response);
            }
            });
    }
    function loadAppointment()
    {
        $.ajax({
            url: '../backend/admin-data.php?load=Appointment',
            type: 'POST',
            success: function(response){
                $("#appointment-record").html(response);
            }
        });
    }
    function loadUserAppointment(id)
    {
        $.ajax({
            url: '../backend/admin-data.php?load=UserAppointment',
            type: 'POST',
            data:{
                id:id
            },
            success: function(response){
                $("#see-user-appointment").html(response);
            }
        });
    }
    function loadDoctorAppointment(id)
    {
        $.ajax({
            url: '../backend/admin-data.php?load=DoctorAppointment',
            type: 'POST',
            data:{
                id:id
            },
            success: function(response){
                $("#Doctor-appointment").html(response);
            }
        });
    }
});