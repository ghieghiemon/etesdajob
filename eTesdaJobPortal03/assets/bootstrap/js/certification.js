 $(document).ready(function(){       //on change
        $('#lstcert1').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#lstcomp1 > option").remove(); //first of all clear select items
            var ncid = $('#lstcert1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_comps/"+ncid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncoid,cocname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncoid);
                        opt.text(cocname);
                        $('#lstcomp1').append(opt);

               });
                }
                 
            });
             
        });

});


 $(document).ready(function(){       //on change
        $('#lstcert1').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#ncname > option").remove(); //first of all clear select items
            var ncid = $('#lstcert1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_certificationname/"+ncid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncid,ncname) 
                  //  $.each(comp,function(ncid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#ncname').html($(ncid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncid);
                        opt.text(ncname);
                        $('#ncname').append(opt);
               });
             
                }
                 
            });
             
        });

});

 $(document).ready(function(){       //on change
        $('#lstcert1').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#ncdesc > option").remove(); //first of all clear select items
            var ncid = $('#lstcert1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_certificationdesc/"+ncid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncid,description) 
                  //  $.each(comp,function(ncid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#ncdesc').html($(ncid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncid);
                        opt.text(description);
                        $('#ncdesc').append(opt);
               });
             
                }
                 
            });
             
        });

});


 
 $(document).ready(function(){       //on change
        $('#lstcert1').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#nclevel > option").remove(); //first of all clear select items
            var ncid = $('#lstcert1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_certificationlevel/"+ncid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncid,level) 
                  //  $.each(comp,function(ncid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#nclevel').html($(ncid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncid);
                        opt.text(level);
                        $('#nclevel').append(opt);
               });
             
                }
                 
            });
             
        });

});
 
	



// cert
$(function(){
$("#btnAddCert").click(function(){
$("#lstcert1 > option:selected").each(function(){
     for (var i = 0, children = lstcomp1.childNodes, l = children.length; i < l; i++) {
                 if (children[i].tagName === "OPTION") children[i].selected = true;
}
$(this).remove().appendTo("#lstcert2");
$("#lstcomp1 > option:selected").each(function(){
$(this).remove().appendTo("#lstcomp2");
});
});
});

$("#btnDelCert").click(function(){
$("#lstcomp2 > option:selected").each(function(){
     for (var i = 0, children = lstcomp2.childNodes, l = children.length; i < l; i++) {
                 if (children[i].tagName === "OPTION") children[i].selected = true;
}
$(this).remove().appendTo("#lstcomp1");
});
$("#lstcert2 > option:selected").each(function(){
$(this).remove().appendTo("#lstcert1");
});
});
});




// comp
$(function(){
$("#btnAddComp").click(function(){
$("#lstcomp1 > option:selected").each(function(){
$(this).remove().appendTo("#lstcomp2");

});
});

$("#btnDelComp").click(function(){
$("#lstskill2 > option:selected").each(function(){

$(this).remove().appendTo("#lstcomp1");
});
$("#lstcomp2 > option:selected").each(function(){
$(this).remove().appendTo("#lstcomp1");
});
});
});



 
    //LISTBOX SEARCH CERT
    jQuery.fn.filterByText = function(txtSkills, selectSingleMatch) {
        return this.each(function() {
            var select = this;
            var options = [];
            $(select).find('option').each(function() {
                options.push({value: $(this).val(), text: $(this).text()});
            });
            $(select).data('options', options);
            $(txtSkills).bind('change keyup', function() {
                var options = $(select).empty().data('options');
                var search = $(this).val().trim();
                var regex = new RegExp(search,"gi");
              
                $.each(options, function(i) {
                    var option = options[i];
                    if(option.text.match(regex) !== null) {
                        $(select).append(
                           $('<option>').text(option.text).val(option.value)
                        );
                    }
                });
                if (selectSingleMatch === true && $(select).children().length === 1) {
                    $(select).children().get(0).selected = true;
                }
            });            
        });
    };

    $(function() {
        $('#lstcert1').filterByText($('#txtCerts'), true);
    });
  
    

    //LISTBOX SEARCH COMP
    jQuery.fn.filterByText = function(txtSkills, selectSingleMatch) {
        return this.each(function() {
            var select = this;
            var options = [];
            $(select).find('option').each(function() {
                options.push({value: $(this).val(), text: $(this).text()});
            });
            $(select).data('options', options);
            $(txtSkills).bind('change keyup', function() {
                var options = $(select).empty().data('options');
                var search = $(this).val().trim();
                var regex = new RegExp(search,"gi");
              
                $.each(options, function(i) {
                    var option = options[i];
                    if(option.text.match(regex) !== null) {
                        $(select).append(
                           $('<option>').text(option.text).val(option.value)
                        );
                    }
                });
                if (selectSingleMatch === true && $(select).children().length === 1) {
                    $(select).children().get(0).selected = true;
                }
            });            
        });
    };

    $(function() {
        $('#lstcomp1').filterByText($('#txtComps'), true);
    });
    


    

 $(document).ready(function(){       //on change
        $('#lstcert2').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#ncname > option").remove(); //first of all clear select items
            var ncid = $('#lstcert2').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_certificationname/"+ncid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncid,ncname) 
                  //  $.each(comp,function(ncid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#ncname').html($(ncid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncid);
                        opt.text(ncname);
                        $('#ncname').append(opt);
               });
             
                }
                 
            });
             
        });

});

 $(document).ready(function(){       //on change
        $('#lstcert2').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#ncdesc > option").remove(); //first of all clear select items
            var ncid = $('#lstcert2').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_certificationdesc/"+ncid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncid,description) 
                  //  $.each(comp,function(ncid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#ncdesc').html($(ncid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncid);
                        opt.text(description);
                        $('#ncdesc').append(opt);
               });
             
                }
                 
            });
             
        });

});

 
 $(document).ready(function(){       //on change
        $('#lstcert2').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#nclevel > option").remove(); //first of all clear select items
            var ncid = $('#lstcert2').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_certificationlevel/"+ncid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(comp) //we're calling the response json array 'cities'
                {
                    $.each(comp,function(ncid,level) 
                  //  $.each(comp,function(ncid,level,ncname) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                    $('#nclevel').html($(ncid).val());
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(ncid);
                        opt.text(level);
                        $('#nclevel').append(opt);
               });
             
                }
                 
            });
             
        });

});

