$(document).ready(function(){
    $("#btn_click").click(function(){
        var name=$("#name").val();
        var email=$("#email").val();
        var password=$("#password").val();
        console.log(name+ "" +email+ "" +password);
        var data1={
            name : name,
            email : email,
            password : password
        }
        $.ajax({
            type: "POST",
            url: BASE_URL+"/Main_controller/insert",
           // contentType: "application/json",
            data : data1,
            dataType : "JSON",
            success : function(response) {
               if(response == "success") {
                    $("#myMessage").append("<p><strong>"+response+"</strong></p>");
               }
            },
           error : function(err){
             console.log("error",err);
                $("#myMessage").append("<p><strong>"+err+"</strong></p>");
            }
        });
    });
});
/*
$("#btn_click").click(function(){
    let fetchData={
        method: "POST",
        headers: new Headers({'Content-type': 'text/plain'})
    };
    fetch(BASE_URL + 'Main_controller/insert',fetchData)
    .then((response)=>response.text())
    .then((result)=>{

    })
})*/