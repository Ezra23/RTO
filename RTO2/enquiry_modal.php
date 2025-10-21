 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brighton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

 <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">

              <div class="modal-header">
                <h4 class="modal-title">Enquiry Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <form id="enquiryForm" novalidate> 
              <div class="modal-body">
                <p>Fill out the form below to request more information about our courses.</p>
                <div id="formMessage"></div>
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                        <div id="nameError" class="form-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                        <div id="emailError" class="form-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course of Interest</label>
                        <select class="form-select" id="course">
                            <option value="ICTWEB441">Diploma of Information Technology (Cyber Security)</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4"></textarea>
                    </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit Enquiry</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
              </form> </div>
          </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('enquiryForm').addEventListener('submit', function (event) {
            event.preventDefault();
            let name = document.getElementById('name').value.trim();
            let email = document.getElementById('email').value.trim();
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let nameError = document.getElementById('nameError');
            let emailError = document.getElementById('emailError');
            let formMessage = document.getElementById('formMessage');
            let isValid = true;

            nameError.textContent = '';
            emailError.textContent = '';
            formMessage.textContent = '';

            if (!name) {
                nameError.textContent = 'Name is required.';
                isValid = false;
            }
            if (!email) {
                emailError.textContent = 'Email is required.';
                isValid = false;
            } else if (!emailPattern.test(email)) {
                emailError.textContent = 'Please enter a valid email address.';
                isValid = false;
            }

            if (isValid) {
                formMessage.innerHTML = '<div class="alert alert-success">Form submitted successfully!</div>';
                // In a real scenario, send form data to a server here
                document.getElementById('enquiryForm').reset();
            }
        });
    </script>