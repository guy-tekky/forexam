getjson();
function getjson(){
    $.ajax({
        url: "employee.json",
        type: "GET",
        dataType: "json",
        success: function(data) {
           var myArray = [];
    
           $.each(data.employees, function(i, item){
                myArray.push(item.lastName);
                myArray.sort();
           });
    
           $.each(data.employees, function(i, item){
                if(myArray[0] == item.lastName){
                    $("#lname").val(item.lastName);
                    $("#fname").val(item.firstName);
                    $("#bday").val(item.birthday);
                    if(item.gender.male==true){
                        $("#male").prop("checked", true);    
                    }
                    else{
                        $("#female").prop("checked", true);
                    }
    
                    for(var a = 0 ; a < item.knownLanguage.length ; a++){
                        $("#"+data.employees[0].knownLanguage[a]).prop("checked", true);
                        
                    }
                    
                }
           });
        }
    });    
}

