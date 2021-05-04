$(function() {
    var $customers = $('#customers');
    var $name = $('#name');
    var $email = $('#email');
    var $phone = $('#phone');

    $.ajax({
        type: 'GET',
        url: '/api/customers.json',
        success: function(customers) {
            $.each(customers, function(i, customer) {
                $customers.append(
                    `
                    <tr>
                    <td>${customer.name}</td>
                    <td>${customer.email}</td>
                    <td>${customer.phone}</td>
                    </tr>
                    `
                );
                //console.log(customer)
            });
        },
        error: function() {
            var div = $('.result');
            div.append(
                `
                <h5 class = 'alert alert-danger'>
                The data could not be loaded!
                </h5>
                `
            );
        }

    });
    $('#add-customer').on('click', function() {
        var newCustomer = {
            name: $name.val(),
            email: $email.val(),
            phone: $phone.val()
        };

        $.ajax({
            type: 'POST',
            url: './api/create.php',
            data: newCustomer,
            dataType: 'json',
            cache: false,
            sucess: function(addNew) {
                `
                <tr>
                <td>${addNew.name}</td>
                <td>${addNew.email}</td>
                <td>${addNew.phone}</td>
                
                </tr>
                `
            },
            error: function() {
                var div = $('.result');
                div.append(
                    `
                <h5 class = 'alert alert-danger'>
                The Data could not be saved
                </h5>
                `
                );
            }

        })
        console.log(newCustomer);
    })
})