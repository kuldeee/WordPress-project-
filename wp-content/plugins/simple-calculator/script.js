jQuery(document).ready(function ($) {
    $('#calculate-btn').click(function () {
        let num1 = parseFloat($('#num1').val());
        let num2 = parseFloat($('#num2').val());
        let operator = $('#operator').val();
        let result = 0;

        if (operator === '+') result = num1 + num2;
        else if (operator === '-') result = num1 - num2;
        else if (operator === '*') result = num1 * num2;
        else if (operator === '/') result = num1 / num2;

        $('#result').text('Result: ' + result);
    });
});
