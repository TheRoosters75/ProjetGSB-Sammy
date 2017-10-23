function AfficherJeux()
        {
            $.ajax
            (
                {
                        type:'get',
                        url:"index.php/Ctrl_Demo/AfficherJeux",
                        data:"numCateg="+$('#lstCategorie').val(),
                        success:function(data)
                        {
                            $('#divJeux').empty();
                            $('#divJeux').apprend(data);
                        },
                        error:function()
                        {
                            
                        }
                }
            );
        }
        
        function ClickBouton1()
        {
            alert("Vous avez saisie "+$('#txtValeur').val());
        }
        
        function ClickBouton2()
        {
            alert("Vous avez cliquez sur le bouton 2");
        }