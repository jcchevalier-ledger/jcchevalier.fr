const regExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
const button = document.getElementById('form-button');
const bodyMessage = document.getElementById('body');
const email = document.getElementById('email');
const invalidFeedbackEmail = document.getElementById('invalid-feedback-email');
const invalidFeedbackBody = document.getElementById('invalid-feedback-message');

button.addEventListener("click", function () {

    if (button.classList.contains("contact-me")) {
        $(".collapse").collapse("show");
        window.location.hash = '#contact-me';
        button.innerHTML = 'Send !';
        button.classList.remove("contact-me");
        button.classList.add("send");
    } else if (button.classList.contains("send")) {
        removePreviousResults();
        $.post(
            "api/contact_me",
            {
                email: document.form1.email.value,
                body: document.form1.body.value
            }, function () {
                document.form1.reset();
                button.classList.add("contact-me");
                button.classList.remove("send");
                $(".collapse").collapse("hide");
                button.innerHTML = 'Contact me';
                $("#thank-you").modal("show");
            })
            .fail(function (xhr) {
                const errorMessage = JSON.parse(xhr.responseText);
                if (!(errorMessage.body == null)) {
                    invalidFeedbackBody.innerHTML = errorMessage.body;
                    invalidInput(bodyMessage);
                }
                if (!(errorMessage.email == null)) {
                    invalidFeedbackEmail.innerHTML = errorMessage.email;
                    invalidInput(email);
                }
            });
    }
});

document.addEventListener('keydown', function (event) {

    if (event.code === 'Escape') {
        button.classList.remove("disabled");
        button.setAttribute("data-original-title", "");
        button.setAttribute("title", "");
        button.classList.add("contact-me");
        button.classList.remove("send");
        $(".collapse").collapse("hide");
        button.innerHTML = 'Contact me';
        $("#thank-you").modal("hide");
    }
});

function invalidInput(item) {
    item.classList.add('invalid-input');
    item.classList.remove('valid-input');
}

function validInput(item) {
    item.classList.add('valid-input');
    item.classList.remove('invalid-input');
}

function removePreviousResults() {
    email.classList.remove('invalid-input');
    email.classList.remove('valid-input');
    bodyMessage.classList.remove('invalid-input');
    bodyMessage.classList.remove('valid-input');
    invalidFeedbackBody.innerHTML = "";
    invalidFeedbackEmail.innerHTML = "";
}
