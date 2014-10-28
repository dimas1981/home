  
    function initialize() {
            var options = {
                types: ['(cities)'],
                //componentRestrictions: {country: "ua"},
            };
            var input  = document.getElementById('region');
            var input1 = document.getElementById('region1');
            var input2 = document.getElementById('region2');
            var input3 = document.getElementById('region3');
            if(input){
            var autocomplete = new google.maps.places.Autocomplete(input , options);
            }
            if(input1){
            var autocomplete = new google.maps.places.Autocomplete(input1 , options);
            }
            if(input2){
            var autocomplete = new google.maps.places.Autocomplete(input2 , options);
            }
            if(input3){
            var autocomplete = new google.maps.places.Autocomplete(input3 , options);
            }
    }
google.maps.event.addDomListener(window, 'load', initialize);
        
        // jQuery //
$(window).load(function(){


    function DatePickerInit(selector)
    {
        $(selector).datepicker({
            startDate: '-3y',
                                minDate: "12/12/1945",
                        maxDate: "12/12/2000",
                        onSelect: function(selected) {
                          $("#txtToDate").datepicker("option","minDate", selected)
                        }
                    });
    }
    
    DatePickerInit("#datepicker-m");
            
    var WomanRegisterSelect = jQuery('#r-woman, label[for=r-woman]');
    var ManRegisterSelect   = jQuery('#r-man, label[for=r-man]');
    var WomanRegisterForm   = jQuery('.register-form-woman');
    var ManRegisterForm     = jQuery('.register-form-man');
    
    WomanRegisterSelect.bind('click', function(){
       ManRegisterForm.css('display','none');
       WomanRegisterForm.fadeIn(500);
        DatePickerInit("#datepicker-w");
    });
    ManRegisterSelect.bind('click', function(){
       WomanRegisterForm.css('display','none');
       ManRegisterForm.fadeIn(500);  
    });
    
    jQuery('.user-info-list:not(:last-child)')
            .css('borderBottom','1px solid #ADA6A6');
    
    jQuery('.edit-back-link').on('click', function(){
        window.history.back();
        return false;
    });
    
    DatePickerInit("#datepicker-woman-edit");
    DatePickerInit(".datepicker-w-edit");

        
    jQuery("#uploadimage").change(function(){
                $('.send_image').submit();
    }); 
        

    jQuery('.change-photo-link').on('click',function(e){
        e.preventDefault();
        $('#uploadimage').click();
    });  
        
        
// Registration man
    var RegisterManButton  = jQuery('form.register-form-man .register-button');
    
    var RegInputGender     = jQuery('form.register-form-man \n\
                                               input[name=gender]').val();
    var RegInputEmail      = jQuery('form.register-form-man \n\
                                               input[name=register_email]');
    var RegPassField       = jQuery('form.register-form-man \n\
                                               input[name=register_password]');
    var RegFirstNameField  = jQuery('form.register-form-man \n\
                                               input[name=first_name]');
    var RegLastNameField   = jQuery('form.register-form-man \n\
                                               input[name=last_name]');
    var RegRegionField     = jQuery('form.register-form-man \n\
                                               input[name=region]');
    var RegDatepickerField = jQuery('form.register-form-man \n\
                                               input[name=datepicker]');
    var RegIsmariedField   = jQuery('form.register-form-man \n\
                                               select[name=ismaried]');
    var RegBodytypeField   = jQuery('form.register-form-man \n\
                                               select[name=bodytype]');
    
    var ManRegErrorsBlocks  = jQuery('form.register-form-man .error_registration'); 
        
    RegisterManButton.on('click', function(e){
                e.preventDefault();
                
          var regManValidation =   $.ajax({
              url: "/ajax",
              data: { 
                      registration: true,
                      gender:    RegInputGender,
                      email:     RegInputEmail.val(),
                      password:  RegPassField.eq(0).val(),
                      cpassword: RegPassField.eq(1).val(),
                      firstname: RegFirstNameField.val(),
                      lastname:  RegLastNameField.val(),
                      region:    RegRegionField.val(),
                      bdate:     RegDatepickerField.val(),
                      ismaried:  RegIsmariedField.val(),
                      bodytype:  RegBodytypeField.val(),
                    },
              type: "POST",
              async: false,
              success: function(data) {}
        }).responseText;
       
        var ManValidObj = JSON.parse(regManValidation);
        
          if(ManValidObj['flag'] == 'false')
          {
              ManRegErrorsBlocks.eq(0).text(ManValidObj['errormail']);
              ManRegErrorsBlocks.eq(1).text(ManValidObj['errorpass']);
              ManRegErrorsBlocks.eq(2).text(ManValidObj['errorcpass']);
              ManRegErrorsBlocks.eq(3).text(ManValidObj['errorfname']);
              ManRegErrorsBlocks.eq(4).text(ManValidObj['errorlname']);
              ManRegErrorsBlocks.eq(5).text(ManValidObj['errorregion']);
              ManRegErrorsBlocks.eq(6).text(ManValidObj['errorbdate']);
              ManRegErrorsBlocks.eq(7).text(ManValidObj['errorismaried']);
              ManRegErrorsBlocks.eq(8).text(ManValidObj['errorbodytype']);

          }
          else
          {
              $('.register-form-man').submit();
          }
    });

// Registration women
    var RegisterWomenButton     = jQuery('form.register-form-woman .register-button');
    var RegWomenInputGender     = jQuery('form.register-form-woman \n\
                                               input[name=gender]').val();
    var RegWomenInputEmail      = jQuery('form.register-form-woman \n\
                                               input[name=register_email]');
    var RegWomenPassField       = jQuery('form.register-form-woman \n\
                                               input[name=register_password]');
    var RegWomenFirstNameField  = jQuery('form.register-form-woman \n\
                                               input[name=first_name]');
    var RegWomenLastNameField   = jQuery('form.register-form-woman \n\
                                               input[name=last_name]');
    var RegWomenRegionField     = jQuery('form.register-form-woman \n\
                                               input[name=region]');
    var RegWomenDatepickerField = jQuery('form.register-form-woman \n\
                                               #datepicker-w');
    var RegWomenIsmariedField   = jQuery('form.register-form-woman \n\
                                               select[name=ismaried]');
    var RegWomenBreastField     = jQuery('form.register-form-woman \n\
                                               input[name=breast]');
    var RegWomenWaistField      = jQuery('form.register-form-woman \n\
                                               input[name=waist]');
    var RegWomenHipsField       = jQuery('form.register-form-woman \n\
                                               input[name=hips]');
    
    var WomenRegErrorsBlocks  = jQuery('form.register-form-woman .error_registration'); 
    
    RegisterWomenButton.on('click', function(e){
                e.preventDefault();
                
          var regWomenValidation =   $.ajax({
              url: "/ajax",
              data: { 
                      registration: true,
                      gender:    RegWomenInputGender,
                      email:     RegWomenInputEmail.val(),
                      password:  RegWomenPassField.eq(0).val(),
                      cpassword: RegWomenPassField.eq(1).val(),
                      firstname: RegWomenFirstNameField.val(),
                      lastname:  RegWomenLastNameField.val(),
                      region:    RegWomenRegionField.val(),
                      bdate:     RegWomenDatepickerField.val(),
                      ismaried:  RegWomenIsmariedField.val(),
                      breast:    RegWomenBreastField.val(),
                      waist:     RegWomenWaistField.val(),
                      hips:      RegWomenHipsField.val(),
                    },
              type: "POST",
              async: false,
              success: function(data) { }
        }).responseText;         
       
        var WomenValidObj = JSON.parse(regWomenValidation);
        
        if(WomenValidObj['flag'] == 'false')
        {
              WomenRegErrorsBlocks.eq(0).text(WomenValidObj['errormail']);
              WomenRegErrorsBlocks.eq(1).text(WomenValidObj['errorpass']);
              WomenRegErrorsBlocks.eq(2).text(WomenValidObj['errorcpass']);
              WomenRegErrorsBlocks.eq(3).text(WomenValidObj['errorfname']);
              WomenRegErrorsBlocks.eq(4).text(WomenValidObj['errorlname']);
              WomenRegErrorsBlocks.eq(5).text(WomenValidObj['errorregion']);
              WomenRegErrorsBlocks.eq(6).text(WomenValidObj['errorbdate']);
              WomenRegErrorsBlocks.eq(7).text(WomenValidObj['errorismaried']);
              WomenRegErrorsBlocks.eq(8).text(WomenValidObj['errorbreast']);
              WomenRegErrorsBlocks.eq(9).text(WomenValidObj['errorwaist']);
              WomenRegErrorsBlocks.eq(10).text(WomenValidObj['errorhips']);

        }
        else
        {
            $('.register-form-woman').submit();
        }
    });
    
    
    
// Edit women profile

    var EditWomenInputGender     = jQuery('form.edit-form-woman \n\
                                               input[name=gender]').val();
    var EditWomenInputEmail      = jQuery('form.edit-form-woman \n\
                                               input[name=register_email]');
    var EditWomenPassField       = jQuery('form.edit-form-woman \n\
                                               input[name=register_password]');
    var EditWomenFirstNameField  = jQuery('form.edit-form-woman \n\
                                               input[name=first_name]');
    var EditWomenLastNameField   = jQuery('form.edit-form-woman \n\
                                               input[name=last_name]');
    var EditWomenRegionField     = jQuery('form.edit-form-woman \n\
                                               input[name=region]');
    var EditWomenDatepickerField = jQuery('form.edit-form-woman \n\
                                               #datepicker-woman-edit');
    var EditWomenIsmariedField   = jQuery('form.edit-form-woman \n\
                                               select[name=ismaried]');
    var EditWomenBreastField     = jQuery('form.edit-form-woman \n\
                                               input[name=breast]');
    var EditWomenWaistField      = jQuery('form.edit-form-woman \n\
                                               input[name=waist]');
    var EditWomenHipsField       = jQuery('form.edit-form-woman \n\
                                               input[name=hips]');
    
    var WomenEditErrorsBlocks  = jQuery('form.edit-form-woman .error_registration'); 

    var UpdateWomenProfile = jQuery('form.edit-form-woman .update-button-w');
        UpdateWomenProfile.on('click', function(e){
            e.preventDefault();
            
          var editWomenValidation =   $.ajax({
              url: "/ajax",
              data: { 
                      edit:      true,
                      gender:    EditWomenInputGender,
                      email:     EditWomenInputEmail.val(),
                      password:  EditWomenPassField.eq(0).val(),
                      cpassword: EditWomenPassField.eq(1).val(),
                      firstname: EditWomenFirstNameField.val(),
                      lastname:  EditWomenLastNameField.val(),
                      region:    EditWomenRegionField.val(),
                      bdate:     EditWomenDatepickerField.val(),
                      ismaried:  EditWomenIsmariedField.val(),
                      breast:    EditWomenBreastField.val(),
                      waist:     EditWomenWaistField.val(),
                      hips:      EditWomenHipsField.val(),
                    },
              type: "POST",
              async: false,
              success: function(data) {}
        }).responseText;     
            
        var WomenValidObj = JSON.parse(editWomenValidation);
        
        if(WomenValidObj['flag'] == 'false')
        {
              WomenEditErrorsBlocks.eq(0).text(WomenValidObj['errormail']);
              WomenEditErrorsBlocks.eq(1).text(WomenValidObj['errorpass']);
              WomenEditErrorsBlocks.eq(2).text(WomenValidObj['errorcpass']);
              WomenEditErrorsBlocks.eq(3).text(WomenValidObj['errorfname']);
              WomenEditErrorsBlocks.eq(4).text(WomenValidObj['errorlname']);
              WomenEditErrorsBlocks.eq(5).text(WomenValidObj['errorregion']);
              WomenEditErrorsBlocks.eq(6).text(WomenValidObj['errorbdate']);
              WomenEditErrorsBlocks.eq(7).text(WomenValidObj['errorismaried']);
              WomenEditErrorsBlocks.eq(8).text(WomenValidObj['errorbreast']);
              WomenEditErrorsBlocks.eq(9).text(WomenValidObj['errorwaist']);
              WomenEditErrorsBlocks.eq(10).text(WomenValidObj['errorhips']);
        }
        else
        {
             jQuery('.edit-form-woman').submit();
        }
            
    });
    
// Edit man profile

    var EditInputGender     = jQuery('form.edit-form-man \n\
                                               input[name=gender]').val();
    var EditInputEmail      = jQuery('form.edit-form-man \n\
                                               input[name=register_email]');
    var EditPassField       = jQuery('form.edit-form-man \n\
                                               input[name=register_password]');
    var EditFirstNameField  = jQuery('form.edit-form-man \n\
                                               input[name=first_name]');
    var EditLastNameField   = jQuery('form.edit-form-man \n\
                                               input[name=last_name]');
    var EditRegionField     = jQuery('form.edit-form-man \n\
                                               input[name=region]');
    var EditDatepickerField = jQuery('form.edit-form-man \n\
                                               input[name=datepicker]');
    var EditIsmariedField   = jQuery('form.edit-form-man \n\
                                               select[name=ismaried]');
    var EditBodytypeField   = jQuery('form.edit-form-man \n\
                                               select[name=bodytype]');

    var ManEditErrorsBlocks  = jQuery('form.edit-form-man .error_registration'); 

    var UpdateManProfile = jQuery('form.edit-form-man .update-button-m');
        UpdateManProfile.on('click', function(e){
            e.preventDefault();
                
          var editManValidation =   $.ajax({
                    url: "/ajax",
                    data: { 
                            edit: true,
                            gender:    EditInputGender,
                            email:     EditInputEmail.val(),
                            password:  EditPassField.eq(0).val(),
                            cpassword: EditPassField.eq(1).val(),
                            firstname: EditFirstNameField.val(),
                            lastname:  EditLastNameField.val(),
                            region:    EditRegionField.val(),
                            bdate:     EditDatepickerField.val(),
                            ismaried:  EditIsmariedField.val(),
                            bodytype:  EditBodytypeField.val(),
                          },
                    type: "POST",
                    async: false,
                    success: function(data) {  }
              }).responseText;
            
          var editManValidObj = JSON.parse(editManValidation);
        
          if(editManValidObj['flag'] == 'false')
          {
              ManEditErrorsBlocks.eq(0).text(editManValidObj['errormail']);
              ManEditErrorsBlocks.eq(1).text(editManValidObj['errorpass']);
              ManEditErrorsBlocks.eq(2).text(editManValidObj['errorcpass']);
              ManEditErrorsBlocks.eq(3).text(editManValidObj['errorfname']);
              ManEditErrorsBlocks.eq(4).text(editManValidObj['errorlname']);
              ManEditErrorsBlocks.eq(5).text(editManValidObj['errorregion']);
              ManEditErrorsBlocks.eq(6).text(editManValidObj['errorbdate']);
              ManEditErrorsBlocks.eq(7).text(editManValidObj['errorismaried']);
              ManEditErrorsBlocks.eq(8).text(editManValidObj['errorbodytype']);

          }
          else
          {
              jQuery('form.edit-form-man').submit();
          }
            
        });
    
    // Member authorization
    var LoginEmailField = jQuery('.login-form input#email');
    var LoginPasslField = jQuery('.login-form input#password');
    var LoginErrorBox   = jQuery('#error-box ul');
   
    jQuery('.login-form .login-button').click(function(){

        LoginErrorBox.html('');
        
            $.post("/ajax", 
            { 
                auth: true, 
                email: LoginEmailField.val(),
                pass:LoginPasslField.val() 
            },
                function(data){
                    
                   var LoginErrorObj = JSON.parse(data);
                    
                        if(LoginErrorObj['flag'] == 'false')
                        {
                            if(LoginErrorObj['errormail'] != '')
                            {
                                LoginErrorBox.append("<li>" + 
                                        LoginErrorObj['errormail'] + "</li>");
                            }
                            if(LoginErrorObj['errorpass'] != '')
                            {
                                LoginErrorBox.append("<li>" + 
                                        LoginErrorObj['errorpass'] + "</li>");
                            }
                            if(LoginErrorObj['errormatch'] != '')
                            {
                                LoginErrorBox.append("<li>" + 
                                        LoginErrorObj['errormatch'] + "</li>");
                            }
                        }
                        else
                        {
                            jQuery('form.login-form').submit();
                        }
            }, "text");
            return false;
     });       
    

});