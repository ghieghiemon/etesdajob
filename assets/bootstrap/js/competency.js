$(document).ready(function(){       //on change
        $('#lstcomp1').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#nconame > option").remove(); //first of all clear select items
            var ncoid = $('#lstcomp1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
               url: $('#base').val() + "employer/get_competencyname/"+ncoid, //here we are calling our user controller and get_cities method with the country_id
              // url: $('#base').val() +"employer/get_cities/"+regionid
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncoid,cocname) 
                  //  $.each(comp,function(ncoid,level,nconame) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#nconame').html($(ncoid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncoid);
                        opt.text(cocname);
                        $('#nconame').append(opt);
               });
             
                }
                 
            });
             
        });

});

 $(document).ready(function(){       //on change
        $('#lstcomp1').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#ncodesc > option").remove(); //first of all clear select items
            var ncoid = $('#lstcomp1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: $('#base').val() +"employer/get_competencydesc/"+ncoid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncoid,description) 
                  //  $.each(comp,function(ncoid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#ncodesc').html($(ncoid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncoid);
                        opt.text(description);
                        $('#ncodesc').append(opt);
               });
             
                }
                 
            });
             
        });

});


 $(document).ready(function(){       //on change
        $('#lstcomp2').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#nconame > option").remove(); //first of all clear select items
            var ncoid = $('#lstcomp2').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
              url: $('#base').val() + "employer/get_competencyname/"+ncoid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncoid,cocname) 
                  //  $.each(comp,function(ncoid,level,nconame) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#nconame').html($(ncoid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncoid);
                        opt.text(cocname);
                        $('#nconame').append(opt);
               });
             
                }
                 
            });
             
        });

});

 $(document).ready(function(){       //on change
        $('#lstcomp2').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#ncodesc > option").remove(); //first of all clear select items
            var ncoid = $('#lstcomp2').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
               url: $('#base').val() + "employer/get_competencydesc/"+ncoid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncoid,description) 
                  //  $.each(comp,function(ncoid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#ncodesc').html($(ncoid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncoid);
                        opt.text(description);
                        $('#ncodesc').append(opt);
               });
             
                }
                 
            });
             
        });

});