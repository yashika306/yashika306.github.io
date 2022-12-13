const validation = new JustValidate("#signupform");

validation
    .addField("#name", [
        {
            rule: "required"
        }
    ])
    .addField("#email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        }
        // {
        //     validator: (value) => () => {
        //         return fetch("validateEmail.php?email=" + encodeURIComponent(value))
        //                .then(function(response) {
        //                    return response.json();
        //                })
        //                .then(function(json) {
        //                    return json.available;
        //                });
        //     },
        //     errorMessage: "email already taken"
        // }
    ])
    .addField("#password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    .addField("#c_password", [
        {
            validator: (value, fields) => {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "Passwords should match"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("signupform").submit();
    });