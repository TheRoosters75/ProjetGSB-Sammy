function afficherTickets(){
    $.ajax(
        {
            type:"post",
            url:"index.php/Ctrl_Accueil/afficherTickets",
                data:"login="+$('#txtlogin').val()+"&mdp="+$('#txtmdp').val(),
             success:function(data)
            {
                $('#divTickets').empty();
                $('#divTickets').append(data);
            },           
        }
    );
}
//    function AfficherAgent(numeroFormation)
//    {
//        $.ajax( 
//            {
//                type:"get",
//                url:"index.php/CtrlSncf2/AfficherLesAgents",
//                data:"numFormation="+numeroFormation,
//                success:function(data)
//                {
//                    $('#divAgents').empty();
//                    $('#divAgents').append(data);
//                },
//                error:function()
//                {
//                    alert('Erreur2');
//                }
//                
//                
//            });
//    }