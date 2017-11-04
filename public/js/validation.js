/*
    Library for validation
    Requires jQuery

    Functionality:
    1) Real time validation of values in inputs
    2) Validation in case of submitting the form
*/

/*
    Decomposed problem:
    1)Select input to listen for changes
    2)Get actual value of input
    3)Determine type of validation
    4)Do the validation
    5)Show the results of validation
*/

function Validator(form)
{
    var self = this;

    this.form = form;

    this.form.find('input').keyup(function(){

        self.validateInput($(this));
        
    });

    this.form.find('input').change(function(){
        self.validateInput($(this));   
    });

    this.form.submit(function(e){
        validator.validateForm();
        if(!valid){
            e.preventDefault();//This makes the button (e) stop submitting stuff
        }
    });
};

Validator.prototype = {
    form : null,
    
    info : function() {
        return 'I am validator of ' + this.form.attr('id');
    },
    
    validateInput : function(input)
    {
        var value = input.val();
        var validate = input.data('validate');
    
        var valid = true;

        valid = this.validators[validate](value);
        this.showValidation(input,valid);
        //do the validation
        
        return valid;
    },

    validateForm: function(){
        var validator = this; 
        var valid = true;
        this.form.find('input').each(function(){
            valid = validator.validateInput($(this)) && valid;
        });
        return valid;
    },

    validators: {
        name: function(value){
            return value.length >= 3;
        },
        age: function(value){
            return !isNaN(value) && value > 13;
        },
        email: function(value){
            return value.indexOf('@') != -1;
        },
        year: function(value){
            return !isNaN(value) && value.length >= 4;
        }
    },

    showValidation : function(input, valid){
        if(valid)
        {
            input.removeClass('is-invalid');
            input.siblings('.invalid-feedback').remove();            
        } 
        else
        {
            input.addClass('is-invalid');
            if(input.siblings('.invalid-feedback').length == 0)
            {
                input.after('<div class="invalid-feedback">Please provide a valid value</div>');
            }
        }
    }
};