function AfficherFormation(idActivite)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/AfficherFormations",
        data:"idActivite="+idActivite,
        success:function(data)
        {
            $('#divFormations').empty();
            $('#divAgents').empty();
            $('#divFormations').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
function AfficherAgents(idFormation)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/CtrlActivites/AfficherAgents",
        data:"idFormation="+idFormation,
        success:function(data)
        {
            $('#divAgents').empty();
            $('#divAgents').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}