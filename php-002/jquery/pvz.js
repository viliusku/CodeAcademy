$.validator.addMethod("regex", function(value, element, regexp) { // add validation method
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
    },
    "Please check your input"
);

var validator = $(form).validate({
    rules: {
        'aaa': {
            regex: '^\\\d+([.]\\\d+)?$'
        }
    },
    messages: {
        'aaa': { regex: "Please enter valid value" }
    }
});