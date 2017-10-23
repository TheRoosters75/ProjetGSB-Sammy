function  getLesRegions(){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_AccueilVisiteurAc/getLesRegions",
           
             success:function(data)
            {
                $('#divRegions').empty();
                $('#divRegions').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}

//function   getlesvisiteurs(codeRegion){
//    $.ajax(
//        {  
//            type:"get",
//            url:"index.php/Ctrl_AccueilVisiteurAc/getlesvisiteurs",
//            data:"codeRegion="+codeRegion.val(),
//             success:function(data)
//            {
//                $('#lstRegion').empty();
//                $('#lstRegion').append(data);
//            },
//            error:function()
//            {
//                alert('vous avez fait une  erreur');
//            }
//        }
//        );
//}
