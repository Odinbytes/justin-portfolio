document.addEventListener('DOMContentLoaded', function () {
	const contactForm = document.getElementById('contact-form');

	contactForm.addEventListener('submit', function (e) {
		e.preventDefault();

		// Collect form data
		const formData = new FormData(contactForm);

		// Send form data to the server
		fetch('process_contact_form.php', {
			method: 'POST',
			body: formData,
		})
			.then((response) => response.json())
			.then((data) => {
				if (data.success) {
					alert('Message sent successfully!');
					contactForm.reset();
				} else {
					alert('Message sending failed. Please try again later.');
				}
			})
			.catch((error) => {
				console.error('Error:', error);
			});
	});
});
