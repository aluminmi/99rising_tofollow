document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");

    var submitBtn = document.querySelector("input[type='submit']");

    var isSubmitting = false;

    var inputs = document.querySelectorAll("input, textarea");

    inputs.forEach(function(input) {
        input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();

                var currentIndex = Array.from(inputs).indexOf(input);

                var nextIndex = currentIndex + 1;
                if (nextIndex < inputs.length) {
                    var nextInput = inputs[nextIndex];

                    nextInput.focus();
                }
            }
        });
    });

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        if (isSubmitting) {
            return;
        }

        isSubmitting = true;

        submitBtn.disabled = true;

        validateAndSendMessage();
    });
});

function validateAndSendMessage() {
    var name = document.querySelector("#name").value;
    var email = document.querySelector("#email").value;
    var subject = document.querySelector("#subject").value;
    var message = document.querySelector("#message").value;

    if (!name.trim() || !email.trim() || !subject.trim() || !message.trim()) {
        alert("Please fill in all the required fields.");
        document.querySelector("input[type='submit']").disabled = false;
        isSubmitting = false;
    } else  {
        sendMessage(name, email, subject, message);
    }
}

function sendMessage(name, email, subject, message) {
    (function() {
        emailjs.init("u0wVBYv4oVGF8zSpr");
    })();

    var serviceID = "service_16f3yht";
    var templateID = "template_askmjxh";

    var params = {
        sendername: name,
        senderemail: email,
        subject: subject,
        message: message
    };

    emailjs.send(serviceID, templateID, params)
        .then(res => {
            alert('Thank you, ' + name + '! Your message has been sent.');
            document.querySelector("input[type='submit']").disabled = false;
            isSubmitting = false;
            window.location.reload();
        })
        .catch(error => {
            console.error('Failed to send email. Error:', error);
            alert('Sorry, an error occurred while sending your message. Please try again later.');
            document.querySelector("input[type='submit']").disabled = false;
            isSubmitting = false;
            window.location.reload();
        });
}
