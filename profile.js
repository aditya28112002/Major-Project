function sendEmail(event) {
    event.preventDefault();

    const form = document.getElementById("joinUsForm");
    const formData = new FormData(form);
    const serviceType = document.getElementById("serviceType").value; // Get the selected service type

    // Redirect based on selected service type
    let redirectUrl;
    switch (serviceType) { 
        case "Carpenter":
            redirectUrl = "carpainter.html";
            break;
        case "Painter":
            redirectUrl = "painter.html";
            break;
        case "Electrician":
            redirectUrl = "electrician.html";
            break;
        case "Plumber":
            redirectUrl = "plumber.html";
            break;
        default:
            redirectUrl = "index.html"; // Fallback
    }

    // Store form data in local storage
    localStorage.setItem("fullName", formData.get("fullName"));
    localStorage.setItem("email", formData.get("email"));
    localStorage.setItem("serviceType", serviceType);
    localStorage.setItem("workExperience", formData.get("workExperience"));
    localStorage.setItem("mobileNumber", formData.get("mobileNumber"));
    localStorage.setItem("price", formData.get("price"));
    localStorage.setItem("servicesList", formData.get("servicesList"));

    emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", {

        user_name: formData.get("fullName"),
        user_email: formData.get("email"),
        user_service: serviceType,
        user_experience: formData.get("workExperience"),
        user_phone: formData.get("mobileNumber"),
        user_charges: formData.get("price"),
        user_services: formData.get("servicesList")
    })
    .then((response) => {
        alert("Your form has been successfully submitted!");
        form.reset();
        window.location.href = redirectUrl; // Redirect to the appropriate page
    })
    .catch((error) => {
        alert("There was an error sending the form. Please try again later.");
        console.error("EmailJS error:", error);
    });
}
