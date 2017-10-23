function AfficherFormation()
    {
        $.ajax 
        (
            {
                type:"get",
                url:"index.php/CtrlSncf2/AfficherLesFormations",
                data:"numActivite="+$('#lstActivites').val(),
                success:function(data)
                {
                    $('#divFormations').empty();
                $('#divFormations').append(data);
 
                },
                error:function()
                {
                    alert('Erreur1');
                }
            }
        
        );
        
    }
    function AfficherAgent(numeroFormation)
    {
        $.ajax( 
            {
                type:"get",
                url:"index.php/CtrlSncf2/AfficherLesAgents",
                data:"numFormation="+numeroFormation,
                success:function(data)
                {
                    $('#divAgents').empty();
                    $('#divAgents').append(data);
                },
                error:function()
                {
                    alert('Erreur2');
                }
                
                
            });
    }