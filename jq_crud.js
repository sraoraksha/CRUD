    
    $("#btnSelect").click(function(){
        let fetchData = {
            method : 'POST',
            //body : {},
            headers: new Headers({'Content-Type': 'text/plain'})
        };

        fetch(BASE_URL + 'Jquery_ctrl/SelectAll',fetchData)
        .then((response) => response.text())
        .then((result) => {

            //let promiseText = result; 
            $("#container").html(result);
        });
    });